<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <?php
        $idcliente = $_POST['idcliente'];
        ?>
        <h1> <?php echo "ID: " . $idcliente; ?></h1>
        <div class="card mb-4">
            <div class="card-body">
                <h1> TELEFONO DEL CLIENTE </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NUMERO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select numero
                                        from telefonocliente
                                        where telefonocliente.idcliente in (select id
                                                                            from cliente
                                                                            where cliente.id = $idcliente)";
                        $resultado = $mysqli->query($sql_select);
                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $numero = $fila_usu['numero'];
                        ?>
                            <tr>
                                <td><?php echo $numero; ?></td>
                            </tr>
                        <?php    } ?>
                    </tbody>
                </table>
                <td> <a href='../controles/telefonocliente_agregar.php?id=<?php echo $idcliente; ?>' class="btn btn-primary" class="button"> AGREGAR</a></td>
               
            </div>
            <div>
                <a href="cliente.php" class="btn btn-danger" class="button">VOLVER</a>
            </div>
        </div>
    </div>
</main>
<?php include("piedecodigo.php"); ?>