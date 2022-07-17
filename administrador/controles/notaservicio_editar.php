<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">
            <h1> EDITAR NOTA DE SERVICIO </h1>
                <?php $nronotaservicio = $_GET['nro']; ?>
                <form action="../modelo/notaservicio_editar_guardar.php" method="POST">
                    <input type="hidden" name="nro" VALUE="<?PHP echo $nronotaservicio; ?> " required="required">
                    NUMERO DE NOTA RECEPCION
                    <input type="number" id="" name="numero" class="form-control">
                    ANTICIPO
                    <input type="number" id="" name="anticipo" class="form-control">
                    COSTO
                    <input type="number" id="" name="costo" class="form-control">
                    FECHA DE SERVICIO
                    <br>
                    <input type="date" id="" name="fechaservicio" >
                    <br>
                    FECHA DE ENTREGA
                    <br>
                    <input type="date" id="" name="fechaentrega" >            
                    <br>
                    HORA DE ENTREGA
                    <br>
                    <input type="time" id="" name="hora" >
                    <br>
                    FECHA DE PAGO DEL ANTICIPO
                    <br>
                    <input type="date" id="" name="fechaanticipo" >
                    <br>
                    TIPO DE PAGO DEL ANTICIPO
                    <select name="idtipopago" required="required"  class="form-control">
                        <?php
                        $sql_select1 = "select * 
                                        from tipopago
                                        where id>0";
                        $resultado = $mysqli->query($sql_select1);
                        while ($fila = $resultado->fetch_assoc()) {                
                            $id = $fila['id'];
                            $formapago = $fila['formapago'];
                        ?>
                            <option value="<?php echo $id; ?>"> <?php echo  strtoupper($formapago); ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <br>
                    <input type="submit" class="btn btn-warning" name="" Value="GUARDAR CAMBIOS">
                </form>



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


<?php include("../vista/piedecodigo.php"); ?>