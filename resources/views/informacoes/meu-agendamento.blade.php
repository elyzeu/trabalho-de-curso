
<x-app-layout>
    <head>
    <style>
  <style>
           table {
    border-collapse: separate;
    border-spacing: 5px;
  

} 
.bg{
    background-color: rgb(196, 252, 237);
}

th,td {
    padding: 8px;
  text-decoration-color: black;
  animation-direction: alternate-reverse;
  font-family: "Times New Roman", Times, serif;
  font-size: 16px;
  text-align: left;
}
tr{
    border-bottom: 1px solid black;
}
tr:hover {background-color: #D6EEEE;}

table.a {
  table-layout: auto;
  width: 100%;  
  border: 2px solid black;
  position: relative;
  animation: mymove 5s;
}
@keyframes mymove {
  0%   {top: 200px; background: black; width: 100%;}
  100% {top: 0px; background: white; width: 100%;}
}
</style>
       
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Meu Agendamento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-validation-errors class="mb-4" />
            @foreach($agendvar as $agend)
            @if($agend->user_id == $id)

            <table class="a">
            <tr>
                <th>nome</th>
                <th>horario</th>
                <th>excluir</th>
</tr>
                <tr>
                <td>{{$agend->name}}</td>
                <td>{{$agend->horario}}</td>
        <td>
            <form  action="{{ route('destroy-visita-user-agendada') }}" method="POST">
            @csrf
            @method('DELETE')
            <button  type="submit" style="style-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></button>
</form>
 </td>
</tr>
                </table>
       @endif
       @endforeach     




            </div>
        </div>
    </div>
</x-app-layout>
