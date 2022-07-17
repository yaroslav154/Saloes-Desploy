<?php include("../vista/cabeceracodigo.php"); ?>

<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">
                <form action="../modelo/personal_agregar_guardar.php" method="POST">
                    COD
                    <input type="text" id="" name="cod" class="form-control">
                    NOMBRE
                    <input type="text" id="" name="nombre" class="form-control">
                    APELLIDO PATERNO
                    <input type="text" id="" name="apellidop" class="form-control">
                    APELLIDO MATERNO
                    <input type="text" id="" name="apellidom" class="form-control">
                    SEXO
                    <select type="char" name="sexo" id="" class="form-control">
                        <option value="M">MASCULINO</option>
                        <option value="F">FEMENINO</option>
                    </select>

                    CI <input type="number" id="" name="ci" class="form-control">
                    TELEFONO
                    <input type="number" id="" name="telefono" class="form-control">
                    DIRECCION
                    <input type="text" id="" name="direccion" class="form-control">
                    FECHA NACIMIENTO
                    <input type="date" id="" name="fecha" class="form-control" class value="2000-01-01" min="1950-01-01"
                        max="2050-12-31">
                    CARGO
                    <select name="cargo" required="required" class="form-control">
                        <?php
                                $sql_select1 = "select * from cargo";
                                $resultado = $mysqli->query($sql_select1);
                                while ($fila = $resultado->fetch_assoc()) {
                                    $id_persona = $fila['cod'];
                                    $nombrecategoria = $fila['tipo'];
                                ?>
                        <option value="<?php echo $id_persona; ?>"><?php echo  strtoupper($nombrecategoria); ?></OPTION>
                        <?php
                                }
                                ?>
                    </select>
                    <br>
                    <input type="submit" class="btn btn-success" name="" Value="AGREGAR">
                </form>

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
<?php include("../vista/piedecodigo.php"); ?>