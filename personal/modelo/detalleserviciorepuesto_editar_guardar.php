<<?php include("../vista/cabeceracodigo.php"); ?> <main>
    <div class="container-fluid px-4">
        <br><br>
        <div class="card mb-4">
            <div class="card-body">
                <?php
                $numeronotaservicio = $_POST['numeronotaservicio'];
                $idserviciorepuesto = $_POST['idserviciorepuesto'];
                $costoservicio = strtoupper($_POST['costo']);
                $subtotal = 0;
                /* CONSULTA DEL REPUESTO*/
                $sql_select = "select costorepuesto
                                from detalleserviciorepuesto
                                where nronotaservicio=$numeronotaservicio and idserviciorepuesto=$idserviciorepuesto";
                $resultado = $mysqli->query($sql_select);
                while ($fila = $resultado->fetch_assoc()) {
                    $costorepuesto = $fila['costorepuesto'];
                }
                $subtotal = $costoservicio + $costorepuesto;
                ////////////////////////////////////////////////////////////////
                $sql = "UPDATE detalleserviciorepuesto SET costoservicio=$costoservicio , subtotal=$subtotal
                WHERE nronotaservicio=$numeronotaservicio and idserviciorepuesto = $idserviciorepuesto";
                $resultado = $mysqli->query($sql);
                if ($resultado) {
                    //------------------BITACORA-------------------------------------
                    $accion = 'Edito un servicio con repuesto en una nota de servicio';
                    $ejecutor = $_SESSION['nombre_usu_lg'];

                    $sql_insert2 = "INSERT INTO `bitacora`(`accion`,`ejecutor`) 
                                VALUES ( '$accion' ,'$ejecutor')";
                    $resultado_usu2 = $mysqli->query($sql_insert2);
                    //------------------------------------------------------------------------
                    echo '<font color="green">DATOS AGREGADOS EXITOSAMENTE </font>';
                } else {
                    echo '<font color="red">ERROR NO SE PUDO AGREGAR LOS DATOS , INTENTELO DE NUEVO</font>';
                }
                ?>
                <br>
                <br>
                <form action="../vista/notaserviciodetalle.php" method="POST">
                    <input type="hidden" name="numeronotaservicio" value="<?php echo $numeronotaservicio; ?>" required="required">
                    <input type="submit" class="btn btn-danger" name="" Value="VOLVER">
                </form>
            </div>
            <div>
            </div>
        </div>
    </div>
    </main>
    <?php include("../vista/piedecodigo.php"); ?>