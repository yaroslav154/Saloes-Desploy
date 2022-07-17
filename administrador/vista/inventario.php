<?php include("cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">

                <h1> TABLA DE INVENTARIO </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>PRODUCTO</th>
                            <th>FECHA ENTRADA</th>
                            <th>CANTIDAD ENTRANTE</th>
                            <th>FECHA SALIDA</th>
                            <th>CANTIDAD SALIDA</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                  
									
									$sql_select="select repuesto.descripcionrepuesto,entradaproducto.FechaEntrada,entradaproducto.Cantidad,salidaproducto.FechaSalida,salidaproducto.cantidadproducto 
                                    from entradaproducto,salidaproducto,repuesto 
                                    where entradaproducto.id=repuesto.cod"; 
									$resultado=$mysqli->query($sql_select);
									
										while($fila_usu=$resultado->fetch_assoc())
									{
	$producto=$fila_usu['descripcionrepuesto'];
		$fechaEntrada=$fila_usu['FechaEntrada'];
         $cantidad=$fila_usu['Cantidad'];
          $fechaSalida=$fila_usu['FechaSalida'];
          $cantidad2=$fila_usu['cantidadproducto'];					
										?>
                        <tr>
                            <td><?php  echo $producto; ?></td>
                            <td><?php echo  $fechaEntrada; ?></td>
                            <td><?php echo  $cantidad;      ?></td>
                            <td><?php echo $fechaSalida; ?></td>
                            <td><?php echo $cantidad2; ?></td>

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