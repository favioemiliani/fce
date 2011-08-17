<?php
echo '<h2>Add User';
echo $form->create('User');
echo $form->input('username');
echo $form->input('clear_password', array('type' => 'password', 'label' => 'Password'));
echo $form->input('confirm_password', array('type' => 'password'));
echo $form->input('first_name');
echo $form->input('last_name');
echo $form->input('email');
echo $form->input('status', array('options' => array('Active' => 'Active', 'Inactive' => 'Inactive')));
echo $form->submit('Submit', array('after' => ' ' . $html->link('Cancel', array('action' => 'index'))));
echo $form->end();
?>
