<?php include("cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <?php
        $numero_notarecepcion = $_GET['nro'];
        ?>
        <div class="card mb-4">

            <div class="card-body">

                <h1> ELIMINAR ACCESORIO DEL DISPOSITIVO </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>TIPO</th>
                            <th>DETALLE</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select detalleaccesorio.idaccesorio, accesorio.nombre, detalleaccesorio.detalle
                        from detalleaccesorio,accesorio
                        where accesorio.id = detalleaccesorio.idaccesorio
                        and detalleaccesorio.nronotarecepcion in (select notarecepcion.nro
                                                                   from notarecepcion
                                                                   where notarecepcion.nro = $numero_notarecepcion)";
                        $resultado = $mysqli->query($sql_select);
                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $idaccesorio = $fila_usu['idaccesorio'];
                            $nombre = $fila_usu['nombre'];
                            $detalle = $fila_usu['detalle'];
                        ?>
                            <tr>
                                <td><?php echo $nombre; ?></td>
                                <td><?php echo $detalle; ?></td>
                                <td><a href='../modelo/detalleaccesorio_eliminar_guardar.php?nro=<?php echo $numero_notarecepcion; ?>& id=<?php echo $idaccesorio; ?>'>Eliminar</td>
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
<?php include("piedecodigo.php"); ?>