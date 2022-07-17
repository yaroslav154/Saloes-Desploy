<?php include("cabeceracodigo.php"); ?>


<main>
    <div class="container-fluid px-4">
        <br><br>
        <?php
        $codpersonal = $_GET['cod'];
        ?>
        <div class="card mb-4">

            <div class="card-body">

                <h1> ELIMINAR CORREO DEL PERSONAL </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>CORREO</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         $sql_select = "select idcorreopersonal, correo
                         from correopersonal
                         where correopersonal.codpersonal in (select cod
                                                             from personal
                                                             where personal.cod = '$codpersonal')";
                        $resultado = $mysqli->query($sql_select);
                        while ($fila_usu = $resultado->fetch_assoc()) {
                            $id = $fila_usu['idcorreopersonal'];
                            $correo = $fila_usu['correo'];

                        ?>
                            <tr>
                                <td><?php echo $correo; ?></td>
                                <td><a href='../modelo/correopersonal_eliminar_guardar.php?id=<?php echo $id; ?>& codpersonal=<?php echo $codpersonal; ?>'>Eliminar</td>
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