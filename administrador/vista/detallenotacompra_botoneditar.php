<?php include("cabeceracodigo.php"); ?>


<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">

                <h1> TABLA DE DETALLES NOTAS DE COMPRAS </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>REPUESTO</th>
                            <th>CANTIDAD</th>
                            <th>PRECIO UNITARIO</th> 
                            <th>SUBTOTAL</th>
                            <th>EDITAR</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                  
									
									$sql_select=" select detallenotacompra.idnotacompra,repuesto.descripcionrepuesto,detallenotacompra.cantidad,detallenotacompra.preciounitario,detallenotacompra.subtotal
                                    from detallenotacompra,repuesto
                                    where detallenotacompra.codrepuesto=repuesto.cod" ;
									$resultado=$mysqli->query($sql_select);
									
										while($fila_usu=$resultado->fetch_assoc())
									{
	$id_nota=$fila_usu['idnotacompra'];
	$repuesto=$fila_usu['descripcionrepuesto'];
    $cantidad=$fila_usu['cantidad'];
    $precio=$fila_usu['preciounitario'];
    $subtotal=$fila_usu['subtotal'];
   
		
									
										?>
                        <tr>
                            <td><?php  echo $id_nota; ?></td>
                            <td><?php echo $repuesto; ?></td>
                            <td><?php echo $cantidad; ?></td>
                            <td><?php echo $precio; ?></td>
                            <td><?php echo $subtotal; ?></td>
                            <td><a href='../controles/detallenotacompra_editar.php?id=<?php echo $id_nota ;?>'>Editar</td>
                         

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