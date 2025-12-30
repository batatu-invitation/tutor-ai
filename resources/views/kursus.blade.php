<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Jelajahi Kursus Transformasi - AI Tutor</title>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Theme Configuration -->
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#136dec",
              "background-light": "#f6f7f8",
              "background-dark": "#101822",
            },
            fontFamily: {
              "display": ["Lexend", "sans-serif"]
            },
            borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
          },
        },
      }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-white font-display overflow-x-hidden transition-colors duration-200">
<div class="relative flex min-h-screen w-full flex-col">
<!-- Top Navigation -->
<header class="sticky top-0 z-50 flex items-center justify-between border-b border-gray-200 dark:border-gray-800 bg-white/90 dark:bg-background-dark/90 backdrop-blur-md px-6 py-3 lg:px-10">
<div class="flex items-center gap-4 text-primary">
<div class="size-8 flex items-center justify-center rounded-lg bg-primary/10 text-primary">
<span class="material-symbols-outlined text-2xl">school</span>
</div>
<h2 class="text-[#111418] dark:text-white text-xl font-bold tracking-tight">AI Tutor</h2>
</div>
<nav class="hidden md:flex flex-1 justify-center gap-8">
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Beranda</a>
<a class="text-sm font-medium text-primary" href="#">Kursus</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Tentang Kami</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Hubungi Kami</a>
</nav>
<div class="flex items-center gap-3">
<button class="hidden sm:flex h-9 items-center justify-center rounded-lg px-4 bg-transparent hover:bg-gray-100 dark:hover:bg-gray-800 text-sm font-bold text-[#111418] dark:text-white transition-colors">
                    Masuk
                </button>
<button class="flex h-9 items-center justify-center rounded-lg px-4 bg-primary hover:bg-primary/90 text-white text-sm font-bold shadow-md shadow-primary/20 transition-all transform active:scale-95">
                    Daftar
                </button>
</div>
</header>
<!-- Main Content Wrapper -->
<main class="flex-1 flex flex-col">
<!-- Hero Section -->
<section class="relative flex flex-col items-center justify-center px-4 py-16 md:py-24 overflow-hidden">
<!-- Background Decoration -->
<div class="absolute inset-0 z-0">
<div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&amp;w=2071&amp;auto=format&amp;fit=crop')] bg-cover bg-center" data-alt="Students collaborating in a modern library environment"></div>
<div class="absolute inset-0 bg-gradient-to-b from-white/90 via-white/80 to-background-light dark:from-background-dark/95 dark:via-background-dark/80 dark:to-background-dark"></div>
</div>
<div class="relative z-10 w-full max-w-4xl text-center flex flex-col items-center gap-6">
<div class="inline-flex items-center gap-2 rounded-full border border-primary/20 bg-primary/5 px-3 py-1 backdrop-blur-sm">
<span class="material-symbols-outlined text-sm text-primary">auto_awesome</span>
<span class="text-xs font-semibold text-primary uppercase tracking-wide">AI Powered Learning</span>
</div>
<h1 class="text-4xl md:text-5xl lg:text-6xl font-black leading-tight tracking-tight text-[#111418] dark:text-white">
                        Temukan Potensi Tersembunyi Anda Bersama <span class="text-primary bg-clip-text text-transparent bg-gradient-to-r from-primary to-blue-400">AI Tutor</span>
</h1>
<p class="max-w-2xl text-lg text-gray-600 dark:text-gray-300">
                        Tingkatkan karir Anda dengan kurikulum yang dipersonalisasi oleh kecerdasan buatan. Belajar lebih efektif, lebih cepat, dan lebih cerdas.
                    </p>
<!-- Search Bar -->
<div class="mt-4 w-full max-w-xl">
<div class="relative group">
<div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
<span class="material-symbols-outlined text-gray-400 group-focus-within:text-primary transition-colors">search</span>
</div>
<input class="block w-full rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 py-4 pl-12 pr-32 text-base text-gray-900 dark:text-white shadow-lg shadow-gray-200/50 dark:shadow-black/20 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 placeholder:text-gray-400 transition-all" placeholder="Cari topik, keahlian, atau karir..." type="text"/>
<div class="absolute inset-y-0 right-2 flex items-center">
<button class="h-10 rounded-lg bg-primary px-5 text-sm font-bold text-white shadow-md hover:bg-primary/90 transition-colors">
                                    Cari
                                </button>
