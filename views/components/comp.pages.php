<?php 

if(isset($_GET["p"])){
	$page = base64_decode($_GET["p"]);
}else{
	$page = "";
}

switch ($page) {
	case 'gestion_usuarios':
		require_once("Gestion_usuarios.php");
	break;
	
	default:
		
		break;
		
	case 'gestion_empresa':
		require_once("Gestion_empresa.php");
	break;
	
	default:
		
		break;
	case 'actualizar_usuario':
		
		require_once("ActualizarUsuario.php");
	break;
	
	default:
		
		break;
	case 'nuevo_usuario':
		
		require_once("nuevo_usuario.php");
	break;
	
	case 'gestion_producto':
		
		require_once("Gestion_productos.php");
	break;
	
	case 'gestion_proveedor':
		
		require_once("Gestion_proveedores.php");
	break;

	case 'nuevo_producto':
		
		require_once("nuevo_producto.php");
	break;

	case 'nuevo_proveedor':
		
		require_once("nuevo_proveedor.php");
	break;
	
	default:

}
?>