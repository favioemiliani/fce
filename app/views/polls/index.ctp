<h1>Encuestas</h1>
<p><?php echo $html->link("Agregar encuesta", "/polls/add"); ?>
<table>
	<tr>
		<th>Apellido y Nombre</th>
                <th>TDoc</th>
                <th>Num</th>
                <th>ECivil</th>
                <th>Provincia</th>
                <th>Carrera a seguir</th>

	</tr>

<!-- Here's where we loop through our $polls array, printing out poll info -->

<?php foreach ($polls as $poll): ?>
	<tr>
		<td><?php echo $poll['Poll']['apenom']; ?></td>
		<td>
			<?php echo $poll['Poll']['doc_type'];?>
                </td>
		<td>
		        <?php echo $poll['Poll']['doc_number'];?>
                </td>
		<td>
		        <?php echo $poll['Poll']['marital_state'];?>
                </td>
                  <td>
                       <?php echo $poll['Province']['name'];;?>
                </td>
                <td>
                       <?php echo $poll['Poll']['degree_to_follow'];;?>
                </td>

	</tr>
<?php endforeach; ?>

</table>
