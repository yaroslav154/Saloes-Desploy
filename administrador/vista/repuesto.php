<?php include("cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">

                <h1> TABLA DE REPUESTOS </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>CÓDIGO</th>
                            <th>DESCRIPCIÓN</th>
                            <th>PRECIO</th>
                            <th>CATEGORIA REPUESTO</th>
                            <th> MARCA</th>
                            <th>CATEGORIA DISPOSITIVO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select repuesto.cod , repuesto.descripcionrepuesto,repuesto.precio,categoriarepuesto.tiporepuesto,marca.nombremarca,categoriadispositivo.tipo
                        from repuesto,categoriarepuesto,marca,categoriadispositivo 
                        where repuesto.idcategoriarepuesto=categoriarepuesto.id and repuesto.idmarca=marca.id and repuesto.idcategoriadispositivo=categoriadispositivo.id";
                        $resultado = $mysqli->query($sql_select);
                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $id_repuesto = $fila_usu['cod'];
                            $descripción = $fila_usu['descripcionrepuesto'];
                            $precio = $fila_usu['precio'];
                            $categoría_repuesto = $fila_usu['tiporepuesto'];
                            $marca = $fila_usu['nombremarca'];
                            $dispositivo = $fila_usu['tipo'];
                        ?>
                            <tr>
                                <td><?php echo $id_repuesto; ?></td>
                                <td><?php echo  $descripción; ?></td>
                                <td><?php echo  $precio;      ?></td>
                                <td><?php echo  $categoría_repuesto; ?></td>
                                <td><?php echo  $marca;      ?></td>
                                <td><?php echo  $dispositivo; ?></td>
                            </tr>
                        <?php    } ?>
                    </tbody>
                </table>
                <br>
            </div>
            <div>
                <a href="../controles/repuesto_agregar.php" class="btn btn-danger" class="button">AGREGAR</a>
                <a href="repuesto_botoneditar.php" class="btn btn-danger" class="button">EDITAR</a>
                <br>
                <br>
                <a href="detallerepuesto.php" class="btn btn-primary" class="button">AGREGAR DETALLE</a>
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