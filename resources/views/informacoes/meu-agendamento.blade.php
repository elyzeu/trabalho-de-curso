
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Meu Agendamento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-validation-errors class="mb-4" />
            @foreach($agendamento as $agend)
            @if($agend->user_id == $id)
            <tr>
            
        <th>{{$agend->name}} </th>
        <br/>
        <th>{{$agend->horario}} </th>
        <br/>

   
</tr>
       @endif
       @endforeach     




            </div>
        </div>
    </div>
</x-app-layout>
