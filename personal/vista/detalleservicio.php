<?php include("cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">

                <h1> TABLA DE DETALLES SERVICIOS </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NUMERO NOTA </th>
                            <th>SERVICO</th>
                            <th>COSTO</th>
                         
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                  
									
									$sql_select="select detalleservicio.nronotaservicio,categoriaservicio.descripcion,detalleservicio.costo 
                                    from detalleservicio,categoriaservicio,servicio 
                                    where detalleservicio.idservicio=servicio.id and servicio.idcategoriaservicio=categoriaservicio.id" ;
									$resultado=$mysqli->query($sql_select);
									
										while($fila_usu=$resultado->fetch_assoc())
									{
	$id_nota=$fila_usu['nronotaservicio'];
		$servicio=$fila_usu['descripcion'];
          $costo=$fila_usu['costo'];
           
									
										?>
                        <tr>
                            <td><?php  echo $id_nota ?></td>
                            <td><?php echo  $servicio; ?></td>
                            <td><?php echo  $costo; ?></td>
                      

                        </tr>
                        <?php	} ?>

                    </tbody>
                </table>




                <br>


            </div>
            <div>

                <a href="../controles/detalleservicio_agregar.php" class="btn btn-danger" class="button">AGREGAR</a>
              
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
<?php include("piedecodigo.php"); ?>