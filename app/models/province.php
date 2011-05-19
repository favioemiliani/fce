<?php
class Province extends AppModel  {
  var $name = 'Province';
  var $hasMany = array('Poll' => array('className' => 'Poll'));

}
?>
