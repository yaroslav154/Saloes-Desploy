<?php include("cabeceracodigo.php"); ?>

<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">




                <h1> TABLA DE USUARIOS </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>COD</th>
                            <th>USUARIO</th>

                            <th>ESTADO</th>
                            <th>NOMBRE</th>
                            <th>APELLIDO</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                  
									
									$sql_select="select usuario.cod,usuario.nombreusuario,usuario.contraseña,estado.nombreestado,personal.nombrepersonal,personal.apellidop 
                                    from usuario,personal,estado 
                                    where usuario.idestado=estado.id and usuario.codpersonal=personal.cod ";
									$resultado=$mysqli->query($sql_select);
									
										while($fila_usu=$resultado->fetch_assoc())
									{
	$id_usu=$fila_usu['cod'];
	$nombre=$fila_usu['nombreusuario'];
   
	$estado=$fila_usu['nombreestado'];
	$nombre_personal=$fila_usu['nombrepersonal'];
	$apellidop=$fila_usu['apellidop'];
	
		
									
										?>
                        <tr>
                            <td><?php  echo $id_usu; ?></td>
                            <td><?php echo $nombre; ?></td>

                            <td><?php echo $estado; ?></td>
                            <td><?php echo $nombre_personal; ?></td>
                            <td><?php echo $apellidop; ?></td>

                        </tr>

                        <?php	} ?>

                    </tbody>
                </table>
                <a href="../controles/usuario_agregar.php" class="btn btn-danger" class="button">AGREGAR</a>
                <a href="usuario_botoneditar.php" class="btn btn-danger" class="button">EDITAR</a>
                <a href="usuario_botoneliminar.php" class="btn btn-danger" class="button">ELIMINAR</a>
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