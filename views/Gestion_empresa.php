<?php

  if(!isset($_SESSION["id_usuario"])){
    $msn = base64_encode("Debe iniciar sesion primero!");
    $tipo_msn = base64_encode("advertencia");


    header("Location: index.php?m=".$msn."&tm=".$tipo_msn);

 }
  require_once("../model/db_conn.php");
  require_once("../model/empresa.class.php");

?>
	<div class="container l5 m10 s12" id="tabla">
		    <h4>GESTIONAR EMPRESAS</h4>
<<<<<<< HEAD


		    <a class="waves-effect black btn" href='dashboard.php?p=<?php echo base64_encode('nueva_empresa')?>'> <i class="fa fa-user-plus"></i> Nueva Empresa</a>
=======
		    
		    	
		    <a class="waves-effect black btn" href='dashboard.php?p=<?php echo base64_encode('nueva_empresa')?>'> <i class="fa fa-industry" style="margin-left: 2px"></i> Nueva Empresa</a>
>>>>>>> origin/master

		    <table id="datatable" class="display">
		      <thead>
		        <tr>
		          <th>Codigo</th>
		          <th>Nit</th>
		          <th>Razon Social</th>
		          <th>Dirección</th>
					<th>Correo</th>
		          <th>Tipo Empresa</th>

		          <th>Acciones</th>
		        </tr>
		      </thead>
		      <tbody>

		      <?php
		      $empresas= Gestion_empresa::ReadAll();


		      foreach ($empresas as $row) {
				echo "<tr>
		                <td>".$row["id_empresa"]."</td>
		                <td>".$row["nit"]."</td>
		                <td>".$row["razon_social"]."</td>
		                <td>".$row["direccion"]."</td>
		                <td>".$row["correo"]."</td>
		                <td>".$row["descripcion"]."</td>
		                <td>

		                  
		                   <a href='dashboard.php?p=".base64_encode('actualizar_empresa')."&ui=".base64_encode($row['id_empresa'])."'><i class='fa fa-pencil'style='color:black !important'></i></a>
		                  <a href='../controller/empresa.controller.php?ui=".base64_encode($row["id_empresa"])."&acc=d'><i class='fa fa-ban' style='color:red !important' aria-hidden='true'></i></a>
		                </td>
		              </tr>";
		      }

		      ?>
		      </tbody>

		    </table>
<<<<<<< HEAD
		    <div id="modal-nueva_empresa" class="modal modal-fixed-footer">
            <div class="modal-content">
            	<?php include("nueva_empresa.php"); ?>
            </div>
            </div>
	</div>
=======
		   
	</div>
>>>>>>> origin/master
