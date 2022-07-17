<?php include("../vista/cabeceracodigo.php"); ?>

<main>
    <div class="container-fluid px-4">
        <br><br>
        <div class="card mb-4">
            <div class="card-body">
                <h2></h2>
                <?php
                include('../config/conexion.php');
                $nronotaservicio = $_POST['nronotaservicio'];
                $costo = $_POST['costo'];
                $anticipo = $_POST['anticipo'];
                $fechapagoanticipo = $_POST['fechapagoanticipo'];
                $idtipopago = $_POST['idtipopago'];
                $sql = "UPDATE notaservicio SET costo=$costo, anticipo=$anticipo,
                                fechapagoanticipo='$fechapagoanticipo',idtipopago=$idtipopago  
                        WHERE nronotaservicio=$nronotaservicio";
                $resultado = $mysqli->query($sql);
                if ($resultado) {
                    //------------------BITACORA-------------------------------------
                    $accion = 'Agrego un nota de servicio completo';
                    $ejecutor = $_SESSION['nombre_usu_lg'];

                    $sql_insert2 = "INSERT INTO `bitacora`(`accion`,`ejecutor`) 
                    VALUES ( '$accion' ,'$ejecutor')";
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
<?php include("../vista/piedecodigo.php"); ?>