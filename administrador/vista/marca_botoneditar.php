<?php include("cabeceracodigo.php"); ?>

<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">>

                <h1> TABLA DE MARCAS </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>MODIFICAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php


                        $sql_select = "select * 
		                         	from marca ";
                        $resultado = $mysqli->query($sql_select);

                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $id_marca = $fila_usu['id'];
                            $nombre = $fila_usu['nombremarca'];
                        ?>
                            <tr>
                                <td><?php echo $id_marca; ?></td>
                                <td><?php echo $nombre; ?></td>
                                <td> <a href='../controles/marca_editar.php?id=<?php echo $id_marca; ?>'> Editar</a> </td>
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