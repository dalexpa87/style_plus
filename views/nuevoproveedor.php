<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="recursos\plugins\materialize\css\materialize.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <link rel="stylesheet" type="text/css" href="recursos\css\estilos_iniciosesion.css">      

	<title>Nuevo Proveedor</title>
</head>
<body class="grey lighten-1">      
  <div class="container col s12 l7 m9">

      <form class="col s12 center" action="../controller/proveedor.controller.php" method="POST">
        <h1 class="center">Nuevo Proveedor</h1>

        
      <div class="row" >
          <div class="input-field col s10 l5 m5 black-text">
            <label>Nombre de La  Empresa o Razon Social</label>
            <br></br>
            <input type="text" name="razon_social" class="validate" required/>
          </div>

          <div class="input-field col s10 l5 m5 black-text">
            <label>Nit o Rut</label>
            <br></br>
            <input type="text" name="nit" class="validate" required/ >
          </div>
      </div>
      <div class="row" >
          <div class="input-field col s10 l5 m5 black-text">
            <label>Teléfono Proveedor</label>
            <br></br>
            <input type="text" name="telefono" class="validate" required/ >
          </div>
          <div class="input-field col s10 l5 m5 black-text">
            <label>Dirección</label>
            <br></br>
            <input type="text" name="direccion" class="validate"required/  >
          </div>          
      </div>
      <div class="row" >       

          <div class="input-field col s10 l5 m5 black-text" required/>
            <label>Ciudad</label>
            <br></br>
            <input type="text" name="ciudad" class="validate" required/ >
          </div>
      </div>
      <div class="row" >
          <div class="input-field col s10 l5 m5 black-text">
            <label>Contacto Principal del Proveedor</label>
            <br></br>
            <input type="text" name="nombre_contacto" class="validate" required/ >
          </div>

          <div class="input-field col s10 l5 m5 black-text">
            <label>Correo Electronico</label>
            <br></br>
            <input type="text" name="correo" class="validate" required/>
          </div>
      </div>
      <div class="row" >
      <div class="input-field col s10 l5 m5 black-text ">
            <label class="white-text">Banco</label>
            <br></br>            
            <input type="text" name="banco"  class="validate"required/  >            
          </div> 
          <div class="input-field col s10 l5 m5 black-text">
            <label>Número de cuenta del Proveedor</label>
            <br></br>            
            <input type="text" name="numero_cuenta"  class="validate" required/ >
          </div> 
          
          </div>
          
      
          <input type="hidden" name="autor" value="Administrador">               
         <button  type="botton" name="acc" value="c" class="waves-effect black btn"> Enviar</button>
         <button type="button" class="waves-effect black btn"><a href="iniciosesion.php">cancelar</a></button>
         

    
      </form>
      </div>
  
        
   <script type="text/javascript" src="jquery-1.12.1.min.js"></script>
 	<script type="text/javascript" src="materialize\js\materialize.min.js"></script>
   <script type="text/javascript">
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
   </script>


  <script type="text/javascript">

  $(document).ready(function() {
    $('select').material_select();
  });
         
  </script>

</body>

</html>