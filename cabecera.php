<?php include 'stilosFunciones.php' ?>

<nav class="navbar navbar-superior navbar-fixed-top " role="navigation">
  
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <div class="form-group margen-tope-buscar margenLogo"><img width="200" src="imagenes/LOGO2.png"></div>
  </div>


 <div class="collapse navbar-collapse navbar-ex1-collapse margenBuscar">
    <form class="navbar-form navbar-right margen-tope-buscar" role="search">
      <div class="form-group margenBuscar">
        <script languaje="JavaScript"> 
        var mydate=new Date() 
        var year=mydate.getYear() 
        if (year < 1000) 
        year+=1900 
        var day=mydate.getDay() 
        var month=mydate.getMonth() 
        var daym=mydate.getDate() 
        if (daym<10) 
        daym="0"+daym 
        var dayarray=new Array("Domingo,","Lunes,","Martes,","Miércoles,","Jueves,","Viernes,","Sábado,")
        var montharray=new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre")
        document.write("<font color='black' face='Georgia' style='font-size:11pt'>"+dayarray[day]+" "+daym+" del "+montharray[month]+" de "+year+"</font>") 
        </script>
        &nbsp;
        &nbsp;
        <input type="text" class="form-control " placeholder="Buscar">
        <button class="btn btn-success" type="button"><i class="icon-search"></i></button>
        <a href="login.php"><button class="btn btn-default" type="button"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp; Login</button></a>

        
      </div>
    </form>

  
    <ul class="nav navbar-nav navbar-right distanciaFilas">
        <li class="active"><a href="index.php">INICIO</a></li>
        <li class="active"><a href="gad.php">GAD</a></li>
        <li class="active"><a href="">BELLA MARIA</a></li>
        <li class="active"><a href="">NOTICIAS</a></li>
        <li class="active"><a href="">PRODUCCIÓN</a></li>
        <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">TURISMO <i class="glyphicon glyphicon-chevron-down"></i></a> 
            <ul class="dropdown-menu">
                <li class="active"><a href="turismo.php">Galeria</a></li>
                <li class="active"><a href="atractivosTuristicos.php">Atractivos Turísticos</a></li>
                <li class="active"><a href="comidasTipicas.php">Comidas Típicas</a></li>
            </ul>
        </li>
        <li class="active"><a href="eventos.php">EVENTOS</a></li>
        <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">TRANSPARENCIA <i class="glyphicon glyphicon-chevron-down"></i></a> 
            <ul class="dropdown-menu">
                <li class="active"><a href="lotaip2012.php">LOTAIP 2012</a></li>
                <li class="active"><a href="lotaip2013.php">LOTAIP 2013</a></li>
                <li class="active"><a href="lotaip2014.php">LOTAIP 2014</a></li>
                <li class="active"><a href="lotaip2015.php">LOTAIP 2015 </a></li>
            </ul>
        </li>
        <li class="active"><a href="ubicacion.php">UBICACIÓN</a></li>
        <li class="active"><a href="contactos.php">CONTACTANOS</a></li>
    </ul>
 
   
  </div>
</nav>
