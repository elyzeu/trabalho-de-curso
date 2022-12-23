
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Filiado') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-validation-errors class="mb-4" />
        @foreach($filiados as $filiado)
        @if($filiado->email == $var)
        <tr>
        <label for="nome">Nome:</label>
        <th>{{$filiado->nome}}</th>
        <br/>
        <label for="cpf">Cpf: </label>
        <th>{{$filiado->cpf}}</th>
        <br/>
        <label for="data_nascimento">Data de Nascimento: </label>
        <th>{{date('d-m-Y', strtotime($filiado->data_nascimento));}}</th>
        <br/>
        <label for="admissao">Data de Admissão:</label>
        <th>{{date('d-m-Y', strtotime($filiado->admissao))}}</th>
        <br/>
        <label for="cargo">Cargo:</label>
        <th>{{$filiado->cargo}}</th>
        <br/>
        <label for="lotacao">Lotação:</label>
        <th>{{$filiado->lotacao}}</th>
        <br/>
        <label for="rg">Rg:</label>
        <th>{{$filiado->rg}}</th>
        <br/>
        <label for="decreto_de_nomeacao">Decreto de Nomeação:</label>
        <th>{{$filiado->decreto_de_nomeacao}}</th>
        <br/>
        <label for="matricula">Matricula:</label>
        <th>{{$filiado->matricula}}</th>
        <br/>
        <label for="email">Email:</label>
        <th>{{$filiado->email}}</th>
        <br/>
        <label for="status">Status: </label>
        <th>{{$filiado->status}}</th>
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
</tr>
</br>          
 @endif
@endforeach



            </div>
        </div>
    </div>
</x-app-layout>
