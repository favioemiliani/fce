<?php include_once(ROOT.'/app/libs/arrays_values.php') ?>

Agregar encuesta | <?php echo $html->link('Regresar a listado general','/');?>
<?php
echo $form->create('Poll');
echo $form->input('apenom', array('label' =>'Nombre y apellido : '));
echo $form->label('Tipo de documento : ');
echo $form->select('doc_type', array('dni' => 'DNI','lc' => 'LC', 'le' => 'LE','pas' => 'PAS'));
echo $form->input('doc_number', array('label' =>'Número : ', 'size' => 8));
echo $form->label('Estado civil : ');
echo $form->select('marital_state', array('soltero' => 'Soltero','casado' => 'Casado', 'convivencia' => 'Convivencia'));

echo '<select name="data[Poll][province]" id="PollProvince">';
foreach ($provinces as $province) {
  echo "<option value='".strtolower($province)."'>".$province."</option>";
}
echo '</select>';

//echo $form->input('province', array('options'  => array($provinces) , 'label' => 'Provincia de origen'));
echo $form->input('city', array('options'  => array($cities), 'label' => 'Ciudad de origen'));
echo $form->input('street',  array('label' =>'Calle y número : '));

echo $form->label('Provincia : ');
echo $form->input('sprovince', array('options'  => array($provinces), 'label' => 'Provincia durantes estudios'));
echo $form->input('scity', array('options'  => array($cities), 'label' => 'Ciudad durante estudios'));
echo $form->input('sstreet',  array('label' =>'Calle y número : '));


echo $form->input('email',  array('label' =>'Email : '));

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


echo '<b>';
echo $form->label('Hábitos de estudio');
echo '</b>';

echo '<b>';
echo $form->label('Cuántas horas diarias le dedicabas a estudiar en el Secundario?');
echo '</b>';

echo $form->radio('amount_hours_study', array('0-2' => '0 a 2', '2-4' => '2 a 4', '4-6' => '4 a 6', '+6' => 'Más de 6'), array('default' => '0-2', 'legend' =>  false));

echo '<b>';
echo $form->label('De qué tipo de material estudiabas?');
echo '</b>';

echo $form->radio('study_resources', array('libros' => 'Libros de texto', 'apuntes' => 'Apuntes de clase', 'fotocopias' => 'Fotocopias', 'resumen' => 'Resúmenes'), array('default' => 'libros', 'legend' =>  false));

echo '<b>';
echo $form->label('Dispones de un lugar para estudiar?');
echo '</b>';

echo $form->radio('study_place', array('si' => 'Si', 'no' => 'No'), array('default' => 'si', 'legend' =>  false));

echo '<b>';
echo $form->label('Has tomado clases con un profesor particular?');
echo '</b>';

echo $form->radio('extra_classes', array('si' => 'Si', 'no' => 'No'), array('default' => 'si', 'legend' =>  false));

echo $form->input('extra_classes_subj', array('label' =>'Asignatura:', 'size' => 25));

echo '<b>';
echo $form->label('Cuáles eran las técnicas o modalidades de estudio que utilizabas?');
echo '</b>';
echo $form->textarea('study_techniques');

echo '<b>';
echo $form->label('Preferencias y empleo del tiempo libre');
echo '</b>';

echo '<b>';
echo $form->label('Qué tipo de actividades te interesan para usar tu tiempo libre?');
echo '</b>';

echo $form->radio('hobbies', array('deportes' => 'Deportes', 'artes' => 'Artística', 'culturales' => 'Culturales', 'cientificas' => 'Científicas', 'recreativas' => 'Recreativas', 'Religiosas' => 'religiosas', 'otros' => 'Otros'), array('default' => 'deportes', 'legend' =>  false));

echo '<b>';
echo $form->label('Ocupación laboral');
echo '</b>';

echo '<b>';
echo $form->label('Estás trabajando en la actualidad?');
echo '</b>';

echo $form->radio('job', array('no' => 'No', 'empresa familiar' => 'Si, en empresa familiar', 'Si, en una empresa privada' => 'empresa privada', 'estado' => 'Si, en el Estado'), array('default' => 'no', 'legend' =>  false));


echo $form->end('Grabar');
?>
