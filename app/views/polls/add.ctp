<h1>Agregar encuesta</h1>
<?php
echo $form->create('Poll');
echo $form->input('apenom', array('label' =>'Nombre y apellido'));
echo $form->label('Tipo de documento');
echo $form->select('doc_type', array('dni' => 'DNI','lc' => 'LC', 'le' => 'LE','pas' => 'PAS'));
echo $form->input('doc_number', array('label' =>'Número'));  
echo $form->end('Grabar');
?>
