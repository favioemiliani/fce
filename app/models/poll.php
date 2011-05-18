<?php
class Poll extends AppModel  {
  var $name = 'Poll';

  var $validate = array(
    'apenom' => array(         
      'rule' => 'notEmpty',        
      'message' => 'Este campo no puede quedar vacio' ),
    'doc_number'  => array(         
      'rule' => 'notEmpty',        
      'message' => 'Este campo no puede quedar vacio' )
    );
  } 
?>
