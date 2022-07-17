<?php include("cabeceracodigo.php"); ?>

<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">
                <h1> TABLA DE PRIVILEGIO </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID </th>
                            <th>TIPO</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php 
									$sql_select="select * 
									from   privilegio
									";
									$resultado=$mysqli->query($sql_select);
									while($fila_usu=$resultado->fetch_assoc())
									{
                                   
$ID_priv=$fila_usu['id'];
$tipo_priv=$fila_usu['tipo'];



?>
                        <tr>
                            <td><?php echo $ID_priv; ?></td>
                            <td><?php echo $tipo_priv; ?></td>

                        </tr>
                        <?php
								}
								?>
                    </tbody>
                </table>
                <a href="../controles/privilegio_agregar.php" class="btn btn-danger" class="button">AGREGAR</a>
                <a href="privilegio_botoneditar.php" class="btn btn-danger" class="button">EDITAR</a>
                <a href="privilegio_botoneliminar.php" class="btn btn-danger" class="button">ELIMINAR</a>
                <a href="../vista/privilegiorol.php?id=<?php echo $ID_priv ;?>"  class="btn btn-danger"
                    class="button">VER PRIVILEGIO-ROL</a>
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