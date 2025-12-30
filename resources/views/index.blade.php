<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>AI Tutor - Revolusi Cara Belajar Anda</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#4F46E5", // Indigo 600
                        "primary-hover": "#4338CA", // Indigo 700
                        "secondary": "#8B5CF6", // Violet 500
                        "background-light": "#FAFAFA",
                        "background-dark": "#0F172A",
                        "surface-light": "#FFFFFF",
                        "surface-dark": "#1E293B",
                        "accent": "#F59E0B",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"],
                        "body": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "2xl": "2rem",
                        "full": "9999px"
                    },
                    boxShadow: {
                        'glow': '0 0 20px rgba(79, 70, 229, 0.3)',
                        'card': '0 10px 30px -5px rgba(0, 0, 0, 0.05)',
                    }
                },
            },
        }
    </script>
<style type="text/tailwindcss">
        @layer utilities {
            .text-gradient {
                @apply bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary;
            }
            .bg-glass {
                @apply bg-white/70 dark:bg-slate-900/70 backdrop-blur-md border border-white/20 dark:border-slate-700/30;
            }
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-800 dark:text-slate-200 font-body overflow-x-hidden selection:bg-primary selection:text-white">
<div class="fixed top-0 w-full z-50 transition-all duration-300 bg-white/80 dark:bg-background-dark/80 backdrop-blur-lg border-b border-slate-200/50 dark:border-slate-800/50">
<div class="px-4 md:px-8 lg:px-12 xl:px-20 max-w-[1440px] mx-auto">
<header class="flex items-center justify-between h-20">
<div class="flex items-center gap-3">
<div class="size-10 bg-gradient-to-br from-primary to-secondary rounded-xl flex items-center justify-center text-white shadow-lg shadow-primary/30">
<span class="material-symbols-outlined text-[24px]">school</span>
</div>
<span class="text-xl font-display font-bold text-slate-900 dark:text-white tracking-tight">AI Tutor</span>
</div>
<nav class="hidden md:flex items-center gap-8">
<a class="text-sm font-medium text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary transition-colors" href="#">Fitur</a>
<a class="text-sm font-medium text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary transition-colors" href="#">Cara Kerja</a>
<a class="text-sm font-medium text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary transition-colors" href="#">Testimoni</a>
<a class="text-sm font-medium text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary transition-colors" href="#">Harga</a>
</nav>
<div class="flex items-center gap-3">
<button class="hidden sm:inline-flex items-center justify-center h-10 px-5 text-sm font-semibold text-slate-700 dark:text-slate-200 hover:text-primary transition-colors">
                        Masuk
                    </button>
<button class="inline-flex items-center justify-center h-10 px-6 rounded-lg bg-primary hover:bg-primary-hover text-white text-sm font-semibold shadow-lg shadow-primary/20 transition-all hover:shadow-primary/40 hover:-translate-y-0.5">
                        Daftar Gratis
                    </button>
</div>
</header>
</div>
</div>
<section class="relative pt-32 pb-20 lg:pt-40 lg:pb-32 overflow-hidden">
<div class="absolute top-0 right-0 -translate-y-1/4 translate-x-1/4 w-[600px] h-[600px] rounded-full bg-secondary/20 blur-[100px] pointer-events-none"></div>
<div class="absolute bottom-0 left-0 translate-y-1/4 -translate-x-1/4 w-[600px] h-[600px] rounded-full bg-primary/20 blur-[100px] pointer-events-none"></div>
<div class="px-4 md:px-8 lg:px-12 xl:px-20 max-w-[1440px] mx-auto relative z-10">
<div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
<div class="flex-1 text-center lg:text-left">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-sm font-medium mb-6 border border-primary/20">
<span class="relative flex h-2 w-2">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
<span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
</span>
                        Revolusi Pembelajaran Digital V2.0
                    </div>
<h1 class="font-display font-extrabold text-4xl sm:text-5xl lg:text-6xl text-slate-900 dark:text-white leading-[1.15] mb-6">
                        Belajar Lebih Cerdas dengan <span class="text-gradient">Asisten AI Pribadi</span>
</h1>
<p class="text-lg text-slate-600 dark:text-slate-400 mb-8 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        Dapatkan kurikulum yang disesuaikan, bantuan instan 24/7, dan analisis mendalam untuk setiap mata pelajaran. Tingkatkan pemahaman Anda dalam hitungan minggu.
                    </p>
<div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
<button class="w-full sm:w-auto h-12 px-8 rounded-xl bg-slate-900 dark:bg-white text-white dark:text-slate-900 font-bold shadow-xl shadow-slate-900/10 hover:shadow-slate-900/20 transition-all hover:-translate-y-1 flex items-center justify-center gap-2">
                            Mulai Belajar Sekarang
                            <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
</button>
<button class="w-full sm:w-auto h-12 px-8 rounded-xl bg-white dark:bg-slate-800 text-slate-900 dark:text-white font-bold border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700 transition-all flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-[20px] text-primary">play_circle</span>
                            Lihat Demo
                        </button>
</div>
<div class="mt-8 flex items-center justify-center lg:justify-start gap-4 text-sm text-slate-500 font-medium">
<div class="flex -space-x-3">
<img alt="User" class="w-8 h-8 rounded-full border-2 border-white dark:border-background-dark" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCjVk13wbyeW2Zgra9uPCN-24lx9KpQfHCw8n1ipRWVdRt7WDey9T6BBLq5pTgghIagKQjQhg6Ce-7VD6_n8VsUZKm9eh-iB86MLSBlZNCEFFF8u2VYTVLT5F_ExPVw7RZKP0v6pXWENoyHaxslN5gCz2IdrSqssYm97vE11kOyJmgkXOKTHapqzU91u7LGprCQdVbXEXpp-dYwT9bp9VQ1qnoeXMgGDP8PxVQdv1it1VREJf5ePvs09USytroAXWsQfawPPTqiNlU"/>
<img alt="User" class="w-8 h-8 rounded-full border-2 border-white dark:border-background-dark" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCLkfqY0Zwk5FRl0l4GRf467R3MbX8qz2Usjz4ImgitrStGx092c-X2611Qz8U5_Roj_lyEarLFSWFzrRgNL-yCibdpz05HzcgWsAMM82fTzn7O4JSlXW5JgL2J9453dCeMReub56gGYvdGDB58zDaPrYWEMvWLM9V3NtL4AL12Lv3gcDtQaC3edysTbBP90cZKcbtwGMms6hCSGFS-N2r5HnhlmP3Nnmjer1xIWezHxwm5kOWJ2BN1GsWT9pG_jid8OPYXyKjHWKs"/>
<img alt="User" class="w-8 h-8 rounded-full border-2 border-white dark:border-background-dark" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD7l82Jzqyc93TGTbytFSbtZW4f2TPLIV2BjJRHKGjFtnHX79ho7A5oWmc2461KGI1gL-zp-5mcxl_HT0siKqZTzPfrH0gSQt_cBS0OXQgaklWU1_eHYBbfH9laCZzeNJ8aPJLay1gKIimN_Ykw7HFVAeWFksvwJ27dYConNsXANT9srt5Z6rxNglLOrf9YO9hS-2RgDmvrb532pCjBu0oe_oUNYJEbqrIxW0yaqaToXGV0FstxROVY1nKRbSKPTiGbHrRH5CdV8Dc"/>
</div>
<p>Dipercaya 10,000+ Siswa</p>
</div>
</div>
<div class="flex-1 w-full max-w-[600px] lg:max-w-none relative">
<div class="relative z-10 rounded-2xl overflow-hidden shadow-2xl shadow-primary/20 border border-slate-200 dark:border-slate-700 bg-slate-900">
<div class="absolute top-0 w-full h-8 bg-slate-800 flex items-center px-4 gap-2">
<div class="w-3 h-3 rounded-full bg-red-500"></div>
<div class="w-3 h-3 rounded-full bg-yellow-500"></div>
<div class="w-3 h-3 rounded-full bg-green-500"></div>
</div>
<div class="pt-8 aspect-[4/3] bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDKJIpsVQtLSJVJEoPYgQ9-ANmdonSjTTdHQL6uthZOJBulgplXoqjgVp3Eb88iPQ1PmOAo8x9272iAR4xXiz1_FsGo5GLoMJIES295CHRHlUyGNCeafJUPrM2XfhuYngGrykbFCZZBjxpXGTdWswPDcldq5oaSq0-lNJpPcTGhhahYZHC9lwji2S15-LV3UXECfbvedxPLl9ppuG0eSMj9F0XugEl0nTJvjzGbLD2TJi3RoIrcN5jANzncoMRO1efTslfG595d2nU");'>
<div class="absolute bottom-6 left-6 right-6 p-4 bg-glass rounded-xl border border-white/20 backdrop-blur-md shadow-lg transform translate-y-0 transition-transform hover:-translate-y-1">
<div class="flex items-start gap-4">
<div class="size-10 rounded-full bg-gradient-to-tr from-primary to-secondary flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-white text-xl">auto_awesome</span>
</div>
<div>
<h4 class="text-sm font-bold text-slate-900 dark:text-white mb-1">Analisis AI Selesai</h4>
<p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                                            "Berdasarkan performa kuis terakhir, kamu sudah menguasai Aljabar Linear. Saatnya lanjut ke Kalkulus Dasar. Rekomendasi materi sudah disiapkan."
                                        </p>
