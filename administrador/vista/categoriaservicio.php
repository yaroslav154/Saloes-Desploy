<?php include("cabeceracodigo.php"); ?>

<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">
            <div class="card-body">
                <h1> TABLA CATEGORIA DE SERVICIO </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>DESCRIPCION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                    $sql_select = "select * from categoriaservicio ";
                                    $resultado = $mysqli->query($sql_select);

                                    while ($fila_usu = $resultado->fetch_assoc()) {
                                        $id = $fila_usu['id'];
                                        $tipo = $fila_usu['descripcion'];
                                    ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $tipo; ?></td>

                        </tr>
                        <?php  } ?>
                    </tbody>
                </table>
                <br>
            </div>
            <div>
                <a href="../controles/categoriaservicio_agregar.php" class="btn btn-danger"
                    class="button">AGREGAR</a>
                <a href="categoriaservicio_botoneditar.php" class="btn btn-danger" class="button">EDITAR</a>
                <a href="categoriaservicio_botoneliminar.php" class="btn btn-danger" class="button">ELIMINAR</a>
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