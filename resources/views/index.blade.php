<x-layout>
  
   {{-- <div class="dotted-animation"></div> --}}
    {{-- <div class="moving-box"></div>
    <div class="rotating-box"></div> --}}

     <!-- 3D Cube -->
    <div class="absolute w-24 h-24 top-1/2 left-1/2 z-[-1]">
        <div class="cube">
            <div class="cube-face front bg-gradient-to-br from-blue-400 to-blue-600 rounded-[8px] shadow-lg"></div>
            <div class="cube-face back bg-gradient-to-br from-blue-400 to-blue-600 rounded-[8px] shadow-lg"></div>
            <div class="cube-face left bg-gradient-to-br from-blue-400 to-blue-600 rounded-[8px] shadow-lg"></div>
            <div class="cube-face right bg-gradient-to-br from-blue-400 to-blue-600 rounded-[8px] shadow-lg"></div>
            <div class="cube-face top bg-gradient-to-br from-blue-400 to-blue-600 rounded-[8px] shadow-lg"></div>
            <div class="cube-face bottom bg-gradient-to-br from-blue-400 to-blue-600 rounded-[8px] shadow-lg"></div>
        </div>
    </div>


    <main class="flex flex-col items-center mt-[12rem] fade-in ">

        <h1 class="text-3xl font-bold text-center">
            Find All the Study Materials You Need for
            <br />
            <span class=""
                style="color: #0057E9; text-shadow:  0 10px 12px 0 rgba(78, 75, 250, 0.1);">Unimaid</span>
            Fast and Free!
        </h1>

        {{-- main search bar --}}
        <div class="relative mt-8 w-full max-w-2xl search-container">
            <input
                class="w-full border-2 border-blue-500 shadow-lg rounded-full px-6 py-4 text-lg outline-none focus:ring-4 focus:ring-blue-100"
                placeholder="Search... GST 111" id="search-bar" type="text" />
            <button class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white rounded-full w-[48px] h-[48px]"
                style="background: #0057E9; box-shadow:  0 10px 12px 0 rgba(78, 75, 250, 0.1);">
                <i class="fas fa-search text-2xl">
                </i>
            </button>
            <div id="search-results" class="hidden mt-2 bg-white shadow-lg rounded-lg p-4"></div>
        </div>

        <div class="mt-8 text-center md:w-1/2" id="popular-materials">
            <h2 class="text-xl text-gray-800 heading-font">
                Popular Materials
            </h2>
            <div class="flex flex-wrap justify-center mt-4 gap-6">



                @if ($popularBooks->count() > 0)
                    @foreach ($popularBooks as $book)
                        <a href="/books/{{ $book->id }}">
                            <div
                                class="flex items-center space-x-2 border border-gray-200 px-4 py-2 rounded-full cursor-pointer hover:ring-2 hover:ring-blue-100">
                                <img alt="" class="w-8 h-8 rounded-full" height="40"
                                    src="{{ asset('\images/book_cover.png') }}" width="40" />
                                <span class="argent-font uppercase">
                                    {{ $book->course_code }}
                                </span>
                            </div>
                        </a>
                    @endforeach
                @else
                    <p>No popular books available at the moment.</p>
                @endif

            </div>
        </div>
        
        <div class="flex gap-2 mt-16">

            <div class="text-white p-6 rounded-2xl shadow-lg flex items-center justify-between max-w-4xl mx-auto text-sm"
                style="background: #0057E9; box-shadow:  0 10px 12px 0 rgba(78, 75, 250, 0.1);">
                <!-- Icon Section -->
                <div class="flex items-center space-x-4">
                    <div class="bg-blue-700 p-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-10 h-10 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 11c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5.455 15.455C4.03 16.88 4.03 19.12 5.455 20.545a4.007 4.007 0 005.455 0 4.007 4.007 0 015.455 0c1.425 1.425 3.667 1.425 5.092 0C21.97 19.12 21.97 16.88 20.545 15.455A4.007 4.007 0 0015.09 15c-1.425-1.425-3.667-1.425-5.092 0A4.007 4.007 0 005.455 15.455z" />
                        </svg>
                    </div>
                    <!-- Text Section -->
                    <div>
                        <h3 class="text-xl font-semibold">Resourcehub</h3>
                        <p class="text-sm">
                            We offer <span class="font-bold">Data</span>, <span class="font-bold">Airtime</span>, &
                            <span class="font-bold">Bills Services</span> at cheaper rates!
                        </p>
                    </div>
                </div>

                <!-- Button -->
                <button
                    class="bg-white text-blue-500 font-semibold py-2 px-6 rounded-full shadow-lg flex items-center hover:bg-blue-100">
                    <span class="mr-2">Buy Now</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14m-7-7l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

    </main>
</x-layout>
