
<x-app-layout>
    <head>
<style>
.button {
  border: solid;
  color: white;
  background-color: black;
  padding: 5px 10px;
  border-radius: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
    </style>
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Todos os Agendamentos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-validation-errors class="mb-4" />

        
        <label for="agendamento">{{$zeroagend}}</label>

            </div>
        </div>
    </div>
</x-app-layout>
