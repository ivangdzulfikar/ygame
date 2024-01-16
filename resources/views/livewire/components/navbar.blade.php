<nav  x-data="{nav : false}" 
class="bg-sky-500 flex items-center z-50 fixed inset-x-0 mx-auto px-8 py-3 md:py-0 gap-8 justify-between">
    <div class="text-4xl italic font-bold md:py-3 ">
        YGame
    </div>
    <div class="md:flex hidden justify-between grow ">
        <ul class="flex gap-3 items-center">
            <li>
                <a wire:navigate
                    class="text-lg md:text-base after:content-[''] after:border after:block  after:bg-white after:scale-x-0 md:hover:after:scale-x-50 hover:after:scale-x-[.08] after:origin-left md:after:origin-center after:transition duration-300 text-white 
                    {{ ($title === "Home") ? 'text-white after:scale-x-[.08] md:after:scale-x-50 after:origin-left font-bold' : 'text-gray-300 font-normal' }}" href="/">Home</a>
            </li>
            <li>
                <a wire:navigate
                    class="text-lg md:text-base after:content-[''] after:border after:block  after:bg-white after:scale-x-0 md:hover:after:scale-x-50 hover:after:scale-x-[.08] after:origin-left md:after:origin-center after:transition duration-300 text-white 
                    {{ ($title === "News") ? 'text-white after:scale-x-[.08] md:after:scale-x-50 after:origin-left font-bold' : 'text-gray-300 font-normal' }}"
                    href="/news">News</a>
            </li>
            <li>
                <a wire:navigate
                    class="text-lg md:text-base after:content-[''] after:border after:block  after:bg-white after:scale-x-0 md:hover:after:scale-x-50 hover:after:scale-x-[.08] after:origin-left md:after:origin-center after:transition duration-300 text-white 
                    {{ ($title === "Category") ? 'text-white after:scale-x-[.08] md:after:scale-x-50 after:origin-left font-bold' : 'text-gray-300 font-normal' }}"
                    href="/category">Category</a>
            </li>
        </ul>
        
        <div>
            <button x-data @click="$dispatch('open-modal',{name : 'loginModal'})"
                class="flex items-center gap-1 font-medium hover:text-gray-300 px-3 py-2 text-xl md:text-base">
                <x-entypo-login class="w-4 h-4" />Login
            </button>
        </div>
    </div>
    <div x-show="nav" 
    x-transition:enter="transition ease-out duration-300 origin-right"
    x-transition:enter-start="opacity-0 scale-x-90 "
    x-transition:enter-end="opacity-100 scale-x-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 scale-x-100"
    x-transition:leave-end="opacity-0 scale-x-90 origin-right"
    style="display: none"

    class="md:relative md:hidden  md:flex-row bg-sky-700 md:bg-inherit flex flex-col fixed inset-0 top-16 md:top-0 md:left-0 left-1/2 p-3 md:w-full w-1/2 md:items-center">
        <ul class="grow flex flex-col md:flex-row gap-3">
            <li>
                <a wire:navigate
                    class="text-lg md:text-base after:content-[''] after:border after:block  after:bg-white after:scale-x-0 md:hover:after:scale-x-50 hover:after:scale-x-[.08] after:origin-left md:after:origin-center after:transition duration-300 text-white 
                    {{ ($title === "Home") ? 'text-white after:scale-x-[.08] md:after:scale-x-50 after:origin-left font-bold' : 'text-gray-300 font-normal' }}" href="/">Home</a>
            </li>
            <li>
                <a wire:navigate
                    class="text-lg md:text-base after:content-[''] after:border after:block  after:bg-white after:scale-x-0 md:hover:after:scale-x-50 hover:after:scale-x-[.08] after:origin-left md:after:origin-center after:transition duration-300 text-white 
                    {{ ($title === "News") ? 'text-white after:scale-x-[.08] md:after:scale-x-50 after:origin-left font-bold' : 'text-gray-300 font-normal' }}"
                    href="/news">News</a>
            </li>
            <li>
                <a wire:navigate
                    class="text-lg md:text-base after:content-[''] after:border after:block  after:bg-white after:scale-x-0 md:hover:after:scale-x-50 hover:after:scale-x-[.08] after:origin-left md:after:origin-center after:transition duration-300 text-white 
                    {{ ($title === "Category") ? 'text-white after:scale-x-[.08] md:after:scale-x-50 after:origin-left font-bold' : 'text-gray-300 font-normal' }}"
                    href="/category">Category</a>
            </li>
        </ul>

        <div>
            <button x-data @click="$dispatch('open-modal',{name : 'loginModal'})"
                class="flex items-center gap-1 font-medium hover:text-gray-300 px-3 py-2 text-xl md:text-base">
                <x-entypo-login class="w-4 h-4" />Login
            </button>
        </div>
    </div>
    
        
    <div @click="nav = !nav" class="md:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>          
    </div>

</nav>