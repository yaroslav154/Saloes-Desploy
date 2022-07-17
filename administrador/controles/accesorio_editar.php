<?php include("../vista/cabeceracodigo.php"); ?>
          
<main>
                    <div class="container-fluid px-4">
                        <br><br>                    
                        
                        <div class="card mb-4">
                           
                            <div class="card-body">
  
  <?php $id_accesorio=$_GET['id']; ?>
				
<form action="../modelo/accesorio_editar_guardar.php" method="POST">
								 
  			
<input type="hidden" name="id" VALUE="<?PHP ECHO $id_accesorio; ?> "  required="required">	
 
 NOMBRE
<input type="text" id="" name="nombre" class="form-control">
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