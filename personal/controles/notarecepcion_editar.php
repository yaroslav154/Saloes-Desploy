<?php include("../vista/cabeceracodigo.php"); ?>
<main>
                    <div class="container-fluid px-4">
                        <br><br>                    
                        
                        <div class="card mb-4">
                           
                            <div class="card-body">
                           
     <?php $id_nota=$_GET['id']; ?>
				
               
<form action="../modelo/notarecepcion_editar_guardar.php" method="POST">	     

 <input type="hidden" name="id" VALUE="<?PHP ECHO $id_nota; ?> "  required="required">							
OBSERVACION
<input type="text" id="" name="observacion" class="form-control">
FECHA
<input type="date" id="" name="fecha" class="form-control">
HORA
<input type="time" id="" name="hora" class="form-control">
NOMBRE PERSONAL
<select name="codpersonal" required="required" class="form-control">
 <?php
   $sql_select1="select cod,nombrepersonal from personal";
   $resultado=$mysqli->query($sql_select1);
    while($fila=$resultado->fetch_assoc())
   {
      $codigo=$fila['cod'];  
	  $nombrepersonal=$fila['nombrepersonal'];
	 
	  
?>
<option value="<?php echo $codigo; ?>"><?php echo  strtoupper($nombrepersonal); ?></OPTION>
<?php
   }
 ?>
 </select>
DISPOSITIVO
<select name="iddispositivo" required="required" class="form-control">
 <?php
   $sql_select1="select id,modelo from dispositivo";
   $resultado=$mysqli->query($sql_select1);
    while($fila=$resultado->fetch_assoc())
   {
        $id=$fila['id'];
	   $modelo=$fila['modelo'];
	  
?>   
<option value="<?php echo $id; ?>"><?php echo  strtoupper($modelo); ?></OPTION>
<?php
   }
 ?>
 </select>
<br>
<br>
		 
<input type="submit" class="form-control" name="" Value="MODIFICAR NOTA DE RECEPCION">


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