
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Saldo Atual') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-validation-errors class="mb-4" />

            <tr>
       <label for="valor">Valor</label>
        </br>
        <th>{{$saldo->valor}} </th>
</tr>            




            </div>
        </div>
    </div>
</x-app-layout>
