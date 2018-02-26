<?php

App::uses('AppController', 'Controller');
class SeoController extends AppController {
	public $uses = array();  
    public $components = array('RequestHandler'); 

    public function beforeFilter() {
      parent::beforeFilter();
      $this->Auth->allow('robots');
  }


    public function robots(){
    	$this->layout = 'ajax';
    }

}