   <?php 
      include "../../inc/header.php";
      include "../../inc/conexion.php";
   ?>
   
    <!-- Main container -->
    <main>

      <div class="main-content">
        <div class="row">

          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title"><strong>Administración de Usuarios</strong></h5>
              </div>

              <div class="card-body">
                <!--notificacion-->
                
					<!--/notificaicon -->
					<div class="media-list media-list-divided media-list-hover" data-provide="selectall" id="lista">
						<div class="media-list-body bg-white b-1">
						  
							  <?php
							  //creamos la consulta
							  $comando = "SELECT * FROM usuarios inner join departamentos on usuarios.departamento=departamentos.id_departamento";
							  //ejecutamos la consulta
							  $resultado = mysqli_query($con, $comando)or die(mysqli_error());
							  //mostramos cada uno de los departamentos en las opciones            
							  while($row = mysqli_fetch_array($resultado)) { 
							  echo '
							  <div class="media align-items-center" >
								<label class="custom-control custom-checkbox">
								  <input onclick="testCheckbox(this);" type="checkbox" class="custom-control-input"  name="chk_user" id="chk_user" value="'.$row["correo"].'">
								  <span class="custom-control-indicator"></span>
								</label>

								<a class="flexbox flex-grow gap-items text-truncate" href="#qv-user-details" data-toggle="quickview" id="lst">
								  <img class="avatar" src="assets/img/avatar/default.jpg" alt="...">

									<div class="media-body text-truncate">
										<h6>'.$row["Nombre"].'</h6>
										<small>
										  <span>'.$row["correo"].'</span>
										  <span class="divider-dash">'.$row["telefono"].'</span>
										</small>
									  </div>
									</a>

									<span class="lead text-fade mr-25 d-none d-md-block" title="Departamento" data-provide="tooltip">'.$row["nombre"].'</span>

										<div class="dropdown">
										  <a class="text-lighter" href="#" data-toggle="dropdown"><i class="ti-more-alt rotate-90"></i></a>
										  <div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#"><i class="fa fa-fw fa-commenting"></i> Mensaje</a>
											<a class="dropdown-item" href="#"><i class="fa fa-fw fa-envelope"></i> Correo</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#"><i class="fa fa-fw fa-trash"></i> Eliminar</a>
										</div>
									</div>
							  </div>
							   '; 
							  }
							  ?>  
						</div>
					</div>   
              </div>
			 </div>
            </div>
          </div>

        </div>
   <!--/.main-content -->

		 <!-- Footer -->
		  <footer class="site-footer">
			<div class="row">
			  <div class="col-md-6">
				<p class="text-center text-md-left">Copyright © 2017</p>
			  </div>
			</div>
		  </footer>
		  <!-- END Footer -->

    </main>
    <!-- END Main container -->

    <!--incluimos el boton de agregar usuario-->
    <div class="fab fab-fixed">
      <a class="btn btn-float btn-primary" href="#qv-user-add" title="Agregar Usuario" data-provide="tooltip" data-toggle="quickview"><i class="ti-plus"></i></a>
    </div>


   

    <!-- Scripts -->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/script.js"></script>

	
	<div id="qv-user-add" class="quickview quickview-md backdrop-dark">
      <header class="quickview-header">
        <p class="quickview-title lead fw-400">Agregar nuevo Ususario</p>
        <span class="close text-primary" style="cursor: pointer;" id="btn_guardar"><i class="ti-save"></i></span>
        <span class="close" ><i class="ti-close"></i></span>
      </header>

      <div class="quickview-body">
        
          <div class="quickview-block form-type-material">
            <h6 class="text-primary">Información Personal</h6>
            <div class="form-group">
              <input type="text" class="form-control" name="txt_nombre" id="txt_nombre">
              <label>Nombre completo</label>
            </div>

            <div class="form-group">
              <input type="email" class="form-control" name="txt_correo" id="txt_correo">
              <label>Correo Electrónico</label>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name="txt_telefono" id="txt_telefono">
              <label>Número Telefono</label>
            </div>

            <div class="h-15px"></div>

            <h6 class="text-primary">Información de la cuenta</h6>
            
            <div class="form-group">
              <input type="text" class="form-control" name="txt_usuario" id="txt_usuario">
              <label>Usuario</label>
            </div>

             <div class="form-group">
              <input type="password" class="form-control" name="txt_password" id="txt_password">
              <label>Contraseña</label>
            </div>

            <div class="form-group">
              <select class="form-control" data-provide="selectpicker" name="txt_departamento"  id="txt_departamento">
                <?php
                  //creamos la consulta
                  $comando = "SELECT * FROM departamentos";
                  //ejecutamos la consulta
                  $resultado = mysqli_query($con, $comando)or die(mysqli_error());
                  //mostramos cada uno de los departamentos en las opciones            
                  while($row = mysqli_fetch_array($resultado)) { 
                      echo '<option value="'.$row["id_departamento"].'">'.$row["nombre"].' </option>';
                  }
                ?>
              </select>
              <label class="label-floated">Departamento</label>
            </div>

          </div>
          <div class="form-group text-right">
              <button class="btn btn-flat btn-danger" type="button" data-toggle="quickview">Cancelar</button>
          <button id="btn_guardar2" class="btn btn-flat btn-success" type="button">Agregar usuario</button>

          </div>

        </div>

        <footer class="p-12 text-right">
          
        </footer>
    </div>
    

    <div id="aqui">
    <!-- END Quickview - Add user 
	   <div id="qv-user-details" class="quickview quickview-lg" data-url="admin/usuarios/detalles.php?usuario=Abel"></div>-->
  </div>

	 <!-- Quickview - User detail 
    <div id="qv-user-details" class="quickview quickview-lg">
      <div class="quickview-body">

        <div class="card card-inverse">
          <div class="flexbox px-20 pt-20">
            <label class="toggler text-white">
              <input type="checkbox">
              <i class="fa fa-star"></i>
            </label>

            <a class="text-white fs-20 lh-1" href="#"><i class="fa fa-trash"></i></a>
          </div>

          <div class="card-body text-center pb-50">
            <a href="#">
              <img class="avatar avatar-xxl avatar-bordered" src="assets/img/avatar/1.jpg">
            </a>
            <h4 class="mt-2 mb-0"><a class="hover-primary text-white" href="#">Maryam Amiri</a></h4>
            <span><i class="fa fa-map-marker w-20px"></i> San Fransisco</span>
          </div>
        </div>

        <div class="quickview-block form-type-material">
          <div class="form-group">
            <input type="text" class="form-control" value="Maryame Amiri">
            <label>Name</label>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" value="maryam.amiri@gmail.com">
            <label>Email Address</label>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" value="(123) 456-7890">
            <label>Phone Number</label>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" value="thetheme.io">
            <label>Website</label>
          </div>

          <div class="h-40px"></div>
          <div class="form-group">
            <select class="form-control" data-provide="selectpicker">
              <option>United States</option>
              <option>Canada</option>
              <option>Mexico</option>
              <option>Japan</option>
              <option>Other</option>
            </select>
            <label>Country</label>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" value="San Fransisco">
            <label>City</label>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" value="1135, Apt 2, Main St.">
            <label>Address</label>
          </div>

        </div>
      </div>

      <footer class="p-12 text-right">
        <button class="btn btn-flat btn-secondary" type="button" data-toggle="quickview">Cancel</button>
        <button class="btn btn-flat btn-primary" type="submit">Save changes</button>
      </footer>
    </div>
       Quickview - User detail -->
     <script>
           $("#btn_guardar").click( function()
           {   
              //obtenemos los valores del form
             var NOMBRE = $('#txt_nombre').val();     
             var CORREO = $('#txt_correo').val();     
             var TELEFONO = $('#txt_telefono').val();
             var USUARIO = $('#txt_usuario').val();
             var PASSWORD = $('#txt_password').val();
             var DEPARTAMENTO = $('#txt_departamento').val();
             //probamos que se esten recogiendo los datos
             //var postData = '&NOMBRE='+NOMBRE+'&CORREO='+CORREO+'&TELEFONO='+TELEFONO+'&USUARIO'+USUARIO+'&PASSWORD'+PASSWORD+'&DEPARTAMENTO='+DEPARTAMENTO;
             //alert(postData);
            var myData={"NOMBRE":NOMBRE,"CORREO":CORREO,"TELEFONO":TELEFONO,"USUARIO":USUARIO,"PASSWORD":PASSWORD,"DEPARTAMENTO":DEPARTAMENTO};
                //call your .php script in the background, 
               //when it returns it will call the success function if the request was successful or 
               //the error one if there was an issue (like a 404, 500 or any other error status)
               //alert(myData);
               $.ajax({
                  url : "admin/usuarios/insertar.php",
                  type: "POST",
                  data : myData,
                  success: function(data,status,xhr)
                   {
                      //if success then just output the text to the status div then clear the form inputs to prepare for new data
                      $("#status_text").html(data);
                      $('#txt_nombre').val('');
                      $('#txt_correo').val('');
                      $('#txt_telefono').val('');
                      $('#txt_usuario').val('');
                      $('#txt_password').val('');
                      //location.reload();
                      $("#lista").load(location.href + " #lista>*", "");
                      app.toast("Usuario guardado correctamente", {
                              actionColor: 'success'

                       });

                   }

              }); 
           });

           $("#btn_guardar2").click( function()
           {   
              //obtenemos los valores del form
             var NOMBRE = $('#txt_nombre').val();     
             var CORREO = $('#txt_correo').val();     
             var TELEFONO = $('#txt_telefono').val();
             var USUARIO = $('#txt_usuario').val();
             var PASSWORD = $('#txt_password').val();
             var DEPARTAMENTO = $('#txt_departamento').val();
             //probamos que se esten recogiendo los datos
             //var postData = '&NOMBRE='+NOMBRE+'&CORREO='+CORREO+'&TELEFONO='+TELEFONO+'&USUARIO'+USUARIO+'&PASSWORD'+PASSWORD+'&DEPARTAMENTO='+DEPARTAMENTO;
             //alert(postData);
            var myData={"NOMBRE":NOMBRE,"CORREO":CORREO,"TELEFONO":TELEFONO,"USUARIO":USUARIO,"PASSWORD":PASSWORD,"DEPARTAMENTO":DEPARTAMENTO};
                //call your .php script in the background, 
               //when it returns it will call the success function if the request was successful or 
               //the error one if there was an issue (like a 404, 500 or any other error status)
               //alert(myData);
               $.ajax({
                  url : "admin/usuarios/insertar.php",
                  type: "POST",
                  data : myData,
                  success: function(data,status,xhr)
                   {
                      //if success then just output the text to the status div then clear the form inputs to prepare for new data
                      $("#status_text").html(data);
                      $('#txt_nombre').val('');
                      $('#txt_correo').val('');
                      $('#txt_telefono').val('');
                      $('#txt_usuario').val('');
                      $('#txt_password').val('');
                      //location.reload();
                      $("#lista").load(location.href + " #lista>*", "");
                      app.toast("Usuario guardado correctamente", {
                              actionColor: 'success'

                       });

                   }

              }); 
           });
      </script>

      <script type="text/javascript">
       function testCheckbox(oCheckbox)
          {
              var checkbox_val = oCheckbox.value;
              if (oCheckbox.checked == true)
              {
                  
                  //alert("Checkbox with name = " + oCheckbox.name + " and value =" +
                  //        checkbox_val + " is checked");

                  var daString='<div data-always-reload="true" id="qv-user-details" class="quickview quickview-lg" data-url="admin/usuarios/detalles.php?usuario='+checkbox_val+'">';
                  //alert(daString);
                  var daParent=document.getElementById("aqui");
                  daParent.innerHTML=daString;
                 document.getElementById('lst').click();
              }
              else
              {
                  //alert("Checkbox with name = " + oCheckbox.name + " and value =" +
                    //    checkbox_val + " is not checked");
              }
          }


      </script>

    <!-- END Quickview - User detail -->
  </body>
</html>

     

    

   