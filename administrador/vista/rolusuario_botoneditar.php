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
                            <th>APELLIDM</th>
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
	$id_usu=$fila_usu['cod'];
	$nombre=$fila_usu['nombreusuario'];	
	$personal=$fila_usu['nombrepersonal'];
	$apellidop=$fila_usu['apellidop'];

    $rol=$fila_usu['nombrerol'];
	
		
									
										?>
                        <tr>
                            <td><?php  echo $id_usu; ?></td>
                            <td><?php echo $nombre; ?></td>
                            <td><?php echo $personal; ?></td>        
                            <td><?php echo $apellidop; ?></td>

                            <td><?php echo $rol; ?></td>

                            <td><a href='../controles/rolusuario_editar.php?cod=<?php echo $id_usu ;?>'>Editar</a> </td>
                        </tr>

                        <?php	} ?>

                    </tbody>
                </table>


                <br>


            </div>
            <div>
                <td>


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