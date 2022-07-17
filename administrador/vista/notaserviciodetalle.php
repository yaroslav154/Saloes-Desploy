<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <?php
        $numeronotaservicio = $_POST['numeronotaservicio'];
        ?>
        <h1> <?php echo "Nro: " . $numeronotaservicio; ?></h1>
        <div class="card mb-4">
            <div class="card-body">
                 <!------------------------------------PROBLEMA------------------------------->
                 <h1> PROBLEMA </h1>
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>DESCRIPCION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select detalleproblema.descripcion
                                        from detalleproblema, notarecepcion
                                        where detalleproblema.nronotarecepcion = notarecepcion.nro and
                                              notarecepcion.nro in (select nronotarecepcion
                                                                    from notaservicio
                                                                    where notaservicio.nronotaservicio = $numeronotaservicio)";
                        $resultado = $mysqli->query($sql_select);
                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $descripcion = $fila_usu['descripcion'];
                        ?>
                            <tr>
                                <td><?php echo $descripcion; ?></td>
                            </tr>
                        <?php    } ?>
                    </tbody>
                </table>
                <!------------------------------------ SERVICIO------------------------------->
                <h1> SERVICIO </h1>
                <table class="table table-striped">
                    <thead >
                        <tr>
                            <th>ID</th>
                            <th>SERVICIO</th>
                            <th>COSTO DEL SERVICIO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select servicio.id, 
                                        categoriaservicio.descripcion, 
                                        detalleservicio.costo                
                        from    detalleservicio,servicio,categoriaservicio
                        where   detalleservicio.idservicio = servicio.id and 
                                servicio.idcategoriaservicio = categoriaservicio.id
                                and detalleservicio.nronotaservicio in (select notaservicio.nronotaservicio
                                                                        from notaservicio
                                                                        where notaservicio.nronotaservicio = $numeronotaservicio);";
                        $resultado = $mysqli->query($sql_select);
                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $id = $fila_usu['id'];
                            $descripcion = $fila_usu['descripcion'];
                            $costo = $fila_usu['costo'];
                            
                        ?>
                            <tr>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $descripcion; ?></td>
                                <td><?php echo $costo; ?></td>
                            </tr>
                        <?php    } ?>
                    </tbody>
                </table>
                <td> <a href='../controles/detalleservicio_agregar.php?nro=<?php echo $numeronotaservicio; ?>' class="btn btn-primary" class="button"> AGREGAR</a></td>
                <td> <a href='detalleservicio_boton_editar.php?nro=<?php echo $numeronotaservicio; ?>' class="btn btn-primary" class="button"> EDITAR</a></td>
                <td> <a href='detalleservicio_boton_eliminar.php?nro=<?php echo $numeronotaservicio; ?>' class="btn btn-primary" class="button"> ELIMINAR</a></td>
                <br>
                <br>
                <!------------------------------------ SERVICIO CON REPUESTO----------------------------- -->
                <h1> SERVICIO CON REPUESTO</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>SERVICIO</th>
                            <th>COSTO DEL SERVICIO</th>
                            <th>COSTO DEL REPUESTO</th>
                            <th>SUBTOTAL</th>
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
                            </tr>
                        <?php    } ?>
                    </tbody>
                </table>
                <td> <a href='../controles/detalleserviciorepuesto_agregar.php?nro=<?php echo $numeronotaservicio; ?>' class="btn btn-primary" class="button"> AGREGAR</a></td>
                <td> <a href='detalleserviciorepuesto_botoneditar.php?nro=<?php echo $numeronotaservicio; ?>' class="btn btn-primary" class="button"> EDITAR</a></td>
                <td> <a href='detalleserviciorepuesto_botoneliminar.php?nro=<?php echo $numeronotaservicio; ?>' class="btn btn-primary" class="button"> ELIMINAR</a></td>
                <br>
                <br>
                <form action="../controles/notaservicio_agregarfinalizar.php" method="POST">
                    <input type="hidden" name="numeronotaservicio" value="<?php echo $numeronotaservicio; ?>" class="form-control">
                    <input type="submit" class="btn btn-success" name="" Value="FINALIZAR">
                </form>
            </div>
            <div>
                
                <a href="notaservicio.php" class="btn btn-danger" class="button">VOLVER</a>
            </div>
        </div>
    </div>
</main>
<?php include("piedecodigo.php"); ?>