</div>
</div>
</div>
</div>
</section>
<!-- Filters & Categories -->
<section class="sticky top-[64px] z-40 w-full border-b border-gray-200 dark:border-gray-800 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md">
<div class="max-w-7xl mx-auto px-4 py-3">
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
<!-- Chips / Categories -->
<div class="flex gap-2 overflow-x-auto pb-2 md:pb-0 no-scrollbar items-center">
<button class="whitespace-nowrap flex h-9 items-center gap-2 rounded-full bg-primary text-white px-4 text-sm font-medium transition-colors shadow-sm">
<span>Semua</span>
</button>
<button class="whitespace-nowrap flex h-9 items-center gap-2 rounded-full bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700 px-4 text-sm font-medium transition-colors border border-transparent hover:border-gray-300 dark:hover:border-gray-600">
<span>Sains &amp; Teknologi</span>
</button>
<button class="whitespace-nowrap flex h-9 items-center gap-2 rounded-full bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700 px-4 text-sm font-medium transition-colors border border-transparent hover:border-gray-300 dark:hover:border-gray-600">
<span>Seni Kreatif</span>
</button>
<button class="whitespace-nowrap flex h-9 items-center gap-2 rounded-full bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700 px-4 text-sm font-medium transition-colors border border-transparent hover:border-gray-300 dark:hover:border-gray-600">
<span>Bisnis &amp; Strategi</span>
</button>
<button class="whitespace-nowrap group flex h-9 items-center gap-2 rounded-full bg-purple-50 dark:bg-purple-900/20 text-purple-700 dark:text-purple-300 hover:bg-purple-100 dark:hover:bg-purple-900/40 px-4 text-sm font-medium transition-colors border border-purple-100 dark:border-purple-800">
<span class="material-symbols-outlined text-lg animate-pulse">auto_awesome</span>
<span>Rekomendasi AI</span>
</button>
</div>
<!-- Dropdown Filter -->
<div class="hidden md:flex items-center gap-2 shrink-0">
<span class="text-sm font-medium text-gray-500">Urutkan:</span>
<button class="flex items-center gap-2 text-sm font-semibold text-gray-900 dark:text-white hover:text-primary">
                                Terpopuler <span class="material-symbols-outlined text-lg">expand_more</span>
