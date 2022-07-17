<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <?php
        $idcorreopersonal = $_GET['id'];
        $codpersonal = $_GET['codpersonal'];
        //PARA RELLENAR LOS CAMPOS DEL FORMULARIO
        $sql_select = "select correo
                        from correopersonal
                        where idcorreopersonal = $idcorreopersonal and codpersonal  = '$codpersonal'";
        $resultado = $mysqli->query($sql_select);

        while ($fila_usu = $resultado->fetch_assoc()) {
            $correo = $fila_usu['correo'];
            
        }
        //////////////////////////////////////////////// 
        ?>
        <div class="card mb-4">
            <div class="card-body">
                <h1>EDITAR CORREO DEL PERSONAL</h1>
                <form action="../modelo/correopersonal_editar_guardar.php" method="POST">
                    DESCRIPCION
                    <input type="hidden" name="id" value="<?php echo $idcorreopersonal; ?>" required="required">
                    <input type="hidden" name="codpersonal" value="<?php echo $codpersonal; ?>" required="required">

                    <input type="text" name="correo" value="<?php echo $correo; ?>" required="required" class="form-control">
                    <br>
                    <input type="submit" class="btn btn-warning" name="" Value="GUARDAR CAMBIOS">
                </form>
            </div>
        </div>
</main>
<?php include("../vista/piedecodigo.php"); ?>