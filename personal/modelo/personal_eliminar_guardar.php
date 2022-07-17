<?php include("../vista/cabeceracodigo.php"); ?>

<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">
            <?php
                            include('../config/conexion.php');
                            $cod = $_GET['id'];
                            $sql = "DELETE  from `personal` WHERE personal.cod='$cod'";
                            $resultado = $mysqli->query($sql);
                            if ($resultado) {

                                //------------------BITACORA-------------------------------------
$accion='Elimino a un personal';
$ejecutor=$_SESSION['nombre_usu_lg'] ;

$sql_insert2="INSERT INTO `bitacora`(`accion`,`ejecutor`) 
VALUES ( '$accion','$ejecutor')";
$resultado_usu2=$mysqli->query($sql_insert2);
//------------------------------------------------------------------------
                                echo '<font color="green">DATOS ELIMINADOS EXITOSAMENTE</font>';
                            } else {
                                echo '<font color="red">ERROR NO SE PUDO ELIMINAR LOS DATOS , INTENTELO DE NUEVO</font>';
                            }
                            ?>
                            <br>
                            <br>
                            <a href="../vista/personal.php" class="btn btn-danger" class="button">VOLVER</a>
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