<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <div class="card mb-4">
            <div class="card-body">
                <h1> AGREGAR ID DE CLIENTE </h1>
                <form action="clientevisualizardetalle.php" method="POST">
                    ID
                    <input type="number" name="idcliente" min="1" class="form-control">            
                    <br>
                    <input type="submit" class="btn btn-success" name="" Value="VISUALIZAR">
                </form>
            </div>
        </div>
</main>
<?php include("../vista/piedecodigo.php"); ?>