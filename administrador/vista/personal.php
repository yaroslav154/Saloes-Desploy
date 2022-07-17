<?php include("cabeceracodigo.php"); ?>

<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">
                <h1> PERSONAL </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>COD</th>
                            <th>NOMBRE</th>
                            <th>APELLIDO PATERNO</th>
                            <th>APELLIDO MATERNO</th>
                            <th>SEXO</th>
                            <th>CI</th>
                            <th>TELEFONO</th>
                            <th>DIRECCION</th>
                            <th>FECHA NACIMIENTO</th>
                            <th>CARGO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                    $sql_select = "select personal.cod, personal.nombrepersonal, personal.apellidop, personal.apellidom,
                                                        personal.sexo, personal.ci, personal.telefono,
                                                        personal.direccion, personal.fechanacimiento, cargo.tipo
                                                    from personal, cargo
                                                    where personal.codcargo = cargo.cod;";
                                    $resultado = $mysqli->query($sql_select);

                                    while ($fila_usu = $resultado->fetch_assoc()) {
                                        $cod = $fila_usu['cod'];   
                                        $nombre = $fila_usu['nombrepersonal'];  
                                        $apellidop = $fila_usu['apellidop'];    
                                        $apellidom = $fila_usu['apellidom'];
                                        $sexo = $fila_usu['sexo'];
                                        $ci = $fila_usu['ci'];
                                        $telefono = $fila_usu['telefono'];
                                        $direccion = $fila_usu['direccion'];
                                        $fecha = $fila_usu['fechanacimiento'];
                                        $cargo = $fila_usu['tipo'];
                                    ?>
                        <tr>
                            <td><?php echo $cod; ?></td>
                            <td><?php echo $nombre; ?></td>
                            <td><?php echo $apellidop; ?></td>
                            <td><?php echo $apellidom; ?></td>
                            <td><?php echo $sexo; ?></td>
                            <td><?php echo $ci; ?></td>
                            <td><?php echo $telefono; ?></td>
                            <td><?php echo $direccion; ?></td>
                            <td><?php echo $fecha; ?></td>
                            <td><?php echo $cargo; ?></td>
                        </tr>
                        <?php  } ?>
                    </tbody>
                </table>
                <a href="../controles/personal_agregar.php" class="btn btn-danger" class="button">AGREGAR</a>
                <a href="personal_botoneditar.php" class="btn btn-danger" class="button">EDITAR</a>
                <a href="personal_botoneliminar.php" class="btn btn-danger" class="button">ELIMINAR</a>
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