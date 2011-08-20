<?php echo $this->element('dashboard'); ?>
<?php echo $this->element('polls_form_search'); ?>

<h1>
<?php
  echo "Encuestas cargadas por " . $session->read('Auth.User.username');
?>
</h1>
<p><?php echo $html->link("Agregar encuesta", "/polls/add"); ?>
<table>
        <tr>
                <th>Apellido y Nombre</th>
                <th>Documento</th>
                <th>Número de teléfono</th>
                <th>EMail</th>
        </tr>


<!-- Here's where we loop through our $polls array, printing out poll info -->

<?php foreach ($polls as $poll): ?>
        <tr>
                <td>
                  <?php echo $poll['Poll']['apenom']; ?>
                </td>
                <td>
                  <?php echo $poll['Poll']['doc_number'];?>
                </td>
               <td>
                  <?php echo $poll['Poll']['id']; ?>
                </td>
                <td>
                  <?php echo $poll['Poll']['email'];?>
                </td>
        </tr>
<?php endforeach; ?>

</table>
<!-- Shows the next and previous links -->
<?php echo $this->Paginator->prev('« Anterior', null, null, array('class' => 'disabled')); ?>
<!-- Shows the page numbers -->
<?php echo $this->Paginator->numbers(); ?>
<?php echo $this->Paginator->next('Siguiente »', null, null, array('class' => 'disabled')); ?>
<!-- prints X of Y, where X is current page and Y is number of pages -->
<?php echo $this->Paginator->counter(); ?>
