
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Dashboard
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

@auth


    @if (session('login_success'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" id="flash-message"
            class="fixed top-5 right-5 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-50 transition-opacity duration-1000 opacity-100"
            x-transition:enter="opacity-0" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="opacity-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

            <p class="text-lg font-semibold">
                {{ session('login_success') }} 🎉
            </p>
        </div>
    @endif


@endauth

{{-- <div id="preloader" class="bg-white fixed z-40 top-0 w-full h-full flex items-center justify-center ">
    <div class="flex-col items-center justify-center">
        <div class="sound-wave">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

    </div>
</div> --}}




<body class="bg-[#f9fafb]">
    <div class="flex flex-col lg:flex-row">
        <!-- Sidebar -->
        <aside
            class="fixed top-0 left-0 h-screen w-64 bg-white shadow-lg flex flex-col p-4 invisible md:visible m-2 rounded-[15px]">
            <!-- Logo -->
            <a href="/">
                <div class="flex items-center">
                    <img alt="EduMaid logo" class="w-20 h-20" height="40" src="{{ asset('images/logo.png') }}"
                        width="40" />
                    <span class="text-blue-600 text-lg lg:text-xl font-semibold">
                        EduMaid
                    </span>
                </div>
            </a>

            <!-- Navigation Menu -->
            <nav class="flex flex-col gap-1 mt-6 p-6 bg-gray-50 rounded-[15px]">
                <a href="#" class="flex items-center gap-3 p-3 rounded-lg text-blue-600 bg-blue-100 text-sm">
                    <span class="material-symbols-outlined text-[15px]">dashboard</span>
                    <span class="text-gray-800">Dashboard</span>
                </a>
                <a href="#" class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-100 text-[13.5px]">
                    <span class="material-symbols-outlined text-[15px]">notifications</span>
                    <span class="text-gray-800">Notifications</span>
                </a>
                <a href="#" class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-100 text-[13.5px]">
                    <span class="material-symbols-outlined text-[15px]">cloud_upload</span>
                    <span class="text-gray-800">Upload</span>
                </a>
                <a href="#" class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-100 text-[13.5px]">
                    <span class="material-symbols-outlined text-[15px]">quiz</span>
                    <span class="">Quiz</span>
                </a>
                <a href="#" class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-100 text-[13.5px]">
                    <span class="material-symbols-outlined text-[15px]">settings</span>
                    <span class="">Settings</span>
                </a>
            </nav>

            <!-- Subscription Card -->
            <div class="my-4 bg-gradient-to-r from-blue-500 to-purple-500 p-4 rounded-[15px] text-white">
                <h4 class="text-sm font-semibold">Upgrade to Pro</h4>
                <p class="text-xs">Unlock premium features and analytics.</p>
                <button class="mt-2 w-full bg-white text-blue-600 rounded-lg py-2 text-sm">Upgrade</button>
            </div>

            <!-- Logout Button -->
            <a href="/logout" class="flex items-center gap-3 p-3 mt-4 rounded-lg text-red-600 hover:bg-gray-100">
                <span class="material-symbols-outlined">logout</span>
                <span class="text-sm">Logout</span>
            </a>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 ml-0 md:ml-64 p-6">

            <!--Header-->
            <header class="w-full bg-transparent flex justify-between items-center mb-[4rem] relative z-50 ">

                <!-- Hamburger Menu -->
                <div id="ham" onclick="openNav()" class="cursor-pointer hidden md:invisible">
                    <i class="fas fa-bar"></i>
                </div>

                <!-- Search Bar -->
                <div class="relative w-1/4 search-container mr-2 md:mr-0 bg-white flex rounded-[15px]">
                    <i class="fas fa-search py-4 px-2"></i>
                    <input
                        class="w-full rounded-[15px] px-6 py-4 text-sm outline-none focus:ring-4 focus:ring-blue-200 absolute"
                        placeholder="Search course materials e.g., GST 111" id="search-bar" type="text" />
                </div>

                <!-- User Actions (Upload, notification, Profile Buttons) -->
                <div class="flex items-center gap-8">

                    <!-- Upload Button -->
                    <button
                        class="flex items-center gap-2 bg-blue-500 text-white px-8 py-3 rounded-[15px] shadow-md hover:scale-105 transition"
                        id="upload" onclick="uploadFile()">
                        <span class="material-symbols-outlined">cloud_upload</span>
                        Upload
                    </button>

                    <!-- Popup Modal (initially hidden) -->
                    <div id="upload-modal"
                        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
                        <div class="bg-[#f9fafb] rounded-[15px] p-6 relative max-w-lg">
                           
                            <div class="bg-white py-4 px-10 rounded-[15px] z-10">
                                <div class="text-center">
                                    <h2 class="mt-5 text-xl font-bold text-gray-900">Upload Materials!</h2>
                                    <p class="mt-2 text-sm text-gray-400">Only PDFs, Word, Excel, PowerPoint docs!</p>
                                </div>
                                <form class="mt-4 space-y-3" action="#" method="POST">
                                    <!--Course code input-->
                                    <div class="bg-white pt-4">
                                        <div class="relative bg-inherit">
                                            <input type="text" id="course_code" name="course_code"
                                                class="peer w-full px-8 py-4 rounded-[15px] font-medium border-2 border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-4 focus:border-blue-100 focus:bg-white placeholder-transparent"
                                                placeholder="Course Code" required />
                                            <label for="course_code"
                                                class="absolute cursor-text left-0 -top-3 text-sm text-gray-500 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:top-4 peer-focus:-top-3 peer-focus:text-sky-600 peer-focus:text-sm transition-all">Course
                                                Code</label>
                                        </div>
                                    </div>

                                    <!-- Course Title Field -->
                                    <div class="bg-white pt-4">
                                        <div class="relative bg-inherit">
                                            <input type="text" id="course_title" name="course_title"
                                                class="peer w-full px-8 py-4 rounded-[15px] font-medium border-2 border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-4 focus:border-blue-100 focus:bg-white placeholder-transparent"
                                                placeholder="Course Title" required /><label for="course_title"
                                                class="absolute cursor-text left-0 -top-3 text-sm text-gray-500 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:top-4 peer-focus:-top-3 peer-focus:text-sky-600 peer-focus:text-sm transition-all">Course
                                                Title</label>
                                        </div>
                                    </div>



                                    <!-- File Attachment -->
                                    <div class="grid grid-cols-1 space-y-2 bg-[#f9fafb] mt-4">
                                        <div class="flex items-center justify-center w-full">

                                            <!-- Drag & Drop Area -->
                                            <label
                                                class="flex flex-col rounded-[15px] border-4 border-dashed w-full h-[150px] p-10 group text-center cursor-pointer">
                                                <div
                                                    class="h-full w-full text-center flex flex-col items-center justify-center">
                                                    <div class="flex flex-auto mx-auto">
                                                        <i class="fas fa-cloud-arrow-up fa-4x text-gray-400"></i>

                                                    </div>
                                                    <p class="pointer-none text-gray-500">
                                                        <span class="text-sm">Drag and drop</span> files here <br />
                                                        or <a href="#"
                                                            class="text-blue-600 hover:underline">select a
                                                            file</a> from your
                                                        computer
                                                    </p>
                                                </div>
                                                <!-- Hidden File Input -->
                                                <input id="fileInput" type="file" class="hidden" required>
                                            </label>
                                        </div>
                                    </div>
                                    <p class="text-sm text-gray-300">
                                        <span>File type: doc, pdf, xls, pptx</span>
                                    </p>

                                    <!-- Upload Details Section (Hidden by default) -->
                                    <div id="uploadSection" class="mt-4 hidden">
                                        <div class="flex justify-between text-gray-700">
                                            <span id="fileName"></span>
                                            <span id="fileSize"></span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5 mt-2">
                                            <div id="progressBar" class="bg-blue-500 h-2.5 rounded-full"
                                                style="width: 0%;"></div>
                                        </div>
                                        <div class="text-right text-gray-600 mt-1">
                                            <span id="uploadPercentage">0%</span>
                                        </div>
                                    </div>

                                    <!-- Buttons -->
                                    <div class="flex gap-2">

                                        <button id="close-modal" type="reset"
                                            class="my-5 w-full flex justify-center text-gray-800 p-4 rounded-[15px] tracking-wide font-semibold focus:outline-none border border-gray-800 hover:bg-gray-100 shadow-lg cursor-pointer transition ease-in duration-300">
                                            Cancel
                                        </button>
                                        <button type="submit"
                                            class="my-5 w-full flex justify-center bg-blue-500 text-gray-100 p-4 rounded-[15px] tracking-wide font-semibold focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
                                            Upload
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Notification Icon -->
                    <div class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded-full cursor-pointer relative hover:bg-gray-200"
                        onclick="openNot()">
                        <span class="material-symbols-outlined">notifications</span>
                        <div
                            class="px-1 py-0.5 bg-teal-500 min-w-5 rounded-full text-center text-white text-xs absolute -top-2 -end-1 translate-x-1/4 text-nowrap">
                            <div
                                class="absolute top-0 start-0 rounded-full -z-10 animate-ping bg-teal-200 w-full h-full">
                            </div>
                            1
                        </div>
                    </div>

                    <!-- Profile Initials -->
                    <div class="w-10 h-10 flex items-center justify-center bg-blue-600 text-white rounded-full cursor-pointer hover:bg-blue-400"
                        onclick="profilePopup()">
                        JL
                    </div>

                </div>
            </header>

            {{ $slot }}

        </div>


        <!-- JavaScript for Modal Upload Modal -->
        <script>
            function uploadFile() {
                document.getElementById('upload-modal').classList.remove('hidden');
            }

            // Close modal when clicking the close button
            document.getElementById('close-modal').addEventListener('click', () => {
                document.getElementById('upload-modal').classList.add('hidden');
            });

            // Close modal when clicking outside the modal content
            document.getElementById('upload-modal').addEventListener('click', (event) => {
                if (event.target === document.getElementById('upload-modal')) {
                    document.getElementById('upload-modal').classList.add('hidden');
                }
            });

            const fileInput = document.getElementById('fileInput');
            const uploadSection = document.getElementById('uploadSection');
            const fileName = document.getElementById('fileName');
            const fileSize = document.getElementById('fileSize');
            const progressBar = document.getElementById('progressBar');
            const uploadPercentage = document.getElementById('uploadPercentage');

            fileInput.addEventListener('change', (event) => {
                const file = event.target.files[0];
                if (file) {
                    // Validate file extension
                    const allowedExtensions = ['pdf', 'xls', 'doc', 'pptx'];
                    const fileExtension = file.name.split('.').pop().toLowerCase();
                    if (!allowedExtensions.includes(fileExtension)) {
                        alert("Invalid file type. Only PDF, XLS, DOC, and PPTX files are allowed.");
                        fileInput.value = ''; // Clear the input
                        return;
                    }
                    // Validate file size (max 25 MB)
                    const maxSize = 25 * 1024 * 1024; // 25 MB in bytes
                    if (file.size > maxSize) {
                        alert("File size exceeds 25MB.");
                        fileInput.value = ''; // Clear the input
                        return;
                    }
                    // If validation passes, update UI and simulate upload
                    fileName.textContent = file.name;
                    fileSize.textContent = (file.size / (1024 * 1024)).toFixed(1) + ' MB';
                    uploadSection.classList.remove('hidden');
                    simulateUpload();
                }
            });

            function simulateUpload() {
                let progress = 0;
                const interval = setInterval(() => {
                    if (progress >= 100) {
                        clearInterval(interval);
                    } else {
                        progress += 10;
                        progressBar.style.width = progress + '%';
                        uploadPercentage.textContent = progress + '%';
                    }
                }, 300);
            }




            document.addEventListener("DOMContentLoaded", () => {
                const chatContainer = document.getElementById("chat-messages");
                const userInput = document.getElementById("user-input");
                const sendButton = document.getElementById("send-button");

                // Auto-resize the textarea based on content
                userInput.addEventListener("input", function() {
                    this.style.height = "auto";
                    this.style.height = this.scrollHeight + "px";
                });

                // Function to add a message to chat
                function addMessage(text, sender, options = {}) {
                    const messageDiv = document.createElement("div");
                    messageDiv.classList.add("flex", "items-start", "gap-3", "mb-3", "animate-fadeIn");

                    if (sender === "user") {
                        messageDiv.innerHTML = `
                                        <div class="ml-auto bg-blue-500 text-white p-3 rounded-3xl max-w-md break-words">
                                            ${text}
                                        </div>
                                    `;
                    } else if (sender === "bot") {
                        // Check if we need to show a loading state
                        if (options.loading) {
                            messageDiv.innerHTML = `
                                          
                                            <div class="ai-response bg-gray-100 text-gray-800 p-3 rounded-3xl max-w-md relative">
                                                <span class="loading-dots">Reasoning</span>
                                            </div>
                                        `;
                        } else {
                            messageDiv.innerHTML = `
                                          
                                            <div class="ai-response bg-gray-100 text-gray-800 p-3 rounded-3xl max-w-md relative">
                                                ${text}
                                                <button class="absolute top-2 right-2 p-1 text-gray-500 hover:text-blue-500 copy-btn">
                                                    <i class="fas fa-copy"></i>
                                                </button>
                                                <span class="absolute top-[-1.5rem] right-2 text-xs bg-gray-700 text-white px-2 py-1 rounded opacity-0 transition-opacity duration-300 copy-tooltip">
                                                    Copied!
                                                </span>
                                            </div>
                                        `;
                        }
                    }

                    chatContainer.appendChild(messageDiv);
                    chatContainer.scrollTop = chatContainer.scrollHeight; // Auto-scroll to bottom
                    return messageDiv;
                }

                // Function to simulate the AI response with a loading indicator
                function simulateAIResponse() {
                    // Add loading message
                    const loadingMessage = addMessage("", "bot", {
                        loading: true
                    });

                    // After a short delay, replace the loading indicator with the actual response
                    setTimeout(() => {
                        const aiResponseDiv = loadingMessage.querySelector('.ai-response');
                        if (aiResponseDiv) {
                            aiResponseDiv.innerHTML = `
                                            I'm a ChatGPT AI! How can I assist you?
                                            <button class="absolute top-2 right-2 p-1 text-gray-500 hover:text-blue-500 copy-btn">
                                                <i class="fas fa-copy"></i>
                                            </button>
                                            <span class="absolute top-[-1.5rem] right-2 text-xs bg-gray-700 text-white px-2 py-1 rounded opacity-0 transition-opacity duration-300 copy-tooltip">
                                                Copied!
                                            </span>
                                        `;
                        }
                    }, 1500);
                }

                // Function to send a message from the user
                function sendMessage() {
                    const message = userInput.value.trim();
                    if (message === "") return;
                    addMessage(message, "user");
                    userInput.value = "";
                    userInput.style.height = "auto";

                    // Simulate AI response
                    simulateAIResponse();
                }

                // Send message on button click
                sendButton.addEventListener("click", sendMessage);

                // Allow sending message with Enter key (and Shift+Enter for newlines)
                userInput.addEventListener("keydown", (event) => {
                    if (event.key === "Enter" && !event.shiftKey) {
                        event.preventDefault();
                        sendMessage();
                    }
                });

                // Event delegation for the copy-to-clipboard functionality
                chatContainer.addEventListener("click", (event) => {
                    const copyButton = event.target.closest(".copy-btn");
                    if (copyButton) {
                        const aiResponse = copyButton.closest(".ai-response");
                        if (aiResponse) {
                            // Extract the text content without the button and tooltip
                            let textToCopy = aiResponse.textContent.replace("Copied!", "").trim();
                            navigator.clipboard.writeText(textToCopy).then(() => {
                                const tooltip = aiResponse.querySelector(".copy-tooltip");
                                if (tooltip) {
                                    tooltip.classList.remove("opacity-0");
                                    tooltip.classList.add("opacity-100");
                                    setTimeout(() => {
                                        tooltip.classList.remove("opacity-100");
                                        tooltip.classList.add("opacity-0");
                                    }, 1500);
                                }
                            });
                        }
                    }
                });
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                @if(session('success'))
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: "{{ session('success') }}",
                        confirmButtonColor: '#22c55e', // Tailwind green
                    });
                @endif
        
                @if(session('error'))
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: "{{ session('error') }}",
                        confirmButtonColor: '#ef4444', // Tailwind red
                    });
                @endif
            });
        </script>
        

</body>

</html>
