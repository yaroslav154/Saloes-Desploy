<?php include("cabeceracodigo.php"); ?>


<main>
    <div class="container-fluid px-4">
        <br><br>
        <?php
        $idproveedor = $_GET['id'];
        ?>
        <div class="card mb-4">

            <div class="card-body">

                <h1> EDITAR CORREO DEL PROVEEDOR </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>CORREO</th>
                            <th>EDITAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select idcorreoproveedor, correo
                        from correoproveedor
                        where correoproveedor.idproveedor in (select id
                                                            from proveedor
                                                            where proveedor.id = $idproveedor)";
                        $resultado = $mysqli->query($sql_select);
                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $id = $fila_usu['idcorreoproveedor'];
                            $correo = $fila_usu['correo'];

                        ?>
                            <tr>
                                <td><?php echo $correo; ?></td>
                                <td><a href='../controles/correoproveedor_editar.php?id=<?php echo $id; ?>& idproveedor=<?php echo $idproveedor; ?>'>Editar</td>
                            </tr>
                        <?php    } ?>

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