<?php include("../vista/cabeceracodigo.php"); ?>
          
<main>
                    <div class="container-fluid px-4">
                        <br><br>                    
                        
                        <div class="card mb-4">
                           
                            <div class="card-body">
							
                     <form action="../modelo/serviciorepuesto_agregar_guardar.php" method="POST">	

ID
 <input type="number" id="" name="id" class="form-control">
COSTO
<input type="text" id="" name="costo" class="form-control">

CATEGORIA SERVICIO
<select name="idcategoriaservicio" required="required" class="form-control">
 <?php
   $sql_select1="select * from categoriaservicio";
   $resultado=$mysqli->query($sql_select1);
    while($fila=$resultado->fetch_assoc())
   {
      $id_categoriaservicio=$fila['id'];  
	  $nombrecategoriaservicio=$fila['descripcion'];
	 
	  
?>
<option value="<?php echo $id_categoriaservicio; ?>"><?php echo  strtoupper($nombrecategoriaservicio); ?></OPTION>
<?php
   }
 ?>
</select>

REPUESTO
<select name="codrepuesto" required="required" class="form-control">
 <?php
   $sql_select1="select * from repuesto";
   $resultado=$mysqli->query($sql_select1);
    while($fila=$resultado->fetch_assoc())
   {
      $codrepuesto=$fila['cod'];  
	  $nombrerepuesto=$fila['descripcionrepuesto'];
	 
	  
?>
<option value="<?php echo $codrepuesto; ?>"><?php echo  strtoupper($nombrerepuesto); ?></OPTION>
<?php
   }
 ?>
</select>


CATEGORIA DISPOSITIVO
<select name="idcategoriadispositivo" required="required" class="form-control">
 <?php
   $sql_select1="select id,tipo from categoriadispositivo";
   $resultado=$mysqli->query($sql_select1);
    while($fila=$resultado->fetch_assoc())
   {
      $id_categoriadispositivo=$fila['id'];  
	  $nombrecategoriadispositivo=$fila['tipo'];
	 
	  
?>
<option value="<?php echo $id_categoriadispositivo; ?>"><?php echo  strtoupper($nombrecategoriadispositivo); ?></OPTION>
<?php
   }
 ?>
</select>



<br>
<br>
		 
<input type="submit" class="form-control" name="" Value="AGREGAR SERVICIOREPUESTO">


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
