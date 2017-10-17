   <?php 
      include "../../inc/header.php";
      include "../../inc/conexion.php";
   ?>
    <main>

      <div class="main-content">
        <div class="row">
        	<div class="col-12">
        		 <div class="card">
        		 	<div class="card-header">
	                <h5 class="card-title"><strong>Administración de Metas</strong></h5>
	              </div>
		              <div class="card-body">
		              	<!-- tabla de las metas -->
		              	<table class="table table-responsive table-striped" id="dt_metas" cellspacing="0">
					        <thead class="bg-secondary">
					            <tr>
					                <th>PDI</th> 
					                <th>Meta</th>
					                <th>Departamento</th>
					                <th>Cant</th>
					                <th>Ene</th>
					                <th>Feb</th>
					                <th>Mar</th>
					                <th>Abr</th>
					                <th>May</th>
					                <th>Jun</th>
					                <th>Jul</th>
					                <th>Ago</th>
					                <th>Sep</th>
					                <th>Oct</th>
					                <th>Nov</th>
					                <th>Dic</th>
					            </tr>
					        </thead>
					        <tbody>
					        	<?php
					        		//creamos la consulta
								  $comando = "SELECT * FROM metas inner join departamentos on metas.id_departamento=departamentos.id_departamento";
								  //ejecutamos la consulta
								  $resultado = mysqli_query($con, $comando)or die(mysqli_error());
								  //mostramos cada uno de los departamentos en las opciones            
								  while($row = mysqli_fetch_array($resultado)) { 
								  echo '<tr>
								  			<td>'.$row["PDI"].'</td>
								  			<td>'.$row["Meta"].'</td>
								  			<td>'.$row["nombre"].'</td>
								  			<td>'.$row["Cantidad"].'</td>
								  			<td>'.$row["Ene"].'</td>
								  			<td>'.$row["Feb"].'</td>
								  			<td>'.$row["Mar"].'</td>
								  			<td>'.$row["Abr"].'</td>
								  			<td>'.$row["May"].'</td>
								  			<td>'.$row["Jun"].'</td>
								  			<td>'.$row["Jul"].'</td>
								  			<td>'.$row["Ago"].'</td>
								  			<td>'.$row["Sep"].'</td>
								  			<td>'.$row["Oct"].'</td>
								  			<td>'.$row["Nov"].'</td>
								  			<td>'.$row["Dic"].'</td>
								  		</tr>
								  ';
								}
					        	?>
					        </tbody>
    					</table>
    					 <!--incluimos el boton de agregar usuario-->
			    <div class="fab fab-fixed">
			      <a class="btn btn-float btn-primary" href="#" title="Agregar Usuario" data-provide="tooltip" data-toggle="modal" data-target="#ModalNuevoalumno"><i class="ti-plus"></i></a>
			    </div>	


		              </div>
        		 </div>
        	</div>
        </div>
    </div>


    <?php 
     	include "../../inc/footer.php";
   	?>

<script type="text/javascript">
	$(document).ready(function () {
        $('#dt_metas').DataTable();
    });

</script>