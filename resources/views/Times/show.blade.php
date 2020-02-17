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
                    <th scope="col" class="w3-center" >ID</th>
                    <th scope="col" class="w3-center">Consultor</th>
                    <th scope="col" class="w3-center">Módulo</th>
                    <th scope="col" class="w3-center">Actividad</th>
                    <th scope="col" class="w3-center">Cliente</th>
                    <th scope="col" class="w3-center">Fecha Inicio</th>                    
                    <th scope="col" class="w3-center">Hora de Inicio</th>
                    <th scope="col" class="w3-center">Hora de Termino</th>                    
                    <th scope="col" class="w3-center">Tiempo Estimado</th>
                    <th scope="col" class="w3-center">{{-- Delete --}}</th>
                    <th scope="col" class="w3-center">{{-- Update --}}</th>
                  </tr>
                </thead>
                <tbody class="w3-border w3-border-black">
                  @foreach($Activities as $act)                  
                    <tr>
                      <th scope="row" class="w3-center" >{{$act->id}}</th>
                      <td class="w3-center">{{$act->nameEmployer}}</td>
                      <td class="w3-center">{{$act->nameModul}}</td>  
                      <td class="w3-center">{{$act->nameAct}}</td>  
                      <td class="w3-center">{{$act->client}}</td>  
                      <td class="w3-center">{{$act->dateOn}}</td>                      
                      <td class="w3-center">{{$act->timeOn}}</td>  
                      <td class="w3-center">{{$act->timeOf}}</td>                        
                      <td class="w3-center">{{$act->dateOf}}</td>  
                      <td class="w3-center">    

                      <form action="{{ route('DeleteActivity', $act) }}" class="d-inline" method="POST">
                      @method('DELETE')
                      @csrf  
                          <button class="btn btn-xs w3-center fa fa-trash fa-1x" class="w3-button" style="color: black"></button>
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