</button>
</div>
</div>
</div>
</section>
<!-- Course Grid Section -->
<section class="flex-1 w-full max-w-7xl mx-auto px-4 py-8">
<div class="flex items-end justify-between mb-8">
<div>
<h2 class="text-2xl font-bold text-[#111418] dark:text-white">Kursus Unggulan Pilihan AI</h2>
<p class="text-gray-500 dark:text-gray-400 mt-1">Dipersonalisasi berdasarkan tren industri terkini.</p>
</div>
<!-- Fun Illustration: Scientist Character -->
<div class="hidden lg:block relative w-16 h-16">
<!-- Abstract representation of a character via gradient/icon since I can't generate images -->
<div class="absolute -top-6 -right-4 size-20 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center border-4 border-white dark:border-background-dark shadow-lg">
<span class="material-symbols-outlined text-4xl text-primary">face_6</span>
</div>
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
<!-- Card 1 -->
<div class="group flex flex-col bg-white dark:bg-gray-800 rounded-xl overflow-hidden border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
<div class="relative aspect-video overflow-hidden">
<div class="absolute top-3 left-3 z-10 flex gap-2">
<span class="px-2 py-1 text-[10px] font-bold uppercase tracking-wider text-white bg-primary rounded shadow-sm">AI Verified</span>
</div>
<div class="w-full h-full bg-gray-200 transition-transform duration-500 group-hover:scale-110 bg-cover bg-center" data-alt="Data visualization dashboard on a tablet" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDS447uQRjIpXz2CfshR-zo_e9m_kvuExckbpfbofWKBlYKRRqYa-wPeuwaDu2F3sujW8ymVKhdD-fVdb0Z-qmcd4rdS4gv1nQLwfGonxxssptz1OqBGc2rRuhjt-ZV_Q8RhNGExIbHivDXSHIa6THjxNsejnJEALdAjM5rytJHHauB5YsBfzpMKdhHwq7NhURiDaARRw5UEz7ZAozCPDMhuZGWEm-_H_Od8S3U_-WYpL6_mxdyaWmzzBpJusdQGL6Kc5qBf314h3g');"></div>
<!-- Overlay Gradient -->
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-60"></div>
<button class="absolute bottom-3 right-3 p-2 bg-white/20 hover:bg-white/40 backdrop-blur-sm rounded-full text-white transition-colors">
<span class="material-symbols-outlined text-xl">bookmark_border</span>
</button>
</div>
<div class="p-4 flex flex-col flex-1">
<div class="flex items-center gap-1 mb-2 text-amber-500">
<span class="material-symbols-outlined text-sm fill-current">star</span>
<span class="text-sm font-bold text-gray-700 dark:text-gray-300">4.9</span>
<span class="text-xs text-gray-400">(1.2k ulasan)</span>
</div>
<h3 class="text-lg font-bold text-[#111418] dark:text-white leading-tight mb-2 group-hover:text-primary transition-colors">Mastering Data Science with AI</h3>
<ul class="space-y-1 mb-4 flex-1">
<li class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-base text-green-500 shrink-0">check_circle</span>
<span>Analisis data real-time</span>
</li>
<li class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-base text-green-500 shrink-0">check_circle</span>
<span>Sertifikat profesional</span>
</li>
</ul>
<div class="pt-3 border-t border-gray-100 dark:border-gray-700">
<p class="text-xs font-medium text-primary mb-3">"Transformasi data menjadi keputusan strategis."</p>
<button class="w-full h-10 rounded-lg bg-gray-50 dark:bg-gray-700 text-primary dark:text-white font-semibold text-sm hover:bg-primary hover:text-white transition-all">
                                    Lihat Detail
                                </button>
</div>
</div>
</div>
<!-- Card 2 -->
<div class="group flex flex-col bg-white dark:bg-gray-800 rounded-xl overflow-hidden border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
<div class="relative aspect-video overflow-hidden">
<div class="absolute top-3 left-3 z-10 flex gap-2">
<span class="px-2 py-1 text-[10px] font-bold uppercase tracking-wider text-white bg-orange-500 rounded shadow-sm">Best Seller</span>
</div>
<div class="w-full h-full bg-gray-200 transition-transform duration-500 group-hover:scale-110 bg-cover bg-center" data-alt="Artist drawing on a digital tablet with colorful abstract art" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBpJnH5qnMXZQAZYQmlpYo-DUpNXiwem6zo3Q-uaxSPjY_K9x_hFbMprX3CYS2Gg01_8ORziCtL7YxAxWiPyWbZy8ONoe-p4uIIdEE1exV0ndG1Rr-s-xSzHaYOtglPu5DUOouGyOTC7X1HN4gqQtDEWfUCRNyJtfMDrk1T79dEnu3ENl7ihxHm6XXml-ZDGab78529jbawmclQ5-HJ--scBuRH61kI6L7-VhHjstJQKHZHELvdCME9Qh5DGXVHvvndhqZ_gdN8Doc');"></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-60"></div>
<button class="absolute bottom-3 right-3 p-2 bg-white/20 hover:bg-white/40 backdrop-blur-sm rounded-full text-white transition-colors">
<span class="material-symbols-outlined text-xl">bookmark_border</span>
</button>
</div>
<div class="p-4 flex flex-col flex-1">
<div class="flex items-center gap-1 mb-2 text-amber-500">
<span class="material-symbols-outlined text-sm fill-current">star</span>
<span class="text-sm font-bold text-gray-700 dark:text-gray-300">4.8</span>
<span class="text-xs text-gray-400">(850 ulasan)</span>
</div>
<h3 class="text-lg font-bold text-[#111418] dark:text-white leading-tight mb-2 group-hover:text-primary transition-colors">Digital Art Revolution</h3>
<ul class="space-y-1 mb-4 flex-1">
<li class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-base text-green-500 shrink-0">check_circle</span>
<span>Tools modern &amp; AI art</span>
</li>
<li class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-base text-green-500 shrink-0">check_circle</span>
<span>Portofolio industri</span>
</li>
</ul>
<div class="pt-3 border-t border-gray-100 dark:border-gray-700">
<p class="text-xs font-medium text-primary mb-3">"Bebaskan kreativitas tanpa batas."</p>
<button class="w-full h-10 rounded-lg bg-gray-50 dark:bg-gray-700 text-primary dark:text-white font-semibold text-sm hover:bg-primary hover:text-white transition-all">
                                    Lihat Detail
                                </button>
