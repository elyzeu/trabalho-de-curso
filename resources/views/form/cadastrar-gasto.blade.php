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
function mascara_data(i){
   
   var v = i.value;
   
   if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
      i.value = v.substring(0, v.length-1);
      return;
   }
   
   i.setAttribute("maxlength", "10");
   if (v.length == 2) i.value += "/";
   if (v.length == 5) i.value += "/";

}
</script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white	 leading-tight">
            {{ __('Cadastrar Gasto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-stone-700 overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-validation-errors class="mb-4" />
            <form method="POST" action="{{ route('cadastrar-gasto-save') }}">
            @csrf


            <div class="mt-4">
                <x-jet-label for="valor" class="text-white" value="{{ __('Valor') }}" />
                <x-jet-input id="valor" placeholder="valor" class="block mt-1 w-full" type="number" name="valor" :value="old('valor')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="descricao" class="text-white" value="{{ __('Descrição') }}" />
                <x-jet-input id="descricao" placeholder="descrição" class="block mt-1 w-full" type="text" name="descricao" required autocomplete="descricao" />
            </div>
            <div class="mt-4">
                <x-jet-label for="data" class="text-white" value="{{ __('Data') }}" />
                <x-jet-input id="data" placeholder="__/__/____" oninput="mascara_data(this)" class="block mt-1 w-full" type="text" name="data" required autocomplete="data" />
            </div>
            <div class="mt-4">
                <x-jet-label for="mes" class="text-white" value="{{ __('Mes') }}" />
                <x-jet-input id="mes" placeholder="mes" oninput="mascara_mes(this)" class="block mt-1 w-full" type="numeric" name="mes" required autocomplete="mes" />
            </div>
            <div class="mt-4">
                <x-jet-label for="ano" class="text-white" value="{{ __('Ano') }}" />
                <x-jet-input id="ano" placeholder="ano" oninput="mascara_ano(this)" class="block mt-1 w-full" type="numeric" name="ano" required autocomplete="ano" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4 text-white">
                    {{ __('Salvar') }}
                </x-jet-button>
            </div>
        </form>
            </div>
        </div>
    </div>
</x-app-layout>
