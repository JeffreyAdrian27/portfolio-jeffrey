<!DOCTYPE html>
<html lang="id" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Primary Meta SEO Tags -->
    <title>Jeffrey Adrian - Portofolio &amp; Software Developer</title>
    <meta name="title" content="Jeffrey Adrian - Portofolio &amp; Software Developer">
    <meta name="description" content="Portofolio resmi Jeffrey Adrian, S.Kom - Software Developer &amp; Full-Stack Engineer spesialis Laravel, React Native, Node.js, Python Data Analytics, dan pembuatan aplikasi web modern.">
    <meta name="keywords" content="Jeffrey Adrian, Portofolio Jeffrey Adrian, Portfolio Jeffrey Adrian, Jeffrey Adrian Developer, Jeffrey Adrian S.Kom, Software Developer Jeffrey Adrian, Web Developer Surabaya, Full-Stack Developer, React Native Developer, Laravel Developer, Portofolio Web, Portfolio Developer">
    <meta name="author" content="Jeffrey Adrian">
    <meta name="robots" content="index, follow, max-snippet:-1, noimageindex, max-video-preview:-1">
    <meta name="googlebot" content="index, follow, max-snippet:-1, noimageindex, max-video-preview:-1">
    <meta name="googlebot-image" content="noindex, nofollow, noimageindex">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook / LinkedIn / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Portofolio Jeffrey Adrian - Software Developer &amp; Full-Stack">
    <meta property="og:description" content="Portofolio resmi Jeffrey Adrian, S.Kom - Software Developer &amp; Full-Stack Engineer. Jelajahi karya proyek web/mobile, sertifikat, dan keahlian teknis.">
    <meta property="og:image" content="{{ asset('images/profile_jeffrey_adrian.jpg') }}">
    <meta property="og:site_name" content="Portofolio Jeffrey Adrian">
    <meta property="og:locale" content="id_ID">

    <!-- Twitter Card Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="Portofolio Jeffrey Adrian - Software Developer">
    <meta name="twitter:description" content="Portofolio resmi Jeffrey Adrian, S.Kom - Software Developer &amp; Full-Stack Engineer.">
    <meta name="twitter:image" content="{{ asset('images/profile_jeffrey_adrian.jpg') }}">

    <!-- Schema.org JSON-LD Structured Data for Search Engines -->
    @php
        $schemaData = [
            '@context' => 'https://schema.org',
            '@graph' => [
                [
                    '@type' => 'Person',
                    '@id' => url()->current() . '#person',
                    'name' => 'Jeffrey Adrian',
                    'alternateName' => ['Jeffrey', 'Jeffrey Adrian, S.Kom', 'JeffreyAdrian27'],
                    'givenName' => 'Jeffrey',
                    'familyName' => 'Adrian',
                    'jobTitle' => 'Software Developer',
                    'description' => 'Passionate Software Developer dedicated to designing and building modern web and mobile applications.',
                    'image' => asset('images/profile_jeffrey_adrian.jpg'),
                    'url' => url()->current(),
                    'sameAs' => [
                        $profileData['contact']['github_url'],
                        $profileData['contact']['linkedin_url'],
                        $profileData['contact']['instagram_url']
                    ],
                    'alumniOf' => [
                        '@type' => 'EducationalOrganization',
                        'name' => 'Universitas Ciputra Surabaya'
                    ],
                    'knowsAbout' => [
                        'React Native',
                        'Laravel',
                        'Node.js',
                        'Python Data Analytics',
                        'Tailwind CSS',
                        'Software Engineering',
                        'Full-Stack Web Development'
                    ]
                ],
                [
                    '@type' => 'WebSite',
                    '@id' => url()->current() . '#website',
                    'url' => url()->current(),
                    'name' => 'Portofolio Jeffrey Adrian',
                    'alternateName' => ['Portfolio Jeffrey Adrian', 'Website Jeffrey Adrian'],
                    'description' => 'Portofolio resmi Jeffrey Adrian - Software Developer & Full-Stack Engineer',
                    'author' => [
                        '@id' => url()->current() . '#person'
                    ],
                    'inLanguage' => 'id-ID'
                ]
            ]
        ];
    @endphp
    <script type="application/ld+json">
        {!! json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Smooth transitions */
        body {
            transition: background-color 0.4s ease, color 0.4s ease;
        }

        /* Anti-Save / Anti-Download Image Protection */
        img {
            -webkit-user-drag: none;
            -khtml-user-drag: none;
            -moz-user-drag: none;
            -o-user-drag: none;
            user-drag: none;
            -webkit-touch-callout: none;
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
        }

        @media (min-width: 1001px) {
            .about-responsive-flex {
                flex-direction: row !important;
                align-items: flex-start !important;
            }
            .about-photo-wrapper {
                margin-left: 0 !important;
                margin-right: 0 !important;
            }
        }
        @media (max-width: 1000px) {
            .about-responsive-flex {
                flex-direction: column !important;
                align-items: center !important;
            }
            .about-photo-wrapper {
                margin-left: auto !important;
                margin-right: auto !important;
                margin-bottom: 2rem !important;
            }
        }

        /* Home section responsive sizing (< 500px) */
        .home-title-name {
            font-family: Comic Sans, Apple Chancery, Bradley Hand;
            font-size: 60px;
            line-height: 1.1;
        }
        .home-photo-frame {
            width: 380px;
            height: 380px;
        }
        @media (max-width: 500px) {
            .home-title-name {
                font-size: 34px !important;
                line-height: 1.2 !important;
            }
            .home-photo-frame {
                width: 220px !important;
                height: 220px !important;
            }
        }
        @media (min-width: 501px) and (max-width: 768px) {
            .home-title-name {
                font-size: 46px !important;
            }
            .home-photo-frame {
                width: 290px !important;
                height: 290px !important;
            }
        }

        /* Nav active link styling */
        .nav-item.active {
            font-weight: 700 !important;
        }

        /* Scroll Down Indicator Animation (Sesuai Referensi Gambar 2) */
        @keyframes scrollDownDrop {
            0% {
                transform: translateY(-100%);
                opacity: 0;
            }
            30% {
                opacity: 1;
            }
            70% {
                opacity: 1;
            }
            100% {
                transform: translateY(120%);
                opacity: 0;
            }
        }

        .animate-scroll-drop {
            animation: scrollDownDrop 2.2s cubic-bezier(0.65, 0, 0.35, 1) infinite;
        }

        /* Card Slider Fanned Stack Styles (Ukuran Lebih Compact & Ramping) */
        #deckStage {
            position: relative;
            width: 240px;
            height: 330px;
            margin: 0 auto;
            perspective: 1000px;
        }

        .skill-card {
            position: absolute;
            top: 0;
            left: 0;
            width: 240px;
            height: 330px;
            border-radius: 20px;
            padding: 24px 20px;
            box-sizing: border-box;
            background-color: #171822 !important; /* Solid opaque dark charcoal */
            color: #ffffff !important;
            border: 1px solid rgba(255, 255, 255, 0.12) !important;
            box-shadow: 8px 16px 32px rgba(0, 0, 0, 0.65) !important;
            user-select: none;
            -webkit-user-select: none;
            overflow: hidden;
            cursor: pointer;
            will-change: transform;
            transform-origin: bottom center;
            transition: transform 0.45s cubic-bezier(0.2, 0.8, 0.2, 1), box-shadow 0.3s ease;
        }

        html:not(.dark) .skill-card {
            background-color: #ffffff !important;
            color: #0f172a !important;
            border: 1px solid #cbd5e1 !important;
            box-shadow: -2px 8px 24px rgba(15, 23, 42, 0.12), 4px 14px 28px rgba(0, 0, 0, 0.08), 0 1px 3px rgba(0, 0, 0, 0.05) !important;
        }

        html:not(.dark) .skill-card:hover {
            box-shadow: -4px 12px 32px rgba(15, 23, 42, 0.18), 6px 18px 36px rgba(0, 0, 0, 0.14) !important;
        }
    </style>
