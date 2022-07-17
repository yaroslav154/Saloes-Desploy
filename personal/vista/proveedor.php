<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">

                <h1> PROVEEDOR </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>UBICACION</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "SELECT *
                                    from proveedor";
                        $resultado = $mysqli->query($sql_select);

                        while ($fila_usu = $resultado->fetch_assoc()) {  //TODO ESTO LLENA LA TABLA
                            $id = $fila_usu['id'];
                            $nombre = $fila_usu['nombre'];
                            $ubicacion = $fila_usu['ubicacion'];
                        ?>
                            <tr>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $nombre; ?></td>
                                <td><?php echo $ubicacion; ?></td>
                            </tr>

                        <?php    } ?>

                    </tbody>
                </table>
                <br>
            </div>
            <div>
                <a href="../controles/proveedor_agregar.php" class="btn btn-danger" class="button">AGREGAR</a>
               
                <br>
                <br>
                <a href="proveedor_botonagregartelefono.php" class="btn btn-primary" class="button">AGREGAR TELEFONO</a>
                <a href="proveedor_botonagregarcorreo.php" class="btn btn-primary" class="button">AGREGAR CORREO</a>
                <a href="proveedor_botonvisualizardetalle.php" class="btn btn-primary" class="button">DETALLE DEL PROVEEDOR</a>

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