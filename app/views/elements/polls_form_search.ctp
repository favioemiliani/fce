<?php
    echo $form->create('Poll',array('action' => 'search'));
    echo $form->input('Poll.search', array('label' => 'Busqueda'));
    echo $form->end('Buscar');
?>

