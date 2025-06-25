<div class="flex items-center flex-col p-6 lg:p-8 bg-white border-b border-gray-200">
<h1>{{$count}}</h1>
<div>
<button wire:click="decrement" type="button" class="text-black bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">-</button>
<button wire:click="increment" type="button" class="text-black bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">+</button>
</div>
<div class="flex -space-x-4 rtl:space-x-reverse p-20">
    <img class="w-20 h-20 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('image/gwen.jpg') }}" alt="">
    <img class="w-20 h-20 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('image/jayron.jpg') }}" alt="">
    <img class="w-20 h-20 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('image/ralexx.jpg') }}" alt="">
    <img class="w-20 h-20 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('image/vhon.png') }}" alt="">
</div>

</div>
</div>


