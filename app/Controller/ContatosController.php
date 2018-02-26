<?php

App::uses('AppController', 'Controller');
class ContatosController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array("Email");
	public $uses = ["Contato"];

	public function beforeFilter() {
      parent::beforeFilter();
      $this->Auth->allow('sendmail', 'index');
  }

	public function index(){

		$this->set("description", "Fale Conosco");
	}

	public function sendmail($dados = null){
		$this->layout = null;

		if($this->request->is("post")){
			$Email = new CakeEmail();
    	
    	$Email->config('gmail')
          ->emailFormat('html')
          ->from("contato@unimetaltelhados.com.br")              
          ->to("contato@unimetaltelhados.com.br")
          ->bcc("lourdesalmeida84@gmail.com")
          ->subject("Unimetal Telhados site - Fale Conosco");

      $msg = "Olá. E-mail enviado do site por: ".$this->request->data["Contatos"]["name"].'<br /> <br />'
      . " Solicita o seguinte: <br />".$this->request->data["Contatos"]["msg"].'<br /><br />'
      . " Seus contatos são: ".$this->request->data["Contatos"]["telefone"]."  ".$this->request->data["Contatos"]["celular"]."  ".$this->request->data["Contatos"]["email"];

			if($Email->send($msg)){
				$this->Session->setFlash(__("Seu contato foi enviado! Em breve entraremos em contato! Obrigado."), "default", array("class" => "alert alert-success"));
				$this->redirect(["action" => "index"]);
			}	else {
				$this->Session->setFlash(__("Ops. Ocorreu um erro!"), "default", array("class" => "alert alert-danger"));
				$this->redirect(["action" => "index"]);
			}	
			
				
		}

		
	}

}