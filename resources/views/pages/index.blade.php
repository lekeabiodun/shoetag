<x-layouts.app>
    <div class="">
        <section class="bg-gradient-to-t from-[#fbc2eb] to-[#a6c1ee] h-screen">
            <div class="search flex flex-col justify-center items-center w-full h-[90vh] px-2">
                <h1 class="font-bold md:text-[80px] text-[50px] text-gray-900 mb-3 font-mono">SHOETAG</h1>
                <form method="" class=" md:max-w-2xl sm:max-w-md max-w-sm mx-auto w-full">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none items-center">
                            <svg class="w-6 h-6 text-gray-600 dark:text-gray-600 font-bold" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-4 ps-12 h-19 text-[20px] text-gray-900 rounded-[10px] bg-white bg-white-50 shadow-xl dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-900 items-center outline-none z-[0] font-bold " placeholder="Search any product" required />
                    </div>
                </form>

            </div>
        </section>
        <div class="flex whitespace-nowrap items-center justify-center py-4 md:py-8">
            <button type="button" class=" px-5 py-2.5 text-white text-center me-3 mb-3 font-bold border-[2px] rounded-full active current:bg-blue-400 content" id="all" onclick="showAll()">All categories</button>
            <button type="button" class=" px-5 py-2.5 text-center me-3 mb-3 font-bold border-[2px] rounded-full" id="shoe" onclick="showShoe()">Heels</button>
            <button type="button" class=" px-5 py-2.5 text-center me-3 mb-3 font-bold border-[2px] rounded-full" id="heel" onclick="showHeels()">Sneakers</button>
        </div>
        <div class="">
            <div id="shoes" class="grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3 xs:grid-cols-2 gap-3 mb-7 px-5 gallery">
                <a href="/heelproductdetails" class="px-2 py-2 cursor-pointer duration-300 shadow hover:shadow-xl rounded-2xl bg-white md:block border">
                    <div class="relative h-[250px]">
                        <img src="{{ url('image/heel/heel (1).jpeg') }}" alt="" class="w-full h-[250px] rounded-xl absolute">
                        <p class="bg-pink-200 font-semibold text-yellow-600 text-md p-1 absolute top-[10px] right-[10px]">
                            -50%</p>

                    </div>
                    <h1 class="pt-1 text-xl">Heels</h1>
                    <p class="font-bold text-[30px]">$12,000</p>
                </a>
                <a href="#" class="px-2 py-2 cursor-pointer duration-300 shadow hover:shadow-xl rounded-2xl bg-white md:block border">
                    <div class="relative h-[250px]">
                        <img src="{{ url('img/heels/heel (5).jpeg') }}" alt="" class="w-full h-[250px] rounded-xl absolute">
                        <p class="bg-pink-200 font-semibold text-yellow-600 text-md p-1 absolute top-[10px] right-[10px]">
                            -50%</p>

                    </div>
                    <h1 class="pt-1 text-xl">Heels</h1>
                    <p class="font-bold text-[30px]">$12,000</p>
                </a>
                <a href="#" class="px-2 py-2 cursor-pointer duration-300 shadow hover:shadow-xl rounded-2xl bg-white md:block border">
                    <div class="relative h-[250px]">
                        <img src="{{ url('img/heels/heel (2).jpeg') }}" alt="" class="w-full h-[250px] rounded-xl absolute">
                        <p class="bg-pink-200 font-semibold text-yellow-600 text-md p-1 absolute top-[10px] right-[10px]">
                            -50%</p>

                    </div>
                    <h1 class="pt-1 text-xl">Heels</h1>
                    <p class="font-bold text-[30px]">$12,000</p>
                </a>
                <a href="#" class="px-2 py-2 cursor-pointer duration-300 shadow hover:shadow-xl rounded-2xl bg-white md:block border">
                    <div class="relative h-[250px]">
                        <img src="{{ url('img/heels/heel (12).jpeg') }}" alt="" class="w-full h-[250px] rounded-xl absolute">
                        <p class="bg-pink-200 font-semibold text-yellow-600 text-md p-1 absolute top-[10px] right-[10px]">
                            -50%</p>

                    </div>
                    <h1 class="pt-1 text-xl">Heels</h1>
                    <p class="font-bold text-[30px]">$12,000</p>
                </a>
                <a href="#" class="px-2 py-2 cursor-pointer duration-300 shadow hover:shadow-xl rounded-2xl bg-white md:block border">
                    <div class="relative h-[250px]">
                        <img src="{{ url('img/heels/heel (4).jpeg') }}" alt="" class="w-full h-[250px] rounded-xl absolute">
                        <p class="bg-pink-200 font-semibold text-yellow-600 text-md p-1 absolute top-[10px] right-[10px]">
                            -50%</p>

                    </div>
                    <h1 class="pt-1 text-xl">Heels</h1>
                    <p class="font-bold text-[30px]">$12,000</p>
                </a>
            </div>
            <div id="heels" class="grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3 xs:grid-cols-2 gap-3 mb-7 px-3 gallery">
                <a href="/sneakerproductdetails" class="px-2 py-2 cursor-pointer duration-300 shadow hover:shadow-xl rounded-2xl bg-white border">
                    <div class="relative h-[250px]">
                        <img src="{{ url('img/sneakers/sneakers (2).jpeg') }}" alt="" class="w-full h-[250px] rounded-xl absolute">
                        <p class="bg-pink-200 font-semibold text-yellow-600 text-md p-1 absolute top-[10px] right-[10px]">
                            -50%</p>

                    </div>
                    <h1 class="pt-1 text-xl">Heels</h1>
                    <p class="font-bold text-[30px]">$12,000</p>
                </a>
                <a href="#" class="px-2 py-2 cursor-pointer duration-300 shadow hover:shadow-xl rounded-2xl bg-white border">
                    <div class="relative h-[250px]">
                        <img src="{{ url('img/sneakers/sneakers (1).jpeg') }}" alt="" class="w-full h-[250px] rounded-xl absolute">
                        <p class="bg-pink-200 font-semibold text-yellow-600 text-md p-1 absolute top-[10px] right-[10px]">
                            -50%</p>

                    </div>
                    <h1 class="pt-1 text-xl">Heels</h1>
                    <p class="font-bold text-[30px]">$12,000</p>
                </a>
                <a href="#" class="px-2 py-2 cursor-pointer duration-300 shadow hover:shadow-xl rounded-2xl bg-white border">
                    <div class="relative h-[250px]">
                        <img src="{{ url('img/sneakers/sneakers (5).jpeg') }}" alt="" class="w-full h-[250px] rounded-xl absolute">
                        <p class="bg-pink-200 font-semibold text-yellow-600 text-md p-1 absolute top-[10px] right-[10px]">
                            -50%</p>

                    </div>
                    <h1 class="pt-1 text-xl">Heels</h1>
                    <p class="font-bold text-[30px]">$12,000</p>
                </a>
                <a href="#" class="px-2 py-2 cursor-pointer duration-300 shadow hover:shadow-xl rounded-2xl bg-white border">
                    <div class="relative h-[250px]">
                        <img src="{{ url('img/sneakers/sneakers (11).jpeg') }}" alt="" class="w-full h-[250px] rounded-xl absolute">
                        <p class="bg-pink-200 font-semibold text-yellow-600 text-md p-1 absolute top-[10px] right-[10px]">
                            -50%</p>

                    </div>
                    <h1 class="pt-1 text-xl">Heels</h1>
                    <p class="font-bold text-[30px]">$12,000</p>
                </a>
                <a href="#" class="px-2 py-2 cursor-pointer duration-300 shadow hover:shadow-xl rounded-2xl bg-white border">
                    <div class="relative h-[250px]">
                        <img src="{{ url('img/sneakers/sneakers (9).jpeg') }}" alt="" class="w-full h-[250px] rounded-xl absolute">
                        <p class="bg-pink-200 font-semibold text-yellow-600 text-md p-1 absolute top-[10px] right-[10px]">
                            -50%</p>

                    </div>
                    <h1 class="pt-1 text-xl">Heels</h1>
                    <p class="font-bold text-[30px]">$12,000</p>
                </a>
            </div>
        </div>


    </div>
</x-layouts.app>