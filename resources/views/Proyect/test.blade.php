@extends('Layouts.app')

@section ('title', 'Print')


@section ('body')
    
    <div class="containertable ">
      <div class="bodertable w3-container w3-card w3-white w3-margin-bottom w3-light-grey w3-border w3-border-black">
        <h2 class="w3-text-grey w3-center w3-padding-16"><i class="fas fa-user-plus fa-fw w3-margin-right w3-xxlarge w3-text-teal">          
        </i>Registro de Actividades MDA</h2>
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
                    <th scope="col" class="w3-center">Fecha Final</th> 
                    <th scope="col" class="w3-center">Hora Inicio</th>
                    <th scope="col" class="w3-center">Hora Termino</th>  
                    <th scope="col" class="w3-center">Estatus</th>                    
                    <th scope="col" class="w3-center">Actividad</th>                    
                    <th scope="col" class="w3-center">°Num Ticket</th> 
                    <th scope="col" class="w3-center">Total Horas</th>                                                           
                    <th scope="col" class="w3-center"></th>
                    <th scope="col" class="w3-center">{{-- Update --}}</th>
                  </tr>
                </thead>
                <tbody class="w3-border w3-border-black">
                  @foreach($Activities as $act)                  
                    <tr>
                      <th scope="row" class="w3-center" style="display: none">{{$act->id}}</th>
                      <td class="w3-center">{{$act->nameEmployer}}</td>
                      <td class="w3-center">{{$act->nameModul}}</td>  
                      <td class="w3-center">{{$act->client}}</td>  
                      <td class="w3-center">{{$act->dateOn}}</td> 
                      <td class="w3-center">{{$act->dateOf}}</td>  
                      <td class="w3-center"><input type="text" name="TimeOn" class="TimeOn" value="{{$act->timeOn}}" disabled pattern="[0-9]{1,9}" id="TimeOn"></td>  
                      <td class="w3-center"><input type="text" name="TimeOf" class="TimeOf" value="{{$act->timeOf}}" disabled pattern="[0-9]{1,9}" id="TimeOf"></td>  
                      <td class="w3-center">{{$act->status}}</td>                        
                      <td class="w3-center">{{$act->nameAct}}</td> 
                      <td class="w3-center">{{$act->numTicket}}</td> 
                      <td class="w3-center"><input type="text" name="quantitytime" class="quantitytime" pattern="[0-9]{1,9}" id="quantitytime"></td> 
                      <td class="w3-center">    

                      <form action="{{ route('DeleteActivity', $act) }}" class="d-inline" method="POST">
                      @method('DELETE')
                      @csrf  
                        <a  href="" style="color: black"><i class="fa fa-trash fa-1x w3-margin-right w3-center  fa-1x">                     

                      </form>                       
                      </td>
                      <td class="w3-center">
                        <a  href="" style="color: black"><i class="fas fa-pencil-alt w3-margin-right w3-center  fa-1x">                     
                      </td>
                    </tr>
                  @endforeach                      
                </tbody>
              </table>
             <br> 
             
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




@endsection