</div>
</div>
</div>
<!-- Card 3 -->
<div class="group flex flex-col bg-white dark:bg-gray-800 rounded-xl overflow-hidden border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
<div class="relative aspect-video overflow-hidden">
<div class="w-full h-full bg-gray-200 transition-transform duration-500 group-hover:scale-110 bg-cover bg-center" data-alt="Business professionals in a meeting discussing strategy" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDf9SPAW6rqcr4bjrPZqJYuZc6rmYeoxZGkXW5RhTDKoOajOVZH-TWz6-fN9CQuX00nndhge5q3Ocru3Kf2chvMUwUxxLbkChcnb6kn5p0RnRFarVdd9IkmZsZhcWj7zGDHQrYwPZkvpN-mMzRTQgTfP7yDOrPoA212I_l22_ID0QMfA-hfKG1fw3QiO0j4EUXGn0LOwm4PJL9neitYStn5A1qXk9ndwTPMI1-5tRH2bdNCf67rOr8Q449w8wy8ve6pW7rVQ-GtyGg');"></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-60"></div>
<button class="absolute bottom-3 right-3 p-2 bg-white/20 hover:bg-white/40 backdrop-blur-sm rounded-full text-white transition-colors">
<span class="material-symbols-outlined text-xl">bookmark_border</span>
</button>
</div>
<div class="p-4 flex flex-col flex-1">
<div class="flex items-center gap-1 mb-2 text-amber-500">
<span class="material-symbols-outlined text-sm fill-current">star</span>
<span class="text-sm font-bold text-gray-700 dark:text-gray-300">4.7</span>
<span class="text-xs text-gray-400">(2k ulasan)</span>
</div>
<h3 class="text-lg font-bold text-[#111418] dark:text-white leading-tight mb-2 group-hover:text-primary transition-colors">Strategic Business Leadership</h3>
<ul class="space-y-1 mb-4 flex-1">
<li class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-base text-green-500 shrink-0">check_circle</span>
<span>Manajemen tim agile</span>
</li>
<li class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-base text-green-500 shrink-0">check_circle</span>
<span>Studi kasus Fortune 500</span>
</li>
</ul>
<div class="pt-3 border-t border-gray-100 dark:border-gray-700">
<p class="text-xs font-medium text-primary mb-3">"Pimpin tim menuju masa depan."</p>
<button class="w-full h-10 rounded-lg bg-gray-50 dark:bg-gray-700 text-primary dark:text-white font-semibold text-sm hover:bg-primary hover:text-white transition-all">
                                    Lihat Detail
                                </button>
