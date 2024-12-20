<div class="w-full h-full">
    {{--Header--}}
    <header class="md:hidden sticky top-0 bg-white">
        <div class="grid grid-cols-12 gap-2 items-center">
            <div class="col-span-3 pl-5">
                𝕮
            </div>
            <div class="col-span-8 flex justify-center px-2">
                <input type="text" placeholder="search" class="border-0 outline-none w-full focus:outline-none
                    bg-gray-100 rounded-lg focus:ring-0 hover:ring-0">
            </div>
            <div class="col-span-1 flex justify-center">
                <a href="#">
                    <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.9" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                    </svg>
                    </span>
                </a>
            </div>
        </div>
    </header>
    {{--main--}}
    <main class="grid lg:grid-cols-12 gap-8 md:mt-10">
        <aside class="lg:col-span-8 overflow-hidden">
            {{--posts--}}
            <section class="mt-5 space-y-4 p-2">
                <livewire:post.item username="John" content="Lorem" hasText="1"/>
            </section>
        </aside>

        {{--suggestions--}}
        <aside class="lg:col-span-4 hidden lg:block p-4">
            <div class="flex items-center gap-2">
                <x-avatar class="w-12 h-12"/>
                <h4 class="font-medium">{{fake()->name}}</h4>
            </div>

            <section class="mt-4">
                <h4 class="font-bold text-gray-700/95">Suggestions for you</h4>
                <ul class="my-2 space-y-3">
                    @for($i=0;$i<5;$i++)
                        <li class="flex items-center gap-3">
                            <x-avatar src="https://cdn.discordapp.com/attachments/1080266016296288348/1319389611016851516/20240801_125606.jpg?ex=6765c8d4&is=67647754&hm=e051461efd98880f4c9d7746a83b0151e5321555f072e7d553c3c23348bb091d&" class="w-12 h-12"/>
                            <div class="grid grid-cols-7 w-full gap-2">
                                <div class="col-span-5">
                                    <h5 class="font-semibold truncate text-sm">
                                        {{fake()->name}}
                                    </h5>
                                    <p class="text-xs truncate">Followed by {{fake()->name}}</p>
                                </div>
                                <div class="col-span-2 flex text-right justify-end">
                                    <button class="font-bold text-blue-500 ml-auto text-sm">Follow</button>
                                </div>
                            </div>
                        </li>
                    @endfor
                </ul>
            </section>
        </aside>
    </main>
</div>
