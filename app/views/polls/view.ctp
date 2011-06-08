<?php echo $html->link("Agregar encuesta", "/polls/add"); ?>
|
<?php echo $html->link('Regresar a listado general','/');?>
<?php
    echo $form->create('Poll',array('action' => 'search'));
    echo $form->input('Poll.search', array('label' => 'Busqueda'));
    echo $form->end('Buscar');
?>

<?php
echo '<h4>';
echo 'Nombre y apellido';
echo '</h4>';

echo $poll['Poll']['apenom'];


echo '<h4>';
echo 'Tipo y numero de documento';
echo '</h4>';

echo $poll['Poll']['doc_type'];
echo $poll['Poll']['doc_number'];
echo '<h4>';
echo 'Fecha de nacimiento :';
echo '</h4>';

echo $poll['Poll']['birthdate'];


echo '<h4>';
echo 'Estado civil :';
echo '</h4>';

echo $poll['Poll']['marital_state'];

echo '<h4>';
echo 'Provincia de origen:';
echo '</h4>';

echo $poll['Poll']['province'];
echo $poll['Poll']['city'];
echo $poll['Poll']['street'];
echo $poll['Poll']['email'];


echo '<h4>';
echo 'Cual de las tres carreras pensas seguir?';
echo '</h4>';

echo $poll['Poll']['degree_to_follow'];

echo '<h4>';
echo 'Conoces el Plan de Estudios de la carrera?';
echo '</h4>';

echo $poll['Poll']['knowdledge'];

echo '<h4>';
echo 'Antecedentes escolares (Secundario)';
echo '</h4>';

echo $poll['Poll']['school_title'];
echo $poll['Poll']['school_area'];
echo $poll['Poll']['school_name'];
echo $poll['Poll']['school_type'];

echo $poll['Poll']['school_year_grad'];


echo '<h4>';
echo 'Cual es tu opinion acerca del nivel de conocimientos adquiridos durante el cursado?';
echo '</h4>';

echo $poll['Poll']['school_opinion'];


echo '<h4>';
echo 'Habitos de estudio';
echo '</h4>';


echo 'Cuantas horas diarias le dedicabas a estudiar en el Secundario?';
echo '</h4>';

//echo $poll['Poll']['amount_hours_study'];

echo '<h4>';
echo 'De que tipo de material estudiabas?';
echo '</h4>';

//echo $poll['Poll']['study_resources'];

echo '<h4>';
echo 'Dispones de un lugar para estudiar?';
echo '</h4>';

//echo $poll['Poll']['study_place'];

echo '<h4>';
echo 'Has tomado clases con un profesor particular?';
echo '</h4>';

//echo $poll['Poll']['extra_classes'];

//echo $poll['Poll']['extra_classes_subj'];

echo '<h4>';
echo 'Cuales eran las tecnicas o modalidades de estudio que utilizabas?';
echo '</h4>';

//echo $poll['Poll']['study_techniques'];

echo '<h4>';
echo 'Preferencias y empleo del tiempo libre';
echo '</h4>';

echo '<h4>';
echo 'Que tipo de actividades te interesan para usar tu tiempo libre?';
echo '</h4>';

//echo $poll['Poll']['hobbies'];

echo '<h4>';
echo 'Ocupacion laboral';
echo '</h4>';


echo '<h4>';
echo 'Estas trabajando en la actualidad?';
echo '</h4>';

//echo $poll['Poll']['job'];
?>
