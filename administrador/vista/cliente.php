<?php include("cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">
                <h1> TABLA DE CLIENTES </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>APELLIDO PATERNO</th>
                            <th>APELLIDO MATERNO</th>
                            <th>SEXO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select * 
		                         	from cliente ";
                        $resultado = $mysqli->query($sql_select);

                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $id_cliente = $fila_usu['id'];
                            $nombre = $fila_usu['nombrecliente'];
                            $apellido1 = $fila_usu['apellidop'];
                            $apellido2 = $fila_usu['apellidom'];
                            $sexo = $fila_usu['sexo'];
                        ?>
                            <tr>
                                <td><?php echo $id_cliente; ?></td>
                                <td><?php echo $nombre; ?></td>
                                <td><?php echo $apellido1; ?></td>
                                <td><?php echo $apellido2; ?></td>
                                <td><?php echo $sexo; ?></td>
                            </tr>
                        <?php    } ?>
                    </tbody>
                </table>
                <br>
            </div>
            <div>              
                <a href="../controles/cliente_agregar.php" class="btn btn-danger" class="button">AGREGAR</a>
                <a href="cliente_botoneditar.php" class="btn btn-danger" class="button">EDITAR</a>
                <a href="cliente_botoneliminar.php" class="btn btn-danger" class="button">ELIMINAR</a>
                <br>
                <br>
                <a href="cliente_botonagregartelefono.php" class="btn btn-primary" class="button">AGREGAR TELEFONO</a>
                <a href="cliente_botonagregarcorreo.php" class="btn btn-primary" class="button">AGREGAR CORREO</a>
                <a href="cliente_botonvisualizardetalle.php" class="btn btn-primary" class="button">DETALLE DEL CLIENTE</a>
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