<?php
   require("clases/conexion.php");
     $con = conectar();
  $consultaBusqueda = $_POST['valorBusqueda'];

  //Filtro anti-XSS
  $caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
  $caracteres_buenos = array("&lt;", "&gt;", "&quot;", "&#x27;", "&#x2F;", "&#060;", "&#062;", "&#039;", "&#047;");
  $consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);
  $mensaje="";


  if (isset($consultaBusqueda)) {


            $con = conectar();
            $sql = "SELECT * FROM modulo WHERE (tip_modulo like '%$consultaBusqueda%' or tit_modulo like '%$consultaBusqueda%' or des_modulo like '%$consultaBusqueda%') and est_modulo='1' ORDER BY id_modulo DESC";
            $stmt = $con->prepare($sql);
      
            $result = $stmt->execute();
            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
            $contador=0;
            foreach($rows as $row){
              $id=($row->id_modulo);
              $titulo=($row->tit_modulo);
              $fecha=($row->fec_modulo);
              $descripcion=($row->des_modulo);
            $contador=$contador+1;
            $mensaje .= "
            <a class='stily-titulo' href='modulo.php?saludo=".$id."'>".$contador.". ".$titulo."</a>
            <div style='padding-left: 2%;''>
            <p >".$fecha."</p>
            <p style='text-align: justify;'>
               ".substr(($descripcion),0,90)."..... </p>
              </div>
            ";

              }
              if($contador==0){
          echo "No se encontraron resultados!!";
        } 
  

};//Fin isset $consultaBusqueda

//Devolvemos el mensaje que tomará jQuery
echo $mensaje;

?>