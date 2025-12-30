<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8"/>
            <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
            <title>
                Halaman Ujian Interaktif - AI Tutor
            </title>
            <link href="https://fonts.googleapis.com" rel="preconnect"/>
            <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
            <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&amp;family=Noto+Sans:wght@300..800&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
            <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
            <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries">
            </script>
            <script id="tailwind-config">
                tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary": "#3b82f6", 
                        "primary-dark": "#2563eb",
                        "accent": "#8b5cf6", 
                        "background": "#ffffff", 
                        "surface": "#f8fafc", 
                        "surface-hover": "#f1f5f9",
                        "border": "#e2e8f0", 
                        "text-main": "#0f172a", 
                        "text-muted": "#64748b",
                    },
                    fontFamily: {
                        "display": ["Lexend", "sans-serif"],
                        "body": ["Plus Jakarta Sans", "sans-serif"],
                        "mono": ["JetBrains Mono", "monospace", "ui-monospace"] 
                    },
                    boxShadow: {
                        'glow': '0 0 20px rgba(59, 130, 246, 0.2)',
                        'soft': '0 10px 40px -10px rgba(0,0,0,0.08)'
                    }
                },
            },
        }
            </script>
            <style>
                ::-webkit-scrollbar { width: 6px; }
          ::-webkit-scrollbar-track { background: transparent; }
          ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
          ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
          .glass-panel {
              background: rgba(255, 255, 255, 0.8);
              backdrop-filter: blur(12px);
              -webkit-backdrop-filter: blur(12px);
              border: 1px solid rgba(255, 255, 255, 0.5);
          }
          .option-radio:checked + .option-card {
              border-color: #3b82f6;
              background-color: #eff6ff;box-shadow: 0 4px 6px -1px rgba(59, 130, 246, 0.1);
          }
          .option-radio:checked + .option-card .option-indicator {
              background-color: #3b82f6;
              color: white;
              border-color: #3b82f6;
          }
          @keyframes breathe {
              0%, 100% { transform: scale(1); opacity: 0.3; }
              50% { transform: scale(1.05); opacity: 0.5; }
          }
          .focus-circle {
              animation: breathe 4s infinite ease-in-out;
          }  
          </style>
        </head>
        <body class="bg-background min-h-screen font-body text-text-main flex flex-col overflow-hidden selection:bg-primary/20 selection:text-primary-dark">
            <div class="fixed inset-0 pointer-events-none z-0">
                <div class="absolute top-0 left-0 w-[600px] h-[600px] bg-blue-100/40 rounded-full blur-[120px] -translate-x-1/2 -translate-y-1/2 mix-blend-multiply">
                </div>
                <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-violet-100/40 rounded-full blur-[120px] translate-x-1/3 translate-y-1/3 mix-blend-multiply">
                </div>
            </div>
            <header class="h-16 border-b border-border bg-white/80 backdrop-blur-md sticky top-0 z-50 flex items-center justify-between px-4 lg:px-8 shadow-sm">
                <div class="flex items-center gap-3">
                    <div class="size-9 rounded-lg bg-gradient-to-br from-primary to-accent flex items-center justify-center shadow-lg shadow-primary/20">
                        <span class="material-symbols-outlined text-white text-[20px]">
                            psychology_alt
                        </span>
                    </div>
                    <div class="hidden sm:block">
                        <h1 class="font-display font-bold text-text-main text-sm tracking-wide">
                            AI Tutor
                        </h1>
                        <p class="text-[10px] text-text-muted uppercase tracking-widest font-semibold">
                            Exam Mode
                        </p>
                    </div>
                </div>
                <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 hidden md:flex flex-col items-center">
                    <div class="flex items-center gap-2 px-4 py-1.5 rounded-full bg-white border border-border shadow-sm">
                        <span class="material-symbols-outlined text-primary text-[18px] animate-pulse">
                            timer
                        </span>
                        <span class="font-mono text-lg font-bold text-text-main tracking-wider">
                            00:45:12
                        </span>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <button class="size-9 rounded-lg flex items-center justify-center hover:bg-surface text-text-muted hover:text-text-main transition-colors">
                        <span class="material-symbols-outlined text-[20px]">
                            settings
                        </span>
                    </button>
                    <button class="h-9 px-4 rounded-lg bg-red-50 hover:bg-red-100 text-red-600 border border-red-200 text-xs font-bold uppercase tracking-wider transition-all flex items-center gap-2">
                        <span>
                            Finish
                        </span>
                        <span class="material-symbols-outlined text-[16px]">
                            logout
                        </span>
                    </button>
                </div>
            </header>
            <div class="flex-1 flex overflow-hidden relative z-10">
                <main class="flex-1 relative flex flex-col overflow-y-auto custom-scrollbar bg-transparent">
                    <div class="flex-1 max-w-4xl mx-auto w-full p-4 md:p-8 lg:p-12 pb-24">
                        <div class="mb-8">
                            <div class="flex justify-between items-end mb-3">
                                <div>
                                    <span class="text-xs font-bold text-primary uppercase tracking-wider mb-1 block">
                                        Question 5
                                    </span>
                                    <h2 class="text-2xl font-display font-bold text-text-main">
                                        Mathematics Analysis
                                    </h2>
                                </div>
                                <div class="text-right">
                                    <span class="text-2xl font-display font-bold text-text-main">
                                        5
                                    </span>
                                    <span class="text-sm text-text-muted font-medium">
                                        / 40
                                    </span>
                                </div>
                            </div>
                            <div class="h-2 w-full bg-slate-100 rounded-full overflow-hidden border border-slate-200/50">
                                <div class="h-full bg-gradient-to-r from-primary to-accent w-[12.5%] shadow-[0_0_10px_rgba(59,130,246,0.4)]">
                                </div>
                            </div>
                        </div>
                        <div class="space-y-8 animate-[fadeIn_0.5s_ease-out]">
                            <div class="prose prose-slate max-w-none">
                                <p class="text-lg md:text-xl leading-relaxed text-slate-700">
                                    Jika diketahui nilai
                                    <code class="bg-slate-100 text-primary-dark px-2 py-0.5 rounded border border-border font-mono text-base font-medium">
                                        x = 5
                                    </code>
                                    dan
                                    <code class="bg-slate-100 text-primary-dark px-2 py-0.5 rounded border border-border font-mono text-base font-medium">
                                        y = 2
                                    </code>
                                    , manakah dari pilihan di bawah ini yang merupakan hasil dari persamaan linear
                                    <span class="text-amber-600 bg-amber-50 px-1 rounded font-bold border border-amber-100">
                                        2x + 3y
                                    </span>
                                    ?
                                </p>
                            </div>
                            <div class="rounded-2xl overflow-hidden border border-border shadow-soft relative group bg-white">
                                <img alt="Mathematical graph" class="w-full h-64 md:h-80 object-cover object-center group-hover:scale-105 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCbuAvJGV_mWM7UKdAupoaqo0oeJIHziEElmpNed1yGpa8LAZu8LcwX75RK6rpHkwC_Z1z-UIR-0ExQWkTD8Mxa825MlidB9XsyDadMJw56XHGcLsZtEpDn_CCTsmfhj7VM-htCbuqu9xHILkj90OfKpS7W9WZZ4cBMK3NbksbwRxEc5KEA4Ci2QNJixHeI3hWnnZxpW6E-1ZV5QSjHixzec88vlA2Ib3oa7ZLEfWcz75BPSR9okTm0U7nx-e8xTZgPWzhHlCdEmZQ"/>
                                <div class="absolute bottom-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <button class="bg-white/90 backdrop-blur text-text-main text-xs px-3 py-1.5 rounded-lg border border-border shadow-lg flex items-center gap-1 hover:bg-white hover:text-primary font-semibold">
                                        <span class="material-symbols-outlined text-[16px]">
                                            fullscreen
                                        </span>
                                        Expand
                                    </button>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 gap-3 pt-2">
                                <label class="group cursor-pointer block relative">
                                    <input class="option-radio hidden" name="answer" type="radio" value="A"/>
                                    <div class="option-card flex items-center p-4 rounded-xl border border-border bg-white hover:bg-surface hover:border-primary/30 transition-all duration-200 shadow-sm">
                                        <div class="option-indicator w-10 h-10 rounded-lg bg-surface border border-border text-text-muted font-bold flex items-center justify-center mr-4 transition-colors group-hover:text-primary group-hover:border-primary/30">
                                            A
                                        </div>
                                        <span class="text-lg font-medium text-slate-700 group-hover:text-slate-900">
                                            10
                                        </span>
                                    </div>
                                </label>
                                <label class="group cursor-pointer block relative">
                                    <input checked="" class="option-radio hidden" name="answer" type="radio" value="B"/>
                                    <div class="option-card flex items-center p-4 rounded-xl border border-border bg-white hover:bg-surface transition-all duration-200 shadow-sm">
                                        <div class="option-indicator w-10 h-10 rounded-lg bg-surface border border-border text-text-muted font-bold flex items-center justify-center mr-4 transition-colors">
                                            B
                                        </div>
                                        <span class="text-lg font-medium text-slate-700">
                                            16
                                        </span>
                                    </div>
                                </label>
                                <label class="group cursor-pointer block relative">
                                    <input class="option-radio hidden" name="answer" type="radio" value="C"/>
                                    <div class="option-card flex items-center p-4 rounded-xl border border-border bg-white hover:bg-surface hover:border-primary/30 transition-all duration-200 shadow-sm">
                                        <div class="option-indicator w-10 h-10 rounded-lg bg-surface border border-border text-text-muted font-bold flex items-center justify-center mr-4 transition-colors group-hover:text-primary group-hover:border-primary/30">
                                            C
                                        </div>
                                        <span class="text-lg font-medium text-slate-700 group-hover:text-slate-900">
                                            25
                                        </span>
                                    </div>
                                </label>
                                <label class="group cursor-pointer block relative">
                                    <input class="option-radio hidden" name="answer" type="radio" value="D"/>
                                    <div class="option-card flex items-center p-4 rounded-xl border border-border bg-white hover:bg-surface hover:border-primary/30 transition-all duration-200 shadow-sm">
                                        <div class="option-indicator w-10 h-10 rounded-lg bg-surface border border-border text-text-muted font-bold flex items-center justify-center mr-4 transition-colors group-hover:text-primary group-hover:border-primary/30">
                                            D
                                        </div>
                                        <span class="text-lg font-medium text-slate-700 group-hover:text-slate-900">
                                            32
                                        </span>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-12 pt-8 border-t border-border">
                            <button class="px-6 py-3 rounded-xl text-text-muted hover:text-text-main hover:bg-surface transition-all font-medium flex items-center gap-2">
                                <span class="material-symbols-outlined">
                                    west
                                </span>
                                Previous
                            </button>
                            <div class="flex items-center gap-4">
                                <button class="text-sm font-semibold text-amber-600 hover:text-amber-700 flex items-center gap-2 px-4 py-2 rounded-lg hover:bg-amber-50 transition-colors">
                                    <span class="material-symbols-outlined fill-current">
                                        flag
                                    </span>
                                    Mark for later
                                </button>
                                <button class="px-8 py-3 rounded-xl bg-primary hover:bg-primary-dark text-white font-bold shadow-lg shadow-primary/25 transition-all transform hover:scale-[1.02] flex items-center gap-2">
                                    Next Question
                                    <span class="material-symbols-outlined">
                                        east
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </main>
                <aside class="w-80 hidden lg:flex flex-col border-l border-border bg-white/50 backdrop-blur-md relative shadow-[0_0_40px_-10px_rgba(0,0,0,0.05)]">
                    <div class="p-6 border-b border-border bg-white/50">
                        <h3 class="font-display font-bold text-text-main text-lg">
                            Question Map
                        </h3>
                        <p class="text-xs text-text-muted mt-1">
                            Navigate through the exam questions.
                        </p>
                    </div>
                    <div class="flex-1 overflow-y-auto p-6 custom-scrollbar bg-transparent">
                        <div class="grid grid-cols-5 gap-2.5">
                            <button class="aspect-square rounded-md bg-primary text-white text-xs font-bold hover:opacity-90 transition shadow-md shadow-primary/20">
                                1
                            </button>
                            <button class="aspect-square rounded-md bg-primary text-white text-xs font-bold hover:opacity-90 transition shadow-md shadow-primary/20">
                                2
                            </button>
                            <button class="aspect-square rounded-md bg-primary text-white text-xs font-bold hover:opacity-90 transition shadow-md shadow-primary/20">
                                3
                            </button>
                            <button class="aspect-square rounded-md bg-primary text-white text-xs font-bold hover:opacity-90 transition shadow-md shadow-primary/20">
                                4
                            </button>
                            <button class="aspect-square rounded-md bg-transparent border-2 border-primary text-primary text-xs font-bold ring-2 ring-primary/10 shadow-sm">
                                5
                            </button>
                            <button class="aspect-square rounded-md bg-amber-50 border border-amber-200 text-amber-600 text-xs font-bold hover:bg-amber-100 transition">
                                6
                            </button>
                            <button class="aspect-square rounded-md bg-slate-100 text-slate-400 text-xs font-medium hover:bg-slate-200 hover:text-slate-600 transition">
                                7
                            </button>
                            <button class="aspect-square rounded-md bg-slate-100 text-slate-400 text-xs font-medium hover:bg-slate-200 hover:text-slate-600 transition">
                                8
                            </button>
                            <button class="aspect-square rounded-md bg-slate-100 text-slate-400 text-xs font-medium hover:bg-slate-200 hover:text-slate-600 transition">
                                9
                            </button>
                            <button class="aspect-square rounded-md bg-slate-100 text-slate-400 text-xs font-medium hover:bg-slate-200 hover:text-slate-600 transition">
                                10
                            </button>
                            <button class="aspect-square rounded-md bg-slate-100 text-slate-400 text-xs font-medium hover:bg-slate-200 hover:text-slate-600 transition">
                                11
                            </button>
                            <button class="aspect-square rounded-md bg-slate-100 text-slate-400 text-xs font-medium hover:bg-slate-200 hover:text-slate-600 transition">
                                12
                            </button>
                            <button class="aspect-square rounded-md bg-slate-100 text-slate-400 text-xs font-medium hover:bg-slate-200 hover:text-slate-600 transition">
                                13
                            </button>
                            <button class="aspect-square rounded-md bg-slate-100 text-slate-400 text-xs font-medium hover:bg-slate-200 hover:text-slate-600 transition">
                                14
                            </button>
                            <button class="aspect-square rounded-md bg-slate-100 text-slate-400 text-xs font-medium hover:bg-slate-200 hover:text-slate-600 transition">
                                15
                            </button>
                            <button class="aspect-square rounded-md bg-slate-100 text-slate-400 text-xs font-medium hover:bg-slate-200 hover:text-slate-600 transition">
                                16
                            </button>
                            <button class="aspect-square rounded-md bg-slate-100 text-slate-400 text-xs font-medium hover:bg-slate-200 hover:text-slate-600 transition">
                                17
                            </button>
                            <button class="aspect-square rounded-md bg-slate-100 text-slate-400 text-xs font-medium hover:bg-slate-200 hover:text-slate-600 transition">
                                18
                            </button>
                            <button class="aspect-square rounded-md bg-slate-100 text-slate-400 text-xs font-medium hover:bg-slate-200 hover:text-slate-600 transition">
                                19
                            </button>
                            <button class="aspect-square rounded-md bg-slate-100 text-slate-400 text-xs font-medium hover:bg-slate-200 hover:text-slate-600 transition">
                                20
                            </button>
                        </div>
                        <div class="mt-8 grid grid-cols-2 gap-3 text-[10px] text-text-muted uppercase tracking-wider font-semibold">
                            <div class="flex items-center gap-2">
                                <div class="size-2 rounded-full bg-primary">
                                </div>
                                Answered
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="size-2 rounded-full border-2 border-primary">
                                </div>
                                Current
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="size-2 rounded-full bg-amber-500">
                                </div>
                                Flagged
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="size-2 rounded-full bg-slate-200">
                                </div>
                                Empty
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto p-6 relative overflow-hidden">
                        <div class="absolute bottom-0 right-0 opacity-5 pointer-events-none transform translate-y-4 translate-x-4">
                            <svg class="text-primary" fill="currentColor" height="180" viewBox="0 0 24 24" width="180">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z">
                                </path>
                            </svg>
                        </div>
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 border border-blue-100 rounded-2xl p-5 relative z-10 shadow-sm">
                            <div class="flex items-start gap-3">
                                <div class="bg-white text-primary p-2 rounded-lg shadow-sm border border-blue-100">
                                    <span class="material-symbols-outlined text-[20px]">
                                        self_improvement
                                    </span>
                                </div>
                                <div>
                                    <h4 class="text-text-main font-bold text-sm mb-1">
                                        Stay Focused
                                    </h4>
                                    <p class="text-text-muted text-xs leading-relaxed">
                                        You are doing great. Keep a steady pace and read carefully. The AI is monitoring your progress.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </body>
    </html>