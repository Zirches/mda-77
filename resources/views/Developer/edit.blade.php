 @extends('Layouts.app')

@section ('title', 'Print')


@section ('body')

<style>
#particles-js{
  width: 100%;
  height: 100vh;
  position: fixed;
  z-index: -1;
  background: #000000;
}
.containarBody{
  width: 100%;
  max-width:1400%;
  position: relative;
  z-index: 99;
  padding-top: 2%;
  padding-left: 2%;
  padding-right: center;
}
</style>
  <div id="particles-js"></div>
    <div class="containerBody">
      <div class="containerx">
          <div class="containerForm w3-twothird">
                {{-- <div class=" boderform w3-container w3-card w3-white w3-margin-bottom w3-light-grey w3-border w3-border-black"> --}}
                   @if( session('mensaje'))
                              <div class="alert alert-success alert-dismissible w3-border w3-border-black">
                                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                                 {{ session('mensaje') }}
                             </div>
                   @endif

                    <div class="page-wrapper p-t-50 p-b-50 ">
                      <div class="wrapper wrapper--w960">
                        <div class="card card-6 ">
                           <div class="card-heading">
                              <h2 class="titleAct"><i class="fas fa-user-plus w3-large w3-margin-right"></i>Registro de Actividades de Desarrollo
                            </h2>  
                          </div>
                          <form class="form-group" name="FormLabel" id="FormLabel" method="POST" action="/Developer" >
                            @csrf
                            <div class="card-body">
                                <div class="form-row w3-center">
                                    <div class="name">*Consultor</div>
                                    <div class="value w3-center">
                                      <select class="selectForm" id="nameEmployer" name="NameEmployer" required>
                                        <option value="{{$Activities->nameEmployer}}">{{$Activities->nameEmployer}}</option>
                                        <option value="Baruch Medina" >Baruch Medina</option>
                                        <option value="Jovany Valencia" >Jovany Valencia</option>
                                        <option value="Cesar Mata" >Cesar Mata</option>
                                        <option value="Imelda Sanchez">Imelda Sanchez</option>
                                        <option value="Guillermo Vazquez">Guillermo Vazquez</option>
                                        <option value="Dulce Farias">Dulce Farias</option>
                                        <option value="Abraham Trejo">Abraham Trejo</option>
                                        <option value="Alan Avila">Alan Avila</option>
                                        <option value="Sergio Cruz">Sergio Cruz</option>
                                        <option value="Esteban Mateos">Esteban Mateos</option>
                                        <option value="Ivan Ochoa">Ivan Ochoa</option>
                                        <option value="Angelica Palma">Angelica Palma</option>
                                        <option value="Adriana Bernal">Adriana Bernal</option>
                                        <option value="Isaac Rosales">Isaac Rosales</option>
                                        <option value="Angel Ramirez">Angel Ramirez</option>
                                        <option value="Eduardo Lara">Eduardo Lara</option>
                                        <option value="Javier Mejia">Javier Mejia</option>
                                        <option value="Ricardo Palacios">Ricardo Palacios</option>
                                        <option value="Julio Farias">Julio Farias</option>
                                        <option value="Pedro Cervantes">Pedro Cervantes</option>
                                      </select>
                                    </div>
                                    <br>
                                </div>
                                <div class="form-row">
                                    <div class="name">*Módulo</div>
                                    <div class="value w3-center">
                                        <div class="input-group">
                                            <select class="selectForm" id="nameModul" name="NameModul" required>
                                                <option value="{{$Activities->nameModul}}">{{$Activities->nameModul}}</option>                     
                                                  <option value="GL">GL</option>
                                                  <option value="FA(Fixes Assets)">FA (Fixes Assets)</option>
                                                  <option value="OM">OM</option>
                                                  <option value="AR">AR</option>
                                                  <option value="EXP">EXP</option>
                                                  <option value="AP">AP</option>
                                                  <option value="S.S">S.S</option>
                                                  <option value="PO">PO</option>
                                                  <option value="INV">INV</option>
                                                  <option value="MFG">MFG</option>
                                                  <option value="MANT">MANT</option>
                                                  <option value="COSTOS">COSTOS</option>
                                                  <option value="POS">POS</option>
                                                  <option value="SLA">SLA</option>
                                                  <option value="CRP">CRP</option>
                                            </select>                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">*Cliente.</div>
                                    <div class="value">
                                        <div class="input-group w3-center">
                                             <select class="selectForm" id="client" name="Client" required>
                                                <option value="{{$Activities->client}}">{{$Activities->client}}</option>                                         
                                                <option value="Hunan">Hunan</option>
                                                <option value="Tintorera">Tintorera</option>
                                                <option value="Grupo SON">Grupo SON</option>
                                                <option value="Kasto">Kasto</option>
                                                <option value="Arriva">Arriva</option>
                                                <option value="Cinbersol">Cinbersol</option>
                                                <option value="Fonda Argentina">Fonda Argentina</option>
                                                <option value="ABC">ABC</option>
                                                <option value="El Cielo">El Cielo</option>
                                                <option value="Carolo">Carolo</option>
                                                <option value="Bae Logistika">Bae Logistika</option>
                                                <option value="Lockton">Lockton</option>
                                                <option value="Sports World">Sports World</option>
                                                <option value="Kalifa">Kalifa</option>
                                                <option value="Soft & Soulware">Soft & Soulware</option>
                                                <option value="Karisma">Karisma</option>
                                                <option value="Divañ (Hooters)">Divañ (Hooters)</option>
                                                <option value="Miami Dupuis">Miami Dupuis</option>
                                                <option value="Kasto Parayas">Kasto Parayas</option>
                                                <option value="Mexico Dupuis">Mexico Dupuis</option>
                                              </select>                             
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name" >*Fecha de Inicio de Actividad.</div>
                                    <div class="value">
                                        <div class="input-group w3-center" st>
                                            <input class="input--style-6" id="currentDate" value="{{$Activities->dateOn}}" type="date" name="DateOn" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">*Fecha de Finalización.</div>
                                    <div class="value">
                                        <div class="input-group w3-center">
                                            <input class="input--style-6 w3-center" id="finalDate" value="{{$Activities->dateOf}}" type="date" name="DateOf"  >
                                       </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">*Hora de Registro.</div>
                                    <div class="value">
                                        <div class="input-group w3-center">
                                            <input class="input--style-6 w3-center" id="demo"  onload="startTime()" value="{{$Activities->timeOn}}" type="text" name="TimeOn">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">*Tiempo estimado.</div>
                                    <div class="value w3-center" >
                                          <center>
                                          <div class="input-group date" id="datetimepicker3" >
                                              <input type='text' class="form-control input--style-6" value="{{$Activities->timeOf}}" name="TimeOf" />
                                              <span class="input-group-addon">
                                                  <span class="glyphicon glyphicon-time" ></span>
                                              </span>
                                          </div>
                                          </center>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">*Estatus.</div>
                                    <div class="value">
                                        <div class="input-group w3-center">
                                             <select class="selectForm" name="Status" >
                                                <option value="{{$Activities->status}}">{{$Activities->status}}</option>
                                                <option value="En Proceso">En Proceso</option>
                                                <option value="Pruebas">Pruebas</option>
                                                <option value="Validación de Usuario">Validación de Usuario</option>
                                                <option value="Finalizado">Finalizado</option>                                                
                                                <option value="Cancelado">Cancelado</option>                                                                                                
                                             </select> 
                                       </div>
                                    </div>
                                </div>  
                                <div class="form-row">
                                    <div class="name">*Tiempo total.</div>
                                    <div class="value">
                                        <div class="input-group w3-center">
                                          <input type="text" name="quantitytime" value="{{$Activities->quantitytime}}" class="input--style-6" pattern="[0-9]{1,9}" id="quantitytime">
                                       </div>
                                    </div>
                                </div>  
                                 <div class="form-row">
                                    <div class="name">*Actividad</div>
                                    <div class="value w3-center">
                                        <div class="input-group">
                                          <select class="selectForm" name="nameAct" onchange="otherSelect()">
                                            <option value="{{$Activities->nameAct}}">{{$Activities->nameAct}}</option>                                         
                                              <option value="Diseño" >Diseño</option>
                                              <option value="Cargas Masivas">Cargas Masivas</option>
                                              <option value="Apoyo">Apoyo</option>
                                              <option value="Modelado DM">Modelado DM</option>
                                              <option value="Pruebas">Pruebas</option>
                                              <option value="Configuración">Configuración</option>
                                              <option value="Salida a PROD">Salida a PROD</option>
                                              <option value="MDATicket">MDA Ticket</option>   
                                              <option value="Soporte en Sitio">Soporte en Sitio</option>
                                              <option value="Capacitacion">Capacitacion</option>
                                              <option value="Desarrollo">Desarrollo</option>
                                              <option value="SR">SR</option>
                                              <option value="Juntas">Juntas</option>
                                              <option value="Documentacion">Documentacion</option>
                                              <option value="Vacaciones">Vacaciones</option>
                                              <option value="Incapacidad">Incapacidad</option>
                                              <option value="Administrativo">Administrativo</option>
                                              <option value="SLA">SLA</option>   
                                          </select>                        
                                        </div>
                                    </div>
                              </div>      

                                <div class="form-row" id="NumTicket"  style="visibility: hidden;">
                                    <div class="name">*Numero de Ticket.</div>                                  
                                    <div class="valueTicket">
                                        <div class="input-group">
                                           <input class="input--style-6" id="" value="{{$Activities->numTicket}}"  type="text" name="NumTicket" placeholder="" >
                                        </div>
                                    </div>
                                </div>                           
                        </div>

                        <div class="card-footer w3-center">
                            <button class="btn btn--radius-2 btn--green"  type="submit">Guardar</button>
                        </div>                      

                        </form> 

                        </div>    
                      </div>  
                    </div>
          </div>
      </div>      
     </div>  

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
</script>


@endsection