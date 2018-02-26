<?php

App::uses('AppController', 'Controller');
class CategoriesController extends AppController {
	public $uses = array("Category");  
    public $components = array('RequestHandler'); 

    

    public function index(){
    	$this->layout = 'admin';
    	
    	$this->set("description","Categorias");
    }


    public function add(){
    	$this->layout = 'admin';

    	$this->set("form_action", "add");
    	$this->set("description","Adicionar Categorias");
    }






}