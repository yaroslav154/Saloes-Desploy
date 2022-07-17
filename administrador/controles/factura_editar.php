<?php include("../vista/cabeceracodigo.php"); ?>

<main>
    <div class="container-fluid px-4">
        <br><br>
        <div class="card mb-4">
            <div class="card-body">
                <h1> EDITAR UNA FACTURA </h1>
                <?php $numero = $_GET['nro']; ?>
                <form action="../modelo/factura_editar_guardar.php" method="POST">
                    <input type="hidden" name="nro" VALUE="<?PHP echo $numero; ?> " required="required">
                    NIT
                    <input type="number" id="" name="nit" class="form-control">
                    NOMBRE
                    <input type="text" id="" name="nombre" class="form-control">
                    NRO DE NOTA DE ENTREGA
                    <select name="nronotaentrega" required="required" class="form-control">
                        <?php
                          $sql_select1 = "select nro from notaentrega";
                        /* $sql_select1 = "SELECT nro
                                        from notaentrega
                                        where  nro not in (select nronotaentrega 
                                                            from factura)"; */
                        $resultado = $mysqli->query($sql_select1);
                        while ($fila = $resultado->fetch_assoc()) {
                            $nro = $fila['nro'];
                        ?>
                            <option value="<?php echo $nro; ?>"><?php echo  strtoupper($nro); ?></OPTION>
                        <?php
                        }
                        ?>
                    </select>
                    <br>
                    <input type="submit" class="btn btn-warning" name="" Value="GUARDAR CAMBIOS">
                </form>
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