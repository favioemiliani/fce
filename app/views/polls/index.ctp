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
                <th>Sabes del Plan de estudios</th>
                <th>Titulo Secundario</th>
                <th>Area</th>
                <th>Nombre colegio</th>
                <th>Tipo</th>
                <th>Año de graduación</th>

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
                   <?php echo $poll['Province']['name'];?>
                </td>
                <td>
                  <?php echo $poll['Poll']['degree_to_follow'];?>
                </td>
                <td>
                  <?php echo $poll['Poll']['knowdledge'];?>
                </td>
               <td>
                <?php echo $poll['Poll']['school_title']; ?>
                </td>
                <td>
                <?php echo $poll['Poll']['school_area']; ?>
                </td>
                <td>
                <?php echo $poll['Poll']['school_name']; ?>
                </td>
                <td>
                <?php echo $poll['Poll']['school_type']; ?>
               </td>

                 <td>
                <?php echo $poll['Poll']['school_year_grad']; ?>
               </td>
	</tr>
<?php endforeach; ?>

</table>
