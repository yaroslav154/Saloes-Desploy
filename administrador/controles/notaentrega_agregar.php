<?php include("../vista/cabeceracodigo.php"); ?>


<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">
            <div class="card-body">
                <h1> AGREGAR NOTA DE ENTREGA </h1>
                <form action="../modelo/notaentrega_agregar_guardar.php" method="POST">
                    NUMERO
                    <input type="number" id="" name="numero" min="1" class="form-control">
                    NOMBRE
                    <input type="text" id="" name="nombre" class="form-control">
                    FECHA
                    <br>
                    <input type="date" id="" name="fecha" class="">
                    <br>
                    HORA
                    <br>
                    <input type="time" id="" name="hora" class="">
                    <br>
                    NUMERO DE NOTA DE SERVICIO
                    <select name="nronotaservicio" required="required" class="form-control">
                        <?php
                        /* $sql_select1 = "select nronotaservicio from notaservicio"; */
                            $sql_select1 ="SELECT nronotaservicio
                                            from notaservicio
                                            where idtipopago > 0 and nronotaservicio not in (select nronotaservicio
                                                                                            from notaentrega)";
                        $resultado = $mysqli->query($sql_select1);
                        while ($fila = $resultado->fetch_assoc()) {
                            $nro = $fila['nronotaservicio']; 
                        ?>
                            <option value="<?php echo $nro; ?>"><?php echo  strtoupper($nro); ?></OPTION>
                        <?php
                        }
                        ?>
                    </select>  
                    PERSONAL
                    <select name="codpersonal" required="required" class="form-control">
                        <?php
                        $sql_select1 = "select cod,nombrepersonal from personal";
                        $resultado = $mysqli->query($sql_select1);
                        while ($fila = $resultado->fetch_assoc()) {
                            $cod = $fila['cod'];  
                            $nombrepersonal = $fila['nombrepersonal'];
                        ?>
                            <option value="<?php echo $cod; ?>"><?php echo  strtoupper($nombrepersonal); ?></OPTION>
                        <?php
                        }
                        ?>
                    </select>
                    
                    TIPO DE PAGO
                    <select name="tipopago" required="required" class="form-control">
                        <?php
                        $sql_select1 = "select id,formapago from tipopago where id > 0" ;
                        $resultado = $mysqli->query($sql_select1);
                        while ($fila = $resultado->fetch_assoc()) {
                            $id = $fila['id'];  
                            $formapago = $fila['formapago'];


                        ?>
                            <option value="<?php echo $id; ?>"><?php echo  strtoupper($formapago); ?></OPTION>
                        <?php
                        }
                        ?>
                    </select>    

        
                    <br>
                    <br>
                    <input type="submit" class="btn btn-success" name="" Value="AGREGAR">
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