<div class="flex flex-col">
    
    <input wire:model.live.debounce.300ms="search" class="w-1/2 mx-auto rounded-xl text-gray-950 p-2 px-4 text-sm mb-4" placeholder="Search..." type="text">

    @if ($search == null)
        
    <div class="bg-gray-500 h-52 mb-4 rounded-md">
    </div>
    @endif

    <div class="">
        @if ($games->count(0))
         
        <div class="grid md:grid-cols-3 lg:grid-cols-4 grid-cols-1 gap-2">
            @foreach ($games as $game)
            @php
                $i++
            @endphp
                <div  @click="$dispatch('open-modal', {name : 'detail-item'})" wire:key="{{ $game->id }}" wire:click="gameDetail({{ $game }})" 
                    class="group rounded-lg hover:-translate-y-1 relative overflow-hidden hover:cursor-pointer hover:shadow-slate-700 hover:shadow-md ease-in-out duration-150 text-center flex flex-col justify-between">
                    <div>
                        <img class="cover h-[360px] bg-center w-full" src="{{ asset("img/$i.jpg") }}" alt="rdr2">
                    </div>
                    <div class="absolute h-1/3 bottom-0 inset-x-0">
                        <div class="lg:opacity-0 group-hover:opacity-100 bg-gradient-to-t from-black lg:scale-y-0 group-hover:scale-y-100 origin-bottom transition ease-in duration-150 from-30% absolute inset-0"></div>
                        <h2 class="font-semibold text-start absolute bottom-0 opacity-100 lg:-bottom-5 p-3 lg:group-hover:-translate-y-5 lg:opacity-0 group-hover:opacity-100 transition ease-in duration-300">{{ $game->title }}</h2>
                    </div>
                </div>
            @endforeach
        </div>
        @else
        <p class="text-center text-2xl mt-5">Not found..</p>
        @endif
    </div>

    @if ($selectedGame !== null)
        
    <x-modal modalName="game-detail" title="Game Detail" width="w-4/5">
        <x-slot:body>
            {{ $selectedGame->title }}
        </x-slot:body>
    </x-modal>
    @endif

    {{ $games->links() }}
</div>