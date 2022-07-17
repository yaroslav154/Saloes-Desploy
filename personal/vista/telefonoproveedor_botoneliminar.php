<?php include("cabeceracodigo.php"); ?>


<main>
    <div class="container-fluid px-4">
        <br><br>
        <?php
        $idproveedor = $_GET['id'];
        ?>
        <div class="card mb-4">

            <div class="card-body">

                <h1> ELIMINAR TELEFONO DEL PROVEEDOR </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>TELEFONO</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select idtelefonoproveedor, numero
                        from telefonoproveedor
                        where telefonoproveedor.idproveedor in (select id
                                                            from proveedor
                                                            where proveedor.id = $idproveedor)";
                        $resultado = $mysqli->query($sql_select);
                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $id = $fila_usu['idtelefonoproveedor'];
                            $numero = $fila_usu['numero'];

                        ?>
                            <tr>
                                <td><?php echo $numero; ?></td>
                                <td><a href='../modelo/telefonoproveedor_eliminar_guardar.php?id=<?php echo $id; ?>& idproveedor=<?php echo $idproveedor; ?>'>Eliminar</td>
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