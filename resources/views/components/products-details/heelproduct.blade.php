<x-layouts.app>
    <div class="section">
        <section class="py-10 bg-[#f2f2f2]">
            <div class="flex lg:gap-10 md:gap-5 lg:px-20 md:px-7 sm:px-5 px-3 justify-center">
                <div class="h-full md:w-[70%]">
                    <div class="bg-white border sm:px-10 px-3 rounded-2xl py-3">
                        <p class="font-bold capitalize text-2xl py-5">black heels</p>
                        <div class="pictures relative lg:h-[60vh] md:h-[55vh] h-[50vh]">
                            <img src="{{ url('image/heel/heel (1).jpeg') }}" alt="" srcset="" class="w-full lg:h-[60vh] md:h-[55vh] h-[50vh] mb-4 rounded-2xl absolute" id="firstheel">
                            <img src="{{ url('image/heel/heel (2).jpeg') }}" alt="" srcset="" class="w-full lg:h-[60vh] md:h-[55vh] h-[50vh] mb-4 rounded-2xl absolute" style="display: none;" id="secondheel">
                            <img src="{{ url('image/heel/heel (3).jpeg') }}" alt="" srcset="" class="w-full lg:h-[60vh] md:h-[55vh] h-[50vh] mb-4 rounded-2xl absolute" style="display: none;" id="thirdheel">
                            <img src="{{ url('image/heel/heel (4).jpeg') }}" alt="" srcset="" class="w-full lg:h-[60vh] md:h-[55vh] h-[50vh] mb-4 rounded-2xl absolute" style="display: none;" id="fourthheel">
                        </div>
                        <div class="flex whitespace-nowrap items-center justify-center py-4 md:py-8">
                            <button type="button" class="me-3 mb-3 content rounded-xl active current:border current:border-black" id="first" onclick="firstHeel()">
                                <img src="{{ url('image/heel/heel (1).jpeg') }}" alt="" srcset="" class="w-[80px] h-[70px] rounded-xl">
                            </button>
                            <button type="button" class=" me-3 mb-3 content rounded-xl" id="second" onclick="secondHeel()">
                                <img src="{{ url('image/heel/heel (2).jpeg') }}" alt="" srcset="" class="w-[80px] h-[70px] rounded-xl">
                            </button>
                            <button type="button" class="  me-3 mb-3 content rounded-xl" id="third" onclick="thirdHeel()">
                                <img src="{{ url('image/heel/heel (3).jpeg') }}" alt="" srcset="" class="w-[80px] h-[70px] rounded-xl">
                            </button>
                            <button type="button" class="  me-3 mb-3 content rounded-xl" id="fourth" onclick="fourthHeel()">
                                <img src="{{ url('image/heel/heel (4).jpeg') }}" alt="" srcset="" class="w-[80px] h-[70px] rounded-xl">
                            </button>
                        </div>
                        <hr>
                        <p class="py-3 sm:text-xl text-mdw font-medium uppercase">
                            Women Shoes Sandals Heels Ladies Shoes Casual Shoes
                        </p>
                        <hr>
                        <div class="px-2 py-3 md:hidden block">
                            <p class="flex lg:py-2 py-1 items-center justify-end">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="w-4 h-4 font-medium mr-1" viewBox="0 0 256 256" xml:space="preserve">
                                    <defs>
                                    </defs>
                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                        <path d="M 45 90 c -0.354 0 -0.681 -0.187 -0.861 -0.491 l -4.712 -7.972 C 30.222 65.976 20.704 49.884 17.64 43.734 c -2.033 -4.169 -3.062 -8.646 -3.062 -13.313 C 14.578 13.647 28.225 0 45 0 c 16.774 0 30.422 13.647 30.422 30.422 c 0 4.664 -1.028 9.141 -3.056 13.305 c -0.012 0.023 -0.023 0.045 -0.036 0.067 c -3.095 6.193 -12.581 22.231 -21.757 37.743 l -4.712 7.972 C 45.681 89.813 45.354 90 45 90 z M 45 2 C 29.328 2 16.578 14.75 16.578 30.422 c 0 4.359 0.96 8.542 2.854 12.43 c 3.027 6.073 12.522 22.126 21.705 37.649 L 45 87.035 l 3.853 -6.517 c 9.187 -15.531 18.686 -31.591 21.717 -37.676 c 0.009 -0.017 0.018 -0.033 0.026 -0.049 c 1.875 -3.874 2.826 -8.036 2.826 -12.372 C 73.422 14.75 60.672 2 45 2 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 45 42.436 c -7.279 0 -13.2 -5.922 -13.2 -13.201 s 5.921 -13.2 13.2 -13.2 c 7.278 0 13.2 5.921 13.2 13.2 S 52.278 42.436 45 42.436 z M 45 18.035 c -6.176 0 -11.2 5.024 -11.2 11.2 c 0 6.176 5.024 11.201 11.2 11.201 s 11.2 -5.024 11.2 -11.201 C 56.2 23.059 51.176 18.035 45 18.035 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    </g>
                                </svg>
                                <span class="font-medium">Nigeria</span>
                            </p>
                            <hr>
                            <p class="sm:text-lg text-md font-medium py-2">Delivery and return</p>
                            <hr>
                            <p class="uppercase text-red-700 font-bold sm:text-xl text-lg pt-2">ngn <span class="sm:text-3xl text-2xl">17,122</span><span>.70</span></p>
                            <p class=" font-bold "><span class="line-through sm:text-2xl text-lg">NGN34,245.40</span> <span class="bg-pink-200 text-yellow-600 sm:text-lg text-sm ml-2">-50%</span></p>
                            <hr>
                            <div class="bg-gray-200 md:h-md lg:h-lg sm:w-[15em] xs:w-[20em] lg:my-3 my-2 text-center py-2 rounded">
                                <p class="text-yellow-500"><span class="sm:text-3xl text-2xl font-bold">4</span><span class="sm:text-3xl text-2xl font-small">/5</span></p>
                                <div class="star flex py-3 justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="lg:h-6 lg:w-6 h-5 w-5 fill-yellow-500">
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="lg:h-6 lg:w-6 h-5 w-5 fill-yellow-500">
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="lg:h-6 lg:w-6 h-5 w-5 fill-yellow-500">
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="lg:h-6 lg:w-6 h-5 w-5 fill-yellow-500">
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="lg:h-6 lg:w-6 h-5 w-5 fill-gray-400">
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>
                            </div>
                            <button class="py-2 text-center sm:w-[15em] xs:w-[20em] w-full bg-yellow-600 sm:mt-3 mt-2 rounded-lg font-medium text-white uppercase flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 256 256" xml:space="preserve" class="lg:w-8 lg:h-8 w-5 h-5 ml-3 mr-6">

                                    <defs>
                                    </defs>
                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                        <path d="M 72.975 58.994 H 31.855 c -1.539 0 -2.897 -1.005 -3.347 -2.477 L 15.199 13.006 H 3.5 c -1.933 0 -3.5 -1.567 -3.5 -3.5 s 1.567 -3.5 3.5 -3.5 h 14.289 c 1.539 0 2.897 1.005 3.347 2.476 l 13.309 43.512 h 36.204 l 10.585 -25.191 h -6.021 c -1.933 0 -3.5 -1.567 -3.5 -3.5 s 1.567 -3.5 3.5 -3.5 H 86.5 c 1.172 0 2.267 0.587 2.915 1.563 s 0.766 2.212 0.312 3.293 L 76.201 56.85 C 75.655 58.149 74.384 58.994 72.975 58.994 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <circle cx="28.88" cy="74.33" r="6.16" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) " />
                                        <circle cx="74.59" cy="74.33" r="6.16" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) " />
                                        <path d="M 62.278 19.546 H 52.237 V 9.506 c 0 -1.933 -1.567 -3.5 -3.5 -3.5 s -3.5 1.567 -3.5 3.5 v 10.04 h -10.04 c -1.933 0 -3.5 1.567 -3.5 3.5 s 1.567 3.5 3.5 3.5 h 10.04 v 10.04 c 0 1.933 1.567 3.5 3.5 3.5 s 3.5 -1.567 3.5 -3.5 v -10.04 h 10.041 c 1.933 0 3.5 -1.567 3.5 -3.5 S 64.211 19.546 62.278 19.546 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    </g>
                                </svg><span class="lg:mt-1 md:-mt-1">add to chart</span>
                            </button>
                        </div>
                        <p></p>
                    </div>
                    <div class="bg-white border px-10 rounded-2xl py-4 mt-4">
                        <p class="font-semibold capitalize sm:text-2xl text-xl py-2">product details</p>
                        <hr>
                        <p class="font-bold sm:text-lg text-md py-4">Welcome to SHOETAG</p>
                        <p class="lg:text-lg sm:text-md text-xs ">Dear customer, welcome to SHOETAG store. Thank you for your love for our products.
                        <p class="lg:text-lg sm:text-md text-xs pt-4">SHOETAG focuses on African Fashion and is committed to providing you with better products, fashionable designs and higher quality services.
                        <p class="lg:text-lg sm:text-md text-xs pt-4">We provide varieties of fashion products with diverse patterns and styles. Whether you are looking for fashion heels, sneakers, or boots, you can always find what you need in our store.
                        <p class="lg:text-lg sm:text-md text-xs pt-4">This product you are currently browsing is fashionable, practical and cost-effective, making it to be a must-have one. At the same time, you can also click on the store name to enter our store and explore more fashionable surprises.
                        <p class="lg:text-lg sm:text-md text-xs pt-4">Now, we will introduce more details of this product for you.
                        <p class="lg:text-lg sm:text-md text-xs pt-4">Let's start your fashion journey at SHOETAG right now!</p>
                        <p class="font-bold capitalize pt-5 sm:text-2xl text-xl">product details</p>
                        <p class="lg:text-lg sm:text-md text-xs pt-3">Upper Material: PU(Artificial leather)</p>

                        <p class="lg:text-lg sm:text-md text-xs pt-3">Inner Material: PU(Artificial leather)</p>

                        <p class="lg:text-lg sm:text-md text-xs pt-3">Sole: Synthetic</p>

                        <p class="lg:text-lg sm:text-md text-xs pt-3">Heel Type: Chunky heel</p>

                        <p class="lg:text-lg sm:text-md text-xs pt-3">Heel Height: 5.5cm</p>

                        <p class="lg:text-lg sm:text-md text-xs pt-3">Closure Type: Hook and loop</p>

                        <p class="lg:text-lg sm:text-md text-xs pt-3">Style: Fashion</p>

                        <p class="lg:text-lg sm:text-md text-xs pt-3">Features: Classic; Elegant</p>
                        <p class="font-bold capitalize pt-5 sm:text-2xl text-xl">about us</p>
                        <p class="lg:text-lg sm:text-md text-xs pt-3">SHOETAG focuses on African Fashion and is committed to providing fashion products exclusive to African consumers. We have an independent designer team and many factories. Through investigating in African consumers and continuous updating our patterns and styles, we launched a series of high -quality fashion products, which are conform to the usage habits and fashion concepts of African consumers.</p>
                        <p class="lg:text-lg sm:text-md text-xs pt-3">At present, our products have been sold in more than 5 countries in Africa, winning a good reputation and earning highly favor from African consumers.</p>
                        <p class="lg:text-lg sm:text-md text-xs pt-3">Blindly following the trend is not fashion. By choosing our products, whether sneakers, heels or boots, you can always find your own fashion shoe. You are the trend itself and do not need to be defined.</p>
                        <p class="lg:text-lg sm:text-md text-xs pt-3">Providing products that satisfy consumers is our ultimate pursuit. Your satisfaction and positive feedback are of great significance to us. If you like our products, please give us a five-star rating, which will encourage us to continue providing high-quality products and services. If you have any questions during the purchasing process, feel free to contact us at anytime. We will do our best to solve your problem.</p>
                        <p class="lg:text-lg sm:text-md text-xs pt-3">Thank you again for choosing our product. Wishing you a pleasant shopping experience at SHOETAG!</p>
                    </div>
                    <div class="bg-white border sm:px-10 px-2 rounded-2xl py-4 mt-4">
                        <p class="font-semibold capitalize sm:text-2xl text-xl py-2 mb-4">specifications</p>
                        <!-- <hr> -->
                        <div class="grid md:grid-cols-2 grid-cols-1 gap-3">
                            <div class="">
                                <div class="w-full py-3 px-4 uppercase font-medium border rounded-t-lg">KEY FEATURES</div>
                                <div class="w-full py-4 h-[30vh] px-7 border capitalize rounded-b-lg">
                                    <ul class="list-disc">
                                        <li class="pt-2">Color : Black/Gold</li>
                                        <li class="pt-2">Formal/casual dress shoe</li>
                                        <li class="pt-2">High quality
                                        </li>
                                        <li class="pt-2">Firmly stoned</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="">
                                <div class="w-full py-3 px-4 uppercase font-medium border rounded-t-lg">what's in the box</div>
                                <div class="w-full py-4 h-[30vh] px-4 border capitalize rounded-b-lg">
                                    <ul>
                                        <li>A single pair of shoes</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="">
                                <div class="w-full py-3 px-4 uppercase font-medium border rounded-t-lg ">specifications</div>
                                <div class="w-full py-4 px-4 border capitalize rounded-b-lg">
                                    <p class="pt-1 lg:text-lg md:text-xs sm:text-lg text-xs"><span class="font-bold">SKU:</span><span> FA203FS3LW4QCNAFAMZ</span></p>
                                    <p class="pt-2 lg:text-lg md:text-xs sm:text-lg text-xs"><span class="font-bold">Product Line:</span> <span> Dbkay Ventures</span></p>
                                    <p class="pt-2 lg:text-lg md:text-xs sm:text-lg text-xs"><span class="font-bold">Model:</span><span> NA</span></p>
                                    <p class="pt-2 lg:text-lg md:text-xs sm:text-lg text-xs"><span class="font-bold">Size (L x W x H cm)</span><span>: NA</span></p>
                                    <p class="pt-2 lg:text-lg md:text-xs sm:text-lg text-xs"><span class="font-bold">Weight (kg)</span><span>: 0.5</span></p>
                                    <p class="pt-2 lg:text-lg md:text-xs sm:text-lg text-xs"><span class="font-bold">Color</span><span>: Black</span></p>
                                    <p class="pt-2 lg:text-lg md:text-xs sm:text-lg text-xs"><span class="font-bold">Main Material</span><span>: Leather</span></p>
                                    <p class="pt-2 lg:text-lg md:text-xs sm:text-lg text-xs"><span class="font-bold">Shop Type</span><span>: Jumia Mall</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white h-full xl:w-[20%] lg:w-[30%] md:w-[30%] border rounded-2xl sticky top-20 md:block hidden">
                    <div class="">
                        <img src="{{ url('image/heel/heel (1).jpeg') }}" alt="" srcset="" class="w-full h-[150px] rounded-t-2xl">
                        <div class="px-2 py-3">
                            <p class="flex lg:py-2 py-1 items-center justify-end">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="w-4 h-4 font-medium mr-1" viewBox="0 0 256 256" xml:space="preserve">
                                    <defs>
                                    </defs>
                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                        <path d="M 45 90 c -0.354 0 -0.681 -0.187 -0.861 -0.491 l -4.712 -7.972 C 30.222 65.976 20.704 49.884 17.64 43.734 c -2.033 -4.169 -3.062 -8.646 -3.062 -13.313 C 14.578 13.647 28.225 0 45 0 c 16.774 0 30.422 13.647 30.422 30.422 c 0 4.664 -1.028 9.141 -3.056 13.305 c -0.012 0.023 -0.023 0.045 -0.036 0.067 c -3.095 6.193 -12.581 22.231 -21.757 37.743 l -4.712 7.972 C 45.681 89.813 45.354 90 45 90 z M 45 2 C 29.328 2 16.578 14.75 16.578 30.422 c 0 4.359 0.96 8.542 2.854 12.43 c 3.027 6.073 12.522 22.126 21.705 37.649 L 45 87.035 l 3.853 -6.517 c 9.187 -15.531 18.686 -31.591 21.717 -37.676 c 0.009 -0.017 0.018 -0.033 0.026 -0.049 c 1.875 -3.874 2.826 -8.036 2.826 -12.372 C 73.422 14.75 60.672 2 45 2 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 45 42.436 c -7.279 0 -13.2 -5.922 -13.2 -13.201 s 5.921 -13.2 13.2 -13.2 c 7.278 0 13.2 5.921 13.2 13.2 S 52.278 42.436 45 42.436 z M 45 18.035 c -6.176 0 -11.2 5.024 -11.2 11.2 c 0 6.176 5.024 11.201 11.2 11.201 s 11.2 -5.024 11.2 -11.201 C 56.2 23.059 51.176 18.035 45 18.035 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    </g>
                                </svg>
                                <span class="font-medium">Nigeria</span>
                            </p>
                            <hr>
                            <p class="lg:text-lg text-sm font-medium py-2">Delivery and return</p>
                            <hr>
                            <p class="uppercase text-red-700 font-bold sm:text-md md:text-lg lg:text-2xl pt-2">ngn <span class="sm:text-xl md:text-2xl lg:text-4xl">17,122</span><span>.70</span></p>
                            <p class=" font-bold "><span class="line-through sm:text-md md:text-lg lg:text-xl">NGN34,245.40</span> <span class="bg-pink-200 text-yellow-600 lg:text-md md:text-xs ml-2">-50%</span></p>
                            <hr>
                            <div class="bg-gray-200 md:h-md lg:h-lg w-full lg:my-3 my-2 text-center lg:py-2 rounded">
                                <p class="text-yellow-500"><span class="md:text-3xl lg:text-5xl font-bold">4</span><span class="md:text-3xl lg:text-5xl font-small">/5</span></p>
                                <div class="star flex py-3 justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="lg:h-6 lg:w-6 h-5 w-5 fill-yellow-500">
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="lg:h-6 lg:w-6 h-5 w-5 fill-yellow-500">
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="lg:h-6 lg:w-6 h-5 w-5 fill-yellow-500">
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="lg:h-6 lg:w-6 h-5 w-5 fill-yellow-500">
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="lg:h-6 lg:w-6 h-5 w-5 fill-gray-400">
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>
                            </div>
                            <button class="py-2 text-center w-full bg-yellow-600 lg:mt-5 mt-2 rounded-lg font-medium text-white uppercase flex">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 256 256" xml:space="preserve" class="lg:w-8 lg:h-8 w-5 h-5 ml-3 mr-6">

                                    <defs>
                                    </defs>
                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                        <path d="M 72.975 58.994 H 31.855 c -1.539 0 -2.897 -1.005 -3.347 -2.477 L 15.199 13.006 H 3.5 c -1.933 0 -3.5 -1.567 -3.5 -3.5 s 1.567 -3.5 3.5 -3.5 h 14.289 c 1.539 0 2.897 1.005 3.347 2.476 l 13.309 43.512 h 36.204 l 10.585 -25.191 h -6.021 c -1.933 0 -3.5 -1.567 -3.5 -3.5 s 1.567 -3.5 3.5 -3.5 H 86.5 c 1.172 0 2.267 0.587 2.915 1.563 s 0.766 2.212 0.312 3.293 L 76.201 56.85 C 75.655 58.149 74.384 58.994 72.975 58.994 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <circle cx="28.88" cy="74.33" r="6.16" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) " />
                                        <circle cx="74.59" cy="74.33" r="6.16" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) " />
                                        <path d="M 62.278 19.546 H 52.237 V 9.506 c 0 -1.933 -1.567 -3.5 -3.5 -3.5 s -3.5 1.567 -3.5 3.5 v 10.04 h -10.04 c -1.933 0 -3.5 1.567 -3.5 3.5 s 1.567 3.5 3.5 3.5 h 10.04 v 10.04 c 0 1.933 1.567 3.5 3.5 3.5 s 3.5 -1.567 3.5 -3.5 v -10.04 h 10.041 c 1.933 0 3.5 -1.567 3.5 -3.5 S 64.211 19.546 62.278 19.546 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    </g>
                                </svg><span class="lg:mt-1 md:-mt-1">add to chart</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        var firstheel = document.getElementById("firstheel");
        var secondheel = document.getElementById("secondheel");
        var thirdheel = document.getElementById("thirdheel");
        var fourthheel = document.getElementById('fourthheel');

        function firstHeel() {
            if (firstheel.style.display = "none", firstheel.style.border = "none") {
                firstheel.style.display = "block",
                    secondheel.style.display = "none",
                    thirdheel.style.display = "none",
                    fourthheel.style.display = "none"
                first.style.border = "1px solid #000000"
                second.style.border = "none"
                third.style.border = "none"
                fourth.style.border = "none"
            } else {
                firstheel.style.display = "none"
            }
        }

        function secondHeel() {
            if (secondheel.style.display = "none", secondheel.style.border = "none") {
                secondheel.style.display = "block",
                    firstheel.style.display = "none",
                    thirdheel.style.display = "none",
                    fourthheel.style.display = "none"
                first.style.border = "none"
                second.style.border = "1px solid #000000"
                third.style.border = "none"
                fourth.style.border = "none"
            } else {
                secondheel.style.display = "none"
            }
        }

        function thirdHeel() {
            if (thirdheel.style.display = "none") {
                thirdheel.style.display = "block",
                    firstheel.style.display = "none",
                    secondheel.style.display = "none",
                    fourthheel.style.display = "none"
                first.style.border = "none"
                second.style.border = "none"
                third.style.border = "1px solid #000000"
                fourth.style.border = "none"
            } else {
                thirdheel.style.display = "none"
            }
        }

        function fourthHeel() {
            if (fourthheel.style.display = "none") {
                fourthheel.style.display = "block",
                    firstheel.style.display = "none",
                    secondheel.style.display = "none",
                    thirdheel.style.display = "none"
                first.style.border = "none"
                second.style.border = "none"
                third.style.border = "none"
                fourth.style.border = "1px solid #000000"
            } else {
                fourthheel.style.display = "none"
            }
        }



        // function showHeels() {
        //     document.getElementsByClassName("active").current = 'false';
        // }
        // function onToggleMenu(e){
        //     const navLinks = document.querySelector('.nav-links')
        //     e.name = e.name === 'menu' ? 'close' : 'menu'
        //     if (navLinks.style.display == 'flex') {
        //         navLinks.style.display = 'none'
        //     }else{
        //         navLinks.style.display = 'flex'
        //     }
        // }
    </script>
</x-layouts.app>