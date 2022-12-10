
<x-app-layout>
    <head>
     

    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Saldo do Sindicato') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-validation-errors class="mb-4" />

        <div class="style1">
        <a for="saldo">O Sindicato não possui saldo</a>
</div>
            </div>
        </div>
    </div>
</x-app-layout>
