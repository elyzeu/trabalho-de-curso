
<script>
function mascara(i){
   
   var v = i.value;
   
   if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
      i.value = v.substring(0, v.length-1);
      return;
   }
   
   i.setAttribute("maxlength", "14");
   if (v.length == 3 || v.length == 7) i.value += ".";
   if (v.length == 11) i.value += "-";

}
 </script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Editar Filiado') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-stone-700 overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-validation-errors class="mb-4" />
            <form method="POST" action="{{ route('edit-class-filiado') }}">
            @csrf
            <div class="mt-4">
                <x-jet-label for="cpf_para_alterar" class="text-white" value="{{ __('Cpf Da Pessoa Para Alterar os Dados') }}" />
                <x-jet-input id="cpf_para_alterar" placeholder="cpf do filiado" oninput="mascara(this)" class="block mt-1 w-full" type="text" name="cpf_para_alterar"  required autocomplete="cpf_para_alterar" />
            </div>

            <div class="mt-4">
                <x-jet-label for="nome" class="text-white" value="{{ __('Nome') }}" />
                <x-jet-input id="nome" placeholder="nome" class="block mt-1 w-full" type="text" name="nome"  required autocomplete="nome" />
            </div>
        
            <div class="mt-4">
                <x-jet-label for="cpf" class="text-white" value="{{ __('Cpf Pessoal') }}" />
                <x-jet-input id="cpf" placeholder="cpf" oninput="mascara(this)" class="block mt-1 w-full" type="text" name="cpf"  required autocomplete="cpf" />
            </div>

        
            <div class="mt-4">
                <x-jet-label for="data_nascimento" class="text-white" value="{{ __('Data de Nascimento') }}" />
                <x-jet-input id="data_nascimento" placeholder="__/__/__" oninput="mascara_nascimento(this)" class="block mt-1 w-full" type="text" name="data_nascimento" required autocomplete="data_nascimento" />
            </div>
            <div class="mt-4">
                <x-jet-label for="admissao" class="text-white" value="{{ __('Data de Admissao') }}" />
                <x-jet-input id="admissao" class="block mt-1 w-full" placeholder="__/__/__" oninput="mascara_nascimento(this)" type="text" name="admissao" required autocomplete="admissao" />
            </div>
            <div class="mt-4">
                <x-jet-label for="cargo" class="text-white" value="{{ __('Cargo') }}" />
                <x-jet-input id="cargo" placeholder="cargo" class="block mt-1 w-full" type="text" name="cargo" required autocomplete="cargo" />
            </div>
            <div class="mt-4">
                <x-jet-label for="lotacao" class="text-white" value="{{ __('Lotacao') }}" />
                <x-jet-input id="lotacao" placeholder="lotação" class="block mt-1 w-full" type="text" name="lotacao" required autocomplete="lotacao" />
            </div>
            <div class="mt-4">
                <x-jet-label for="rg" class="text-white" value="{{ __('Rg') }}" />
                <x-jet-input id="rg" placeholder="rg" class="block mt-1 w-full" type="text" name="rg" required autocomplete="rg" />
            </div>
            <div class="mt-4">
                <x-jet-label for="decreto_de_nomeacao" class="text-white" value="{{ __('Decreto de Nomeacao') }}" />
                <x-jet-input id="decreto_de_nomeacao" placeholder="000/0000" oninput="mascarad(this)" class="block mt-1 w-full" type="text"  name="decreto_de_nomeacao" required autocomplete="decreto_de_nomeacao" />
            </div>
            <div class="mt-4">
                <x-jet-label for="matricula" class="text-white" value="{{ __('Matricula') }}" />
                <x-jet-input id="matricula" placeholder="numero de matricula" class="block mt-1 w-full" type="number" name="matricula" required autocomplete="matricula" />
            </div>
            <div class="mt-4">
                <x-jet-label for="email" class="text-white" value="{{ __('Email') }}" />
                <x-jet-input id="email" placeholder="email@gmail.com" class="block mt-1 w-full" type="email" name="email" required autocomplete="email" />
            </div>
 
            <div class="mt-4">
              <select name="status">
              <option value="1" >Contribuinte</option>
               <option value="0" >Não Contribui</option>
</select>
            </div>
            
            <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4 text-white">
                    {{ __('Enviar') }}
                </x-jet-button>
            </div>
        </form>
            </div>
        </div>
    </div>
</x-app-layout>
