<?php
  class AppController extends Controller {
    var $components = array('Auth', 'Session');

    function beforeFilter() {
      $this->Auth->loginAction = array('admin' => false, 'controller' => 'users', 'action' => 'login');
      $this->Auth->loginRedirect = array('controller' => 'polls', 'action' => '/');
      $this->Auth->allow('display');
    }

    public function beforeRender() {
      if (!array_key_exists('requested',$this->params)) {
        $user = $this->Session->read($this->Auth->sessionKey);
        $this->set(compact('user'));
      }
    
    }
  }
?>
