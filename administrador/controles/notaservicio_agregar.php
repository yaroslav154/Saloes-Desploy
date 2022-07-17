<?php include("../vista/cabeceracodigo.php"); ?>

<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">
            <div class="card-body">
                <h1> AGREGAR NOTA DE SERVICIO </h1>
                <form action="../modelo/notaservicio_agregar_guardar.php" method="POST">
                    NUMERO
                    <input type="number" id="" name="numero" class="form-control">
                    <!--  COSTO -->
                    <input type="hidden" id="" name="costo" value="<?php $costo = 0 ?>" class="form-control">
                    <!--  ANTICIPO -->
                    <input type="hidden" id="" name="anticipo" value="<?php $anticipo = 0 ?>" class="form-control">
                    <!-- FECHA DE PAGO DEL ANTICIPO -->
                    <input type="hidden" id="" name="fechapagoanticipo" value="<?php $fecha = date('Y-m-d'); ?>" class="form-control">
                    <!-- ------------------------------- -->
                    FECHA DE SERVICIO
                    <br>
                    <input type="date" id="" name="fechaservicio" class="" value="<?php echo date("Y-m-d"); ?>">
                    <br>
                    FECHA DE ENTREGA
                    <br>
                    <input type="date" id="" name="fechaentrega" class="" value="<?php echo date("Y-m-d"); ?>">
                    <br>
                    HORA DE ENTREGA
                    <br>
                    <input type="time" id="" name="horaentrega" class="">
                    <br>
                    </select>
                    NUMERO DE NOTA DE RECEPCION
                    <select name="nronotarecepcion" required="required" class="form-control">
                        <?php
                       /*  $sql_select1 = "select nro from notarecepcion"; */
                        $sql_select1 = "SELECT nro
                                        from notarecepcion
                                        where notarecepcion.nro not in  (select nronotarecepcion
                                                                        from notaservicio)";
                        $resultado = $mysqli->query($sql_select1);
                        while ($fila = $resultado->fetch_assoc()) {
                            $nro = $fila['nro'];
                        ?>
                            <option value="<?php echo $nro; ?>"><?php echo $nro; ?></OPTION>
                        <?php
                        }
                        ?>
                    </select>
                    NOMBRE PERSONAL
                    <select name="codpersonal" required="required" class="form-control">
                        <?php
                        $sql_select1 = "select cod,nombrepersonal from personal";
                        $resultado = $mysqli->query($sql_select1);
                        while ($fila = $resultado->fetch_assoc()) {
                            $cod = $fila['cod'];
                            $nombrepersonal = $fila['nombrepersonal'];
                        ?>
                            <option value="<?php echo $cod; ?>">
                                <?php echo  strtoupper($nombrepersonal); ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                    <!-- TIPO DE PAGO SERA NINGUNO COD 0 EN LA TABLA DE DE TIPODEPAGO -->
                    <input type="hidden" id="" name="idtipopago" value="<?php echo "0" ?>" class="form-control">
                    <br>
                    <input type="submit" class="btn btn-success" name="" Value="AGREGAR">
                </form>
            </div>
        </div>
</main>
<!-- <footer class="py-4 bg-light mt-auto">
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
</footer> -->
<?php include("../vista/piedecodigo.php"); ?>