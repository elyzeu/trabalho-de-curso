
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subtrair Saldo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-validation-errors class="mb-4" />
            <form method="POST" action="{{ route('subtrair-saldo-class') }}">
            @csrf

            <div class="mt-4">
                <x-jet-label for="valor" value="{{ __('Valor') }}" />
                <x-jet-input id="valor" class="block mt-1 w-full" type="number" placeholder="Digite o valor" name="valor" :value="old('valor')" required />
            </div>
            
            <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4">
                    {{ __('Enviar') }}
                </x-jet-button>
            </div>
        </form>
            </div>
        </div>
    </div>
</x-app-layout>
