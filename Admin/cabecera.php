<?php
session_start(); 
if(isset($_SESSION["loginname"])){
?>
<?php include 'stilosFunciones.php' ?>
<nav class="navbar navbar-superior navbar-fixed-top " role="navigation">
  
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <div class="form-group margen-tope-buscar margenLogo"><img width="200" src="../imagenes/LOGO2.png"></div>
  </div>


 <div class="collapse navbar-collapse navbar-ex1-collapse margenBuscar">
 <center><h2 style="color: #fff; float: left; padding-left: 10%; padding-top: 1%">Bienvenido <?php print($_SESSION["loginname"]) ?> </h2></center>
    <div class="navbar-form navbar-right margen-tope-buscar" >
      <div class="form-inline margenBuscar">
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
        <form class="form-inline navbar-right margenBuscar" action='deslogeo.php' role="form">
        <div class="form-group">
           <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp; Salir</button>
        </div>
        </form>

        
      </div>
    </div>

  <br>
  <br>
  <br>
    <ul class="nav navbar-nav navbar-right distanciaFilas">
        <li class="active"><a href="gad.php">GAD</a></li>
        <li class="active"><a href="mensajesContactanos.php">CONTACTANOS</a></li>
    </ul>
 
   
  </div>
</nav>
<div class="espaciado"></div>
        
         <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2 ">
            <div class="sidebar-nav " style="background-color: #006600;">
                <div class="nav-canvas ">
                    <ul class="nav nav-pills nav-stacked main-menu menuAdminletras" >
                        <li class="nav-header"><h3>Menu</h3></li>
                         <?php 
                            if($_SESSION["loginname"]!="ADMINISTRADOR"){
                        ?>
                        <li><a class="ajax-link" href="perfil.php"><i class="glyphicon glyphicon-book"></i><span> Perfil</span></a>
                        </li>
                        <?php
                            }
                        ?>
                         <?php 
                            if($_SESSION["loginname"]=="ADMINISTRADOR"){
                        ?>
                        <li><a class="ajax-link" href="administrador.php"><i class="glyphicon glyphicon-book"></i><span> Administrador</span></a>
                        </li>
                        <?php
                            }
                        ?>
                        <?php 
                            if($_SESSION["loginname"]=="ADMINISTRADOR"){
                        ?>
                                <li><a class="ajax-link" href="usuario.php"><i class="glyphicon glyphicon-user"></i><span> Usuarios</span></a>
                                </li>
                        <?php
                            }
                        ?>
                        <li><a class="ajax-link" href="modulo.php"><i class="glyphicon glyphicon-tasks"></i><span> Modulos</span></a>
                        </li>
                        <br>
                    </ul>
                </div>
            </div>
        </div>

<?php
}else{
    echo "<h3>Redireccionando....</h3>";
    echo '<meta http-equiv="refresh" content="1; url=../index.php">';
}
?>
