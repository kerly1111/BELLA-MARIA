<?php
 
  $conexion = mysqli_connect("127.0.0.1","root","","bella-maria");
  mysqli_set_charset($conexion, "utf-8");
  $consultaBusqueda = $_POST['valorBusqueda'];

  $caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
  $caracteres_buenos = array("&lt;", "&gt;", "&quot;", "&#x27;", "&#x2F;", "&#060;", "&#062;", "&#039;", "&#047;");
  $consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);
  $mensaje="";

  if (isset($consultaBusqueda)) {
  $consulta = mysqli_query($conexion, "select * from  modulo where  (tip_modulo like '%$consultaBusqueda%' or tit_modulo like '%$consultaBusqueda%' or des_modulo like '%$consultaBusqueda%') and est_modulo='1'");
  $filas = mysqli_num_rows($consulta);

  //Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
  if ($filas === 0) {
    $mensaje = "<p>No se encontraron resultados</p>";
  } else {


    while($resultados = mysqli_fetch_array($consulta)) {
      $id=$resultados['id_modulo'];
      $tipo= $resultados['tip_modulo'];
      $titulo=$resultados['tit_modulo'];
      $descripcion=$resultados['des_modulo'];
      //Output
      $mensaje .= "
              <tr>
                <td  class='siseColTITMOD2'>".$tipo."</td>
                <td class='siseColTITMOD2'>".$titulo."</td>
                <td class='siseColDESMOD'>".$descripcion."</td>
                
                <td>
                  <div>
                    <button type='button' class='btn btn-success btn-xs' onclick=Editar('".$id."','".$tipo."','".$titulo."','".$descripcion."')>
                    <span class='glyphicon glyphicon-edit' aria-hidden='true'></span> Actualizar
                    </button>  
                    <button type='button' class='btn btn-success btn-xs' onclick=VerImagenes('".$id."');> <span class='glyphicon glyphicon-picture' aria-hidden='true'></span> Galería</button>

                    <button type='button' class='btn btn-success btn-xs' onclick=EliminarModulo('".$id."');> <span class='glyphicon glyphicon-remove-sign' aria-hidden='true'></span> Eliminar</button>
                  </div>
                </td>
              </tr>
        ";
        

    };//Fin while $resultados

  }; //Fin else $filas

};//Fin isset $consultaBusqueda

//Devolvemos el mensaje que tomará jQuery
echo $mensaje;
?>