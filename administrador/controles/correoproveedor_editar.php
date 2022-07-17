<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <?php
        $idcorreoproveedor = $_GET['id'];
        $idproveedor = $_GET['idproveedor'];
        //PARA RELLENAR LOS CAMPOS DEL FORMULARIO
        $sql_select = "select correo
                        from correoproveedor
                        where idcorreoproveedor = $idcorreoproveedor and idproveedor  = $idproveedor";
        $resultado = $mysqli->query($sql_select);

        while ($fila_usu = $resultado->fetch_assoc()) {
            $correo = $fila_usu['correo'];
            
        }
        //////////////////////////////////////////////// 
        ?>
        <div class="card mb-4">
            <div class="card-body">
                <h1>EDITAR CORREO DEL PROVEEDOR</h1>
                <form action="../modelo/correoproveedor_editar_guardar.php" method="POST">
                    DESCRIPCION
                    <input type="hidden" name="id" value="<?php echo $idcorreoproveedor; ?>" required="required">
                    <input type="hidden" name="idproveedor" value="<?php echo $idproveedor; ?>" required="required">

                    <input type="text" name="correo" value="<?php echo $correo; ?>" required="required" class="form-control">
                    <br>
                    <input type="submit" class="btn btn-warning" name="" Value="GUARDAR CAMBIOS">
                </form>
            </div>
        </div>
</main>
<?php include("../vista/piedecodigo.php"); ?>