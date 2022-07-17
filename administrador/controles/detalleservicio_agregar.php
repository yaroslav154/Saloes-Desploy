<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <?php
        $numero_notaservicio = $_GET['nro'];
        ?>
        <div class="card mb-4">
            <div class="card-body">
                <h1>AGREGAR SERVICIO</h1>
                <form action="../modelo/detalleservicio_agregar_guardar.php" method="POST">
                    SERVICIO
                    <select name="idservicio" required="required" class="form-control">
                        <?php
                        $sql_select = "select servicio.id, categoriaservicio.descripcion
                        from servicio, categoriaservicio
                        where servicio.idcategoriaservicio = categoriaservicio.id
                        and servicio.idcategoriadispositivo in (select categoriadispositivo.id
                                                                from categoriadispositivo,dispositivo,notarecepcion,notaservicio
                                                                where categoriadispositivo.id=dispositivo.idcategoriadispositivo 
                                                                and notarecepcion.iddispositivo = dispositivo.id 
                                                                and notaservicio.nronotarecepcion = notarecepcion.nro
                                                                and notaservicio.nronotaservicio = $numero_notaservicio)";
                        $resultado = $mysqli->query($sql_select);
                        while ($fila = $resultado->fetch_assoc()) {
                            $id_servicio = $fila['id'];
                            $descripcion = $fila['descripcion'];
                        ?>
                            <option value="<?php echo $id_servicio; ?>"><?php echo strtoupper($descripcion)?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <input type="hidden" name="nronotaservicio" value="<?php echo $numero_notaservicio; ?>" required="required">
                    <br>
                    <br>
                    <input type="submit" class="btn btn-success" name="" Value="AGREGAR">
                </form>
            </div>
        </div>
</main>
<?php include("../vista/piedecodigo.php"); ?>