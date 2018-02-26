<?php 
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel{
	public $name = "User";

	public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
      $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
	}


	public $Validate = array(
		'username' => array(
			'required' => array(
        'rule' => array('notEmpty'),
        'message' => 'A username is required'
      )  
		),
		'password' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A senha deve ser preenchida!'
			)		
		)
	);


}