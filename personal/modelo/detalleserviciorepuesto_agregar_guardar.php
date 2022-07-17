<<?php include("../vista/cabeceracodigo.php"); ?> <main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">
                <?php
                $nronotaservicio = $_POST['nronotaservicio'];
                $id = $_POST['idserviciorepuesto'];
                $subtotal = 0;
                /* CONSULTA DEL PRECIO DEL SERVICIO Y DEL REPUESTO*/
                $sql_select = "select serviciorepuesto.costo, repuesto.precio
                            from serviciorepuesto, repuesto
                            where serviciorepuesto.id = $id and
                                    serviciorepuesto.codrepuesto = repuesto.cod";
                $resultado = $mysqli->query($sql_select);
                while ($fila = $resultado->fetch_assoc()) {
                    $costoservicio = $fila['costo'];
                    $costorepuesto = $fila['precio'];
                }
                $subtotal = $costoservicio + $costorepuesto;
                ////////////////////////////////////////////////////////////////
                $sql_insert = "INSERT INTO detalleserviciorepuesto (nronotaservicio,idserviciorepuesto,costoservicio,costorepuesto,subtotal)
                VALUES ('$nronotaservicio','$id','$costoservicio','$costorepuesto','$subtotal')";
                $resultado = $mysqli->query($sql_insert);
                if ($resultado) {
                    //------------------BITACORA-------------------------------------
                    $accion = 'Agrego un servicio con repuesto en una nota de servicio';
                    $ejecutor = $_SESSION['nombre_usu_lg'];

                    $sql_insert2 = "INSERT INTO `bitacora`(`accion`,`ejecutor`)
                VALUES ( '$accion' ,'$ejecutor')";
                    $resultado_usu2 = $mysqli->query($sql_insert2);
                    //------------------------------------------------------------------------
                    echo '<font color="green">DATOS AGREGADOS EXITOSAMENTE </font>';
                } else {
                    echo '<font color="red">ERROR NO SE PUDO AGERGAR LOS DATOS , INTENTELO DE NUEVO</font>';
                }
                ?>
                <br>
                <br>
                <form action="../vista/notaserviciodetalle.php" method="POST">
                    <input type="hidden" name="numeronotaservicio" value="<?php echo $nronotaservicio; ?>" required="required">
                    <input type="submit" class="btn btn-danger" name="" Value="VOLVER">
                </form>
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


    <?php include("../vista/piedecodigo.php"); ?>