<div class="row">
  <div class="col s12">
  <form id="form" class="col s12 center" action="../controller/citas.controller.php" method="POST">
    <h2 class="center">Solicitar Cita</h2>
    <div class="row">
      <div class="input-field col s4 black-text">
            <label>Nombre Empresa</label>

            <input required type="text" name="razon_social" class="validate"></div>

            <div class="input-field col s4 black-text">
              <label>Nit</label>
              <input required type="number" name="nit" class="validate">
          </div>

            <div class="input-field col s4 black-text">
              <label>Telefono</label>
              <input required type="number" name="telefono" class="validate">
            </div>
    </div>

      <div class="row">

          <div class="input-field col s4 black-text">
          <label>Direccion</label>
          <input required type="text" name="direccion" class="validate">
          </div>

            <div class="input-field col s6 l5 m5 black-text">
            <label>Correo Electronico</label>
            <input required type="email" name="correo" class="validate">
            </div>

            <div class="input-field col s12 l5 m5 black-text">
            <label class="black-text">Tipo de Empresa</label>
                <br>
                <select name="descripcion" required >
                  <option value="" disabled selected>Seleccione</option>
                  <option value="Barberia">Barbería</option>
                  <option value="Peluqueria">Peluquería</option>
                  <option value="Spa de uñas">Spa de uñas</option>
                  <option value="Spa de Relajacion">Spa de relajación</option>
                  <option value="Centro Estetico">Centro Estético</option>
                  <option value="Tienda de Belleza">Tienda de Belleza</option>
                </select>

            </div>
        </div>


        <input type="hidden" name="autor" value="<?php  //echo ($_SESSION["nombre"])." ".($_SESSION["apellido"]); ?>">
        <input type="hidden" name="estado" value="1">

    <div class="col s12 center">
        <button name="acc" value="c" class="waves-effect black btn" <a href="dashboard.php?p=<?php echo base64_encode('gestion_empresa')?>"> Enviar</button>
        <button class="waves-effect black btn"><a href="dashboard.php?p=<?php echo base64_encode('gestion_empresa')?>">Cancelar</a></button>
    </div>
  </form>
</div>
</div>
