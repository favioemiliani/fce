<h1>Agregar encuesta</h1>
<?php
echo $form->create('Poll');
echo $form->input('apenom', array('label' =>'Nombre y apellido : '));
echo $form->label('Tipo de documento : ');
echo $form->select('doc_type', array('dni' => 'DNI','lc' => 'LC', 'le' => 'LE','pas' => 'PAS'));
echo $form->input('doc_number', array('label' =>'Número : '));
echo $form->label('Estado civil : ');
echo $form->select('marital_state', array('soltero' => 'Soltero','casado' => 'Casado', 'convivencia' => 'Convivencia'));
echo $form->label('Provincia : ');
echo $form->input('province_id', array('options'  => array($selectdata)));

echo '<b>';
echo $form->label('Cual de las tres carreras pensas seguir?');
echo '</b>';
echo $form->radio('degree_to_follow', array('cpn' => 'Contador Público Nacional', 'la' => 'Licenciatura en Administración', 'le' => 'Licenciatura en Economía}'), array('default' => 'cpn', 'legend' =>  false));

echo '<b>';
echo $form->label('Conocés el Plan de Estudios de la carrera?');
echo '</b>';
echo $form->radio('knowdledge', array('si' => 'Si, en forma completa', 'algo' => 'Si, pero en forma parcial', 'no' => 'No lo conozco'), array('default' => 'si', 'legend' =>  false));

echo '<b>';
echo $form->label('Antecedentes escolares (Secundario)');
echo '</b>';

echo $form->input('school_title', array('label' =>'Título:'));
echo $form->input('school_area', array('label' =>'Área:'));
echo $form->input('school_name', array('label' =>'Nombre de la Escuela o Instituto:'));
echo $form->radio('school_type', array('publica' => 'Pública', 'privada' => 'Privada'), array('default' => 'publica', 'legend' =>  false));

echo $form->input('school_year_grad', array('label' =>'Año de graduacion:', 'size' => 4));


echo '<b>';
echo $form->label('Cuál es tu opinión acerca del nivel de conocimientos adquiridos durante el cursado?');
echo '</b>';

echo $form->radio('school_opinion', array('excelente' => 'Excelente', 'muy bueno' => 'Muy Bueno', 'bueno' => 'Bueno', 'regular' => 'Regular', 'malo' => 'Malo'), array('default' => 'malo', 'legend' =>  false));

echo $form->end('Grabar');
?>
