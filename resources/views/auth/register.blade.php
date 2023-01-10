<x-guest-layout>
    <x-jet-authentication-card>
<script>
function mascara_mes(i){
   
   var v = i.value;
   
   if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
      i.value = v.substring(0, v.length-1);
      return;
   }
   
   i.setAttribute("maxlength", "11");

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
    <style>
        .formt{
            position: relative;
  height: 100%;
  width: 100%;
  margin: auto;
  padding: 60px 60px;
  background: url(https://picsum.photos/id/1004/5616/3744) no-repeat   center center #505050;   
  background-size: cover;
  box-shadow: 0px 30px 60px -5px #000;
        }
        </style>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" class="formt" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" class="text-white" value="{{ __('Name') }}" />
                <x-jet-input id="name" placeholder="nome" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" class="text-white" value="{{ __('Email') }}" />
                <x-jet-input id="email" placeholder="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" class="text-white" value="{{ __('Password') }}" />
                <x-jet-input id="password" placeholder="senha" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" class="text-white" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" placeholder="confirmação de senha" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
             <div class="mt-4">
                <x-jet-label for="telefone_celular"  class="text-white" value="{{ __('telefone_celular') }}" />
                <x-jet-input id="telefone_celular" placeholder="(DD) 00000-0000" oninput="mascara_mes(this)" class="block mt-1 w-full" type="text" name="telefone_celular" required autocomplete="telefone-celular" />
            </div>
            <div class="mt-4">
                <x-jet-label for="telefone_recado" class="text-white" value="{{ __('telefone_recado') }}" />
                <x-jet-input id="telefone_recado" placeholder="(DD) 00000-0000" oninput="mascara_mes(this)" class="block mt-1 w-full" type="text" name="telefone_recado" required autocomplete="telefone-recado" />
            </div>
            <div class="mt-4">
                <x-jet-label for="data_nascimento" class="text-white" value="{{ __('Data de Nascimento') }}" />
                <x-jet-input id="data_nascimento" oninput="mascara_data(this)" placeholder="00/00/0000"  class="block mt-1 w-full" type="text" name="data_nascimento" required autocomplete="data-nascimento" />
            </div>
            <div class="mt-4">
                <x-jet-label for="nome_rua" class="text-white" value="{{ __('Nome da Rua') }}" />
                <x-jet-input id="nome_rua"  placeholder="nome da rua"  class="block mt-1 w-full" type="text" name="nome_rua" required autocomplete="nome-rua" />
            </div>
            <div class="mt-4">
                <x-jet-label for="complemento" class="text-white" value="{{ __('Complemento') }}" />
                <x-jet-input id="complemento"  placeholder="complemento"  class="block mt-1 w-full" type="text" name="complemento" required autocomplete="complemento" />
            </div>
            <div class="mt-4">
                <x-jet-label for="bairro" class="text-white" value="{{ __('Bairro') }}" />
                <x-jet-input id="bairro"  placeholder="bairro"  class="block mt-1 w-full" type="text" name="bairro" required autocomplete="bairro" />
            </div>
            <div class="mt-4">
                <x-jet-label for="numero" class="text-white" value="{{ __('Numero') }}" />
                <x-jet-input id="numero"  placeholder="numero"  class="block mt-1 w-full" type="text" name="numero" required autocomplete="numero" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-white hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
