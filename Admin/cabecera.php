<?php include 'stilosFunciones.php' ?>

    <header id="cabeceraMenu" class="navbar navbar-superior navbar-fixed-top" role="banner">
    <form class="form-inline col-md-2" role="form">
        <div class="form-group margen-tope-buscar"><img width="200" src="../imagenes/LOGO2.png"></div>
        </form>
    <form class="form-inline col-md-3 " role="form">
        
        <div class="collapse navbar-collapse margen-tope-nav margenFecha" >
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

        <div id="TT_vhYkEk1Ek1Ej2cGA7fzZrDDZLWlA1f2E1Ykzjy3rZlAomIGIG">
        </div>
        <script type="text/javascript" src="http://www.tutiempo.net/widget/eltiempo_vhYkEk1Ek1Ej2cGA7fzZrDDZLWlA1f2E1Ykzjy3rZlAomIGIG">
        </script><!-- END: Custom advanced (www.pluginaria.com) -->
        </div>   
     </form>
        <form class="form-inline navbar-right margenBuscar" role="form">
        <div class="form-group margen-tope-buscar">
           <input name="buscar" id="buscar" maxlength="200" class="form-control inputbox search-query" type="text"  placeholder="Buscar...">
           <button class="btn btn-success" type="button"><i class="icon-search"></i></button>

           <a href="login.php"><button class="btn btn-default" type="button"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp; Salir</button></a>
           
        </div>
        </form>

        <div class="collapse navbar-collapse margenBuscar">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="">INICIO</a></li>
                    <li ><a href="">GAD</a></li>
                    <li ><a href="">BELLA MARIA</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">PRODUCCIÓN <i class="glyphicon glyphicon-chevron-down"></i></a> 

                    <ul class="dropdown-menu">
                    <li class="active"><a href="index.php">Inicio</a></li>
                    <li class="active"><a href="index.php">Inicio</a></li>
                    <li class="active"><a href="index.php">Inicio</a></li>
                    </ul>

                    </li>
                    <li ><a href="turismo.php">TURISMO</a></li>
                    <li ><a href="portfolio.html">EVENTOS</a></li>
                    <li ><a href="portfolio.html">TRANSPARENCIA</a></li>
                    <li ><a href="ubicacion.php">UBICACIÓN</a></li>
                    <li ><a href="contactos.php">CONTACTANOS</a></li>
                </ul>
            </div>
    </header>

        <section >
         <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Menu</li>
                        <li><a class="ajax-link" href="reserva.php"><i class="glyphicon glyphicon-registration-mark"></i><span> Reservas</span></a>
                        </li>
                        <li><a class="ajax-link" href="cliente.php"><i class="glyphicon glyphicon-user"></i><span> Clientes</span></a>
                        </li>
                        <li><a class="ajax-link" href="vuelo.php"><i class="glyphicon glyphicon-send"></i><span> Vuelo</span></a>
                        </li>
                        <li><a class="ajax-link" href="avion.php"><i class="glyphicon glyphicon-plane"></i><span> Avion</span></a>
                        </li>
                        <li><a class="ajax-link" href="ruta.php"><i class="glyphicon glyphicon-transfer"></i><span> Ruta</span></a>
                        </li>
                        </li>
                        </li>
                        <li><a class="ajax-link" href="aeropuerto.php"><i class="glyphicon glyphicon-road"></i><span> Aeropuerto</span></a>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </section><!--/#title--> 

