<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">

                <?php
                $numero = $_POST['numero'];
                $observacion = $_POST['observacion'];
                $fecha = $_POST['fecha'];
                $hora = $_POST['hora'];
                $codpersonal = $_POST['codpersonal'];
                $iddispositivo = $_POST['iddispositivo'];

                $sql_insert = "INSERT INTO notarecepcion(nro,observacion,fecha,hora,codpersonal,iddispositivo)
       VALUES ('$numero','$observacion','$fecha','$hora','$codpersonal','$iddispositivo')";
                $resultado = $mysqli->query($sql_insert);
                if ($resultado) {

                    //------------------BITACORA-------------------------------------
                    $accion = 'Agrego una nota de recepcion';
                    $ejecutor = $_SESSION['nombre_usu_lg'];

                    $sql_insert2 = "INSERT INTO `bitacora`(`accion`,`ejecutor`) 
 VALUES ( '$accion','$ejecutor')";
                    $resultado_usu2 = $mysqli->query($sql_insert2);
                    //------------------------------------------------------------------------
                    echo '<font color="green">DATOS AGREGADOS EXITOSAMENTE </font>';
                } else {
                    echo '<font color="red">ERROR NO SE PUDO AGERGAR LOS DATOS , INTENTELO DE NUEVO</font>';
                }
                ?>
                <BR>
                <BR>
                <a href="../vista/notarecepcion.php" class="btn btn-danger" class="button">VOLVER</a>
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