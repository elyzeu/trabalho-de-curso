
<x-app-layout>
    <head>
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
            {{ __('Todos os Filiados') }}
        </h2>
    </x-slot>
<body>
    <div class="py-12">
            <div class="bg-gray-200">
            <x-jet-validation-errors class="mb-4" />

  @foreach($filiados as $filiado)

  <div style="overflow-x:auto;">     
 <table class="a">
 
<tr>
    
    <th for="nome">Nome</th>
    <th for="cpf">Cpf</th>
    <th for="data_nascimento">Data de Nascimento</th>
    <th for="admissao">Data de Admissão</th>
    <th for="cargo">Cargo</th>
    <th for="lotacao">Lotacao</th>
    <th for="rg">Rg</th>
    <th for="decreto_de_nomeacao">Decreto de Nomeação</th>
    <th for="matricula">Matricula</th>
    <th for="email">Email</th>
    <th for="status">Status</th>
    <th for="excluir">Excluir</th>
</tr>
  <tr>
    
    <td>{{$filiado->nome}}</td>
    <td>{{$filiado->cpf}}</td>
    <td>{{date('d-m-Y', strtotime($filiado->data_nascimento))}}</td>
    <td>{{date('d-m-Y', strtotime($filiado->admissao))}}</td>
    <td>{{$filiado->cargo}}</td>
    <td>{{$filiado->lotacao}}</td>
    <td>{{$filiado->rg}}</td>
    <td>{{$filiado->decreto_de_nomeacao}}</td>
    <td>{{$filiado->matricula}}</td>
    <td>{{$filiado->email}}</td>
    @if($fliado->status == 1)
    <td>Contribuinte</td>
    @endif
    @else
    <td>Não Contribuinte</td>
    @endelse
    <td>
            <form  action="/events/all-filiado/delet/{{ $filiado->id }}" method="POST">
            @csrf
            @method('DELETE')

            <button  type="submit" style="style-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></button>
</form>
</td>

  
</table>
</div>
        
     
@endforeach



           
        </div>
    </div>

</x-app-layout>
