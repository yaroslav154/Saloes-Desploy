<?php include("../vista/cabeceracodigo.php"); ?>

<main>
  <div class="container-fluid px-4">
    <br><br>

    <div class="card mb-4">

      <div class="card-body">
      <h1>AGREGAR PROVEEDOR </h1>
        <form action="../modelo/proveedor_agregar_guardar.php" method="POST">
          ID
          <input type="number" id="" name="id" class="form-control">
          NOMBRE
          <input type="text" id="" name="nombre" class="form-control">
          UBICACION
          <input type="text" id="" name="ubicacion" class="form-control">
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