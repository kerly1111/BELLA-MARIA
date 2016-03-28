<?php
 if(isset($_SESSION["loginname"])){
 	 require("../clases/conexion.php");
     $con = conectar();
	$consultaBusqueda = $_POST['valorBusqueda'];

	//Filtro anti-XSS
	$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
	$caracteres_buenos = array("&lt;", "&gt;", "&quot;", "&#x27;", "&#x2F;", "&#060;", "&#062;", "&#039;", "&#047;");
	$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);
	$mensaje="";


	if (isset($consultaBusqueda)) {


            $sql3 = "SELECT * FROM  modulo where  (tip_modulo like '%$consultaBusqueda%' or tit_modulo like '%$consultaBusqueda%' or des_modulo like '%$consultaBusqueda%') and est_modulo='1'";
            $stmt3 = $con->prepare($sql3);
            $result3 = $stmt3->execute(array(':codigoA'=>($consultaBusqueda)));
            $rows3 = $stmt3->fetchAll(\PDO::FETCH_OBJ);
            foreach($rows3 as $row3){

            $id=$row3->id_modulo;
            $tipo= $row3->tip_modulo;
            $titulo=$row3->tit_modulo;
            $descripcion=$row3->des_modulo;
            $mensaje .= "

              <tr>
                <td>".$tipo."</td>
                <td class='siseColTITMOD'>".$titulo."</td>
                <td class='siseColDESMOD'>".$descripcion."</td>
                
                <td>
                  <div>
                    <button type='button' class='btn btn-success btn-xs' onclick=EditarClase('".$id."','".$tipo."','".$titulo."','".$descripcion."')>
                    <span class='glyphicon glyphicon-edit' aria-hidden='true'></span> Actualizar
                    </button>   &nbsp;
                    <button type='button' class='btn btn-success btn-xs' onclick='EliminarModulo('".$id."');'> <span class='glyphicon glyphicon-remove-sign' aria-hidden='true'></span> Eliminar</button>
                  </div>
                </td>
              </tr>


            ";

              }
	

};//Fin isset $consultaBusqueda

//Devolvemos el mensaje que tomará jQuery
echo $mensaje;
}else{
echo "<h3>Redireccionando....</h3>";
echo '<meta http-equiv="refresh" content="1; url=../index.php">';
}
?>