<?php include("../vista/cabeceracodigo.php"); ?>

<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">
                <h2>EDITAR PROVEEDOR</h2>
                <?php
                include('../config/conexion.php');
                $id_proveedor = $_POST['id'];
                $nombre = strtoupper($_POST['nombre']);
                $ubicacion = strtoupper($_POST['ubicacion']);
                if (strlen($nombre) > 0 && strlen($ubicacion) > 0) {  //VERIFICA SI SE ENVIA DATOS VACIOS A LA CONSULTA
                    $sql = "UPDATE proveedor SET nombre='$nombre' , ubicacion='$ubicacion' WHERE id=$id_proveedor";
                    $resultado = $mysqli->query($sql);
                    if ($resultado) {
                        //------------------BITACORA-------------------------------------
                        $accion = 'Edito un proveedor';
                        $ejecutor = $_SESSION['nombre_usu_lg'];
                        $sql_insert2 = "INSERT INTO `bitacora`(`accion`,`ejecutor`) 
                    VALUES ( '$accion','$ejecutor')";
                        $resultado_usu2 = $mysqli->query($sql_insert2);
                        //------------------------------------------------------------------------
                        echo '<font color="green">DATOS ACTUALIZADOS EXITOSAMENTE</font>';
                    } else {
                        echo '<font color="red">ERROR NO SE PUDO ACTUALIZAR LOS DATOS , INTENTELO DE NUEVO</font>';
                    }
                } else {
                    echo '<font color="red">ERROR NO SE PUDO ACTUALIZAR LOS DATOS , INTENTELO DE NUEVO</font>';
                }
                ?>
                <br>
                <br>
                <a href="../vista/proveedor.php" class="btn btn-danger" class="button">VOLVER</a>
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