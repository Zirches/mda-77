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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-green.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="../js/particles.js"></script>
<script src="../js/app.js"></script>


<link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="./css/prettify-1.0.css" rel="stylesheet">
<link href="./css/base.css" rel="stylesheet">
<link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
<script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>


<body class="w3-theme-l5" onload="startTime()" >
@yield('navbar')

<!-- Navbar -->
<div class="w3-top" style="position:fixed; z-index: 100;">
 <div class="w3-bar w3-theme-d3 w3-left-align w3-large w3-border w3-border-white">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="{{ route('WelcomeMDA') }}" class="w3-bar-item w3-button w3-padding-large w3-theme-d4 "><i class="fa fa-home w3-margin-right" ></i>Logo</a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large w3-theme-d3 w3-border w3-border-white"  title="Notifications">Áreas <i class="fas fa-angle-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-theme-d3 w3-bar-block" style="width:auto;">
        <ul class="navbar-nav mr-auto w3-theme-d3 " >
                <!-- Level one dropdown -->
                <li class="nav-item dropdown w3-theme-d3 ">
                  <a id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link w3-theme-d3 dropdown-toggle w3-center" style="">Elije el Área.</a>
                  <ul aria-labelledby="dropdownMenu1" class="dropdown-menu w3-theme-d3  border-0 shadow">
                    <li class="dropdown-divider w3-theme-d3 "></li>
                        <li class="dropdown-submenu">
                          <a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" class="dropdown-item w3-theme-d3 dropdown-toggle">MDA</a>
                          <ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
                            <li>
                              <a tabindex="-1" href="{{ route('ShowAct') }}" class="dropdown-item w3-theme-d3 ">Tabla de MDA</a>
                              <a tabindex="-1" href="{{ route('InsertAct') }}" class="dropdown-item w3-theme-d3">Registro de Actividades de MDA</a>                              
                            </li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu">
                          <a id="dropdownMenu2" href="" role="button" data-toggle="dropdown" class="dropdown-item dropdown-toggle w3-theme-d3">Desarrollo</a>
                          <ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
                            <li>
                              <a tabindex="-1" href="{{ route('ShowActD') }}" class="dropdown-item w3-theme-d3">Tabla de Desarrollo</a>
                              <a tabindex="-1" href="{{ route('InsertActD') }}" class="dropdown-item w3-theme-d3">Registro de Actividades de Desarrollo</a>                              
                            </li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu">
                          <a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" class="dropdown-item w3-theme-d3 dropdown-toggle">Proyecto</a>
                          <ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
                            <li>
                              <a tabindex="-1" href="{{ route('ShowActP') }}" class="dropdown-item w3-theme-d3">Tabla de Proyecto</a>
                              <a tabindex="-1" href="{{ route('InsertActP') }}" class="dropdown-item w3-theme-d3">Registro de Actividades de Proyecto</a>                              
                            </li>
                          </ul>
                        </li>
                    </il>
                  </ul>
                </li>  
          </ul>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account"><i class="far fa-user-circle fa-lg"></i>
  </a>
 </div>
</div>
 
@yield('body')

<script>
  $(function() {
  // ------------------------------------------------------- //
  // Multi Level dropdowns
  // ------------------------------------------------------ //
  $("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
    event.preventDefault();
    event.stopPropagation();

    $(this).siblings().toggleClass("show");


    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
      $('.dropdown-submenu .show').removeClass("show");
    });

  });
});
</script>

<style>
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}
</style>




</body>
</html> 
