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
                            <th>PRIVILEGIO</th>
                            <th>MODIFICAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                  
									
									$sql_select="select rol.nombrerol,privilegio.tipo,privilegiorol.idrol,privilegiorol.idprivilegio
                                    from rol,privilegio,privilegiorol
                                    where privilegiorol.idrol=rol.id and privilegiorol.idprivilegio=privilegio.id";
									$resultado=$mysqli->query($sql_select);
									
										while($fila_usu=$resultado->fetch_assoc())
									{
	$id_rol=$fila_usu['idrol'];
	$id_privilegio=$fila_usu['idprivilegio'];
    $id_rol=$fila_usu['nombrerol'];
    $id_privilegio=$fila_usu['tipo'];

	
		
									
										?>
                        <tr>
                            <td><?php  echo $id_rol; ?></td>
                            <td><?php echo $id_privilegio; ?></td>

                            <td><a href='../controles/privilegiorol_editar.php?idrol=<?php echo $id_rol ;?>?idprivilegio=<?php echo $id_privilegio ;?>'>Editar</a> </td>
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