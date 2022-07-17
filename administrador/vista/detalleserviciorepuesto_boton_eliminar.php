<?php include("cabeceracodigo.php"); ?>


<main>
    <div class="container-fluid px-4">
        <br><br>
        <?php
        $numeronotaservicio = $_GET['nro'];
        ?>
        <div class="card mb-4">

            <div class="card-body">
                <h1> ELIMINAR DETALLE DEL SERVICIO CON REPUESTO </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>SERVICIO</th>
                            <th>COSTO DEL SERVICIO</th>
                            <th>COSTO DEL REPUESTO</th>
                            <th>SUBTOTAL</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select   serviciorepuesto.id,
                                                categoriaservicio.descripcion, 
                                                detalleserviciorepuesto.costoservicio, 
                                                detalleserviciorepuesto.costorepuesto,
                                                detalleserviciorepuesto.subtotal
                        from    detalleserviciorepuesto,serviciorepuesto,categoriaservicio
                        where   detalleserviciorepuesto.idserviciorepuesto = serviciorepuesto.id and 
                                serviciorepuesto.idcategoriaservicio = categoriaservicio.id and
                                detalleserviciorepuesto.nronotaservicio in (select notaservicio.nronotaservicio
                                                                            from notaservicio
                                                                            where notaservicio.nronotaservicio = $numeronotaservicio);";
                        $resultado = $mysqli->query($sql_select);
                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $id = $fila_usu['id'];
                            $descripcion = $fila_usu['descripcion'];
                            $costo_servicio = $fila_usu['costoservicio'];
                            $costo_repuesto = $fila_usu['costorepuesto'];
                            $subtotal = $fila_usu['subtotal'];
                        ?>
                            <tr>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $descripcion; ?></td>
                                <td><?php echo $costo_servicio; ?></td>
                                <td><?php echo $costo_repuesto; ?></td>
                                <td><?php echo $subtotal; ?></td>
                                <td><a href='../modelo/detalleserviciorepuesto_eliminar_guardar.php?nro=<?php echo $numeronotaservicio; ?>& id=<?php echo $id; ?>'>Eliminar</td>
                            </tr>
                        <?php    } ?>
                    </tbody>
                </table>
                <br>
            </div>
            <div>
            </div>
        </div>
    </div>
</main>
<?php include("piedecodigo.php"); ?>