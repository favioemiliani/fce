<?php echo $html->link("Agregar encuesta", "/polls/add"); ?>
|
<?php echo $html->link('Regresar a listado general','/');?>
<?php
    echo $form->create('Poll',array('action' => 'search'));
    echo $form->input('Poll.search', array('label' => 'Busqueda'));
    echo $form->end('Buscar');
?>

<?php
echo '<h3>';
echo 'Nombre y apellido';
echo '</h3>';

echo $poll['Poll']['apenom'];


echo '<h3>';
echo 'Tipo y numero de documento';
echo '</h3>';

echo $poll['Poll']['doc_type'];
echo '<br>';
echo $poll['Poll']['doc_number'];
echo '<h3>';
echo 'Fecha de nacimiento :';
echo '</h3>';

echo $poll['Poll']['birthdate'];


echo '<h3>';
echo 'Estado civil :';
echo '</h3>';

echo $poll['Poll']['marital_state'];

echo '<h3>';
echo 'Domicilio de origen:';
echo '</h3>';
echo '<h3>';
echo 'Provincia de origen:';
echo '</h3>';

echo $poll['Poll']['province'];

echo '<br>';
echo '<h3>';
echo 'Ciudad de origen:';
echo '</h3>';
echo '<br>';

echo $poll['Poll']['city'];

echo '<br>';
echo '<h3>';
echo 'Calle y número:';
echo '</h3>';
echo '<br>';
echo $poll['Poll']['street'];

echo '<h3>';
echo 'Domicilio durante el cursado:';
echo '</h3>';

echo '<br>';
echo '<h3>';
echo 'Email:';
echo '</h3>';
echo '<br>';
echo $poll['Poll']['email'];


echo '<h3>';
echo 'Provincia durante estudios:';
echo '</h3>';

echo $poll['Poll']['student_province'];

echo '<br>';
echo '<h3>';
echo 'Ciudad durante estudios::';
echo '</h3>';
echo '<br>';

echo $poll['Poll']['student_city'];

echo '<br>';
echo '<h3>';
echo 'Calle y número durante estudios::';
echo '</h3>';
echo '<br>';
echo $poll['Poll']['student_street'];



echo '<h3>';
echo 'Cual de las tres carreras pensas seguir?';
echo '</h3>';

echo $poll['Poll']['degree_to_follow'];

echo '<h3>';
echo $form->label('Motivos');
echo '</h3>';
echo $poll['Poll']['reasons_to_follow_degree'];

echo '<h3>';
echo 'Conoces el Plan de Estudios de la carrera?';
echo '</h3>';

echo $poll['Poll']['knowdledge'];

echo '<h3>';
echo 'Antecedentes escolares (Secundario)';
echo '</h3>';

echo $poll['Poll']['school_title'];
echo $poll['Poll']['school_area'];
echo $poll['Poll']['school_name'];
echo $poll['Poll']['school_type'];

echo $poll['Poll']['school_year_grad'];


echo '<h3>';
echo 'Cual es tu opinion acerca del nivel de conocimientos adquiridos durante el cursado?';
echo '</h3>';

echo $poll['Poll']['school_opinion'];


echo '<h3>';
echo 'Habitos de estudio';
echo '</h3>';


echo 'Cuantas horas diarias le dedicabas a estudiar en el Secundario?';
echo '</h3>';

echo $poll['Poll']['amount_hours_study'];

echo '<h3>';
echo 'De que tipo de material estudiabas?';
echo '</h3>';

echo $poll['Poll']['study_resources'];

echo '<h3>';
echo 'Dispones de un lugar para estudiar?';
echo '</h3>';

echo $poll['Poll']['study_place'];

echo '<h3>';
echo 'Has tomado clases con un profesor particular?';
echo '</h3>';

echo $poll['Poll']['extra_classes'];

echo $poll['Poll']['extra_classes_subj'];

echo '<h3>';
echo 'Cuales eran las tecnicas o modalidades de estudio que utilizabas?';
echo '</h3>';

echo $poll['Poll']['study_techniques'];

echo '<h3>';
echo 'Preferencias y empleo del tiempo libre';
echo '</h3>';

echo '<h3>';
echo 'Que tipo de actividades te interesan para usar tu tiempo libre?';
echo '</h3>';

echo $poll['Poll']['hobbies'];

echo '<h3>';
echo 'Ocupacion laboral';
echo '</h3>';


echo '<h3>';
echo 'Estas trabajando en la actualidad?';
echo '</h3>';

echo $poll['Poll']['job'];
?>
