
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todos os Gastos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-validation-errors class="mb-4" />
            @foreach($gasto as $gastos)

            <tr>
       <label for="valor">Valor</label>
       <br/>
        <th>{{$gastos->valor}} </th>
        
        <br/>
        <label for="descricao">Descrição</label>
        <br/>
        <th>{{$gastos->descricao}} </th>
        <br/>
        <label for="data">Data</label>
        <br/>
        <th>{{date('d-m-Y', strtotime($gastos->data));}} </th>
        <br/>
        </br>
        
</tr>            

@endforeach
<label for="total">Total</label>
<label>{{$total}}</label>


            </div>
        </div>
    </div>
</x-app-layout>
