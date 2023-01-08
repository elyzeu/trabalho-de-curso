
<x-app-layout>
<style>
  <style>
           table {
    border-collapse: separate;
    border-spacing: 5px;
  

} 
.bg{
    background-color: rgb(196, 252, 237);
}

th,td {
    padding: 8px;
  text-decoration-color: black;
  animation-direction: alternate-reverse;
  font-family: "Times New Roman", Times, serif;
  font-size: 16px;
  text-align: left;
}
tr{
    border-bottom: 1px solid black;
}
tr:hover {background-color: #D6EEEE;}

table.a {
  table-layout: auto;
  width: 100%;  
  border: 2px solid black;
  position: relative;
  animation: mymove 5s;
}
@keyframes mymove {
  0%   {top: 200px; background: black; width: 100%;}
  100% {top: 0px; background: white; width: 100%;}
}
</style>
       
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Saldo Atual') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-validation-errors class="mb-4" />

            <table class="a">
            <tr>
                <th class="text-center">Valor</th>
            </tr>
            <tr>
                <td class="text-center">{{$saldo->valor}}</td>
            </tr>    
        </table>
            </div>
        </div>
    </div>
</x-app-layout>
