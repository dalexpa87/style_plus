<?php

          if(isset($_GET["m"])){
            if($_GET["m"] != ""){
              echo "<script>alert('".$_GET["m"]."')</script>";
            }
          }

      ?>
  <div class="container col s12 l7 m9" id="form">

  <form class="col s12 center" action="../controller/controller.proveedor.php" method="POST">
        <h1 class="center">Nuevo Proveedor</h1>

        
      <div class="row" >
          <div class="input-field col s10 l5 m5 black-text">
            <label>Razon Social</label>
            <br>
            <input type="text" name="razon_social" class="validate" required onkeypress="return validar(event)"/>
          </div>

          <div class="input-field col s10 l5 m5 black-text">
            <label>Nit o Rut</label>
            <br>
            <input type="number" name="nit" class="validate" required/ >
          </div>
      </div>
      <div class="row" >
          <div class="input-field col s10 l5 m5 black-text">
            <label>Teléfono Proveedor</label>
            <br>
            <input type="tel" name="telefono" class="validate" required/ >
          </div>
          <div class="input-field col s10 l5 m5 black-text">
            <label>Dirección</label>
            <br>
            <input type="text" name="direccion" class="validate" required/>
          </div>          
      </div>
      <div class="row" >       

          <div class="input-field col s10 l5 m5 black-text" required/>
            <label>Ciudad</label>
            <br>
            <input type="text" name="ciudad" class="validate" required onkeypress="return validar(event)"/ >
          </div>
      </div>
      <div class="row" >
          <div class="input-field col s10 l5 m5 black-text">
            <label>Contacto Principal del Proveedor</label>
            <br>
            <input type="text" name="nombre_contacto" class="validate" required onkeypress="return validar(event)"/ >
          </div>

          <div class="input-field col s10 l5 m5 black-text">
            <label>Correo Electronico</label>
            <br>
            <input type="email" name="correo" class="validate" required/>
          </div>
      </div>
      <div class="row" >
      <div class="input-field col s10 l5 m5 black-text ">
            <label >Banco</label>
            <br>           
            <input type="text" name="banco"  class="validate" required onkeypress="return validar(event)"/>            
          
      </div> 
          <div class="input-field col s10 l5 m5 black-text">
            <label>Número de cuenta del Proveedor</label>
            <br>           
            <input type="number" name="numero_cuenta"  class="validate" required/ >
          </div> 
          
          </div>
          
      
          <input type="hidden" name="autor" value="<?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"]; ?>" > 
           <input type="hidden" name="estado" value="1">                
         <button  type="botton" name="acc" value="c" class="waves-effect black btn"> Enviar</button>
         <button type="button" class="waves-effect black btn"><a href="Gestion_proveedores.php">cancelar</a></button>
         

    
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

