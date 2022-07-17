<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <?php
        $idproveedor = $_POST['idproveedor'];
        ?>
        <h1> <?php echo "ID: " . $idproveedor; ?></h1>
        <div class="card mb-4">
            <div class="card-body">
                <!------------------------------------TELEFONO------------------------------->
                <h1> TELEFONO </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NUMERO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select numero
                                        from telefonoproveedor
                                        where idproveedor in (select id
                                                            from proveedor
                                                            where proveedor.id = $idproveedor)";
                        $resultado = $mysqli->query($sql_select);
                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $numero = $fila_usu['numero'];
                        ?>
                            <tr>
                                <td><?php echo $numero; ?></td>
                            </tr>
                        <?php    } ?>
                    </tbody>
                </table>
                
                <!------------------------------------CORREO------------------------------->
                <h1> CORREO </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>DESCRIPCION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select correo
                                        from correoproveedor
                                        where idproveedor in (select id
                                                            from proveedor
                                                            where proveedor.id = $idproveedor)";
                        $resultado = $mysqli->query($sql_select);
                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $correo = $fila_usu['correo'];
                        ?>
                            <tr>
                                <td><?php echo $correo; ?></td>
                            </tr>
                        <?php    } ?>
                    </tbody>
                </table>
                
            </div>
            <div>
                <a href="proveedor.php" class="btn btn-danger" class="button">VOLVER</a>
            </div>
        </div>
    </div>
</main>
<?php include("piedecodigo.php"); ?>