<?php echo $html->link("Agregar encuesta", "/polls/add"); ?>
|
<?php echo $html->link('Regresar a listado general','/');?>

<?php
    echo $form->create('Poll',array('action' => 'search'));
    echo $form->input('Poll.search');
    echo $form->end('Buscar');
?>

<table>
  <tr>
    <th>Apellido y Nombre</th>
  </tr>
  <?php foreach ($polls as $poll): ?>
  <tr>
    <td>
      <?php echo $html->link($poll['Poll']['apenom'],'/polls/view/'.$poll['Poll']['id']);?>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
