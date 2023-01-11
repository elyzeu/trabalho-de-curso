<script>
function mascara_mes(i){
   
   var v = i.value;
   
   if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
      i.value = v.substring(0, v.length-1);
      return;
   }
   
   i.setAttribute("maxlength", "2");
   if (v.length == 2);

}
function mascara_ano(i){
   
   var v = i.value;
   
   if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
      i.value = v.substring(0, v.length-1);
      return;
   }
   
   i.setAttribute("maxlength", "4");
   if (v.length == 4);

}
 </script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Buscar Gasto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-stone-700 overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-validation-errors class="mb-4" />
            <form method="POST" action="{{ route('ver-gasto') }}">
            @csrf

            <div class="mt-4">
                <x-jet-label for="mes" class="text-white" value="{{ __('Mes') }}" />
                <x-jet-input id="mes" placeholder="mes"  oninput="mascara_mes(this)" class="block mt-1 w-full" type="text" name="mes" required autocomplete="mes" />
            </div>
            <div class="mt-4">
                <x-jet-label for="ano" class="text-white" value="{{ __('Ano') }}" />
                <x-jet-input id="ano" placeholder="ano" oninput="mascara_ano(this)" class="block mt-1 w-full" type="text" name="ano" required autocomplete="ano" />
            </div>


            <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4 text-white">
                    {{ __('Buscar') }}
                </x-jet-button>
            </div>
        </form>
            </div>
        </div>
    </div>
</x-app-layout>
