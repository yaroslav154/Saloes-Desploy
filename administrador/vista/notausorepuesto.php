<?php include("cabeceracodigo.php"); ?>


<main>
    <div class="container-fluid px-4">
        <br><br>
        <div class="card mb-4">
            <div class="card-body">
                <h1> TABLA DE USO DE REPUESTO </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NUMERO DE SERVICIO</th>
                            <th>ID DE NOTA DE COMPRA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php


                        $sql_select = "select * 
		                         	from notausorepuesto ";
                        $resultado = $mysqli->query($sql_select);

                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $id_marca = $fila_usu['nronotaservicio'];
                            $nombre = $fila_usu['idnotacompra'];
                        ?>
                            <tr>
                                <td><?php echo $id_marca; ?></td>
                                <td><?php echo $nombre; ?></td>
                            </tr>
                        <?php    } ?>

                    </tbody>
                </table>
                <br>
            </div>
            <div>
                <a href="../controles/notausorepuesto_agregar.php" class="btn btn-danger" class="button">AGREGAR</a>
                <a href="notausorepuesto_botoneditar.php" class="btn btn-danger" class="button">EDITAR</a>
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