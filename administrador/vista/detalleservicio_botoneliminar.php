<?php include("cabeceracodigo.php"); ?>


<main>
    <div class="container-fluid px-4">
        <br><br>
        <?php
        $numeronotaservicio = $_GET['nro'];
        ?>
        <div class="card mb-4">

            <div class="card-body">

                <h1> ELIMINAR DETALLE DEL SERVICIO </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>SERVICIO</th>
                            <th>COSTO DEL SERVICIO</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select servicio.id, categoriaservicio.descripcion, detalleservicio.costo                
                        from    detalleservicio,servicio,categoriaservicio
                        where   detalleservicio.idservicio = servicio.id and 
                                servicio.idcategoriaservicio=categoriaservicio.id
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
                                <td><a href='../modelo/detalleservicio_eliminar_guardar.php?nro=<?php echo $numeronotaservicio; ?>& id=<?php echo $id; ?>'>Eliminar</td>
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