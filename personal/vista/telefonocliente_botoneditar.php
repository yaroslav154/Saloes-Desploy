<?php include("cabeceracodigo.php"); ?>


<main>
    <div class="container-fluid px-4">
        <br><br>
        <?php
        $idcliente = $_GET['id'];
        ?>
        <div class="card mb-4">

            <div class="card-body">

                <h1> EDITAR TELEFONO DEL CLIENTE </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>TELEFONO</th>
                            <th>EDITAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select idtelefonocliente, numero
                        from telefonocliente
                        where telefonocliente.idcliente in (select id
                                                            from cliente
                                                            where cliente.id = $idcliente)";
                        $resultado = $mysqli->query($sql_select);
                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $id = $fila_usu['idtelefonocliente'];
                            $numero = $fila_usu['numero'];

                        ?>
                            <tr>
                                <td><?php echo $numero; ?></td>
                                <td><a href='../controles/telefonocliente_editar.php?id=<?php echo $id; ?>& idcliente=<?php echo $idcliente; ?>'>Editar</td>
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