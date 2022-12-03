
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todos os Agendamentos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-validation-errors class="mb-4" />
            @foreach($agendamento as $agend)

            <tr>
       
        <th>{{$agend->name}} </th>
        <br/>
        <th>{{$agend->horario}} </th>
<br/>
        <br/>
</tr>            
@endforeach



            </div>
        </div>
    </div>
</x-app-layout>
