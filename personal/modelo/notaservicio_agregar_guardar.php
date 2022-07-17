<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">

                <?php
                $numero = $_POST['numero'];
                $costo = $_POST['costo'];
                $anticipo = $_POST['anticipo'];
                $fechapagoanticipo = $_POST['fechapagoanticipo'];
                $fechaservicio = $_POST['fechaservicio'];
                $fechaentrega = $_POST['fechaentrega'];
                $horaentrega = $_POST['horaentrega'];
                $nronotarecepcion = $_POST['nronotarecepcion'];
                $codpersonal = $_POST['codpersonal'];
                $idtipopago = $_POST['idtipopago'];
                if ($numero > 0) {
                    $sql_insert = "INSERT INTO notaservicio(nronotaservicio,costo,anticipo,fechapagoanticipo,fechaservicio,fechaentrega,
                                    horaentrega,nronotarecepcion,codpersonal,idtipopago)
                                    VALUES ('$numero','$costo','$anticipo','$fechapagoanticipo','$fechaservicio','$fechaentrega',
                                            '$horaentrega','$nronotarecepcion','$codpersonal','$idtipopago')";
                    $resultado = $mysqli->query($sql_insert);
                    if ($resultado) {
                        //------------------BITACORA-------------------------------------
                        $accion = 'Agrego una nota de servicio';
                        $ejecutor = $_SESSION['nombre_usu_lg'];
                        $sql_insert2 = "INSERT INTO `bitacora`(`accion`,`ejecutor`) 
                    VALUES ( '$accion','$ejecutor')";
                        $resultado_usu2 = $mysqli->query($sql_insert2);
                        //------------------------------------------------------------------------
                        echo '<font color="green">DATOS AGREGADOS EXITOSAMENTE </font>';
                    } else {
                        echo '<font color="red">ERROR NO SE PUDO AGERGAR LOS DATOS , INTENTELO DE NUEVO</font>';
                    }
                }else{
                    echo '<font color="red">ERROR NO SE PUDO AGERGAR LOS DATOS , INTENTELO DE NUEVO</font>';
                }
                ?>
                <br>
                <br>
                <a href="../vista/notaservicio.php" class="btn btn-danger" class="button">VOLVER</a>
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