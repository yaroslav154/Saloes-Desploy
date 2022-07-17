<?php include("../vista/cabeceracodigo.php"); ?>
<main>
                    <div class="container-fluid px-4">
                        <br><br>                    
                        
                        <div class="card mb-4">
                           
                            <div class="card-body">
  

				
<form action="../modelo/notacompra_agregar_guardar.php" method="POST">
								
 ID
 <input type="number" id="" name="id" class="form-control" >
 NUMERO
 <input type="number" id="" name="numero" class="form-control" >   
 FECHA
 <input type="date" id="" name="fecha" class="form-control" >
 MONTO
 <input type="number" id="" name="monto" class="form-control" >
 PROVEEDOR
 <select name="proveedor" required="required" class="form-control">
 <?php
   $sql_select1="select id,nombre from proveedor";
   $resultado=$mysqli->query($sql_select1);
    while($fila=$resultado->fetch_assoc())
   {
      $id=$fila['id'];  
	  $nombre=$fila['nombre'];
	 
	  
?>
<option value="<?php echo $id; ?>"><?php echo  strtoupper($nombre); ?></OPTION>
<?php
   }
 ?>
 </select>
 ENCARGADO
 <select name="encargado" required="required" class="form-control">
 <?php
   $sql_select2="select cod,nombrepersonal from personal";
   $resultado1=$mysqli->query($sql_select2);
    while($fila=$resultado1->fetch_assoc())
   {
      $codigo=$fila['cod'];  
	  $nombrepersonal=$fila['nombrepersonal'];
	 
	  
?>
<option value="<?php echo $codigo; ?>"><?php echo  strtoupper($nombrepersonal); ?></OPTION>
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