<x-dash-layout>

    <!--=======================Welcome Bannner====================-->
    <div class="welcome-banner bg-blue-500 text-white p-6 rounded-[15px] mb-8 flex flex-col md:flex-row justify-between items-center relative z-[1]"
        style="box-shadow: 0px 6px 12px -5px rgb(61, 44, 255);">
        <div class="mb-4 md:mb-0">
            <p class="text-sm">
                Febuary 4, 2025
            </p>
            <h1 class="text-2xl font-bold">
                Welcome back,
                @if (Auth::check())
                    {{ Auth::user()->email }}
                @endif

            </h1>
            <p class="text-sm">
                Be ahead of your colleagues with unlimited resources
            </p>
        </div>
        <img alt="Welcome Image" class="w-[10rem] h-[11rem] absolute bottom-0 right-8 z-[-1] md:z-[1] "
            src="{{ asset('images/welcome3.svg') }}">
    </div>


    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- AI Section -->
        <div class="col-span-1 lg:col-span-2 bg-white p-6 rounded-[15px] ">
            <h2 class="p-4">Get your Assignment,Project or Assistance done! with Chatgpt</h2>
            <div class="flex h-auto bg-white border rounded-[15px]">

                <div class="flex flex-col h-[80vh] w-full rounded-[15px]" style="background-color: rgb(248, 248, 250);">
                    <!-- Chat Messages -->
                    <div id="chat-messages" class="flex-1 overflow-y-auto p-4 space-y-4 custom-scrollbar">
                        <!-- AI Message -->
                        <div class="flex items-start gap-3 group relative">

                            <div class="bg-gray-100 text-gray-800 p-3 rounded-3xl max-w-md relative">
                                <p class="ai-response">Hello! How can I assist you today?</p>


                            </div>
                        </div>


                    </div>

                    <!-- Input Area -->
                    <div class="m-2 flex items-center rounded-[15px] flex-col relative"
                        style="background-color: rgb(238, 238, 250);">
                        <!-- Input Field -->
                        <div class="flex-1 relative w-full bg-transparent h-auto rounded-t-3xl">
                            <textarea id="user-input" type="text" placeholder="Search anything (e.g...  Project topics for computer science...)"
                                class="w-full px-3 py-1 outline-none bg-transparent h-full rounded-inherit"
                                style="textarea::-webkit-scrollbar{visibility: hidden;}"></textarea>
                        </div>

                        <!--input bttons-->
                        <div
                            class="input-buttons flex justify-between w-full bottom-2 px-2 bg-transparent rounded-b-3xl">
                            <div>
                                <!-- Emoji Button -->
                                <button class="p-2 text-gray-500 hover:text-blue-500">
                                    <i class="fas fa-smile text-xl"></i>
                                </button>

                                <!-- File Upload -->
                                <button class="p-2 text-gray-500 hover:text-blue-500">
                                    <i class="fas fa-paperclip text-xl"></i>
                                </button>
                            </div>

                            <!-- Send Button -->
                            
                            <button id="send-button"
                                class="bg-blue-500 text-white p-3 rounded-full hover:bg-blue-600 transition">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>




                    </div>
                </div>


            </div>

        </div>


        <!-- Popular Section -->
        <div class="bg-white p-6 rounded-[15px] shadow-lg">
            <h2 class="text-xl font-semibold mb-4 text-gray-800">
                Popular materials
            </h2>

            <div class="space-y-4">
                <!-- Single Material Item -->
                @if ($popularBooks->count() > 0)
                    @foreach ($popularBooks as $book)
                        <div
                            class="group flex items-center justify-between p-3 border border-gray-200 rounded-lg transition-all duration-300 hover:shadow-md hover:-translate-y-1">
                            <div>
                                <p
                                    class="text-sm font-medium uppercase text-gray-700 group-hover:text-blue-600 transition-all duration-300">
                                    {{ $book->course_code }}</p>
                                <p class="text-sm capitalize text-gray-500 group-hover:text-gray-800 transition-all duration-300">
                                    {{ $book->course_title }}</p>
                            </div>
                            <a href="/books/{{ $book->id }}">
                                <button
                                    class="bg-red-500 text-white text-sm px-3 py-1 rounded-lg transition-all duration-300 transform scale-100 hover:bg-red-600 hover:scale-105">
                                    View
                                </button>
                            </a>
                        </div>
                    @endforeach
                @else
                    <p>No popular books available at the moment.</p>
                @endif

            </div>
        </div>
    </div>


    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
        <!-- New Uploads Section -->
        <div class="bg-white p-6 rounded-[15px] shadow-lg">
            <h2 class="text-xl font-semibold mb-4 text-gray-800">
                New materials
            </h2>
            <div class="bg-blue-500 p-4 rounded-[8px] text-white mb-4">
                <h3 class="text-lg font-semibold">
                    E-Learning
                </h3>
                <p class="text-sm">
                    Made easy with EduMaid
                </p>
            </div>
            <div class="space-y-4">
                <!-- Single Material Item -->
                <div
                    class="group flex items-center justify-between p-3 border border-gray-200 rounded-lg transition-all duration-300 hover:bg-gray-100">
                    <div>
                        <p
                            class="text-sm font-medium text-gray-700 group-hover:text-blue-600 transition-all duration-300">
                            MTH</p>
                        <p class="text-sm text-gray-500 group-hover:text-gray-800 transition-all duration-300">
                            Advanced Calculus</p>
                    </div>
                    <button
                        class="bg-green-500 text-white text-sm px-3 py-1 rounded-lg transition-all duration-300 transform scale-100 hover:bg-red-600 hover:scale-105">
                        View
                    </button>
                </div>

                <div
                    class="group flex items-center justify-between p-3 border border-gray-200 rounded-lg transition-all duration-300 hover:bg-gray-100">
                    <div>
                        <p
                            class="text-sm font-medium text-gray-700 group-hover:text-blue-600 transition-all duration-300">
                            CHEM</p>
                        <p class="text-sm text-gray-500 group-hover:text-gray-800 transition-all duration-300">
                            Organic Chemistry Basics</p>
                    </div>
                    <button
                        class="bg-green-500 text-white text-sm px-3 py-1 rounded-lg transition-all duration-300 transform scale-100 hover:bg-red-600 hover:scale-105">
                        View
                    </button>
                </div>

                <div
                    class="group flex items-center justify-between p-3 border border-gray-200 rounded-lg transition-all duration-300 hover:bg-gray-100">
                    <div>
                        <p
                            class="text-sm font-medium text-gray-700 group-hover:text-blue-600 transition-all duration-300">
                            PHY</p>
                        <p class="text-sm text-gray-500 group-hover:text-gray-800 transition-all duration-300">
                            Quantum Physics</p>
                    </div>
                    <button
                        class="bg-green-500 text-white text-sm px-3 py-1 rounded-lg transition-all duration-300 transform scale-100 hover:bg-red-600 hover:scale-105">
                        View
                    </button>
                </div>
            </div>

        </div>


        <!-- My Uploads Section -->
        <div class="bg-white p-6 rounded-[15px] shadow-lg">
            <h2 class="text-xl font-semibold mb-4">
                My uploads
            </h2>

            <table class="w-full text-[12px]">
                <!-- Table Head -->
                <thead>
                    <tr class="bg-gray-100 text-black">
                        <th class="px-4 py-3 text-left">SN</th>
                        <th class="px-4 py-3 text-left">Course Code</th>
                        <th class="px-4 py-3 text-left">Course Title</th>
                        <th class="px-4 py-3 text-left">Date Uploaded</th>
                        <th class="px-4 py-3 text-center">Action</th>
                    </tr>
                </thead>
                <!-- Table Body -->
                <tbody class="text-gray-700">
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="px-4 py-3">1</td>
                        <td class="px-4 py-3">MTH101</td>
                        <td class="px-4 py-3">Introduction to Algebra</td>
                        <td class="px-4 py-3">Feb 21, 2025</td>
                        <td class="px-4 py-3 text-center">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600 transition">
                                View
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="px-4 py-3">2</td>
                        <td class="px-4 py-3">CHEM201</td>
                        <td class="px-4 py-3">Organic Chemistry Basics</td>
                        <td class="px-4 py-3">Feb 18, 2025</td>
                        <td class="px-4 py-3 text-center">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600 transition">
                                View
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="px-4 py-3">3</td>
                        <td class="px-4 py-3">PHY301</td>
                        <td class="px-4 py-3">Quantum Mechanics</td>
                        <td class="px-4 py-3">Feb 15, 2025</td>
                        <td class="px-4 py-3 text-center">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600 transition">
                                View
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    </div>
    </div>



</x-dash-layout>
