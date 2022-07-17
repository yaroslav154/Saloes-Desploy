<?php include("cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">
            <h1> TABLA BITACORA </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NRO</th>
                            <th>FECHA</th>
                            <th>HORA</th>
                            <th>ACCION</th>
              
                            <th>USUARIO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                  
									
									$sql_select="select nro,fecha,hora,accion,ejecutor
		                         	from bitacora
                                     " ;
									$resultado=$mysqli->query($sql_select);
									
										while($fila_usu=$resultado->fetch_assoc())
									{
;
		$numero=$fila_usu['nro'];
        $fecha=$fila_usu['fecha'];
		$hora=$fila_usu['hora'];
        $accion=$fila_usu['accion'];

        $ejecutor=$fila_usu['ejecutor'];
		
									
										?>
                        <tr>
                            <td><?php  echo $numero; ?></td>
                            <td><?php echo $fecha; ?></td>
                            <td><?php echo $hora; ?></td>
                            <td><?php echo $accion; ?></td>

                            <td><?php echo $ejecutor; ?></td>

                        </tr>
                        <?php	} ?>

                    </tbody>
                </table>




                <br>


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