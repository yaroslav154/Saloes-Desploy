<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <?php
        $idaccesorio = $_GET['id'];
        $nronotarecepcion = $_GET['nro'];       
        //PARA RELLENAR LOS CAMPOS DEL FORMULARIO
        $sql_select = "select detalleaccesorio.detalle
         from detalleaccesorio
         where idaccesorio  = $idaccesorio and nronotarecepcion = $nronotarecepcion";
        $resultado = $mysqli->query($sql_select);
        while ($fila_usu = $resultado->fetch_assoc()) {
            $detalle = $fila_usu['detalle'];
        }
        //////////////////////////////////////////////// 
        ?>
        <div class="card mb-4">
            <div class="card-body">
                <h1>EDITAR ACCESORIO DEL DISPOSITIVO</h1>
                <form action="../modelo/detalleaccesorio_editar_guardar.php" method="POST">
                    DETALLE
                    <input type="hidden" name="nronotarecepcion" value="<?php echo $nronotarecepcion; ?>" required="required">
                    <input type="hidden" name="idaccesorio" value="<?php echo $idaccesorio; ?>" required="required">
                    <input type="text" name="detalle" value="<?php echo $detalle; ?>" required="required" class="form-control">
                    <br>
                    <input type="submit" class="btn btn-warning" name="" Value="GUARDAR CAMBIOS">
                </form>
            </div>
        </div>
</main>
<?php include("../vista/piedecodigo.php"); ?>