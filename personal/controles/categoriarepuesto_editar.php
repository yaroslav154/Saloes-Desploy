<?php include("../vista/cabeceracodigo.php"); ?>

<main>
    <div class="container-fluid px-4">
        <br><br>
        <div class="card mb-4">
            <div class="card-body">
                <?php $id_categoriarepuesto = $_GET['id'];
                //PARA RELLENAR LOS CAMPOS DEL FORMULARIO
                $sql_select = "SELECT *
                                from categoriarepuesto
                                where id='$id_categoriarepuesto'";
                $resultado = $mysqli->query($sql_select);
                while ($fila_usu = $resultado->fetch_assoc()) {
                    $id = $fila_usu['id'];
                    $tipo = $fila_usu['tiporepuesto'];
                }
                ///////////////////////////////////////////////
                ?>
                <form action="../modelo/categoriarepuesto_editar_guardar.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id_categoriarepuesto; ?> " required="required">
                    TIPO
                    <input type="text" name="tipo" value="<?php echo $tipo; ?>"  class="form-control">
                    <br>
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