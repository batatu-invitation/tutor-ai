<!DOCTYPE html>
<html class="light" lang="id">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>Coba Lagi - AI Tutor</title>
        <link
            href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800&amp;display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet"
        />
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <script>
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        colors: {
                            "primary": "#10b981", // More standard emerald green
                            "secondary": "#f59e0b", // Amber for encouragement
                            "surface-light": "#ffffff",
                            "surface-dark": "#1f2937",
                            "background-light": "#f3f4f6",
                            "background-dark": "#111827",
                        },
                        fontFamily: {
                            "display": ["Lexend", "sans-serif"]
                        },
                        borderRadius: { "DEFAULT": "0.5rem", "lg": "0.75rem", "xl": "1rem", "2xl": "1.5rem", "full": "9999px" },
                    },
                },
            }
        </script>
    </head>
    <body
        class="bg-background-light dark:bg-background-dark font-display text-gray-900 dark:text-gray-100 antialiased"
    >
        <nav
            class="sticky top-0 z-50 w-full bg-surface-light dark:bg-surface-dark border-b border-gray-200 dark:border-gray-800 shadow-sm"
        >
            <div
                class="px-4 md:px-8 h-16 flex items-center justify-between max-w-7xl mx-auto"
            >
                <div class="flex items-center gap-8">
                    <div class="flex items-center gap-3">
                        <div
                            class="size-9 rounded-xl bg-primary/10 flex items-center justify-center text-primary"
                        >
                            <span class="material-symbols-outlined"
                                >school</span
                            >
                        </div>
                        <h2 class="text-xl font-bold tracking-tight">
                            AI Tutor
                        </h2>
                    </div>
                    <div class="hidden md:flex items-center gap-6">
                        <a
                            class="text-sm font-medium text-gray-500 hover:text-primary transition-colors"
                            href="#"
                            >Dashboard</a
                        >
                        <a
                            class="text-sm font-medium text-gray-500 hover:text-primary transition-colors"
                            href="#"
                            >Kursus Saya</a
                        >
                        <a
                            class="text-sm font-medium text-gray-500 hover:text-primary transition-colors"
                            href="#"
                            >Profil</a
                        >
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <div
                        class="size-9 rounded-full bg-cover bg-center border-2 border-primary/20"
                        style="
                            background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCfACjzm6qCl9Ejanve_xs2Q_GAy7phDVmqMwnNtAKOuthOnNXkPnQmIMzxIv_ucQ3ajIKACrr42Xsx7X9lfkvqxfv6G7NHXkSJcq3kdVuYyyYdfcNmMW2YhdgKo0DH3WLBiBhBWfoOHxonNtVZ1HRYNB3RvlfEKBQCXn5NWpN7M4QLcqUpwCCiVKb07flacRngTnUcZWl0leGazDIOd5ZVtMFCg_KGIW2XY_0vkxt21mokSBvS0mdIaLziBhDGI6lZ-zZJ62zD-DI');
                        "
                    ></div>
                </div>
            </div>
        </nav>
        <main class="w-full flex flex-col items-center py-8 px-4 md:px-8">
            <div class="w-full max-w-5xl flex flex-col gap-8">
                <section
                    class="relative overflow-hidden rounded-3xl bg-white dark:bg-surface-dark shadow-xl ring-1 ring-gray-900/5 dark:ring-white/10"
                >
                    <div
                        class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-primary/10 rounded-full blur-3xl"
                    ></div>
                    <div
                        class="absolute bottom-0 left-0 -mb-20 -ml-20 w-80 h-80 bg-secondary/10 rounded-full blur-3xl"
                    ></div>
                    <div
                        class="relative z-10 flex flex-col-reverse md:flex-row items-center gap-8 p-8 md:p-12"
                    >
                        <div
                            class="flex-1 flex flex-col gap-6 text-center md:text-left"
                        >
                            <div
                                class="inline-flex self-center md:self-start items-center gap-2 px-4 py-1.5 rounded-full bg-amber-50 text-amber-700 dark:bg-amber-900/30 dark:text-amber-400 text-sm font-bold border border-amber-100 dark:border-amber-800"
                            >
                                <span
                                    class="material-symbols-outlined text-[18px]"
                                    >sentiment_satisfied</span
                                >
                                Tetap Semangat!
                            </div>
                            <h1
                                class="text-3xl md:text-5xl font-extrabold leading-tight text-gray-900 dark:text-white"
                            >
                                Hampir sampai! <br />
                                <span
                                    class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-emerald-600"
                                    >Kamu Pasti Bisa.</span
                                >
                            </h1>
                            <p
                                class="text-gray-600 dark:text-gray-300 text-lg leading-relaxed max-w-xl"
                            >
                                Nilai ujianmu belum memenuhi target kelulusan,
                                tapi jangan khawatir. Ini adalah bagian alami
                                dari proses belajar. Kami telah menganalisis
                                jawabanmu dan menyiapkan panduan khusus agar
                                kamu berhasil di percobaan berikutnya.
                            </p>
                            <div
                                class="flex flex-col sm:flex-row gap-4 pt-2 justify-center md:justify-start"
                            >
                                <button
                                    class="group flex items-center justify-center gap-2 h-14 px-8 rounded-2xl bg-primary hover:bg-emerald-600 text-white font-bold transition-all shadow-lg shadow-primary/25 hover:shadow-xl hover:-translate-y-0.5"
                                >
                                    <span
                                        class="material-symbols-outlined group-hover:rotate-180 transition-transform duration-500"
                                        >refresh</span
                                    >
                                    <span>Coba Lagi Sekarang</span>
                                </button>
                                <button
                                    class="flex items-center justify-center gap-2 h-14 px-8 rounded-2xl bg-white border-2 border-gray-200 hover:border-gray-300 dark:bg-transparent dark:border-gray-700 dark:hover:border-gray-600 text-gray-700 dark:text-gray-200 font-bold transition-colors"
                                >
                                    <span class="material-symbols-outlined"
                                        >menu_book</span
                                    >
                                    <span>Review Materi</span>
                                </button>
                            </div>
                        </div>
                        <div
                            class="w-full md:w-5/12 aspect-[4/3] md:aspect-square lg:aspect-[4/3] rounded-2xl overflow-hidden shadow-lg rotate-2 hover:rotate-0 transition-all duration-500 relative"
                        >
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent z-10"
                            ></div>
                            <div
                                class="w-full h-full bg-cover bg-center"
                                style="
                                    background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD9Lp0lRYjjT-_j0ALy46vFPLjkSeW4AZk4T6Ylx2Z6yhxEe81Z9k3cPKEmkz7PsRq_aXKqM2zCjpou18UbgGI-fwpX2monYvAAH2FSdMxZ9Jv-EuijM2bFSFqTjvXn185Jn_FDHfR1h4Y6Lu15NOb4GhTlm1d0_SLsVHEgCC8fDs6aL-uDbj221zxmYGtLw5Q48TSQIP0hRymoaAJttUPqea7DFgc8lAXz-0ZM9bhBagWElNpYo7NKw-dQIi-DJ6fB-rU5bh_2EnQ');
                                "
                            ></div>
                            <div class="absolute bottom-4 left-4 right-4 z-20">
                                <div
                                    class="bg-white/90 dark:bg-gray-900/90 backdrop-blur-sm p-4 rounded-xl border border-white/20"
                                >
                                    <div class="flex items-center gap-3 mb-2">
                                        <div
                                            class="size-2 rounded-full bg-green-500 animate-pulse"
                                        ></div>
                                        <span
                                            class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400"
                                            >Status Terkini</span
                                        >
                                    </div>
                                    <p
                                        class="font-medium text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        "Kegagalan hanyalah kesempatan untuk
                                        memulai lagi dengan lebih cerdas."
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="grid grid-cols-1 md:grid-cols-12 gap-6">
                    <div
                        class="md:col-span-8 bg-white dark:bg-surface-dark rounded-3xl p-8 shadow-sm border border-gray-100 dark:border-gray-800 flex flex-col justify-center"
                    >
                        <div class="flex items-end justify-between mb-6">
                            <div>
                                <h3
                                    class="text-lg font-bold text-gray-900 dark:text-white mb-1"
                                >
                                    Hasil Ujian Kamu
                                </h3>
                                <p
                                    class="text-gray-500 dark:text-gray-400 text-sm"
                                >
                                    Sedikit lagi mencapai target kelulusan.
                                </p>
                            </div>
                            <div class="text-right">
                                <span
                                    class="text-4xl font-black text-gray-900 dark:text-white"
                                    >65</span
                                >
                                <span class="text-gray-400 text-xl font-bold"
                                    >/100</span
                                >
                            </div>
                        </div>
                        <div
                            class="relative h-6 bg-gray-100 dark:bg-gray-700 rounded-full w-full overflow-hidden"
                        >
                            <div
                                class="absolute top-0 bottom-0 w-0.5 bg-gray-400 z-20"
                                style="left: 75%"
                            ></div>
                            <div
                                class="absolute -top-1 text-[10px] font-bold text-gray-500 z-20 -translate-x-1/2 bg-white dark:bg-surface-dark px-1 py-0.5 rounded shadow-sm border border-gray-100 dark:border-gray-700"
                                style="left: 75%; top: -25px"
                            >
                                Target: 75
                            </div>
                            <div
                                class="absolute top-0 left-0 h-full bg-gradient-to-r from-amber-400 to-orange-500 rounded-full transition-all duration-1000 ease-out"
                                style="width: 65%"
                            ></div>
                        </div>
                        <div
                            class="mt-4 flex justify-between text-xs font-medium text-gray-500"
                        >
                            <span>0</span>
                            <span>100</span>
                        </div>
                    </div>
                    <div
                        class="md:col-span-4 bg-gradient-to-br from-indigo-600 to-purple-700 rounded-3xl p-8 shadow-lg text-white flex flex-col justify-between relative overflow-hidden"
                    >
                        <span
                            class="material-symbols-outlined absolute top-4 right-4 text-white/20 text-6xl"
                            >psychology</span
                        >
                        <div>
                            <div class="flex items-center gap-2 mb-4">
                                <span
                                    class="bg-white/20 p-1.5 rounded-lg backdrop-blur-sm"
                                >
                                    <span
                                        class="material-symbols-outlined text-sm"
                                        >auto_awesome</span
                                    >
                                </span>
                                <span
                                    class="text-sm font-bold uppercase tracking-wide text-indigo-100"
                                    >AI Analysis</span
                                >
                            </div>
                            <h3 class="text-xl font-bold leading-tight mb-2">
                                Potensi Kamu Besar!
                            </h3>
                            <p class="text-indigo-100 text-sm leading-relaxed">
                                Kamu unggul di 3 topik utama. Hanya perlu
                                perbaikan kecil di Logika Loop.
                            </p>
                        </div>
                        <div class="mt-6">
                            <button
                                class="w-full py-3 bg-white/10 hover:bg-white/20 backdrop-blur-md rounded-xl text-sm font-bold transition-colors flex items-center justify-center gap-2"
                            >
                                Lihat Detail Analisis
                                <span class="material-symbols-outlined text-sm"
                                    >arrow_forward</span
                                >
                            </button>
                        </div>
                    </div>
                </section>
                <section class="flex flex-col gap-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2
                                class="text-2xl font-bold text-gray-900 dark:text-white"
                            >
                                Fokus Perbaikan
                            </h2>
                            <p class="text-gray-500 dark:text-gray-400">
                                Rekomendasi AI Tutor untuk meningkatkan nilaimu.
                            </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div
                            class="group bg-white dark:bg-surface-dark p-6 rounded-2xl border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-md hover:border-red-200 dark:hover:border-red-900/50 transition-all"
                        >
                            <div class="flex justify-between items-start mb-4">
                                <div
                                    class="size-10 rounded-xl bg-red-50 dark:bg-red-900/20 text-red-500 flex items-center justify-center group-hover:scale-110 transition-transform"
                                >
                                    <span class="material-symbols-outlined"
                                        >sync_problem</span
                                    >
                                </div>
                                <span
                                    class="px-2 py-1 rounded-md bg-red-50 dark:bg-red-900/20 text-red-600 dark:text-red-400 text-xs font-bold uppercase"
                                    >Prioritas</span
                                >
                            </div>
                            <h3
                                class="font-bold text-lg text-gray-900 dark:text-white mb-2"
                            >
                                Konsep Loop &amp; Iterasi
                            </h3>
                            <p
                                class="text-sm text-gray-500 dark:text-gray-400 leading-relaxed mb-4"
                            >
                                Terdapat kesalahan pola pada penggunaan Nested
                                Loops. Mari bedah logika ini bersama.
                            </p>
                            <a
                                class="inline-flex items-center gap-2 text-sm font-bold text-primary hover:text-emerald-700 transition-colors"
                                href="#"
                            >
                                Pelajari Topik Ini
                                <span class="material-symbols-outlined text-sm"
                                    >arrow_forward</span
                                >
                            </a>
                        </div>
                        <div
                            class="group bg-white dark:bg-surface-dark p-6 rounded-2xl border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-md hover:border-amber-200 dark:hover:border-amber-900/50 transition-all"
                        >
                            <div class="flex justify-between items-start mb-4">
                                <div
                                    class="size-10 rounded-xl bg-amber-50 dark:bg-amber-900/20 text-amber-500 flex items-center justify-center group-hover:scale-110 transition-transform"
                                >
                                    <span class="material-symbols-outlined"
                                        >data_array</span
                                    >
                                </div>
                                <span
                                    class="px-2 py-1 rounded-md bg-amber-50 dark:bg-amber-900/20 text-amber-600 dark:text-amber-400 text-xs font-bold uppercase"
                                    >Latihan Lagi</span
                                >
                            </div>
                            <h3
                                class="font-bold text-lg text-gray-900 dark:text-white mb-2"
                            >
                                Struktur Data Array
                            </h3>
                            <p
                                class="text-sm text-gray-500 dark:text-gray-400 leading-relaxed mb-4"
                            >
                                Kamu sudah paham dasar array 1D, tapi array
                                multidimensi masih perlu sedikit latihan.
                            </p>
                            <a
                                class="inline-flex items-center gap-2 text-sm font-bold text-primary hover:text-emerald-700 transition-colors"
                                href="#"
                            >
                                Pelajari Topik Ini
                                <span class="material-symbols-outlined text-sm"
                                    >arrow_forward</span
                                >
                            </a>
                        </div>
                        <div
                            class="group bg-white dark:bg-surface-dark p-6 rounded-2xl border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-md hover:border-blue-200 dark:hover:border-blue-900/50 transition-all"
                        >
                            <div class="flex justify-between items-start mb-4">
                                <div
                                    class="size-10 rounded-xl bg-blue-50 dark:bg-blue-900/20 text-blue-500 flex items-center justify-center group-hover:scale-110 transition-transform"
                                >
                                    <span class="material-symbols-outlined"
                                        >memory</span
                                    >
                                </div>
                                <span
                                    class="px-2 py-1 rounded-md bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 text-xs font-bold uppercase"
                                    >Tips Pro</span
                                >
                            </div>
                            <h3
                                class="font-bold text-lg text-gray-900 dark:text-white mb-2"
                            >
                                Manajemen Memori
                            </h3>
                            <p
                                class="text-sm text-gray-500 dark:text-gray-400 leading-relaxed mb-4"
                            >
                                Optimasi pointermu sudah bagus, tapi ada trik
                                alokasi dinamis yang bisa kamu pelajari.
                            </p>
                            <a
                                class="inline-flex items-center gap-2 text-sm font-bold text-primary hover:text-emerald-700 transition-colors"
                                href="#"
                            >
                                Pelajari Topik Ini
                                <span class="material-symbols-outlined text-sm"
                                    >arrow_forward</span
                                >
                            </a>
                        </div>
                    </div>
                </section>
                <section
                    class="bg-gray-50 dark:bg-white/5 rounded-3xl p-6 md:p-8"
                >
                    <div class="flex items-center justify-between mb-6">
                        <h2
                            class="text-xl font-bold text-gray-900 dark:text-white"
                        >
                            Materi Pendukung Pilihan
                        </h2>
                        <a
                            class="text-sm font-semibold text-primary hover:text-emerald-600"
                            href="#"
                            >Lihat Semua</a
                        >
                    </div>
                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4"
                    >
                        <a class="group relative flex flex-col gap-3" href="#">
                            <div
                                class="relative w-full aspect-video rounded-2xl overflow-hidden shadow-sm"
                            >
                                <div
                                    class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors z-10"
                                ></div>
                                <div
                                    class="absolute top-2 left-2 bg-black/60 backdrop-blur-md text-white text-[10px] font-bold px-2 py-1 rounded-lg z-20 flex items-center gap-1"
                                >
                                    <span
                                        class="material-symbols-outlined text-[12px]"
                                        >play_arrow</span
                                    >
                                    Video
                                </div>
                                <div
                                    class="w-full h-full bg-cover bg-center transform group-hover:scale-105 transition-transform duration-700"
                                    style="
                                        background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBu4ehqRvz3h3sg3UBqTFZQWfnItXW519k09OGD_ioIyc-j2UJUWq-BQqvd8RWUI3CNz1y01ZxDQnuvi15CrjoBq3ogTEBpZu47BkeJ9vQr3JRvbEQfQTBaYbd3tVHDn1ZmAG1U6G8B3ExarPG_Uh8FXGUB1OhLKv3pxEcfLn7lP9lWWuk4mgp7DhqiATe0-ogVZ1KvVIoabzFYmu0VsOoRao4WUW6nuOEAHZzi5M8XJyjoXQ5NO3_1AOmXmbYWSmSHtYXOdAZK7Ig');
                                    "
                                ></div>
                            </div>
                            <div>
                                <h4
                                    class="font-bold text-gray-900 dark:text-white leading-tight group-hover:text-primary transition-colors mb-1"
                                >
                                    Visualisasi Nested Loops
                                </h4>
                                <p
                                    class="text-xs text-gray-500 dark:text-gray-400"
                                >
                                    10 Menit • Tingkat Menengah
                                </p>
                            </div>
                        </a>
                        <a class="group relative flex flex-col gap-3" href="#">
                            <div
                                class="relative w-full aspect-video rounded-2xl overflow-hidden shadow-sm"
                            >
                                <div
                                    class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors z-10"
                                ></div>
                                <div
                                    class="absolute top-2 left-2 bg-black/60 backdrop-blur-md text-white text-[10px] font-bold px-2 py-1 rounded-lg z-20 flex items-center gap-1"
                                >
                                    <span
                                        class="material-symbols-outlined text-[12px]"
                                        >article</span
                                    >
                                    Artikel
                                </div>
                                <div
                                    class="w-full h-full bg-cover bg-center transform group-hover:scale-105 transition-transform duration-700"
                                    style="
                                        background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA7rHjJHiaebGZgnjjB5_7QuNCiBiMG1IbG1wsRXYeysvprSHW-jnNaodf4BtgxsJZc-nkAMxm_yTZ4-mj4yAeAtRkRz1y2B7lrgVylaBRAxBkzoQizHy6Z5hITEVeaU5o2xwArAGZ5EZk0PRlonsQrcApLUS4_l3ba2jiw9YMdYtX_hgf53qNd69y0qSnVcBzFMmNY_iPwiPmSp4ZQWnwoXLyBD8obcySznmqiXf0hqVLOY3K0nZYXAWivPXOBfUJhsrNxa6WiUro');
                                    "
                                ></div>
                            </div>
                            <div>
                                <h4
                                    class="font-bold text-gray-900 dark:text-white leading-tight group-hover:text-primary transition-colors mb-1"
                                >
                                    Array vs List: Panduan Lengkap
                                </h4>
                                <p
                                    class="text-xs text-gray-500 dark:text-gray-400"
                                >
                                    5 Menit Baca • Teori
                                </p>
                            </div>
                        </a>
                        <a class="group relative flex flex-col gap-3" href="#">
                            <div
                                class="relative w-full aspect-video rounded-2xl overflow-hidden shadow-sm"
                            >
                                <div
                                    class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors z-10"
                                ></div>
                                <div
                                    class="absolute top-2 left-2 bg-black/60 backdrop-blur-md text-white text-[10px] font-bold px-2 py-1 rounded-lg z-20 flex items-center gap-1"
                                >
                                    <span
                                        class="material-symbols-outlined text-[12px]"
                                        >quiz</span
                                    >
                                    Quiz
                                </div>
                                <div
                                    class="w-full h-full bg-cover bg-center transform group-hover:scale-105 transition-transform duration-700"
                                    style="
                                        background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAulwbDMaE-ZmJGc9gicX8Eb_5AHI_wdYYbEiQBQ0BHbho52nqzwY1RC5OgGhhoRdINpE5JX-7X5x6_Es6zKIIREBYw3LGWWLS382qqm7vXLqRnxYnrqwrPdxGjxt0cPrKTPsPulaUQg1gh5nnMNXTNdLFZiPWx-l2t8vGImeOsFadleFSmnFnhalN-8WP8Kv1qyAgviQ9UBbcVHXXZbTUW52OBTzE-6UAX1J9cIbAWqNMDGnyLJ3ezp885Ce1liJGTnbgBu0w1kKQ');
                                    "
                                ></div>
                            </div>
                            <div>
                                <h4
                                    class="font-bold text-gray-900 dark:text-white leading-tight group-hover:text-primary transition-colors mb-1"
                                >
                                    Mini Kuis Struktur Data
                                </h4>
                                <p
                                    class="text-xs text-gray-500 dark:text-gray-400"
                                >
                                    5 Soal • Praktik
                                </p>
                            </div>
                        </a>
                        <a class="group relative flex flex-col gap-3" href="#">
                            <div
                                class="relative w-full aspect-video rounded-2xl overflow-hidden shadow-sm"
                            >
                                <div
                                    class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors z-10"
                                ></div>
                                <div
                                    class="absolute top-2 left-2 bg-black/60 backdrop-blur-md text-white text-[10px] font-bold px-2 py-1 rounded-lg z-20 flex items-center gap-1"
                                >
                                    <span
                                        class="material-symbols-outlined text-[12px]"
                                        >play_arrow</span
                                    >
                                    Video
                                </div>
                                <div
                                    class="w-full h-full bg-cover bg-center transform group-hover:scale-105 transition-transform duration-700"
                                    style="
                                        background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDhCKkJYkoKgtz_catzWuRmEg_6QB_Fm42XiNjSsjoObvQwp2cZdkcnK6k2JXCz80ShciqdS0pEC6H_QY1DMabKNxSdtV_NRpwzOxGOkbenGw4TZnZvdMwNUKMu7-kCKjToWL5qn2aGAeI0Sy6W6okohn3jJoln4sCsLZ-9XP0Pnhjh3TBzMYm_m9f8qidtwCDwtnRerDAWcdlcPqzzFAxyIingr3iCauuENkwv6hQ3BqAJfXYeFX3qc-XEDHLjCZoEE0q-B4EPrO4');
                                    "
                                ></div>
                            </div>
                            <div>
                                <h4
                                    class="font-bold text-gray-900 dark:text-white leading-tight group-hover:text-primary transition-colors mb-1"
                                >
                                    Deep Dive: Pointer &amp; RAM
                                </h4>
                                <p
                                    class="text-xs text-gray-500 dark:text-gray-400"
                                >
                                    15 Menit • Lanjutan
                                </p>
                            </div>
                        </a>
                    </div>
                </section>
                <footer class="text-center py-6 px-4">
                    <p
                        class="text-gray-400 dark:text-gray-500 italic text-sm max-w-lg mx-auto"
                    >
                        "Setiap ahli dulunya adalah pemula. Jangan takut salah,
                        takutlah jika berhenti mencoba."
                    </p>
                </footer>
            </div>
        </main>
    </body>
</html>
 