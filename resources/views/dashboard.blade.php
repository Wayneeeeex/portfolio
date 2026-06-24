<x-guest-layout>
    <nav class="fixed top-0 left-0 right-0 bg-white/95 dark:bg-zinc-950/95 backdrop-blur-lg z-50 border-b border-zinc-200 dark:border-zinc-800">
        <div class="w-full px-6 py-5 flex justify-between items-center">
            <a href="/" class="font-bold text-2xl tracking-tight text-emerald-400">Wayne</a>
            
            <div class="hidden md:flex items-center gap-10 text-sm font-medium text-white">
                <a href="#about" class="hover:text-emerald-500 transition-colors">About</a>
                <a href="#skills" class="hover:text-emerald-500 transition-colors">Skills</a>
                <a href="#experience" class="hover:text-emerald-500 transition-colors">Experience</a>
                <a href="#projects" class="hover:text-emerald-500 transition-colors">Projects</a>
                <a href="#contact" class="hover:text-emerald-500 transition-colors">Contact</a>
            </div>
        </div>
    </nav>

    <section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-zinc-900 to-black text-white pt-16">
        <div class="w-full text-center px-6">
            <h1 class="text-6xl md:text-[8rem] font-bold mb-6 tracking-tighter min-h-[140px]">
                <span id="typewriter" class="font-mono border-r-4 border-emerald-400 inline-block whitespace-pre-wrap animate-pulse-cursor"></span>
            </h1>
            
            <p class="text-2xl md:text-3xl text-zinc-400 mb-10 min-h-[40px]">
                Full Stack Developer &amp; Problem Solver
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#about" 
                   class="px-10 py-4 bg-white text-black font-semibold rounded-2xl hover:bg-emerald-400 hover:text-white transition text-lg">
                    Learn More
                </a>
                <a href="#projects" 
                   class="px-10 py-4 border border-white/60 font-semibold rounded-2xl hover:bg-white/10 transition text-lg">
                    View Projects
                </a>
            </div>
        </div>
    </section>

    <section id="about" class="min-h-screen bg-white dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-800 flex items-center justify-center">
    <!-- Balanced Central Container -->
    <div class="max-w-5xl w-full mx-auto px-6 lg:px-12">

        <div class="flex flex-col md:flex-row gap-8 lg:gap-12 items-center md:items-start justify-center">

            <!-- Left Side: Image -->
            <div class="flex-shrink-0 order-first md:order-none">
                <img src="{{ asset('img/dev.png') }}" alt="Your Image Description" class="w-80 h-80 border border-zinc-300 dark:border-zinc-600 rounded-3xl object-cover shadow-xl">
            </div>

            <!-- Right Side: Content Column (Heading + Details) -->
            <div class="space-y-6 max-w-2xl text-center md:text-left">

                <!-- "About Me" is now locked right here -->
                <h2 class="text-4xl md:text-[4rem] font-bold text-emerald-400 dark:text-emerald-400 leading-none tracking-tighter mb-4">
                    About Me
                </h2>

                <!-- Details paragraphs -->
                <div class="space-y-4 text-lg leading-relaxed text-zinc-800 dark:text-zinc-300">
                    <p>I'm a passionate developer who loves building clean, fast, and user-friendly web applications.</p>
                    <p>With strong experience in Laravel, Tailwind CSS, and modern JavaScript, I enjoy turning ideas into reality.</p>
                </div>

            </div>

        </div>
    </div>
</section>



