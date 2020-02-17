 @extends('Layouts.app')

@section ('title', 'Print')



 <div class="containerx">

 	<style type="text/css" media="screen">


 		
 	</style>

<div class="containerForm w3-twothird">
      <div class=" boderform w3-container w3-card w3-white w3-margin-bottom w3-light-grey w3-border w3-border-black">


                                <div class="form-row">
                                    <div class="name">*Actividad</div>
                                    <div class="value w3-center">
                                        <div class="input-group">
                                             <select class="selectForm" id="nameAct" name="nameAct" style="color: black" onchange="ver('NumTicket')"   required>
                                                
                                                
                                              </select>                           
                                        </div>
                                    </div>
                                    <div id="" style="display: none;">
                                        <div class="name">Numero de Ticket.</div>
                                            <div class="value w3-center">
                                                <div class="input-group w3-center" >
                                                   <input class="input--style-6" id=""   type="NumTicket" name="DateOn" placeholder="" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

<form action="" method="">
    <select class="selectForm" name="nameAct" onchange="otherSelect()">
    	<option value="">Seleccionar</option>                                         
        <option value="Diseño" >Diseño</option>
        <option value="Cargas Masivas">Cargas Masivas</option>
        <option value="Apoyo">Apoyo</option>
        <option value="Modelado DM">Modelado DM</option>
        <option value="Pruebas">Pruebas</option>
        <option value="Configuración">Configuración</option>
        <option value="Salida a PROD">Salida a PROD</option>
        <option value="MDATicket">MDA Ticket</option>   
        <option value=""></option>
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

<div id="NumTicket" class="w3-center" style="visibility: hidden;">
	<div class="nameTicket">Numero de Ticket.</div>
        <div class="value w3-center">
            <div class="input-group w3-center" >
               <input class="input--style-6" id=""   type="text" name="NumTicket" placeholder="" >
            </div>
        </div>
    </div>
</div>
</form>

      </div>
</div>




<script type="text/javascript">

var visto = document.getElementById("MDATicket");
function ver(num) {

obj = document.getElementById(num);

if (true) {}
obj.style.display = (obj==visto) ? 'none' : 'block';
if (visto != null)
visto.style.display = 'none';
visto = (obj==visto) ? null : obj;
} 

</script>





@section ('body')
