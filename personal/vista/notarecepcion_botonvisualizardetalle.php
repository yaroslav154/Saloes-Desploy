<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <div class="card mb-4">
            <div class="card-body">
                <h1> AGREGAR NUMERO DE RECEPCION </h1>
                <form action="notarecepcion_visualizardetalle.php" method="POST">
                    NUMERO
                    <select name="nronotarecepcion" required="required" class="form-control">
                        <?php
                        $sql_select1 = "select nro from notarecepcion";
                        $resultado = $mysqli->query($sql_select1);
                        while ($fila = $resultado->fetch_assoc()) {
                            $nro = $fila['nro'];
                        ?>
                            <option value="<?php echo $nro; ?>"><?php echo $nro; ?></OPTION>
                        <?php
                        }
                        ?>
                    </select>            
                    <br>
                    <input type="submit" class="btn btn-primary" name="" Value="VISUALIZAR">
                </form>
            </div>
        </div>
</main>
<?php include("../vista/piedecodigo.php"); ?>