<?php include("../vista/cabeceracodigo.php"); ?>

<main>
  <div class="container-fluid px-4">
    <br><br>

    <div class="card mb-4">

      <div class="card-body">
        <h1>EDITAR PROVEEDOR</h1>
        <?php
        $id_proveedor = $_GET['id'];
        //PARA RELLENAR LOS CAMPOS DEL FORMULARIO
        $sql_select = "SELECT *
          from proveedor
          where id='$id_proveedor'";
        $resultado = $mysqli->query($sql_select);
        while ($fila_usu = $resultado->fetch_assoc()) {
          $id = $fila_usu['id']; 
          $nombre = $fila_usu['nombre'];
          $ubicacion = $fila_usu['ubicacion'];
        }
        ///////////////////////////////////////////////
        ?>
        <form action="../modelo/proveedor_editar_guardar.php" method="POST">

          <input type="hidden" id="" name="id" value="<?php echo $id_proveedor; ?>" class="form-control">
          NOMBRE
          <input type="text" id="" name="nombre" value="<?php echo $nombre; ?>" class="form-control">
          UBICACION
          <input type="text" id="" name="ubicacion" value="<?php echo $ubicacion; ?>" class="form-control">
          <br>
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