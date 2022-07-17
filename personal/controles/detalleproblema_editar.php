<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <?php
        $nronotarecepcion = $_GET['nro'];
        $id = $_GET['id'];
        //PARA RELLENAR LOS CAMPOS DEL FORMULARIO
        $sql_select = "select detalleproblema.descripcion
                        from detalleproblema
                        where iddetalleproblema = $id and nronotarecepcion = $nronotarecepcion";
        $resultado = $mysqli->query($sql_select);

        while ($fila_usu = $resultado->fetch_assoc()) {
            $descripcion = $fila_usu['descripcion'];
            
        }
        //////////////////////////////////////////////// 
        ?>
        <div class="card mb-4">
            <div class="card-body">
                <h1>EDITAR PROBLEMA DEL DISPOSITIVO</h1>
                <form action="../modelo/detalleproblema_editar_guardar.php" method="POST">
                    DESCRIPCION
                    <input type="hidden" name="nronotarecepcion" value="<?php echo $nronotarecepcion; ?>" required="required">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" required="required">

                    <input type="text" name="descripcion" value="<?php echo $descripcion; ?>" required="required" class="form-control">
                    <br>
                    <input type="submit" class="btn btn-warning" name="" Value="GUARDAR CAMBIOS">
                </form>
            </div>
        </div>
</main>
<?php include("../vista/piedecodigo.php"); ?>