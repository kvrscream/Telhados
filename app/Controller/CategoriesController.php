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
    		$this->Category->create();
    		if($this->Category->save($this->request->data)){
    			$this->Session->setFlash(__("Salvo com sucesso!"), "default", array("class" => "alert alert-success"));
        		$this->redirect(["action" => "index"]);
    		} else {
    			$this->Session->setFlash(__("Ocorreu um erro ao tentar salvar!"), "default", array("class" => "alert alert-danger"));
    		}
    	}

    	$this->set("form_action", "add");
    	$this->set("description","Adicionar Categorias");
    }



    public function delete($id=null){
    	if($this->Category->delete($id)){
			$this->redirect("index");
		}
    }


}