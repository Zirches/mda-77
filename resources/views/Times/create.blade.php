@extends('Layouts.app')

@section ('title', 'Print')


@section ('body')

    <div class=" containertable w3-twothird">
      <div class=" bodertable w3-container w3-card w3-white w3-margin-bottom w3-light-grey w3-border w3-border-black">
        <h2 class="w3-text-grey w3-center w3-padding-16"><i class="fas fa-user-plus fa-fw w3-margin-right w3-xxlarge w3-text-teal">          
        </i>Registro de Actividades MDA</h2>
        <hr class="Separete">
        <br>                            
               <table class="tableEmployes table w3-border w3-border-black ">
                <thead  class="w3-border w3-border-black">
                  <tr>
                    <th scope="col" class="w3-center" style="display: none;">ID</th>
                    <th scope="col" class="w3-center">Nombre de quien Hace la Act</th>
                    <th scope="col" class="w3-center">Nombre del Módulo</th>
                    <th scope="col" class="w3-center">Nombre de la actividad</th>
                    <th scope="col" class="w3-center">Cliente</th>
                    <th scope="col" class="w3-center">Hora de Inicio</th>
                    <th scope="col" class="w3-center">Tiempo Estimado de Act</th>
                    <th scope="col" class="w3-center">Fecha</th>
                    <th scope="col" class="w3-center">Numero de Act</th>
                    <th scope="col" class="w3-center">Registrar</th>
                    <th scope="col" class="w3-center">Eliminar</th>
                    <th scope="col" class="w3-center">Modificar</th>
                  </tr>
                </thead>
                <tbody class="w3-border w3-border-black ">
                  <tr>
                    <th scope="row" class="w3-center" style="display: none;"> <input type="text" name="Is" class="Id"> </th>
                    <td class="w3-center"><br><input type="text" name="nameEmployer"><br></td>
                    <td class="w3-center">
	                   	<br>
	                   	<select style="color: black;" id="nameModul">
	                    	  <option value="volvo">Seleccionar</option>	                    	  
	                    	  <option value="volvo">Volvo</option>
							  <option value="saab">Saab</option>
							  <option value="mercedes">Mercedes</option>
							  <option value="audi">Audi</option>
	               		</select>
                	</td>  
                    <td class="w3-center">
                        <br>
                        <select style="color: black;" id="nameAct">
                              <option value="volvo">Seleccionar</option>                              
                              <option value="volvo">Volvo</option>
                              <option value="saab">Saab</option>
                              <option value="mercedes">Mercedes</option>
                              <option value="audi">Audi</option>
                        </select>
                    </td>  
                    <td class="w3-center">
                        <br>
                        <select style="color: black;" id="client">
                              <option value="volvo">Seleccionar</option>                              
                              <option value="volvo">Volvo</option>
                              <option value="saab">Saab</option>
                              <option value="mercedes">Mercedes</option>
                              <option value="audi">Audi</option>
                        </select>
                    </td>  
                    <td class="w3-center"><br><input type="time" style="color: black;" name="timeOn" size="10px;"></td>  
                    <td class="w3-center"><br><input type="time" style="color: black;" name="timeOf" size="7px;"></td>  
                    <td class="w3-center"><br><input type="date" style="color: black;"   name="date" size="7px;"></td>  
                    <td class="w3-center"><br><input type="text" name="numAct" size="7px;"></td>  
                    <td class="w3-center">
                        <br><button class="btn btn-xs glyphicon glyphicon-floppy-saved fa-lg" style="color: black"></button><br>                 	
                    </td>  
                    <td class="w3-center">                           
                        <br><button class="btn btn-xs w3-center fa fa-trash fa-lg" class="w3-button" style="color: black"> </button><br>
                    </td>
                    <td class="w3-center">
                      <br><a  href="" style="color: black"><i class="fas fa-pencil-alt w3-margin-right w3-center fa-lg"><br>                      
                    </td>
                  </tr>
                </tbody>
              </table>
              <br>
        </div>      
    </div>             



@endsection
