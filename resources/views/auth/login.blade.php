<x-layout>
    <div class="m-0 bg-white shadow sm:rounded-lg flex justify-center flex-1">
        <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">

            <div class="mt-20 flex flex-col items-center relative">
                <a href="/" class="absolute top-0 left-[-50%] flex items-center text-blue-500 border border-gray-200 rounded-[8px] h-[48px] px-2 hover:bg-gray-200">
                    <i class="fas fa-chevron-left mr-2"></i>
                    Go Home
                </a>
    
                <h1 class="text-xl font-bold text-center text-blue-600">
                    Welcome Back to BookStats!🚀
                </h1>
                <p class="text-gray-500 text-center mt-2">
                    Log in to access tons of materials.
                </p>
                 <!-- Display Validation Errors -->
        @if ($errors->any())
        <div class="bg-red-100 text-red-600 p-3 rounded mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                <form method="POST" action="{{ route('login') }}" class="w-full flex-1 mt-8">
                    @csrf
                    {{--<div class="flex flex-col items-center">
                        <button
                            class="w-full max-w-xs font-semibold shadow-sm rounded-lg py-3 bg-indigo-100 text-gray-600 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline">
                            <div class="bg-white p-2 rounded-full">
                                <svg class="w-4" viewBox="0 0 533.5 544.3">
                                    <path
                                        d="M533.5 278.4c0-18.5-1.5-37.1-4.7-55.3H272.1v104.8h147c-6.1 33.8-25.7 63.7-54.4 82.7v68h87.7c51.5-47.4 81.1-117.4 81.1-200.2z"
                                        fill="#4285f4" />
                                    <path
                                        d="M272.1 544.3c73.4 0 135.3-24.1 180.4-65.7l-87.7-68c-24.4 16.6-55.9 26-92.6 26-71 0-131.2-47.9-152.8-112.3H28.9v70.1c46.2 91.9 140.3 149.9 243.2 149.9z"
                                        fill="#34a853" />
                                    <path
                                        d="M119.3 324.3c-11.4-33.8-11.4-70.4 0-104.2V150H28.9c-38.6 76.9-38.6 167.5 0 244.4l90.4-70.1z"
                                        fill="#fbbc04" />
                                    <path
                                        d="M272.1 107.7c38.8-.6 76.3 14 104.4 40.8l77.7-77.7C405 24.6 339.7-.8 272.1 0 169.2 0 75.1 58 28.9 150l90.4 70.1c21.5-64.5 81.8-112.4 152.8-112.4z"
                                        fill="#ea4335" />
                                </svg>
                            </div>
                            <span class="ml-4">
                                Login with Google
                            </span>
                        </button>

                        <!-- <button
                            class="w-full max-w-xs font-bold shadow-sm rounded-lg py-3 bg-indigo-100 text-gray-800 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline mt-5">
                            <div class="bg-white p-1 rounded-full">
                                <svg class="w-6" viewBox="0 0 32 32">
                                    <path fill-rule="evenodd"
                                        d="M16 4C9.371 4 4 9.371 4 16c0 5.3 3.438 9.8 8.207 11.387.602.11.82-.258.82-.578 0-.286-.011-1.04-.015-2.04-3.34.723-4.043-1.609-4.043-1.609-.547-1.387-1.332-1.758-1.332-1.758-1.09-.742.082-.726.082-.726 1.203.086 1.836 1.234 1.836 1.234 1.07 1.836 2.808 1.305 3.492 1 .11-.777.422-1.305.762-1.605-2.664-.301-5.465-1.332-5.465-5.93 0-1.313.469-2.383 1.234-3.223-.121-.3-.535-1.523.117-3.175 0 0 1.008-.32 3.301 1.23A11.487 11.487 0 0116 9.805c1.02.004 2.047.136 3.004.402 2.293-1.55 3.297-1.23 3.297-1.23.656 1.652.246 2.875.12 3.175.77.84 1.231 1.91 1.231 3.223 0 4.61-2.804 5.621-5.476 5.922.43.367.812 1.101.812 2.219 0 1.605-.011 2.898-.011 3.293 0 .32.214.695.824.578C24.566 25.797 28 21.3 28 16c0-6.629-5.371-12-12-12z" />
                                </svg>
                            </div>
                            <span class="ml-4">
                                Login with GitHub
                            </span>
                        </button>  
                    </div> --}}

                    {{-- <div class="my-12 border-b text-center">
                        <div
                            class="leading-none px-2 inline-block text-sm text-gray-600 tracking-wide font-medium bg-white transform translate-y-1/2">
                            Or Login with e-mail
                        </div>
                    </div> --}}

                    <div class="mx-auto max-w-xs">
                        <div class="relative">
                            <!-- <label for="email" class="placeholder-gray-500 text-sm">Email</label> -->
                            <input
                                class="w-full px-8 py-4 rounded-3xl font-medium border-2 border-gray-300 placeholder-gray-500 text-sm focus:ring-4 focus:ring-blue-300 focus:outline-none focus:bg-white mt-8"
                                type="email" name="email" placeholder="Email" value="{{ old('email') }}" required />
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="absolute right-4 top-1/2 text-gray-500">
                                <path d="M20 8V4a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v4M3 8l9 6 9-6" />
                                <path
                                    d="M3 6c0-1.104.896-2 2-2h14c1.104 0 2 0.896 2 2v12c0 1.104-.896 2-2 2H5c-1.104 0-2-.896-2-2V6z" />
                            </svg>
                        </div>
                        <!-- <label for="Password" class="text-gray-500 text-sm">Password</label> -->
                        <div class="relative">
                            <input
                                class="w-full px-8 py-4 rounded-3xl font-medium border-2 border-gray-300 placeholder-gray-500 text-sm focus:ring-4 focus:ring-blue-300 focus:outline-none focus:bg-white mt-8"
                                type="password" name="password" placeholder="Password" required />
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="absolute right-4 top-1/2 text-gray-500">
                                <path d="M12 4C7 4 4 7 4 7s3 3 8 3 8-3 8-3-3-3-8-3z" />
                                <circle cx="12" cy="12" r="3" />
                                <path d="M12 16c-4 0-8 3-8 3s3 3 8 3 8-3 8-3-4-3-8-3z" />
                            </svg>
                        </div>

                        <div class="flex items-center justify-between my-4 text-sm text-gray-600">
                            <label for="remember" class="inline-flex items-center">
                                <input
                                    type="checkbox"
                                    id="remember"
                                    name="remember"
                                    class="mr-2"
                                />
                                Remember Me
                            </label>
                            <a href="#" class="text-blue-500 text-sm">Forgot Password?</a>
                        </div>

                    
                        <button
                            class="mt-5 tracking-wide font-semibold bg-blue-600 text-gray-100 w-full py-4 rounded-3xl hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                            <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                <circle cx="8.5" cy="7" r="4" />
                                <path d="M20 8v6M23 11h-6" />
                            </svg>
                            <span class="ml-3">
                                Login
                            </span>
                        </button>
                        <span class="text-xs text-gray-600 text-center space-y-4">Don't Have an account? <a
                                href="/register" class="text-blue-600 underline">signup</a> to your account</span>
                        <p class="mt-6 text-xs text-gray-600 text-center">
                            I agree to abide by ResourceHub's
                            <a href="#" class="border-b border-gray-500 border-dotted text-blue-600">
                                Terms of Service
                            </a>
                            and its
                            <a href="#" class="border-b border-gray-500 border-dotted text-blue-600">
                                Privacy Policy
                            </a>
                        </p>
                    </div>

                </form>
            </div>


        </div>




    </div>
    </div>

</x-layout>
