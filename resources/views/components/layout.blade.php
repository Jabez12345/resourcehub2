<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstat</title>

<script src="https://cdn.tailwindcss.com"></script>

<!-- Font Awesome CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
<link rel="shortcut icon" sizes="580x580" href="{{ asset('\images/favicon.ico') }}" type="image/x-icon">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('\images/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('\images/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('\images/favicon-16x16.png') }}">
<link rel="manifest" href="/site.webmanifest">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

<style>
    .sound-wave {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: .5rem;
        width: 3.75rem;
        height: 2.5rem;
    }

    .sound-wave div {
        height: 2.5rem;
        display: block;
        width: .6rem;
        border-radius: .5rem;
        background: orange;
        animation: audio-wave 1.5s infinite ease-in-out;
    }

    .sound-wave div:nth-child(2) {
        left: 11px;
        animation-delay: 0.2s;
    }

    .sound-wave div:nth-child(3) {
        left: 22px;
        animation-delay: 0.4s;
    }

    .sound-wave div:nth-child(4) {
        left: 33px;
        animation-delay: 0.6s;
    }

    .sound-wave div:nth-child(5) {
        left: 44px;
        animation-delay: 0.8s;
    }

    @keyframes audio-wave {
        0% {
            height: 6px;
            transform: translateY(0px);
            background: #ff8e3a;
        }

        25% {
            height: 40px;
            transform: translateY(-5px) scale(1.7);
            background: #ed509e;
        }

        50% {
            height: 6px;
            transform: translateY(0px);
            background: #0057E9;
        }

        100% {
            height: 6px;
            transform: translateY(0px);
            background: #0fccce;
        }
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: white;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        box-shadow: 0 8px 16px rgba(248, 215, 215, 0.2);
        z-index: 1;
        transition: 3s ease-in-out;
        border-radius: 8px;
    }

    .dropdown:hover .dropdown-content {
        display: block;
        transition: .3s ease-in-out;
    }

    .fade-in {
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .wave {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 200px;
        background: url('https://www.svgrepo.com/show/2046/wave.svg') repeat-x;
        background-size: cover;
        animation: wave 10s linear infinite;
    }

    @keyframes wave {
        0% {
            background-position-x: 0;
        }

        100% {
            background-position-x: 1000px;
        }
    }

    .dotted-animation {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle, rgba(0, 0, 0, 0.1) 1px, transparent 1px);
        background-size: 20px 20px;
        animation: moveDots 5s linear infinite;
    }

    @keyframes moveDots {
        0% {
            background-position: 0 0;
        }

        100% {
            background-position: 20px 20px;
        }
    }

    /* Smooth Transition for Expanding Search */
    #search-bar {
        transition: all 0.3s ease-in-out;
    }

    #search-bar:focus {
        width: 100%;
        /* Expand on focus */

    }

    #search-results {
        display: none;
        /* Hidden initially */
    }

    #search-results.active {
        display: block;
        /* Show results */
        max-height: 300px;
        overflow-y: auto;
    }

    /* Styling the No Results Illustration */
    #search-results .no-results {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        gap: 10px;
        color: #6b7280;
        /* Gray-500 for text */
    }

    #search-results .no-results img {
        width: 150px;
        height: auto;
        opacity: 0.8;
    }

    #popular-materials {
        transition: transform 0.3s ease-in-out;
    }
    /* .moving-box {
            position: absolute;
            width: 200px;
            height: 200px;
            background-color: rgba(59, 130, 246, 0.1);
            border: 2px solid rgba(59, 130, 246, 0.1);
            border-radius: 50%;
            animation: move3d 10s infinite alternate;
            transform-style: preserve-3d;
        }
        .rotating-box {
            position: absolute;
            width: 150px;
            height: 150px;
            background-color: rgba(255, 99, 132, 0.1);
            border: 2px solid rgba(255, 99, 132, 0.1);
            animation: rotate3d 10s infinite linear;
            transform-style: preserve-3d;
        } 
        .floating-icon {
            position: absolute;
            width: 50px;
            height: 50px;
            background-color: rgba(34, 197, 94, 0.1);
            border: 2px solid rgba(34, 197, 94, 0.3);
            border-radius: 50%;
            animation: float 6s infinite ease-in-out;
        }
        @keyframes move3d {
            0% {
                top: 10%;
                left: 80%;
                transform: rotateX(0deg) rotateY(0deg);
            }
            100% {
                top: 80%;
                left: 80%;
                transform: rotateX(360deg) rotateY(360deg);
            }
        }
        @keyframes rotate3d {
            0% {
                top: 70%;
                left: 10%;
                transform: rotateX(0deg) rotateY(0deg);
            }
            100% {
                top: 70%;
                left: 10%;
                transform: rotateX(360deg) rotateY(360deg);
            }
        }
        @keyframes float {
            0% {
                top: 20%;
                left: 20%;
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                top: 20%;
                left: 20%;
                transform: translateY(0);
            }
        } */


         /* 3D Cube styles */
    .cube {
      transform-style: preserve-3d;
      animation: spin 5s linear infinite;
    }

    .cube-face {
      position: absolute;
      width: 100px;
      height: 100px;
      /* background: #0057E9; */
      /* border: 2px solid rgb(177, 210, 243); */
    }

    .front { transform: translateZ(50px); }
    .back { transform: rotateY(180deg) translateZ(50px); }
    .left { transform: rotateY(-90deg) translateZ(50px); }
    .right { transform: rotateY(90deg) translateZ(50px); }
    .top { transform: rotateX(90deg) translateZ(50px); }
    .bottom { transform: rotateX(-90deg) translateZ(50px); }

    @keyframes spin {
      0% { transform: rotateX(0) rotateY(0); }
      100% { transform: rotateX(360deg) rotateY(360deg); }
    }
       
