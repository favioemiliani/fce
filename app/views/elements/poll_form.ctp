<?php include_once(ROOT.'/app/libs/arrays_values.php') ?>

<?php
echo $form->create('Poll');
echo $this->Html->tag('h1', 'Datos personales');

echo $form->hidden('user_id', array('value' => $session->read('Auth.User.id')));

echo $form->input('apenom', array('label' =>'Nombre y apellido : '));
echo $form->label('Tipo de documento : ');
echo $form->select('doc_type', array('dni' => 'DNI','lc' => 'LC', 'le' => 'LE','pas' => 'PAS'));
echo $form->input('doc_number', array('label' =>'Número : ', 'size' => 8));

echo $form->input('birthdate', array('label' =>'Fecha de Nacimiento : ', 'size' => 10));

echo $form->label('Estado civil : ');
echo $form->select('marital_state', array('soltero' => 'Soltero','casado' => 'Casado', 'convivencia' => 'Convivencia'));

echo $this->Html->tag('h1', 'Domicilio de origen');

echo $form->input('street',  array('label' =>'Calle y número : '));

echo $form->label('Ciudad de origen');
echo '<select name="data[Poll][city]" id="PollCity">';
foreach ($cities as $city) {
  echo "<option value='".strtolower(utf8_encode($city))."'>".utf8_encode($city)."</option>";
}
echo '</select>';

//Datos provincia y ciudad de origen
echo $form->label('Provincia de origen');
echo '<select name="data[Poll][province]" id="PollProvince">';
foreach ($provinces as $province) {
  echo "<option value='".strtolower($province)."'>".utf8_encode($province)."</option>";
}
echo '</select>';

echo $form->input('phone',  array('label' =>'Teléfono : '));

echo $form->input('email',  array('label' =>'Email : '));

echo '<h1>Domicilio durante cursado</h1>';

echo $form->input('sstreet',  array('label' =>'Calle y número : '));

echo $form->label('Ciudad durante estudios');
echo '<select name="data[Poll][student_city]" id="PollStudent_city">';
foreach ($cities as $city) {
  echo "<option value='".strtolower(utf8_encode($city))."'>".utf8_encode($city)."</option>";
}
echo '</select>';


//Datos provincia y ciudad de origen durante estudios
echo $form->label('Provincia durante estudios');
echo '<select name="data[Poll][student_province]" id="PollStudent_province">';
foreach ($provinces as $province) {
  echo "<option value='".strtolower($province)."'>".$province."</option>";
}
echo '</select>';



echo $this->Html->tag('br');

echo $this->Html->tag('b', 'Cual de las tres carreras pensas seguir?');

echo $this->Html->tag('br');

echo $form->radio('degree_to_follow', array('cpn' => 'Contador Público Nacional', 'la' => 'Licenciatura en Administración', 'le' => 'Licenciatura en Economía}'), array('default' => 'cpn', 'legend' =>  false));

echo $this->Html->tag('b', 'Motivos');
echo $form->textarea('reasons_to_follow_degree');

echo $this->Html->tag('b', 'Conocés el Plan de Estudios de la carrera?');
echo $this->Html->tag('br');
echo $form->radio('knowdledge', array('si' => 'Si, en forma completa', 'algo' => 'Si, pero en forma parcial', 'no' => 'No lo conozco'), array('default' => 'si', 'legend' =>  false));

echo $this->Html->tag('b', 'Antecedentes escolares (Secundario)');

echo $form->input('school_title', array('label' =>'Título:'));
echo $form->input('school_area', array('label' =>'Área:'));
echo $form->input('school_name', array('label' =>'Nombre de la Escuela o Instituto:'));
echo $form->radio('school_type', array('publica' => 'Pública', 'privada' => 'Privada'), array('default' => 'publica', 'legend' =>  false));
echo $form->input('school_year_grad', array('label' =>'Año de graduacion:', 'size' => 4));

echo $this->Html->tag('b', 'Cuál es tu opinión acerca del nivel de conocimientos adquiridos durante el cursado?');
echo $this->Html->tag('br');
echo $form->radio('school_opinion', array('excelente' => 'Excelente', 'muy bueno' => 'Muy Bueno', 'bueno' => 'Bueno', 'regular' => 'Regular', 'malo' => 'Malo'), array('default' => 'malo', 'legend' =>  false));

echo $this->Html->tag('b', 'Obsevaciónes');
echo $form->textarea('school_observation');

echo $this->Html->tag('b', 'Hábitos de estudio');

echo $this->Html->tag('b', 'Cuántas horas diarias le dedicabas a estudiar en el Secundario?');
echo $this->Html->tag('br');
echo $form->radio('amount_hours_study', array('0-2' => '0 a 2', '2-4' => '2 a 4', '4-6' => '4 a 6', '+6' => 'Más de 6'), array('default' => '0-2', 'legend' =>  false));

echo $this->Html->tag('b', 'De qué tipo de material estudiabas?');
echo $this->Html->tag('br');
echo $form->radio('study_resources', array('libros' => 'Libros de texto', 'apuntes' => 'Apuntes de clase', 'fotocopias' => 'Fotocopias', 'resumen' => 'Resúmenes'), array('default' => 'libros', 'legend' =>  false));

echo $this->Html->tag('b', 'Dispones de un lugar para estudiar?');
echo $this->Html->tag('br');
echo $form->radio('study_place', array('si' => 'Si', 'no' => 'No'), array('default' => 'si', 'legend' =>  false));

echo $this->Html->tag('b', 'Cuál es?');

echo $form->textarea('where_is_study_place');

echo $this->Html->tag('b', 'Has tomado clases con un profesor particular?');

echo $this->Html->tag('br');

echo $form->radio('extra_classes', array('si' => 'Si', 'no' => 'No'), array('default' => 'si', 'legend' =>  false));

echo $form->input('extra_classes_subj', array('label' =>'Asignatura:', 'size' => 25));

echo $this->Html->tag('b', 'Cuáles eran las técnicas o modalidades de estudio que utilizabas?');

echo $form->textarea('study_techniques');

echo $this->Html->tag('b', 'Preferencias y empleo del tiempo libre');

echo $this->Html->tag('b', 'Qué tipo de actividades te interesan para usar tu tiempo libre?');

echo $this->Html->tag('br');

echo $form->radio('hobbies', array('deportes' => 'Deportes', 'artes' => 'Artística', 'culturales' => 'Culturales', 'cientificas' => 'Científicas', 'recreativas' => 'Recreativas', 'Religiosas' => 'religiosas', 'otros' => 'Otros'), array('default' => 'deportes', 'legend' =>  false));

echo $this->Html->tag('b', 'Observaciones');

echo $form->textarea('hobbies_extra_info');

echo $this->Html->tag('b', 'Ocupación laboral');
echo $this->Html->tag('b', 'Estás trabajando en la actualidad?');
echo $this->Html->tag('br');
echo $form->radio('job', array('no' => 'No', 'empresa familiar' => 'Si, en empresa familiar', 'Si, en una empresa privada' => 'empresa privada', 'estado' => 'Si, en el Estado'), array('default' => 'no', 'legend' =>  false));


echo $form->end('Grabar');
?>
