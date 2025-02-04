<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Fadhil Naim | Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custom Laravel Red Theme -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: {
                            DEFAULT: '#FF2D20', // Warna merah Laravel
                            dark: '#E53E3E', // Warna merah gelap
                        },
                    },
                },
            },
        }
    </script>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <nav class="bg-laravel">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" alt="Logo" class="h-8">
                    <a href="#" class="text-white text-xl font-bold">Fadhil</a>
                </div>
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-white focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-6">
                    <a href="home" class="text-white hover:text-gray-200">Home</a>
                    <a href="#about" class="text-white hover:text-gray-200">About</a>
                    <a href="#projects" class="text-white hover:text-gray-200">Projects</a>
                    <a href="#skills" class="text-white hover:text-gray-200">Skills</a>
                    <a href="#experience" class="text-white hover:text-gray-200">Experience</a>
                    <a href="#contact" class="text-white hover:text-gray-200">Contact</a>
                </div>
            </div>
            <!-- Mobile Menu (Hidden by default) -->
            <div id="mobile-menu" class="hidden md:hidden mt-4">
                <a href="home" class="block text-white py-2 hover:bg-laravel-dark">Home</a>
                <a href="#about" class="block text-white py-2 hover:bg-laravel-dark">About</a>
                <a href="#projects" class="block text-white py-2 hover:bg-laravel-dark">Projects</a>
                <a href="#skills" class="block text-white py-2 hover:bg-laravel-dark">Skills</a>
                <a href="#experience" class="block text-white py-2 hover:bg-laravel-dark">Experience</a>
                <a href="#contact" class="block text-white py-2 hover:bg-laravel-dark">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="py-20 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl font-bold text-gray-800">Halo Semua 😊, Saya Muhammad Fadhil Naim</h2>
            <h2 class="mt-4 text-2xl text-gray-600">Programmer | Software Engineer | Web Developer</h2>
            <p class="mt-4 text-gray-500">"Coding is like writing a story, but instead of pages, you create experiences."</p>
        </div>
    </section>

    <!-- About Me Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">About Me</h2>
            <div class="flex flex-col md:flex-row items-center">
                <!-- Profile Picture -->
                <div class="md:w-1/2 flex justify-center">
                    <img src="{{ asset('images/fadhil1.png') }}" alt="Profile Picture" class="w-[300px] h-[300px] md:w-[400px] md:h-[400px] rounded-lg shadow-lg object-cover transform hover:scale-105 transition-transform duration-300">
                </div>

                <!-- Bio Section -->
                <div class="md:w-1/2 mt-8 md:mt-0 md:ml-8">
                    <p class="text-gray-600 leading-relaxed text-lg mb-4">
                        Halo, saya <span class="font-semibold text-gray-800">Muhammad Fadhil Naim</span>, seorang <span class="font-semibold text-gray-800">Fullstack Web Developer</span> dengan fokus pada PHP, Laravel, JavaScript, dan berbagai teknologi pengembangan web lainnya.
                    </p>
                    <p class="text-gray-600 leading-relaxed text-lg mb-4">
                        Saya memiliki pengalaman dalam membangun aplikasi web yang efisien dan ramah pengguna, serta kemampuan untuk bekerja dalam tim dan menyelesaikan proyek sesuai dengan kebutuhan klien. Saya ahli dalam mengembangkan aplikasi berbasis PHP dan Laravel, serta membangun antarmuka pengguna yang interaktif menggunakan JavaScript.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md flex flex-col">
                    <h3 class="text-xl font-semibold mb-2">Content Management System</h3>
                    <p class="text-gray-600 flex-grow">Sistem Manajemen Konten (CMS) yang dibangun dengan PHP Native dan MySQL. Solusi untuk membuat,
                        mengelola, dan menerbitkan konten digital, cocok untuk blog, situs pribadi, dan lainnya.
                    </p>
                    <a href="https://github.com/Muhammadfadhil01/cms" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 mt-4 text-center">
                        Detail Proyek
                    </a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex flex-col">
                    <h3 class="text-xl font-semibold mb-2">Website informasi cuaca</h3>
                    <p class="text-gray-600 flex-grow">Website informasi cuaca yang sederhana menggunakan JavaScript dan API akan memberikan informasi cuaca terkini berdasarkan lokasi pengguna.</p>
                    <a href="https://github.com/Muhammadfadhil01/Website-informasi-cuaca" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 mt-4 text-center">
                        Detail Proyek
                    </a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex flex-col">
                    <h3 class="text-xl font-semibold mb-2">Landing Page</h3>
                    <p class="text-gray-600 flex-grow">Landing page website menggunakan css dan javacript.</p>
                    <a href="https://github.com/Muhammadfadhil01/Responsive-landing-page" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 mt-4 text-center">
                        Detail Proyek
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Skills</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-semibold mb-2">HTML</h3>
                    <p class="text-gray-600">Advanced</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-semibold mb-2">CSS</h3>
                    <p class="text-gray-600">Advanced</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-semibold mb-2">JavaScript</h3>
                    <p class="text-gray-600">Intermediate</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-semibold mb-2">PHP</h3>
                    <p class="text-gray-600">Intermediate</p>
                </div>
            </div>
            <br><br>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-semibold mb-2">Tailwind</h3>
                    <p class="text-gray-600">Advanced</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-semibold mb-2">Bootstrap</h3>
                    <p class="text-gray-600">Advanced</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-semibold mb-2">Laravel</h3>
                    <p class="text-gray-600">Intermediate</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-semibold mb-2">Mysql</h3>
                    <p class="text-gray-600">Intermediate</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Experience</h2>
            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">IT Suppot Intern - Maybank finance</h3>
                    <p class="text-gray-600">2023</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Contact Me</h2>
            <p class="text-gray-600">Email: fadilnaim58@gmail.com</p>
            <p class="text-gray-600">Phone: +628 881 834 680</p>
            <div class="mt-6 flex justify-center space-x-4">
                <a href="https://github.com/Muhammadfadhil01/" class="text-gray-600 hover:text-gray-800">GitHub</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-laravel py-6">
        <div class="container mx-auto px-4 text-center">
            <p class="text-white">&copy; 2023 Muhammad Fadhil Naim. All rights reserved.</p>
        </div>
    </footer>

    <!-- JavaScript untuk Mobile Menu -->
    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>

</html>