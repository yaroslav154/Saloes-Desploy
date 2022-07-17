<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <div class="card mb-4">
            <div class="card-body">
                <h1> AGREGAR CODIGO DEL PERSONAL </h1>
                <form action="correopersonal.php" method="POST">
                    CODIGO
                    <select name="codpersonal" required="required" class="form-control">
                        <?php
                        $sql_select1 = "select cod from personal";
                        $resultado = $mysqli->query($sql_select1);
                        while ($fila = $resultado->fetch_assoc()) {
                            $cod = $fila['cod'];
                        ?>
                            <option value="<?php echo $cod; ?>"><?php echo $cod; ?></option>
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