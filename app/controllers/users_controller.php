<?php
class UsersController extends AppController {
  var $name = 'Users';

  function login() {   
  } 

  function admin_logout() {
    $this->Session->destroy();
    $this->redirect($this->Auth->logout());
  }

  function index() {
    $this->User->recursive = 0;
    $this->set('users', $this->paginate());
  }

  function view($id = null) {
    if (!$id) {
      $this->Session->setFlash(__('Usuario invalido', true));
      $this->redirect(array('action' => 'index'));
    }
    $this->set('user', $this->User->read(null,$id));
  }

  function add() {
    if (!empty($this->data)) {
      $this->User->create();
      if ($this->User->save($this->data)) {
        $this->Session->setFlash(__('El usuario fue grabado', true));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('El usuario no pudo ser grabado', true));
      }
    }
  }

  function edit($id = null) {
    if (!$id && !empty($this->data)) {
      $this->Session->setFlash(__('Usuario no valido', true));
      $this->redirect(array('action' => 'index'));
     }

    if (!empty($this->data)){
      if ($this->User->save($this->data)) {
        $this->Session->setFlash(__('El usuario fue grabado', true));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('El usuario no fue grabado', true));
      }
    }
    
    if (empty($this->data)) {
      $this->data = $this->User->read(null, $id);
     }
  }

  function delete($id = null) {
    if($id) {
      $this->Session->setFlash(__('Id invalido para usuario', true));
      $this->redirect(array('action' => 'index'));
    }
    if ($this->User->delete($id)) {
        $this->Session->setFlash(__('El usuario fue borrado', true));
        $this->redirect(array('action' => 'index'));
    }
    $this->Session->setFlash(__('El usuario no fue borrado', true));
    $this->redirect(array('action' => 'index'));
   }

  }
?>

