<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <div class="card mb-4">
            <div class="card-body">
                <h1> EDITAR NOTA DE SERVICIO </h1>
                <!-- class="table table-striped" ORIGINAL table -->
                <!-- class="table table-striped table-dark" Theme dark -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NUMERO</th>
                            <th>NUMERO DE RECEPCION</th>
                            <th>ANTICIPO</th>
                            <th>COSTO</th>
                            <th>FECHA DE SERVICIO</th>
                            <th>FECHA DE ENTREGA</th>
                            <th>HORA DE ENTREGA</th>
                            <th>FECHA DE PAGO DEL ANTICIPO </th>
                            <th>TIPO DE PAGO DEL ANTICIPO</th>
                            <th>EDITAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select   notaservicio.nronotaservicio, 
                                                notarecepcion.nro,
                                                notaservicio.anticipo,
                                                notaservicio.costo,
                                                notaservicio.fechaservicio,
                                                notaservicio.fechaentrega,
                                                notaservicio.horaentrega,                                                                                             
                                                notaservicio.fechapagoanticipo,
                                                tipopago.formapago,
                                                tipopago.id                                                                                         
                                       from notaservicio,notarecepcion,tipopago
                                       where notaservicio.nronotarecepcion=notarecepcion.nro and notaservicio.idtipopago=tipopago.id";
                        $resultado = $mysqli->query($sql_select);

                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $nronotaservicio = $fila_usu['nronotaservicio'];
                            $nro = $fila_usu['nro'];                          
                            $anticipo = $fila_usu['anticipo'];
                            $costo = $fila_usu['costo'];
                            $fechaservicio = $fila_usu['fechaservicio'];
                            $fechaentrega = $fila_usu['fechaentrega'];
                            $horaentrega = $fila_usu['horaentrega'];
                            $fechaanticipo = $fila_usu['fechapagoanticipo'];             
                            $formapago = $fila_usu['formapago'];
                            $idpago = $fila_usu['id'];
                        ?>
                          <?php
                           if($idpago > 0){
                          ?>                   
                            <tr>
                                <td><?php echo $nronotaservicio; ?></td>
                                <td><?php echo $nro; ?></td>
                                <td><?php echo $anticipo; ?></td>
                                <td><?php echo $costo; ?></td>
                                <td><?php echo $fechaservicio; ?></td>
                                <td><?php echo $fechaentrega; ?></td>
                                <td><?php echo $horaentrega; ?></td>                                                            
                                <td><?php echo $fechaanticipo; ?></td>
                                <td><?php echo $formapago; ?></td>
                                <td> <a href='../controles/notaservicio_editar.php?nro=<?php echo $nronotaservicio; ?>'> Editar</a> </td>
                            </tr>
                            <?php
                                }
                            ?>
                        <?php    } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php include("piedecodigo.php"); ?>