<?php include("cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <div class="card mb-4">
            <div class="card-body">
                <h1> EDITAR UNA FACTURA </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NRO FACTURA</th>
                            <th>NIT</th>
                            <th>NOMBRE</th>
                            <th>NRO NOTA DE ENTREGA</th>
                            <th>EDITAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select factura.nrofactura,factura.nit,factura.nombre,notaentrega.nro
                                     from factura,notaentrega
                                     where factura.nronotaentrega=notaentrega.nro";
                        $resultado = $mysqli->query($sql_select);

                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $nro_factura = $fila_usu['nrofactura'];
                            $nit = $fila_usu['nit'];
                            $nombre = $fila_usu['nombre'];
                            $nro_notaentrega = $fila_usu['nro'];

                        ?>
                            <tr>
                                <td><?php echo $nro_factura; ?></td>
                                <td><?php echo  $nit; ?></td>
                                <td><?php echo  $nombre;      ?></td>
                                <td><?php echo  $nro_notaentrega; ?></td>
                                <td> <a href='../controles/factura_editar.php?nro=<?php echo $nro_factura; ?>'> Editar</a> </td>
                            </tr>
                        <?php    } ?>

                    </tbody>
                </table>
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