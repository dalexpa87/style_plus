<?php 
  // David al pasar el estilo descomenta lo de abajo de sesion star  y  quita  los valores q hay despues del echo. graciasS
  require_once("../model/db_conn.php");

  
  require_once("../model/servicios.class.php");

 
  
  $servicio= Gestion_Servicios::Readbyid(base64_decode($_REQUEST["ui"]));
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="recursos/plugins/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="recursos/css/estilos.css">
  <link rel="stylesheet" type="text/css" href="recursos/css/jquery.dataTables.css">
  <link rel="stylesheet" href="recursos/plugins/font-awesome/css/font-awesome.min.css">
  <link type="text/css" rel="stylesheet" href="recursos/plugins/materialize/css/materialize.css">
  <link rel="stylesheet" type="text/css" href="recursos/plugins/sweetalert/dist/sweetalert.css">
  <title>Style+</title>
  
    
    
    <script type="text/javascript" src="recursos/plugins/jquery/jquery-1.12.1.min.js"></script>
    <script type="text/javascript" charset="utf8" src="recursos/plugins/datatable/jquery.dataTables.min.js"></script>

   

    <script type="text/javascript" src="recursos/plugins/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="recursos/plugins/sweetalert/dist/sweetalert.min.js"></script>

     <script>
    $(document).ready( function () {
          $('#datatable').DataTable({    
               "language": {               
               "url": "https://cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"       
                }   
    })
          $('.modal-trigger').leanModal();
      $('select').material_select();

        <?php

          if(isset($_GET["m"])){
            if($_GET["m"] != ""){
              echo "alert('".$_GET["m"]."');";
            }
          }

      ?>

  
      //$("#mySelect").change(function(){
         //if($("#mySelect").val() == "3"){
            //$("#complemento").html("<div class='row'><div class='input-field col s12 m6 black-text'><?php $empresa//=Gestion_empresa::ReadAll(); ?><label class='white-text' >Seleccione una empresa</label><select name='id_empresa'><?php
                //foreach ($empresa as $emp){
                             // echo '
                             // <option value="'.$emp[0].'"><'.$emp[1].' </option> ';} ?>")};
                    //});
               
                  });
    </script>
    
</head> 
<body>
<div class="container s12 m10 l9" id="form">

    <form id="registrate" class="col s12 " action="../controller/servicios.controller.php" method="POST">
        <h2 class="center">Actualizar Servicio</h2>

        <div class="row" >
          <div class="col s12">
                <div class="input-field col s12 m6 black-text" >
                <label class="black-text">Codigo Servicio</label>
                <br>
                <input type="text" name="codigo" value="<?php echo $servicio[1] ?>" class="validate" required />
              </div>
                <div class="input-field col s12 m6 black-text ">
                  <label class="black-text">Nombre Servicio</label>
                  <br>
                  <input type="text" name="nombre" value="<?php echo $servicio[2] ?>" class="validate" required onkeypress="return validar(event)"  />
              </div>
        </div> 
        </div>
          <div class="row" >
          <div class="col s12">
              <div class="input-field col s12 m6 black-text" >
                <label class="black-text">Descripcion</label>
                <br>
                <input type="text" name="descripcion" value="<?php echo $servicio[3] ?>" class="validate" required />
              </div>
              <div class="input-field col s12 m6 black-text">
                <label class="black-text">Valor Venta</label>
                <br>
                <input type="number" name="valor_venta" value="<?php echo $servicio[5] ?>" class="validate" required />
              </div>
            </div>
          </div>
      <div class="row" >
          <div class="input-field col s12 m6 black-text" >
            <label class="black-text">Valor Iva</label>
            <br>
            <input type="number" name="iva" value="<?php echo $servicio[6] ?>" class="validate" required size="11" />
          </div> 

          <div class="input-field col s12 m6 black-text">
            <label class="black-text">Porcentaje Descuento</label>
            <br>
            <input type="number" value="<?php echo $servicio[7] ?>" name="descuento" class="validate"  size="10" />
          </div>
      </div>
      <div class="row" >
        <div class="col s12">
          <div class="input-field col s12 m6 black-text">
            <label class="black-text">Tiempo del servicio</label>
            <br>
            <input type="number" name="duracion" value="<?php echo $servicio[4] ?>" class="validate" required/ >
          </div>


        <input type="hidden" name="id_servicio" value="<?php echo $servicio[0] ?>">
        <input type="hidden" name="id_empresa" value="<?php echo 1//$_SESSION["id_empresa"]?>">
        <input type="hidden" name="autor" value="<?php echo "Yohanny Lopez"//$_SESSION["nombre"]." ".$_SESSION["apellido"]; ?>">
          <div class="col s12 center">
            <button  name="acc" value="u" class="waves-effect black btn">Enviar</button>
            <button class="waves-effect black btn"><a href="index.php">Cancelar</a></button>
          </div>
      </div>
  </body>
  </html>
  