<?php
# -> class: gestion Proveedores
#->method(s): create(),ReadAll,readbydocumento(),ReadbyName(),update, delete(),
# Author:@yohanny_116

class Gestion_Proveedores {
	//metodo crear
	// este  metodo  guardara  en la tabla  contactos   todos  los parametros desde el  formulario.
	function Create($razon_social,$nit,$telefono,$direccion,$ciudad,$nombre_contacto,$correo,$numero_cuenta,$estado,$banco,$autor)
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=style_plus_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//CAPTURAMOS LA  FECHA DEL SISTEMA
		$fecha_creacion=date("Y-m-d");
		
		
		//crear  el  quiery  que vamos a realizar.
		$consulta= "INSERT INTO proveedor (razon_social,nit,telefono,direccion,ciudad,nombre_contacto,correo,numero_cuenta,estado,banco,fecha_creacion,autor) values(?,?,?,?,?,?,?,?,?,?,?,?)";
		$query=$conexion->prepare($consulta);
		$query->execute(array($razon_social,$nit,$telefono,$direccion,$ciudad,$nombre_contacto,$correo,$numero_cuenta,$estado,$banco,$fecha_creacion,$autor));

		style_plus_BD::Disconnect();
	}
	/*function veref_exist($nit)
    {
        //instacioamos y nos conectamos a la  base de  datos
        $conexion=style_plus_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        //crear  el  query  que vamos a realizar.
        $consulta= "SELECT * FROM proveedor WHERE nit=? ";
        $query=$conexion->prepare($consulta);
        $query->execute(array($nit));
        
        $resultado=$query->fetch(PDO::FETCH_BOTH);
        return $resultado;

        style_plus_BD::Disconnect();
    }*/
	
	//Metodo  consultar  todos
	function ReadAll()
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=style_plus_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		//crear  el  query  que vamos a realizar.
		$consulta= "SELECT * FROM  proveedor ORDER BY razon_social";
		$query=$conexion->prepare($consulta);
		$query->execute();
		// devolmemos el resultado en un arreglo
		//Fetch:Es  el  resultado que arroja la   consultta   en forma   de vector   o matris  segun sea el caso
		//para  consultas donde arroja mas de un dato    el  fetch  debe  ir  acompañado   con la  palabra ALL
		$resultado=$query->fetchALL(PDO::FETCH_BOTH);
		return $resultado;

		style_plus_BD::Disconnect();
	}
    function Readbynit($nit)
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=style_plus_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		//crear  el  query  que vamos a realizar.
		$consulta= "SELECT * FROM proveedor WHERE nit=?";
		$query=$conexion->prepare($consulta);
		$query->execute(array($nit));
		// devolmemos el resultado en un arreglo
		//Fetch:Es  el  resultado que arroja la   consultta   en forma   de vector   o matris  segun sea el caso
		//para  consultas donde arroja mas de un dato    el  fetch  debe  ir  acompañado   con la  palabra ALL
		$resultado=$query->fetch(PDO::FETCH_BOTH);
		return $resultado;

		style_plus_BD::Disconnect();
	}
	//METODO UPDATE
	function update($razon_social,$nit,$telefono,$direccion,$ciudad,$nombre_contacto,$correo,$numero_cuenta,$estado,$banco,$autor,$id_proveedor)
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=style_plus_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//CAPTURAMOS LA  FECHA DEL SISTEMA
		//CAPTURAMOS LA  FECHA DEL SISTEMA
		$fecha_creacion=date("Y-m-d");
		//crear  el  quiery  que vamos a realizar.
		$consulta= "UPDATE proveedor SET razon_social=?,nit=?, telefono=?, direccion=?, ciudad=?,nombre_contacto=?,correo=?,numero_cuenta=?, estado=?, banco=?,fecha_creacion=?,autor=?  WHERE id_proveedor=?  ";
		$query=$conexion->prepare($consulta);
		$query->execute(array($razon_social,$nit,$telefono,$direccion,$ciudad,$nombre_contacto,$correo,$numero_cuenta,$estado,$banco,$fecha_creacion,$autor,$id_proveedor));

		style_plus_BD::Disconnect();
	}
 	function delete($nit)
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=style_plus_BD::conect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//CAPTURAMOS LA  FECHA DEL SISTEMA
		//crear  el  quiery  que vamos a realizar.
		$consulta= "DELETE FROM uproveedor WHERE nit=?  ";
		$query=$conexion->prepare($consulta);
		$query=execute(array($nit));

		style_plus_BD::Disconnect();
	}
	function ReadbyId($id_proveedor)
	{
		$conexion=style_plus_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		//crear  el  query  que vamos a realizar.
		$consulta= "SELECT * FROM proveedor WHERE id_proveedor=? ";
		$query=$conexion->prepare($consulta);
		$query->execute(array($id_proveedor));
		// devolmemos el resultado en un arreglo
		//Fetch:Es  el  resultado que arroja la   consultta   en forma   de vector   o matris  segun sea el caso
		//para  consultas donde arroja mas de un dato    el  fetch  debe  ir  acompañado   con la  palabra ALL
		$resultado=$query->fetch(PDO::FETCH_BOTH);
		return $resultado;

		style_plus_BD::Disconnect();
	}
	
}
?>