<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Ruang Belajar Interaktif - AI Learning Hub</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
<style>
        /* Custom scrollbar for better UX */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: transparent; 
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1; 
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8; 
        }
        .dark ::-webkit-scrollbar-thumb {
            background: #334155; 
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-white font-display overflow-hidden h-screen flex flex-col">
<!-- Top Navigation Bar -->
<header class="h-16 shrink-0 bg-white dark:bg-[#1a202c] border-b border-[#f0f2f4] dark:border-[#2d3748] px-6 flex items-center justify-between z-20">
<div class="flex items-center gap-4">
<div class="size-8 text-primary flex items-center justify-center bg-primary/10 rounded-lg">
<span class="material-symbols-outlined text-[24px]">school</span>
</div>
<h1 class="text-lg font-bold tracking-tight">AI Learning Hub</h1>
<div class="h-6 w-px bg-slate-200 dark:bg-slate-700 mx-2 hidden md:block"></div>
<nav class="hidden md:flex gap-1 text-sm font-medium text-slate-500 dark:text-slate-400">
<a class="text-slate-900 dark:text-white hover:bg-slate-100 dark:hover:bg-slate-800 px-3 py-1.5 rounded-lg transition-colors" href="#">Data Science</a>
<span class="flex items-center">/</span>
<a class="text-slate-900 dark:text-white hover:bg-slate-100 dark:hover:bg-slate-800 px-3 py-1.5 rounded-lg transition-colors" href="#">Module 3</a>
</nav>
</div>
<div class="flex items-center gap-4">
<div class="hidden md:flex flex-col items-end mr-2">
<div class="flex items-center gap-2 text-xs font-medium text-slate-500 mb-1">
<span>Module Progress</span>
<span class="text-primary">45%</span>
</div>
<div class="w-32 h-1.5 bg-slate-200 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="h-full bg-primary w-[45%] rounded-full"></div>
</div>
</div>
<button class="hidden sm:flex h-9 items-center gap-2 px-3 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-200 text-sm font-medium hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">
<span class="material-symbols-outlined text-[18px]">center_focus_strong</span>
                Focus Mode
            </button>
<div class="size-9 rounded-full bg-cover bg-center ring-2 ring-white dark:ring-slate-800 shadow-sm cursor-pointer" data-alt="User profile picture showing a smiling student" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBpxyh0QAi_giC84g8BB767CJGU3EEhGWlucRHqCRcf8OCOYyMZoAp1ty9eOdvjqN6hsnWsiuLIZqKlFzLnvLYT8Uf0CYRXLsFqHM7YP08O8kT76p8lUE_QM0frg4RuMK7bwllBeInRIEJA2ACfPEDuQYZ6ua2_p5rZXZVPYWYQxmahES3Zxgj-XP-CxW4caFtyYeUF9ZZzlIevk2LlqBlAmG1m8Gbq22fat3KuGc6YisUBWXqcdiKp5tNSFGYJeRHQNWKwMT36xuw");'>
</div>
</div>
</header>
<!-- Main Workspace -->
<main class="flex-1 flex overflow-hidden">
<!-- Left Sidebar: Course Roadmap -->
<aside class="w-80 flex-shrink-0 bg-white dark:bg-[#1a202c] border-r border-[#f0f2f4] dark:border-[#2d3748] flex flex-col hidden lg:flex">
<div class="p-5 border-b border-[#f0f2f4] dark:border-[#2d3748]">
<h2 class="text-base font-bold mb-1">Course Roadmap</h2>
<p class="text-xs text-slate-500 dark:text-slate-400">5/12 Lessons Completed</p>
</div>
<div class="flex-1 overflow-y-auto p-3 space-y-1">
<!-- Completed Item -->
<button class="w-full flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 group text-left transition-colors">
<div class="shrink-0 text-green-500">
<span class="material-symbols-outlined text-[20px] fill-1">check_circle</span>
</div>
<div class="flex-1">
<p class="text-sm font-medium text-slate-700 dark:text-slate-300 line-through decoration-slate-400">Introduction</p>
</div>
</button>
<!-- Completed Item -->
<button class="w-full flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 group text-left transition-colors">
<div class="shrink-0 text-green-500">
<span class="material-symbols-outlined text-[20px] fill-1">check_circle</span>
</div>
<div class="flex-1">
<p class="text-sm font-medium text-slate-700 dark:text-slate-300 line-through decoration-slate-400">Python Basics</p>
</div>
</button>
<!-- Active Item -->
<button class="w-full flex items-center gap-3 px-3 py-3 rounded-lg bg-primary/10 border border-primary/20 text-left transition-colors relative overflow-hidden">
<div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
<div class="shrink-0 text-primary">
<span class="material-symbols-outlined text-[20px] font-variation-settings-'FILL' 1">play_circle</span>
</div>
<div class="flex-1">
<p class="text-sm font-bold text-slate-900 dark:text-white">Pandas Dataframes</p>
<p class="text-[10px] text-primary font-medium mt-0.5 uppercase tracking-wider">In Progress</p>
</div>
</button>
<!-- Locked Item -->
<button class="w-full flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 group text-left transition-colors opacity-60">
<div class="shrink-0 text-slate-400">
<span class="material-symbols-outlined text-[20px]">lock</span>
</div>
<div class="flex-1">
<p class="text-sm font-medium text-slate-600 dark:text-slate-400">Quiz: Data Structures</p>
</div>
</button>
<!-- Locked Item -->
<button class="w-full flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 group text-left transition-colors opacity-60">
<div class="shrink-0 text-slate-400">
<span class="material-symbols-outlined text-[20px]">lock</span>
</div>
<div class="flex-1">
<p class="text-sm font-medium text-slate-600 dark:text-slate-400">Advanced Analysis</p>
</div>
</button>
<!-- Locked Item -->
<button class="w-full flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 group text-left transition-colors opacity-60">
<div class="shrink-0 text-slate-400">
<span class="material-symbols-outlined text-[20px]">lock</span>
</div>
<div class="flex-1">
<p class="text-sm font-medium text-slate-600 dark:text-slate-400">Data Visualization</p>
</div>
</button>
</div>
</aside>
<!-- Center: Learning Content -->
<section class="flex-1 flex flex-col h-full bg-background-light dark:bg-background-dark overflow-hidden relative">
<div class="flex-1 overflow-y-auto custom-scrollbar p-6 md:p-10 max-w-5xl mx-auto w-full">
<!-- Breadcrumbs Mobile -->
<div class="flex md:hidden items-center text-sm text-slate-500 mb-4 gap-2">
<span class="material-symbols-outlined text-[16px]">arrow_back</span>
<span>Back to Modules</span>
</div>
<div class="mb-6">
<h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-2">Pandas Dataframes</h2>
<p class="text-slate-600 dark:text-slate-400 text-lg">Mastering data manipulation with Python's most powerful library.</p>
</div>
<!-- Video Player -->
<div class="relative w-full aspect-video rounded-xl bg-black shadow-lg overflow-hidden group mb-8">
<div class="absolute inset-0 bg-cover bg-center opacity-60" data-alt="Screenshot of a code editor showing python pandas code" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCugKqcHRRLE5mxUrwDM5h2rR1B-kqK6Zs9H3SaukbHNOoIi9synzl26yyKc2G4Q6qemZU8XNE7RayZGBGClFLg0nUlwDyzMi6N_cXk1OMwREdwi9WQY5eTlY3iFVR1UF9OlaZoAULpQN07CNyPxTcDAme2SBZta8RQLCdWXlq5N-rYzdu-i4f9zyZSdACH5DI58_Ugnz6-BZKK0s-SBgqyqj2d6JfRslfBXWmOeKNyATYhYKMSYUpSqVSQAIlnCjl1mqYCzL9pTm8");'></div>
<button class="absolute inset-0 m-auto size-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all group-hover:scale-110 z-10">
<span class="material-symbols-outlined text-[48px] fill-1 pl-1">play_arrow</span>
</button>
<div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent p-4 md:p-6 opacity-0 group-hover:opacity-100 transition-opacity">
<div class="flex flex-col gap-2">
<div class="h-1 bg-white/30 rounded-full w-full cursor-pointer group/timeline">
<div class="h-full bg-primary w-1/3 rounded-full relative">
<div class="absolute right-0 top-1/2 -translate-y-1/2 size-3 bg-white rounded-full shadow opacity-0 group-hover/timeline:opacity-100"></div>
</div>
</div>
<div class="flex justify-between text-white text-xs font-medium">
<span>05:32 / 15:00</span>
<div class="flex gap-4">
<span class="material-symbols-outlined text-[20px] cursor-pointer hover:text-primary">closed_caption</span>
<span class="material-symbols-outlined text-[20px] cursor-pointer hover:text-primary">settings</span>
<span class="material-symbols-outlined text-[20px] cursor-pointer hover:text-primary">fullscreen</span>
</div>
</div>
</div>
</div>
</div>
<!-- Text Content -->
<div class="prose dark:prose-invert max-w-none text-slate-700 dark:text-slate-300">
<h3 class="text-xl font-bold text-slate-900 dark:text-white mb-4">Introduction to DataFrames</h3>
<p class="mb-4 leading-relaxed">
                        A DataFrame is a 2-dimensional labeled data structure with columns of potentially different types. You can think of it like a spreadsheet or SQL table, or a dict of Series objects. It is generally the most commonly used pandas object.
                    </p>
<div class="bg-blue-50 dark:bg-slate-800 border-l-4 border-primary p-4 my-6 rounded-r-lg">
<h4 class="font-bold text-primary flex items-center gap-2 mb-1">
<span class="material-symbols-outlined text-[20px]">lightbulb</span>
                            Key Concept
                        </h4>
<p class="text-sm text-slate-700 dark:text-slate-300">
                            The <code>.loc</code> property is used to access a group of rows and columns by label(s) or a boolean array.
                        </p>
</div>
<p class="mb-4 leading-relaxed">
                        Along with the data, you can optionally pass index (row labels) and columns (column labels) arguments. If you pass an index and / or columns, you are guaranteeing the index and / or columns of the resulting DataFrame.
                    </p>
<div class="my-8">
<button class="bg-white dark:bg-[#1a202c] border border-slate-200 dark:border-slate-700 rounded-lg p-4 w-full text-left hover:border-primary dark:hover:border-primary transition-colors group">
<div class="flex items-center justify-between mb-2">
<span class="font-semibold text-slate-900 dark:text-white">Quick Check: What does .loc do?</span>
<span class="material-symbols-outlined text-slate-400 group-hover:text-primary">expand_more</span>
</div>
<p class="text-sm text-slate-500 dark:text-slate-400">Test your understanding before moving forward.</p>
</button>
</div>
</div>
<!-- Navigation Footer -->
<div class="flex items-center justify-between mt-12 py-8 border-t border-slate-200 dark:border-slate-700">
<button class="flex items-center gap-2 px-4 py-2 text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white transition-colors">
<span class="material-symbols-outlined text-[20px]">arrow_back</span>
                        Previous Lesson
                    </button>
<button class="flex items-center gap-2 px-6 py-2.5 bg-primary text-white rounded-lg font-medium shadow-md shadow-primary/30 hover:bg-blue-600 hover:shadow-lg hover:shadow-primary/40 transition-all">
                        Next Lesson
                        <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
</button>
</div>
</div>
</section>
<!-- Right Sidebar: AI Tutor & Interaction Hub -->
<aside class="w-96 flex-shrink-0 bg-white dark:bg-[#1a202c] border-l border-[#f0f2f4] dark:border-[#2d3748] flex flex-col shadow-xl z-10 hidden xl:flex">
<!-- Tabs -->
<div class="flex border-b border-[#f0f2f4] dark:border-[#2d3748]">
<button class="flex-1 py-4 text-sm font-semibold text-primary border-b-2 border-primary bg-primary/5">
                    AI Tutor
                </button>
<button class="flex-1 py-4 text-sm font-semibold text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                    Discussion
                </button>
<button class="flex-1 py-4 text-sm font-semibold text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                    Notes
                </button>
</div>
<!-- Chat Area -->
<div class="flex-1 overflow-y-auto p-4 space-y-4 bg-slate-50/50 dark:bg-[#101822]/50">
<!-- AI Message -->
<div class="flex gap-3">
<div class="size-8 rounded-full bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 flex items-center justify-center shrink-0 shadow-sm text-white">
<span class="material-symbols-outlined text-[16px]">smart_toy</span>
</div>
<div class="flex flex-col gap-1 max-w-[85%]">
<div class="bg-white dark:bg-[#2d3748] p-3 rounded-2xl rounded-tl-none shadow-sm border border-slate-100 dark:border-slate-700">
<p class="text-sm text-slate-700 dark:text-slate-200">Hello! I noticed you paused the video at 05:32. Do you have any questions about creating DataFrames from dictionaries?</p>
</div>
<span class="text-[10px] text-slate-400 ml-1">10:42 AM</span>
</div>
</div>
<!-- User Message -->
<div class="flex gap-3 flex-row-reverse">
<div class="size-8 rounded-full bg-slate-200 dark:bg-slate-700 flex items-center justify-center shrink-0 overflow-hidden" data-alt="User avatar thumbnail" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBopDBaVdJLaJlriDvlf3Lzbx-UNq0G02XbakVIEkgk6KnSOmwcvGeq5Ca1ZjObPAmSPartBuWUrdzqCOj6mN72CWtBwaCDyNEz47l1f8laBup3mmlgJXFZeyqGmfVOwGkttXKx7mqfyPEwJWL1zELiDfLKr8aUsJx1QUoEfXh-uSOBEv_a4sqZPDcfC5KtxTxtSPTMSpryvs6b-CAhtvx-2hK2RAl2NqvZSmSQlnJaxBe5g3_Negm-HYxAfZJzP75BGZPfCsjyhb8"); background-size: cover;'>
</div>
<div class="flex flex-col gap-1 max-w-[85%] items-end">
<div class="bg-primary text-white p-3 rounded-2xl rounded-tr-none shadow-md shadow-primary/20">
<p class="text-sm">Can you explain the .loc method again? I'm a bit confused.</p>
</div>
<span class="text-[10px] text-slate-400 mr-1">10:43 AM</span>
</div>
</div>
<!-- AI Message (Typing) -->
<div class="flex gap-3">
<div class="size-8 rounded-full bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 flex items-center justify-center shrink-0 shadow-sm text-white">
<span class="material-symbols-outlined text-[16px]">smart_toy</span>
</div>
<div class="flex flex-col gap-1 max-w-[85%]">
<div class="bg-white dark:bg-[#2d3748] p-4 rounded-2xl rounded-tl-none shadow-sm border border-slate-100 dark:border-slate-700">
<p class="text-sm text-slate-700 dark:text-slate-200 mb-2">Certainly! Think of <code>.loc</code> as a way to select data by its **label** (name).</p>
<div class="bg-slate-100 dark:bg-slate-900 rounded p-2 font-mono text-xs text-slate-600 dark:text-slate-400 border border-slate-200 dark:border-slate-700 mb-2">
                                df.loc[row_label, column_label]
                            </div>
<p class="text-sm text-slate-700 dark:text-slate-200">Would you like a simple example with fruit prices?</p>
</div>
<span class="text-[10px] text-slate-400 ml-1">Just now</span>
</div>
</div>
</div>
<!-- Input Area -->
<div class="p-4 bg-white dark:bg-[#1a202c] border-t border-[#f0f2f4] dark:border-[#2d3748]">
<div class="flex flex-wrap gap-2 mb-3">
<button class="px-3 py-1 bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 rounded-full text-xs text-slate-600 dark:text-slate-300 transition-colors">Show Example</button>
<button class="px-3 py-1 bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 rounded-full text-xs text-slate-600 dark:text-slate-300 transition-colors">Quiz Me</button>
</div>
<div class="relative">
<input class="w-full pl-4 pr-12 py-3 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 text-slate-900 dark:text-white placeholder-slate-400" placeholder="Ask anything about the lesson..." type="text"/>
<button class="absolute right-2 top-1/2 -translate-y-1/2 p-1.5 bg-primary text-white rounded-lg hover:bg-blue-600 transition-colors">
<span class="material-symbols-outlined text-[20px] block">send</span>
</button>
</div>
</div>
</aside>
<!-- Mobile Floating Action Button for Chat (Visible only on smaller screens) -->
<button class="xl:hidden absolute bottom-6 right-6 size-14 bg-primary text-white rounded-full shadow-xl shadow-primary/40 flex items-center justify-center hover:scale-105 transition-transform z-50">
<span class="material-symbols-outlined text-[28px]">chat_bubble</span>
</button>
</main>
</body></html>