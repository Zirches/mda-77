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
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>    

<body class="w3-light-grey">
<style>
#particles-js{
  width: 100%;
  height: 100vh;
  position: fixed;
  z-index: -1;
  background: #000000;
}
.containerBody{
  width: 100%;
  max-width:1400%;
  position: relative;
  z-index: 99;
  padding-top: 6%;
  padding-left: 2%;
  padding-right: center;
}
</style>

@yield('pageContainer')


  <div id="particles-js"></div>

          <!-- Page Container -->
          <div class="containerBody">

            <!-- The Grid -->
            <div class="w3-row-padding">
            
              <!-- Left Column -->
              <div class="w3-third">
              
                <div class="w3-white w3-text-grey w3-card-4">
                  <div class="w3-display-container w3-center">
                    <img src="../images/LOGOP.jpg" class="logo " alt="Avatar">
                    <div class="w3-display-bottomleft w3-container w3-text-black">
                    </div>
                  </div>
                  <div class="w3-container">
                    <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Designer</p>
                    <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>London, UK</p>
                    <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>ex@mail.com</p>
                    <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>1224435534</p>
                    <hr>

                    <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
                    <p>Adobe Photoshop</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                      <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
                    </div>
                    <p>Photography</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                      <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
                        <div class="w3-center w3-text-white">80%</div>
                      </div>
                    </div>
                    <p>Illustrator</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                      <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
                    </div>
                    <p>Media</p>
                    <div class="w3-light-grey w3-round-xlarge w3-small">
                      <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
                    </div>
                    <br>

                    <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
                    <p>English</p>
                    <div class="w3-light-grey w3-round-xlarge">
                      <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
                    </div>
                    <p>Spanish</p>
                    <div class="w3-light-grey w3-round-xlarge">
                      <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
                    </div>
                    <p>German</p>
                    <div class="w3-light-grey w3-round-xlarge">
                      <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
                    </div>
                    <br>
                  </div>
                </div><br>

              <!-- End Left Column -->
              </div>

              <!-- Right Column -->
              <div class="w3-twothird">
              
                <div class="w3-container w3-card w3-white w3-margin-bottom">
                  <h2 class="w3-text-grey w3-padding-16 w3-center"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Clientes</h2>
                  <div class="w3-container w3-center">   
                        <div class="w3-quarter image1" >
                          <img src="../images/arriva.jpg" style="width:45%" class=" w3-circle w3-hover-opacity >">
                          <h3>Arriva</h3>       
                        </div>
                        <div class="w3-quarter image1">
                          <img src="../images/califa.jpg" alt="" style="width:45%" class="w3-circle w3-hover-opacity ">
                          <h3>Califa</h3>
                        </div>

                        <div class="w3-quarter image1">
                          <img src="../images/carolo.jpg" alt="" style="width:45%" class="w3-circle w3-hover-opacity >">
                          <h3>Carolo</h3>
                        </div>

                        <div class="w3-quarter image1">
                          <img src="../images/dupuis.jpg" alt="" style="width:45%" class="w3-circle w3-hover-opacity >">
                          <h3>Dupuis</h3>
                        </div>

                        <div class="w3-quarter image1">
                          <img src="../images/fonda.jpg" alt="" style="width:45%" class=" w3-hover-opacity >">
                          <h3>Fonda Argentina</h3>
                        </div>

                        <div class="w3-quarter image1">
                          <img src="../images/hunan.jpg" alt="" style="width:45%" class="w3-circle w3-hover-opacity >">
                          <h3>Grupo Hunan</h3>
                        </div>

                        <div class="w3-quarter image1">
                          <img src="../images/kasto.jpg" alt="" style="width:45%" class="w3-circle w3-hover-opacity >">
                          <h3>Grupo Kasto</h3>
                        </div>

                        <div class="w3-quarter image1">
                          <img src="../images/puntarena.jpg" alt="" style="width:45%" class="w3-circle w3-hover-opacity >">
                          <h3>PuntArena</h3>
                        </div>
                        <div class="w3-quarter image1">
                          <img src="../images/blanco.png" alt="" style="width:45%" class="w3-circle w3-hover-opacity >">
                          <h3>Blanco Colima</h3>
                        </div>
                        <div class="w3-quarter image1">
                          <img src="../images/bodeguita.png" alt="" style="width:45%" class="w3-circle w3-hover-opacity >">
                          <h3>Bodeguita</h3>
                        </div>
                    </div>
                        <br>
                </div>

                <div class="w3-container w3-card w3-white">
                  <h2 class="w3-text-grey w3-padding-16 w3-center"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Próximamente</h2>
                  <div class="w3-container">
                    <h5 class="w3-opacity"><b></b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i></h6>
                    <p></p>
                    <hr>
                  </div>

                </div>

              <!-- End Right Column -->
              </div>
              
            <!-- End Grid -->
            </div>
            
            <!-- End Page Container -->
          </div>

          <footer class="w3-container w3-teal w3-center w3-margin-top">
            <p></p><br>
{{--             <i class="fab fa-facebook-square w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i> --}}
            <p> <a href="https://www.w3schools.com/w3css/default.asp" target="_blank"></a></p>
          </footer>
  

  <script src="../js/particles.js"></script>
  <script src="../js/app.js"></script>



</body>
</html> 
