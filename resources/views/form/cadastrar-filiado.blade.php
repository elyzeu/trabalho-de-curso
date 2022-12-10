
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
                <x-jet-input id="nome" class="block mt-1 w-full" type="text" name="nome"  required autocomplete="nome" />
            </div>

        
            <div class="mt-4">
                <x-jet-label for="data_nascimento" value="{{ __('Data de Nascimento') }}" />
                <x-jet-input id="data_nascimento" class="block mt-1 w-full" type="date" name="data_nascimento" required autocomplete="data_nascimento" />
            </div>
            <div class="mt-4">
                <x-jet-label for="admissao" value="{{ __('Data de Admissao') }}" />
                <x-jet-input id="admissao" class="block mt-1 w-full" type="date" name="admissao" required autocomplete="admissao" />
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
                <x-jet-label for="decreto_de_nomeacao" value="{{ __('Decreto de Nomeacao') }}" />
                <x-jet-input id="decreto_de_nomeacao" class="block mt-1 w-full" type="text" name="decreto_de_nomeacao" required autocomplete="decreto_de_nomeacao" />
            </div>
            <div class="mt-4">
                <x-jet-label for="matricula" value="{{ __('Matricula') }}" />
                <x-jet-input id="matricula" class="block mt-1 w-full" type="numeric" name="matricula" required autocomplete="matricula" />
            </div>
            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="email" />
            </div>
            <div class="mt-4">
              <select name="status">
               <option value="ativo" >Ativo</option>
               <option value="desativado" >Desativado</option>
</select>
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
