<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <?php
        $idcorreocliente = $_GET['id'];
        $idcliente = $_GET['idcliente'];
        //PARA RELLENAR LOS CAMPOS DEL FORMULARIO
        $sql_select = "select correo
                        from correocliente
                        where idcorreocliente = $idcorreocliente and idcliente  = $idcliente";
        $resultado = $mysqli->query($sql_select);

        while ($fila_usu = $resultado->fetch_assoc()) {
            $correo = $fila_usu['correo'];
            
        }
        //////////////////////////////////////////////// 
        ?>
        <div class="card mb-4">
            <div class="card-body">
                <h1>EDITAR CORREO DEL CLIENTE</h1>
                <form action="../modelo/correocliente_editar_guardar.php" method="POST">
                    DESCRIPCION
                    <input type="hidden" name="id" value="<?php echo $idcorreocliente; ?>" required="required">
                    <input type="hidden" name="idcliente" value="<?php echo $idcliente; ?>" required="required">

                    <input type="text" name="correo" value="<?php echo $correo; ?>" required="required" class="form-control">
                    <br>
                    <input type="submit" class="btn btn-warning" name="" Value="GUARDAR CAMBIOS">
                </form>
            </div>
        </div>
</main>
<?php include("../vista/piedecodigo.php"); ?>