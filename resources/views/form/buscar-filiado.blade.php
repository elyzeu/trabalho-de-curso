
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Buscar Gasto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-validation-errors class="mb-4" />
            <form method="POST" action="{{ route('busca-filiado') }}">
            @csrf

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="email" />
            </div>


            <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4">
                    {{ __('Buscar') }}
                </x-jet-button>
            </div>
        </form>
            </div>
        </div>
    </div>
</x-app-layout>
