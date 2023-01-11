
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Agendar Visita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-stone-700 overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-validation-errors class="mb-4" />
            @if($agendamento == 1)
            <a class="text-white">Você já tem uma visita agendada</a>
            @endif
            <form method="POST" action="{{ route('agendar-visita-save') }}">
            @csrf


            <div class="mt-4">
                <x-jet-label for="email" class="text-white" value="{{ __('Email') }}" />
                <x-jet-input id="email" placeholder="email@gmail.com" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="descricao" class="text-white" value="{{ __('Descrição') }}" />
                <x-jet-input id="descricao" placeholder="descrição" class="block mt-1 w-full" type="text" name="descricao" :value="old('descricao')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="nome" class="text-white" value="{{ __('Nome') }}" />
                <x-jet-input id="nome" placeholder="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="horario" class="text-white" value="{{ __('horario') }}" />
                <x-jet-input id="horario" class="block mt-1 w-full" type="time" name="horario" required autocomplete="horario" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4 text-white">
                    {{ __('Agendar Visita') }}
                </x-jet-button>
            </div>
        </form>
            </div>
        </div>
    </div>
</x-app-layout>
