<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <div class="card mb-4">
            <div class="card-body">
            <h1> AGREGAR NOTA DE USO DE REPUESTO </h1>
                <form action="../modelo/notausorepuesto_agregar_guardar.php" method="POST">
                    NUMERO NOTA DE SERVICIO
                    <select name="nronotaservicio" required="required" class="form-control">
                        <?php
                        $sql_select1 = "select notaservicio.nronotaservicio from notaservicio";
                        $resultado = $mysqli->query($sql_select1);
                        while ($fila = $resultado->fetch_assoc()) {
                            $nronotaservicio = $fila['nronotaservicio'];
                        ?>
                            <option value="<?php echo $nronotaservicio; ?>"><?php echo  strtoupper($nronotaservicio); ?></OPTION>
                        <?php
                        }
                        ?>
                    </select>
                    ID NOTA DE COMPRA
                    <select name="idnotacompra" required="required" class="form-control">
                        <?php
                        $sql_select1 = "select notacompra.id from notacompra";
                        $resultado = $mysqli->query($sql_select1);
                        while ($fila = $resultado->fetch_assoc()) {
                            $idcompra = $fila['id'];
                        ?>
                            <option value="<?php echo $idcompra; ?>"><?php echo  strtoupper($idcompra); ?></OPTION>
                        <?php
                        }
                        ?>
                    </select>
                    <br>
                    <br>
                    <input type="submit" class="form-control" name="" Value="AGREGAR">
                </form>
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