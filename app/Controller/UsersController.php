<?php

App::uses('AppController', 'Controller');
class UsersController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array("Session", "Auth", "Paginator", "Email");
  public $uses = array("User");
  
	public function beforeFilter() {
      parent::beforeFilter();
      $this->Auth->allow('logout', 'login', 'Home');
  }

  public function add(){
    $this->layout = "login";

    if($this->request->is("post")){
      $this->User->validates();
      $this->User->create();

      if($this->User->save($this->request->data)){
        $this->Session->setFlash(__("Usuário Criado com Sucesso!"), "default", array("class" => "alert alert-success"));
        $this->redirect(["action" => "login"]);
      } else {
        $this->Session->setFlash(__("Usuário Não Pode Ser Criado!"), "default", array("class" => "alert alert-danger"));
      }
    }
    $this->set("description", "Adicionar usuário");
  }

  public function login(){
    $this->layout = "login";
    if($this->request->is('post')){
      $dados = $this->request->data;
      if($this->Auth->login()){
         $user = $this->User->find("first", array('conditions' => array('User.username' => $dados['User']['username'])));
          $this->redirect($this->Auth->redirectUrl());
      } else {
        $this->Session->setFlash(__("Usuário ou Senha inválidos."), "default", array("class" => "alert alert-danger"));
        $this->redirect("/users/login");
      }
    }

    $this->set("description", "Login");
  }

  public function logout(){
      $this->redirect($this->Auth->logout());
  }

}