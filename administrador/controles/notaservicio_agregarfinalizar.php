<?php include("../vista/cabeceracodigo.php"); ?>
<main>
    <div class="container-fluid px-4">
        <br><br>
        <?php
        $numeronotaservicio = $_POST['numeronotaservicio'];
        ?>
        <div class="card mb-4">
            <div class="card-body">
                <?php
                $costo_total = 0;
                /*----------------------------SERVICIO------------------------------------- */                
                $sql_select = "select detalleservicio.costo
                                from detalleservicio
                                where detalleservicio.nronotaservicio = $numeronotaservicio";
                $resultado = $mysqli->query($sql_select);
                while ($fila_usu = $resultado->fetch_assoc()) {
                    $costo = $fila_usu['costo'];
                    $costo_total = $costo_total + $costo;
                }
                /*-------------------------------------------------------------------------- */
                /*----------------------------SERVICIO CON REPUESTO------------------------- */
                $sql_select = "select detalleserviciorepuesto.subtotal
                                from detalleserviciorepuesto
                                where detalleserviciorepuesto.nronotaservicio = $numeronotaservicio";
                $resultado = $mysqli->query($sql_select);
                while ($fila_usu = $resultado->fetch_assoc()) {
                    $costo = $fila_usu['subtotal'];
                    $costo_total = $costo_total + $costo;
                }
                /*-------------------------------------------------------------------------- */
                ?>

                <h1>FINALIZAR NOTA DE SERVICIO</h1>
                <form action="../modelo/notaservicio_agregarfinalizar_guardar.php" method="POST">
                <input type="hidden" id="" name="nronotaservicio" value="<?php echo $numeronotaservicio ?>"class="form-control">
                    COSTO TOTAL
                    <br>
                    <input type="number" id="" name="costo" value="<?php echo $costo_total ?>"class="form-control">
                    COSTO DE ANTICIPO
                    <br>
                    <input type="number" id="" name="anticipo" value="<?php echo $costo_total/2 ?>"class="form-control">
                    FECHA DE PAGO DEL ANTICIPO
                    <br>
                    <input type="date" id="" name="fechapagoanticipo" class="" value="<?php echo date("Y-m-d"); ?>">
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
                    <input type="submit" class="btn btn-success" name="" Value="AGREGAR">
                </form>
            </div>
        </div>
</main>
<?php include("../vista/piedecodigo.php"); ?>