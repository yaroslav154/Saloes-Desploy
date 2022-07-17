<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <div class="card mb-4">
            <div class="card-body">
                <h1> AGREGAR ID DEL CLIENTE </h1>
                <form action="telefonocliente.php" method="POST">
                    NUMERO
                    <select name="idcliente" required="required" class="form-control">
                        <?php
                        $sql_select1 = "select id from cliente";
                        $resultado = $mysqli->query($sql_select1);
                        while ($fila = $resultado->fetch_assoc()) {
                            $id = $fila['id'];
                        ?>
                            <option value="<?php echo $id; ?>"><?php echo $id; ?></OPTION>
                        <?php
                        }
                        ?>
                    </select>            
                    <br>
                    <input type="submit" class="btn btn-primary" name="" Value="AGREGAR">
                </form>
            </div>
        </div>
</main>
<?php include("../vista/piedecodigo.php"); ?>