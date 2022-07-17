<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <?php
        $numero_notarecepcion = $_GET['nro'];
        ?>
        <div class="card mb-4">
            <div class="card-body">
            <h1>AGREGAR PROBLEMA DEL DISPOSITIVO</h1>
                <form action="../modelo/detalleproblema_agregar_guardar.php" method="POST">
                    DESCRIPCION
                    <input type="text" name="descripcion" class="form-control" required="required">
                    <input type="hidden" name="nronotarecepcion" value="<?php echo $numero_notarecepcion;?>" required="required">             
                    <br>
                    <input type="submit" class="btn btn-success" name="" Value="AGREGAR">                
                </form>
            </div>
        </div>
</main>
<?php include("../vista/piedecodigo.php"); ?>