<?php include("../vista/cabeceracodigo.php"); ?>

<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">
            <h1>EDITAR PERSONAL</h1>
                            <?php
                            include('../config/conexion.php');

                            $cod = $_GET['id'];
                            $nombre = $_GET['nombre'];
                            $apellidop = $_GET['apellidop'];
                            $apellidom = $_GET['apellidom'];
                            $sexo = $_GET['sexo'];
                            $ci = $_GET['ci'];
                            $telefono = $_GET['telefono'];
                            $direccion =$_GET['direccion'];
                            $fecha =$_GET['fecha'];
                            $cargo = $_GET['cargo'];

                            
                            $sql = "UPDATE personal SET nombrepersonal = '$nombre' ,apellidop= '$apellidop',
                            apellidom='$apellidom',sexo='$sexo',ci='$ci', telefono=$telefono, direccion='$direccion', fechanacimiento='$fecha',
                            codcargo='$cargo'
                            WHERE cod='$cod'";
                            $resultado = $mysqli->query($sql);


                            if ($resultado) {
                              //------------------BITACORA-------------------------------------
$accion='Edito a un personal';
$ejecutor=$_SESSION['nombre_usu_lg'] ;

$sql_insert2="INSERT INTO `bitacora`(`accion`,`ejecutor`) 
VALUES ( '$accion','$ejecutor')";
$resultado_usu2=$mysqli->query($sql_insert2);
//------------------------------------------------------------------------  
                                echo '<font color="green">DATOS ACTUALIZADOS EXITOSAMENTE</font>';
                            } else {
                                echo '<font color="red">ERROR NO SE PUDO ACTUALIZAR LOS DATOS , INTENTELO DE NUEVO</font>';
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