</div>
</div>
</div>
</div>
</div>
<div class="absolute -top-10 -right-10 w-24 h-24 bg-accent/20 rounded-full blur-xl animate-pulse"></div>
<div class="absolute -bottom-5 -left-5 w-32 h-32 bg-primary/20 rounded-full blur-xl"></div>
</div>
</div>
</div>
</section>
<section class="py-20 bg-white dark:bg-surface-dark relative">
<div class="px-4 md:px-8 lg:px-12 xl:px-20 max-w-[1440px] mx-auto">
<div class="text-center max-w-3xl mx-auto mb-16">
<h2 class="font-display font-bold text-3xl md:text-4xl text-slate-900 dark:text-white mb-4">Mengapa AI Tutor Berbeda?</h2>
<p class="text-slate-600 dark:text-slate-400 text-lg">Teknologi adaptif kami bukan sekadar database soal, tapi mentor cerdas yang memahami cara Anda berpikir.</p>
</div>
<div class="grid md:grid-cols-3 gap-8">
<div class="group p-8 rounded-2xl bg-slate-50 dark:bg-slate-800/50 hover:bg-white dark:hover:bg-slate-800 border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-card transition-all duration-300">
<div class="size-14 rounded-xl bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
<span class="material-symbols-outlined text-3xl">psychology</span>
</div>
<h3 class="text-xl font-display font-bold text-slate-900 dark:text-white mb-3">Personalisasi Ekstrem</h3>
<p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                        Algoritma kami mendeteksi celah pengetahuan Anda dan menyusun materi yang tepat untuk menutupnya, tanpa membuang waktu.
                    </p>
