<?php

App::uses('AppController', 'Controller');
class HomeController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array("Email");

	public function beforeFilter() {
      parent::beforeFilter();
      $this->Auth->allow('index');
  }

	public function index(){

		$this->set("description", "Home");
	}


}