<x-layout>
    <div class="dotted-animation z-[-1]"></div>


    

    <main class="flex flex-col items-center mt-[12rem] fade-in relative">
        <div class="absolute inset-0 z-[-20]">
            <!-- Left Side -->
            <div class="absolute left-0 top-0 w-1/4 h-full bg-cover bg-left mix-blend-multiply opacity-50" 
                style="background-image: url('{{ asset('images/line-left.png') }}');">
            </div>
        
            <!-- Right Side -->
            <div class="absolute right-0 top-0 w-1/4 h-full bg-cover bg-right mix-blend-multiply opacity-50" 
                style="background-image: url('{{ asset('images/line-right.png') }}');">
            </div>
        </div>
       
</div>
        <img class="absolute w-[600px] h-[300px] z-[-4] top-0" src="{{ asset('images/blob.svg') }}" alt="">

        <h1 class="text-4xl font-bold text-gray-800 text-center" style="font-weight: 900;">
            Find, Share & Download<br>
            <span class=""
                style="color: #0057E9; text-shadow:  0 10px 12px 0 rgba(78, 75, 250, 0.1);">Unimaid</span> 
                 Materials Instantly!
        </h1>

        {{-- main search bar --}}
        <div class="relative mt-8 w-full max-w-2xl search-container">
            <div class="">
            <input
                class="w-full border-4 border-gradient-to-r from-blue-100 to-indigo-600 shadow-lg rounded-full px-6 py-4 text-lg outline-none focus:ring-4 focus:ring-blue-100"
                placeholder="Search course materials e.g., GST 111" id="search-bar" type="text" />
            <button
                class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white rounded-full w-[48px] h-[48px]"
                style="background: #0057E9; box-shadow:  0 10px 12px 0 rgba(78, 75, 250, 0.1);">
                <i class="fas fa-search text-2xl">
                </i>
            </button>
        </div>
    </div>
    <div id="search-results" class="hidden mt-2 bg-white shadow-lg rounded-lg p-4 w-full max-w-2xl"></div>

        <div class="mt-8 text-center md:w-1/2" id="popular-materials">
            <h2 class="text-xl text-gray-800 heading-font" style="font-weight: 600;">
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
                                <span class="uppercase text-gray-600" style="font-weight: 600;">
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
                        <h3 class="text-xl font-semibold">Edumaidvtu</h3>
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

    <div id="popup" class="fixed bottom-10 right-10 bg-white shadow-lg p-5 rounded-lg border border-gray-200 
    transform translate-y-10 opacity-0 transition-all duration-500 w-80">
    <div class="flex justify-between items-center">
        <h2 class="text-lg font-bold">Hey there! 🎉</h2>
        <button id="closePopup" class="text-gray-500 hover:text-gray-700">&times;</button>
    </div>
    <p class="text-sm text-gray-600 mt-2">Happy to see you, learn more. Keep going!</p>
</div>


<script>
window.addEventListener("scroll", () => {
    const popup = document.getElementById("popup");
    const scrollHeight = document.documentElement.scrollHeight;
    const scrollTop = document.documentElement.scrollTop;
    const clientHeight = document.documentElement.clientHeight;

    if (scrollTop > (scrollHeight - clientHeight) / 2) {
        popup.classList.remove("translate-y-10", "opacity-0");
        popup.classList.add("translate-y-0", "opacity-100");
    }
});

document.getElementById("closePopup").addEventListener("click", () => {
    document.getElementById("popup").classList.add("hidden");
});
</script>

    <x-footer>

    </x-footer>

</x-layout>
