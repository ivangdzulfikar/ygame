<div class=" text-white">
@if (session('loginsuccess'))
<div>
    <p class="text-3xl text-green-500">Success</p>
</div>
@endif
    <form wire:submit="submitLogin" action="">
        <div class="flex flex-col justify-center h-[26rem] gap-9 pt-6 ">

            <div class="px-6">
                <label class="text-base " for="username">Email</label>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 absolute opacity-80  mb-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                      </svg>
                      
                      <input wire:model.live="email" class="bg-transparent block w-full text-sm border-0 border-b-2 focus:border-b-sky-700 focus:ring-transparent pl-6 pb-3"
                      placeholder="Type your e-mail here" type="email">
                    </div>
                </div>
            <div class="px-6">
                <label class="text-base" for="password">Password</label>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 absolute opacity-80  mb-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                      </svg>
                      
                      
                      <input wire:model.live="password" class="bg-transparent block w-full text-sm border-0 border-b-2 focus:border-b-sky-700 focus:ring-transparent pl-6 pb-3"
                      placeholder="Type your password here" type="password">
                    </div>
                </div>
            <button type="submit" class="bg-sky-500 text-white py-2 rounded-full text-xl font-bold">Login</button>
        </div>
        <p class="text-sm ">Don't have account ? <a href="/registration" wire:navigate class="text-sky-700">Register Here</a></p>
    </form>
</div>