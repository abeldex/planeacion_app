     <?php 
              include "../../inc/conexion.php";
              $correo = $_GET['usuario'];

              //creamos la consulta
                $comando = "SELECT * FROM usuarios inner join departamentos on usuarios.departamento=departamentos.id_departamento WHERE correo = '".$correo."'";
                //ejecutamos la consulta
                $resultado = mysqli_query($con, $comando)or die(mysqli_error());
                $row = mysqli_fetch_array($resultado);
                $ID = $row["id_usuario"];
                $NOMBRE = $row["Nombre"];
                $DEPA = $row["nombre"];
                $DEPA_ID = $row["departamento"];
                $CORREO = $row["correo"];
                $USER = $row["usuario"];
                $PASS = $row["password"];
                $TEL = $row["telefono"];
     ?>

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
              <img class="avatar avatar-xxl avatar-bordered" src="assets/img/avatar/default.jpg">
            </a>
            <h4 class="mt-2 mb-0"><a class="hover-primary text-white" href="#"><?php echo $NOMBRE;?></a></h4>
            <span><i class="fa fa-map-marker w-20px"></i> <?php echo $DEPA;?></span>
          </div>
        </div>

        <div class="quickview-block form-type-material">
          <div class="form-group">
            <input type="text" class="form-control" value='<?php echo $NOMBRE;?>'>
            <label class="label-floated">Nombre</label>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $CORREO;?>">
            <label class="label-floated">Correo Electrónico</label>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $TEL;?>">
            <label class="label-floated">Telefonor</label>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $USER;?>">
            <label class="label-floated">Usuario</label>
          </div>

          <div class="form-group">
            <input type="password" class="form-control" value="<?php echo $PASS;?>" id="password">
            <label class="custom-control custom-checkbox subtitle">
                  <input type="checkbox" class="custom-control-input"  onchange="document.getElementById('password').type = this.checked ? 'text' : 'password'">
                  <span class="custom-control-indicator"></span>
                  
             </label>
            <span class="small"> Mostrar Contraseña</span>

            <label class="label-floated">Contraseña</label>
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
                      if ($row["id_departamento"] == $DEPA_ID){
                          echo '<option selected value="'.$row["id_departamento"].'">'.$row["nombre"].' </option>';
                      }
                      else{
                      echo '<option value="'.$row["id_departamento"].'">'.$row["nombre"].' </option>';
                    }
                  }
                ?>
              </select>
              <label class="label-floated">Departamento</label>
            </div>
        </div>
      </div>

      <footer class="p-12 text-right">
        <button class="btn btn-flat btn-secondary" type="button" data-toggle="quickview">CANCELAR</button>
        <button class="btn btn-flat btn-primary" type="submit">ACTUALIZAR</button>
      </footer>