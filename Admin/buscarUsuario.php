<?php
 	 require("../clases/conexion.php");
     $con = conectar();
	$consultaBusqueda = $_POST['valorBusqueda'];

	//Filtro anti-XSS
	$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
	$caracteres_buenos = array("&lt;", "&gt;", "&quot;", "&#x27;", "&#x2F;", "&#060;", "&#062;", "&#039;", "&#047;");
	$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);
	$mensaje="";


	if (isset($consultaBusqueda)) {


            $sql3 = "SELECT * FROM  usuario where  (id_usuario like '%$consultaBusqueda%' or nom_usuario like '%$consultaBusqueda%' or use_usuario like '%$consultaBusqueda%' or ape_usuario like '%$consultaBusqueda%') AND use_usuario != 'ADMINISTRADOR'";
            $stmt3 = $con->prepare($sql3);
            $result3 = $stmt3->execute(array(':codigoA'=>($consultaBusqueda)));
            $rows3 = $stmt3->fetchAll(\PDO::FETCH_OBJ);
            foreach($rows3 as $row3){

            $id=$row3->id_usuario;
            $usuario= $row3->use_usuario;
            $nombre=$row3->nom_usuario;
            $apellido=$row3->ape_usuario;
            $clave=$row3->cla_usuario;
            $nombreFoto=$row3->nom_fot_usuario;
            $mensaje .= "

              <tr>
                <td><IMG SRC='../imagenes/fotosPerfil/".$nombreFoto."' WIDTH=80 HEIGHT=80 BORDER=3/></td>
                <td>".$id."</td>
                <td>".$usuario."</td>
                <td>".$nombre."</td>
                <td>".$apellido."</td>
                <td>".$clave."</td>
                
                <td>
                  <div>
                    <button type='button' class='btn btn-success btn-xs' onclick=EditarClase('".$id."','".$usuario."','".$nombre."','".$apellido."','".$clave."')>
                    <span class='glyphicon glyphicon-edit' aria-hidden='true'></span> Actualizar
                    </button>   &nbsp;
                    <button type='button' class='btn btn-success btn-xs' onclick=EliminarUsuario('".$id."');><span class='glyphicon glyphicon-remove-sign' aria-hidden='true'></span> Eliminar</button>
                  </div>
                </td>
              </tr>


            ";

              }
	

};//Fin isset $consultaBusqueda

//Devolvemos el mensaje que tomará jQuery
echo $mensaje;

?>