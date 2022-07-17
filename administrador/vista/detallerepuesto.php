<?php include("cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">

                <h1> TABLA DE DETALLE REPUESTOS </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>PROVEEDOR</th>
                            <th>REPUESTO</th>
                            <th>PRECIO</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select =  "select proveedor.nombre, 
                                        repuesto.descripcionrepuesto, 
                                        detallerepuesto.precio
                                        from proveedor, repuesto, detallerepuesto
                                        where proveedor.id = detallerepuesto.idproveedor and 
                                            detallerepuesto.codrepuesto = repuesto.cod ";

                        $resultado = $mysqli->query($sql_select);

                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $id_proveedor = $fila_usu['nombre'];
                            $cod_repuesto = $fila_usu['descripcionrepuesto'];
                            $precio = $fila_usu['precio'];


                        ?>
                            <tr>
                                <td><?php echo $id_proveedor; ?></td>
                                <td><?php echo  $cod_repuesto; ?></td>
                                <td><?php echo  $precio;       ?></td>
                            </tr>
                        <?php    } ?>
                    </tbody>
                </table>
                <br>
            </div>
            <div>

                <a href="../controles/detallerepuesto_agregar.php" class="btn btn-danger" class="button">AGREGAR</a>
                <a href="detallerepuesto_botoneditar.php" class="btn btn-danger" class="button">EDITAR</a>
                <a href="detallerepuesto_botoneliminar.php" class="btn btn-danger" class="button">ELIMINAR</a>
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