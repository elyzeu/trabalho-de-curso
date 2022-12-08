
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Filiado') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-validation-errors class="mb-4" />
            <form method="POST" action="{{ route('cadastrar-filiado-save') }}">
            @csrf


            <div class="mt-4">
                <x-jet-label for="nome" value="{{ __('Nome') }}" />
                <x-jet-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="cpf" value="{{ __('Cpf') }}" />
                <x-jet-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" required autocomplete="cpf" />
            </div>
            <div class="mt-4">
                <x-jet-label for="datanascimento" value="{{ __('DataNascimento') }}" />
                <x-jet-input id="datanascimento" class="block mt-1 w-full" type="date" name="datanascimento" required autocomplete="datanascimento" />
            </div>
            <div class="mt-4">
                <x-jet-label for="dataadmissao" value="{{ __('DataAdmissao') }}" />
                <x-jet-input id="dataadmissao" class="block mt-1 w-full" type="date" name="dataadmissao" required autocomplete="dataadmissao" />
            </div>
            <div class="mt-4">
                <x-jet-label for="cargo" value="{{ __('Cargo') }}" />
                <x-jet-input id="cargo" class="block mt-1 w-full" type="text" name="cargo" required autocomplete="cargo" />
            </div>
            <div class="mt-4">
                <x-jet-label for="lotacao" value="{{ __('Lotacao') }}" />
                <x-jet-input id="lotacao" class="block mt-1 w-full" type="text" name="lotacao" required autocomplete="lotacao" />
            </div>
            <div class="mt-4">
                <x-jet-label for="rg" value="{{ __('Rg') }}" />
                <x-jet-input id="rg" class="block mt-1 w-full" type="text" name="rg" required autocomplete="rg" />
            </div>
            <div class="mt-4">
                <x-jet-label for="decretonomeacao" value="{{ __('DecretoNomeacao') }}" />
                <x-jet-input id="decretonomeacao" class="block mt-1 w-full" type="text" name="decretonomeacao" required autocomplete="decretonomeacao" />
            </div>
            <div class="mt-4">
                <x-jet-label for="matricula" value="{{ __('Matricula') }}" />
                <x-jet-input id="matricula" class="block mt-1 w-full" type="numeric" name="matricula" required autocomplete="matricula" />
            </div>
            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="email" />
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
