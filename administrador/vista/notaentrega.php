<?php include("cabeceracodigo.php"); ?>


<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">

                <h1> NOTA DE ENTREGA </h1>
                <table class="table table-striped">
                    <thead> <!-- TITULOS -->
                        <tr>
                            <th>NUMERO</th>
                            <th>NOMBRE</th>
                            <th>FECHA</th>
                            <th>HORA</th>
                            <th>SUB TOTAL</th>
                            <th>COSTO TOTAL</th>
                            <th>NUMERO DE SERVICIO</th>
                            <th>PERSONAL</th>
                            <th>TIPO DE PAGO</th>
                        </tr>
                    </thead>
                    <tbody> <!-- CONTENIDO DE LA TABLA -->
                        <?php
                        

                        $sql = "SELECT  notaentrega.nro,
                                        notaentrega.nombre,
                                        notaentrega.fecha,
                                        notaentrega.hora,
                                        notaentrega.subtotal,
                                        notaentrega.costototal, 
                                        notaentrega.nronotaservicio,
                                        personal.nombrepersonal,
                                        tipopago.formapago
                         from notaentrega,personal,tipopago
                          WHERE notaentrega.codpersonal=personal.cod and notaentrega.idtipopago=tipopago.id  " ;
                        $resultado = $mysqli->query($sql);

                        /* ACA SE OBTIENE LOS DATOS DE LA CONSULTA */
                        while($fila_usu=$resultado->fetch_assoc())
							{

                            $nro = $fila_usu['nro'];
                            $nombre = $fila_usu['nombre'];
                            $fecha = $fila_usu['fecha'];
                            $hora = $fila_usu['hora'];
                            $subtotal = $fila_usu['subtotal'];
                            $costototal = $fila_usu['costototal'];
                            $nronotaservicio = $fila_usu['nronotaservicio'];
                            $codpersonal = $fila_usu['nombrepersonal'];
                            $idtipopago = $fila_usu['formapago'];
                        ?>
                            <tr>
                                <!-- ACA SE MUESTRA EN LA INTERFAZ -->
                                <td><?php echo $nro; ?></td>
                                <td><?php echo $nombre; ?></td>
                                <td><?php echo $fecha; ?></td>
                                <td><?php echo $hora; ?></td>
                                <td><?php echo $subtotal; ?></td>
                                <td><?php echo $costototal; ?></td>
                                <td><?php echo $nronotaservicio; ?></td>
                                <td><?php echo $codpersonal; ?></td>
                                <td><?php echo $idtipopago; ?></td>
                            </tr>
                        <?php    } ?>

                    </tbody>
                </table>




                <br>


            </div>
            <div>

                <a href="../controles/notaentrega_agregar.php" class="btn btn-danger" class="button">AGREGAR</a>
                <a href="../vista/notaentrega_botoneditar.php" class="btn btn-danger" class="button">EDITAR</a>
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