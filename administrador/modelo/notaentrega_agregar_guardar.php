<<?php include("../vista/cabeceracodigo.php"); ?> <main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">
                <?php
                $numero = $_POST['numero'];
                $nombre = strtoupper($_POST['nombre']);
                $fecha = ($_POST['fecha']);
                $hora = ($_POST['hora']);
                $nronotaservicio = ($_POST['nronotaservicio']); 
                $codpersonal = ($_POST['codpersonal']);
                $tipopago = ($_POST['tipopago']);

                $sql_select1 = "SELECT costo,anticipo 
                                from notaservicio 
                                where nronotaservicio=$nronotaservicio";
                        $resultado = $mysqli->query($sql_select1);
                        while ($fila = $resultado->fetch_assoc()) {
                            $costo = $fila['costo'];  
                            $anticipo = $fila['anticipo']; 
                        }
                $subtotal = $costo - $anticipo;
                $total = $subtotal + $anticipo;

                if ($numero > 0 ) {
                    $sql_insert = "INSERT INTO notaentrega(nro, nombre, fecha, hora, subtotal, costototal, nronotaservicio, codpersonal, idtipopago)
                            VALUES ('$numero','$nombre','$fecha','$hora','$subtotal','$total','$nronotaservicio','$codpersonal','$tipopago')";
                    $resultado = $mysqli->query($sql_insert);

                    if ($resultado) {
                        //------------------BITACORA-------------------------------------
                        $accion = 'Agrego una nueva nota de entrega';
                        $ejecutor = $_SESSION['nombre_usu_lg'];

                        $sql_insert2 = "INSERT INTO `bitacora`(`accion`,`ejecutor`) 
                    VALUES ( '$accion','$ejecutor')";
                        $resultado_usu2 = $mysqli->query($sql_insert2);
                        //------------------------------------------------------------------------

                        echo '<font color="green">DATOS AGREGADOS EXITOSAMENTE </font>';
                    } else {
                        echo '<font color="red">ERROR NO SE PUDO AGREGAR LOS DATOS , INTENTELO DE NUEVO</font>';
                    }
                } else {
                    echo '<font color="red">ERROR NO SE PUDO AGREGAR LOS DATOS , INTENTELO DE NUEVO</font>';
                }
                ?>
                <BR>
                <BR>
                <a href="../vista/notaentrega.php" class="btn btn-danger" class="button">VOLVER</a>
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