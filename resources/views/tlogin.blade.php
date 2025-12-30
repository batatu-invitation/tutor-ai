<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>AI Tutor - Login &amp; Register</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
</head>
<body class="font-display bg-background-light dark:bg-background-dark text-[#111418] dark:text-white transition-colors duration-200">
<div class="relative flex min-h-screen w-full flex-row overflow-hidden">
<!-- Left Section: Form -->
<div class="flex flex-col flex-1 min-h-screen bg-white dark:bg-background-dark relative z-10 lg:w-1/2 w-full lg:max-w-[600px] shrink-0 border-r border-[#f0f2f4] dark:border-slate-800 shadow-xl lg:shadow-none">
<!-- Header Logo -->
<div class="px-8 pt-8 pb-4">
<div class="flex items-center gap-3 text-[#111418] dark:text-white">
<div class="size-8 flex items-center justify-center rounded-lg bg-primary/10 text-primary">
<span class="material-symbols-outlined text-2xl">school</span>
</div>
<h2 class="text-xl font-bold leading-tight tracking-[-0.015em]">AI Tutor</h2>
</div>
</div>
<div class="flex-1 flex flex-col justify-center px-8 sm:px-12 py-8 overflow-y-auto">
<div class="w-full max-w-[420px] mx-auto flex flex-col gap-6">
<!-- Page Heading -->
<div class="flex flex-col gap-2">
<h1 class="text-[#111418] dark:text-white tracking-tight text-3xl sm:text-4xl font-extrabold leading-tight">
                            Mulai Petualangan Belajar Anda
                        </h1>
<p class="text-[#617289] dark:text-slate-400 text-base font-normal leading-normal">
                            Bergabunglah dengan ribuan siswa yang belajar lebih cerdas.
                        </p>
