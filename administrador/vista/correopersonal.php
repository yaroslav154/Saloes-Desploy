<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <?php
        $codpersonal = $_POST['codpersonal'];
        ?>
        <h1> <?php echo "ID: " . $codpersonal; ?></h1>
        <div class="card mb-4">
            <div class="card-body">
                <h1> CORREO DEL PERSONAL </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>CORREO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_select = "select correo
                                        from correopersonal
                                        where correopersonal.codpersonal in (select cod
                                                                            from personal
                                                                            where personal.cod = '$codpersonal')";
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
                <td> <a href='../controles/correopersonal_agregar.php?cod=<?php echo $codpersonal; ?>' class="btn btn-primary" class="button"> AGREGAR</a></td>
                <td> <a href='correopersonal_botoneditar.php?cod=<?php echo $codpersonal; ?>' class="btn btn-primary" class="button"> EDITAR</a></td>
                <td> <a href='correopersonal_botoneliminar.php?cod=<?php echo $codpersonal; ?>' class="btn btn-primary" class="button"> ELIMINAR</a></td>
            </div>
            <div>
                <a href="personal.php" class="btn btn-danger" class="button">VOLVER</a>
            </div>
        </div>
    </div>
</main>
<?php include("piedecodigo.php"); ?>