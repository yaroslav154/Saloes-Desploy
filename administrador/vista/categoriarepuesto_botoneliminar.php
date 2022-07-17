<?php include("cabeceracodigo.php"); ?>

<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">

                <h1> ELIMINAR CATEGORIA REPUESTO </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TIPO</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select * 
		                         	from categoriarepuesto ";
                        $resultado = $mysqli->query($sql_select);
                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $id_categoriarepuesto = $fila_usu['id'];
                            $tipo = $fila_usu['tiporepuesto'];
                        ?>
                            <tr>
                                <td><?php echo $id_categoriarepuesto; ?></td>
                                <td><?php echo $tipo; ?></td>
                                <td> <a href='../modelo/categoriarepuesto_eliminar_guardar.php?id=<?php echo $id_categoriarepuesto; ?>'>
                                        eliminar</a> </td>
                            </tr>
                        <?php    } ?>

                    </tbody>
                </table>




                <br>


            </div>
            <div>

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