</div>
<div class="group p-8 rounded-2xl bg-slate-50 dark:bg-slate-800/50 hover:bg-white dark:hover:bg-slate-800 border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-card transition-all duration-300">
<div class="size-14 rounded-xl bg-violet-100 dark:bg-violet-900/30 text-violet-600 dark:text-violet-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
<span class="material-symbols-outlined text-3xl">chat_bubble</span>
</div>
<h3 class="text-xl font-display font-bold text-slate-900 dark:text-white mb-3">Mentor 24/7</h3>
<p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                        Tanyakan apa saja, kapan saja. AI Tutor memberikan penjelasan langkah demi langkah, bukan hanya kunci jawaban.
                    </p>
</div>
<div class="group p-8 rounded-2xl bg-slate-50 dark:bg-slate-800/50 hover:bg-white dark:hover:bg-slate-800 border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-card transition-all duration-300">
<div class="size-14 rounded-xl bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
<span class="material-symbols-outlined text-3xl">insights</span>
</div>
<h3 class="text-xl font-display font-bold text-slate-900 dark:text-white mb-3">Analitik Visual</h3>
<p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                        Lihat perkembangan Anda melalui dashboard yang indah. Ketahui kekuatan dan kelemahan Anda secara real-time.
                    </p>
</div>
</div>
</div>
</section>
<section class="py-20 lg:py-32 overflow-hidden">
<div class="px-4 md:px-8 lg:px-12 xl:px-20 max-w-[1440px] mx-auto">
<div class="flex flex-col lg:flex-row gap-16 items-center">
<div class="lg:w-1/2">
<h2 class="font-display font-bold text-3xl md:text-4xl text-slate-900 dark:text-white mb-6">Cara Kerja yang Sederhana, Hasil yang Luar Biasa</h2>
<p class="text-lg text-slate-600 dark:text-slate-400 mb-10">
                        Integrasikan AI Tutor ke dalam rutinitas belajar Anda tanpa hambatan. Cukup 3 langkah mudah.
                    </p>
