<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <div class="card mb-4">
            <div class="card-body">
                <h2>EDITAR NOTA DE SERVICIO </h2>
                <?php
                include('../config/conexion.php');
                $nronotaservicio = $_POST['nro'];
                $numero = $_POST['numero']; //NUMERO DE RECEPCION
                $costo = $_POST['costo'];
                $anticipo = $_POST['anticipo'];   
                $fechaanticipo = $_POST['fechaanticipo'];        
                $fechaservicio = $_POST['fechaservicio'];              
                $fechaentrega = $_POST['fechaentrega'];
                $hora = $_POST['hora'];   
                $idtipopago = $_POST['idtipopago'];

                $sql = "UPDATE notaservicio 
                SET costo='$costo', anticipo='$anticipo',fechapagoanticipo='$fechaanticipo',
                fechaservicio='$fechaservicio',fechaentrega='$fechaentrega', horaentrega='$hora',
                nronotarecepcion = '$numero', idtipopago = '$idtipopago' 
                WHERE nronotaservicio='$nronotaservicio'";
                $resultado = $mysqli->query($sql);
                if ($resultado) {
                    //------------------BITACORA-------------------------------------
                    $accion = 'Edito una nota de servicio';
                    $ejecutor = $_SESSION['nombre_usu_lg'];

                    $sql_insert2 = "INSERT INTO `bitacora`(`accion`,`ejecutor`) 
 VALUES ( '$accion','$ejecutor')";
                    $resultado_usu2 = $mysqli->query($sql_insert2);
                    //------------------------------------------------------------------------
                    echo '<font color="green">DATOS ACTUALIZADOS EXITOSAMENTE</font>';
                } else {
                    echo '<font color="red">ERROR NO SE PUDO ACTUALIZAR LOS DATOS , INTENTELO DE NUEVO</font>';
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