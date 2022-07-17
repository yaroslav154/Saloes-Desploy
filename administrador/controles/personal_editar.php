<?php include("../vista/cabeceracodigo.php"); ?>

<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">
 <h1> EDITAR PERSONAL </h1>
                        <?php
                        $cod = $_GET['id'];
                        /*  $nombre = $_GET['nombrepersonal']; */
                        ?>
                        <form action="../modelo/personal_editar_guardar.php" method="GET">
                            <input type="hidden" name="id" VALUE="<?PHP echo $cod; ?>" required="required">
                            NOMBRE
                            <input type="text" id="" name="nombre" placeholder="" class="form-control">
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
                            <input type="date" id="" name="fecha" class="form-control" class value="2000-01-01" min="1950-01-01" max="2050-12-31">
                            CARGO
                            <select name="cargo" required="required" class="form-control">
                                <?php
                                $sql_select1 = "select * from cargo";
                                $resultado = $mysqli->query($sql_select1);
                                while ($fila = $resultado->fetch_assoc()) {
                                    $id = $fila['cod'];
                                    $nombrecategoria = $fila['tipo'];
                                ?>
                                    <option value="<?php echo $id; ?>"><?php echo  strtoupper($nombrecategoria); ?></OPTION>
                                <?php
                                }
                                ?>
                            </select>
                            <br>
                            <input type="submit" class="btn btn-warning" name="" Value="GUARDAR CAMBIOS">

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