<section id="skills" class="py-24 bg-zinc-100 dark:bg-zinc-950 border-b border-zinc-200 dark:border-zinc-800 min-h-screen flex items-center justify-center">
        <!-- Balanced Central Container -->
        <div class="max-w-6xl w-full px-6 lg:px-12 flex flex-col md:flex-row gap-12 lg:gap-16 items-center">

            <!-- Left Side: Heading (Centered on mobile, left-aligned on desktop) -->
            <div class="w-full md:w-1/2 text-center md:text-left">
                <h2 class="text-4xl md:text-[5rem] font-bold text-emerald-400 dark:text-white leading-none tracking-tighter">
                    Skills & Technologies
                </h2>
            </div>

            <!-- Right Side: Grid Container -->
            <div class="w-full md:w-1/2 flex justify-center items-stretch pb-8">
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 max-w-xl animate__animated animate__fadeIn">
                    @foreach(['Laravel', 'PHP', 'Tailwind CSS', 'MySQL', 'JavaScript', 'Vue.js', 'Git', 'Java', 'Alpine.js', 'Python'] as $skill)
                        <div class="bg-white dark:bg-zinc-900 p-6 rounded-2xl flex items-center justify-center font-semibold shadow-sm hover:shadow transition border border-zinc-200 dark:border-zinc-800 text-sm md:text-base text-emerald-400 dark:text-white">
                            <img src="{{ asset('img/icon/' . strtolower(str_replace(' ', '-', $skill)) . '.png') }}" alt="{{ $skill }} Logo" class="mr-2 w-[30px] h-[30px] flex-shrink-0 object-contain">
                            <span>{{ $skill }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>



<section id="experience" class="py-24 bg-white dark:bg-zinc-900">
    <div class="w-full px-6">
        <h2 class="text-5xl font-bold mb-12 text-center text-emerald-400">Experience</h2>
        <div class="max-w-3xl mx-auto space-y-12">
            <div class="flex flex-col md:flex-row gap-8">
                <div class="md:w-1/3">
                    <h3 class="font-semibold text-xl text-emerald-400">BSIT-IS Student</h3>
                    <p class="text-white">2023 - Present</p>
                </div>
                <div class="md:w-2/3">
                    <p class="text-zinc-600 dark:text-zinc-400">
                        Participated in software development and networking projects as a Project Manager, Backend Developer, and QA Tester. Experienced in Laravel, MySQL, Tailwind CSS, and network configuration using eNSP.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

    <section id="projects" class="py-24 bg-zinc-100 dark:bg-zinc-950">
        <div class="w-full px-6">
            <h2 class="text-5xl font-bold mb-12 text-center text-emerald-400">Featured Projects</h2>
            <div class="flex gap-8 overflow-x-auto pb-4 snap-x snap-mandatory scrollbar-hide">

   <!-- Inventory Management System -->
<div class="min-w-[350px] max-w-[350px] bg-white dark:bg-zinc-900 rounded-3xl overflow-hidden shadow-lg hover:shadow-xl transition snap-start flex flex-col">

    <div class="h-64 bg-zinc-300 dark:bg-zinc-700 flex items-center justify-center">
        <img src="{{ asset('img/invent.jpg') }}"
             alt="Inventory Management System"
             class="w-full h-full object-cover">
    </div>

    <div class="p-8 flex flex-col flex-grow">

        <h3 class="font-bold text-2xl mb-3 text-emerald-400">
            Inventory Management System
        </h3>

        <p class="text-zinc-600 dark:text-zinc-400 mb-6 min-h-[120px]">
            A full-stack inventory management system built for managing products,
            stock levels, and inventory transactions efficiently.
        </p>

        <div class="flex gap-2 flex-wrap mb-6 min-h-[90px] content-start">
            <span class="text-xs px-4 py-2 bg-emerald-100 dark:bg-emerald-900 text-emerald-700 dark:text-emerald-300 rounded-full">Laravel</span>
            <span class="text-xs px-4 py-2 bg-emerald-100 dark:bg-emerald-900 text-emerald-700 dark:text-emerald-300 rounded-full">Tailwind CSS</span>
            <span class="text-xs px-4 py-2 bg-emerald-100 dark:bg-emerald-900 text-emerald-700 dark:text-emerald-300 rounded-full">MySQL</span>
        </div>

        <div class="flex gap-6 text-emerald-600 font-medium mt-auto">
            <<a href="https://github.com/Wayneeeeex/Inventory-Management-System"
       target="_blank"
       rel="noopener noreferrer"
       class="hover:underline">
        GitHub Repository →
        </div>

    </div>
</div>

<!-- POS NetBeans -->
<div class="min-w-[350px] max-w-[350px] bg-white dark:bg-zinc-900 rounded-3xl overflow-hidden shadow-lg hover:shadow-xl transition snap-start flex flex-col">

    <div class="h-64 bg-zinc-300 dark:bg-zinc-700 flex items-center justify-center">
        <img src="{{ asset('img/POS-NETBEANS.png') }}"
             alt="POS NetBeans"
             class="w-full h-full object-cover">
    </div>

    <div class="p-8 flex flex-col flex-grow">

        <h3 class="font-bold text-2xl mb-3 text-emerald-400">
            Point of Sale System (1st Year Project)
        </h3>

        <p class="text-zinc-600 dark:text-zinc-400 mb-6 min-h-[120px]">
            A simple point-of-sale application developed using Java and Apache NetBeans.
        </p>

        <div class="flex gap-2 flex-wrap mb-6 min-h-[90px] content-start">
            <span class="text-xs px-4 py-2 bg-emerald-100 dark:bg-emerald-900 text-emerald-700 dark:text-emerald-300 rounded-full">Java</span>
            <span class="text-xs px-4 py-2 bg-emerald-100 dark:bg-emerald-900 text-emerald-700 dark:text-emerald-300 rounded-full">NetBeans</span>
        </div>

        <div class="flex gap-6 text-emerald-600 font-medium mt-auto">
             <a href="https://github.com/Wayneeeeex/PC-Shop"
       target="_blank"
       rel="noopener noreferrer"
       class="hover:underline">
        GitHub Repository →
        </div>

    </div>
</div>

<!-- POS File Handling -->
<div class="min-w-[350px] max-w-[350px] bg-white dark:bg-zinc-900 rounded-3xl overflow-hidden shadow-lg hover:shadow-xl transition snap-start flex flex-col">

    <div class="h-64 bg-zinc-300 dark:bg-zinc-700 flex items-center justify-center">
        <img src="{{ asset('img/POS-FILEHANDLING.jpg') }}"
             alt="POS File Handling"
             class="w-full h-full object-cover">
    </div>

    <div class="p-8 flex flex-col flex-grow">

        <h3 class="font-bold text-2xl mb-3 text-emerald-400">
            Point of Sale System (File Handling)
        </h3>

        <p class="text-zinc-600 dark:text-zinc-400 mb-6 min-h-[120px]">
            A Java-based POS system utilizing file handling for data storage with
            separate Admin and User interfaces.
        </p>

        <div class="flex gap-2 flex-wrap mb-6 min-h-[90px] content-start">
            <span class="text-xs px-4 py-2 bg-emerald-100 dark:bg-emerald-900 text-emerald-700 dark:text-emerald-300 rounded-full">Java</span>
            <span class="text-xs px-4 py-2 bg-emerald-100 dark:bg-emerald-900 text-emerald-700 dark:text-emerald-300 rounded-full">File Handling</span>
            <span class="text-xs px-4 py-2 bg-emerald-100 dark:bg-emerald-900 text-emerald-700 dark:text-emerald-300 rounded-full">Eclipse</span>
        </div>

        <div class="flex gap-6 text-emerald-600 font-medium mt-auto">
            <div class="text-emerald-600 font-medium mt-auto">
    <a href="https://github.com/Wayneeeeex/PP2-LE-Main"
       target="_blank"
       rel="noopener noreferrer"
       class="hover:underline">
        GitHub Repository →
    </a>
</div>
        </div>

    </div>
</div>

<!-- Capstone Repository -->
<div class="min-w-[350px] max-w-[350px] bg-white dark:bg-zinc-900 rounded-3xl overflow-hidden shadow-lg hover:shadow-xl transition snap-start flex flex-col">

    <div class="h-64 bg-zinc-300 dark:bg-zinc-700 flex items-center justify-center">
        <img src="{{ asset('img/CAPSTONE-REPOSITORY.jpg') }}"
             alt="Capstone Repository"
             class="w-full h-full object-cover">
    </div>

    <div class="p-8 flex flex-col flex-grow">

        <h3 class="font-bold text-2xl mb-3 text-emerald-400">
            Capstone Research Repository
        </h3>

        <p class="text-zinc-600 dark:text-zinc-400 mb-6 min-h-[120px]">
            A web-based repository for storing, searching, and managing capstone
            research projects and academic documents.
        </p>

        <div class="flex gap-2 flex-wrap mb-6 min-h-[90px] content-start">
            <span class="text-xs px-4 py-2 bg-emerald-100 dark:bg-emerald-900 text-emerald-700 dark:text-emerald-300 rounded-full">File Handling</span>
            <span class="text-xs px-4 py-2 bg-emerald-100 dark:bg-emerald-900 text-emerald-700 dark:text-emerald-300 rounded-full">HTML</span>
            <span class="text-xs px-4 py-2 bg-emerald-100 dark:bg-emerald-900 text-emerald-700 dark:text-emerald-300 rounded-full">CSS</span>
        </div>

        <div class="flex gap-6 text-emerald-600 font-medium mt-auto">
             <a href="https://github.com/Wayneeeeex/PP2-LE-Main"
       target="_blank"
       rel="noopener noreferrer"
       class="hover:underline">
        GitHub Repository →
    </a>
        </div>

    </div>
</div>
</div>
        
        
    </section>

    <section id="contact" class="py-24 bg-white dark:bg-zinc-900">
        <div class="max-w-2xl mx-auto px-6 text-center">
            <h2 class="text-5xl font-bold mb-8 text-white">Get In Touch</h2>
            <p class="text-xl text-white-600 dark:text-zinc-400 mb-10">I'm currently open to new opportunities and collaborations.</p>
            <a href="mailto:compasionchristian@gmail.com" 
               class="inline-block px-12 py-5 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-lg rounded-3xl transition">
                Say Hello ✉️
            </a>
        </div>
    </section>

    <style>
        @keyframes blink-cursor {
            50% { border-color: transparent; }
        }
        .animate-pulse-cursor {
            animation: blink-cursor 0.75s step-end infinite;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const element = document.getElementById('typewriter');
            const prefix = "Hi, I'm ";
            const name = "Wayne!"; 
            
            let index = 0;
            let isDeleting = false;
            const totalLength = prefix.length + name.length;

            function playTypewriter() {
                let currentPrefix = "";
                let currentName = "";

                if (index <= prefix.length) {
                    currentPrefix = prefix.substring(0, index);
                    element.innerHTML = currentPrefix;
                } else {
                    currentPrefix = prefix;
                    currentName = name.substring(0, index - prefix.length);
                    element.innerHTML = `${currentPrefix}<span class="text-emerald-400">${currentName}</span>`;
                }

                let timing = isDeleting ? 30 : 75;

                if (!isDeleting && index === totalLength) {
                    timing = 2500; 
                    isDeleting = true;
                } else if (isDeleting && index === 0) {
                    timing = 500;  
                    isDeleting = false;
                }

                index += isDeleting ? -1 : 1;
                setTimeout(playTypewriter, timing);
            }

            playTypewriter();
        });
    </script>
</x-guest-layout>