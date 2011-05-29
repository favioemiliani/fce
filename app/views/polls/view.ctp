<?php echo $html->link("Agregar encuesta", "/polls/add"); ?>
|
<?php echo $html->link('Regresar a listado general','/');?>
<?php
    echo $form->create('Poll',array('action' => 'search'));
    echo $form->input('Poll.search', array('label' => 'Busqueda'));
    echo $form->end('Buscar');
?>

<?php
echo '<p>';
echo 'Nombre y apellido';
echo '</p>';

echo $poll['Poll']['apenom'];


echo '<p>';
echo 'Tipo y numero de documento';
echo '</p>';

echo $poll['Poll']['doc_type'];
echo $poll['Poll']['doc_number'];

echo '<p>';
echo 'Estado civil :';
echo '</p>';

echo $poll['Poll']['marital_state'];

echo '<p>';
echo 'Provincia :';
echo '</p>';

echo $poll['Poll']['province_id'];
echo $poll['Poll']['city'];
echo $poll['Poll']['street'];
echo $poll['Poll']['email'];


echo '<p>';
echo 'Cual de las tres carreras pensas seguir?';
echo '</p>';

echo $poll['Poll']['degree_to_follow'];

echo '<p>';
echo 'Conoces el Plan de Estudios de la carrera?';
echo '</p>';

echo $poll['Poll']['knowdledge'];

echo '<p>';
echo 'Antecedentes escolares (Secundario)';
echo '</p>';

echo $poll['Poll']['school_title'];
echo $poll['Poll']['school_area'];
echo $poll['Poll']['school_name'];
echo $poll['Poll']['school_type'];

echo $poll['Poll']['school_year_grad'];


echo '<p>';
echo 'Cual es tu opinion acerca del nivel de conocimientos adquiridos durante el cursado?';
echo '</p>';

echo $poll['Poll']['school_opinion'];


echo '<p>';
echo 'Habitos de estudio';
echo '</p>';


echo 'Cuantas horas diarias le dedicabas a estudiar en el Secundario?';
echo '</p>';

//echo $poll['Poll']['amount_hours_study'];

echo '<p>';
echo 'De que tipo de material estudiabas?';
echo '</p>';

//echo $poll['Poll']['study_resources'];

echo '<p>';
echo 'Dispones de un lugar para estudiar?';
echo '</p>';

//echo $poll['Poll']['study_place'];

echo '<p>';
echo 'Has tomado clases con un profesor particular?';
echo '</p>';

//echo $poll['Poll']['extra_classes'];

//echo $poll['Poll']['extra_classes_subj'];

echo '<p>';
echo 'Cuales eran las tecnicas o modalidades de estudio que utilizabas?';
echo '</p>';

//echo $poll['Poll']['study_techniques'];

echo '<p>';
echo 'Preferencias y empleo del tiempo libre';
echo '</p>';

echo '<p>';
echo 'Que tipo de actividades te interesan para usar tu tiempo libre?';
echo '</p>';

//echo $poll['Poll']['hobbies'];

echo '<p>';
echo 'Ocupacion laboral';
echo '</p>';


echo '<p>';
echo 'Estas trabajando en la actualidad?';
echo '</p>';

//echo $poll['Poll']['job'];
?>
