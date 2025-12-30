<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Daftar Kursus Tersedia - AI Tutor</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;900&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
                        "surface-light": "#ffffff",
                        "surface-dark": "#1a222c",
                    },
                    fontFamily: {
                        "display": ["Lexend", "Noto Sans", "sans-serif"],
                        "body": ["Noto Sans", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "2xl": "1rem", "full": "9999px"},
                },
            },
        }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark min-h-screen flex flex-col font-display text-[#111418] dark:text-white transition-colors duration-200">
<!-- Top Navigation Bar -->
<header class="sticky top-0 z-50 w-full bg-surface-light dark:bg-surface-dark border-b border-gray-200 dark:border-gray-800 shadow-sm">
<div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex items-center justify-between h-16">
<!-- Logo -->
<div class="flex items-center gap-3">
<div class="size-8 text-primary">
<svg class="w-full h-full" fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M24 4H42V17.3333V30.6667H24V44H6V30.6667V17.3333H24V4Z" fill="currentColor" fill-rule="evenodd"></path>
</svg>
</div>
<h1 class="text-xl font-bold tracking-tight">AI Tutor</h1>
</div>
<!-- Desktop Nav -->
<nav class="hidden md:flex items-center gap-8">
<a class="text-sm font-medium text-gray-600 hover:text-primary dark:text-gray-300 dark:hover:text-primary transition-colors" href="#">Beranda</a>
<a class="text-sm font-medium text-primary dark:text-white font-semibold" href="#">Kursus Saya</a>
<a class="text-sm font-medium text-gray-600 hover:text-primary dark:text-gray-300 dark:hover:text-primary transition-colors" href="#">Mentoring AI</a>
<a class="text-sm font-medium text-gray-600 hover:text-primary dark:text-gray-300 dark:hover:text-primary transition-colors" href="#">Komunitas</a>
</nav>
<!-- Auth Buttons -->
<div class="flex items-center gap-3">
<button class="hidden sm:flex items-center justify-center rounded-lg h-9 px-4 bg-gray-100 dark:bg-gray-800 text-sm font-bold text-gray-900 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                        Masuk
                    </button>
<button class="flex items-center justify-center rounded-lg h-9 px-4 bg-primary text-white text-sm font-bold hover:bg-blue-600 transition-colors shadow-md shadow-blue-500/20">
                        Daftar
                    </button>
</div>
</div>
</div>
</header>
<!-- Main Content Area -->
<main class="flex-grow flex flex-col items-center py-8 px-4 sm:px-6 lg:px-8 w-full max-w-[1280px] mx-auto">
<!-- Header Section: Title & Search -->
<div class="w-full flex flex-col gap-6 mb-10">
<!-- Page Heading -->
<div class="flex flex-col gap-2">
<h2 class="text-3xl sm:text-4xl font-black leading-tight tracking-tight">Jelajahi Katalog Kursus</h2>
<p class="text-gray-500 dark:text-gray-400 text-lg max-w-2xl">
                    Tingkatkan keahlianmu dengan kurikulum berbasis AI yang disesuaikan untuk kebutuhan industri masa depan.
                </p>
</div>
<!-- Search Bar & Filters Wrapper -->
<div class="flex flex-col lg:flex-row gap-4 items-start lg:items-center justify-between w-full">
<!-- Search Input -->
<div class="relative w-full lg:max-w-xl group">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-gray-400">search</span>
</div>
<input class="block w-full pl-10 pr-3 py-3 border-none rounded-xl bg-white dark:bg-surface-dark text-gray-900 dark:text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-primary shadow-sm" placeholder="Cari kursus, topik, atau mentor AI..." type="text"/>
</div>
<!-- Quick Difficulty Filters -->
<div class="flex flex-wrap gap-2">
<span class="px-3 py-1.5 text-xs font-semibold uppercase tracking-wide text-gray-500 dark:text-gray-400 self-center mr-1">Tingkat:</span>
<button class="px-4 py-2 rounded-lg bg-white dark:bg-surface-dark border border-gray-200 dark:border-gray-700 hover:border-primary dark:hover:border-primary text-sm font-medium transition-colors">Pemula</button>
<button class="px-4 py-2 rounded-lg bg-white dark:bg-surface-dark border border-gray-200 dark:border-gray-700 hover:border-primary dark:hover:border-primary text-sm font-medium transition-colors">Menengah</button>
<button class="px-4 py-2 rounded-lg bg-white dark:bg-surface-dark border border-gray-200 dark:border-gray-700 hover:border-primary dark:hover:border-primary text-sm font-medium transition-colors">Ahli</button>
</div>
</div>
<!-- Category Chips -->
<div class="flex flex-wrap gap-2 pb-2">
<button class="flex h-9 items-center justify-center gap-x-2 rounded-lg bg-primary text-white pl-4 pr-3 shadow-sm shadow-blue-500/20">
<span class="text-sm font-medium">Semua Kategori</span>
<span class="material-symbols-outlined text-[20px]">expand_more</span>
</button>
<button class="flex h-9 items-center justify-center gap-x-2 rounded-lg bg-white dark:bg-surface-dark text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 pl-4 pr-3 border border-gray-200 dark:border-gray-700 transition-colors">
<span class="text-sm font-medium">Pemrograman</span>
</button>
<button class="flex h-9 items-center justify-center gap-x-2 rounded-lg bg-white dark:bg-surface-dark text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 pl-4 pr-3 border border-gray-200 dark:border-gray-700 transition-colors">
<span class="text-sm font-medium">Desain</span>
</button>
<button class="flex h-9 items-center justify-center gap-x-2 rounded-lg bg-white dark:bg-surface-dark text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 pl-4 pr-3 border border-gray-200 dark:border-gray-700 transition-colors">
<span class="text-sm font-medium">Bisnis</span>
</button>
<button class="flex h-9 items-center justify-center gap-x-2 rounded-lg bg-white dark:bg-surface-dark text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 pl-4 pr-3 border border-gray-200 dark:border-gray-700 transition-colors">
<span class="text-sm font-medium">AI &amp; Data</span>
</button>
<button class="flex h-9 items-center justify-center gap-x-2 rounded-lg bg-white dark:bg-surface-dark text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 pl-4 pr-3 border border-gray-200 dark:border-gray-700 transition-colors">
<span class="text-sm font-medium">Marketing</span>
</button>
</div>
</div>
<!-- Course Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 w-full">
<!-- Card 1 -->
<div class="group flex flex-col bg-white dark:bg-surface-dark rounded-xl overflow-hidden border border-gray-200 dark:border-gray-800 shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1 cursor-pointer">
<div class="relative w-full aspect-video overflow-hidden">
<div class="absolute top-3 left-3 z-10">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-white/90 text-primary backdrop-blur-sm shadow-sm">
                            AI Powered
                        </span>
</div>
<div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Abstract blue digital network representing python programming" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDzcz_r0EL-Jr0yekBjMh5jWbvjNxnHUfEeDAcs6vVEwAOjvvEtjhZSrIrxcVFZtj70z54n-_BD-_Ol495ti3MTE16_VfaU3Shauotoes4azqma27_CXYRt3poSw0agOZ8FNA7InDF47-8DUMeProcPSat6Jm70gxIJ5iVWfjodbQbyY0UZoZRAPOiSQFTzHRXF5Ju1OrCQvN-xeujx2TU7eGnVdFOW-CR2esSgHZTdiU7wF6E5j7nKRI8dgSfKIb69mukvg6x9KSU');">
</div>
<!-- Overlay gradient for text readability if needed -->
<div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
</div>
<div class="flex flex-col flex-1 p-5">
<div class="flex items-center justify-between mb-2">
<span class="text-xs font-semibold text-primary bg-primary/10 px-2 py-1 rounded">Data Science</span>
<div class="flex items-center gap-1 text-amber-400">
<span class="material-symbols-outlined text-[18px] fill-1">star</span>
<span class="text-sm font-bold text-gray-700 dark:text-gray-200">4.9</span>
</div>
</div>
<h3 class="text-lg font-bold text-gray-900 dark:text-white leading-tight mb-2 group-hover:text-primary transition-colors">Python untuk Data Science</h3>
<p class="text-sm text-gray-500 dark:text-gray-400 line-clamp-2 mb-4 flex-1">
                        Pelajari dasar Python hingga analisis data kompleks dengan bantuan AI Tutor personal.
                    </p>
<div class="flex items-center justify-between pt-4 border-t border-gray-100 dark:border-gray-800">
<span class="flex items-center gap-1 text-xs text-gray-500">
<span class="material-symbols-outlined text-[16px]">signal_cellular_alt</span>
                            Pemula
                        </span>
<span class="text-sm font-bold text-primary">Lihat Detail</span>
</div>
</div>
</div>
<!-- Card 2 -->
<div class="group flex flex-col bg-white dark:bg-surface-dark rounded-xl overflow-hidden border border-gray-200 dark:border-gray-800 shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1 cursor-pointer">
<div class="relative w-full aspect-video overflow-hidden">
<div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Modern laptop with colorful interface showing UI design software" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCEuJYypmTvsJWCyphOL1VYDOaqjVYKpegxk12vxj08VQYntY4RYomCZGoJ3OZsV_iyYjETl4otHQl7CIzyy_BbMbosnPwgEMYyj5v9H2fWNrjCiOw1MY9jrMk6mgbBlsSYHtk27KnXs8wqFJJSGd9dW2zkBNsW8hqWGre6a5jEXODVqvRQ2YRwMiXRh6pmVNKDUEh7IMbVWGvfUWjjaipgW-HmNDrrHYQwzpAyK0VqdhDA9w3lE0c3a-cEKKJdWqH9LysF9Xrl5V4');">
</div>
</div>
<div class="flex flex-col flex-1 p-5">
<div class="flex items-center justify-between mb-2">
<span class="text-xs font-semibold text-purple-600 bg-purple-100 dark:bg-purple-900/30 dark:text-purple-300 px-2 py-1 rounded">Desain</span>
<div class="flex items-center gap-1 text-amber-400">
<span class="material-symbols-outlined text-[18px] fill-1">star</span>
<span class="text-sm font-bold text-gray-700 dark:text-gray-200">4.8</span>
</div>
</div>
<h3 class="text-lg font-bold text-gray-900 dark:text-white leading-tight mb-2 group-hover:text-primary transition-colors">UI/UX Design Masterclass</h3>
<p class="text-sm text-gray-500 dark:text-gray-400 line-clamp-2 mb-4 flex-1">
                        Kuasai prinsip desain user interface modern dan wireframing dengan studi kasus nyata.
                    </p>
<div class="flex items-center justify-between pt-4 border-t border-gray-100 dark:border-gray-800">
<span class="flex items-center gap-1 text-xs text-gray-500">
<span class="material-symbols-outlined text-[16px]">signal_cellular_alt_2_bar</span>
                            Menengah
                        </span>
<span class="text-sm font-bold text-primary">Lihat Detail</span>
</div>
</div>
</div>
<!-- Card 3 -->
<div class="group flex flex-col bg-white dark:bg-surface-dark rounded-xl overflow-hidden border border-gray-200 dark:border-gray-800 shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1 cursor-pointer">
<div class="relative w-full aspect-video overflow-hidden">
<div class="absolute top-3 left-3 z-10">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-white/90 text-primary backdrop-blur-sm shadow-sm">
                            Terpopuler
                        </span>
</div>
<div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Digital marketing analytics dashboard on a tablet screen" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCEUX1rXyHqN6HA2_HnF7oKEtBJRLF279whwHql5qbjf_EHiAumxPfD7UMseTMIrawEhw0MiIYUg-fHgzHjrrpCpO69U9yYiYx_meWyRYqKMIoynw35Ykq6zdSB1g7nzOttgaGO7RLouZs9YJXIZoomabdC8mz1fxtcdiVtUmqei74wD7hXcUfQA8fxJkamXRk13Is-e5V8L3AImQ4H5KWXCgb6KaOI8mgMfrdTL0Epxy_lxHtJrLU1Ig6CYAEHegHIvNgsxUxwMXE');">
</div>
</div>
<div class="flex flex-col flex-1 p-5">
<div class="flex items-center justify-between mb-2">
<span class="text-xs font-semibold text-green-600 bg-green-100 dark:bg-green-900/30 dark:text-green-300 px-2 py-1 rounded">Bisnis</span>
<div class="flex items-center gap-1 text-amber-400">
<span class="material-symbols-outlined text-[18px] fill-1">star</span>
<span class="text-sm font-bold text-gray-700 dark:text-gray-200">4.7</span>
</div>
</div>
<h3 class="text-lg font-bold text-gray-900 dark:text-white leading-tight mb-2 group-hover:text-primary transition-colors">Digital Marketing 101</h3>
<p class="text-sm text-gray-500 dark:text-gray-400 line-clamp-2 mb-4 flex-1">
                        Strategi pemasaran digital efektif menggunakan AI untuk optimasi konten dan iklan.
                    </p>
<div class="flex items-center justify-between pt-4 border-t border-gray-100 dark:border-gray-800">
<span class="flex items-center gap-1 text-xs text-gray-500">
<span class="material-symbols-outlined text-[16px]">signal_cellular_alt</span>
                            Pemula
                        </span>
<span class="text-sm font-bold text-primary">Lihat Detail</span>
</div>
</div>
</div>
<!-- Card 4 -->
<div class="group flex flex-col bg-white dark:bg-surface-dark rounded-xl overflow-hidden border border-gray-200 dark:border-gray-800 shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1 cursor-pointer">
<div class="relative w-full aspect-video overflow-hidden">
<div class="absolute top-3 left-3 z-10">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-white/90 text-primary backdrop-blur-sm shadow-sm">
                            AI Powered
                        </span>
</div>
<div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Abstract neural network visualization with connecting nodes" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDhX0ZB7aqd6GjneTRY9-cMbol1x9kZ7Dxw5mr8uEqoq77U-H_QeJQjzsg8Fssuscr_huup4wjONElIKzSo6UlT4Gw2gHAC-hss2eYLIvEff5yj25487Y70Rb509UsfKAYOvzgcbPHlaAcVnjI8K2mha0Chn8dztXbfg3uGUDX16xD4r_1IU8R64gO_YBMD5_FioKZZTf-60q9DI8hBki3n8qPPNdikKUsYft8jow5qArjUBDONWKRLBliEC6NhGvK88YPGYF-8c5Y');">
</div>
</div>
<div class="flex flex-col flex-1 p-5">
<div class="flex items-center justify-between mb-2">
<span class="text-xs font-semibold text-primary bg-primary/10 px-2 py-1 rounded">AI &amp; Data</span>
<div class="flex items-center gap-1 text-amber-400">
<span class="material-symbols-outlined text-[18px] fill-1">star</span>
<span class="text-sm font-bold text-gray-700 dark:text-gray-200">5.0</span>
</div>
</div>
<h3 class="text-lg font-bold text-gray-900 dark:text-white leading-tight mb-2 group-hover:text-primary transition-colors">Machine Learning Dasar</h3>
<p class="text-sm text-gray-500 dark:text-gray-400 line-clamp-2 mb-4 flex-1">
                        Pahami konsep dasar machine learning dan bagaimana membangun model sederhana.
                    </p>
<div class="flex items-center justify-between pt-4 border-t border-gray-100 dark:border-gray-800">
<span class="flex items-center gap-1 text-xs text-gray-500">
<span class="material-symbols-outlined text-[16px]">signal_cellular_alt_2_bar</span>
                            Menengah
                        </span>
<span class="text-sm font-bold text-primary">Lihat Detail</span>
</div>
</div>
</div>
<!-- Card 5 -->
<div class="group flex flex-col bg-white dark:bg-surface-dark rounded-xl overflow-hidden border border-gray-200 dark:border-gray-800 shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1 cursor-pointer">
<div class="relative w-full aspect-video overflow-hidden">
<div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Modern workspace with person typing on laptop" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCgSv-MZLTM-uLWAIYEcVv0vzmlFk4zBElanqW-2jWc6hb2AsDjlbTFFUf4qsnP3v49z-52s4rbAv-eee6BH2AkPhyFeLTJYgi-xhAluxPYhZ8ikMdQ8Lsn2XnNWjkTUN5gN72Aj_te7_Nh59dkiieqbPcdS_1-gqVwgy0idDOqCBfStFzZevAiJdl2RV6NQAI36FMezLjb_BVzFtjrzy85Jgbg9jpgqztRnoVSzNqzgbg2jvxmmebGVz-LHhWxR8lIoa66GNthjPw');">
</div>
</div>
<div class="flex flex-col flex-1 p-5">
<div class="flex items-center justify-between mb-2">
<span class="text-xs font-semibold text-green-600 bg-green-100 dark:bg-green-900/30 dark:text-green-300 px-2 py-1 rounded">Bisnis</span>
<div class="flex items-center gap-1 text-amber-400">
<span class="material-symbols-outlined text-[18px] fill-1">star</span>
<span class="text-sm font-bold text-gray-700 dark:text-gray-200">4.6</span>
</div>
</div>
<h3 class="text-lg font-bold text-gray-900 dark:text-white leading-tight mb-2 group-hover:text-primary transition-colors">Komunikasi Bisnis Efektif</h3>
<p class="text-sm text-gray-500 dark:text-gray-400 line-clamp-2 mb-4 flex-1">
                        Tingkatkan soft skill komunikasi profesional dan presentasi untuk karir.
                    </p>
<div class="flex items-center justify-between pt-4 border-t border-gray-100 dark:border-gray-800">
<span class="flex items-center gap-1 text-xs text-gray-500">
<span class="material-symbols-outlined text-[16px]">signal_cellular_alt</span>
                            Pemula
                        </span>
<span class="text-sm font-bold text-primary">Lihat Detail</span>
</div>
</div>
</div>
<!-- Card 6 -->
<div class="group flex flex-col bg-white dark:bg-surface-dark rounded-xl overflow-hidden border border-gray-200 dark:border-gray-800 shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1 cursor-pointer">
<div class="relative w-full aspect-video overflow-hidden">
<div class="absolute top-3 left-3 z-10">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-white/90 text-primary backdrop-blur-sm shadow-sm">
                            Baru
                        </span>
</div>
<div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Futuristic cyber security lock illustration" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB-Si4CA3cpgIj-rqDZwsSGDoVIxrdojcApUWqkrH4h5WeDL4VXy6Q0rmZT9Be6prJTqxJUnKG7onN6RBabwR_Rx_SOWxI--wmy2vawid8I0rv50kIHef7YgXYwAxOnCa-qpu_dTXPrykXBVQJxO9lbEhbFJ8QV6lJHIPYeVjd2xC-pL3cpbVt9DbjJue4Jn_rU88bhRkrgXyghfeHbwwzk4HHUt8ZyJp4TkkuHkGwLM0nUMVEQ4xsbnd64a44PhPYoVrIf-_VFyxQ');">
</div>
</div>
<div class="flex flex-col flex-1 p-5">
<div class="flex items-center justify-between mb-2">
<span class="text-xs font-semibold text-primary bg-primary/10 px-2 py-1 rounded">Teknologi</span>
<div class="flex items-center gap-1 text-amber-400">
<span class="material-symbols-outlined text-[18px] fill-1">star</span>
<span class="text-sm font-bold text-gray-700 dark:text-gray-200">4.8</span>
</div>
</div>
<h3 class="text-lg font-bold text-gray-900 dark:text-white leading-tight mb-2 group-hover:text-primary transition-colors">Cyber Security Essentials</h3>
<p class="text-sm text-gray-500 dark:text-gray-400 line-clamp-2 mb-4 flex-1">
                        Pelajari cara mengamankan data dan sistem dari ancaman siber modern.
                    </p>
<div class="flex items-center justify-between pt-4 border-t border-gray-100 dark:border-gray-800">
<span class="flex items-center gap-1 text-xs text-gray-500">
<span class="material-symbols-outlined text-[16px]">signal_cellular_alt_2_bar</span>
                            Menengah
                        </span>
<span class="text-sm font-bold text-primary">Lihat Detail</span>
</div>
</div>
</div>
<!-- Card 7 -->
<div class="group flex flex-col bg-white dark:bg-surface-dark rounded-xl overflow-hidden border border-gray-200 dark:border-gray-800 shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1 cursor-pointer">
<div class="relative w-full aspect-video overflow-hidden">
<div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Close up of mobile app development code on screen" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuATlskWfRRRk1pRyG4vBR2Szx89RPW-oohrygHLgO8nDl7HqdADlzTUdr1k2gVb_hiQ3metwWhzQBLdeoNgwIjOIhMUyppppuJF_YaBwSSBdD7il6mTCkdhOGI4MS_iEY0E0I1rMgoOmKjh8KfkflPvcMMS7tSWtoaBnIn8Jv-R1I0b5gz8dc6eK3WAcNs0nKFMPuhx4zM5iKOtBdaad0KGFhhgV5YNpNgg_fxOgj6tjU6ifK5sXWKKxvWfX4gVtkHXugf0A0nWtZo');">
</div>
</div>
<div class="flex flex-col flex-1 p-5">
<div class="flex items-center justify-between mb-2">
<span class="text-xs font-semibold text-primary bg-primary/10 px-2 py-1 rounded">Pemrograman</span>
<div class="flex items-center gap-1 text-amber-400">
<span class="material-symbols-outlined text-[18px] fill-1">star</span>
<span class="text-sm font-bold text-gray-700 dark:text-gray-200">4.9</span>
</div>
</div>
<h3 class="text-lg font-bold text-gray-900 dark:text-white leading-tight mb-2 group-hover:text-primary transition-colors">React Native Masterclass</h3>
<p class="text-sm text-gray-500 dark:text-gray-400 line-clamp-2 mb-4 flex-1">
                        Membangun aplikasi mobile cross-platform yang responsif dan performa tinggi.
                    </p>
<div class="flex items-center justify-between pt-4 border-t border-gray-100 dark:border-gray-800">
<span class="flex items-center gap-1 text-xs text-gray-500">
<span class="material-symbols-outlined text-[16px]">signal_cellular_alt_2_bar</span>
                            Ahli
                        </span>
<span class="text-sm font-bold text-primary">Lihat Detail</span>
</div>
</div>
</div>
<!-- Card 8 -->
<div class="group flex flex-col bg-white dark:bg-surface-dark rounded-xl overflow-hidden border border-gray-200 dark:border-gray-800 shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1 cursor-pointer">
<div class="relative w-full aspect-video overflow-hidden">
<div class="absolute top-3 left-3 z-10">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-white/90 text-primary backdrop-blur-sm shadow-sm">
                            AI Powered
                        </span>
</div>
<div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="A person writing in a notebook with a laptop nearby" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB_N5utTT_2GfVVGI7LMqcfl6vdzohhQALciJ-Ajjx0h2sTCgPwDPBCXrYFA5n6fHnULeGXYSwJDHL0vqzDRnFzJfqOdr-ROwTTUzpyBukbaiywDJXlhEoprPSmURKHMDxLQ8ui_fUicU2kEPwnw1xmTyoOzxlVQVP-toTMrQJWZiFvd1Tx3P11ziflT_gHRhwoWHqolD-lrk4owQr3LzoS2uKZ4pE_JBSA4tzyD0otk3ghCj6uxGJ1iY_IR0-thkgUDDnal6Whg1s');">
</div>
</div>
<div class="flex flex-col flex-1 p-5">
<div class="flex items-center justify-between mb-2">
<span class="text-xs font-semibold text-green-600 bg-green-100 dark:bg-green-900/30 dark:text-green-300 px-2 py-1 rounded">Bisnis</span>
<div class="flex items-center gap-1 text-amber-400">
<span class="material-symbols-outlined text-[18px] fill-1">star</span>
<span class="text-sm font-bold text-gray-700 dark:text-gray-200">4.7</span>
</div>
</div>
<h3 class="text-lg font-bold text-gray-900 dark:text-white leading-tight mb-2 group-hover:text-primary transition-colors">Prompt Engineering AI</h3>
<p class="text-sm text-gray-500 dark:text-gray-400 line-clamp-2 mb-4 flex-1">
                        Pelajari cara memberikan instruksi yang tepat kepada AI untuk produktivitas maksimal.
                    </p>
<div class="flex items-center justify-between pt-4 border-t border-gray-100 dark:border-gray-800">
<span class="flex items-center gap-1 text-xs text-gray-500">
<span class="material-symbols-outlined text-[16px]">signal_cellular_alt</span>
                            Pemula
                        </span>
<span class="text-sm font-bold text-primary">Lihat Detail</span>
</div>
</div>
</div>
</div>
<!-- Load More -->
<div class="mt-12 flex justify-center">
<button class="flex items-center justify-center gap-2 px-6 py-3 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-surface-dark text-gray-700 dark:text-white font-bold text-sm hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                Tampilkan Lebih Banyak
                <span class="material-symbols-outlined text-[20px]">expand_more</span>
</button>
</div>
</main>
<!-- Simple Footer -->
<footer class="w-full bg-white dark:bg-surface-dark border-t border-gray-200 dark:border-gray-800 py-8 mt-auto">
<div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between items-center gap-4">
<p class="text-sm text-gray-500 dark:text-gray-400">© 2024 AI Tutor Platform. All rights reserved.</p>
<div class="flex gap-6">
<a class="text-sm text-gray-500 hover:text-primary dark:text-gray-400" href="#">Syarat &amp; Ketentuan</a>
<a class="text-sm text-gray-500 hover:text-primary dark:text-gray-400" href="#">Privasi</a>
<a class="text-sm text-gray-500 hover:text-primary dark:text-gray-400" href="#">Bantuan</a>
</div>
</div>
</footer>
</body></html>