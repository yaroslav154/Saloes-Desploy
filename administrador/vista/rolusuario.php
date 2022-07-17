<?php include("cabeceracodigo.php"); ?>

<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">
                <h1> TABLA DE ROL-USUARIO </h1>
               
                <table class="table table-striped">
                    <thead>
                        <tr>
                            
                            <th>USUARIO</th>
                            <th>NOMBRE</th>
                            <th>APELLIDO</th>
                            <th>ROL</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                  
									
									$sql_select="select rol.nombrerol,rol.id,usuario.cod,usuario.nombreusuario,usuario.contraseña,personal.nombrepersonal,personal.apellidop 
                                    from usuario,personal,rol,rolusuario
                                    where  usuario.codpersonal=personal.cod and rolusuario.idrol=rol.id and rolusuario.codusuario=usuario.cod";
									$resultado=$mysqli->query($sql_select);
									
										while($fila_usu=$resultado->fetch_assoc())
									{
    $ID_rol=$fila_usu['id'];
	$nombre=$fila_usu['nombreusuario'];;
	$nombre_personal=$fila_usu['nombrepersonal'];
	$apellidop=$fila_usu['apellidop'];
    $rol=$fila_usu['nombrerol'];
	
		
									
										?>
                        <tr>

                            <td><?php echo $nombre; ?></td>
                            <td><?php echo $nombre_personal; ?></td>
                            <td><?php echo $apellidop; ?></td>
                            <td><?php echo $rol; ?></td>

                        </tr>

                        <?php	} ?>

                    </tbody>
                </table>
                <a href="../controles/rolusuario_agregar.php" class="btn btn-danger" class="button">AGREGAR</a>
                <a href="rolusuario_botoneditar.php?ID_rol=<?php echo $ID_rol;?>" class="btn btn-danger"
                    class="button">EDITAR</a>
                <a href="rolusuario_botoneliminar.php?id=<?php echo $ID_rol;?>" class="btn btn-danger"
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