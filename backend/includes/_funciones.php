<?php 
require_once("_db.php");
switch ($_POST["accion"]) {
	case 'login':
	login();
	break;
	case 'consultar_usuarios':
	consultar_usuarios();
	break;
	case 'insertar_usuarios':
	insertar_usuarios();
	break;
	case 'consultar_testimonials':
	consultar_testimonials();
	break;
	case 'insertar_testimonials':
	insertar_testimonials();
	break;
	case 'consultar_download':
	consultar_download();
	break;
	case 'insertar_download':
	insertar_download();
	break;
	default:
	break;
}
function consultar_usuarios(){
	global $mysqli;
	$consulta = "SELECT * FROM usuarios";
	$resultado = mysqli_query($mysqli, $consulta);
	$arreglo = [];
	while($fila = mysqli_fetch_array($resultado)){
		array_push($arreglo, $fila);
	}
	echo json_encode($arreglo);
}
function insertar_usuarios(){
	global $mysqli;
	$nombre_usr = $_POST["nombre"];
	$correo_usr = $_POST["correo"];	
	$password = $_POST["password"];	
	$telefono_usr = $_POST["telefono"];	
	$consultain = "INSERT INTO usuarios VALUES('','$nombre_usr','$correo_usr','$password', '$telefono_usr', 1)";
	$resultadoin = mysqli_query($mysqli, $consultain);
	$arregloin = [];
	while($filain = mysqli_fetch_array($resultadoin)){
		array_push($arregloin, $filain);
	}
	echo json_encode($arregloin);
}
/////TESTIMONIALS
function consultar_testimonials(){
	global $mysqli;
	$consulta = "SELECT * FROM testimonial";
	$resultado = mysqli_query($mysqli, $consulta);
	$arreglo = [];
	while($fila = mysqli_fetch_array($resultado)){
		array_push($arreglo, $fila);
	}
	echo json_encode($arreglo);
}
function insertar_testimonials(){
	global $mysqli;
	$img_tes = $_POST["imagen"];
	$cita_tes = $_POST["cita"];	
	$persona_tes = $_POST["persona"];	
	$consultain = "INSERT INTO testimonial VALUES('','$img_tes','$cita_tes','$persona_tes')";
	$resultadoin = mysqli_query($mysqli, $consultain);
	$arregloin = [];
	while($filain = mysqli_fetch_array($resultadoin)){
		array_push($arregloin, $filain);
	}
	echo json_encode($arregloin);
}

/////DOWNLOADS
function consultar_download(){
	global $mysqli;
	$consulta = "SELECT * FROM download";
	$resultado = mysqli_query($mysqli, $consulta);
	$arreglo = [];
	while($fila = mysqli_fetch_array($resultado)){
		array_push($arreglo, $fila);
	}
	echo json_encode($arreglo);
}
function insertar_download(){
	global $mysqli;
	$titulo_do = $_POST["titulo"];
	$subtitulo_do = $_POST["subtitulo"];	
	$boton_do = $_POST["boton"];	
	$consultain = "INSERT INTO download VALUES('','$titulo_do','$subtitulo_do','$boton_do')";
	$resultadoin = mysqli_query($mysqli, $consultain);
	$arregloin = [];
	while($filain = mysqli_fetch_array($resultadoin)){
		array_push($arregloin, $filain);
	}
	echo json_encode($arregloin);
}


	function login(){
		global $mysqli;
		$correo = $_POST["correo"];
		$pass = $_POST["password"];	
		$consulta = "SELECT * FROM usuarios WHERE correo_usr = '$correo'";
		$resultado = $mysqli->query($consulta);
		$fila = $resultado->fetch_assoc();
		
		if ($fila == 0) 
			{
				echo "El usuario no existe [ERROR-02]";

			}
		else if ($fila["password"] != $pass) 
			{
				$consulta = "SELECT * FROM usuarios WHERE correo_usr = '$correo' AND password = '$pass'";
				$resultado = $mysqli->query($consulta);
				$fila = $resultado->fetch_assoc();
				echo "El Password es Incorrecto [ERROR-00]";

				
			}
				else if($correo == $fila["correo_usr"] && $pass == $fila["password"])
				{
					echo "El Usuario y Password son Correctos [ACESSO-01]"	;
					
				}
			}

?>