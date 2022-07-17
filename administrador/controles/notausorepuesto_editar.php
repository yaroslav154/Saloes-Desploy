<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">
            <div class="card-body">
                <?php $nro = $_GET['nro'];
                        $id = $_GET['id']; ?>
                <form action="../modelo/notausorepuesto_editar_guardar.php" method="GET">
                NUMERO NOTA DE SERVICIO
                <input type="hidden" id="" name="nronotaservicio" value="<?php echo $nro; ?>" class="form-control">
                    ID NOTA DE COMPRA
                    <select name="idnotacompra" value="<?php echo $id; ?>" required="required" class="form-control">
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
                    <input type="submit" class="btn btn-warning" name="" Value="GUARDAR CAMBIOS">
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