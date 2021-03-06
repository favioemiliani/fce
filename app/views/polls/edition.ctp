<?php
    echo $form->create('Poll',array('action' => 'search'));
    echo $form->input('Poll.search', array('label' => 'Busqueda'));
    echo $form->end('Buscar');
?>

<h1>Encuestas</h1>
<p><?php echo $html->link("Agregar encuesta", "/polls/add"); ?>
<table>
        <tr>
                <th>Apellido y Nombre</th>
                <th>Documento</th>
                <th>Número de teléfono</th>
                <th>EMail</th>
                <th>Acciones</th>
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
                  <?php echo $poll['Poll']['phone']; ?>
                </td>
                <td>
                  <?php echo $poll['Poll']['email'];?>
              </td>
              <td>
			<?php echo $html->link(
				'Borrar', 
				"/polls/delete/{$poll['Poll']['id']}", 
				null, 
				'Estas seguro de borrar esta encuesta?'
			)?>
			<?php echo $html->link('Editar', '/polls/edit/'.$poll['Poll']['id']);?>
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
