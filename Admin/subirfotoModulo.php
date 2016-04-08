<?php session_start(); 

$id= $_GET['cod'];
if(isset($_GET['id'])){
$_SESSION['codModulo']=$_GET['id'];
}

switch ($id) {
	case 'contolSize':
		$imag=$_FILES['images']['size'];
		if($imag>2097152 || $imag==0){
			echo "0";
		}else{
			echo "1";
		}
		break;
	case 'contolSize1':
		$imag=$_FILES['imagenes1']['size'];
		if($imag>2097152 || $imag==0){
			echo "0";
		}else{
			echo "1";
		}
		break;
	case 'contolSize2':
		$imag=$_FILES['imagenes2']['size'];
		if($imag>2097152 || $imag==0){
			echo "0";
		}else{
			echo "1";
		}
		break;
	case 'contolSize3':
		$imag=$_FILES['imagenes3']['size'];
		if($imag>2097152 || $imag==0){
			echo "0";
		}else{
			echo "1";
		}
		break;
	case 'contolSize4':
		$imag=$_FILES['imagenes4']['size'];
		if($imag>2097152 || $imag==0){
			echo "0";
		}else{
			echo "1";
		}
		break;
	case 'contolSize5':
		$imag=$_FILES['imagenes5']['size'];
		if($imag>2097152 || $imag==0){
			echo "0";
		}else{
			echo "1";
		}
		break;
	case '0':
		$id=$_SESSION['codModulo'];
		$id=$id.".png";
#		unlink("../imagenes/modulos/".$id);
        move_uploaded_file($_FILES['images']['tmp_name'], '../imagenes/modulos/' . $id);
		break;
	case '1':
		$id=$_SESSION['codModulo'];
		$id=$id."_1.png";
#		unlink("../imagenes/modulos/".$id);
        move_uploaded_file($_FILES['imagenes1']['tmp_name'], '../imagenes/modulos/' . $id);
		break;
	case '2':
		$id=$_SESSION['codModulo'];
		$id=$id."_2.png";
#		unlink("../imagenes/modulos/".$id);
        move_uploaded_file($_FILES['imagenes2']['tmp_name'], '../imagenes/modulos/' . $id);
		break;
	case '3':
		$id=$_SESSION['codModulo'];
		$id=$id."_3.png";
#		unlink("../imagenes/modulos/".$id);
        move_uploaded_file($_FILES['imagenes3']['tmp_name'], '../imagenes/modulos/' . $id);
		break;
	case '4':
		$id=$_SESSION['codModulo'];
		$id=$id."_4.png";
#		unlink("../imagenes/modulos/".$id);
        move_uploaded_file($_FILES['imagenes4']['tmp_name'], '../imagenes/modulos/' . $id);
		break;
	case '5':
		$id=$_SESSION['codModulo'];
		$id=$id."_5.png";
#		unlink("../imagenes/modulos/".$id);
        move_uploaded_file($_FILES['imagenes5']['tmp_name'], '../imagenes/modulos/' . $id);
		break;
}

?>
