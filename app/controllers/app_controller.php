<?php
class AppController extends Controller {
    var $components = array(
        'Auth' => array(
            'autoRedirect' => false,
        ),
        'Session',
    );
    var $helpers = array(
        'Html',
        'Form',
        'Session',
    );
    
    function afterFilter() {
        # Update User last_access datetime
       if ($this->Auth->user()) {
            $this->loadModel('User');
            $this->User->id = $this->Auth->user('id');
            $this->User->saveField('last_access', date('Y-m-d H:i:s'));
        }
    }
}
?>
