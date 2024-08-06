<div class="bg-red-600 w-screen h-screen p-1">
    {{-- The best athlete wants his opponent at his best. --}}

   
<div class="h-80 w-80 bg-white mx-auto mt-10 rounded-md text-center p-5">

<br>
<label for="">Enter first number</label>
<input class="border border-black" type="text" wire:model.live='selected'>


<br>
<label for="">Enter second number </label>
<input class="border border-black" type="text" wire:model.live='selected2'>

<button type=select wire:click='sumoftwointegers' class="px-4 pya-1"> Select</button>


<br>
<label for="">Value:{{$selected}}</label>





</div>

</div>
