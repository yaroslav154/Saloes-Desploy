<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <?php
        $numeronotaservicio = $_GET['nro'];
        $idservicio = $_GET['id'];
        
        //PARA RELLENAR LOS CAMPOS DEL FORMULARIO
        $sql_select = "select costo
                        from detalleservicio
                        where nronotaservicio = $numeronotaservicio and idservicio = $idservicio";
        $resultado = $mysqli->query($sql_select);

        while ($fila_usu = $resultado->fetch_assoc()) {
            $costo = $fila_usu['costo'];
            
        }
        //////////////////////////////////////////////// 
        ?>
        <div class="card mb-4">
            <div class="card-body">
                <h1>COSTO DEL SERVICIO</h1>
                <form action="../modelo/detalleservicio_editar_guardar.php" method="POST">
                    DESCRIPCION
                    <input type="hidden" name="numeronotaservicio" value="<?php echo $numeronotaservicio; ?>" required="required">
                    <input type="hidden" name="idservicio" value="<?php echo $idservicio; ?>" required="required">

                    <input type="number" name="costo" value="<?php echo $costo; ?>" required="required" class="form-control">
                    <br>
                    <input type="submit" class="btn btn-warning" name="" Value="GUARDAR CAMBIOS">
                </form>
            </div>
        </div>
</main>
<?php include("../vista/piedecodigo.php"); ?>