<?php include("cabeceracodigo.php"); ?>

<main>
    <div class="container-fluid px-4">
        <br><br>

        <div class="card mb-4">

            <div class="card-body">

                <h1> NOTAS DE COMPRAS </h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NUMERO</th>
                            <th>FECHA</th>
                            <th>TOTAL</th>
                            <th>PROVEEDOR</th>
                            <th>ENCARGADO</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php   
           	
									$sql_select="SELECT notacompra.id,notacompra.nro,notacompra.fecha,notacompra.total,proveedor.nombre,personal.nombrepersonal
                                    from notacompra,proveedor,personal 
                                    where notacompra.idproveedor=proveedor.id and notacompra.codpersonal=personal.cod " ;
                                   $resultado=$mysqli->query($sql_select);
                                   
                                       while($fila_usu=$resultado->fetch_assoc())
                                   {
   $id_nota=$fila_usu['id'];
   $numero=$fila_usu['nro'];
   $fecha=$fila_usu['fecha'];
   $total=$fila_usu['total'];
   $nombre=$fila_usu['nombre'];
   $nombrepersonal=$fila_usu['nombrepersonal'];
       
                                   
                                       ?>
                        <tr>
                            <td><?php  echo $id_nota; ?></td>
                            <td><?php echo $numero; ?></td>
                            <td><?php echo $fecha; ?></td>
                            <td><?php echo $total; ?></td>
                            <td><?php echo $nombre; ?></td>
                            <td><?php echo $nombrepersonal; ?></td>
                            <td><a href='../modelo/notacompra_eliminar_guardar.php?id=<?php echo$id_nota;?>'> eliminar</a> </td>
                        </tr>
                        <?php    } ?>
                    </tbody>
                </table>


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