</head>
<body class="bg-slate-50 text-zinc-900 dark:bg-[#15161c] dark:text-zinc-100 min-h-screen selection:bg-teal-500 selection:text-white" id="bodyRoot">

    <!-- Floating Island Navbar (Desain Sesuai Referensi) -->
    <header class="fixed top-4 md:top-6 left-1/2 -translate-x-1/2 z-50 w-[95%] max-w-6xl">
        <div id="navbarPill" class="relative flex items-center justify-between gap-4 lg:gap-8 px-4 sm:px-6 py-2.5 sm:py-3 rounded-2xl bg-white/90 dark:bg-[#1a1b22]/90 border border-zinc-200/90 dark:border-white/10 shadow-xl dark:shadow-2xl backdrop-blur-xl transition-all duration-300">
            
            <!-- Left: Logo & Name -->
            <a href="#home" class="nav-scroll-trigger flex items-center gap-3 group focus:outline-none shrink-0" data-target="home">
                <!-- Badge Huruf Initial (seperti 'R' pada referensi) -->
                <div class="w-8 h-8 rounded-lg bg-zinc-900 text-white dark:bg-white dark:text-zinc-950 flex items-center justify-center font-serif font-black italic text-lg shadow-sm group-hover:scale-105 transition-transform duration-300">
                    J
                </div>
                <span class="font-bold tracking-normal text-sm sm:text-base text-zinc-900 dark:text-white whitespace-nowrap">
                    {{ $profileData['name'] }}, S.Kom
                </span>
            </a>

            <!-- Middle: Nav Links with Animated Active Indicator (Hidden on Mobile/Tablet < lg) -->
            <nav id="navMenu" class="hidden lg:flex relative items-center gap-5 xl:gap-7 text-xs sm:text-sm font-semibold tracking-wide">
                <!-- Sliding Animated Underline Indicator (Teal Sesuai Gambar 2) -->
                <span id="navIndicator" class="absolute bottom-[-3px] left-0 h-[2px] bg-teal-500 dark:bg-teal-400 rounded-full transition-all duration-300 ease-out pointer-events-none opacity-0 shadow-[0_0_8px_rgba(45,212,191,0.6)]"></span>

                <a href="#home" data-target="home" class="nav-item relative py-1 text-zinc-500 hover:text-zinc-950 dark:text-zinc-400 dark:hover:text-white transition-colors duration-200 focus:outline-none whitespace-nowrap">
                    Home
                </a>
                <a href="#about" data-target="about" class="nav-item relative py-1 text-zinc-500 hover:text-zinc-950 dark:text-zinc-400 dark:hover:text-white transition-colors duration-200 focus:outline-none whitespace-nowrap">
                    About
                </a>
                <a href="#skills" data-target="skills" class="nav-item relative py-1 text-zinc-500 hover:text-zinc-950 dark:text-zinc-400 dark:hover:text-white transition-colors duration-200 focus:outline-none whitespace-nowrap">
                    Skills
                </a>
                <a href="#experience" data-target="experience" class="nav-item relative py-1 text-zinc-500 hover:text-zinc-950 dark:text-zinc-400 dark:hover:text-white transition-colors duration-200 focus:outline-none whitespace-nowrap">
                    Experience
                </a>
                <a href="#education" data-target="education" class="nav-item relative py-1 text-zinc-500 hover:text-zinc-950 dark:text-zinc-400 dark:hover:text-white transition-colors duration-200 focus:outline-none whitespace-nowrap">
                    Education
                </a>
                <a href="#certificates" data-target="certificates" class="nav-item relative py-1 text-zinc-500 hover:text-zinc-950 dark:text-zinc-400 dark:hover:text-white transition-colors duration-200 focus:outline-none whitespace-nowrap">
                    Certificates
                </a>
                <a href="#projects" data-target="projects" class="nav-item relative py-1 text-zinc-500 hover:text-zinc-950 dark:text-zinc-400 dark:hover:text-white transition-colors duration-200 focus:outline-none whitespace-nowrap">
                    Portfolio
                </a>
                <a href="#contact" data-target="contact" class="nav-item relative py-1 text-zinc-500 hover:text-zinc-950 dark:text-zinc-400 dark:hover:text-white transition-colors duration-200 focus:outline-none whitespace-nowrap">
                    Contact
                </a>
            </nav>

            <!-- Right: Theme Toggle, Hire Me, & Hamburger Menu -->
            <div class="flex items-center gap-2 sm:gap-3 shrink-0">
                <!-- Theme Toggle Button -->
                <button
                    id="themeButton"
                    onclick="toggleThemeWithAnimation()"
                    class="p-2 rounded-xl border border-zinc-200 dark:border-white/10 text-zinc-600 hover:text-zinc-950 dark:text-zinc-300 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-white/10 transition-colors duration-300 focus:outline-none cursor-pointer flex items-center justify-center"
                    title="Toggle Light / Dark Mode"
                    aria-label="Toggle Light / Dark Mode"
                >
                    <div id="themeIconWrapper" class="flex items-center justify-center w-5 h-5">
                        <svg
                            id="themeIcon"
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <!-- Rendered by JavaScript -->
                        </svg>
                    </div>
                </button>

                <!-- Hire Me CTA Button (Buka Modal Contact Me / Navigasi Contact) -->
                <button
                    type="button"
                    onclick="openContactModal()" 
                    class="hidden sm:inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full border border-teal-500/50 bg-teal-500/10 text-teal-600 dark:text-teal-400 hover:bg-teal-500 hover:text-white dark:hover:bg-teal-500 dark:hover:text-zinc-950 text-xs sm:text-sm font-semibold tracking-wide transition-all duration-300 shadow-sm focus:outline-none whitespace-nowrap cursor-pointer"
                    title="Hire Me / Get in touch"
                >
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span>Hire Me</span>
                </button>

                <!-- Hamburger Button (Visible on screens < lg) -->
                <button
                    id="hamburgerBtn"
                    onclick="toggleMobileMenu()"
                    class="lg:hidden flex flex-col justify-center items-center w-9 h-9 rounded-xl hover:bg-zinc-100 dark:hover:bg-white/10 transition-colors duration-200 focus:outline-none cursor-pointer p-1.5"
                    aria-label="Toggle Navigation Menu"
                    aria-expanded="false"
                >
                    <span id="hamLine1" class="w-5 h-[2px] bg-zinc-800 dark:bg-white rounded-full transition-all duration-300 ease-in-out transform origin-center"></span>
                    <span id="hamLine2" class="w-5 h-[2px] bg-zinc-800 dark:bg-white rounded-full transition-all duration-300 ease-in-out my-[4px]"></span>
                    <span id="hamLine3" class="w-5 h-[2px] bg-zinc-800 dark:bg-white rounded-full transition-all duration-300 ease-in-out transform origin-center"></span>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Dropdown Panel with Slide & Fade Animation (Visible on < lg) -->
        <div 
            id="mobileMenu" 
            class="lg:hidden mt-2.5 w-full rounded-2xl bg-white/95 dark:bg-[#1a1b22]/95 border border-zinc-200/90 dark:border-white/10 shadow-2xl backdrop-blur-2xl overflow-hidden transition-all duration-300 ease-out origin-top opacity-0 scale-95 pointer-events-none max-h-0"
        >
            <div class="p-3.5 pb-4 flex flex-col gap-1.5 text-sm font-semibold tracking-wide">
                <a href="#home" data-target="home" class="mobile-nav-item flex items-center justify-between px-4 py-3 rounded-xl text-zinc-600 dark:text-zinc-300 hover:text-zinc-950 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-white/5 transition-all cursor-pointer">
                    <span>Home</span>
                    <span class="text-teal-400 font-mono text-[11px] font-bold">01</span>
                </a>
                <a href="#about" data-target="about" class="mobile-nav-item flex items-center justify-between px-4 py-3 rounded-xl text-zinc-600 dark:text-zinc-300 hover:text-zinc-950 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-white/5 transition-all cursor-pointer">
                    <span>About</span>
                    <span class="text-teal-400 font-mono text-[11px] font-bold">02</span>
                </a>
                <a href="#skills" data-target="skills" class="mobile-nav-item flex items-center justify-between px-4 py-3 rounded-xl text-zinc-600 dark:text-zinc-300 hover:text-zinc-950 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-white/5 transition-all cursor-pointer">
                    <span>Skills</span>
                    <span class="text-teal-400 font-mono text-[11px] font-bold">03</span>
                </a>
                <a href="#experience" data-target="experience" class="mobile-nav-item flex items-center justify-between px-4 py-3 rounded-xl text-zinc-600 dark:text-zinc-300 hover:text-zinc-950 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-white/5 transition-all cursor-pointer">
                    <span>Experience</span>
                    <span class="text-teal-400 font-mono text-[11px] font-bold">04</span>
                </a>
                <a href="#education" data-target="education" class="mobile-nav-item flex items-center justify-between px-4 py-3 rounded-xl text-zinc-600 dark:text-zinc-300 hover:text-zinc-950 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-white/5 transition-all cursor-pointer">
                    <span>Education</span>
                    <span class="text-teal-400 font-mono text-[11px] font-bold">05</span>
                </a>
                <a href="#certificates" data-target="certificates" class="mobile-nav-item flex items-center justify-between px-4 py-3 rounded-xl text-zinc-600 dark:text-zinc-300 hover:text-zinc-950 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-white/5 transition-all cursor-pointer">
                    <span>Certificates</span>
                    <span class="text-teal-400 font-mono text-[11px] font-bold">06</span>
                </a>
                <a href="#projects" data-target="projects" class="mobile-nav-item flex items-center justify-between px-4 py-3 rounded-xl text-zinc-600 dark:text-zinc-300 hover:text-zinc-950 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-white/5 transition-all cursor-pointer">
                    <span>Portfolio</span>
                    <span class="text-teal-400 font-mono text-[11px] font-bold">07</span>
                </a>
                <a href="#contact" data-target="contact" class="mobile-nav-item flex items-center justify-between px-4 py-3.5 rounded-xl bg-teal-500/10 text-teal-600 dark:text-teal-300 font-bold border border-teal-500/30 hover:bg-teal-500 hover:text-white dark:hover:bg-teal-500 dark:hover:text-zinc-950 transition-all cursor-pointer shadow-sm mt-1">
                    <span class="text-sm sm:text-base font-bold">Contact</span>
                    <span class="px-2.5 py-1 rounded-md bg-teal-500/20 text-teal-600 dark:text-teal-300 font-mono text-xs font-bold">08</span>
                </a>
            </div>
        </div>
    </header>

    <!-- 1. HOME / HERO SECTION -->
    <section id="home" class="min-h-screen flex items-center justify-center max-w-6xl mx-auto px-6 pt-32 pb-24 md:pb-28 relative">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center w-full">
            <div class="text-left">
                <p class="text-xs font-semibold tracking-widest uppercase text-zinc-500 mb-4">HELLO, I'M</p>
                <h1 class="home-title-name font-black mb-6 transition-colors duration-500 text-zinc-900 dark:text-white">
                     {{ $profileData['name'] }}
                </h1>
                <p class="text-lg md:text-xl font-medium text-zinc-600 dark:text-zinc-400 mb-4">S1 Informatika</p>
                <div class="text-lg md:text-xl font-medium text-zinc-600 dark:text-zinc-400 mb-4 flex items-center gap-2">
                    <span id="typed-text" class="text-teal-500 dark:text-teal-400 font-semibold"></span>
                    <span class="animate-pulse">|</span>
                </div>
                <p class="text-sm md:text-base text-zinc-600 dark:text-zinc-400 leading-relaxed mb-8 max-w-lg">
                    I have an innate passion for building things that matter—turning abstract concepts into functional, high-performance web and mobile applications.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#projects" data-target="projects" class="nav-scroll-trigger px-7 py-3 bg-zinc-900 text-white dark:bg-white dark:text-zinc-950 text-sm font-semibold rounded-xl hover:opacity-90 transition-all duration-300 shadow-lg">
                        View Projects
                    </a>
                    <a href="#about" data-target="about" class="nav-scroll-trigger px-7 py-3 border border-zinc-300 dark:border-white/20 text-zinc-700 dark:text-zinc-300 text-sm font-semibold rounded-xl hover:bg-zinc-100 dark:hover:bg-white/10 transition-all duration-300">
                        About Me
                    </a>
                </div>
            </div>

            <div class="flex justify-center md:justify-end">
                <div class="home-photo-frame shrink-0 rounded-full bg-zinc-200 dark:bg-[#1d1e26] border-2 border-white dark:border-white/15 overflow-hidden shadow-2xl relative transition-all duration-500">
                    <img src="{{ asset('images/profile_jeffrey_adrian.jpg') }}" alt="Jeffrey Adrian" class="w-full h-full object-cover">
                </div>
            </div>
        </div>

        <!-- SCROLL DOWN INDICATOR (Sesuai Referensi Gambar 2) -->
        <div class="absolute bottom-5 md:bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center z-20">
            <a href="#about" data-target="about" class="nav-scroll-trigger group flex flex-col items-center gap-2 cursor-pointer focus:outline-none transition-all duration-300" aria-label="Scroll down to About section">
                <span class="text-[10px] md:text-[11px] font-semibold tracking-[0.25em] uppercase text-zinc-400 dark:text-zinc-500 group-hover:text-teal-500 dark:group-hover:text-teal-400 transition-colors duration-300">
                    SCROLL DOWN
                </span>
                <div class="w-[2px] h-9 md:h-10 bg-zinc-300 dark:bg-zinc-800 rounded-full relative overflow-hidden flex justify-center">
                    <div class="w-full h-1/2 bg-gradient-to-b from-teal-400 to-teal-500 rounded-full animate-scroll-drop shadow-[0_0_8px_rgba(45,212,191,0.8)]"></div>
                </div>
            </a>
        </div>
    </section>

    <!-- 2. ABOUT ME SECTION -->
    <section id="about" class="pb-32 border-t border-zinc-200 dark:border-white/10 transition-colors duration-500">
        <div class="max-w-6xl mx-auto px-6">
            <!-- Judul -->
            <div class="text-center mt-12 mb-20">
                <h2 style="font-family: Georgia, 'Times New Roman', serif;" class="text-4xl md:text-5xl font-black text-zinc-900 dark:text-white tracking-tight drop-shadow-sm">
                    <span class="text-teal-500 dark:text-teal-400">About</span> Me
                </h2>
            </div>

            <!-- Layout Utama menggunakan class kustom 'about-responsive-flex' -->
            <div class="about-responsive-flex flex flex-col gap-12">
                <!-- KIRI: FOTO & STATISTIK -->
                <div style="width: 300px; min-width: 300px;" class="about-photo-wrapper shrink-0 mx-auto">
                    <!-- FOTO -->
                    <div style="width: 300px; height: 300px;" class="rounded-2xl overflow-hidden border border-zinc-200 dark:border-white/10 shadow-xl">
                        <img
                            src="{{ asset('images/profile_jeffrey_adrian.jpg') }}"
                            alt="Jeffrey Adrian"
                            class="w-full h-full object-cover object-center"
                        >
                    </div>

                    <!-- STATISTIK -->
                    <div class="mt-8 p-4 rounded-2xl bg-white dark:bg-[#1d1e26] border border-zinc-200 dark:border-white/10 shadow-xl flex items-center justify-between text-center">
                        <div class="flex-1 flex flex-col items-center justify-center">
                            <p class="text-base font-bold text-teal-500 dark:text-teal-400">2+</p>
                            <p class="text-[9px] uppercase tracking-wider text-zinc-500 dark:text-zinc-400 mt-1">Years Exp</p>
                        </div>
                        <div class="h-8 w-[1px] bg-zinc-200 dark:bg-white/10"></div>
                        <div class="flex-1 flex flex-col items-center justify-center">
                            <p class="text-base font-bold text-teal-500 dark:text-teal-400">6+</p>
                            <p class="text-[9px] uppercase tracking-wider text-zinc-500 dark:text-zinc-400 mt-1">Projects</p>
                        </div>
                        <div class="h-8 w-[1px] bg-zinc-200 dark:bg-white/10"></div>
                        <div class="flex-1 flex flex-col items-center justify-center">
                            <p class="text-base font-bold text-teal-500 dark:text-teal-400">10+</p>
                            <p class="text-[9px] uppercase tracking-wider text-zinc-500 dark:text-zinc-400 mt-1">Clients</p>
                        </div>
                    </div>

                    <!-- TOMBOL DOWNLOAD CV -->
                    <div class="mt-5">
                        <a 
                            href="{{ asset('images/cv_jeffrey adrian.pdf') }}" 
                            download="CV_Jeffrey_Adrian.pdf"
                            target="_blank"
                            class="group w-full py-3 px-5 rounded-2xl bg-teal-500 hover:bg-teal-600 text-white dark:bg-teal-500 dark:hover:bg-teal-400 dark:text-zinc-950 font-bold text-sm shadow-lg shadow-teal-500/20 hover:shadow-teal-500/35 hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300 flex items-center justify-center gap-2.5"
                        >
                            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-y-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                            <span>Download CV</span>
                        </a>
                    </div>
                </div>

                <!-- KANAN: BIO -->
                <div class="flex-1 w-full text-left">
                    <h3 class="text-2xl md:text-3xl font-bold text-zinc-900 dark:text-zinc-100 leading-snug mb-6">
                        Creative Technologist with Vision & Purpose
                    </h3>

                    <div class="space-y-5">
                        <p class="text-sm md:text-base text-zinc-600 dark:text-zinc-400 leading-relaxed">
                            Hi, I'm {{ $profileData['name'] }} — a passionate Software Developer dedicated to designing and building modern web and mobile applications. I enjoy turning creative ideas into functional and interactive digital solutions, complemented by a solid foundational understanding of IT support and infrastructure.
                        </p>
                        <p class="text-sm md:text-base text-zinc-600 dark:text-zinc-400 leading-relaxed">
                            With a background in Information Technology, I combine logical thinking with creative execution. I embrace modern technologies such as <strong class="text-zinc-900 dark:text-zinc-200">AI-assisted web development</strong> to accelerate innovation, alongside foundational skills in <strong class="text-zinc-900 dark:text-zinc-200">data science analysis</strong> to extract meaningful insights from data.
                        </p>
                        <p class="text-sm md:text-base text-zinc-600 dark:text-zinc-400 leading-relaxed">
                            Detail-oriented by nature and driven by excellence, I approach every project with precision, structure, and innovation. Whether I'm designing system architecture, developing web and mobile systems, or refining user experiences, I always aim for clarity, efficiency, and elegance.
                        </p>
                        <p class="text-sm md:text-base text-zinc-600 dark:text-zinc-400 leading-relaxed">
                            For me, technology is more than code — it's a tool to empower people, improve processes, and build something that lasts. I'm continuously growing, learning, and refining my craft — with a long-term vision to build impactful digital products and create solutions that make a difference.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. SKILLS SECTION: CARD SLIDER (SESUAI GAMBAR REFERENSI) -->
    <section id="skills" class="py-24 border-t border-zinc-200 dark:border-white/10 transition-colors duration-500 overflow-hidden">
        <div class="max-w-6xl mx-auto px-6">
            <!-- Header Section -->
            <div class="text-center mb-16">
                <p class="text-xs font-bold tracking-[0.25em] uppercase text-teal-500 dark:text-teal-400 mb-2">
                    MY
                </p>
                <h2 style="font-family: Georgia, 'Times New Roman', serif;" class="text-4xl md:text-5xl font-black text-zinc-900 dark:text-white tracking-tight drop-shadow-sm">
                    Skills
                </h2>
            </div>

            <!-- Card Slider Interactive Stage (Desain Presisi Sesuai Gambar 2) -->
            <div class="relative w-full max-w-lg mx-auto flex flex-col items-center">
                <!-- Deck Stage Container -->
                <div id="deckStage" class="select-none cursor-pointer" title="Click card to cycle">
                    @foreach($profileData['skills'] as $index => $skill)
                        <div class="skill-card flex flex-col justify-between" data-index="{{ $index }}">
                            <!-- Top Area: Number (Kanan Atas) & Title & Description -->
                            <div>
                                <div class="flex items-center justify-end mb-2">
                                    <span class="text-teal-600 dark:text-teal-400 font-mono font-bold text-xs tracking-widest px-2.5 py-0.5 rounded bg-teal-50 dark:bg-teal-500/10 border border-teal-500/30">
                                        {{ $skill['number'] ?? sprintf('%02d', $index + 1) }}
                                    </span>
                                </div>

                                <h3 class="text-lg sm:text-xl font-bold tracking-tight text-zinc-900 dark:text-white mb-2">
                                    {{ $skill['title'] }}
                                </h3>

                                <p class="text-zinc-600 dark:text-zinc-400 text-xs leading-relaxed font-normal">
                                    {{ $skill['description'] }}
                                </p>
                            </div>

                            <!-- Bottom Area: Subtle Tags -->
                            <div class="mt-auto pt-3 border-t border-zinc-200 dark:border-white/10 flex flex-col gap-2">
                                <div class="flex flex-wrap gap-1">
                                    @if(isset($skill['tags']))
                                        @foreach($skill['tags'] as $tag)
                                            <span class="text-[10px] font-semibold px-2.5 py-1 rounded-md bg-zinc-100 dark:bg-white/5 border border-zinc-200 dark:border-white/10 text-zinc-700 dark:text-zinc-300">
                                                {{ $tag }}
                                            </span>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Footer: CLICK TO CYCLE & Controls (Sesuai Referensi Gambar 2) -->
                <div class="mt-8 flex flex-col items-center gap-3">
                    <button 
                        id="cycleBtn" 
                        onclick="cycleNextCard()"
                        class="group inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.25em] text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-teal-400 transition-colors py-2 px-5 rounded-full hover:bg-zinc-200/50 dark:hover:bg-white/5 cursor-pointer focus:outline-none"
                    >
                        <span>CLICK TO CYCLE</span>
                    </button>

                    <!-- Prev/Next Arrows & Indicator Dots -->
                    <div class="flex items-center gap-4 mt-0.5">
                        <button 
                            onclick="cyclePrevCard()"
                            class="p-2 rounded-full text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white hover:bg-zinc-200/60 dark:hover:bg-white/10 transition-all cursor-pointer focus:outline-none"
                            title="Previous card"
                            aria-label="Previous card"
                        >
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>

                        <div id="deckDots" class="flex items-center gap-1.5"></div>

                        <button 
                            onclick="cycleNextCard()"
                            class="p-2 rounded-full text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white hover:bg-zinc-200/60 dark:hover:bg-white/10 transition-all cursor-pointer focus:outline-none"
                            title="Next card"
                            aria-label="Next card"
                        >
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. EXPERIENCE SECTION -->
    <section id="experience" class="py-24 border-t border-zinc-200 dark:border-white/10 transition-colors duration-500">
        <div class="max-w-5xl mx-auto px-6">
            <!-- Header (Sesuai Referensi Gambar) -->
            <div class="text-center mb-16">
                <p class="text-xs font-bold tracking-[0.25em] uppercase text-teal-500 dark:text-teal-400 mb-2">
                    Work
                </p>
                <h2 style="font-family: Georgia, 'Times New Roman', serif;" class="text-4xl md:text-5xl font-black text-zinc-900 dark:text-white tracking-tight drop-shadow-sm">
                    Experience
                </h2>
            </div>

            <!-- Timeline List dengan Garis Biru/Teal dan Lingkaran di Sisi Kiri -->
            <div class="relative pl-8 sm:pl-12 space-y-8">
                <!-- Continuous Spine Line (Garis Biru/Teal ke bawah) -->
                <div class="absolute left-[15px] sm:left-[23px] top-4 bottom-8 w-[2px] bg-teal-400 dark:bg-teal-400/70 shadow-[0_0_10px_rgba(45,212,191,0.5)]"></div>

                @foreach($profileData['experience'] as $exp)
                <div class="relative group">
                    <!-- Left: Lingkaran Biru/Teal -->
                    <div class="absolute -left-4 sm:-left-6 top-7 -translate-x-1/2 w-4 h-4 rounded-full border-2 border-teal-400 bg-white dark:bg-[#15161c] shadow-[0_0_12px_rgba(45,212,191,0.8)] z-10 flex items-center justify-center transition-all duration-300 group-hover:scale-125 group-hover:shadow-[0_0_16px_rgba(45,212,191,1)]">
                        <div class="w-1.5 h-1.5 rounded-full bg-teal-400"></div>
                    </div>

                    <!-- Right: Experience Card -->
                    <div class="p-6 sm:p-8 rounded-2xl bg-white dark:bg-[#1d1e26] border border-zinc-200 dark:border-white/10 shadow-sm hover:shadow-2xl hover:border-teal-500/30 transition-all duration-300 transform group-hover:-translate-y-0.5">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-2">
                            <h3 class="text-xl sm:text-2xl font-bold text-zinc-900 dark:text-white group-hover:text-teal-500 dark:group-hover:text-teal-400 transition-colors">
                                {{ $exp['role'] }}
                            </h3>
                            <span class="text-teal-500 font-mono text-xs sm:text-sm font-semibold bg-teal-50 dark:bg-teal-500/10 border border-teal-500/20 px-3.5 py-1 rounded-full w-fit">
                                {{ $exp['year'] }}
                            </span>
                        </div>
                        
                        <div class="text-zinc-500 dark:text-zinc-400 text-sm font-medium mb-4">
                            {{ $exp['company'] }}
                        </div>

                        @if(isset($exp['points']) && count($exp['points']) > 0)
                            <ul class="space-y-2.5 text-zinc-600 dark:text-zinc-300 text-sm md:text-base leading-relaxed">
                                @foreach($exp['points'] as $point)
                                    <li class="flex items-start gap-3">
                                        <span class="w-1.5 h-1.5 rounded-full bg-teal-500 mt-2 shrink-0"></span>
                                        <span>{{ $point }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-zinc-600 dark:text-zinc-400 text-sm md:text-base leading-relaxed">{{ $exp['description'] }}</p>
                        @endif

                        @if(isset($exp['tags']) && count($exp['tags']) > 0)
                            <div class="flex flex-wrap gap-2 mt-6 pt-5 border-t border-zinc-100 dark:border-white/5">
                                @foreach($exp['tags'] as $tag)
                                    <span class="text-[11px] font-bold tracking-wider px-3 py-1 rounded-full bg-indigo-500/10 dark:bg-purple-950/40 text-indigo-600 dark:text-purple-300 border border-indigo-400/30 dark:border-purple-500/40 uppercase shadow-sm">
                                        {{ $tag }}
                                    </span>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 5. EDUCATION SECTION -->
    <section id="education" class="py-24 border-t border-zinc-200 dark:border-white/10 transition-colors duration-500">
        <div class="max-w-5xl mx-auto px-6">
            <!-- Header -->
            <div class="text-center mb-16">
                <p class="text-xs font-bold tracking-[0.25em] uppercase text-teal-500 dark:text-teal-400 mb-2">
                    MY JOURNEY
                </p>
                <h2 style="font-family: Georgia, 'Times New Roman', serif;" class="text-4xl md:text-5xl font-black text-zinc-900 dark:text-white tracking-tight drop-shadow-sm">
                    Education
                </h2>
            </div>

            <!-- Timeline List dengan Garis Biru/Teal dan Lingkaran di Sisi Kiri -->
            <div class="relative pl-8 sm:pl-12 space-y-8">
                <!-- Continuous Spine Line (Garis Biru/Teal ke bawah) -->
                <div class="absolute left-[15px] sm:left-[23px] top-4 bottom-8 w-[2px] bg-teal-400 dark:bg-teal-400/70 shadow-[0_0_10px_rgba(45,212,191,0.5)]"></div>

                @foreach($profileData['education'] as $edu)
                <div class="relative group">
                    <!-- Left: Lingkaran Biru/Teal -->
                    <div class="absolute -left-4 sm:-left-6 top-7 -translate-x-1/2 w-4 h-4 rounded-full border-2 border-teal-400 bg-white dark:bg-[#15161c] shadow-[0_0_12px_rgba(45,212,191,0.8)] z-10 flex items-center justify-center transition-all duration-300 group-hover:scale-125 group-hover:shadow-[0_0_16px_rgba(45,212,191,1)]">
                        <div class="w-1.5 h-1.5 rounded-full bg-teal-400"></div>
                    </div>

                    <!-- Right: Education Card -->
                    <div class="p-6 sm:p-8 rounded-2xl bg-white dark:bg-[#1d1e26] border border-zinc-200 dark:border-white/10 shadow-sm hover:shadow-2xl hover:border-teal-500/30 transition-all duration-300 transform group-hover:-translate-y-0.5">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-2">
                            <h3 class="text-xl sm:text-2xl font-bold text-zinc-900 dark:text-white group-hover:text-teal-500 dark:group-hover:text-teal-400 transition-colors">
                                {{ $edu['institution'] }}
                            </h3>
                            <span class="text-teal-500 font-mono text-xs sm:text-sm font-semibold bg-teal-50 dark:bg-teal-500/10 border border-teal-500/20 px-3.5 py-1 rounded-full w-fit">
                                {{ $edu['year'] }}
                            </span>
                        </div>
                        
                        <div class="text-teal-600 dark:text-teal-400 text-sm md:text-base font-semibold mb-3">
                            {{ $edu['degree'] }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 6. CERTIFICATES SECTION -->
    <section id="certificates" class="py-24 border-t border-zinc-200 dark:border-white/10 transition-colors duration-500 bg-zinc-50/50 dark:bg-[#15161c]/50">
        <div class="max-w-6xl mx-auto px-6">
            <!-- Header (Sesuai Referensi Gambar 3) -->
            <div class="text-center mb-16">
                <p class="text-xs font-bold tracking-[0.25em] uppercase text-teal-500 dark:text-teal-400 mb-2">
                    MY ACHIEVEMENTS
                </p>
                <h2 style="font-family: Georgia, 'Times New Roman', serif;" class="text-4xl md:text-5xl font-black text-zinc-900 dark:text-white tracking-tight drop-shadow-sm">
                    Certificates
                </h2>
            </div>

            <!-- Carousel Stage Container (Centered on Screen) -->
            <div id="certSliderWrapper" class="relative group max-w-5xl mx-auto">
                <!-- Track Viewport -->
                <div class="overflow-hidden py-4 -my-4">
                    <div id="certTrack" class="flex transition-transform duration-500 ease-out will-change-transform">
                        @foreach($profileData['certificates'] as $index => $cert)
                        <div class="w-full sm:w-1/2 md:w-1/3 shrink-0 px-3">
                            <div class="group/card flex flex-col justify-between p-4 rounded-2xl bg-white dark:bg-[#191b22] border border-zinc-200 dark:border-white/10 shadow-md hover:shadow-2xl hover:border-teal-500/40 transition-all duration-300 h-full">
                                
                                <!-- Certificate Image Thumbnail Preview (Sesuai Gambar 3) -->
                                <div class="w-full aspect-[16/10] rounded-xl overflow-hidden bg-white dark:bg-zinc-900 border border-zinc-200/80 dark:border-white/5 relative flex items-center justify-center p-1.5 shadow-inner cursor-pointer" onclick="openCertificateModal({{ $index }})">
                                    @if(isset($cert['images']) && count($cert['images']) > 1)
                                        <span class="absolute top-2.5 right-2.5 z-10 px-2 py-0.5 rounded-full text-[10px] font-mono font-bold bg-black/75 text-teal-400 border border-teal-500/40 backdrop-blur-sm shadow-md">
                                            {{ count($cert['images']) }} Pages
                                        </span>
                                    @endif
                                    <img 
                                        src="{{ asset('images/' . ($cert['thumbnail'] ?? $cert['file'])) }}" 
                                        alt="{{ $cert['title'] }}" 
                                        class="w-full h-full object-contain rounded-lg transition-transform duration-500 group-hover/card:scale-105"
                                        loading="lazy"
                                    >
                                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover/card:opacity-100 transition-opacity duration-300 flex items-center justify-center backdrop-blur-[1px] rounded-xl">
                                        <span class="bg-teal-500/90 text-white text-xs font-semibold px-3 py-1.5 rounded-full shadow-lg flex items-center gap-1.5">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                            </svg>
                                            Preview
                                        </span>
                                    </div>
                                </div>

                                <!-- Title & Details -->
                                <div class="mt-3.5 mb-4 flex-grow flex flex-col justify-start">
                                    <h3 class="text-sm font-bold text-zinc-900 dark:text-white line-clamp-2 min-h-[2.5rem] group-hover/card:text-teal-500 dark:group-hover/card:text-teal-400 transition-colors" title="{{ $cert['title'] }}">
                                        {{ $cert['title'] }}
                                    </h3>
                                    @if(isset($cert['issuer']))
                                        <span class="text-[11px] font-medium text-zinc-400 truncate mt-1">{{ $cert['issuer'] }}</span>
                                    @endif
                                </div>

                                <!-- View & Zoom Button (Sesuai Tombol di Gambar 3) -->
                                <button 
                                    type="button" 
                                    onclick="openCertificateModal({{ $index }})" 
                                    class="w-full py-2.5 px-4 rounded-xl bg-zinc-100 dark:bg-white/5 hover:bg-teal-500/10 dark:hover:bg-teal-500/20 border border-zinc-200 dark:border-white/10 hover:border-teal-500/40 text-xs font-semibold text-zinc-700 dark:text-zinc-300 hover:text-teal-600 dark:hover:text-teal-400 transition-all flex items-center justify-center gap-2 cursor-pointer focus:outline-none shadow-sm"
                                >
                                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                    </svg>
                                    <span>View &amp; Zoom</span>
                                </button>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Slider Controls: Prev Button, Dots, Next Button -->
                <div id="certControlsWrapper" class="flex items-center justify-center gap-4 mt-8">
                    <!-- Prev Button -->
                    <button 
                        type="button" 
                        onclick="slidePrevCert()" 
                        class="w-9 h-9 rounded-full bg-white dark:bg-[#191b22] border border-zinc-200 dark:border-white/10 text-zinc-600 dark:text-zinc-400 hover:text-zinc-950 dark:hover:text-white hover:border-teal-500/50 flex items-center justify-center transition-all cursor-pointer shadow-sm focus:outline-none"
                        title="Previous certificates"
                        aria-label="Previous certificates"
                    >
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>

                    <!-- Indicators Dots -->
                    <div id="certDots" class="flex items-center gap-2">
                        <!-- Rendered by JavaScript -->
                    </div>

                    <!-- Next Button -->
                    <button 
                        type="button" 
                        onclick="slideNextCert()" 
                        class="w-9 h-9 rounded-full bg-white dark:bg-[#191b22] border border-zinc-200 dark:border-white/10 text-zinc-600 dark:text-zinc-400 hover:text-zinc-950 dark:hover:text-white hover:border-teal-500/50 flex items-center justify-center transition-all cursor-pointer shadow-sm focus:outline-none"
                        title="Next certificates"
                        aria-label="Next certificates"
                    >
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. PROJECTS SECTION -->
    <section id="projects" class="py-24 border-t border-zinc-200 dark:border-white/10 mb-12 transition-colors duration-500">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <p class="text-xs font-bold tracking-[0.25em] uppercase text-teal-500 dark:text-teal-400 mb-2">
                    MY WORK
                </p>
                <h2 style="font-family: Georgia, 'Times New Roman', serif;" class="text-4xl md:text-5xl font-black text-zinc-900 dark:text-white tracking-tight drop-shadow-sm">
                    Portfolios
                </h2>
            </div>
            
            <!-- Carousel Stage Container (Centered on Screen, Sama Seperti Certificates) -->
            <div id="projectSliderWrapper" class="relative group max-w-5xl mx-auto">
                <!-- Track Viewport -->
                <div class="overflow-hidden py-4 -my-4">
                    <div id="projectTrack" class="flex transition-transform duration-500 ease-out will-change-transform">
                        @foreach($profileData['projects'] as $index => $project)
                        <div class="w-full sm:w-1/2 md:w-1/3 shrink-0 px-3">
                            <div class="group/card flex flex-col justify-between p-4 rounded-2xl bg-white dark:bg-[#191b22] border border-zinc-200 dark:border-white/10 shadow-md hover:shadow-2xl hover:border-teal-500/40 transition-all duration-300 h-full">
                                
                                <!-- Project Thumbnail Preview -->
                                <div class="w-full aspect-[16/10] rounded-xl overflow-hidden bg-white dark:bg-zinc-900 border border-zinc-200/80 dark:border-white/5 relative flex items-center justify-center p-1.5 shadow-inner cursor-pointer" onclick="openProjectModal({{ $index }})">
                                    @if(isset($project['images']) && count($project['images']) > 1)
                                        <span class="absolute top-2.5 right-2.5 z-10 px-2 py-0.5 rounded-full text-[10px] font-mono font-bold bg-black/75 text-teal-400 border border-teal-500/40 backdrop-blur-sm shadow-md">
                                            {{ count($project['images']) }} Screens
                                        </span>
                                    @endif
                                    @if(isset($project['images'][0]))
                                        <img 
                                            src="{{ asset('images/' . $project['images'][0]) }}" 
                                            alt="{{ $project['title'] }}" 
                                            class="w-full h-full object-cover rounded-lg transition-transform duration-500 group-hover/card:scale-105"
                                            loading="lazy"
                                        >
                                    @endif
                                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover/card:opacity-100 transition-opacity duration-300 flex items-center justify-center backdrop-blur-[1px] rounded-xl">
                                        <span class="bg-teal-500/90 text-white text-xs font-semibold px-3 py-1.5 rounded-full shadow-lg flex items-center gap-1.5">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                            Details
                                        </span>
                                    </div>
                                </div>

                                <!-- Title, Description & Tags -->
                                <div class="mt-3.5 mb-3 flex-grow flex flex-col justify-start">
                                    <div class="text-teal-500 font-mono text-[10px] font-bold uppercase tracking-wider mb-1">
                                        {{ $project['category'] ?? 'Project' }}
                                    </div>
                                    <h3 class="text-sm font-bold text-zinc-900 dark:text-white line-clamp-1 group-hover/card:text-teal-500 dark:group-hover/card:text-teal-400 transition-colors" title="{{ $project['title'] }}">
                                        {{ $project['title'] }}
                                    </h3>
                                    <p class="text-zinc-600 dark:text-zinc-400 text-xs leading-relaxed line-clamp-2 mt-1.5 mb-3">
                                        {{ $project['description'] }}
                                    </p>
                                    @if(isset($project['tags']) && count($project['tags']) > 0)
                                        <div class="flex flex-wrap gap-1 mt-auto">
                                            @foreach($project['tags'] as $tag)
                                                <span class="text-[10px] font-semibold px-2 py-0.5 rounded-md bg-teal-50 dark:bg-teal-500/10 text-teal-600 dark:text-teal-400 border border-teal-500/20">
                                                    {{ $tag }}
                                                </span>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>

                                <!-- View Details Button -->
                                <button 
                                    type="button" 
                                    onclick="openProjectModal({{ $index }})" 
                                    class="w-full py-2.5 px-4 rounded-xl bg-zinc-100 dark:bg-white/5 hover:bg-teal-500/10 dark:hover:bg-teal-500/20 border border-zinc-200 dark:border-white/10 hover:border-teal-500/40 text-xs font-semibold text-zinc-700 dark:text-zinc-300 hover:text-teal-600 dark:hover:text-teal-400 transition-all flex items-center justify-center gap-2 cursor-pointer focus:outline-none shadow-sm"
                                >
                                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    <span>View Details</span>
                                </button>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Slider Controls: Prev Button, Dots, Next Button -->
                <div id="projectControlsWrapper" class="flex items-center justify-center gap-4 mt-8">
                    <!-- Prev Button -->
                    <button 
                        type="button" 
                        onclick="slidePrevProject()" 
                        class="w-9 h-9 rounded-full bg-white dark:bg-[#191b22] border border-zinc-200 dark:border-white/10 text-zinc-600 dark:text-zinc-400 hover:text-zinc-950 dark:hover:text-white hover:border-teal-500/50 flex items-center justify-center transition-all cursor-pointer shadow-sm focus:outline-none"
                        title="Previous projects"
                        aria-label="Previous projects"
                    >
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>

                    <!-- Indicators Dots -->
                    <div id="projectDots" class="flex items-center gap-2">
                        <!-- Rendered by JavaScript -->
                    </div>

                    <!-- Next Button -->
                    <button 
                        type="button" 
                        onclick="slideNextProject()" 
                        class="w-9 h-9 rounded-full bg-white dark:bg-[#191b22] border border-zinc-200 dark:border-white/10 text-zinc-600 dark:text-zinc-400 hover:text-zinc-950 dark:hover:text-white hover:border-teal-500/50 flex items-center justify-center transition-all cursor-pointer shadow-sm focus:outline-none"
                        title="Next projects"
                        aria-label="Next projects"
                    >
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
        
    <!-- 8. CONTACT SECTION (SESUAI REQUEST HIRE ME) -->
    <section id="contact" class="py-24 border-t border-zinc-200 dark:border-white/10 transition-colors duration-500 bg-zinc-50/50 dark:bg-[#15161c]/50">
        <div class="max-w-6xl mx-auto px-6">
            <!-- Header -->
            <div class="text-center mb-16">
                <p class="text-xs font-bold tracking-[0.25em] uppercase text-teal-500 dark:text-teal-400 mb-2">
                    GET IN TOUCH
                </p>
                <h2 style="font-family: Georgia, 'Times New Roman', serif;" class="text-4xl md:text-5xl font-black text-zinc-900 dark:text-white tracking-tight drop-shadow-sm">
                    Contact <span class="text-teal-500 dark:text-teal-400">Me</span>
                </h2>
                <p class="mt-4 text-zinc-600 dark:text-zinc-400 max-w-xl mx-auto text-sm md:text-base leading-relaxed">
                    Have an exciting project, job opportunity, or wish to collaborate? Reach out directly through any of my channels below.
                </p>
            </div>

            <!-- Contact Cards Grid: Email, WhatsApp, GitHub, LinkedIn, Instagram -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5 max-w-6xl mx-auto">
                <!-- 1. Email -->
                <div class="group p-5 rounded-2xl bg-white dark:bg-[#1d1e26] border border-zinc-200 dark:border-white/10 shadow-md hover:shadow-xl hover:border-teal-500/50 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="w-11 h-11 rounded-xl bg-teal-50 dark:bg-teal-500/10 border border-teal-500/20 text-teal-600 dark:text-teal-400 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-[11px] font-bold uppercase tracking-wider text-zinc-400 dark:text-zinc-500 mb-1">Email</h3>
                        <p class="text-xs font-semibold text-zinc-900 dark:text-white break-all mb-4">
                            {{ $profileData['contact']['email'] }}
                        </p>
                    </div>
                    <div class="flex items-center gap-1.5 pt-3 border-t border-zinc-100 dark:border-white/5">
                        <a 
                            href="mailto:{{ $profileData['contact']['email'] }}" 
                            class="flex-1 py-1.5 px-2 text-center text-xs font-semibold rounded-xl bg-teal-500 hover:bg-teal-600 text-white transition-colors"
                        >
                            Email
                        </a>
                        <button 
                            type="button"
                            onclick="copyToClipboard('{{ $profileData['contact']['email'] }}', this)" 
                            class="p-1.5 rounded-xl bg-zinc-100 dark:bg-white/5 hover:bg-zinc-200 dark:hover:bg-white/10 text-zinc-600 dark:text-zinc-300 transition-colors text-xs font-semibold cursor-pointer"
                            title="Copy Email Address"
                        >
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- 2. WhatsApp -->
                <div class="group p-5 rounded-2xl bg-white dark:bg-[#1d1e26] border border-zinc-200 dark:border-white/10 shadow-md hover:shadow-xl hover:border-emerald-500/50 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="w-11 h-11 rounded-xl bg-emerald-50 dark:bg-emerald-500/10 border border-emerald-500/20 text-emerald-600 dark:text-emerald-400 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                            </svg>
                        </div>
                        <h3 class="text-[11px] font-bold uppercase tracking-wider text-zinc-400 dark:text-zinc-500 mb-1">WhatsApp</h3>
                        <p class="text-xs font-semibold text-zinc-900 dark:text-white mb-4">
                            {{ $profileData['contact']['whatsapp'] }}
                        </p>
                    </div>
                    <div class="pt-3 border-t border-zinc-100 dark:border-white/5">
                        <a 
                            href="{{ $profileData['contact']['whatsapp_url'] }}" 
                            target="_blank" 
                            rel="noopener noreferrer"
                            class="w-full block py-1.5 px-2 text-center text-xs font-semibold rounded-xl bg-emerald-500 hover:bg-emerald-600 text-white transition-colors"
                        >
                            Chat
                        </a>
                    </div>
                </div>

                <!-- 3. GitHub -->
                <div class="group p-5 rounded-2xl bg-white dark:bg-[#1d1e26] border border-zinc-200 dark:border-white/10 shadow-md hover:shadow-xl hover:border-zinc-500/50 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="w-11 h-11 rounded-xl bg-zinc-100 dark:bg-white/10 border border-zinc-200 dark:border-white/15 text-zinc-900 dark:text-white flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-[11px] font-bold uppercase tracking-wider text-zinc-400 dark:text-zinc-500 mb-1">GitHub</h3>
                        <p class="text-xs font-semibold text-zinc-900 dark:text-white truncate mb-4">
                            {{ $profileData['contact']['github'] }}
                        </p>
                    </div>
                    <div class="pt-3 border-t border-zinc-100 dark:border-white/5">
                        <a 
                            href="{{ $profileData['contact']['github_url'] }}" 
                            target="_blank" 
                            rel="noopener noreferrer"
                            class="w-full block py-1.5 px-2 text-center text-xs font-semibold rounded-xl bg-zinc-900 hover:bg-black text-white dark:bg-white/10 dark:hover:bg-white/20 transition-colors"
                        >
                            GitHub
                        </a>
                    </div>
                </div>

                <!-- 4. LinkedIn -->
                <div class="group p-5 rounded-2xl bg-white dark:bg-[#1d1e26] border border-zinc-200 dark:border-white/10 shadow-md hover:shadow-xl hover:border-blue-500/50 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="w-11 h-11 rounded-xl bg-blue-50 dark:bg-blue-500/10 border border-blue-500/20 text-blue-600 dark:text-blue-400 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </div>
                        <h3 class="text-[11px] font-bold uppercase tracking-wider text-zinc-400 dark:text-zinc-500 mb-1">LinkedIn</h3>
                        <p class="text-xs font-semibold text-zinc-900 dark:text-white truncate mb-4">
                            {{ $profileData['contact']['linkedin'] }}
                        </p>
                    </div>
                    <div class="pt-3 border-t border-zinc-100 dark:border-white/5">
                        <a 
                            href="{{ $profileData['contact']['linkedin_url'] }}" 
                            target="_blank" 
                            rel="noopener noreferrer"
                            class="w-full block py-1.5 px-2 text-center text-xs font-semibold rounded-xl bg-blue-600 hover:bg-blue-700 text-white transition-colors"
                        >
                            LinkedIn
                        </a>
                    </div>
                </div>

                <!-- 5. Instagram -->
                <div class="group p-5 rounded-2xl bg-white dark:bg-[#1d1e26] border border-zinc-200 dark:border-white/10 shadow-md hover:shadow-xl hover:border-pink-500/50 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="w-11 h-11 rounded-xl bg-pink-50 dark:bg-pink-500/10 border border-pink-500/20 text-pink-600 dark:text-pink-400 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </div>
                        <h3 class="text-[11px] font-bold uppercase tracking-wider text-zinc-400 dark:text-zinc-500 mb-1">Instagram</h3>
                        <p class="text-xs font-semibold text-zinc-900 dark:text-white truncate mb-4">
                            {{ $profileData['contact']['instagram'] }}
                        </p>
                    </div>
                    <div class="pt-3 border-t border-zinc-100 dark:border-white/5">
                        <a 
                            href="{{ $profileData['contact']['instagram_url'] }}" 
                            target="_blank" 
                            rel="noopener noreferrer"
                            class="w-full block py-1.5 px-2 text-center text-xs font-semibold rounded-xl bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white transition-all shadow-sm"
                        >
                            Instagram
                        </a>
                    </div>
                </div>
            </div>

            <!-- CTA Hire Me Card / Quick Availability Banner -->
            <div class="mt-12 max-w-5xl mx-auto p-8 rounded-3xl bg-gradient-to-r from-teal-500/10 via-zinc-100 dark:via-zinc-800/40 to-teal-500/10 border border-teal-500/20 dark:border-teal-500/30 shadow-lg flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-[11px] font-bold bg-teal-500/20 text-teal-700 dark:text-teal-300 mb-2">
                        <span class="w-2 h-2 rounded-full bg-teal-500 animate-pulse"></span>
                        Available for Work &amp; New Opportunities
                    </span>
                    <h3 class="text-xl sm:text-2xl font-bold text-zinc-900 dark:text-white">
                        Ready to build impactful solutions together?
                    </h3>
                    <p class="text-xs sm:text-sm text-zinc-600 dark:text-zinc-400 mt-1">
                        Whether you need a full-time Software Developer or freelance assistance, let's talk!
                    </p>
                </div>
                <div class="flex items-center gap-3 shrink-0">
                    <button 
                        type="button" 
                        onclick="openContactModal()" 
                        class="py-3 px-6 rounded-xl bg-teal-500 hover:bg-teal-600 text-white font-bold text-xs sm:text-sm shadow-md hover:shadow-teal-500/30 transition-all cursor-pointer"
                    >
                        Hire Me Now
                    </button>
                    <a 
                        href="{{ asset('images/cv_jeffrey adrian.pdf') }}" 
                        download="CV_Jeffrey_Adrian.pdf"
                        target="_blank"
                        class="py-3 px-5 rounded-xl bg-white dark:bg-[#1d1e26] border border-zinc-200 dark:border-white/10 hover:border-teal-500/40 text-zinc-700 dark:text-zinc-300 hover:text-teal-500 font-bold text-xs sm:text-sm transition-all"
                    >
                        Download CV
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="py-10 border-t border-zinc-200 dark:border-white/10 bg-white dark:bg-[#15161c] text-center text-xs text-zinc-500 dark:text-zinc-400 transition-colors">
        <div class="max-w-6xl mx-auto px-6 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p>&copy; 2026 <span class="font-semibold text-zinc-900 dark:text-white">{{ $profileData['name'] }}</span>. All rights reserved.</p>
        </div>
    </footer>

    <!-- Modal Contact Me (Tampil saat tombol 'Hire Me' diklik) -->
    <div id="contactModal" class="fixed inset-0 z-[100] hidden bg-black/80 flex items-center justify-center p-4 sm:p-6 opacity-0 transition-opacity duration-300 backdrop-blur-sm">
        <div class="relative max-w-xl w-full bg-white dark:bg-[#1d1e26] border border-zinc-200 dark:border-white/10 rounded-3xl overflow-hidden shadow-2xl flex flex-col transform scale-95 transition-transform duration-300" id="contactModalContent">
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-6 border-b border-zinc-200 dark:border-white/10 bg-zinc-50/50 dark:bg-white/[0.02]">
                <div>
                    <span class="text-[10px] font-mono font-bold tracking-widest uppercase text-teal-500">LET'S CONNECT</span>
                    <h3 class="text-xl sm:text-2xl font-black text-zinc-900 dark:text-white">Contact &amp; Hire Me</h3>
                </div>
                <button onclick="closeContactModal()" class="p-2 rounded-full bg-zinc-100 dark:bg-white/10 text-zinc-500 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-200 dark:hover:bg-white/20 transition-all focus:outline-none cursor-pointer">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="p-6 sm:p-7 space-y-3.5">
                <p class="text-xs sm:text-sm text-zinc-600 dark:text-zinc-400 leading-relaxed mb-3">
                    Feel free to reach out directly through any of these platforms for project collaborations, job opportunities, or inquiries:
                </p>

                <!-- Email Row -->
                <div class="flex items-center justify-between p-3.5 rounded-2xl bg-zinc-50 dark:bg-white/5 border border-zinc-200 dark:border-white/10 hover:border-teal-500/40 transition-colors">
                    <div class="flex items-center gap-3 min-w-0 pr-2">
                        <div class="w-10 h-10 rounded-xl bg-teal-500/10 text-teal-600 dark:text-teal-400 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="min-w-0">
                            <p class="text-[10px] font-bold uppercase tracking-wider text-zinc-400">Email</p>
                            <p class="text-xs sm:text-sm font-semibold text-zinc-900 dark:text-white truncate">{{ $profileData['contact']['email'] }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-1.5 shrink-0">
                        <button type="button" onclick="copyToClipboard('{{ $profileData['contact']['email'] }}', this)" class="p-2 rounded-xl bg-zinc-200/60 dark:bg-white/10 hover:bg-zinc-200 dark:hover:bg-white/20 text-zinc-700 dark:text-zinc-300 transition-colors text-xs font-semibold cursor-pointer" title="Copy Email">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>
                        </button>
                        <a href="mailto:{{ $profileData['contact']['email'] }}" class="py-1.5 px-3 rounded-xl bg-teal-500 hover:bg-teal-600 text-white text-xs font-semibold transition-colors">
                            Mail
                        </a>
                    </div>
                </div>

                <!-- WhatsApp Row -->
                <div class="flex items-center justify-between p-3.5 rounded-2xl bg-zinc-50 dark:bg-white/5 border border-zinc-200 dark:border-white/10 hover:border-emerald-500/40 transition-colors">
                    <div class="flex items-center gap-3 min-w-0 pr-2">
                        <div class="w-10 h-10 rounded-xl bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                            </svg>
                        </div>
                        <div class="min-w-0">
                            <p class="text-[10px] font-bold uppercase tracking-wider text-zinc-400">WhatsApp</p>
                            <p class="text-xs sm:text-sm font-semibold text-zinc-900 dark:text-white truncate">{{ $profileData['contact']['whatsapp'] }}</p>
                        </div>
                    </div>
                    <a href="{{ $profileData['contact']['whatsapp_url'] }}" target="_blank" rel="noopener noreferrer" class="py-1.5 px-3 rounded-xl bg-emerald-500 hover:bg-emerald-600 text-white text-xs font-semibold transition-colors shrink-0">
                        Chat
                    </a>
                </div>

                <!-- GitHub Row -->
                <div class="flex items-center justify-between p-3.5 rounded-2xl bg-zinc-50 dark:bg-white/5 border border-zinc-200 dark:border-white/10 hover:border-zinc-500/40 transition-colors">
                    <div class="flex items-center gap-3 min-w-0 pr-2">
                        <div class="w-10 h-10 rounded-xl bg-zinc-100 dark:bg-white/10 text-zinc-900 dark:text-white flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                            </svg>
                        </div>
                        <div class="min-w-0">
                            <p class="text-[10px] font-bold uppercase tracking-wider text-zinc-400">GitHub</p>
                            <p class="text-xs sm:text-sm font-semibold text-zinc-900 dark:text-white truncate">{{ $profileData['contact']['github'] }}</p>
                        </div>
                    </div>
                    <a href="{{ $profileData['contact']['github_url'] }}" target="_blank" rel="noopener noreferrer" class="py-1.5 px-3 rounded-xl bg-zinc-900 hover:bg-black text-white dark:bg-white/10 dark:hover:bg-white/20 text-xs font-semibold transition-colors shrink-0">
                        Visit
                    </a>
                </div>

                <!-- Instagram Row -->
                <div class="flex items-center justify-between p-3.5 rounded-2xl bg-zinc-50 dark:bg-white/5 border border-zinc-200 dark:border-white/10 hover:border-pink-500/40 transition-colors">
                    <div class="flex items-center gap-3 min-w-0 pr-2">
                        <div class="w-10 h-10 rounded-xl bg-pink-500/10 text-pink-600 dark:text-pink-400 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </div>
                        <div class="min-w-0">
                            <p class="text-[10px] font-bold uppercase tracking-wider text-zinc-400">Instagram</p>
                            <p class="text-xs sm:text-sm font-semibold text-zinc-900 dark:text-white truncate">{{ $profileData['contact']['instagram'] }}</p>
                        </div>
                    </div>
                    <a href="{{ $profileData['contact']['instagram_url'] }}" target="_blank" rel="noopener noreferrer" class="py-1.5 px-3 rounded-xl bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white text-xs font-semibold transition-all shrink-0">
                        Visit
                    </a>
                </div>

                <!-- LinkedIn Row -->
                <div class="flex items-center justify-between p-3.5 rounded-2xl bg-zinc-50 dark:bg-white/5 border border-zinc-200 dark:border-white/10 hover:border-blue-500/40 transition-colors">
                    <div class="flex items-center gap-3 min-w-0 pr-2">
                        <div class="w-10 h-10 rounded-xl bg-blue-500/10 text-blue-600 dark:text-blue-400 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </div>
                        <div class="min-w-0">
                            <p class="text-[10px] font-bold uppercase tracking-wider text-zinc-400">LinkedIn</p>
                            <p class="text-xs sm:text-sm font-semibold text-zinc-900 dark:text-white truncate">{{ $profileData['contact']['linkedin'] }}</p>
                        </div>
                    </div>
                    <a href="{{ $profileData['contact']['linkedin_url'] }}" target="_blank" rel="noopener noreferrer" class="py-1.5 px-3 rounded-xl bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold transition-colors shrink-0">
                        Connect
                    </a>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="p-4 sm:p-5 border-t border-zinc-200 dark:border-white/10 bg-zinc-50/50 dark:bg-white/[0.02] flex items-center justify-between">
                <a href="#contact" onclick="closeContactModal(); scrollToTarget('contact');" class="text-xs text-teal-600 dark:text-teal-400 font-semibold hover:underline cursor-pointer">
                    View Full Contact Page &darr;
                </a>
                <button type="button" onclick="closeContactModal()" class="py-2 px-5 rounded-xl bg-zinc-200 dark:bg-white/10 hover:bg-zinc-300 dark:hover:bg-white/20 text-xs font-bold text-zinc-700 dark:text-zinc-200 transition-colors cursor-pointer">
                    Close
                </button>
            </div>
        </div>
    </div>
        
    <!-- Modal Project Detail -->
    <div id="projectModal" class="fixed inset-0 z-[100] hidden bg-black/80 flex items-center justify-center p-4 sm:p-6 opacity-0 transition-opacity duration-300 backdrop-blur-sm">
        <div class="relative max-w-5xl w-full max-h-[90vh] bg-white dark:bg-[#1d1e26] border border-zinc-200 dark:border-white/10 rounded-3xl overflow-hidden shadow-2xl flex flex-col transform scale-95 transition-transform duration-300" id="projectModalContent">
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-6 sm:p-8 border-b border-zinc-200 dark:border-white/10 sticky top-0 bg-white dark:bg-[#1d1e26] z-10">
                <h3 id="modalProjectTitle" class="text-2xl sm:text-3xl font-black text-zinc-900 dark:text-white truncate pr-12">Project Title</h3>
                <button onclick="closeProjectModal()" class="absolute right-6 sm:right-8 p-2 rounded-full bg-zinc-100 dark:bg-white/10 text-zinc-500 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-200 dark:hover:bg-white/20 transition-all focus:outline-none">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
            
            <!-- Modal Body (Scrollable) -->
            <div class="p-6 sm:p-8 overflow-y-auto custom-scrollbar flex-1">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Left: Description -->
                    <div class="lg:col-span-1 space-y-6">
                        <div>
                            <h4 class="text-xs font-bold uppercase tracking-widest text-teal-500 mb-3">About Project</h4>
                            <p id="modalProjectDesc" class="text-zinc-600 dark:text-zinc-300 text-sm md:text-base leading-relaxed"></p>
                        </div>
                        <div>
                            <h4 class="text-xs font-bold uppercase tracking-widest text-teal-500 mb-3">Category</h4>
                            <div id="modalProjectCategory" class="inline-block bg-zinc-100 dark:bg-white/5 border border-zinc-200 dark:border-white/10 text-zinc-700 dark:text-zinc-300 px-4 py-1.5 rounded-full text-xs font-bold"></div>
                        </div>
                        <div id="modalProjectTagsSection">
                            <h4 class="text-xs font-bold uppercase tracking-widest text-teal-500 mb-3">Technologies</h4>
                            <div id="modalProjectTags" class="flex flex-wrap gap-1.5"></div>
                        </div>
                    </div>
                    
                    <!-- Right: Gallery -->
                    <div class="lg:col-span-2">
                        <h4 class="text-xs font-bold uppercase tracking-widest text-teal-500 mb-4">Project Gallery</h4>
                        <div id="modalProjectGallery" class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Images will be injected here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Preview Gambar (Single Image for Zoom) -->
    <div id="imageModal" class="fixed inset-0 z-[110] hidden bg-black/90 flex items-center justify-center p-4 backdrop-blur-sm opacity-0 transition-opacity duration-300">
        <div class="relative max-w-5xl w-full flex flex-col items-center justify-center transform scale-95 transition-transform duration-300" id="imageModalContent">
            <button onclick="closeModal()" class="absolute -top-12 right-0 text-white hover:text-teal-400 text-4xl font-light z-10 cursor-pointer focus:outline-none">&times;</button>
            <img id="modalImage" src="" alt="Zoom Preview" class="max-h-[85vh] w-auto object-contain rounded-lg shadow-2xl border border-white/10">
        </div>
    </div>

    <!-- Modal Preview Sertifikat (Image Viewer & Multi-Page Zoom Modal) -->
    <div id="certificateModal" class="fixed inset-0 z-[110] hidden bg-black/85 flex items-center justify-center p-2 sm:p-5 opacity-0 transition-opacity duration-300 backdrop-blur-md">
        <div class="relative max-w-5xl w-full h-[90vh] bg-white dark:bg-[#1d1e26] border border-zinc-200 dark:border-white/10 rounded-3xl overflow-hidden shadow-2xl flex flex-col transform scale-95 transition-transform duration-300" id="certificateModalContent">
            <!-- Modal Header -->
            <div class="flex items-center justify-between px-6 py-4 border-b border-zinc-200 dark:border-white/10 bg-white dark:bg-[#1d1e26] shrink-0">
                <div class="flex items-center gap-3 overflow-hidden pr-4">
                    <div class="w-9 h-9 rounded-xl bg-teal-500/10 text-teal-500 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <div class="truncate">
                        <h3 id="modalCertTitle" class="text-base sm:text-lg font-bold text-zinc-900 dark:text-white truncate">Certificate Title</h3>
                        <p id="modalCertDate" class="text-xs font-mono text-zinc-400">Year</p>
                    </div>
                </div>
                
                <!-- Zoom Controls & Close -->
                <div class="flex items-center gap-1.5 sm:gap-2 shrink-0">
                    <button type="button" onclick="zoomCert(0.25)" class="p-2 rounded-xl text-zinc-600 dark:text-zinc-300 hover:text-zinc-950 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-white/10 transition-colors focus:outline-none cursor-pointer" title="Zoom In (+)">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                    </button>
                    <button type="button" onclick="zoomCert(-0.25)" class="p-2 rounded-xl text-zinc-600 dark:text-zinc-300 hover:text-zinc-950 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-white/10 transition-colors focus:outline-none cursor-pointer" title="Zoom Out (-)">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                        </svg>
                    </button>
                    <button type="button" onclick="resetCertZoom()" id="certZoomBadge" class="px-2.5 py-1 rounded-xl text-xs font-mono font-semibold bg-zinc-100 dark:bg-white/5 text-zinc-600 dark:text-zinc-300 hover:text-teal-500 hover:bg-zinc-200 dark:hover:bg-white/10 transition-colors cursor-pointer" title="Reset Zoom">
                        100%
                    </button>
                    <a id="modalCertExternalLink" href="#" target="_blank" class="p-2 rounded-xl text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-white/10 transition-colors" title="Open full image in new tab">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                    <button onclick="closeCertificateModal()" class="p-2 rounded-xl text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-white/10 transition-colors focus:outline-none cursor-pointer" title="Close modal">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Modal Body (Viewer Container with Drag & Scroll Zoom + Page Switcher) -->
            <div id="certViewerViewport" class="flex-1 bg-zinc-950/90 dark:bg-[#121318] relative overflow-hidden flex items-center justify-center p-4 cursor-grab active:cursor-grabbing select-none">
                
                <!-- Multi-page Prev Button -->
                <button 
                    id="certPrevPageBtn" 
                    type="button" 
                    onclick="event.stopPropagation(); changeCertPage(-1)" 
                    class="hidden absolute left-4 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-black/70 hover:bg-teal-500 text-white backdrop-blur-md border border-white/20 flex items-center justify-center transition-all shadow-2xl cursor-pointer focus:outline-none group" 
                    title="Halaman Sebelumnya"
                >
                    <svg class="w-6 h-6 group-hover:-translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <!-- Multi-page Next Button -->
                <button 
                    id="certNextPageBtn" 
                    type="button" 
                    onclick="event.stopPropagation(); changeCertPage(1)" 
                    class="hidden absolute right-4 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-black/70 hover:bg-teal-500 text-white backdrop-blur-md border border-white/20 flex items-center justify-center transition-all shadow-2xl cursor-pointer focus:outline-none group" 
                    title="Halaman Berikutnya"
                >
                    <svg class="w-6 h-6 group-hover:translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <!-- Multi-page Indicator Badge -->
                <div id="certPagePagination" class="hidden absolute bottom-5 left-1/2 -translate-x-1/2 z-20 flex items-center gap-3 bg-black/80 backdrop-blur-md px-4 py-1.5 rounded-full border border-white/15 text-white text-xs font-mono shadow-2xl pointer-events-auto">
                    <button type="button" onclick="event.stopPropagation(); changeCertPage(-1)" class="hover:text-teal-400 cursor-pointer p-0.5" title="Previous page">◀</button>
                    <span id="certCurrentPageText" class="font-bold text-teal-400 tracking-wider">Page 1 of 2</span>
                    <button type="button" onclick="event.stopPropagation(); changeCertPage(1)" class="hover:text-teal-400 cursor-pointer p-0.5" title="Next page">▶</button>
                </div>

                <img 
                    id="modalCertImage" 
                    src="" 
                    alt="Certificate" 
                    class="max-w-full max-h-full object-contain rounded-xl shadow-2xl transition-transform duration-200 origin-center pointer-events-auto"
                >
                
                <!-- Loading Spinner -->
                <div id="modalCertLoader" class="absolute inset-0 flex items-center justify-center bg-zinc-950/80 text-teal-400">
                    <svg class="animate-spin h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- FLOATING BACK TO TOP BUTTON -->
    <button
        id="backToTopBtn"
        type="button"
        onclick="scrollToTop()"
        class="fixed bottom-6 right-6 z-[999] w-12 h-12 rounded-full bg-teal-500 hover:bg-teal-600 text-white shadow-xl shadow-teal-500/40 flex items-center justify-center transition-all duration-300 transform translate-y-6 scale-90 opacity-0 pointer-events-none hover:-translate-y-1 hover:scale-105 active:scale-95 focus:outline-none cursor-pointer"
        aria-label="Back to top"
        title="Kembali ke atas"
    >
        <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 15l7-7 7 7" />
        </svg>
    </button>

    <script>
        // ==========================================
        // 1. MODAL PROJECTS, SERTIFIKAT & IMAGE PREVIEW
        // ==========================================
        
        // Setup JSON data for JS
        const projectsData = @json($profileData['projects']);
        function openProjectModal(index) {
            const project = projectsData[index];
            if(!project) return;
            
            const modal = document.getElementById('projectModal');
            const modalContent = document.getElementById('projectModalContent');
            
            // Populate data
            document.getElementById('modalProjectTitle').textContent = project.title;
            document.getElementById('modalProjectDesc').textContent = project.description;
            document.getElementById('modalProjectCategory').textContent = project.category || 'Project';
            
            // Populate tags
            const tagsContainer = document.getElementById('modalProjectTags');
            const tagsSection = document.getElementById('modalProjectTagsSection');
            if (tagsContainer && tagsSection) {
                tagsContainer.innerHTML = '';
                if (project.tags && project.tags.length > 0) {
                    tagsSection.classList.remove('hidden');
                    project.tags.forEach(tag => {
                        const tagEl = document.createElement('span');
                        tagEl.className = 'text-xs font-semibold px-3 py-1 rounded-lg bg-teal-50 dark:bg-teal-500/10 text-teal-600 dark:text-teal-400 border border-teal-500/20';
                        tagEl.textContent = tag;
                        tagsContainer.appendChild(tagEl);
                    });
                } else {
                    tagsSection.classList.add('hidden');
                }
            }
            
            // Populate gallery
            const galleryContainer = document.getElementById('modalProjectGallery');
            galleryContainer.innerHTML = '';
            
            if(project.images && project.images.length > 0) {
                project.images.forEach(img => {
                    const imgEl = document.createElement('img');
                    imgEl.src = '{{ asset("images") }}/' + img;
                    imgEl.alt = project.title;
                    imgEl.className = 'w-full rounded-xl object-cover aspect-video border border-zinc-200 dark:border-white/10 shadow-sm cursor-zoom-in hover:opacity-80 transition-opacity';
                    imgEl.onclick = () => openImageFullscreen(imgEl.src);
                    galleryContainer.appendChild(imgEl);
                });
            }
            
            // Show modal
            modal.classList.remove('hidden');
            // Trigger reflow
            void modal.offsetWidth;
            modal.classList.remove('opacity-0');
            modalContent.classList.remove('scale-95');
            modalContent.classList.add('scale-100');
            
            document.body.style.overflow = 'hidden';
        }

        function closeProjectModal() {
            const modal = document.getElementById('projectModal');
            const modalContent = document.getElementById('projectModalContent');
            
            modal.classList.add('opacity-0');
            modalContent.classList.remove('scale-100');
            modalContent.classList.add('scale-95');
            
            setTimeout(() => {
                modal.classList.add('hidden');
                // Only restore overflow if other modals are not open
                if (document.getElementById('imageModal').classList.contains('hidden') &&
                    document.getElementById('certificateModal').classList.contains('hidden')) {
                    document.body.style.overflow = '';
                }
            }, 300);
        }

        document.getElementById('projectModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeProjectModal();
            }
        });

        // Single Image Zoom Modal
        function openImageFullscreen(src) {
            const modal = document.getElementById('imageModal');
            const modalContent = document.getElementById('imageModalContent');
            const modalImage = document.getElementById('modalImage');
            
            modalImage.src = src;
            modal.classList.remove('hidden');
            
            void modal.offsetWidth;
            modal.classList.remove('opacity-0');
            modalContent.classList.remove('scale-95');
            modalContent.classList.add('scale-100');
            
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            const modal = document.getElementById('imageModal');
            const modalContent = document.getElementById('imageModalContent');
            
            modal.classList.add('opacity-0');
            modalContent.classList.remove('scale-100');
            modalContent.classList.add('scale-95');
            
            setTimeout(() => {
                modal.classList.add('hidden');
                if (document.getElementById('projectModal').classList.contains('hidden') &&
                    document.getElementById('certificateModal').classList.contains('hidden')) {
                     document.body.style.overflow = '';
                }
            }, 300);
        }

        document.getElementById('imageModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Modal Certificate Viewer Logic (Images with Multi-Page Zoom & Pan)
        const certificatesData = @json($profileData['certificates']);
        let currentCertImages = [];
        let currentCertPageIndex = 0;

        const certModal = document.getElementById('certificateModal');
        const certModalContent = document.getElementById('certificateModalContent');
        const modalCertTitle = document.getElementById('modalCertTitle');
        const modalCertDate = document.getElementById('modalCertDate');
        const modalCertImage = document.getElementById('modalCertImage');
        const modalCertExternalLink = document.getElementById('modalCertExternalLink');
        const modalCertLoader = document.getElementById('modalCertLoader');
        const certZoomBadge = document.getElementById('certZoomBadge');
        const certViewerViewport = document.getElementById('certViewerViewport');
        const certPrevPageBtn = document.getElementById('certPrevPageBtn');
        const certNextPageBtn = document.getElementById('certNextPageBtn');
        const certPagePagination = document.getElementById('certPagePagination');
        const certCurrentPageText = document.getElementById('certCurrentPageText');

        let certScale = 1;
        let certTranslateX = 0;
        let certTranslateY = 0;
        let isDraggingCert = false;
        let certStartX = 0;
        let certStartY = 0;
        let dragStartX = 0;

        function applyCertTransform(animate = false) {
            if (!modalCertImage) return;
            modalCertImage.style.transition = animate ? 'transform 0.2s cubic-bezier(0.16, 1, 0.3, 1)' : 'none';
            modalCertImage.style.transform = `translate(${certTranslateX}px, ${certTranslateY}px) scale(${certScale})`;
            if (certZoomBadge) {
                certZoomBadge.textContent = `${Math.round(certScale * 100)}%`;
            }
        }

        function zoomCert(delta) {
            const newScale = Math.min(Math.max(certScale + delta, 0.5), 3.5);
            certScale = Math.round(newScale * 100) / 100;
            if (certScale <= 1) {
                certTranslateX = 0;
                certTranslateY = 0;
            }
            applyCertTransform(true);
        }

        function resetCertZoom() {
            certScale = 1;
            certTranslateX = 0;
            certTranslateY = 0;
            applyCertTransform(true);
        }

        function loadCertPage(pageIndex) {
            if (!currentCertImages || currentCertImages.length === 0) return;
            currentCertPageIndex = Math.max(0, Math.min(pageIndex, currentCertImages.length - 1));
            
            const rawUrl = currentCertImages[currentCertPageIndex];
            const fullUrl = (rawUrl.startsWith('http://') || rawUrl.startsWith('https://')) 
                ? rawUrl 
                : '{{ asset("images") }}/' + rawUrl;

            modalCertExternalLink.href = fullUrl;
            resetCertZoom();

            modalCertLoader.classList.remove('hidden');
            modalCertImage.classList.add('hidden');

            modalCertImage.src = fullUrl;
            modalCertImage.onload = () => {
                modalCertLoader.classList.add('hidden');
                modalCertImage.classList.remove('hidden');
            };

            // Multi-page navigation UI
            if (currentCertImages.length > 1) {
                if (certPrevPageBtn) {
                    certPrevPageBtn.classList.remove('hidden');
                    certPrevPageBtn.disabled = (currentCertPageIndex === 0);
                    certPrevPageBtn.style.opacity = currentCertPageIndex === 0 ? '0.35' : '1';
                    certPrevPageBtn.style.pointerEvents = currentCertPageIndex === 0 ? 'none' : 'auto';
                }
                if (certNextPageBtn) {
                    certNextPageBtn.classList.remove('hidden');
                    certNextPageBtn.disabled = (currentCertPageIndex === currentCertImages.length - 1);
                    certNextPageBtn.style.opacity = currentCertPageIndex === currentCertImages.length - 1 ? '0.35' : '1';
                    certNextPageBtn.style.pointerEvents = currentCertPageIndex === currentCertImages.length - 1 ? 'none' : 'auto';
                }
                if (certPagePagination) {
                    certPagePagination.classList.remove('hidden');
                    if (certCurrentPageText) {
                        certCurrentPageText.textContent = `Page ${currentCertPageIndex + 1} of ${currentCertImages.length}`;
                    }
                }
            } else {
                if (certPrevPageBtn) certPrevPageBtn.classList.add('hidden');
                if (certNextPageBtn) certNextPageBtn.classList.add('hidden');
                if (certPagePagination) certPagePagination.classList.add('hidden');
            }
        }

        function changeCertPage(delta) {
            const nextIdx = currentCertPageIndex + delta;
            if (nextIdx >= 0 && nextIdx < currentCertImages.length) {
                loadCertPage(nextIdx);
            }
        }

        function openCertificateModal(indexOrTitle, fileUrl, date) {
            if (!certModal) return;

            if (typeof indexOrTitle === 'number' || (!isNaN(indexOrTitle) && typeof indexOrTitle !== 'string')) {
                const cert = certificatesData[indexOrTitle];
                if (!cert) return;
                modalCertTitle.textContent = cert.title || 'Certificate';
                modalCertDate.textContent = cert.date ? `Issued: ${cert.date}` : (cert.issuer || '');
                if (cert.images && Array.isArray(cert.images) && cert.images.length > 0) {
                    currentCertImages = cert.images;
                } else if (cert.file) {
                    currentCertImages = [cert.file];
                } else {
                    currentCertImages = [];
                }
            } else {
                modalCertTitle.textContent = indexOrTitle;
                modalCertDate.textContent = date ? `Issued: ${date}` : '';
                currentCertImages = [fileUrl];
            }

            loadCertPage(0);

            certModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';

            requestAnimationFrame(() => {
                certModal.classList.remove('opacity-0');
                certModalContent.classList.remove('scale-95');
                certModalContent.classList.add('scale-100');
            });
        }

        function closeCertificateModal() {
            if (!certModal) return;

            certModal.classList.add('opacity-0');
            certModalContent.classList.remove('scale-100');
            certModalContent.classList.add('scale-95');

            setTimeout(() => {
                certModal.classList.add('hidden');
                modalCertImage.src = '';
                currentCertImages = [];
                resetCertZoom();
                if (document.getElementById('projectModal').classList.contains('hidden') && 
                    document.getElementById('imageModal').classList.contains('hidden')) {
                    document.body.style.overflow = '';
                }
            }, 300);
        }

        if (certModal) {
            certModal.addEventListener('click', function(e) {
                if (e.target === this) {
                    closeCertificateModal();
                }
            });
        }

        // Viewport Drag to Pan (when zoomed) or Swipe between pages (when not zoomed) & Wheel to Zoom
        if (certViewerViewport) {
            certViewerViewport.addEventListener('mousedown', (e) => {
                if (e.button !== 0) return; // Left click only
                isDraggingCert = true;
                dragStartX = e.clientX;
                certStartX = e.clientX - certTranslateX;
                certStartY = e.clientY - certTranslateY;
                if (certScale > 1) {
                    certViewerViewport.classList.add('cursor-grabbing');
                }
                e.preventDefault();
            });

            window.addEventListener('mousemove', (e) => {
                if (!isDraggingCert) return;
                if (certScale > 1) {
                    certTranslateX = e.clientX - certStartX;
                    certTranslateY = e.clientY - certStartY;
                    applyCertTransform(false);
                }
            });

            window.addEventListener('mouseup', (e) => {
                if (!isDraggingCert) return;
                isDraggingCert = false;
                if (certViewerViewport) {
                    certViewerViewport.classList.remove('cursor-grabbing');
                }
                // If not zoomed and horizontal drag distance > 60px, switch page!
                if (certScale <= 1 && currentCertImages.length > 1) {
                    const dragDist = e.clientX - dragStartX;
                    if (dragDist > 60) {
                        changeCertPage(-1); // Swipe right -> prev page
                    } else if (dragDist < -60) {
                        changeCertPage(1);  // Swipe left -> next page
                    }
                }
            });

            certViewerViewport.addEventListener('wheel', (e) => {
                e.preventDefault();
                const delta = e.deltaY < 0 ? 0.2 : -0.2;
                zoomCert(delta);
            }, { passive: false });
        }

        // Keyboard arrow navigation for multi-page certificates
        window.addEventListener('keydown', (e) => {
            if (!certModal || certModal.classList.contains('hidden')) return;
            if (e.key === 'ArrowLeft') {
                changeCertPage(-1);
            } else if (e.key === 'ArrowRight') {
                changeCertPage(1);
            } else if (e.key === 'Escape') {
                closeCertificateModal();
            }
        });

        // ==========================================
        // 2. THEME (DARK / LIGHT) DENGAN ANIMASI
        // ==========================================
        const themeIcon = document.getElementById('themeIcon');
        const themeIconWrapper = document.getElementById('themeIconWrapper');

        function updateThemeIcon(isDark) {
            if (isDark) {
                // Bulan (Moon)
                themeIcon.innerHTML = `
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"
                    />
                `;
            } else {
                // Matahari (Sun)
                themeIcon.innerHTML = `
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"
                    />
                `;
            }
        }

        // Inisialisasi tema awal dari localStorage atau default dark
        const savedTheme = localStorage.getItem('theme') || 'dark';
        if (savedTheme === 'light') {
            document.documentElement.classList.remove('dark');
            updateThemeIcon(false);
        } else {
            document.documentElement.classList.add('dark');
            updateThemeIcon(true);
        }

        function toggleThemeWithAnimation() {
            // Jalankan animasi putar (spin & scale)
            themeIconWrapper.classList.remove('theme-spin-active');
            void themeIconWrapper.offsetWidth; // Trigger reflow
            themeIconWrapper.classList.add('theme-spin-active');

            const isCurrentlyDark = document.documentElement.classList.contains('dark');
            const willBeDark = !isCurrentlyDark;

            // Beri sedikit jeda di puncak putaran untuk mengganti ikon
            setTimeout(() => {
                if (willBeDark) {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                    updateThemeIcon(true);
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('theme', 'light');
                    updateThemeIcon(false);
                }
            }, 180);

            // Bersihkan class animasi setelah selesai
            setTimeout(() => {
                themeIconWrapper.classList.remove('theme-spin-active');
            }, 600);
        }

        // ==========================================
        // 3. ANIMASI NAVBAR: ACTIVE PENANDA & SMOOTH SCROLL
        // ==========================================
        const navIndicator = document.getElementById('navIndicator');
        const navItems = document.querySelectorAll('.nav-item');
        let currentActiveTarget = 'home';

        function updateNavIndicator(targetId) {
            const activeLink = document.querySelector(`.nav-item[data-target="${targetId}"]`);
            if (!activeLink) return;

            currentActiveTarget = targetId;

            // Update class aktif pada link desktop
            navItems.forEach(link => {
                link.classList.remove('active', 'text-teal-600', 'dark:text-teal-400', 'font-bold');
                link.classList.add('text-zinc-500', 'dark:text-zinc-400');
            });

            activeLink.classList.remove('text-zinc-500', 'dark:text-zinc-400');
            activeLink.classList.add('active', 'text-teal-600', 'dark:text-teal-400', 'font-bold');

            // Geser indikator garis bawah dengan animasi jika desktop navMenu sedang tampil
            const navMenu = document.getElementById('navMenu');
            if (navMenu && activeLink.offsetParent !== null) {
                const menuRect = navMenu.getBoundingClientRect();
                const linkRect = activeLink.getBoundingClientRect();

                navIndicator.style.left = `${linkRect.left - menuRect.left}px`;
                navIndicator.style.width = `${linkRect.width}px`;
                navIndicator.style.opacity = '1';
            }

            // Sinkronisasi item menu mobile
            const mobileNavLinks = document.querySelectorAll('.mobile-nav-item');
            mobileNavLinks.forEach(link => {
                if (link.getAttribute('data-target') === targetId) {
                    link.classList.add('text-teal-600', 'dark:text-teal-400', 'font-bold', 'bg-zinc-100', 'dark:bg-white/10');
                    link.classList.remove('text-zinc-600', 'dark:text-zinc-300');
                } else {
                    link.classList.remove('text-teal-600', 'dark:text-teal-400', 'font-bold', 'bg-zinc-100', 'dark:bg-white/10');
                    link.classList.add('text-zinc-600', 'dark:text-zinc-300');
                }
            });
        }

        // Fungsi Smooth Scroll dengan kompensasi offset tinggi floating navbar
        function scrollToTarget(targetId) {
            const targetEl = document.getElementById(targetId);
            if (!targetEl) return;

            const navbarPill = document.getElementById('navbarPill');
            const navOffset = navbarPill ? navbarPill.offsetHeight + 40 : 80;

            const elementPosition = targetEl.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - navOffset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });

            updateNavIndicator(targetId);
        }

        // Event listener klik pada semua nav item & trigger
        document.querySelectorAll('.nav-item, .nav-scroll-trigger').forEach(trigger => {
            trigger.addEventListener('click', function(e) {
                const targetId = this.getAttribute('data-target');
                if (targetId) {
                    e.preventDefault();
                    scrollToTarget(targetId);
                }
            });
        });

        // ==========================================
        // HAMBURGER MOBILE MENU LOGIC & ANIMATION
        // ==========================================
        const hamburgerBtn = document.getElementById('hamburgerBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const hamLine1 = document.getElementById('hamLine1');
        const hamLine2 = document.getElementById('hamLine2');
        const hamLine3 = document.getElementById('hamLine3');
        let isMobileMenuOpen = false;

        function openMobileMenu() {
            isMobileMenuOpen = true;
            mobileMenu.classList.remove('opacity-0', 'scale-95', 'pointer-events-none', 'max-h-0');
            mobileMenu.classList.add('opacity-100', 'scale-100', 'pointer-events-auto', 'max-h-[600px]');
            hamburgerBtn.setAttribute('aria-expanded', 'true');

            // Animasi transisi 3 baris ke simbol 'X'
            hamLine1.style.transform = 'translateY(6px) rotate(45deg)';
            hamLine2.style.opacity = '0';
            hamLine2.style.transform = 'scaleX(0)';
            hamLine3.style.transform = 'translateY(-6px) rotate(-45deg)';
        }

        function closeMobileMenu() {
            isMobileMenuOpen = false;
            mobileMenu.classList.add('opacity-0', 'scale-95', 'pointer-events-none', 'max-h-0');
            mobileMenu.classList.remove('opacity-100', 'scale-100', 'pointer-events-auto', 'max-h-[600px]');
            hamburgerBtn.setAttribute('aria-expanded', 'false');

            // Reset simbol 'X' kembali ke 3 baris normal
            hamLine1.style.transform = 'none';
            hamLine2.style.opacity = '1';
            hamLine2.style.transform = 'none';
            hamLine3.style.transform = 'none';
        }

        function toggleMobileMenu() {
            if (isMobileMenuOpen) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        }

        // Tutup mobile menu saat klik di luar menu
        document.addEventListener('click', function(e) {
            if (isMobileMenuOpen && !hamburgerBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
                closeMobileMenu();
            }
        });

        // Tutup mobile menu & modal dengan tombol Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                if (isMobileMenuOpen) closeMobileMenu();
                closeProjectModal();
                closeModal();
                closeCertificateModal();
                closeContactModal();
            }
        });

        // Tutup otomatis saat link item mobile diklik
        document.querySelectorAll('.mobile-nav-item').forEach(item => {
            item.addEventListener('click', function(e) {
                const targetId = this.getAttribute('data-target');
                if (targetId) {
                    e.preventDefault();
                    scrollToTarget(targetId);
                    closeMobileMenu();
                }
            });
        });

        // Deteksi posisi scroll (ScrollSpy) agar indikator berpindah otomatis
        const sections = ['home', 'about', 'skills', 'experience', 'education', 'certificates', 'projects', 'contact'];
        let isScrollingTimeout;

        // ==========================================
        // CONTACT MODAL & CLIPBOARD LOGIC
        // ==========================================
        function openContactModal() {
            const modal = document.getElementById('contactModal');
            const content = document.getElementById('contactModalContent');
            if (!modal || !content) return;
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                content.classList.remove('scale-95');
                content.classList.add('scale-100');
            }, 10);
            document.body.style.overflow = 'hidden';
        }

        function closeContactModal() {
            const modal = document.getElementById('contactModal');
            const content = document.getElementById('contactModalContent');
            if (!modal || !content) return;
            modal.classList.add('opacity-0');
            content.classList.remove('scale-100');
            content.classList.add('scale-95');
            setTimeout(() => {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }, 300);
        }

        const contactModalEl = document.getElementById('contactModal');
        if (contactModalEl) {
            contactModalEl.addEventListener('click', function(e) {
                if (e.target === this) {
                    closeContactModal();
                }
            });
        }

        function copyToClipboard(text, btn) {
            if (!navigator.clipboard) {
                const tempInput = document.createElement('input');
                tempInput.value = text;
                document.body.appendChild(tempInput);
                tempInput.select();
                document.execCommand('copy');
                document.body.removeChild(tempInput);
                showCopiedFeedback(btn);
                return;
            }
            navigator.clipboard.writeText(text).then(() => {
                showCopiedFeedback(btn);
            }).catch(err => {
                console.error('Failed to copy: ', err);
            });
        }

        function showCopiedFeedback(btn) {
            const originalHtml = btn.innerHTML;
            btn.innerHTML = `
                <svg class="w-4 h-4 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                </svg>
            `;
            btn.classList.add('ring-2', 'ring-emerald-500/50');
            setTimeout(() => {
                btn.innerHTML = originalHtml;
                btn.classList.remove('ring-2', 'ring-emerald-500/50');
            }, 2000);
        }

        window.addEventListener('scroll', function() {
            clearTimeout(isScrollingTimeout);
            isScrollingTimeout = setTimeout(() => {
                const scrollPosition = window.pageYOffset + 150;
                let currentSection = sections[0];

                for (let i = 0; i < sections.length; i++) {
                    const sectionEl = document.getElementById(sections[i]);
                    if (sectionEl) {
                        const top = sectionEl.offsetTop;
                        const height = sectionEl.offsetHeight;
                        if (scrollPosition >= top && scrollPosition < top + height) {
                            currentSection = sections[i];
                            break;
                        } else if (scrollPosition >= top) {
                            currentSection = sections[i];
                        }
                    }
                }

                if (currentSection !== currentActiveTarget) {
                    updateNavIndicator(currentSection);
                }
            }, 20);
        });

        // Update indikator saat resize window
        window.addEventListener('resize', () => {
            updateNavIndicator(currentActiveTarget);
        });

        // ==========================================
        // 4. ANIMASI TYPEWRITER (HERO ROLE)
        // ==========================================
        document.addEventListener("DOMContentLoaded", function () {
            // Set indikator pertama kali setelah DOM siap
            setTimeout(() => {
                updateNavIndicator('home');
            }, 100);

            const words = [
                "Full-Stack Developer",
                "Software Developer",
                "Data Analyst",
                "Web Developer",
                "IT Staff"
            ];
            
            let i = 0;
            let timer;
            const speed = 100;
            const deleteSpeed = 50;
            const delayBetweenWords = 2000;
            const element = document.getElementById("typed-text");

            function typeWriter(text, index, callback) {
                if (index < text.length) {
                    element.innerHTML += text.charAt(index);
                    timer = setTimeout(() => typeWriter(text, index + 1, callback), speed);
                } else {
                    timer = setTimeout(callback, delayBetweenWords);
                }
            }

            function deleteWriter(callback) {
                let text = element.innerHTML;
                if (text.length > 0) {
                    element.innerHTML = text.substring(0, text.length - 1);
                    timer = setTimeout(() => deleteWriter(callback), deleteSpeed);
                } else {
                    callback();
                }
            }

            function startAnimation() {
                let currentWord = words[i];
                typeWriter(currentWord, 0, function () {
                    deleteWriter(function () {
                        i = (i + 1) % words.length;
                        startAnimation();
                    });
                });
            }

            startAnimation();
        });

        // ==========================================
        // 5. INTERAKTIF CARD SLIDER (DECK STACK)
        // ==========================================
        const cards = Array.from(document.querySelectorAll('.skill-card'));
        const deckStage = document.getElementById('deckStage');
        const deckDots = document.getElementById('deckDots');
        let activeCardIndex = 0;
        let isAnimatingCycle = false;
        let isDeckHovered = false;

        // Buat Dot Indikator Navigasi
        if (deckDots && cards.length) {
            deckDots.innerHTML = '';
            cards.forEach((_, idx) => {
                const dot = document.createElement('button');
                dot.className = `w-2 h-2 rounded-full transition-all duration-300 ${idx === 0 ? 'bg-teal-500 w-5' : 'bg-zinc-300 dark:bg-zinc-700'}`;
                dot.setAttribute('aria-label', `Card ${idx + 1}`);
                dot.onclick = () => jumpToCard(idx);
                deckDots.appendChild(dot);
            });
        }

        function updateDots() {
            if (!deckDots) return;
            const dots = deckDots.querySelectorAll('button');
            dots.forEach((dot, idx) => {
                if (idx === activeCardIndex) {
                    dot.className = 'w-5 h-2 rounded-full bg-teal-500 transition-all duration-300';
                } else {
                    dot.className = 'w-2 h-2 rounded-full bg-zinc-300 dark:bg-zinc-700 hover:bg-zinc-400 dark:hover:bg-zinc-500 transition-all duration-300';
                }
            });
        }

        // Fungsi Penataan Kartu Berbentuk Kipas (Tengah ke Kanan dengan Nomer di Kanan Atas)
        function updateCardDeckPositions() {
            const total = cards.length;
            // Jika kursor hover di area kartu, kipas terbuka sedikit lebih lebar
            const xStep = isDeckHovered ? 26 : 22;
            const rStep = isDeckHovered ? 4.2 : 3.5;
            const yStep = isDeckHovered ? 4 : 3;

            // Offset penyeimbang agar tumpukan (tengah ke kanan) tetap terpusat di stage
            const baseShiftX = isDeckHovered ? -48 : -40;

            cards.forEach((card, i) => {
                const offset = (i - activeCardIndex + total) % total;

                if (offset === 0) {
                    // Kartu paling depan (Active Card)
                    card.style.transform = `translateX(${baseShiftX}px) translateY(0px) rotate(-1.5deg) scale(1)`;
                    card.style.zIndex = 50;
                    card.style.opacity = '1';
                    card.style.pointerEvents = 'auto';
                    card.style.visibility = 'visible';
                } else if (offset <= 5) {
                    // Kartu-kartu di belakang yang mengipas ke KANAN (Tengah ke Kanan)
                    const x = baseShiftX + (offset * xStep);
                    const y = -offset * yStep;
                    const rot = offset * rStep;

                    card.style.transform = `translateX(${x}px) translateY(${y}px) rotate(${rot}deg) scale(1)`;
                    card.style.zIndex = 50 - offset * 5;
                    card.style.opacity = '1'; // 100% Solid, teks kartu belakang tidak bocor
                    card.style.pointerEvents = 'auto';
                    card.style.visibility = 'visible';
                } else {
                    // Sisa kartu di tumpukan paling belakang
                    const x = baseShiftX + (5 * xStep + 10);
                    const y = -5 * yStep - 5;
                    const rot = 5 * rStep + 2;
                    card.style.transform = `translateX(${x}px) translateY(${y}px) rotate(${rot}deg) scale(0.95)`;
                    card.style.zIndex = 5;
                    card.style.opacity = '0';
                    card.style.pointerEvents = 'none';
                    card.style.visibility = 'hidden';
                }
            });

            updateDots();
        }

        function cycleNextCard() {
            if (isAnimatingCycle || cards.length <= 1) return;
            isAnimatingCycle = true;

            const currentCard = cards[activeCardIndex];

            // Animasi kartu teratas terlempar halus keluar ke arah kiri (karena tumpukan di kanan)
            currentCard.style.transform = `translateX(-150px) translateY(-25px) rotate(-16deg) scale(0.92)`;
            currentCard.style.opacity = '0';

            setTimeout(() => {
                activeCardIndex = (activeCardIndex + 1) % cards.length;
                updateCardDeckPositions();
                setTimeout(() => {
                    isAnimatingCycle = false;
                }, 300);
            }, 200);
        }

        function cyclePrevCard() {
            if (isAnimatingCycle || cards.length <= 1) return;
            isAnimatingCycle = true;

            activeCardIndex = (activeCardIndex - 1 + cards.length) % cards.length;
            const newFrontCard = cards[activeCardIndex];

            // Munculkan kartu dari kiri ke depan
            newFrontCard.style.transform = `translateX(-140px) translateY(-20px) rotate(-14deg) scale(0.95)`;
            newFrontCard.style.zIndex = 60;
            newFrontCard.style.opacity = '0';

            setTimeout(() => {
                updateCardDeckPositions();
                setTimeout(() => {
                    isAnimatingCycle = false;
                }, 350);
            }, 50);
        }

        function jumpToCard(index) {
            if (isAnimatingCycle || index === activeCardIndex) return;
            activeCardIndex = index;
            updateCardDeckPositions();
        }

        // Event listener pada stage dan setiap kartu
        if (deckStage) {
            cards.forEach((card, index) => {
                card.addEventListener('click', (e) => {
                    e.stopPropagation();
                    if (index === activeCardIndex) {
                        cycleNextCard();
                    } else {
                        jumpToCard(index);
                    }
                });
            });

            // Efek hover melebarkan kipas kartu
            deckStage.addEventListener('mouseenter', () => {
                isDeckHovered = true;
                if (!isAnimatingCycle) updateCardDeckPositions();
            });

            deckStage.addEventListener('mouseleave', () => {
                isDeckHovered = false;
                if (!isAnimatingCycle) updateCardDeckPositions();
            });

            // Dukungan Swipe untuk Mobile / Layar Sentuh
            let startX = 0;
            deckStage.addEventListener('touchstart', (e) => {
                startX = e.touches[0].clientX;
            }, { passive: true });

            deckStage.addEventListener('touchend', (e) => {
                const diffX = e.changedTouches[0].clientX - startX;
                if (Math.abs(diffX) > 40) {
                    if (diffX < 0) {
                        cycleNextCard();
                    } else {
                        cyclePrevCard();
                    }
                }
            }, { passive: true });
        }

        // Jalankan penataan awal
        updateCardDeckPositions();

        // ==========================================
        // 6. CERTIFICATE AUTO-SLIDING CAROUSEL
        // ==========================================
        const certTrack = document.getElementById('certTrack');
        const certSliderWrapper = document.getElementById('certSliderWrapper');
        const certDotsContainer = document.getElementById('certDots');
        let currentCertIndex = 0;
        let certAutoplayInterval = null;
        let isTransitioningCert = false;

        // Clone cards for infinite continuous sliding
        const originalCertCards = certTrack ? Array.from(certTrack.children) : [];
        const totalOriginalCerts = originalCertCards.length;

        if (certTrack && totalOriginalCerts > 0) {
            originalCertCards.forEach((card, idx) => {
                const clone = card.cloneNode(true);
                clone.setAttribute('data-clone', 'true');
                // Ensure click handlers inside clone target the original index
                const previewArea = clone.querySelector('[onclick*="openCertificateModal"]');
                if (previewArea) {
                    previewArea.setAttribute('onclick', `openCertificateModal(${idx})`);
                }
                const btn = clone.querySelector('button[onclick*="openCertificateModal"]');
                if (btn) {
                    btn.setAttribute('onclick', `openCertificateModal(${idx})`);
                }
                certTrack.appendChild(clone);
            });
        }

        function getCertItemsPerView() {
            if (window.innerWidth >= 768) return 3;
            if (window.innerWidth >= 640) return 2;
            return 1;
        }

        function updateCertDots() {
            if (!certDotsContainer || totalOriginalCerts === 0) return;
            certDotsContainer.innerHTML = '';

            const activeDot = currentCertIndex % totalOriginalCerts;

            for (let i = 0; i < totalOriginalCerts; i++) {
                const dot = document.createElement('button');
                dot.type = 'button';
                dot.setAttribute('aria-label', `Slide ${i + 1}`);
                if (i === activeDot) {
                    dot.className = 'w-6 h-2 rounded-full bg-teal-500 dark:bg-teal-400 transition-all duration-300';
                } else {
                    dot.className = 'w-2 h-2 rounded-full bg-zinc-300 dark:bg-zinc-700 hover:bg-zinc-400 dark:hover:bg-zinc-500 transition-all duration-300';
                }
                dot.onclick = () => jumpToCert(i);
                certDotsContainer.appendChild(dot);
            }
        }

        function updateCertSlider(animate = true) {
            if (!certTrack || totalOriginalCerts === 0) return;
            const perView = getCertItemsPerView();
            const stepPercent = 100 / perView;

            if (animate) {
                certTrack.style.transition = 'transform 0.5s cubic-bezier(0.25, 1, 0.5, 1)';
            } else {
                certTrack.style.transition = 'none';
            }

            certTrack.style.transform = `translateX(-${currentCertIndex * stepPercent}%)`;
            updateCertDots();
        }

        function slideNextCert() {
            if (!certTrack || totalOriginalCerts === 0 || isTransitioningCert) return;
            isTransitioningCert = true;
            currentCertIndex++;
            updateCertSlider(true);

            setTimeout(() => {
                if (currentCertIndex >= totalOriginalCerts) {
                    currentCertIndex = 0;
                    updateCertSlider(false);
                }
                isTransitioningCert = false;
            }, 520);
        }

        function slidePrevCert() {
            if (!certTrack || totalOriginalCerts === 0 || isTransitioningCert) return;
            isTransitioningCert = true;

            if (currentCertIndex <= 0) {
                currentCertIndex = totalOriginalCerts;
                updateCertSlider(false);
                void certTrack.offsetWidth; // force reflow
            }

            setTimeout(() => {
                currentCertIndex--;
                updateCertSlider(true);
                setTimeout(() => {
                    isTransitioningCert = false;
                }, 520);
            }, 20);
        }

        function jumpToCert(idx) {
            if (isTransitioningCert) return;
            currentCertIndex = idx;
            updateCertSlider(true);
        }

        function startCertAutoplay() {
            stopCertAutoplay();
            if (totalOriginalCerts <= 1) return;
            certAutoplayInterval = setInterval(() => {
                slideNextCert();
            }, 3500);
        }

        function stopCertAutoplay() {
            if (certAutoplayInterval) {
                clearInterval(certAutoplayInterval);
                certAutoplayInterval = null;
            }
        }

        if (certSliderWrapper) {
            certSliderWrapper.addEventListener('mouseenter', stopCertAutoplay);
            certSliderWrapper.addEventListener('mouseleave', startCertAutoplay);

            let touchStartX = 0;
            certSliderWrapper.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
                stopCertAutoplay();
            }, { passive: true });

            certSliderWrapper.addEventListener('touchend', (e) => {
                const diffX = e.changedTouches[0].screenX - touchStartX;
                if (Math.abs(diffX) > 40) {
                    if (diffX < 0) slideNextCert();
                    else slidePrevCert();
                }
                startCertAutoplay();
            }, { passive: true });

            window.addEventListener('resize', () => {
                updateCertSlider(false);
            });

            // Initial setup & start autoplay
            updateCertDots();
            updateCertSlider(false);
            startCertAutoplay();
        }

        // ==========================================
        // 7. PORTFOLIO PROJECTS AUTO-SLIDING CAROUSEL (IDENTICAL TO CERTIFICATES)
        // ==========================================
        const projectTrack = document.getElementById('projectTrack');
        const projectSliderWrapper = document.getElementById('projectSliderWrapper');
        const projectDotsContainer = document.getElementById('projectDots');
        let currentProjectIndex = 0;
        let projectAutoplayInterval = null;
        let isTransitioningProject = false;

        // Clone cards for infinite continuous sliding
        const originalProjectCards = projectTrack ? Array.from(projectTrack.children) : [];
        const totalOriginalProjects = originalProjectCards.length;

        if (projectTrack && totalOriginalProjects > 0) {
            // Clone cards twice to guarantee seamless infinite loop
            for (let c = 0; c < 2; c++) {
                originalProjectCards.forEach((card, idx) => {
                    const clone = card.cloneNode(true);
                    clone.setAttribute('data-clone', 'true');
                    // Ensure click handlers inside clone target original index
                    const previewArea = clone.querySelector('[onclick*="openProjectModal"]');
                    if (previewArea) {
                        previewArea.setAttribute('onclick', `openProjectModal(${idx})`);
                    }
                    const btn = clone.querySelector('button[onclick*="openProjectModal"]');
                    if (btn) {
                        btn.setAttribute('onclick', `openProjectModal(${idx})`);
                    }
                    projectTrack.appendChild(clone);
                });
            }
        }

        function getProjectItemsPerView() {
            if (window.innerWidth >= 768) return 3;
            if (window.innerWidth >= 640) return 2;
            return 1;
        }

        function updateProjectDots() {
            if (!projectDotsContainer || totalOriginalProjects === 0) return;
            projectDotsContainer.innerHTML = '';

            const activeDot = currentProjectIndex % totalOriginalProjects;

            for (let i = 0; i < totalOriginalProjects; i++) {
                const dot = document.createElement('button');
                dot.type = 'button';
                dot.setAttribute('aria-label', `Project Slide ${i + 1}`);
                if (i === activeDot) {
                    dot.className = 'w-6 h-2 rounded-full bg-teal-500 dark:bg-teal-400 transition-all duration-300';
                } else {
                    dot.className = 'w-2 h-2 rounded-full bg-zinc-300 dark:bg-zinc-700 hover:bg-zinc-400 dark:hover:bg-zinc-500 transition-all duration-300';
                }
                dot.onclick = () => jumpToProject(i);
                projectDotsContainer.appendChild(dot);
            }
        }

        function updateProjectSlider(animate = true) {
            if (!projectTrack || totalOriginalProjects === 0) return;
            const perView = getProjectItemsPerView();
            const stepPercent = 100 / perView;

            if (animate) {
                projectTrack.style.transition = 'transform 0.5s cubic-bezier(0.25, 1, 0.5, 1)';
            } else {
                projectTrack.style.transition = 'none';
            }

            projectTrack.style.transform = `translateX(-${currentProjectIndex * stepPercent}%)`;
            updateProjectDots();
        }

        function slideNextProject() {
            if (!projectTrack || totalOriginalProjects === 0 || isTransitioningProject) return;
            isTransitioningProject = true;
            currentProjectIndex++;
            updateProjectSlider(true);

            setTimeout(() => {
                if (currentProjectIndex >= totalOriginalProjects) {
                    currentProjectIndex = 0;
                    updateProjectSlider(false);
                }
                isTransitioningProject = false;
            }, 520);
        }

        function slidePrevProject() {
            if (!projectTrack || totalOriginalProjects === 0 || isTransitioningProject) return;
            isTransitioningProject = true;

            if (currentProjectIndex <= 0) {
                currentProjectIndex = totalOriginalProjects;
                updateProjectSlider(false);
                void projectTrack.offsetWidth; // force reflow
            }

            setTimeout(() => {
                currentProjectIndex--;
                updateProjectSlider(true);
                setTimeout(() => {
                    isTransitioningProject = false;
                }, 520);
            }, 20);
        }

        function jumpToProject(idx) {
            if (isTransitioningProject) return;
            currentProjectIndex = idx;
            updateProjectSlider(true);
        }

        function startProjectAutoplay() {
            stopProjectAutoplay();
            if (totalOriginalProjects <= 1) return;
            projectAutoplayInterval = setInterval(() => {
                slideNextProject();
            }, 2800);
        }

        function stopProjectAutoplay() {
            if (projectAutoplayInterval) {
                clearInterval(projectAutoplayInterval);
                projectAutoplayInterval = null;
            }
        }

        let projectHoverTimeout = null;
        if (projectSliderWrapper) {
            projectSliderWrapper.addEventListener('mouseenter', () => {
                stopProjectAutoplay();
                clearTimeout(projectHoverTimeout);
                // Otomatis lanjut geser setelah jeda 2.5 detik meskipun mouse masih di area
                projectHoverTimeout = setTimeout(() => {
                    startProjectAutoplay();
                }, 2500);
            });

            projectSliderWrapper.addEventListener('mouseleave', () => {
                clearTimeout(projectHoverTimeout);
                startProjectAutoplay();
            });

            let touchStartX = 0;
            projectSliderWrapper.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
                stopProjectAutoplay();
            }, { passive: true });

            projectSliderWrapper.addEventListener('touchend', (e) => {
                const diffX = e.changedTouches[0].screenX - touchStartX;
                if (Math.abs(diffX) > 40) {
                    if (diffX < 0) slideNextProject();
                    else slidePrevProject();
                }
                startProjectAutoplay();
            }, { passive: true });

            window.addEventListener('resize', () => {
                updateProjectSlider(false);
            });

            // Initial setup & start autoplay
            updateProjectDots();
            updateProjectSlider(false);
            startProjectAutoplay();
        }

        // Pastikan autoplay berjalan saat tab aktif
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                stopProjectAutoplay();
                stopCertAutoplay();
            } else {
                startProjectAutoplay();
                startCertAutoplay();
            }
        });

        // ==========================================
        // 8. BACK TO TOP FLOATING BUTTON LOGIC
        // ==========================================
        function checkBackToTopVisibility() {
            const btn = document.getElementById('backToTopBtn');
            if (!btn) return;
            const scrollPos = window.pageYOffset || document.documentElement.scrollTop || window.scrollY || 0;
            if (scrollPos > 250) {
                btn.style.opacity = '1';
                btn.style.pointerEvents = 'auto';
                btn.style.transform = 'translateY(0) scale(1)';
            } else {
                btn.style.opacity = '0';
                btn.style.pointerEvents = 'none';
                btn.style.transform = 'translateY(24px) scale(0.9)';
            }
        }

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        window.addEventListener('scroll', checkBackToTopVisibility, { passive: true });
        window.addEventListener('resize', checkBackToTopVisibility);
        checkBackToTopVisibility();

        // ==========================================
        // 9. ANTI-SAVE / RIGHT-CLICK & DRAG PROTECTION FOR IMAGES
        // ==========================================
        document.addEventListener('contextmenu', function(e) {
            if (e.target.tagName === 'IMG' || e.target.closest('img')) {
                e.preventDefault();
                return false;
            }
        }, false);

        document.addEventListener('dragstart', function(e) {
            if (e.target.tagName === 'IMG' || e.target.closest('img')) {
                e.preventDefault();
                return false;
            }
        }, false);
    </script>
</body>
</html>