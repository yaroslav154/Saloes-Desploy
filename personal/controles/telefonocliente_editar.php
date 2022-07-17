<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <?php
        $idtelefonocliente = $_GET['id'];
        $idcliente = $_GET['idcliente'];
        //PARA RELLENAR LOS CAMPOS DEL FORMULARIO
        $sql_select = "select numero
                        from telefonocliente
                        where idtelefonocliente = $idtelefonocliente and idcliente  = $idcliente";
        $resultado = $mysqli->query($sql_select);

        while ($fila_usu = $resultado->fetch_assoc()) {
            $numero = $fila_usu['numero'];
            
        }
        //////////////////////////////////////////////// 
        ?>
        <div class="card mb-4">
            <div class="card-body">
                <h1>EDITAR TELEFONO DEL CLIENTE</h1>
                <form action="../modelo/telefonocliente_editar_guardar.php" method="POST">
                    DESCRIPCION
                    <input type="hidden" name="id" value="<?php echo $idtelefonocliente; ?>" required="required">
                    <input type="hidden" name="idcliente" value="<?php echo $idcliente; ?>" required="required">

                    <input type="number" name="numero" value="<?php echo $numero; ?>" required="required" class="form-control">
                    <br>
                    <input type="submit" class="btn btn-warning" name="" Value="GUARDAR CAMBIOS">
                </form>
            </div>
        </div>
</main>
<?php include("../vista/piedecodigo.php"); ?>