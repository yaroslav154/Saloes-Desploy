<?php include("cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">

                <h1> TABLA DE SERVICIOS CON REPUESTOS </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>COSTO</th>
                            <th>CATEGORIA SERVICIO</th>
                            <th> REPUESTO</th>
                            <th>CATEGORIA DISPOSITIVO</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                  
									
									$sql_select="select serviciorepuesto.id,serviciorepuesto.costo,categoriaservicio.descripcion,repuesto.descripcionrepuesto,categoriadispositivo.tipo
                                    from serviciorepuesto,categoriaservicio,repuesto,categoriadispositivo 
                                    where serviciorepuesto.idcategoriaservicio=categoriaservicio.id and serviciorepuesto.codrepuesto=repuesto.cod and serviciorepuesto.idcategoriadispositivo=categoriadispositivo.id" ;
									$resultado=$mysqli->query($sql_select);
									
										while($fila_usu=$resultado->fetch_assoc())
									{
	$id_serviciorepuesto=$fila_usu['id'];
		$costo=$fila_usu['costo'];
          $categoría_servicio=$fila_usu['descripcion'];
           $id_repuesto=$fila_usu['descripcionrepuesto'];
        $categoria_dispositivo=$fila_usu['tipo'];
									
										?>
                        <tr>
                            <td><?php  echo $id_serviciorepuesto; ?></td>
                            <td><?php echo  $costo; ?></td>
                            <td><?php echo  $categoría_servicio; ?></td>
                            <td><?php echo  $id_repuesto;      ?></td>
                            <td><?php echo  $categoria_dispositivo;?></td>
                            <td><a href= '../modelo/serviciorepuesto_eliminar_guardar.php?id=<?php echo $id_serviciorepuesto ;?>'> Eliminar </a>


                        </tr>
                        <?php	} ?>

                    </tbody>
                </table>




                <br>


            </div>
            <div>

                
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