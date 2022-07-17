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
                            <th>ELIMINAR</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php


                        $sql_select = "select proveedor.nombre, repuesto.descripcionrepuesto, detallerepuesto.precio,detallerepuesto.idproveedor
                                    from proveedor, repuesto, detallerepuesto
                                     where proveedor.id = detallerepuesto.idproveedor and detallerepuesto.codrepuesto = repuesto.cod ";

                        $resultado = $mysqli->query($sql_select);

                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $id_proveedor = $fila_usu['nombre'];
                            $proveedor = $fila_usu['idproveedor'];
                            $cod_repuesto = $fila_usu['descripcionrepuesto'];
                            $precio = $fila_usu['precio'];


                        ?>
                            <tr>
                                <td><?php echo $id_proveedor; ?></td>
                                <td><?php echo  $cod_repuesto; ?></td>
                                <td><?php echo  $precio;       ?></td>
                                <td><a href='../modelo/detallerepuesto_eliminar_guardar.php?idproveedor=<?php echo $proveedor; ?>'> Eliminar</a> </td>


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