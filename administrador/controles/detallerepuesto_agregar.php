<?php include("../vista/cabeceracodigo.php"); ?>
          
<main>
                    <div class="container-fluid px-4">
                        <br><br>                    
                        
                        <div class="card mb-4">
                           
                            <div class="card-body">
							
                     <form action="../modelo/detallerepuesto_agregar_guardar.php" method="POST">	

PROVEEDOR
<select name="proveedor" required="required" class="form-control">
 <?php
   $sql_select1="select * from proveedor";
   $resultado=$mysqli->query($sql_select1);
    while($fila=$resultado->fetch_assoc())
   {
      $idproveedor=$fila['id'];  
	  $nombreproveedor=$fila['nombre'];
	 
	  
?>
<option value="<?php echo $idproveedor; ?>"><?php echo  strtoupper($nombreproveedor); ?></OPTION>
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
	  $descripcion=$fila['descripcionrepuesto'];
	 
	  
?>
<option value="<?php echo $codrepuesto; ?>"><?php echo  strtoupper($descripcion); ?></OPTION>
<?php
   }
 ?>
</select>
PRECIO
<input type="text" id="" name="precio" class="form-control">



<br>
<br>
		 
<input type="submit" class="form-control" name="" Value="AGREGAR REPUESTO">


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
