<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <?php
        $numero_notarecepcion = $_GET['nro'];
        ?>
        <div class="card mb-4">
            <div class="card-body">
                <h1>AGREGAR UN ACCESORIO DEL DISPOSITIVO</h1>
                <form action="../modelo/detalleaccesorio_agregar_guardar.php" method="POST">
                    TIPO DE ACCESORIO
                    <select name="id" required="required" class="form-control">
                        <?php
                        $sql_select1 = "select * from accesorio";
                        $resultado = $mysqli->query($sql_select1);
                        while ($fila = $resultado->fetch_assoc()) {
                            $id = $fila['id'];
                            $nombre = $fila['nombre'];             
                        ?>
                            <option value="<?php echo $id; ?>"><?php echo  strtoupper($nombre); ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    DETALLE
                    <input type="text" name="detalle" class="form-control" required="required">
                    
                    <input type="hidden" name="nronotarecepcion" value="<?php echo $numero_notarecepcion; ?>" class="form-control">
                    <br>
                    <input type="submit" class="btn btn-success" name="" Value="AGREGAR">
                </form>
            </div>
        </div>
</main>
<?php include("../vista/piedecodigo.php"); ?>