<div class="space-y-8 relative">
<div class="absolute left-6 top-8 bottom-8 w-0.5 bg-slate-200 dark:bg-slate-800"></div>
<div class="relative flex gap-6">
<div class="relative z-10 flex-shrink-0 size-12 rounded-full bg-primary text-white flex items-center justify-center font-bold text-lg shadow-lg shadow-primary/30">1</div>
<div class="pt-2">
<h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Buat Profil Belajar</h3>
<p class="text-slate-600 dark:text-slate-400">Atur tujuan akademis, preferensi gaya belajar, dan jadwal Anda.</p>
</div>
</div>
<div class="relative flex gap-6">
<div class="relative z-10 flex-shrink-0 size-12 rounded-full bg-white dark:bg-slate-800 border-2 border-primary text-primary flex items-center justify-center font-bold text-lg">2</div>
<div class="pt-2">
<h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Unggah Materi</h3>
<p class="text-slate-600 dark:text-slate-400">Upload foto catatan, PDF buku, atau silabus kelas Anda.</p>
</div>
</div>
<div class="relative flex gap-6">
<div class="relative z-10 flex-shrink-0 size-12 rounded-full bg-white dark:bg-slate-800 border-2 border-primary text-primary flex items-center justify-center font-bold text-lg">3</div>
<div class="pt-2">
<h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Mulai Sesi Interaktif</h3>
<p class="text-slate-600 dark:text-slate-400">AI akan membuat kuis, ringkasan, dan sesi tanya jawab interaktif.</p>
</div>
</div>
</div>
</div>
<div class="lg:w-1/2 w-full">
<div class="relative">
<div class="absolute inset-0 bg-gradient-to-r from-primary to-secondary rounded-2xl rotate-3 opacity-20 transform scale-105 blur-lg"></div>
<div class="relative rounded-2xl overflow-hidden shadow-2xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 aspect-square md:aspect-video lg:aspect-square">
<div class="absolute inset-0 bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCKMjAPXhzE7U5kiRHBOH6ca5_OSJ5XKYKAXBmSk0EOl2ricgIoe3N_g7zsF5wGht4RNMe0TnUOyKOsN3qIDMqGqdh5RUShzs5lTgBtRlYoowHqeycwB59DxaMwBCvQ8dtAfQfwUyzwyKgFf0qz8VGQHTdMBSwnTr8PR0Podpc4wYfDm_tz5zJGAq4DbzkOWJRegjQ6RWTlaCbkQSYbpQxvz5-gfNYJD85PTAfVaEheeI2wLuzXXPfrpNxg3Lrl79H64fHc0kDIW_E");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent"></div>
<div class="absolute bottom-8 left-8 right-8">
<div class="bg-white/10 backdrop-blur-md border border-white/20 p-6 rounded-xl">
<div class="flex items-center justify-between mb-4">
<span class="text-white font-bold">Progress Mingguan</span>
<span class="text-green-400 font-bold">+24%</span>
</div>
<div class="h-2 w-full bg-white/20 rounded-full overflow-hidden">
<div class="h-full bg-primary w-3/4 rounded-full"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="py-20 bg-slate-50 dark:bg-slate-900/50">
<div class="px-4 md:px-8 lg:px-12 xl:px-20 max-w-[1440px] mx-auto">
<div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
<div class="max-w-xl">
<h2 class="font-display font-bold text-3xl md:text-4xl text-slate-900 dark:text-white mb-4">Kata Mereka Tentang Kami</h2>
<p class="text-slate-600 dark:text-slate-400 text-lg">Ribuan siswa telah meningkatkan nilai mereka. Jadilah yang berikutnya.</p>
</div>
<div class="flex gap-2">
<button class="w-10 h-10 rounded-full border border-slate-300 dark:border-slate-600 flex items-center justify-center hover:bg-white dark:hover:bg-slate-800 transition-colors text-slate-600 dark:text-slate-400">
<span class="material-symbols-outlined">arrow_back</span>
</button>
<button class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:bg-primary-hover transition-colors shadow-lg shadow-primary/20">
<span class="material-symbols-outlined">arrow_forward</span>
</button>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-700 flex flex-col h-full hover:-translate-y-1 transition-transform duration-300">
<div class="flex text-amber-400 mb-6 gap-1">
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined fill-current">star</span>
</div>
<p class="text-slate-700 dark:text-slate-300 mb-8 flex-grow leading-relaxed">
                        "Nilai Matematika saya naik drastis dari 60 ke 90 hanya dalam 2 bulan. AI Tutor menjelaskan konsep sulit dengan sangat sederhana."
                    </p>
