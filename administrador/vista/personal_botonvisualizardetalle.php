<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <div class="card mb-4">
            <div class="card-body">
                <h1> AGREGAR COD DEL PERSONAL </h1>
                <form action="personalvisualizardetalle.php" method="POST">
                    COD
                    <input type="text" name="codpersonal" min="1" class="form-control">            
                    <br>
                    <input type="submit" class="btn btn-success" name="" Value="VISUALIZAR">
                </form>
            </div>
        </div>
</main>
<?php include("../vista/piedecodigo.php"); ?>