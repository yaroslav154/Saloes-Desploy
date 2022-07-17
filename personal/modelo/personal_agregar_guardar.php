<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">



                <h2>EDITAR PRIVILEGIO</h2>


                <?php

include('../config/conexion.php');

$cod = strtoupper($_POST['cod']);
                            $nombre = strtoupper($_POST['nombre']);
                            $apellidop = strtoupper($_POST['apellidop']);
                            $apellidom = strtoupper($_POST['apellidom']);
                            $sexo = strtoupper($_POST['sexo']);
                            $ci = strtoupper($_POST['ci']);
                            $telefono = strtoupper($_POST['telefono']);
                            $direccion = strtoupper($_POST['direccion']);
                            $fecha = strtoupper($_POST['fecha']);
                            $cargo = strtoupper($_POST['cargo']);

                            $sql_insert = "INSERT INTO personal (cod,nombrepersonal,apellidop,apellidom,sexo,ci,telefono,direccion,fechanacimiento,codcargo)
                            VALUES ('$cod','$nombre','$apellidop','$apellidom','$sexo','$ci','$telefono','$direccion','$fecha','$cargo')";
                           
                           $resultado = $mysqli->query($sql_insert);
                            if ($resultado) {
//------------------BITACORA-------------------------------------
$accion='Agrego a un personal';
 $ejecutor=$_SESSION['nombre_usu_lg'] ;

 $sql_insert2="INSERT INTO `bitacora`(`accion`,`ejecutor`) 
 VALUES ( '$accion','$ejecutor')";
 $resultado_usu2=$mysqli->query($sql_insert2);
 //------------------------------------------------------------------------

                                echo '<font color="green">DATOS AGREGADOS EXITOSAMENTE </font>';
                            } else {
                                echo '<font color="red">ERROR NO SE PUDO AGERGAR LOS DATOS , INTENTELO DE NUEVO</font>';
                            }

                            ?>
                <br>
                <br>
                <a href="../vista/personal.php" class="btn btn-danger" class="button">VOLVER</a>
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