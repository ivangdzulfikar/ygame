@extends('layouts.base')


@section('body')   
    
    
    <div class="flex items-center gap-2 bg-slate-100 text-gray-900 py-2 px-4">
      <div x-data @click="$dispatch('toggle')" class="hover:cursor-pointer rounded-md hover:shadow-md ease-in-out duration-300 p-2">

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg> 

      </div>
      <p class="text-2xl font-bold italic">Ygame</p>
    </div>

    <div x-data="{sidebar : true}"
     x-on:toggle.window = "sidebar = !sidebar"
    class="flex">
    <div
         x-show="sidebar"
         x-transition:enter="transition ease-out duration-300 origin-left"
         x-transition:enter-start="opacity-0 scale-x-90 "
         x-transition:enter-end="opacity-100 scale-x-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 scale-x-100"
         x-transition:leave-end="opacity-0 scale-x-90 origin-left"
         style="display: none"
         
         class="bg-slate-50 w-52 py-3 relative">
        <ul class="text-gray-900">
            <a wire:navigate="/dashboard" href="/dashboard" class="text-sm font-bold text-sky-500"><li class="hover:bg-sky-100 bg-sky-100 px-5 py-2">Home</li></a>
            <a wire:navigate="/game" href="/game" class="text-sm font-bold text-sky-500"><li class="hover:bg-sky-100 px-5 py-2">Game List</li></a>
        </ul>
    </div>
    <div class="p-4 w-full">
      @isset($slot)
        {{ $slot }}
      @endisset
    </div>
</div>

@endsection
