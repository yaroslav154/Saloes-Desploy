<?php include("../vista/cabeceracodigo.php"); ?>

<main>
  <div class="container-fluid px-4">
    <br><br>

    <div class="card mb-4">

      <div class="card-body">

        <form action="../modelo/repuesto_agregar_guardar.php" method="POST">

          COD
          <input type="text" id="" name="cod" class="form-control">
          DESCRIPCION
          <input type="text" id="" name="descripciónrepuesto" class="form-control">
          PRECIO
          <input type="text" id="" name="precio" class="form-control">
          CATEGORIA REPUESTO
          <select name="categoriarepuesto" required="required" class="form-control">
            <?php
            $sql_select1 = "select * from categoriarepuesto";
            $resultado = $mysqli->query($sql_select1);
            while ($fila = $resultado->fetch_assoc()) {
              $codigo = $fila['id'];
              $nombrecategoriarepuesto = $fila['tiporepuesto'];


            ?>
              <option value="<?php echo $codigo; ?>"><?php echo  strtoupper($nombrecategoriarepuesto); ?></OPTION>
            <?php
            }
            ?>
          </select>

          MARCA
          <select name="marca" required="required" class="form-control">
            <?php
            $sql_select1 = "select * from marca";
            $resultado = $mysqli->query($sql_select1);
            while ($fila = $resultado->fetch_assoc()) {
              $idmarca = $fila['id'];
              $nombremarca = $fila['nombremarca'];


            ?>
              <option value="<?php echo $idmarca; ?>"><?php echo  strtoupper($nombremarca); ?></OPTION>
            <?php
            }
            ?>
          </select>


          CATEGORIA DISPOSITIVO
          <select name="categoria" required="required" class="form-control">
            <?php
            $sql_select1 = "select * from categoriadispositivo";
            $resultado = $mysqli->query($sql_select1);
            while ($fila = $resultado->fetch_assoc()) {
              $id = $fila['id'];
              $nombrecategoriadispositivo = $fila['tipo'];


            ?>
              <option value="<?php echo $id; ?>"><?php echo  strtoupper($nombrecategoriadispositivo); ?></OPTION>
            <?php
            }
            ?>
          </select>



          <br>
          <br>

          <input type="submit" class="form-control" name="" Value="AGREGAR REPUESTO">


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