<div class="flex items-center gap-4 pt-6 border-t border-slate-100 dark:border-slate-700">
<div class="size-12 rounded-full bg-cover bg-center ring-2 ring-primary/20" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA1iP5oBB1eXrzuTnaCLGmmiEAIUE05pvQhazgRNSCycCFTjkK3R1JzcpnE_EhWm4EqzZ8Mt91TABe3vsFYhWYyJyP5F2xDFxNA8QLFctbUFltHwqSPcNbnI1yiRX5ZTIuXa2SVByT7E14vqff7cFEzDtO65CRxj9RLTTKpdiVW7i6Lij6-nnJok8aEorAfwRemNH-bropOLJXLa2HFJBjGRhdCp0NyUOYtG0ROgwc_Jm5jDQT4JPprfUAHf4PkyVlYbWKqQTRR-Co");'></div>
<div>
<h4 class="font-bold text-slate-900 dark:text-white">Budi Santoso</h4>
<p class="text-sm text-slate-500">Siswa SMA Kelas 12</p>
</div>
</div>
</div>
<div class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-700 flex flex-col h-full hover:-translate-y-1 transition-transform duration-300">
<div class="flex text-amber-400 mb-6 gap-1">
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined fill-current">star_half</span>
</div>
<p class="text-slate-700 dark:text-slate-300 mb-8 flex-grow leading-relaxed">
                        "Sangat membantu saat skripsi. Saya bisa diskusi materi teknik yang rumit kapan saja tanpa mengganggu dosen pembimbing."
                    </p>
<div class="flex items-center gap-4 pt-6 border-t border-slate-100 dark:border-slate-700">
<div class="size-12 rounded-full bg-cover bg-center ring-2 ring-primary/20" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCcgiCzcN16XxX5TmGN8UYORz78eDNfcTTMjZhOA0HdYw8_f3vSs2jRc6wS6ZtxbG0H1kxk_rmJnrmF9l0nS-68mQ3BOtbm89RW4kDRw3g8k1bRCwtUS7IopwnSk3QHbi61ZcKJV6BkBXMrKUIuKQT4rYDZqvEuA9bvRTUpUj-DXujaCcNpv47Ic-M2xe0wiW5fwGmZDPxwTznOFOToI3LSV0_EgvrXR30G5i6T9OWi69K9OlpgGksJUiBuyWlG6M9Z95zbE83-5yo");'></div>
<div>
<h4 class="font-bold text-slate-900 dark:text-white">Siti Aminah</h4>
<p class="text-sm text-slate-500">Mahasiswa Teknik</p>
</div>
</div>
</div>
<div class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-700 flex flex-col h-full hover:-translate-y-1 transition-transform duration-300">
<div class="flex text-amber-400 mb-6 gap-1">
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined fill-current">star</span>
</div>
<p class="text-slate-700 dark:text-slate-300 mb-8 flex-grow leading-relaxed">
                        "Persiapan UTBK jadi jauh lebih terarah. Saya tahu persis bagian mana yang lemah dan AI langsung kasih latihan spesifik."
                    </p>
<div class="flex items-center gap-4 pt-6 border-t border-slate-100 dark:border-slate-700">
<div class="size-12 rounded-full bg-cover bg-center ring-2 ring-primary/20" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA14SFhotMCTyc0JSsR5T58hZz5hDy3OK6K1Hc6QJVuagTscgLofofr34RuGKVg0gBzALOUurTf2cpvLXhpT_1XnyOOgf4KuWbDO9qJcoM_MKqQ1f2S4jdAINIyFyUTkxt26mD5X5ZF-lj1GVIP-JfxcupUj0rLAQfRug939w-Lu8Kc1-sj1E4ydPj5OMyFgHYRb-d5t3XZMmfPDT9MU89L37Rof1qYd9MZlxr9lb_0MbOOJNigfDNU6bVkSoLop2gJNiAdslIBcy8");'></div>
<div>
<h4 class="font-bold text-slate-900 dark:text-white">Andi Pratama</h4>
<p class="text-sm text-slate-500">Calon Mahasiswa</p>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="py-20 px-4 md:px-8 lg:px-12 xl:px-20">
<div class="max-w-[1440px] mx-auto rounded-3xl overflow-hidden bg-gradient-to-br from-primary to-secondary relative shadow-2xl shadow-primary/30">
<div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
<div class="absolute top-0 right-0 w-96 h-96 bg-white opacity-10 rounded-full translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
<div class="absolute bottom-0 left-0 w-64 h-64 bg-black opacity-10 rounded-full -translate-x-1/2 translate-y-1/2 blur-2xl"></div>
<div class="relative z-10 py-16 px-6 md:px-20 text-center md:text-left flex flex-col md:flex-row items-center justify-between gap-10">
<div class="max-w-2xl">
<h2 class="font-display font-bold text-3xl md:text-4xl lg:text-5xl text-white mb-6">Siap Melampaui Batas Kemampuanmu?</h2>
<p class="text-indigo-100 text-lg md:text-xl mb-8 leading-relaxed">
                        Gabung dengan komunitas pembelajar cerdas hari ini. Akses penuh ke semua fitur premium gratis selama 14 hari.
                    </p>
