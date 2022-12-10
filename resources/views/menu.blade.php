
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
            <div class=" ">
                    <x-jet-nav-link  href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-jet-nav-link>
<br/>
                    <x-jet-nav-link  href="{{ route('visitas-agendadas') }}" :active="request()->routeIs('visitas-agendadas')">
                        {{ __('Minha Visita Agendada') }}
                    </x-jet-nav-link>
<br/>
                    <x-jet-nav-link href="{{ route('agendar-visita-form') }}" :active="request()->routeIs('agendar-visita-form')">
                        {{ __('Agendar Visita') }}
                    </x-jet-nav-link>
                    <br/>
                    <x-jet-nav-link href="{{ route('all-visitas-agendadas') }}" :active="request()->routeIs('all-visitas-agendadas')">
                        {{ __('Todas as visitas agendadas Adm') }}
                    </x-jet-nav-link>
                    <br/>
                    <x-jet-nav-link href="{{ route('cadastrar-gasto') }}" :active="request()->routeIs('cadastrar-gasto')">
                        {{ __('Cadastrar Gasto Adm') }}
                    </x-jet-nav-link>
                    <br/>
                    <x-jet-nav-link href="{{ route('buscar-gasto') }}" :active="request()->routeIs('buscar-gasto')">
                        {{ __('Pesquisar Gasto De Um Mes') }}
                    </x-jet-nav-link>
                    <br/>
                    <x-jet-nav-link href="{{ route('ver-all-gasto') }}" :active="request()->routeIs('ver-all-gasto')">
                        {{ __('Ver Todos os Gastos') }}
                    </x-jet-nav-link>
                    <br/>
                    <x-jet-nav-link href="{{ route('saldo-cadastro-view') }}" :active="request()->routeIs('saldo-cadastro-view')">
                        {{ __('Cadastrar Saldo') }}
                    </x-jet-nav-link>
                    <br/>
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Saldo Subtrair') }}
                    </x-jet-nav-link>
                    <br/>
                    <x-jet-nav-link href="{{ route('ver-saldo') }}" :active="request()->routeIs('ver-saldo')">
                        {{ __('Ver Saldo') }}
                    </x-jet-nav-link>
                    <br/>
                    <x-jet-nav-link href="{{ route('cadastrar-filiado') }}" :active="request()->routeIs('cadastrar-filiado')">
                        {{ __('Cadastrar Filiado') }}
                    </x-jet-nav-link>
                    <br/>
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Excluir Filiado') }}
                    </x-jet-nav-link>
                    <br/>
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Editar Filiado') }}
                    </x-jet-nav-link>
                    <br/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