</div>
</div>
</div>
<!-- Card 4 -->
<div class="group flex flex-col bg-white dark:bg-gray-800 rounded-xl overflow-hidden border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
<div class="relative aspect-video overflow-hidden">
<div class="absolute top-3 left-3 z-10 flex gap-2">
<span class="px-2 py-1 text-[10px] font-bold uppercase tracking-wider text-white bg-purple-600 rounded shadow-sm">Baru</span>
</div>
<div class="w-full h-full bg-gray-200 transition-transform duration-500 group-hover:scale-110 bg-cover bg-center" data-alt="Code on a screen with abstract tech background" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBUVp5RAB77b46vVa28Ns0QNJ2S0zoYKIgJEFgNh2HfxgzHrn9S0xOXPK_Xw_AdwE8ZsGO7OJ-RFXMbe0tWtkfxppe6aqvI1BfnFRn_nqyk-xHSDFmUvdME3DGVGI9SiAE5FOlp_CpKDv32MkTJsyYlIqHZT5n22FK5PAghc8qM99ZIfM_XkbA_x0K3PXtF4M8VgU_-69roWCC7v0sCTLJ2gAHpVWb-8IzfyM1yUdos6glaB45XsBRJh4Pd7oxgvf7DFo9mZKzhDjg');"></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-60"></div>
<button class="absolute bottom-3 right-3 p-2 bg-white/20 hover:bg-white/40 backdrop-blur-sm rounded-full text-white transition-colors">
<span class="material-symbols-outlined text-xl">bookmark_border</span>
</button>
</div>
<div class="p-4 flex flex-col flex-1">
<div class="flex items-center gap-1 mb-2 text-amber-500">
<span class="material-symbols-outlined text-sm fill-current">star</span>
<span class="text-sm font-bold text-gray-700 dark:text-gray-300">4.9</span>
<span class="text-xs text-gray-400">(150 ulasan)</span>
</div>
<h3 class="text-lg font-bold text-[#111418] dark:text-white leading-tight mb-2 group-hover:text-primary transition-colors">Full-Stack AI Developer</h3>
<ul class="space-y-1 mb-4 flex-1">
<li class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-base text-green-500 shrink-0">check_circle</span>
<span>Integrasi LLM API</span>
</li>
<li class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-base text-green-500 shrink-0">check_circle</span>
<span>Deployment Cloud</span>
</li>
</ul>
<div class="pt-3 border-t border-gray-100 dark:border-gray-700">
<p class="text-xs font-medium text-primary mb-3">"Bangun aplikasi masa depan."</p>
<button class="w-full h-10 rounded-lg bg-gray-50 dark:bg-gray-700 text-primary dark:text-white font-semibold text-sm hover:bg-primary hover:text-white transition-all">
                                    Lihat Detail
                                </button>
</div>
</div>
</div>
</div>
<!-- Load More -->
<div class="flex justify-center mt-12">
<button class="flex items-center gap-2 rounded-full border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 px-6 py-3 text-sm font-bold text-gray-700 dark:text-white hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors shadow-sm">
                        Tampilkan Lebih Banyak
                        <span class="material-symbols-outlined">expand_more</span>
</button>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-white dark:bg-background-dark border-t border-gray-200 dark:border-gray-800 py-10 mt-10">
<div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-6">
<div class="flex items-center gap-2 text-primary">
<div class="size-6 flex items-center justify-center rounded bg-primary/10 text-primary">
<span class="material-symbols-outlined text-lg">school</span>
</div>
<span class="font-bold text-lg text-[#111418] dark:text-white">AI Tutor</span>
</div>
<div class="flex gap-8 text-sm text-gray-600 dark:text-gray-400">
<a class="hover:text-primary" href="#">Kebijakan Privasi</a>
<a class="hover:text-primary" href="#">Syarat &amp; Ketentuan</a>
<a class="hover:text-primary" href="#">Bantuan</a>
</div>
<p class="text-xs text-gray-400">© 2024 AI Tutor Inc. Hak Cipta Dilindungi.</p>
</div>
</footer>
<!-- Floating Action Button: AI Assistant -->
<button class="fixed bottom-6 right-6 z-50 flex h-14 w-14 items-center justify-center rounded-full bg-primary text-white shadow-lg shadow-primary/30 hover:scale-110 hover:bg-primary/90 transition-all duration-300">
<span class="material-symbols-outlined text-2xl">smart_toy</span>
<span class="absolute -top-1 -right-1 flex h-4 w-4">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
<span class="relative inline-flex rounded-full h-4 w-4 bg-red-500 border-2 border-white"></span>
</span>
</button>
</div>
</body></html>