<div class="flex flex-col sm:flex-row gap-4">
<button class="bg-white text-primary font-bold py-4 px-8 rounded-xl shadow-lg hover:bg-slate-50 transition-colors transform hover:-translate-y-1">
                            Mulai Uji Coba Gratis
                        </button>
<button class="bg-transparent border border-white/30 text-white font-bold py-4 px-8 rounded-xl hover:bg-white/10 transition-colors backdrop-blur-sm">
                            Konsultasi Program
                        </button>
</div>
<p class="mt-4 text-indigo-200 text-sm flex items-center gap-2 justify-center md:justify-start">
<span class="material-symbols-outlined text-sm">check_circle</span> Tanpa kartu kredit
                        <span class="mx-2">•</span>
<span class="material-symbols-outlined text-sm">check_circle</span> Batalkan kapan saja
                    </p>
</div>
<div class="hidden md:block">
<div class="size-48 bg-white/10 backdrop-blur-md rounded-full flex items-center justify-center border border-white/20 shadow-inner">
<span class="material-symbols-outlined text-[80px] text-white">rocket_launch</span>
</div>
</div>
</div>
</div>
</section>
<footer class="bg-white dark:bg-background-dark border-t border-slate-200 dark:border-slate-800 pt-16 pb-8">
<div class="px-4 md:px-8 lg:px-12 xl:px-20 max-w-[1440px] mx-auto">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
<div class="space-y-4">
<div class="flex items-center gap-2 text-slate-900 dark:text-white mb-2">
<div class="size-8 bg-primary rounded-lg flex items-center justify-center text-white">
<span class="material-symbols-outlined text-lg">school</span>
</div>
<h3 class="text-xl font-bold font-display">AI Tutor</h3>
</div>
<p class="text-slate-500 text-sm leading-relaxed">
                        Platform edukasi masa depan yang menggabungkan kecerdasan buatan dengan metodologi pedagogi modern.
                    </p>
</div>
<div>
<h4 class="font-bold text-slate-900 dark:text-white mb-6">Produk</h4>
<ul class="space-y-3 text-sm text-slate-500">
<li><a class="hover:text-primary transition-colors" href="#">Fitur Utama</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Harga Paket</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Untuk Sekolah</a></li>
<li><a class="hover:text-primary transition-colors" href="#">API Developer</a></li>
</ul>
</div>
<div>
<h4 class="font-bold text-slate-900 dark:text-white mb-6">Perusahaan</h4>
<ul class="space-y-3 text-sm text-slate-500">
<li><a class="hover:text-primary transition-colors" href="#">Tentang Kami</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Karir</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Blog</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Kontak</a></li>
</ul>
</div>
<div>
<h4 class="font-bold text-slate-900 dark:text-white mb-6">Berlangganan</h4>
<p class="text-sm text-slate-500 mb-4">Dapatkan tips belajar terbaru langsung di inbox Anda.</p>
<div class="flex gap-2">
<input class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 text-slate-900 dark:text-white" placeholder="Email Anda" type="email"/>
<button class="bg-primary hover:bg-primary-hover text-white px-4 py-2 rounded-lg transition-colors">
<span class="material-symbols-outlined text-sm">send</span>
</button>
</div>
</div>
</div>
<div class="border-t border-slate-100 dark:border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="text-slate-400 text-sm">© 2024 AI Tutor Indonesia. Hak Cipta Dilindungi.</p>
<div class="flex gap-6">
<a class="text-slate-400 hover:text-primary transition-colors text-sm" href="#">Privasi</a>
<a class="text-slate-400 hover:text-primary transition-colors text-sm" href="#">Syarat &amp; Ketentuan</a>
<a class="text-slate-400 hover:text-primary transition-colors text-sm" href="#">Cookies</a>
</div>
</div>
</div>
</footer>

</body></html>