<?php
class Poll extends AppModel  {
  var $name = 'Poll';

  var $validate = array(
    'apenom' => array(
      'rule' => 'notEmpty',
      'message' => 'Este campo no puede quedar vacio' ),

    'school_year_grad'  => array(
      'school_year_gradRule-1' => array(
        'rule' => 'notEmpty',
        'message' => 'Este campo no debe quedar vacio'
      ),
      'school_year_gradRule-2' => array(
        'rule' => 'numeric',
        'message' => 'Este campo tiene que ser numerico'
      ),
     'school_year_gradRule-3' => array(
        'rule' => array('range', 1950,2010),
        'message' => 'Este campo acepta valores entre 1950 y 2010'
      )  ),

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
