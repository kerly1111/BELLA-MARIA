<?php include 'stilosFunciones.php' ?>

    <header id="cabeceraMenu" class="navbar navbar-superior navbar-fixed-top" role="banner">
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
           <input name="buscar" id="buscar" maxlength="200" class="form-control inputbox search-query" type="text" size="40" placeholder="Buscar...">
           <button class="btn btn-success" type="button"><i class="icon-search"></i></button>

           <a href="Admin/login.php"><button class="btn btn-default" type="button"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp; Login</button></a>
           
        </div>
        </form>
    </header>


     
  