<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <div class="card mb-4">   
            <div class="card-body">
                <h1> NOTA DE RECEPCION </h1>
                <!-- class="table table-striped" ORIGINAL table -->
                <!-- class="table table-striped table-dark" Theme dark -->
                <table class="table table-striped" >
                    <thead>
                        <tr>
                            <th>NUMERO</th>
                            <th>OBSERVACION</th>
                            <th>FECHA</th>
                            <th>HORA</th>
                            <th>NOMBRE PERSONAL</th>
                            <th>ID DISPOSITIVO</th>
                            <th>TIPO DE DISPOSITIVO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select   notarecepcion.nro , 
                                                notarecepcion.observacion,
                                                notarecepcion.fecha, 
                                                notarecepcion.hora,
                                                personal.nombrepersonal,
                                                dispositivo.id,
                                                categoriadispositivo.tipo
                                     from notarecepcion,personal,dispositivo,categoriadispositivo                            
                                     where personal.cod=notarecepcion.codpersonal and notarecepcion.iddispositivo=dispositivo.id
                                     and dispositivo.idcategoriadispositivo=categoriadispositivo.id";
                        $resultado = $mysqli->query($sql_select);

                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $id_nota = $fila_usu['nro'];
                            $observacion = $fila_usu['observacion'];
                            $fecha = $fila_usu['fecha'];
                            $hora = $fila_usu['hora'];
                            $cod_personal = $fila_usu['nombrepersonal'];
                            $dispositivo = $fila_usu['id'];
                            $tipodispositivo = $fila_usu['tipo'];
                        ?>
                            <tr>
                                <td><?php echo $id_nota; ?></td>
                                <td><?php echo $observacion; ?></td>
                                <td><?php echo $fecha; ?></td>
                                <td><?php echo $hora; ?></td>
                                <td><?php echo $cod_personal; ?></td>
                                <td><?php echo $dispositivo; ?></td>
                                <td><?php echo $tipodispositivo; ?></td>
                            </tr>
                        <?php    } ?>
                    </tbody>
                </table>
            </div>
            <div>
                <a href="../controles/notarecepcion_agregar.php" class="btn btn-danger" class="button">AGREGAR</a>
                <a href="notarecepcion_botoneditar.php" class="btn btn-danger" class="button">EDITAR</a>
                <br>
                <br>
                <a href="notarecepcion_botonagregarproblema.php" class="btn btn-primary" class="button">AGREGAR PROBLEMA DEL DISPOSITIVO</a>
                <a href="notarecepcion_botonagregaraccesorio.php" class="btn btn-primary" class="button">AGREGAR ACCESORIO DEL DISPOSITIVO</a>
                <a href="notarecepcion_botonvisualizardetalle.php" class="btn btn-primary" class="button">DETALLE DEL DISPOSTIVO</a>
            </div>
        </div>
    </div>
</main>
<?php include("../vista/piedecodigo.php"); ?>