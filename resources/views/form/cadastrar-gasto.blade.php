
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Gasto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-validation-errors class="mb-4" />
            <form method="POST" action="{{ route('cadastrar-gasto-save') }}">
            @csrf


            <div class="mt-4">
                <x-jet-label for="valor" value="{{ __('Valor') }}" />
                <x-jet-input id="valor" class="block mt-1 w-full" type="numeric" name="valor" :value="old('valor')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="descricao" value="{{ __('Descricao') }}" />
                <x-jet-input id="descricao" class="block mt-1 w-full" type="text" name="descricao" required autocomplete="descricao" />
            </div>
            <div class="mt-4">
                <x-jet-label for="data" value="{{ __('Data') }}" />
                <x-jet-input id="data" class="block mt-1 w-full" type="date" name="data" required autocomplete="data" />
            </div>
            <div class="mt-4">
                <x-jet-label for="ano" value="{{ __('Ano') }}" />
                <x-jet-input id="ano" class="block mt-1 w-full" type="numeric" name="ano" required autocomplete="ano" />
            </div>
            <div class="mt-4">
                <x-jet-label for="mes" value="{{ __('Mes') }}" />
                <x-jet-input id="mes" class="block mt-1 w-full" type="numeric" name="mes" required autocomplete="mes" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4">
                    {{ __('Send') }}
                </x-jet-button>
            </div>
        </form>
            </div>
        </div>
    </div>
</x-app-layout>
