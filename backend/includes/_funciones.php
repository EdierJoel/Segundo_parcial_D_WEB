<?php  
	require_once("_db.php");
	
switch ($_POST["accion"]) {
		
case 'login':
			
login();
			
break;
		
		
default:

# code...

break;
	
}
	
function login(){
		
     // echo "Tu usuario es: ".$_POST["usuario"].", Tu contraseña es: ".$_POST["password"];

    // Conectar a Base de Datos.

	// 	Si usuario y contraseña estan vacios imprimir = 3
 
	// Consultar a Base de Datos que exista el usuario.
		
    // Si el usuario existe, consultar que el password sea correcto. 

	// Si el password es correcto imprimir = 1 

	// Si el password no es correcto, imprimir codigo de erorres = 0.

    // Si el usuario no existe imprimir = 2
	
}


?>
