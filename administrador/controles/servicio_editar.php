<?php include("../vista/cabeceracodigo.php"); ?>
          
<main>
                    <div class="container-fluid px-4">
                        <br><br>                    
                        
                        <div class="card mb-4">
                           
                            <div class="card-body">
  
  <?php $id_servicio=$_GET['id']; ?>
				
<form action="../modelo/servicio_editar_guardar.php" method="POST">
								 
  			
<input type="hidden" name="id" VALUE="<?PHP ECHO $id_servicio; ?> "  required="required">	
 
COSTO
<input type="text" id="" name="costo" class="form-control">
CATEGORIA SERVICIO
<select name="categoriaservicio" required="required" class="form-control">
 <?php
   $sql_select1="select * from categoriaservicio";
   $resultado=$mysqli->query($sql_select1);
    while($fila=$resultado->fetch_assoc())
   {
      $id_servicio=$fila['id'];  
	  $nombrecategoriaservicio=$fila['descripcion'];
	 
	  
?>
<option value="<?php echo $id_servicio; ?>"><?php echo  strtoupper($nombrecategoriaservicio); ?></OPTION>
<?php
   }
 ?>
</select>

CATEGORIA DISPOSITIVO
<select name="categoria" required="required" class="form-control">
 <?php
   $sql_select1="select * from categoriadispositivo";
   $resultado=$mysqli->query($sql_select1);
    while($fila=$resultado->fetch_assoc())
   {
      $id=$fila['id'];  
	  $nombrecategoriadispositivo=$fila['tipo'];
	 
	  
?>
<option value="<?php echo $id; ?>"><?php echo  strtoupper($nombrecategoriadispositivo); ?></OPTION>
<?php
   }
 ?>
</select>
<br>
<br>
		 
<input type="submit" class="form-control" name="" Value="GUARDAR DATOS">


  </form>  
                            </div>
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