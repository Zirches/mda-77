@extends('Layouts.app')

@section ('title', 'Print')


@section ('body')
    
    <div class="containertable ">
      <div class="bodertable w3-container w3-card w3-white w3-margin-bottom w3-light-grey w3-border w3-border-black">
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




@endsection
