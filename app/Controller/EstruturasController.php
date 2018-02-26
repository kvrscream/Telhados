<?php

App::uses('AppController', 'Controller');
class EstruturasController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array("Email");
	public $uses = ["Product"];

	public function beforeFilter() {
      parent::beforeFilter();
      $this->Auth->allow('index', 'telhado_misto', 'telhado_zinco', 'termo_acusticos', 'policarbonato', 'telhado_fibrocimento', 'telhado_colonial', 'telhado_vidro');
  }

	public function index(){

		$this->set("description", "Tipos de Estruturas");
	}

	public function telhado_misto(){
		$data = $this->Product->Find("all", ["conditions" => ["Product.categoria" => "Misto"] ]);

		$this->set(compact("data"));
		$this->set("description", "Telhados Misto");
	}

	public function termo_acusticos(){
		$data = $this->Product->Find("all", ["conditions" => ["Product.categoria" => "Acustico"] ]);
		
		$this->set(compact("data"));
		$this->set("description", "Telhados Térmo Acústicos");
	}

	public function policarbonato(){
		$data = $this->Product->Find("all", ["conditions" => ["Product.categoria" => "Policarbonato"] ]);
		
		$this->set(compact("data"));
		$this->set("description", "Telhados em Policarbonato");
	}

	public function telhado_zinco(){
		$data = $this->Product->Find("all", ["conditions" => ["Product.categoria" => "Metalica"] ]);
		
		$this->set(compact("data"));
		$this->set("description", "Telhados em Zinco");
	}

	public function telhado_eco(){
		$data = $this->Product->Find("all", ["conditions" => ["Product.categoria" => "Ecologico"] ]);
		
		$this->set(compact("data"));
		$this->set("description", "Telhados Térmo Ecológicos");
	}

	public function telhado_colonial(){
		$data = $this->Product->Find("all", ["conditions" => ["Product.categoria" => "Colonial"] ]);
		
		$this->set(compact("data"));
		$this->set("description", "Telhados PVC Colonial");
	}

	public function telhado_vidro(){
		$data = $this->Product->Find("all", ["conditions" => ["Product.categoria" => "Vidro"] ]);
		
		$this->set(compact("data"));
		$this->set("description", "Telhados de Vidro");
	}

	public function telhado_fibrocimento(){
		$data = $this->Product->Find("all", ["conditions" => ["Product.categoria" => "Fibrocimento"] ]);
		
		$this->set(compact("data"));
		$this->set("description", "Telhados de Fibrocimento");
	}

}