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
  padding-top: 2%;
  padding-left: 2%;
  padding-right: center;
}
</style>
  <div id="particles-js"></div>
    <div class="containerBody">

    
    <div class="containertable ">
      <div class="bodertable w3-container w3-card w3-white w3-margin-bottom w3-light-grey w3-border w3-border-black">
        <h2 class="w3-text-grey w3-center w3-padding-16"><i class="fas fa-user-plus fa-fw w3-margin-right w3-xxlarge w3-text-teal">          
        </i>Registro de Actividades de Proyectos</h2>
         @if( session('mensaje2'))
                    <div class="alert alert-danger alert-dismissible w3-border w3-border-black">
                       <button type="button" class="close" data-dismiss="alert">&times;</button>
                       {{ session('mensaje2') }}
                   </div>
         @endif

        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombre..." title="BarSearch"><br>
        <hr>
               <table class="tableEmployes table w3-border w3-border-black" id="myTable" >
                <thead  class="w3-border w3-border-black">
                  <tr>
                    <th scope="col" class="w3-center" style="display: none">ID</th>
                    <th scope="col" class="w3-center">Consultor</th>
                    <th scope="col" class="w3-center">Módulo</th>
                    <th scope="col" class="w3-center">Cliente</th>
                    <th scope="col" class="w3-center">Fecha Inicio</th> 
                    {{-- <th scope="col" class="w3-center">Fecha Final</th>  --}}
                    {{-- <th scope="col" class="w3-center">Hora Inicio</th> --}}
                    <th scope="col" class="w3-center">Tiempo Estimado</th>  
                    <th scope="col" class="w3-center">Estatus</th>                    
                    <th scope="col" class="w3-center">Actividad</th>                    
                    <th scope="col" class="w3-center">°Num Ticket</th> 
                    <th scope="col" class="w3-center">Total Horas</th>                                                           
                    <th scope="col" class="w3-center"></th>
                    <th scope="col" class="w3-center">{{-- Update --}}</th>
                  </tr>
                </thead>
                <tbody class="w3-border w3-border-black">
                  @foreach($Activity as $act)                  
                    <tr>
                      <th scope="row" class="w3-center" style="display: none">{{$act->id}}</th>
                      <td class="w3-center">{{$act->nameEmployer}}</td>
                      <td class="w3-center">{{$act->nameModul}}</td>  
                      <td class="w3-center">{{$act->client}}</td>  
                      <td class="w3-center">{{$act->dateOn}}</td> 
                      {{-- <td class="w3-center">{{$act->dateOf}}</td>   --}}
                      {{-- <td class="w3-center"><input type="text" name="TimeOn" class="TimeOn" value="{{$act->timeOn}}" disabled pattern="[0-9]{1,9}" id="TimeOn"></td>   --}}
                      <td class="w3-center"><input type="text" name="TimeOf" class="TimeOf" value="{{$act->timeOf}}" style="width: 200px;" disabled pattern="[0-9]{1,9}" id="TimeOf"></td>  
                      <td class="w3-center">{{$act->status}}</td>                        
                      <td class="w3-center">{{$act->nameAct}}</td> 
                      <td class="w3-center">{{$act->numTicket}}</td> 
                      <td class="w3-center"><input type="text" name="quantitytime" value="{{$act->quantitytime}}" disabled class="quantitytime" pattern="[0-9]{1,9}" id="quantitytime"></td> 
                      <td class="w3-center">    

                        <a  href="" style="color: black"><i class="fa fa-trash fa-1x w3-margin-right w3-center  fa-1x">                     
                      </td>
                      <td class="w3-center">
                        <a  href="{{ route('EditActD', $act) }}" style="color: black"><i class="fas fa-pencil-alt w3-margin-right w3-center  fa-1x">                     
                      </td>
                    </tr>
                  @endforeach                      
                </tbody>
              </table>
             <br> 
           </div>
         </div>
              

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<script>
window.onload = function(){
  inicio = document.getElementById("TimeOn").value;
  fin = document.getElementById("TimeOf").value;
  
  inicioMinutos = parseInt(inicio.substr(3,2));
  inicioHoras = parseInt(inicio.substr(0,2));
  
  finMinutos = parseInt(fin.substr(3,2));
  finHoras = parseInt(fin.substr(0,2));

  transcurridoMinutos = finMinutos - inicioMinutos;
  transcurridoHoras = finHoras - inicioHoras;
  
  if (transcurridoMinutos < 0) {
    transcurridoHoras--;
    transcurridoMinutos = 60 + transcurridoMinutos;
  }
  
  horas = transcurridoHoras.toString();
  minutos = transcurridoMinutos.toString();
  
  if (horas.length < 2) {
    horas = "0"+horas;
  }
  
  if (minutos.length < 2) {
    minutos = "0"+minutos;
  }
  var $total = horas+":"+minutos

  document.getElementById("quantitytime").value = $element;
}
</script>

<script>
  window.onload = function(){
  inicio = document.getElementById("TimeOn").value;
  fin = document.getElementById("TimeOf").value; 
}
</script>
  <script src="../js/particles.js"></script>
  <script src="../js/app.js"></script>
@endsection
