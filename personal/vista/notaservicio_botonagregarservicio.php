<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <div class="card mb-4">
            <div class="card-body">
                <h1> AGREGAR NUMERO DE NOTA DE SERVICIO </h1>
                <form action="notaserviciodetalle.php" method="POST">
                    NUMERO
                    <input type="number" name="numeronotaservicio" min="1" class="form-control">            
                    <br>
                    <input type="submit" class="btn btn-success" name="" Value="AGREGAR SERVICIOS">
                </form>
            </div>
        </div>
</main>
<?php include("../vista/piedecodigo.php"); ?>