</div>
<!-- Tabs -->
<div class="border-b border-[#dbe0e6] dark:border-slate-700">
<div class="flex gap-8">
<a class="group flex flex-col items-center justify-center border-b-[3px] border-transparent pb-3 pt-2 hover:border-slate-300 transition-colors" href="#">
<p class="text-[#617289] dark:text-slate-400 group-hover:text-primary text-sm font-bold leading-normal tracking-[0.015em]">Masuk</p>
</a>
<a class="flex flex-col items-center justify-center border-b-[3px] border-b-primary pb-3 pt-2" href="#">
<p class="text-primary text-sm font-bold leading-normal tracking-[0.015em]">Daftar</p>
</a>
</div>
</div>
<!-- Form Inputs -->
<div class="flex flex-col gap-4">
<!-- Name Field (Only for Register) -->
<label class="flex flex-col gap-1.5 w-full">
<p class="text-[#111418] dark:text-slate-200 text-sm font-bold leading-normal">Nama Lengkap</p>
<div class="relative">
<input class="form-input flex w-full min-w-0 resize-none overflow-hidden rounded-xl text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dbe0e6] dark:border-slate-600 bg-white dark:bg-slate-800 focus:border-primary h-12 pl-11 pr-4 text-sm font-normal leading-normal placeholder:text-[#617289]" placeholder="Masukkan nama lengkap Anda" type="text"/>
<div class="absolute left-3.5 top-1/2 -translate-y-1/2 text-[#617289]">
<span class="material-symbols-outlined text-[20px]">person</span>
</div>
</div>
</label>
<label class="flex flex-col gap-1.5 w-full">
<p class="text-[#111418] dark:text-slate-200 text-sm font-bold leading-normal">Alamat Email</p>
<div class="relative">
<input class="form-input flex w-full min-w-0 resize-none overflow-hidden rounded-xl text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dbe0e6] dark:border-slate-600 bg-white dark:bg-slate-800 focus:border-primary h-12 pl-11 pr-4 text-sm font-normal leading-normal placeholder:text-[#617289]" placeholder="nama@email.com" type="email"/>
<div class="absolute left-3.5 top-1/2 -translate-y-1/2 text-[#617289]">
<span class="material-symbols-outlined text-[20px]">mail</span>
</div>
</div>
</label>
<label class="flex flex-col gap-1.5 w-full">
<p class="text-[#111418] dark:text-slate-200 text-sm font-bold leading-normal">Kata Sandi</p>
<div class="relative">
<input class="form-input flex w-full min-w-0 resize-none overflow-hidden rounded-xl text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dbe0e6] dark:border-slate-600 bg-white dark:bg-slate-800 focus:border-primary h-12 pl-11 pr-4 text-sm font-normal leading-normal placeholder:text-[#617289]" placeholder="Buat kata sandi aman" type="password"/>
<div class="absolute left-3.5 top-1/2 -translate-y-1/2 text-[#617289]">
<span class="material-symbols-outlined text-[20px]">lock</span>
</div>
<div class="absolute right-3.5 top-1/2 -translate-y-1/2 text-[#617289] cursor-pointer hover:text-primary">
<span class="material-symbols-outlined text-[20px]">visibility</span>
</div>
</div>
<p class="text-[#617289] text-xs mt-1">Minimal 8 karakter dengan huruf &amp; angka.</p>
</label>
</div>
<!-- Action Button -->
<button class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl h-12 px-5 bg-primary hover:bg-blue-600 text-white text-base font-bold leading-normal tracking-[0.015em] transition-all shadow-lg shadow-primary/30 mt-2">
<span class="truncate">Buat Akun Baru</span>
</button>
<!-- Divider -->
<div class="relative flex items-center py-2">
<div class="flex-grow border-t border-[#dbe0e6] dark:border-slate-700"></div>
<span class="flex-shrink-0 mx-4 text-[#617289] text-sm">Atau daftar dengan</span>
<div class="flex-grow border-t border-[#dbe0e6] dark:border-slate-700"></div>
</div>
<!-- Social Login -->
<div class="grid grid-cols-2 gap-3">
<button class="flex items-center justify-center gap-2 rounded-xl border border-[#dbe0e6] dark:border-slate-600 bg-white dark:bg-slate-800 h-12 hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">
<svg class="size-5" fill="none" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M23.766 12.2764C23.766 11.4607 23.6999 10.6406 23.5588 9.83807H12.24V14.4591H18.7217C18.4528 15.9494 17.5885 17.2678 16.323 18.1056V21.1039H20.19C22.4608 19.0139 23.766 15.9274 23.766 12.2764Z" fill="#4285F4"></path>
<path d="M12.2401 24.0008C15.4766 24.0008 18.2059 22.9382 20.1945 21.1039L16.3275 18.1055C15.2517 18.8375 13.8627 19.252 12.2445 19.252C9.11388 19.252 6.45946 17.1399 5.50705 14.3003H1.5166V17.3912C3.55371 21.4434 7.7029 24.0008 12.2401 24.0008Z" fill="#34A853"></path>
<path d="M5.50253 14.3003C5.00236 12.8199 5.00236 11.1799 5.50253 9.69951V6.60861H1.51649C-0.18551 10.0056 -0.18551 13.9945 1.51649 17.3915L5.50253 14.3003Z" fill="#FBBC05"></path>
<path d="M12.2401 4.74966C13.9509 4.7232 15.6044 5.36697 16.8434 6.54867L20.2695 3.12262C18.1001 1.0855 15.2208 -0.034466 12.2401 0.000808666C7.7029 0.000808666 3.55371 2.55822 1.5166 6.60861L5.50264 9.69951C6.45064 6.86248 9.10947 4.74966 12.2401 4.74966Z" fill="#EA4335"></path>
</svg>
<span class="text-[#111418] dark:text-white text-sm font-bold">Google</span>
</button>
<button class="flex items-center justify-center gap-2 rounded-xl border border-[#dbe0e6] dark:border-slate-600 bg-white dark:bg-slate-800 h-12 hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">
<span class="text-[#111418] dark:text-white">
<svg class="size-5" fill="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M17.05 20.28C15.82 22.03 14.35 21.99 13.06 21.46C11.83 20.95 10.74 20.97 9.54 21.47C8.16 22.04 6.88 21.94 5.56 20.03C2.86 16.14 0.94 10.27 4.09 5.09C5.63 2.56 8.32 2.16 9.87 2.13C11.36 2.09 12.39 2.97 13.68 2.97C14.93 2.97 16.29 1.76 18.06 1.96C19.78 2.15 21.36 3.09 22.42 4.62C18.23 7.17 18.91 12.43 23.33 14.19C22.41 16.51 20.1 20.19 17.05 20.28ZM12.03 0C12.92 0 14.19 0.58 14.86 1.63C14.07 4.77 10.15 4.6 9.71 1.7C9.67 0.92 10.42 0.05 12.03 0Z"></path>
</svg>
</span>
<span class="text-[#111418] dark:text-white text-sm font-bold">Apple</span>
</button>
</div>
<p class="text-center text-[#617289] text-sm font-medium mt-4">
                        Sudah punya akun? <a class="text-primary font-bold hover:underline" href="#">Masuk di sini</a>
