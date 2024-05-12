<?php include("cabeceracodigo.php"); ?>

<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">
                <h1> TABLA DE ROL </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>


                            <th>ID </th>
                            <th>NOMBRE</th>
                            

                        </tr>
                    </thead>
                    <tbody>
                        <?php 
									$sql_select="select * 
									from  rol
									";
									$resultado=$mysqli->query($sql_select);
									while($fila_usu=$resultado->fetch_assoc())
									{
                             
$ID_rol=$fila_usu['id'];
$nombre=$fila_usu['nombrerol'];
;


?>
                        <tr>

                            <td><?php echo $ID_rol; ?></td>
                            <td><?php echo $nombre; ?></td>

                        
                        </tr>
                        <?php
								}
								?>
                    </tbody>
                </table>
                <a href="../controles/rol_agregar.php" class="btn bs-success" class="button">AGREGAR</a>
                <a href="rol_botoneditar.php?ID_rol=<?php echo $ID_rol;?>" class="btn btn-danger"
                    class="button">EDITAR</a>
                <a href="rol_botoneliminar.php?id=<?php echo $ID_rol;?>" class="btn btn-danger"
                    class="button">ELIMINAR</a>
                <a href="../vista/rolusuario.php?id=<?php echo $ID_rol ;?>"  class="btn btn-danger"
                    class="button">VER ROL-USUARIO</a>
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




<?php include("piedecodigo.php"); ?>
