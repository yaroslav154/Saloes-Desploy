<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">
                <h2>EDITAR UNA FACTURA</h2>
                <?php
                include('../config/conexion.php');
                $nro = $_POST['nro'];
                $nit = $_POST['nit'];
                $nombre =  strtoupper($_POST['nombre']);
                $nronotaentrega = $_POST['nronotaentrega'];
                $sql = "UPDATE factura SET nit='$nit', nombre='$nombre', nronotaentrega ='$nronotaentrega'
                        WHERE nrofactura='$nro'";
                $resultado = $mysqli->query($sql);
                if ($resultado) {
                    //------------------BITACORA-------------------------------------
                    $accion = 'Edito una factura';
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
                <a href="../vista/factura.php" class="btn btn-danger" class="button">VOLVER</a>
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