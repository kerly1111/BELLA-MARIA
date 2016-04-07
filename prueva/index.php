<?php 
  #probando fgets 
  $archivo="../Admin/bellaMaria.bm"; 
  $gestor=fopen($archivo,"r"); 
  $i=0; 
  while(!feof($gestor)){ 
      $linea[$i]=rtrim(fgets($gestor)); 
      #comprobar que linea es y mandar dato a la bd 
      echo $linea[$i]; 
      $i++; 
      
  } 
  fclose($gestor); 
?>