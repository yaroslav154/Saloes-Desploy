<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">

                <h1> TABLA DE DISPOSITIVOS </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>MODELO</th>
                            <th>COLOR</th>
                            <th> CLIENTE</th>
                            <th>CATEGORIA </th>
                            <th>MARCA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                  
									
									$sql_select="select dispositivo.id,dispositivo.modelo,dispositivo.color,cliente.nombrecliente,categoriadispositivo.tipo,marca.nombremarca
                                    from dispositivo,cliente,marca,categoriadispositivo 
									where dispositivo.idcliente=cliente.id and dispositivo.idcategoriadispositivo=categoriadispositivo.id and dispositivo.idmarca=marca.id";
									$resultado=$mysqli->query($sql_select);
									
										while($fila_usu=$resultado->fetch_assoc())
									{
	$id_dispositivo=$fila_usu['id'];
	$modelo=$fila_usu['modelo'];
	$color=$fila_usu['color'];
	$nombre_cliente=$fila_usu['nombrecliente'];
	$categoria=$fila_usu['tipo'];
	$marca=$fila_usu['nombremarca'];
		
									
										?>
                        <tr>
                            <td><?php  echo $id_dispositivo; ?></td>
                            <td><?php echo $modelo; ?></td>
                            <td><?php echo $color; ?></td>
                            <td><?php echo $nombre_cliente; ?></td>
                            <td><?php echo $categoria; ?></td>
                            <td><?php echo $marca; ?></td>
                        </tr>

                        <?php	} ?>

                    </tbody>
                </table>




                <br>


            </div>
            <div>

                <a href="../controles/dispositivo_agregar.php" class="btn btn-danger" class="button">AGREGAR</a>
              
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