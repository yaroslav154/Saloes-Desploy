<?php include("../vista/cabeceracodigo.php"); ?>
<main>
                    <div class="container-fluid px-4">
                        <br><br>                    
                        
                        <div class="card mb-4">
                           
                            <div class="card-body">

                            <?php $id_usuario=$_GET['cod']; ?>
							
                            <form action="../modelo/usuario_editar_guardar.php" method="GET">
								 
  			
                 <input type="hidden" name="cod" VALUE="<?PHP ECHO $id_usuario; ?> "  required="required">	
                   

NOMBRE
<input type="text" id="" name="nombreusuario" class="form-control">
CONTRASEÑA
 <input type="text" id="" name="contraseña" class="form-control">
PERSONAL
<select name="codpersonal" required="required" class="form-control">
 <?php
   $sql_select1="select cod,nombrepersonal,apellidop,apellidom from personal";
   $resultado=$mysqli->query($sql_select1);
    while($fila=$resultado->fetch_assoc())
   {
	  $id_persona=$fila['cod'];
	   $nombre1=$fila['nombrepersonal'];
	   $apellido2=$fila['apellidop'];
	    $apellido3=$fila['apellidom'];
?>
<option value="<?php echo $id_persona; ?>"><?php echo  strtoupper($nombre1." ".$apellido2." ".$apellido3); ?></OPTION>
<?php
   }
 ?>
 </select>
ESTADO
<select name="idestado" required="required" class="form-control">
 <?php
   $sql_select2="select * from estado";
   $resultado2=$mysqli->query($sql_select2);
    while($fila=$resultado2->fetch_assoc())
   {
	  $id_categoria=$fila['id'];
	   $nombrecategoria=$fila['nombreestado'];
	  
?>
<option value="<?php echo $id_categoria; ?>"><?php echo  strtoupper($nombrecategoria); ?></OPTION>
<?php
   }
 ?>
 </select>

<br>
<br>
		 
<input type="submit" class="form-control" name="" Value="MODIFICAR DISPOSITIVO">


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