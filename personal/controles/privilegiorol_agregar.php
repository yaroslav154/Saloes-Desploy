<?php include("../vista/cabeceracodigo.php"); ?>
<main>
                    <div class="container-fluid px-4">
                        <br><br>                    
                        
                        <div class="card mb-4">
                           
                            <div class="card-body">
							
                     <form action="../modelo/privilegiorol_agregar_guardar.php" method="POST">	

ROL
<select name="idrol" required="required" class="form-control">
 <?php
   $sql_select1="select * from rol";
   $resultado=$mysqli->query($sql_select1);
    while($fila=$resultado->fetch_assoc())
   {
	  $id_rol=$fila['id'];
	   $nombrerol=$fila['nombrerol'];

?>
<option value="<?php echo $id_rol; ?>"><?php echo  strtoupper($nombrerol); ?></OPTION>
<?php
   }
 ?>
 </select>
PRIVILEGIO
<select name="idprivilegio" required="required" class="form-control">
 <?php
   $sql_select2="select * from privilegio";
   $resultado2=$mysqli->query($sql_select2);
    while($fila=$resultado2->fetch_assoc())
   {
	  $id_privilegio=$fila['id'];
	   $nombreprivilegio=$fila['tipo'];
	  
?>
<option value="<?php echo $id_privilegio; ?>"><?php echo  strtoupper($nombreprivilegio); ?></OPTION>
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