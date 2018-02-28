<?php

App::uses('AppController', 'Controller');
class ProductsController extends AppController {
	public $helpers = array('Html', 'Form');
	public $uses = ["Product", "Page", "Category"];

	public function beforeFilter(){
		parent::beforeFilter();
      	$this->Auth->allow('getCategories', 'list', 'detalhe');
	}

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


	public function page(){
		$this->layout = 'admin';
		$dados = $this->Page->find("all");

		$this->set("description", "Produtos");
		$this->set(compact("dados"));
	}

	public function addPage(){
		$this->layout = 'admin';

		if($this->request->is('post')){
			$this->Page->create();

			//Move o arquivo da TMP para o img do webroot
			move_uploaded_file(
	  		  $this->request->data['Products']['image']['tmp_name'],
	    		WWW_ROOT.'/img/' . basename($this->request->data['Products']['image']['name'])
			);

			move_uploaded_file(
	  		  $this->request->data['Products']['image_text']['tmp_name'],
	    		WWW_ROOT.'/img/' . basename($this->request->data['Products']['image_text']['name'])
			);

			$this->request->data['Page']['image'] = $this->request->data['Products']['image']['name'];
			$this->request->data['Page']['image_text'] = $this->request->data['Products']['image_text']['name'];

			$this->request->data['Page']["title"] = $this->request->data["Products"]["title"];
			$this->request->data['Page']["category_id"] = $this->request->data["Products"]["categories"];
			$this->request->data['Page']["text"] = $this->request->data["Products"]["text"];


			if($this->Page->save($this->request->data["Page"])){
				$this->Session->setFlash(__("Salvo com sucesso!"), "default", array("class" => "alert alert-success"));
        		$this->redirect(["action" => "edit_page/".$this->Page->id]);
			} else {
				$this->Session->setFlash(__("Ocorreu um erro ao tentar salvar!"), "default", array("class" => "alert alert-danger"));
			}
		}

		$category = $this->Category->find("list");

		$this->set("form_action", "addPage");
		$this->set("description", "Adicionar Produto");
		$this->set(compact("category"));
	}


	public function editPage($id=null){
		$this->layout = 'admin';

		$this->Page->id = $id;
		if($this->request->is('post')){
			//Move o arquivo da TMP para o img do webroot
			if($this->request->data['Products']['image']['tmp_name'] != null){
				move_uploaded_file(
	  		  		$this->request->data['Products']['image']['tmp_name'],
	    			WWW_ROOT.'/img/' . basename($this->request->data['Products']['image']['name'])
				);

				move_uploaded_file(
		  		  $this->request->data['Products']['image_text']['tmp_name'],
		    		WWW_ROOT.'/img/' . basename($this->request->data['Products']['image_text']['name'])
				);
			}
			
			$this->request->data['Page']['image'] = $this->request->data['Products']['image']['name'];
			$this->request->data['Page']['image_text'] = $this->request->data['Products']['image_text']['name'];

			$this->request->data['Page']["title"] = $this->request->data["Products"]["title"];
			$this->request->data['Page']["category_id"] = $this->request->data["Products"]["categories"];
			$this->request->data['Page']["text"] = $this->request->data["Products"]["text"];


			if($this->Page->save($this->request->data["Page"])){
				$this->Session->setFlash(__("Salvo com sucesso!"), "default", array("class" => "alert alert-success"));
        		$this->redirect(["action" => "edit_page/".$this->Page->id]);
			} else {
				$this->Session->setFlash(__("Ocorreu um erro ao tentar salvar!"), "default", array("class" => "alert alert-danger"));
			}
		}

		$this->request->data = $this->Page->read();
		$this->request->data['Products'] = $this->request->data['Page'];
		
		$category = $this->Category->find("list");

		$this->set("form_action", "editPage");
		$this->set("description", "Adicionar Produto");
		$this->set(compact("category"));

		$this->render("add_page");
	}

	public function deletePage($id=null){
		if($this->page->delete($id)){
			$this->redirect(["action" => "page"]);
		}
	}


	public function getCategories(){
		$this->layout = 'ajax';

   	 	$category = $this->Category->find("list");
    	
   	 	$category_ajust = array();
   	 	
   	 	$i = 0;
   	 	foreach ($category as $key => $value) {
   	 		$category_ajust[$i]["id"] = $key;
   	 		$category_ajust[$i]["categoria"] = $value;
   	 		$i++;
   	 	} 

    	echo json_encode($category_ajust);
	}

	public function list($id=null){

		$data = $this->Page->find("all", ["conditions" => ["Category.id" => $id] ] );

		$this->set(compact("data"));
		$this->set("description", "Produtos");
	}

}