</p>
</div>
</div>
<div class="px-8 pb-6 pt-2">
<div class="flex flex-wrap gap-4 justify-center text-xs text-[#617289] dark:text-slate-500">
<a class="hover:text-primary transition-colors" href="#">Syarat &amp; Ketentuan</a>
<span>•</span>
<a class="hover:text-primary transition-colors" href="#">Kebijakan Privasi</a>
<span>•</span>
<a class="hover:text-primary transition-colors" href="#">Bantuan</a>
</div>
</div>
</div>
<!-- Right Section: Visual / Hero -->
<div class="hidden lg:flex lg:flex-1 relative bg-[#F8FAFC] dark:bg-slate-900 items-center justify-center p-12 overflow-hidden">
<!-- Background decorative shapes -->
<div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
<div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-blue-400/10 rounded-full blur-3xl translate-y-1/2 -translate-x-1/3"></div>
<div class="relative w-full max-w-2xl flex flex-col items-center text-center gap-10">
<!-- Illustration Container -->
<div class="w-full aspect-square max-w-[500px] relative">
<!-- 
                       Since I cannot use external images that are not placeholders or authorized, 
                       I will create a CSS/HTML composition or use a placeholder that fits the "Human characters in context" request.
                       However, the instructions ask to use a placeholder with alt.
                     -->
<div class="w-full h-full rounded-2xl bg-gradient-to-br from-blue-50 to-white dark:from-slate-800 dark:to-slate-900 shadow-2xl border border-slate-100 dark:border-slate-700 flex items-center justify-center overflow-hidden relative">
<div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&amp;w=2671&amp;auto=format&amp;fit=crop')] bg-cover bg-center opacity-80 mix-blend-overlay" data-alt="Abstract background of students studying together in a modern bright environment"></div>
<!-- Floating UI Elements Mockup -->
<div class="relative z-10 w-3/4 h-3/4 bg-white/10 backdrop-blur-md rounded-xl border border-white/20 p-6 flex flex-col gap-4 shadow-xl transform rotate-[-3deg] hover:rotate-0 transition-transform duration-500">
<div class="flex items-center gap-3 mb-2">
<div class="size-10 rounded-full bg-primary flex items-center justify-center text-white">
<span class="material-symbols-outlined">auto_awesome</span>
</div>
<div class="flex flex-col text-left">
<span class="text-sm font-bold text-[#111418] dark:text-white">Analisis Belajar</span>
<span class="text-xs text-primary font-medium">Progress Minggu Ini</span>
</div>
</div>
<div class="flex-1 w-full bg-white/50 dark:bg-black/20 rounded-lg p-4 flex items-end justify-between gap-2">
<div class="w-full bg-primary/20 rounded-t-sm h-[40%]"></div>
<div class="w-full bg-primary/40 rounded-t-sm h-[60%]"></div>
<div class="w-full bg-primary/60 rounded-t-sm h-[30%]"></div>
<div class="w-full bg-primary rounded-t-sm h-[85%] relative group cursor-pointer">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-[#111418] text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                                         Top Performance!
                                     </div>
</div>
<div class="w-full bg-primary/30 rounded-t-sm h-[55%]"></div>
</div>
<div class="h-2 w-1/2 bg-slate-200 dark:bg-slate-600 rounded-full"></div>
<div class="h-2 w-3/4 bg-slate-200 dark:bg-slate-600 rounded-full"></div>
</div>
</div>
</div>
<div class="flex flex-col gap-4 max-w-lg">
<h3 class="text-3xl font-extrabold text-[#111418] dark:text-white leading-tight">
                        Revolusi Cara Belajar Anda
                    </h3>
<p class="text-[#617289] dark:text-slate-400 text-lg">
                        Teknologi AI yang mempersonalisasi materi untuk pemahaman yang lebih cepat dan mendalam. Mulai perjalanan Anda hari ini.
                    </p>
<div class="flex justify-center gap-2 mt-4">
<div class="w-2 h-2 rounded-full bg-primary"></div>
<div class="w-2 h-2 rounded-full bg-[#dbe0e6] dark:bg-slate-700"></div>
<div class="w-2 h-2 rounded-full bg-[#dbe0e6] dark:bg-slate-700"></div>
</div>
</div>
</div>
</div>
</div>
</body></html>