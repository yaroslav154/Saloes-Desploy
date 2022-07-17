<?php include("../vista/cabeceracodigo.php"); ?>
<main>
                    <div class="container-fluid px-4">
                        <br><br>                    
                        
                        <div class="card mb-4">
                           
                            <div class="card-body">
							
                     <form action="../modelo/usuario_agregar_guardar.php" method="POST">	

CODIGO
 <input type="text" id="" name="cod" class="form-control">
NOMBRE
<input type="text" id="" name="nombreusuario" class="form-control">
CONTRASEÑA
<input type="text" id="" name="contraseña" class="form-control">
ESTADO
<select name="idestado" required="required" class="form-control">
 <?php
   $sql_select1="select * from estado";
   $resultado=$mysqli->query($sql_select1);
    while($fila=$resultado->fetch_assoc())
   {
	  $id_estado=$fila['id'];
	   $nombre1=$fila['nombreestado'];
	
?>
<option value="<?php echo $id_estado; ?>"><?php echo  strtoupper($nombre1); ?></OPTION>
<?php
   }
 ?>
 </select>
PERSONAL
<select name="codpersonal" required="required" class="form-control">
 <?php
   $sql_select1="select * from personal";
   $resultado=$mysqli->query($sql_select1);
    while($fila=$resultado->fetch_assoc())
   {
	  $id_personal=$fila['cod'];
	   $nombrepersonal=$fila['nombrepersonal'];
       $apellido2=$fila['apellidop'];
	    $apellido3=$fila['apellidom'];
       
	  
?>
<option value="<?php echo $id_personal; ?>"><?php echo  strtoupper($nombrepersonal." ".$apellido2." ".$apellido3); ?></OPTION>
<?php
   }
 ?>
 </select>

<br>
<br>
		 
<input type="submit" class="form-control" name="" Value="AGREGAR DISPOSITIVO">


  </form>  
 
                            </div>
                        </div>
               
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>


<?php include("../vista/piedecodigo.php"); ?>