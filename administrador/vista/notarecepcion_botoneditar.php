<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">

                <h1> EDITAR UNA NOTA DE RECEPCION </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NUMERO</th>
                            <th>OBSERVACION</th>
                            <th>FECHA</th>
                            <th>HORA</th>
                            <th>NOMBRE PERSONAL</th>
                            <th>ID DISPOSITIVO</th>
                            <th>EDITAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select notarecepcion.nro, 
                                        notarecepcion.observacion , 
                                        notarecepcion.fecha, 
                                        notarecepcion.hora,
                                        personal.nombrepersonal,
                                        dispositivo.id
                                  from notarecepcion,personal,dispositivo
                                  where personal.cod=notarecepcion.codpersonal and dispositivo.id=notarecepcion.iddispositivo";
                        $resultado = $mysqli->query($sql_select);

                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $id_nota = $fila_usu['nro'];
                            $observacion = $fila_usu['observacion'];
                            $fecha = $fila_usu['fecha'];
                            $hora = $fila_usu['hora'];
                            $cod_personal = $fila_usu['nombrepersonal'];
                            $iddispositivo = $fila_usu['id'];


                        ?>
                            <tr>
                                <td><?php echo $id_nota; ?></td>
                                <td><?php echo $observacion; ?></td>
                                <td><?php echo $fecha; ?></td>
                                <td><?php echo $hora; ?></td>
                                <td><?php echo $cod_personal; ?></td>
                                <td><?php echo $iddispositivo; ?></td>
                                <td> <a href='../controles/notarecepcion_editar.php?id=<?php echo $id_nota; ?>'> Editar</a>
                                </td>
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
<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2021</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
<?php include("../vista/piedecodigo.php"); ?>