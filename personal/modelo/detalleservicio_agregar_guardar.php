<<?php include("../vista/cabeceracodigo.php"); ?> <main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">
                <?php
                $nronotaservicio = $_POST['nronotaservicio'];
                $id = $_POST['idservicio'];

                /* CONSULTA DEL PRECIO DEL SERVICIO ELEGIDO EN EL FORMULARIO */
                $sql_select = "select servicio.costo
                            from servicio
                            where servicio.id = $id";
                $resultado = $mysqli->query($sql_select);
                while ($fila = $resultado->fetch_assoc()) {
                    $costo = $fila['costo'];    
                }
                ////////////////////////////////////////////////////////////////
                $sql_insert = "INSERT INTO detalleservicio (nronotaservicio,idservicio,costo)
                VALUES ('$nronotaservicio','$id','$costo')";
                $resultado = $mysqli->query($sql_insert);
                if ($resultado) {
                //------------------BITACORA-------------------------------------
                $accion = 'Agrego un servicio en una nota de servicio';
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