
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agendar Visita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-validation-errors class="mb-4" />
            <form method="POST" action="{{ route('agendar-visita-save') }}">
            @csrf


            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="nome" value="{{ __('Nome') }}" />
                <x-jet-input id="nome" class="block mt-1 w-full" type="nome" name="nome" :value="old('nome')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="horario" value="{{ __('horario') }}" />
                <x-jet-input id="horario" class="block mt-1 w-full" type="time" name="horario" required autocomplete="horario" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4">
                    {{ __('Schedule Visit') }}
                </x-jet-button>
            </div>
        </form>
            </div>
        </div>
    </div>
</x-app-layout>