<?php
		session_start();
		//1. llamar  la conexion de la base de datos
		require_once("../Model/db_conn.php");
		//2. llamar las  clases necesarias o que se requieran
		require_once("../Model/usuarios.class.php");
		//3. instanciamos las variables globales y una llamada  $accion
		// la variable accion nos va  a indicar  que parte cel crud vamos a crear.
		$accion=$_REQUEST["acc"];
		switch ($accion) {
			case 'c':
				# crear
				#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
			$tipo_documento     	=$_POST["tipo_documento"];         
			$numero_documento      	=$_POST["numero_documento"];
			$clave 			=$_POST["clave"];
			$nombre      	=$_POST["nombre"];
			$apellido    	=$_POST["apellido"];
			$telefono    	=$_POST["telefono"];
			$direccion   	=$_POST["direccion"];
			$ciudad			=$_POST["ciudad"];
			$correo      	=$_POST["correo"];
			$celular     	=$_POST["celular"];
			$fecha_nacimiento=$_POST["fecha_nacimiento"];
			$sexo        	=$_POST["sexo"];
			$estado         =$_POST["estado"];			
			$id_rol			=$_POST["id_rol"];
			$autor			=$_POST["autor"];
			
			try {
				Gestion_usuarios::Create($tipo_documento,$numero_documento,$clave,$nombre,$apellido,$telefono,$direccion,$ciudad,$correo,$celular,$fecha_nacimiento,$sexo,$estado,$id_rol,$autor);
				$mensaje= "su registro se creo correctamente :D";
				
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
			header("location: ../views/index.php?msn=".$mensaje);


				break;
				case 'u':
				# Actualizar
				#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
			$tipo_documento     	=$_POST["tipo_documento"];         
			$numero_documento      	=$_POST["numero_documento"];
			$clave 			=$_POST["clave"];
			$nombre      	=$_POST["nombre"];
			$apellido    	=$_POST["apellido"];
			$telefono    	=$_POST["telefono"];
			$direccion   	=$_POST["direccion"];
			$ciudad			=$_POST["ciudad"];
			$correo      	=$_POST["email"];
			$celular     	=$_POST["celular"];
			$fecha_nacimiento=$_POST["fecha_nacimiento"];
			$sexo        	=$_POST["sexo"];
			$estado         =$_POST["Estado"];			
			$id_rol			=$_POST["id_rol"];
			$autor			=$_POST["autor"];
			$oldnumerodedocumento =$_POST["oldnumerodedocumento"];
			try {
				Gestion_usuarios::update($tipo_documento,$numero_documento,$clave,$nombre,$apellido,$telefono,$direccion,$correo,$celular,$fecha_nacimiento,$sexo,$estado,$id_rol,$oldnumerodedocumento);
				$mensaje= "se ha  actualizado correctamente :D";
				
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
			header("location: ../Gestion_usuarios.php?msn=".$mensaje);


				break;
			case 'd':
				# delete
				#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
			       
			$numero_documento      	=$_POST["numero_documento"];
			
			try {
				Gestion_usuarios::delete($numero_documento);
				$mensaje= "se elimino correctamente :D";
				
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
			header("location: ../formusupub.php?msn=".$mensaje);


				break;

		 case 'l':
				# loguear usuario
				#iniciamos las variables   que se envian desde el  formulario  
			       
			
			$correo      	=$_POST["correo"];
			$clave      	=$_POST["clave"];
			
			try {
				$usuario=Gestion_usuarios::loguear($correo,$clave);
				// El metodo count nos sirve para contar el numero de registros que retorno de la consulta
                $usuario_exite = count($usuario[0]);

				if($usuario_exite == 0){
				       $m= base64_encode("Debe de Registrarse Primero");
				       $tm = base64_encode("advertencia");

				       header("Location: ../views/index.php?m=".$m."&tm=".$tm);
				    }else{
				    	if ($usuario[13]=="Activo" || $usuario[13]=="activo" || $usuario[13]=="ACTIVO") {
				    		
				    		// Creamos variables de SESSION las  que necesitemos en sesion

						      $_SESSION["id_usuario"]     = $usuario[0];
						      $_SESSION["nombre"]         = $usuario[4];
						      $_SESSION["apellido"]       = $usuario[5];
						      $_SESSION["id_rol"]         = $usuario[13];
						      
						      
						     header("Location: ../views/dashboard.php");

						    }
						    else
						    {
						    	$m= base64_encode("El usuario se encuentra inactivo, Por favor comunicate  con el ADMIN");
						       $tm = base64_encode("advertencia");

						       header("Location: ../views/index.php?m=".$m."&tm=".$tm);

						    }				    	}

				      
				
			} catch (Exception $e) {
				$m = base64_encode("A ocurrido un error ".$e->getMessage());
				$tm = base64_encode("error");

				header("Location: ../views/index.php?m=".$m."&tm=".$tm);
				  }

				break;
			
			
			
			
		}
?>


