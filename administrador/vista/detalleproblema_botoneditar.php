<?php include("cabeceracodigo.php"); ?>


<main>
    <div class="container-fluid px-4">
        <br><br>
        <?php
        $numero_notarecepcion = $_GET['nro'];
        ?>
        <div class="card mb-4">

            <div class="card-body">

                <h1> EDITAR PROBLEMA DEL DISPOSITIVO </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>DESCRIPCION</th>
                            <th>EDITAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select detalleproblema.iddetalleproblema, detalleproblema.descripcion
                                        from detalleproblema,notarecepcion
                                        where detalleproblema.nronotarecepcion = notarecepcion.nro
                                        and detalleproblema.nronotarecepcion in (select notarecepcion.nro
                                                                                from notarecepcion
                                                                                where notarecepcion.nro = $numero_notarecepcion)";
                        $resultado = $mysqli->query($sql_select);
                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $id = $fila_usu['iddetalleproblema'];
                            $descripcion = $fila_usu['descripcion'];

                        ?>
                            <tr>
                                <td><?php echo $descripcion; ?></td>
                                <td><a href='../controles/detalleproblema_editar.php?nro=<?php echo $numero_notarecepcion; ?>& id=<?php echo $id; ?>'>Editar</td>
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