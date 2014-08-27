<?php
App::uses('AppController', 'Controller');
class TestsController extends AppController {
	function isAuthorized($user = null, $request = null) {
		$admin = parent::isAuthorized($user); # allow admins to do anything
		if($admin) return true;

		if( $this->request->params['action'] == 'associate' ) {
			return true;
		}

		$req_action = $this->request->params['action'];

		$test_id = $this->request->params['pass'][0];
		$this->Test->id = $test_id;
		if( in_array($this->request->params['action'], array('shell', 'delete')) )
		{
			//TODO: Restrict this so unauthorized users can't create new tests.
			return true;
		}
		else if (!$this->Test->exists())
		{
		    throw new NotFoundException('Invalid test');
		}
		else
		{
			$allowed = $this->Test->find('first',array(
				"recursive" => 3,
				"conditions" => array(
					'Test.id' => $test_id
					)
				));
			if( $allowed['Effect']['Study']['Codedpaper']['user_id'] == $this->Auth->user('id')) { # is this the creator of the coded paper
				return true;
			}
		}
		return false;
	}
	public function delete($id = null) {
		$this->Test->id = $id;
		if (!$this->Test->exists()) {
			throw new NotFoundException(__('Invalid Test'));
		}

		$msg = 'Test not deleted.';
		$kind = 'alert-error';

		if ($this->Test->delete()) {
			$msg = __('Test deleted');
			$kind = 'alert-info';
			$goto = "/codedpapers/index_mine";
		}

		if (!$this->request->is('ajax')) {
			if(isset($msg) ) $this->Session->setFlash($msg,$kind);
			if(isset($goto)) $this->redirect($goto);
		}
		else {
			$this->set(compact('msg','kind'));
			$this->render('/Codedpapers/message');
		}
	}
	public function shell($study_id=null, $s=null, $t=null) {
		// Require that this be an Ajax request.
		if(!$this->request->is('ajax')) {
			throw new NotFoundException();
		}

		// both $s and $t must be set
		if($s===null or $t===null) {
			$this->redirect('/');
		}

		//Since this is an Ajax request, no layout should be used
		$this->layout = null;

		// Create a new Test object
		$this->Test->create();

		$this->Test->save(
			array('study_id'=>$study_id),
			False
		);
		$this->Test->read();

		$test = $this->Test->data['Test'];

		$this->set(compact('s', 't', 'test'));

	}

	public function associate() {

		// Require that this be an Ajax request.
		if(!$this->request->is('ajax')) {
			throw new NotFoundException();
		}

		if ( !(
				array_key_exists('review', $this->request->data)
		//		&& array_key_exists('reviewed', $this->request->data)
		) ) {
			throw new BadRequestException();
		}


		// Get the test being reviewed
		$review = $this->Test->find('first', array(
			'recursive' => -1,
			'conditions' => array(
				'Test.id' => $this->request->data['review'],
			)
		));

		if ( array_key_exists('reviewed', $this->request->data ) ) {
			$reviewedIds = $this->request->data['reviewed'];
		} else {
			$reviewedIds = array();
		}

		$this->Test->id = intval($this->request->data['review']);

		$oldReviewedIds = array_keys(
			$this->Test->ReviewOf->find(
				'list',
				array(
					'fields' => array('id'),
					'conditions' => array(
						'ReviewOf.reviewed_id' => $this->Test->id
					),
					'recursive' => 0,
				)
			)
		);

		$removed = array_diff($oldReviewedIds, $reviewedIds);
		$this->Test->updateAll(
			array('Test.reviewed_id' => null),
			array('Test.id' => $removed)
		);

		$added = array_diff($reviewedIds, $oldReviewedIds);
		$this->Test->updateAll(
			array('Test.reviewed_id' => $review['Test']['id']),
			array('Test.id' => $added)
		);

	}
}
