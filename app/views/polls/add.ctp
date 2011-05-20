<h1>Agregar encuesta</h1>
<?php
echo $form->create('Poll');
echo $form->input('apenom', array('label' =>'Nombre y apellido : '));
echo $form->label('Tipo de documento : ');
echo $form->select('doc_type', array('dni' => 'DNI','lc' => 'LC', 'le' => 'LE','pas' => 'PAS'));
echo $form->input('doc_number', array('label' =>'Número : '));
echo $form->label('Estado civil : ');
echo $form->select('marital_state', array('soltero' => 'Soltero','casado' => 'Casdo', 'convivencia' => 'Convivencia'));
echo $form->label('Provincia : ');
echo $form->input('province_id', array('options'  => array($selectdata)));

echo $form->label('Cual de las tres carreras pensas seguir?');
echo $form->radio('degree_to_follow', array('cpn' => 'Contador Público Nacional', 'la' => 'Licenciatura en Administración', 'le' => 'Licenciatura en Economía}'), array('default' => 'cpn', 'legend' =>  false));

echo $form->label('Conocés el Plan de Estudios de la carrera?');
echo $form->radio('knowdledge', array('si' => 'Si, en forma completa', 'algo' => 'Si, pero en forma parcial', 'no' => 'No lo conozco'), array('default' => 'si', 'legend' =>  false));


echo $form->end('Grabar');
?>
