<!DOCTYPE html>
<html>
<title>MDA Home @yield('title')</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable-no,maximum-scale=1.0, minium-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>


<body class="w3-theme-l5" >
@yield('navbar')

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="{{ route('WelcomeMDA') }}" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Logo</a>
  <a href="{{ route('ShowAct') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class=" fa fa-table fa-1x"><br></i> Actividades</a>
  <a href="{{ route('InsertAct') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fas fa-user-plus"></i> Añadir Actividad</a>
{{--   <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="#" class="w3-bar-item w3-button">One new friend request</a>
      <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
      <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
    </div> --}}
  {{-- </div> --}}
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account"><i class="far fa-user-circle fa-lg"></i>
  </a>
 </div>
</div>
 
@yield('body')

@yield('script')


<script>
function TimeStamp(){
  var fecha = new Date(); //Fecha actual
  var mes = fecha.getMonth()+1; //obteniendo mes
  var dia = fecha.getDate(); //obteniendo dia
  var ano = fecha.getFullYear(); //obteniendo año
  var h = fecha.getHours(); //obteniendo mes
  var m = fecha.getMinutes(); //obteniendo dia
  var s = fecha.getSeconds(); //obteniendo año
  if(dia<10)
    dia='0'+dia; //agrega cero si el menor de 10
  if(mes<10)
    mes='0'+mes //agrega cero si el menor de 10
  document.getElementById('fechaActual').value=ano+"-"+mes+"-"+dia;
  document.getElementById('finalDate').value=ano+"-"+mes+"-"+dia;

  var ampm = "am";
  if( h > 11 ) {
      h -= 12;
      ampm = "pm";
  }
  if (h >12 ) {
    clearTimeout(h);
  }
  document.getElementById('demo').value=h+":"+m+":"+s+ " "+ampm;

}

</script>


    <script type="text/javascript">
        <!--
            function otherSelect() {
                var other = document.getElementById("NumTicket");
                if (document.forms[0].nameAct.options[document.forms[0].nameAct.selectedIndex].value == "MDATicket") {
                    other.style.visibility = "visible";
                }
                else {
                    other.style.visibility = "hidden";
                }
            }
        //-->
    </script>


</body>
</html> 
