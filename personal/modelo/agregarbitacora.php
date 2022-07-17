<?php include("cabeceracodigo.php"); ?>
          
				    <div class="container-fluid px-4">
                        <br><br>
                        <div class="card mb-4">
                           
                            <div class="card-body">
							
                     <form action="../modelo/bitacora_guardar.php" method="POST">	

NRO
 <input type="number" id="" name="id" class="form-control">
FECHA
<input type="date" id="" name="fecha" class="form-control">
HORA
 <input type="time" id="" name="hora" class="form-control">
ACCION
<input type="text" id="" name="accion" class="form-control">
USER
 <input type="text" id="" name="cod" class="form-control">


<br>
<br>
		 
<input type="submit" class="form-control" name="" Value="AGREGAR ACCESORIO">


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
                <?php include("piedecodigo.php"); ?> 
