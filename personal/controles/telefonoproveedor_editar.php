<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <?php
        $idtelefonoproveedor = $_GET['id'];
        $idproveedor = $_GET['idproveedor'];
        //PARA RELLENAR LOS CAMPOS DEL FORMULARIO
        $sql_select = "select numero
                        from telefonoproveedor
                        where idtelefonoproveedor = $idtelefonoproveedor and idproveedor  = $idproveedor";
        $resultado = $mysqli->query($sql_select);

        while ($fila_usu = $resultado->fetch_assoc()) {
            $numero = $fila_usu['numero'];
            
        }
        //////////////////////////////////////////////// 
        ?>
        <div class="card mb-4">
            <div class="card-body">
                <h1>EDITAR TELEFONO DEL PROVEEDOR</h1>
                <form action="../modelo/telefonoproveedor_editar_guardar.php" method="POST">
                    DESCRIPCION
                    <input type="hidden" name="id" value="<?php echo $idtelefonoproveedor; ?>" required="required">
                    <input type="hidden" name="idproveedor" value="<?php echo $idproveedor; ?>" required="required">

                    <input type="number" name="numero" value="<?php echo $numero; ?>" required="required" class="form-control">
                    <br>
                    <input type="submit" class="btn btn-warning" name="" Value="GUARDAR CAMBIOS">
                </form>
            </div>
        </div>
</main>
<?php include("../vista/piedecodigo.php"); ?>