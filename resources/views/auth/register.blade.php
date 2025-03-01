<html>

<head>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet" />
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
</head>

<body class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
  <div class="m-0 bg-white flex justify-center flex-1">
    <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">

      <form method="POST" action="{{ route('register') }}" class="mt-4 flex flex-col items-center">
        @csrf

        <h1 class="text-2xl text-center" style="font-weight: 600;">
          Join Us Today! 🎉 
          <p class="text-sm text-gray-600"> And be a part of our Journey in Accademics</p>
        </h1>
        <div class="w-full flex-1 mt-8">
          <div class="flex flex-col items-center">
            <button
              class="w-full max-w-xs font-bold shadow-sm rounded-lg py-3 bg-indigo-100 text-gray-800 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline">
              <div class="bg-white p-2 rounded-full">
                <svg class="w-4" viewBox="0 0 533.5 544.3">
                  <path
                    d="M533.5 278.4c0-18.5-1.5-37.1-4.7-55.3H272.1v104.8h147c-6.1 33.8-25.7 63.7-54.4 82.7v68h87.7c51.5-47.4 81.1-117.4 81.1-200.2z"
                    fill="#4285f4" />
                  <path
                    d="M272.1 544.3c73.4 0 135.3-24.1 180.4-65.7l-87.7-68c-24.4 16.6-55.9 26-92.6 26-71 0-131.2-47.9-152.8-112.3H28.9v70.1c46.2 91.9 140.3 149.9 243.2 149.9z"
                    fill="#34a853" />
                  <path d="M119.3 324.3c-11.4-33.8-11.4-70.4 0-104.2V150H28.9c-38.6 76.9-38.6 167.5 0 244.4l90.4-70.1z"
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


          </div>

          <div class="my-12 border-b text-center">
            <div
              class="leading-none px-2 inline-block text-sm text-gray-600 tracking-wide font-medium bg-white transform translate-y-1/2">
              Or Login with e-mail
            </div>
          </div>



          <div class="mx-auto max-w-xs">
<!--Name input-->
<div class="bg-white pt-4">
  <div class="relative bg-inherit">
    <input type="text" id="name" name="name"
      class="peer w-full px-8 py-4 rounded-[15px] font-medium border-2 border-gray-200 placeholder-gray-500 text-sm bg-gray-100 focus:bg-white focus:outline-none focus:border-4 focus:border-blue-100 focus:bg-white placeholder-transparent"
      placeholder="name" required />
    <label for="name"
      class="absolute cursor-text left-0 -top-3 text-sm text-gray-500 bg-inherit mx-1 px-1 peer-placeholder-shown:bg-gray-100 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:text-sm peer-placeholder-shown:top-4 peer-placeholder-shown:mx-6 peer-placeholder-shown:px-2 peer-focus:bg-white peer-focus:-top-3 peer-focus:text-sky-600 peer-focus:text-sm transition-all">Name</label>
  </div>
</div>
@error('name')
<span class="text-red-500 text-sm">{{ $message }}</span>
@enderror
            <!--Email input-->
            <div class="bg-white pt-4">
              <div class="relative bg-inherit">
                <input type="text" id="email" name="email"
                  class="peer w-full px-8 py-4 rounded-[15px] font-medium border-2 border-gray-200 placeholder-gray-500 text-sm bg-gray-100 focus:bg-white focus:outline-none focus:border-4 focus:border-blue-100 focus:bg-white placeholder-transparent"
                  placeholder="email" required />
                <label for="email"
                  class="absolute cursor-text left-0 -top-3 text-sm text-gray-500 bg-inherit mx-1 px-1 peer-placeholder-shown:bg-gray-100 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:text-sm peer-placeholder-shown:top-4 peer-placeholder-shown:mx-6 peer-placeholder-shown:px-2 peer-focus:bg-white peer-focus:-top-3 peer-focus:text-sky-600 peer-focus:text-sm transition-all">Email</label>
              </div>
            </div>
            
            @error('email')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror

        <!--Department input-->
