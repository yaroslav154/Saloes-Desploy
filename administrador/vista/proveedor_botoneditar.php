<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">
                <h1> EDITAR PROVEEDOR </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>UBICACION</th>
                            <th>EDITAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "SELECT *
                        from proveedor";
                        $resultado = $mysqli->query($sql_select);
                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $id_proveedor = $fila_usu['id'];
                            $nombre = $fila_usu['nombre'];
                            $ubicacion = $fila_usu['ubicacion'];
                        ?>
                            <tr>
                                <td><?php echo $id_proveedor; ?></td>
                                <td><?php echo $nombre; ?></td>
                                <td><?php echo $ubicacion; ?></td>
                                <td><a href='../controles/proveedor_editar.php?id=<?php echo $id_proveedor; ?>'> editar</a> </td>
                            </tr>
                        <?php    } ?>
                    </tbody>
                </table>
                <br>
            </div>
            <div>
                <td>
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