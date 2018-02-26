<?php

App::uses('AppController', 'Controller');
class ProductsController extends AppController {
	public $helpers = array('Html', 'Form');
	public $uses = ["Product"];


	public function index(){
		$this->layout = "admin";
		$dados = $this->Product->Find("all");

		$this->set("description", "Telhados");
		$this->set(compact("dados"));
	}

	public function add(){
		$this->layout = "admin";
		if($this->request->is("post")){

			//Move o arquivo da TMP para o img do webroot
			move_uploaded_file(
  		  $this->request->data['Product']['image']['tmp_name'],
    		WWW_ROOT.'/img/' . basename($this->request->data['Product']['image']['name'])
			);

			$this->request->data['Product']['image'] = $this->request->data['Product']['image']['name'];

			if($this->Product->save($this->request->data)){
				$this->Session->setFlash(__("Salvo com sucesso!"), "default", array("class" => "alert alert-success"));
        $this->redirect(["action" => "edit/".$this->Product->id]);
			} else {
				$this->Session->setFlash(__("Ocorreu um erro ao tentar salvar!"), "default", array("class" => "alert alert-danger"));
			}

		}
		$this->set("form_action", "add");
		$this->set("description", "Adicionar Telhados");
	}


	public function edit($id=null){
		$this->layout = "admin";

		$this->Product->id = $id;

		if($_POST){
			if($this->request->data['Product']['image']['tmp_name'] != ""){
				move_uploaded_file(
	  		  $this->request->data['Product']['image']['tmp_name'],
	    		WWW_ROOT.'/img/' . basename($this->request->data['Product']['image']['name'])
				);
			}
			
			$this->request->data['Product']['image'] = $this->request->data['Product']['image']['name'];

			if($this->Product->save($this->request->data)){
				$this->Session->setFlash(__("Editado com sucesso!"), "default", array("class" => "alert alert-success"));
			} else {
				$this->Session->setFlash(__("Ocorreu um erro!"), "default", array("class" => "alert alert-danger"));
			}

		}

		
		$this->request->data = $this->Product->read();
		
		$this->set("form_action", "edit");		
		$this->set("description", "Editar Telhados");
		$this->set(compact("id"));
		$this->render("add");
	}

	public function delete($id=null){
		if($this->Product->delete($id)){
			$this->redirect("index");
		}
	}

}