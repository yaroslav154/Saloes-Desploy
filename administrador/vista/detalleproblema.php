<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <?php
        $numero_notarecepcion = $_POST['nronotarecepcion'];
        ?>
        <h1> <?php echo "Nro: " . $numero_notarecepcion; ?></h1>
        <div class="card mb-4">
            <div class="card-body">
                <h1> PROBLEMA DEL DISPOSITIVO </h1>
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
                <td> <a href='../controles/detalleproblema_agregar.php?nro=<?php echo $numero_notarecepcion; ?>' class="btn btn-primary" class="button"> AGREGAR</a></td>
                <td> <a href='detalleproblema_botoneditar.php?nro=<?php echo $numero_notarecepcion; ?>' class="btn btn-primary" class="button"> EDITAR</a></td>
                <td> <a href='detalleproblema_botoneliminar.php?nro=<?php echo $numero_notarecepcion; ?>' class="btn btn-primary" class="button"> ELIMINAR</a></td>
            </div>
            <div>
                <a href="notarecepcion.php" class="btn btn-danger" class="button">VOLVER</a>
            </div>
        </div>
    </div>
</main>
<?php include("piedecodigo.php"); ?>