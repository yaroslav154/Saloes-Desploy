<?php include("../vista/cabeceracodigo.php"); ?>

<main>
                    <div class="container-fluid px-4">
                        <br><br>                    
                        
                        <div class="card mb-4">
                           
                            <div class="card-body">
  
  <?php $id_cliente=$_GET['id']; ?>
				
<form action="../modelo/cliente_editar_guardar.php" method="GET">
								 
  			
<input type="hidden" name="id" VALUE="<?PHP ECHO $id_cliente; ?> "  required="required">	
 NOMBRE
 <input type="text" id="nombre" name="nombre" class="form-control" >
 APELLIDO PATERNO
<input type="text" id="" name="apellidop" class="form-control">
APELLIDO MATERNO
<input type="text" id="" name="apellidom" class="form-control">
SEXO
<input type="text" id="" name="sexo" class="form-control"> 
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