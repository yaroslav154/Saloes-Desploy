<<?php include("../vista/cabeceracodigo.php"); ?> <main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">
                <?php
                $id = $_GET['id'];
                $nronotarecepcion = $_GET['nro'];

                $sql = "DELETE  from `detalleproblema`  
                WHERE iddetalleproblema=$id and nronotarecepcion=$nronotarecepcion";
                $resultado = $mysqli->query($sql);
                if ($resultado) {
                    //------------------BITACORA-------------------------------------
                    $accion = 'Elimino un problema en una nota de recepcion';
                    $ejecutor = $_SESSION['nombre_usu_lg'];

                    $sql_insert2 = "INSERT INTO `bitacora`(`accion`,`ejecutor`) 
                                VALUES ( '$accion' ,'$ejecutor')";
                    $resultado_usu2 = $mysqli->query($sql_insert2);
                    //------------------------------------------------------------------------
                    echo '<font color="green">DATOS AGREGADOS EXITOSAMENTE </font>';
                } else {
                    echo '<font color="red">ERROR NO SE PUDO AGREGAR LOS DATOS , INTENTELO DE NUEVO</font>';
                }
                ?>
                <br>
                <br>
                <form action="../vista/detalleproblema.php" method="POST">
                    <input type="hidden" name="nronotarecepcion" value="<?php echo $nronotarecepcion; ?>" required="required">
                    <input type="submit" class="btn btn-danger" name="" Value="VOLVER">
                </form>
            </div>
            <div>
            </div>
        </div>
    </div>
    </main>
    <?php include("../vista/piedecodigo.php"); ?>