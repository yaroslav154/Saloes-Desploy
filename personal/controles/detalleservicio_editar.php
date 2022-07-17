<?php include("../vista/cabeceracodigo.php"); ?>
          
<main>
                    <div class="container-fluid px-4">
                        <br><br>                    
                        
                        <div class="card mb-4">
                           
                            <div class="card-body">
<?php $id_nota=$_GET['nronotaservicio']; ?>					
  <form action="../modelo/detalleservicio_editar_guardar.php" method="POST">	

  <input type="hidden" name="id" VALUE="<?PHP ECHO $id_nota; ?> "  required="required">
SERVICIO
<select name="servicio" required="required" class="form-control">
 <?php
   $sql_select1="select servicio.id, categoriaservicio.descripcion 
   from servicio,categoriaservicio 
   where servicio.idcategoriaservicio=categoriaservicio.id";
   $resultado=$mysqli->query($sql_select1);
    while($fila=$resultado->fetch_assoc())
   {
	  $id_servicio=$fila['id'];
	   $nombre=$fila['descripcion'];
	   
?>
<option value="<?php echo $id_servicio; ?>"><?php echo  strtoupper($nombre); ?></OPTION>
<?php
   }
 ?>
 </select>
COSTO
<input type="number" id="" name="costo" class="form-control">
<br>
<br>
		 
<input type="submit" class="form-control" name="" Value="EDITAR DETALLE SERVICIO">


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