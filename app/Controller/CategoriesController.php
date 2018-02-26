<?php

App::uses('AppController', 'Controller');
class CategoriesController extends AppController {
	public $uses = array("Category");  
    public $components = array('RequestHandler'); 

    

    public function index(){
    	$this->layout = 'admin';

    	$dados = $this->Category->find("all");

    	$this->set(compact("dados"));
    	$this->set("description","Categorias");
    }


    public function add(){
    	$this->layout = 'admin';

    	if($this->request->is('post')){
    		debug($this->request->data);die;
    	}

    	$this->set("form_action", "add");
    	$this->set("description","Adicionar Categorias");
    }






}