<?php 
App::uses('AuthComponent', 'Controller/Component');
class Page extends AppModel{
	public $name = "Page";

	
	public $belongsTo = array(
		'Category' => array(
			'className' => 'category',
			'foreignKey' => 'category_id'
		)
	);

}