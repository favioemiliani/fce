<?php
class Poll extends AppModel  {
  var $name = 'Poll';
  var $belongsTo = array('Province' => array('className' => 'Province'));
  var $validate = array(
    'apenom' => array(        
      'rule' => 'notEmpty',        
      'message' => 'Este campo no puede quedar vacio' ),

    'doc_number' => array(         
      'doc_numberRule-1' => array(
        'rule' => 'isUnique',        
        'message' => 'Este campo tiene que ser único' 
      ),
      'doc_numberRule-2' => array(         
        'rule' => 'numeric',        
        'message' => 'Este campo tiene que ser numerico' 
      ),  
     'doc_numberRule-3' => array(         
        'rule' => array('range', 5000000,35000000),        
        'message' => 'Este campo tiene que representarse entre 5000000 y 35000000' 
      ),         
      'doc_numberRule-4'  => array(         
        'rule' => 'notEmpty',        
        'message' => 'Este campo no puede quedar vacio' 
      )
    )
    );
  } 
?>