<div class="bg-white pt-4">
  <div class="relative bg-inherit">
    <input type="text" id="department" name="department"
      class="peer w-full px-8 py-4 rounded-[15px] font-medium border-2 border-gray-200 placeholder-gray-500 text-sm bg-gray-100 focus:bg-white focus:outline-none focus:border-4 focus:border-blue-100 focus:bg-white placeholder-transparent"
      placeholder="department" required />
    <label for="department"
      class="absolute cursor-text left-0 -top-3 text-sm text-gray-500 bg-inherit mx-1 px-1 peer-placeholder-shown:bg-gray-100 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:text-sm peer-placeholder-shown:top-4 peer-placeholder-shown:mx-6 peer-placeholder-shown:px-2 peer-focus:bg-white peer-focus:-top-3 peer-focus:text-sky-600 peer-focus:text-sm transition-all">Department</label>
  </div>
</div>
@error('department')
<span class="text-red-500 text-sm">{{ $message }}</span>
@enderror

            <!--Password input-->
            <div class="bg-white pt-6">
              <div class="relative bg-inherit">
                <input type="text" id="password" name="password"
                  class="peer w-full px-8 py-4 rounded-[15px] font-medium border-2 border-gray-200 placeholder-gray-500 text-sm bg-gray-100 focus:bg-white focus:outline-none focus:border-4 focus:border-blue-100 focus:bg-white placeholder-transparent"
                  placeholder="Password" required />
                <label for="password"
                  class="absolute cursor-text left-0 -top-3 text-sm text-gray-500 bg-inherit mx-1 px-1 peer-placeholder-shown:bg-gray-100 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:text-sm peer-placeholder-shown:top-4 peer-placeholder-shown:mx-6 peer-placeholder-shown:px-2 peer-focus:bg-white peer-focus:-top-3 peer-focus:text-sky-600 peer-focus:text-sm transition-all">Password</label>
              </div>
            </div>
            <div class="w-full flex justify-between my-2">
              <div class=""></div>
              <a href="#" class="text-blue-500 text-sm">forgot password?</a>
            </div>
            
            @error('password')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror

            <button
              class="mt-5 tracking-wide font-semibold bg-blue-500 text-gray-100 w-full py-4 rounded-[15px] hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
              <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                <circle cx="8.5" cy="7" r="4" />
                <path d="M20 8v6M23 11h-6" />
              </svg>
              <span class="ml-3">
                Sign Up
              </span>
            </button>
            <p class="mt-6 text-xs text-gray-600 text-center">
              I agree to abide by Edumaid
              <a href="#" class="border-b border-gray-500 border-dotted">
                Terms of Service
              </a>
              and its
              <a href="#" class="border-b border-gray-500 border-dotted">
                Privacy Policy
              </a>
            </p>
          </div>
        </div>
    </div>
    </form>

    <div class="flex-1 text-center hidden lg:flex relative container login-container bg-[#f9fafb] p-4">

      <!-- 3D Book Animation Section -->
      <div class="image-section">
        <div class="book">
          <div class="cover front"></div>
          <div class="cover back"></div>
          <div class="side"></div>
          <div class="pages">
            <div class="page"></div>
            <div class="page page1"></div>
            <div class="page page2"></div>
            <div class="page page3"></div>
            <div class="page"></div>

          </div>
        </div>
      </div>
    </div>

  </div>
    
  @if (session('error'))
  <div  id="flash-message" class="bg-red-500 text-white px-4 py-2 rounded-[8px] shadow-lg z-8 absolute top-1/4 right-4">
      {{ session('error') }}
  </div>
@endif
<div id="flash-message" class="fixed top-5 right-5 bg-green-500 text-white px-4 py-2 rounded-[8px] shadow-lg z-8 absolute top-1/4 right-4">
  {{ session('status') }}
</div>


  </div>
  <script src="ass.js"></script>

  <script>
    // Wait for the DOM to fully load
    document.addEventListener('DOMContentLoaded', function () {
        // Select the flash message
        const flashMessage = document.getElementById('flash-message');

        // If the flash message exists, hide it after 5 seconds
        if (flashMessage) {
            setTimeout(() => {
                flashMessage.style.display = 'none';
            }, 5000); // 5000ms = 5 seconds
        }
    });
</script>
</body>

</html>

       
  