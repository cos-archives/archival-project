<?php
App::uses('AppController', 'Controller');
class CodedpapersController extends AppController {
	function isAuthorized($user = null, $request = null) {

		$req_action = $this->request->params['action'];
		if(in_array($req_action, array('view', 'add', 'index_mine', 'index','moretests','morestudies','compare'))) return true;
		# viewing and adding is allowed to all users. comparing, indexing and adding empty stuff too.


		$codedpaper_id = $this->request->params['pass'][0];
		$this->Codedpaper->id = $codedpaper_id;
		if (!$this->Codedpaper->exists()) {
		    throw new NotFoundException('Invalid coded paper');
		}
		else {
			$allowed = $this->Codedpaper->find('first',array(
				"recursive" => -1,
				"conditions" => array(
					'user_id' => $this->Auth->user('id'),
					'id' => $codedpaper_id
					)
				));
			if( $allowed['Codedpaper']['user_id'] == $this->Auth->user('id')) { # is this the creator of the coded paper
				return true;
			}
		}

		return parent::isAuthorized($user); # allow admins to do anything
	}
	public function add ($id = NULL) {

		$this->Codedpaper->create();
		$this->Codedpaper->Paper->id = $id;

		if (!$this->Codedpaper->Paper->exists()) {
		    throw new NotFoundException('Invalid paper');
		}

		$insertcp = $this->Codedpaper->createDummy($id,$this->Auth->user('id'));
		$this->Session->setFlash($insertcp['message'],$insertcp['alert']);
		$cid = $insertcp['cid'];
		if($cid !== null)
			$this->redirect('entry/'.$cid);
		else
			$this->redirect('index/');
		exit;
	}
	public function entry($id = NULL)
	{
		// Add custom form field helper
		$this->helpers[] = 'FormField';

		// Set the object in $this->Codedpaper to the Codedpaper we're looking at.
		$this->Codedpaper->id = $id;

		// Codedpapers should be added through the above "add" action.
		if (!$this->Codedpaper->exists())
		    throw new NotFoundException('Invalid coded paper');

		// Add list of referenced papers to the view.
		$this->set(array('referenced_papers' => $this->Codedpaper->Study->getReplicable($id)));

		// Attempt to save any submitted info
		if ($this->request->is('put') OR $this->request->is('ajax'))
		{

			// each study
			for($i=0; $i<sizeof($this->request->data['Study']); $i++)
			{
				// each test
				for($j=0; $j<sizeof($this->request->data['Study'][$i]['Test']); $j++)
				{
					if( is_array($this->request->data['Study'][$i]['Test'][$j]['methodology_codes']) )
					{
						// join the selected values into a comma-separated string
						$this->request->data['Study'][$i]['Test'][$j]['methodology_codes'] = implode(
							$this->request->data['Study'][$i]['Test'][$j]['methodology_codes'],
							','
						);
					}
				}
			}

			if($this->Codedpaper->saveAssociated($this->request->data, array("deep" => TRUE)	))
			{
				$msg = __('Study saved.');
				$kind = 'alert-info';
			}
			else {
				$msg = __('Study could not be saved!');
				$kind = 'alert-error';
			}

			$this->Session->setFlash($msg,$kind);

			// Handle validation errors (if any) resulting from save.
			$errors = array_unique(Set::flatten($this->Codedpaper->validationErrors));
			if(!empty($errors))
			{
				function inc($matches) {
				    return ++$matches[1];
				}

				foreach($errors AS $field => $error) {
					$field =  preg_replace_callback( "|(\d+)|", "inc", $field);
					$field = Inflector::humanize(str_replace("."," ",$field));

					$msg .= "<br>". $field . ": ". $error;
				}
			}
		}


		if ($this->request->is('ajax')) {
			$this->set(compact('msg','kind'));
			$this->render('message');
		} else {
			if( isset($msg) ) {
				$this->Session->setFlash($msg,$kind);
			}

			$this->request->data = $this->Codedpaper->findDeep($id);
		}
	}

	public function compare ($id1 = NULL, $id2 = NULL) {
		if (!$this->Codedpaper->exists($id1))
		    throw new NotFoundException('First paper does not exist.');
		if (!$this->Codedpaper->exists($id2))
		    throw new NotFoundException('Second paper does not exist.');
		if($this->Codedpaper->field('paper_id',array('id' => $id1))!== $this->Codedpaper->field('paper_id',array('id' => $id2)))
			throw new NotFoundException('These are codings of two different papers.');
		if($this->Codedpaper->field('completed',array('id' => $id1))==false OR $this->Codedpaper->field('completed',array('id' => $id2))==false)
			throw new NotFoundException('One of these papers is not yet marked as completely coded.');

		$comparison = $this->Codedpaper->compare($id1,$id2);
		$this->set('c1',$comparison[0]);
		$this->set('c2',$comparison[1]);
		$this->set('keys',$comparison[2]);
	}
	public function view($id = null) {
		$this->Codedpaper->id = $id;

		if (!$this->Codedpaper->exists()) {
		    throw new NotFoundException('Invalid coded paper');
		}
		$this->request->data = $this->Codedpaper->findDeep($id);

		$referenced_papers = $this->Codedpaper->Study->getReplicable($id);

		$onlyView = true;

		$this->set(compact('referenced_papers','onlyView'));

		$this -> render('entry'); ## added a couple of hooks in code.ctp
	}
	public function index_mine() {
		$this->set('codedpapers', $this->Codedpaper->find('all',
			array('conditions' =>
				array('user_id' => $this->Auth->user('id')),
				'recursive' => 1
			)
		));
	}
	public function index() {
		$this->set('codedpapers', $this->Codedpaper->find('all',
			array(
				'recursive' => 1
			)
		));
	}
}
