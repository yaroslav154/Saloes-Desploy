<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <?php
        $numero_notarecepcion = $_POST['nronotarecepcion'];
        ?>
        <h1> <?php echo "Nro: " . $numero_notarecepcion; ?></h1>
        <div class="card mb-4">
            <div class="card-body">
                <h1> FALLO DEL DISPOSITIVO </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>DESCRIPCION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select detalleproblema.descripcion
                                        from detalleproblema,notarecepcion
                                        where detalleproblema.nronotarecepcion = notarecepcion.nro
                                        and detalleproblema.nronotarecepcion in (select notarecepcion.nro
                                                                                    from notarecepcion
                                                                                    where notarecepcion.nro = $numero_notarecepcion)";
                        $resultado = $mysqli->query($sql_select);
                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $descripcion = $fila_usu['descripcion'];
                        ?>
                            <tr>
                                <td><?php echo $descripcion; ?></td>
                            </tr>
                        <?php    } ?>
                    </tbody>
                </table>
                <!-- ---------------------------------------------------------------- -->
                <h1> ACCESORIO DEL DISPOSITIVO </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>TIPO</th>
                            <th>DETALLE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         $sql_select = "select accesorio.nombre, detalleaccesorio.detalle
                                        from detalleaccesorio,accesorio
                                        where accesorio.id = detalleaccesorio.idaccesorio
                                        and detalleaccesorio.nronotarecepcion in (select notarecepcion.nro
                                                                                    from notarecepcion
                                                                                    where notarecepcion.nro = $numero_notarecepcion)";                                                                  
                        $resultado = $mysqli->query($sql_select);
                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $nombre = $fila_usu['nombre'];
                            $detalle = $fila_usu['detalle'];
                        ?>
                            <tr>
                                <td><?php echo $nombre; ?></td>
                                <td><?php echo $detalle; ?></td>
                            </tr>
                        <?php    } ?>
                    </tbody>
                </table>
            </div>
            <div>
                <a href="notarecepcion.php" class="btn btn-danger" class="button">VOLVER</a>
            </div>
        </div>
    </div>
</main>
<?php include("piedecodigo.php"); ?>