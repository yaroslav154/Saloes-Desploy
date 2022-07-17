<?php include("cabeceracodigo.php"); ?>

<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">
                <h1> TABLA DE PRIVILEGIO-ROL </h1>
               
                <table class="table table-striped">
                    <thead>
                        <tr>
                            
                            <th>ROL</th>
                            <th>PRIVILRGIO</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                  
									
									$sql_select="select rol.nombrerol,privilegio.tipo
                                    from rol,privilegio,privilegiorol
                                    where privilegiorol.idrol=rol.id and privilegiorol.idprivilegio=privilegio.id";
									$resultado=$mysqli->query($sql_select);
									
										while($fila_usu=$resultado->fetch_assoc())
									{
    $ID_rol=$fila_usu['nombrerol'];
	$privilegio=$fila_usu['tipo'];;

	
		
									
										?>
                        <tr>

                            <td><?php echo $ID_rol; ?></td>
                            <td><?php echo $privilegio; ?></td>
 

                        </tr>

                        <?php	} ?>

                    </tbody>
                </table>
                <a href="../controles/privilegiorol_agregar.php" class="btn btn-danger" class="button">AGREGAR</a>
                <a href="privilegiorol_botoneditar.php?ID_rol=<?php echo $ID_rol;?>" class="btn btn-danger"
                    class="button">EDITAR</a>
                <a href="privilegiorol_botoneliminar.php?id=<?php echo $ID_rol;?>" class="btn btn-danger"
                    class="button">ELIMINAR</a>
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