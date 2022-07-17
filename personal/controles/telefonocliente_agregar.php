<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <?php
        $idcliente = $_GET['id'];
        ?>
        <div class="card mb-4">
            <div class="card-body">
            <h1>AGREGAR TELEFONO DEL CLIENTE</h1>
                <form action="../modelo/telefonocliente_agregar_guardar.php" method="POST">
                    TELEFONO
                    <input type="hidden" name="idcliente" value="<?php echo $idcliente;?>" required="required">     
                    <input type="number" name="numero" class="form-control" required="required">
                            
                    <br>
                    <input type="submit" class="btn btn-success" name="" Value="AGREGAR">                
                </form>
            </div>
        </div>
</main>
<?php include("../vista/piedecodigo.php"); ?>