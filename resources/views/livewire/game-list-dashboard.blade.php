<div class="">
    <h2 class="font-bold text-2xl mb-14">List Game</h2>


    <div class=" flex justify-between">
        <input wire:model.live="search" class="rounded w-1/3 text-gray-900" type="text" placeholder="search">
        <button x-data @click="$dispatch('open-modal', {name : 'addGame'})"
            class="bg-teal-600 py-1 flex items-center px-6 gap-2 font-medium text-lg rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            Add Game
        </button>
    </div>
    <div class="mt-5">
        <div class="bg-gray-200 text-gray-900">
            <table class=" w-full">
                <thead class="">
                    <tr>
                        <th class="py-2 px-2 text-start">No.</th>
                        <th class="py-2 text-start">Image</th>
                        <th class="py-2 text-start">Title</th>
                        <th class="py-2 text-start">Developer</th>
                        <th class="py-2 text-start">Year</th>
                        <th class="py-2 text-start">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-900 text-white">
                    @foreach ($games as $game)
                    <tr wire:key="{{ $game->id }}">
                        <td class="py-4 px-2 border-b">{{ $loop->iteration }}</td>
                        <td class="py-4 px-2 border-b">
                            <img src="{{ asset("$game->image") }}" alt="image" class="w-10 h-10">
                        </td>
                        <td class="py-4 border-b">{{ $game->title }}</td>
                        <td class="py-4 border-b">{{ $game->developer }}</td>
                        <td class="py-4 border-b">{{ $game->year }}</td>
                        <td class="py-4 border-b">
                            <button wire:click="delete({{ $game }})" class="bg-red-600 py-1 px-3 rounded hover:bg-red-800 ease-in-out duration-150 capitalize">delete</button>
                            <button class="bg-sky-600 py-1 px-3 rounded hover:bg-sky-800 ease-in-out duration-150 capitalize">view</button>
                            <button class="bg-yellow-500 py-1 px-3 rounded hover:bg-yellow-800 ease-in-out duration-150 capitalize">edit</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $games->links() }}
        </div>
    </div>

    <x-modal modalName="addGame" title="Add new Game" width="w-4/5">
        <x-slot:body>
            <div class=" text-white">
                @if (session('success'))

                <div id="alert-border-3"
                    class="absolute inset-x-0 flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-700 bg-gray-900 "
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <div class="ms-3 text-sm font-medium">
                        {{ session('success') }}
                    </div>
                </div>
                @endif

                <form wire:submit="addGame" action="">
                    <div class="flex flex-col justify-center h-[26rem] gap-9 pt-24">

                        <div class="px-6">
                            <label class="text-base " for="title">Title</label>
                            <input wire:model.live="title"
                                class="bg-transparent block w-full text-sm border-0 border-b-2 focus:border-b-sky-700 focus:ring-transparent pb-3"
                                placeholder="title" type="text">
                            @error('title')
                            <p class="text-red-500 text-sm mt-3">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-6">
                            <label class="text-base" for="developer">Developer</label>
                            <input wire:model.live="developer"
                                class="bg-transparent block w-full text-sm border-0 border-b-2 focus:border-b-sky-700 focus:ring-transparent pb-3"
                                placeholder="developer" type="text">
                            @error('developer')
                            <p class="text-red-500 text-sm mt-3">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-6">
                            <label class="text-base" for="year">Year</label>
                            <input wire:model.live="year"
                                class="bg-transparent block w-full text-sm border-0 border-b-2 focus:border-b-sky-700 focus:ring-transparent pb-3"
                                placeholder="year" type="text" />
                            @error('year')
                            <p class="text-red-500 text-sm mt-3">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-6">
                            <label class="text-base" for="year">Image</label>
                            <input wire:model.live="image" accept="image/png, image/jpeg"
                                class="bg-transparent block w-full text-sm border-0 border-b-2 focus:border-b-sky-700 focus:ring-transparent pb-3"
                                placeholder="year" type="file" />
                            @error('image')
                            <p class="text-red-500 text-sm mt-3">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="bg-sky-500 text-white py-2 rounded-full text-xl font-bold">Add new
                            game</button>
                    </div>
                </form>
            </div>

        </x-slot:body>
    </x-modal>

</div>