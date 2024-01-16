<div class=" text-white h-screen flex items-center">

    @if (session('success'))
        <p class="text-green-700">{{ session('success') }}</p>
    @endif
    <form wire:submit="createUser" action="" class="grow">
        <div class="flex flex-col w-2/5 mx-auto justify-center gap-2">

            <div class="px-6">
                <label class="text-base " for="name">Name</label>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 absolute opacity-80 mb-9">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                      </svg>
                      
                    <div class="grow  pb-8 relative">
                        <input wire:model.live="userForm.name"
                            class="bg-transparent block w-full text-sm border-0 @error('name') border-b-red-700 @enderror border-b-2 focus:border-b-sky-700 focus:ring-transparent pl-6 pb-3"
                            placeholder="Type your name here" type="text">
                        @error('userForm.name')
                        <p class="text-xs text-red-700 block absolute bottom-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="px-6">
                <label class="text-base " for="email">email</label>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 absolute opacity-80 mb-9">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                      </svg>
                      
                    <div class="grow  pb-8 relative">
                        <input wire:model.live="userForm.email"
                            class="bg-transparent block w-full text-sm border-0 @error('email') border-b-red-700 @enderror border-b-2 focus:border-b-sky-700 focus:ring-transparent pl-6 pb-3"
                            placeholder="Type your email here" type="email">
                        @error('userForm.email')
                        <p class="text-xs text-red-700 block absolute bottom-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            

            <div class="px-6">
                <label class="text-base " for="username">Username</label>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4 absolute opacity-80 mb-9">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    <div class="grow  pb-8 relative">
                        <input wire:model.live="userForm.username"
                            class="bg-transparent block w-full text-sm border-0 @error('username') border-b-red-700 @enderror border-b-2 focus:border-b-sky-700 focus:ring-transparent pl-6 pb-3"
                            placeholder="Type your username here" type="text">
                        @error('userForm.username')
                        <p class="text-xs text-red-700 block absolute bottom-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="px-6">
                <label class="text-base" for="password">Password</label>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4 absolute opacity-80  mb-9">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>


                    <div class="grow  pb-8 relative">
                        <input wire:model="userForm.password"
                            class="bg-transparent block w-full text-sm border-0 @error('password') border-b-red-700 @enderror border-b-2 focus:border-b-sky-700 focus:ring-transparent pl-6 pb-3"
                            placeholder="Type your password here" type="password">
                        @error('userForm.password')
                        <p class="text-xs text-red-700 block absolute bottom-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="bg-sky-500 text-white py-2 rounded-full text-xl font-bold">Sign Up</button>
        </div>
        <p class="text-sm text-center mt-8">Already have account ? <span x-data
                @click="$dispatch('open-modal',{name : 'loginModal'})" class="text-sky-700 hover:cursor-pointer hover:text-sky-800">Login Here</span></p>
    </form>
</div>