@props(['title','modalName', 'width'])
<div x-data="{show : false, name : '{{ $modalName }}'}"
     x-show="show"
     x-on:open-modal.window = "show = ($event.detail.name === name)"
     x-on:close-modal.window = "show = false"
     x-on:keydown.escape.window = "show = false"
     x-transition
     style="display: none"

    class="fixed inset-0 z-50 px-3">
    <div @click="show = false" class="bg-gray-900 fixed inset-0 z-10 opacity-40"></div>
    <div class="bg-gray-800 z-50 fixed text-gray-900 {{ $width }} inset-0 m-auto h-3/4 rounded-xl overflow-hidden">
        <div class="flex py-2 px-3 bg-sky-500 text-white items-center">
            <h2 class="grow text-center font-semibold text-2xl">{{ $title }}</h2>
            <button @click="show = false" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600">X</button>
        </div>
        <div class="px-3 relative">
            {{ $body }}
        </div>
    </div>
</div>