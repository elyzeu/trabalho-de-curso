
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gasto do Mes ') }}{{$mes}}
        </h2>
    
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-validation-errors class="mb-4" />
        @foreach($gasto as $gastovar)
        @if($gastovar->mes == $mes)
        <tr>
        <label for="valor">Valor</label>
        <br/>        
        <th>{{$gastovar->valor}} </th>
        <br/>
        <label for="descricao">descricao</label>
        <br/>
        <th>{{$gastovar->descricao}} </th>
        <br/>
        <label for="data">data</label>
        </br>
        <th>{{$gastovar->data}} </th>
        <br/>
        </tr>            
        @endif
        @endforeach



            </div>
        </div>
    </div>
</x-app-layout>
