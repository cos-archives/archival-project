<?php
class StudiesController extends AppController {
	function isAuthorized($user = null, $request = null) {
		$admin = parent::isAuthorized($user); # allow admins to do anything
		if($admin) return true;

		if( $this->request->params['action'] == 'associate' ) {
			return true;
		}

		$study_id = $this->request->params['pass'][0];
		$this->Study->id = $study_id;


		if( in_array($this->request->params['action'], array('shell', 'delete')) )
		{
			//TODO: Restrict this so unauthorized users can't create new studies.
			return true;
		} elseif ( !$this->Study->exists() )
		{
		    throw new NotFoundException('Invalid study');
		}
		else
		{
			$allowed = $this->Study->find('first',array(
				"recursive" => 1,
				"conditions" => array(
					'Codedpaper.user_id' => $this->Auth->user('id'),
					'Study.id' => $study_id
				)
			));
			if( $allowed['Codedpaper']['user_id'] == $this->Auth->user('id')) { # is this the creator of the coded paper
				return true;
			}
		}
	}

	public function delete($id = null) {
		$this->Study->id = $id;
		if (!$this->request->is('ajax')) $ajax = TRUE; else $ajax = FALSE;

		if (!$this->Study->exists()) {
			throw new NotFoundException(__('Invalid study'));
		}
		if ($this->Study->delete()) {
			if($ajax) {
			    $this->Session->setFlash(__('Study deleted'));
			    $this->redirect("/codedpapers/index_mine");
			} else {
			    echo 'Study deleted';
				exit;
			}
		}
		$this->Session->setFlash(__('Study was not deleted'));
	    $this->redirect("/codedpapers/index_mine");
	}

	public function add($codedpaper_id) {
		$this->layout = null;

		$this->Study->save(array('codedpaper_id'=>$codedpaper_id), False);
		$this->request->data['Study'] = $this->Study->read(null, $this->Study->data['id']);

		$this->render('/Elements/ajax_response');
	}

	public function shell($codedpaper_id, $i) {
		$this->layout = null;
		$this->uses = array('Study', 'Test');

		// Require that this be an Ajax request.
		if(!$this->request->is('ajax')) {
			throw new NotFoundException();
		}

		// Create a new Study object
		$this->Study->create();

		// Save it, containing only the reference to the Codedpaper
		$this->Study->save(
			array('codedpaper_id'=>$codedpaper_id),
			False
		);

		// Create a new Test object
		$this->Test->save(
			array('study_id'=>$this->Study->getInsertID()),
			False
		);

		$response = $this->Study->find('first',
			array(
				'recursive' => 3,
				'contain' => array(
					'Test'
				),
				'conditions' => array(
					'id' => $this->Study->getInsertID()
				)
			)
		);

		$this->request->data = array(
			'Study' => array($response['Study'])
		);

		$this->request->data['Study'][0]['Test'] = array(
			$response['Test'][0]
		);

		$this->set(array(
			'i' => $i,
			'study' => $this->request->data['Study'][0]
		));

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


		// Get the study being reviewed
		$review = $this->Study->find('first', array(
			'recursive' => -1,
			'conditions' => array(
				'Study.id' => $this->request->data['review'],
			)
		));

		if ( array_key_exists('reviewed', $this->request->data ) ) {
			$reviewedIds = $this->request->data['reviewed'];
		} else {
			$reviewedIds = array();
		}

		$this->Study->id = intval($this->request->data['review']);

		$oldReviewedIds = array_keys(
			$this->Study->ReviewOf->find(
				'list',
				array(
					'fields' => array('id'),
					'conditions' => array(
						'ReviewOf.reviewed_id' => $this->Study->id
					),
					'recursive' => 0,
				)
			)
		);

		$removed = array_diff($oldReviewedIds, $reviewedIds);
		$this->Study->updateAll(
			array('Study.reviewed_id' => null),
			array('Study.id' => $removed)
		);

		$added = array_diff($reviewedIds, $oldReviewedIds);
		$this->Study->updateAll(
			array('Study.reviewed_id' => $review['Study']['id']),
			array('Study.id' => $added)
		);

	}

}