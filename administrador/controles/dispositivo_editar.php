<?php include("../vista/cabeceracodigo.php"); ?>
          
<main>
                    <div class="container-fluid px-4">
                        <br><br>                    
                        
                        <div class="card mb-4">
                           
                            <div class="card-body">
							
                     <form action="../modelo/dispositivo_editar_guardar.php" method="POST">	

ID
 <input type="number" id="" name="id" class="form-control">
MODELO
<input type="text" id="" name="modelo" class="form-control">
COLOR
<input type="text" id="" name="color" class="form-control">
CLIENTE
<select name="idcliente" required="required" class="form-control">
 <?php
   $sql_select1="select * from cliente";
   $resultado=$mysqli->query($sql_select1);
    while($fila=$resultado->fetch_assoc())
   {
	  $id_persona=$fila['id'];
	   $nombre1=$fila['nombrecliente'];
	   $apellido2=$fila['apellidop'];
	    $apellido3=$fila['apellidom'];
?>
<option value="<?php echo $id_persona; ?>"><?php echo  strtoupper($nombre1." ".$apellido2." ".$apellido3); ?></OPTION>
<?php
   }
 ?>
 </select>
CATEGORIA
<select name="idcategoriadispositivo" required="required" class="form-control">
 <?php
   $sql_select1="select * from categoriadispositivo";
   $resultado=$mysqli->query($sql_select1);
    while($fila=$resultado->fetch_assoc())
   {
	  $id_categoria=$fila['id'];
	   $nombrecategoria=$fila['tipo'];
	  
?>
<option value="<?php echo $id_categoria; ?>"><?php echo  strtoupper($nombrecategoria); ?></OPTION>
<?php
   }
 ?>
 </select>
MARCA
<select name="idmarca" required="required" class="form-control">
 <?php
   $sql_select1="select * from marca";
   $resultado=$mysqli->query($sql_select1);
    while($fila=$resultado->fetch_assoc())
   {
	  $id_marca=$fila['id'];
	   $nombremarca=$fila['nombremarca'];
	  
?>
<option value="<?php echo $id_marca; ?>"><?php echo  strtoupper($nombremarca); ?></OPTION>
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