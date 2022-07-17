<?php include("../vista/cabeceracodigo.php"); ?>
<main>
                    <div class="container-fluid px-4">
                        <br><br>                    
                        
                        <div class="card mb-4">
                           
                            <div class="card-body">
							
                     <form action="../modelo/rolusuario_agregar_guardar.php" method="POST">	

ROL
<select name="idrol" required="required" class="form-control">
 <?php
   $sql_select1="select id,nombrerol from rol";
   $resultado=$mysqli->query($sql_select1);
    while($fila=$resultado->fetch_assoc())
   {
	  $id_rol=$fila['id'];
	   $nombre1=$fila['nombrerol'];

?>
<option value="<?php echo $id_rol; ?>"><?php echo  strtoupper($nombre1); ?></OPTION>
<?php
   }
 ?>
 </select>
USUARIO
<select name="codusuario" required="required" class="form-control">
 <?php
   $sql_select1="select usuario.cod,nombreusuario,nombrepersonal from usuario,personal
   where usuario.codpersonal=personal.cod";
   $resultado=$mysqli->query($sql_select1);
    while($fila=$resultado->fetch_assoc())
   {
	  $id_usu=$fila['cod'];

       $nombrepersonal=$fila['nombrepersonal']
?>
<option value="<?php echo $id_usu; ?>"><?php echo  strtoupper($nombrepersonal); ?></OPTION>
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