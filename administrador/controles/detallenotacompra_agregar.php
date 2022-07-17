<?php include("../vista/cabeceracodigo.php"); ?>
<main>
                    <div class="container-fluid px-4">
                        <br><br>                    
                        
                        <div class="card mb-4">
                           
                            <div class="card-body">
  
<form action="../modelo/detallenotacompra_agregar_guardar.php" method="POST">
							
 ID
 <select name="id" required="required" class="form-control">
 <?php
   $sql_select1="select id from notacompra";
   $resultado=$mysqli->query($sql_select1);
    while($fila=$resultado->fetch_assoc())
   {
      $id_nota=$fila['id'];  
	
	 
	  
?>
<option value="<?php echo $id_nota; ?>"><?php echo  strtoupper($id_nota); ?></OPTION>
<?php
   }
 ?>
 </select>
 REPUESTO
 <select name="repuesto" required="required" class="form-control">
 <?php
   $sql_select1="select cod,descripcionrepuesto from repuesto";
   $resultado=$mysqli->query($sql_select1);
    while($fila=$resultado->fetch_assoc())
   {
      $id=$fila['cod'];  
	  $nombre=$fila['descripcionrepuesto'];
	 
	  
?>
<option value="<?php echo $id; ?>"><?php echo  strtoupper($nombre); ?></OPTION>
<?php
   }
 ?>
 </select>
 CANTIDAD
 <input type="number" id="" name="cantidad" class="form-control" >
 PRECIO UNITARIO
 <input type="number" id="" name="precio" class="form-control" >
 SUBTOTAL
 <input type="number" id="" name="subtotal" class="form-control" >
 
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