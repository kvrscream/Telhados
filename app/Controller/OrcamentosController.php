<?php

App::uses('AppController', 'Controller');
class OrcamentosController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array("Email");
	public $uses = ["Orcamento"];

  public function beforeFilter() {
      parent::beforeFilter();
      $this->Auth->allow('index', 'sendmail');
  }

	public function index(){

		$this->set("description", "Orçamento");
	}

	public function sendmail($dados = null){
		$this->layout = null;
		
		if($this->request->is("post")){
			$Email = new CakeEmail();
    	$Email->config('gmail')
          ->emailFormat('html')
          ->from("contato@unimetaltelhados.com.br")        
          ->to("contato@unimetaltelhados.com.br")
          ->subject("Unimetal Telhados site - Orçamentos")
          ->bcc("lourdesalmeida84@gmail.com");

      $msg = "Solicitação de  Orçamento feita por: ".$this->request->data["Orcamentos"]["name"]."<br />"
      ."E-mail de Contato : ".$this->request->data["Orcamentos"]["email"]."<br />"
      ."Telefone: ".$this->request->data["Orcamentos"]["telefone"]."<br />"
      ."Celular: ".$this->request->data["Orcamentos"]["celular"]."<br />"
      ."CEP: ".$this->request->data["Orcamentos"]["cep"]."<br />"
      ."Endereço: ".$this->request->data["Orcamentos"]["endereco"]."<br />"
      ."Número: ".$this->request->data["Orcamentos"]["numero"]."<br />"
      ."Bairro: ".$this->request->data["Orcamentos"]["bairro"]."<br />"
      ."Cidade: ".$this->request->data["Orcamentos"]["cidade"]."<br />"
      ."Estado: ".$this->request->data["Orcamentos"]["estado"]."<br />"
      ."Nome do Local: ".$this->request->data["Orcamentos"]["nomeLocal"]."<br />"
      ."Prioridade: ".$this->request->data["prioridade"]."<br />"
      ."Telhado: ".$this->request->data["produto"]."<br />"
      ."Comprimento: ".$this->request->data["Orcamentos"]["comprimento"]."<br />"
      ."Largura: ".$this->request->data["Orcamentos"]["largura"]."<br />"
      ."Observações: <br />".$this->request->data["Orcamentos"]["observacoes"]."<br />" ;   

      if($Email->send($msg)){
				$this->Session->setFlash(__("Solicitação de Orçamento enviada com sucesso! Em breve entraremos em contato! Obrigado."), "default", array("class" => "alert alert-success"));
				$this->redirect(["action" => "index"]);
      } else {
      	$this->Session->setFlash(__("Ops! Ocorreu um erro no envio!. Tente novamente."), "default", array("class" => "alert alert-success"));
				$this->redirect(["action" => "index"]);
      }

		}
	}

}