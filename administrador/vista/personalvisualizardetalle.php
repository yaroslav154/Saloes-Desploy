<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <?php
        $codpersonal = $_POST['codpersonal'];
        ?>
        <h1> <?php echo "COD: " . $codpersonal; ?></h1>
        <div class="card mb-4">
            <div class="card-body">
                <!------------------------------------CORREO------------------------------->
                <h1> CORREO </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>DESCRIPCION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select correo
                                        from correopersonal
                                        where codpersonal in (select cod
                                                            from personal
                                                            where cod = '$codpersonal')";
                        $resultado = $mysqli->query($sql_select);
                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $correo = $fila_usu['correo'];
                        ?>
                            <tr>
                                <td><?php echo $correo; ?></td>
                            </tr>
                        <?php    } ?>
                    </tbody>
                </table>
                
            </div>
            <div>
                <a href="personal.php" class="btn btn-danger" class="button">VOLVER</a>
            </div>
        </div>
    </div>
</main>
<?php include("piedecodigo.php"); ?>