</style>
</head>

<div id="preloader" class="bg-gray-100 fixed z-40 top-0 w-full h-full flex items-center justify-center ">
    <div class="flex-col items-center justify-center">
        <div class="sound-wave">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

    </div>
</div>

<body class="text-gray-900 bg-transparent" id="body">
    <div class="dotted-animation z-[-1]"></div>
    <header id="header" class="flex items-center justify-between py-4 px-2 lg:px-8 fade-in fixed z-20 top-0 w-full bg-transparent">
        <!-- Logo -->
        <a href="/">
            <div class="flex items-center">
                <img alt="BookStats logo" class="w-20 h-20" height="40" src="{{ asset('\images/logo.png') }}"
                    width="40" />
                <span class="text-blue-600 text-xl lg:text-2xl  font-bold"
                    style="color: #0057E9; text-shadow: 0 10px 12px 0 rgba(78, 75, 250, 0.1);">
                    BOOKSTATS
                </span>
            </div>
        </a>

        <!-- Hamburger Menu for Mobile -->
        <button class="block md:hidden text-gray-700 focus:outline-none" id="menu-toggle" aria-label="Toggle navigation"
            onclick="toggleMenu()">
            <i class="fas fa-bars text-2xl"></i>
        </button>

        <!-- Desktop Menu -->
        <nav class="desktop-menu hidden md:flex items-center space-x-4 xl:space-x-8">
            <div class="relative dropdown">
                <button class="text-gray-700 font-medium">
                    Top Lists <i class="fas fa-chevron-down ml-1"></i>
                </button>
                <div class="dropdown-content mt-2 rounded-lg shadow-lg p-4 w-[200px]">
                    <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md" href="#">New
                        Materials</a>
                    <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md" href="#">Popular
                        Materials</a>
                    <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md" href="#">Most
                        Reviewed</a>
                </div>
            </div>
            <div class="relative dropdown">
                <button class="text-gray-700 font-medium">
                    VTUs <i class="fas fa-chevron-down ml-1"></i>
                </button>
                <div class="dropdown-content mt-2 rounded-lg shadow-lg p-4 w-[200px]">
                    <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md" href="#">Data
                        Services</a>
                    <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md" href="#">Airtime
                        Services</a>
                    <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md" href="#">Bills
                        Services</a>
                </div>
            </div>
            <a href="#" class="text-gray-700 font-medium">Contact Us</a>
            <div class="relative hidden lg:visible">
                <input
                    class="bg-[#f1f3f4] rounded-[46px] border border-transparent h-[48px] px-[12px] py-[8px] w-full md:w-[200px] transition-all duration-200 ease-in-out"
                    placeholder='Search "csc 309"' type="text" />
                <i class="fas fa-search absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
            </div>
            <div class="flex gap-4">
                <a href="/login">
                    <button
                        class="text-gray-700 font-medium px-[16px] rounded-[8px] border border-gray-200 h-[48px] hover:bg-gray-100">Log
                        In</button>
                </a>
                <a href="/register">
                    <button class="flex items-center gap-2 text-white font-medium px-4 py-2 rounded-[8px] h-[48px]"
                        style="background: #0057E9; box-shadow: 0 10px 12px 0 rgba(78, 75, 250, 0.1);">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 12" width="20"
                            height="20">
                            <path fill="currentColor"
                                d="M6 .6c-1.654 0-3 1.346-3 3s1.346 3 3 3 3-1.346 3-3-1.346-3-3-3Zm0 4.8c-.992 0-1.8-.808-1.8-1.8S5.008 1.8 6 1.8s1.8.808 1.8 1.8c0 .993-.808 1.8-1.8 1.8Zm5.4 6v-.6c0-2.315-1.885-3.6-4.2-3.6H4.8C2.484 7.2.6 8.485.6 10.8v.6h1.2v-.6c0-1.654 1.346-2.4 3-2.4h2.4c1.654 0 3 .746 3 2.4v.6h1.2Z">
                            </path>
                        </svg> Sign Up
                    </button>
                </a>
                <div class="relative">
                    <button class="cursor h-[48px] px-4 rounded-[8px] hover:bg-gray-100 mx-2" id="dot-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 12" class="rotate-90"
                            aria-label="horizontal dots icon" width="24" height="24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M3.6 6a1.2 1.2 0 1 1-2.4-.001 1.2 1.2 0 0 1 2.4 0Zm3.6 0a1.2 1.2 0 1 1-2.4-.001 1.2 1.2 0 0 1 2.4 0Zm3.6 0a1.2 1.2 0 1 1-2.4-.001 1.2 1.2 0 0 1 2.4 0Z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>


                    <div class="bg-white rounded-lg shadow-lg p-4 w-64 absolute right-0 top-14 hidden" id="dotm">
                       
                        <div class="mt-4">
                            <div class="flex items-center py-2">
                                <i class="fas fa-cog text-xl"></i>
                                <span class="ml-2 text-lg">Account</span>
                            </div>
                            <div class="flex items-center py-2">
                                <div
                                    class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle" id="toggle"
                                        class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" />
                                    <label for="toggle"
                                        class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                </div>
                                <span class="ml-2 text-lg">Dark mode</span>
                            </div>
                            <div class="flex items-center py-2">
                                <i class="fas fa-question-circle text-xl"></i>
                                <span class="ml-2 text-lg">Help</span>
                            </div>
                            <div class="flex items-center py-2">
                                <i class="fas fa-thumbs-up text-xl"></i>
                                <span class="ml-2 text-lg">Give Feedback</span>
                            </div>
                        </div>
                    </div>
                </div>

        </nav>



        <!-- Mobile Menu -->
        <nav class="mobile-menu hidden absolute top-full left-0 w-full bg-white rounded-[8px] md:hidden"
            id="mobile-nav">
            <div class="p-4 border border-b-gray-300">
                <div class="relative dropdown mb-4">
                    <button class="text-gray-700 font-medium w-full text-left">
                        Top Lists <i class="fas fa-chevron-down ml-1"></i>
                    </button>
                    <div class="dropdown-content mt-2 rounded-lg shadow-lg p-4 w-full">
                        <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md" href="#">New
                            Materials</a>
                        <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md" href="#">Popular
                            Materials</a>
                        <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md" href="#">Most
                            Reviewed</a>
                    </div>
                </div>
                <div class="relative dropdown mb-4">
                    <button class="text-gray-700 font-medium w-full text-left">
                        VTUs <i class="fas fa-chevron-down ml-1"></i>
                    </button>
                    <div class="dropdown-content mt-2 rounded-lg shadow-lg p-4 w-full">
                        <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md" href="#">Data
                            Services</a>
                        <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md" href="#">Airtime
                            Services</a>
                        <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md" href="#">Bills
                            Services</a>
                    </div>
                </div>
                <a href="#" class="block text-gray-700 font-medium mb-4">Contact Us</a>
            </div>

            <div class="p-4 w-full right-0 top-14 flex-col justify-center items-center border border-b-gray-300">

                <div class="mt-4">
                    <div class="flex items-center py-2">
                        <i class="fas fa-cog text-xl"></i>
                        <span class="ml-2 text-lg">Account</span>
                    </div>
                    <div class="flex items-center py-2">
                        <div
                            class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                            <input type="checkbox" name="toggle" id="toggle"
                                class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" />
                            <label for="toggle"
                                class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                        </div>
                        <span class="ml-2 text-lg">Dark mode</span>
                    </div>
                    <div class="flex items-center py-2">
                        <i class="fas fa-question-circle text-xl"></i>
                        <span class="ml-2 text-lg">Help</span>
                    </div>
                    <div class="flex items-center py-2">
                        <i class="fas fa-thumbs-up text-xl"></i>
                        <span class="ml-2 text-lg">Give Feedback</span>
                    </div>
                </div>
            </div>

            <div class="flex gap-4 my-4 p-4">
                <a href="/login" class="w-1/2">
                    <button
                        class="text-gray-700 font-medium px-[16px] rounded-[8px] border border-gray-200 h-[48px] hover:bg-gray-100 w-full">Log
                        In</button>
                </a>
                <a href="/register" class="w-1/2">
                    <button
                        class="flex items-center justify-center gap-2 text-white font-medium px-4 py-2 rounded-[8px] h-[48px] w-full"
                        style="background: #0057E9; box-shadow: 0 10px 12px 0 rgba(78, 75, 250, 0.1);">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 12" width="20"
                            height="20">
                            <path fill="currentColor"
                                d="M6 .6c-1.654 0-3 1.346-3 3s1.346 3 3 3 3-1.346 3-3-1.346-3-3-3Zm0 4.8c-.992 0-1.8-.808-1.8-1.8S5.008 1.8 6 1.8s1.8.808 1.8 1.8c0 .993-.808 1.8-1.8 1.8Zm5.4 6v-.6c0-2.315-1.885-3.6-4.2-3.6H4.8C2.484 7.2.6 8.485.6 10.8v.6h1.2v-.6c0-1.654 1.346-2.4 3-2.4h2.4c1.654 0 3 .746 3 2.4v.6h1.2Z">
                            </path>
                        </svg> Sign Up
                    </button>
                </a>
            </div>
        </nav>
    </header>
   

    {{ $slot }}
    <footer class="mt-16 py-8 border-t border-gray-200 text-center fade-in">
        <div class="flex justify-center space-x-4 mb-4">
            <i class="fab fa-youtube text-2xl">
            </i>
            <i class="fab fa-discord text-2xl">
            </i>
            <i class="fab fa-instagram text-2xl">
            </i>
            <i class="fab fa-x-twitter text-2xl">
            </i>
            <i class="fab fa-linkedin text-2xl">
            </i>
        </div>
        <div class="flex flex-wrap justify-center space-x-4 text-gray-600">
            <a class="hover:underline" href="#">
                Accessibility
            </a>
            <a class="hover:underline" href="#">
                Terms of Use
            </a>
            <a class="hover:underline" href="#">
                Privacy Policy
            </a>
            <a class="hover:underline" href="#">
                Help Center
            </a>
            <a class="hover:underline" href="#">
                FAQ
            </a>
        </div>
        <p class="mt-4 text-gray-500">
            © BookStats 2025
        </p>
    </footer>


    <script>
        // Toggle mobile menu and hamburger icon
        function toggleMenu() {
            const mobileNav = document.getElementById('mobile-nav');
            const menuToggle = document.getElementById('menu-toggle');
            mobileNav.classList.toggle('hidden');
            menuToggle.classList.toggle('active');
        }


        // Close mobile menu when clicking outside
        document.addEventListener('click', (event) => {
            if (!mobileNav.contains(event.target) && !menuToggle.contains(event.target)) {
                mobileNav.classList.add('hidden');
            }
        });

        window.addEventListener("scroll", function() {
        const navbar = document.getElementById("header");
        if (window.scrollY > 50) {
            navbar.classList.add("bg-white", "shadow-md");
        } else {
            navbar.classList.remove("bg-white", "shadow-md");
        }
    });

        document.querySelectorAll('.dropdown').forEach(dropdown => {
            dropdown.addEventListener('mouseenter', () => {
                dropdown.querySelector('.dropdown-content').style.display = 'block';
            });
            dropdown.addEventListener('mouseleave', () => {
                setTimeout(() => {
                    dropdown.querySelector('.dropdown-content').style.display = 'none';
                }, 1000);
            });
        });

        // preloader loading time
        setTimeout(() => {
            document.getElementById('preloader').classList.add('hidden');
            document.getElementById('body').classList.remove('hidden');
        }, 3000);

        const dotToggle = document.getElementById("dot-toggle");
        const dotmenu = document.getElementById("dotm");

        dotToggle.addEventListener("click", () => {
            dotmenu.classList.toggle("hidden");
        });

        // sript for search bar
        const searchBar = document.getElementById("search-bar");
        const searchResults = document.getElementById("search-results");
        const popularMaterials = document.getElementById("popular-materials");

        // Event that Detects typing in the search bar
        searchBar.addEventListener("input", async (e) => {
            const query = e.target.value.toLowerCase();

            if (query) {
                try {
                    // Fetch search results from the server
                    const response = await fetch(`/api/search-books?q=${encodeURIComponent(query)}`);
                    const data = await response.json();

                    if (data.length > 0) {
                        // Generate dynamic search results with id, course_title, and course_code
                        const filteredResults = data
                            .map(
                                (item) =>
                                `<a href="/books/${item.id}" class="p-2 hover:bg-gray-200 rounded block">
                                <strong class="uppercase">${item.course_code}</strong>: ${item.course_title}
                            </a>`
                            )
                            .join("");

                        searchResults.innerHTML = filteredResults;
                    } else {
                        // Show no results illustration with image
                        searchResults.innerHTML = `
                    <div class="no-results text-center p-4" >
                        <img src="{{ asset('images/not_found.png') }}" alt="No results found" class="mx-auto mb-2" />
                        <p class="text-lg">Hey! Sorry, we couldn't find "<strong>${query}</strong>" but come again next time.</p>
                    </div>
                `;
                    }

                    searchResults.classList.add("active");
                    popularMaterials.style.transform = "translateY(50px)";
                } catch (error) {
                    console.error("Error fetching search results:", error);
                    searchResults.innerHTML = `
                <div class="error text-red-500 p-4">
                    <p>Oops! Something went wrong while fetching search results. Please try again later.</p>
                </div>
            `;
                }
            } else {
                // Clear results and reset view
                searchResults.classList.remove("active");
                searchResults.innerHTML = "";
                popularMaterials.style.transform = "translateY(0)";
            }
        });
    </script>

    <!-- <script type="module" src="https://unpkg.com/@splinetool/viewer@1.9.59/build/spline-viewer.js"></script> -->


</body>

</html>
