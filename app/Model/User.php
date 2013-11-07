<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Group $Group
 * @property Codedpaper $Codedpaper
 */
class User extends AppModel {

	public $virtualFields = array(
		'coded_papers_complete' => '(select coalesce(sum(completed), 0) from codedpapers WHERE user_id = User.id)',
		'coded_papers_incomplete' => '(select coalesce(count(*) - sum(completed), 0) from codedpapers WHERE user_id = User.id)'
	);

	 public $components = array(
			'Session',
			'Security', # the one addition
	        'Auth' => array('authorize' => array(
		'Controller' =>
			array(
				'userModel' => 'User',
		'		recursive' => 3)
		)), # Controller means that the controller's function isAuthorized will be called
			'RequestHandler'
			);
	public function beforeSave($options = array()) {
		if (isset($this->data['User']['password'])) {
            $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']); ## hash
		}
		if (isset($this->data['User']['hashed_reset_token']))
        	$this->data['User']['hashed_reset_token'] = AuthComponent::password($this->data['User']['hashed_reset_token']); ## hash
        return true;
	}
	public function generateResetToken($id) {
		$reset_token = md5(mt_rand()*mt_rand());
		$this->read(null,$id);
		$this->set(array(
			'hashed_reset_token' => $reset_token,
			'reset_token_expiration' => date('Y-m-d H:i:s',strtotime("+2 days")),
		));
		if($this->save())
			return $reset_token;
		else
			return false;
	}
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'group_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array('email' => array(
			'rule' => 'email',
			'message' => 'Please provide a valid email address',
			'allowEmpty' => false,
			'on' => 'create', // Limit validation to 'create' or 'update' operations
		)),
		'username' => array('isUnique' => array(
			'rule' => 'isUnique',
			'message' => 'This username is already taken. Please choose another one.',
			'on' => 'create', // Limit validation to 'create' or 'update' operations

		)),
		'affiliated_institution' => array(
	        'rule' => 'notEmpty',
			'required' => true,
            'allowEmpty' => true,
			'on' => 'create', // Limit validation to 'create' or 'update' operations

	    ),
		'occupation' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'allowEmpty' => true,
			'on' => 'create', // Limit validation to 'create' or 'update' operations
		   ),
		'your_expertise' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'allowEmpty' => true,
			'on' => 'create', // Limit validation to 'create' or 'update' operations
		   ),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Codedpaper' => array(
			'className' => 'Codedpaper',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
