<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>AI Tutor - Dashboard</title>
<!-- Google Fonts & Icons -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
                    },
                    fontFamily: {
                        "display": ["Lexend", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        body {
            font-family: 'Lexend', sans-serif;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-white antialiased overflow-hidden">
<div class="flex h-screen w-full overflow-hidden">
<!-- Side Navigation -->
<aside class="hidden w-64 flex-col border-r border-[#e5e7eb] bg-white dark:border-gray-800 dark:bg-[#111418] lg:flex">
<div class="flex h-full flex-col justify-between p-4">
<div class="flex flex-col gap-4">
<!-- Brand -->
<div class="flex items-center gap-3 px-2 py-2">
<div class="flex items-center justify-center rounded-xl bg-primary/10 p-2">
<span class="material-symbols-outlined text-primary" style="font-size: 28px;">school</span>
</div>
<div class="flex flex-col">
<h1 class="text-lg font-bold leading-tight tracking-tight text-[#111418] dark:text-white">AI Tutor</h1>
<p class="text-xs font-medium text-[#617289] dark:text-gray-400">Premium Plan</p>
</div>
</div>
<!-- Navigation Items -->
<nav class="flex flex-col gap-2 mt-4">
<a class="flex items-center gap-3 rounded-lg bg-primary/10 px-3 py-2 text-primary transition-colors" href="#">
<span class="material-symbols-outlined" style="font-size: 24px;">dashboard</span>
<span class="text-sm font-medium leading-normal">Dashboard</span>
</a>
<a class="group flex items-center gap-3 rounded-lg px-3 py-2 text-[#617289] transition-colors hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-800" href="#">
<span class="material-symbols-outlined group-hover:text-[#111418] dark:group-hover:text-white" style="font-size: 24px;">book_2</span>
<span class="text-sm font-medium leading-normal group-hover:text-[#111418] dark:group-hover:text-white">My Courses</span>
</a>
<a class="group flex items-center gap-3 rounded-lg px-3 py-2 text-[#617289] transition-colors hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-800" href="#">
<span class="material-symbols-outlined group-hover:text-[#111418] dark:group-hover:text-white" style="font-size: 24px;">calendar_month</span>
<span class="text-sm font-medium leading-normal group-hover:text-[#111418] dark:group-hover:text-white">Schedule</span>
</a>
<a class="group flex items-center gap-3 rounded-lg px-3 py-2 text-[#617289] transition-colors hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-800" href="#">
<span class="material-symbols-outlined group-hover:text-[#111418] dark:group-hover:text-white" style="font-size: 24px;">bar_chart</span>
<span class="text-sm font-medium leading-normal group-hover:text-[#111418] dark:group-hover:text-white">Analytics</span>
</a>
<a class="group flex items-center gap-3 rounded-lg px-3 py-2 text-[#617289] transition-colors hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-800" href="#">
<span class="material-symbols-outlined group-hover:text-[#111418] dark:group-hover:text-white" style="font-size: 24px;">forum</span>
<span class="text-sm font-medium leading-normal group-hover:text-[#111418] dark:group-hover:text-white">Community</span>
</a>
</nav>
</div>
<!-- Bottom Actions -->
<div class="flex flex-col gap-2">
<a class="group flex items-center gap-3 rounded-lg px-3 py-2 text-[#617289] transition-colors hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-800" href="#">
<span class="material-symbols-outlined group-hover:text-[#111418] dark:group-hover:text-white" style="font-size: 24px;">settings</span>
<span class="text-sm font-medium leading-normal group-hover:text-[#111418] dark:group-hover:text-white">Settings</span>
</a>
<div class="mt-4 flex items-center gap-3 rounded-lg border border-[#e5e7eb] bg-[#f0f2f4] p-3 dark:border-gray-700 dark:bg-gray-800">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" data-alt="Portrait of user Alex" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCx9BEoM1G0X_zF01DOpO_iLs-gr1t5cFTDzw2LW2ooYOvYjQDGyDRV_TScR_ps3vWDJYFcQdPK4hxqtjOehmWuGxF7tiPJmY129n-6ltfORqGpSd5PAQHSPBtiU7hRNazIR543fNoVopbw5MWSJj_Qrkf3Z1ZgtYeZDuQLYewlTwBxAdjSsmlkByQnpLBTnYFj8Zd5oU0O0Wg9RD5E4n-dVb1oUAMG3hVpv3bZOAT9MaEn_PVpMTeiSEBPdVgJTSno_jM3VcmJ6JU");'></div>
<div class="flex flex-col overflow-hidden">
<p class="truncate text-sm font-bold text-[#111418] dark:text-white">Alex Morgan</p>
<p class="truncate text-xs font-medium text-[#617289] dark:text-gray-400">alex@example.com</p>
</div>
</div>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex h-full flex-1 flex-col overflow-y-auto bg-background-light dark:bg-background-dark">
<!-- Top Header -->
<header class="sticky top-0 z-10 flex w-full items-center justify-between border-b border-[#e5e7eb] bg-white px-6 py-3 dark:border-gray-800 dark:bg-[#111418]">
<!-- Mobile Menu Trigger -->
<button class="mr-4 lg:hidden text-[#617289]">
<span class="material-symbols-outlined">menu</span>
</button>
<!-- Search Bar -->
<div class="flex max-w-[480px] flex-1">
<div class="flex w-full items-center rounded-xl bg-[#f0f2f4] px-4 dark:bg-gray-800">
<span class="material-symbols-outlined text-[#617289]" style="font-size: 20px;">search</span>
<input class="flex-1 border-none bg-transparent px-3 py-2.5 text-sm font-normal text-[#111418] placeholder-[#617289] focus:outline-none focus:ring-0 dark:text-white" placeholder="Search courses, lessons, or topics..."/>
</div>
</div>
<!-- Right Actions -->
<div class="flex items-center gap-4 ml-4">
<button class="relative flex items-center justify-center rounded-full p-2 text-[#617289] hover:bg-[#f0f2f4] dark:hover:bg-gray-800">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 h-2 w-2 rounded-full bg-red-500 ring-2 ring-white dark:ring-[#111418]"></span>
</button>
<button class="flex items-center justify-center rounded-full p-2 text-[#617289] hover:bg-[#f0f2f4] dark:hover:bg-gray-800">
<span class="material-symbols-outlined">help</span>
</button>
</div>
</header>
<!-- Dashboard Content -->
<div class="flex flex-col gap-6 p-6 lg:p-8 max-w-[1200px] mx-auto w-full">
<!-- Welcome Section -->
<div class="flex flex-col gap-2 md:flex-row md:items-end md:justify-between">
<div class="flex flex-col gap-1">
<h1 class="text-3xl font-black leading-tight tracking-tight text-[#111418] dark:text-white md:text-4xl">Welcome back, Alex! 👋</h1>
<p class="text-base font-normal text-[#617289] dark:text-gray-400">You are on a <span class="font-bold text-primary">5-day learning streak</span>. Keep it up!</p>
</div>
<button class="hidden items-center gap-2 rounded-lg bg-[#f0f2f4] px-4 py-2 text-sm font-bold text-[#111418] transition hover:bg-[#e2e4e7] dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 md:flex">
<span class="material-symbols-outlined text-orange-500">local_fire_department</span>
                        Streak: 5 Days
                    </button>
</div>
<!-- Stats Overview -->
<div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
<div class="flex flex-col gap-2 rounded-xl bg-white p-5 shadow-sm transition hover:shadow-md dark:bg-[#111418] dark:shadow-gray-900">
<div class="flex items-center justify-between">
<p class="text-sm font-medium text-[#617289] dark:text-gray-400">Weekly Goal</p>
<span class="material-symbols-outlined text-primary" style="font-size: 24px;">timelapse</span>
</div>
<div class="flex items-end gap-2">
<p class="text-2xl font-bold tracking-tight text-[#111418] dark:text-white">12/20 Hrs</p>
<p class="mb-1 text-xs font-bold text-[#07883b]">+2 Hrs</p>
</div>
<div class="h-1.5 w-full rounded-full bg-[#f0f2f4] dark:bg-gray-800">
<div class="h-1.5 rounded-full bg-primary" style="width: 60%;"></div>
</div>
</div>
<div class="flex flex-col gap-2 rounded-xl bg-white p-5 shadow-sm transition hover:shadow-md dark:bg-[#111418] dark:shadow-gray-900">
<div class="flex items-center justify-between">
<p class="text-sm font-medium text-[#617289] dark:text-gray-400">Courses in Progress</p>
<span class="material-symbols-outlined text-primary" style="font-size: 24px;">school</span>
</div>
<div class="flex items-end gap-2">
<p class="text-2xl font-bold tracking-tight text-[#111418] dark:text-white">4</p>
<p class="mb-1 text-xs font-bold text-[#07883b]">+1 New</p>
</div>
<div class="h-1.5 w-full rounded-full bg-[#f0f2f4] dark:bg-gray-800">
<div class="h-1.5 rounded-full bg-primary" style="width: 75%;"></div>
</div>
</div>
<div class="flex flex-col gap-2 rounded-xl bg-white p-5 shadow-sm transition hover:shadow-md dark:bg-[#111418] dark:shadow-gray-900">
<div class="flex items-center justify-between">
<p class="text-sm font-medium text-[#617289] dark:text-gray-400">Certificates Earned</p>
<span class="material-symbols-outlined text-primary" style="font-size: 24px;">emoji_events</span>
</div>
<div class="flex items-end gap-2">
<p class="text-2xl font-bold tracking-tight text-[#111418] dark:text-white">2</p>
<p class="mb-1 text-xs font-bold text-[#617289] dark:text-gray-500">Total</p>
</div>
<!-- Decorative dots for static visual -->
<div class="flex gap-1 pt-1">
<div class="h-1.5 w-1.5 rounded-full bg-primary"></div>
<div class="h-1.5 w-1.5 rounded-full bg-primary"></div>
<div class="h-1.5 w-1.5 rounded-full bg-[#f0f2f4] dark:bg-gray-800"></div>
</div>
</div>
</div>
<div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
<!-- Left Column (Main Content) -->
<div class="flex flex-col gap-6 lg:col-span-2">
<!-- Continue Learning Section -->
<div class="flex flex-col gap-4">
<h2 class="text-xl font-bold tracking-tight text-[#111418] dark:text-white">Continue Learning</h2>
<div class="group relative flex flex-col overflow-hidden rounded-xl bg-white shadow-sm transition hover:shadow-md dark:bg-[#111418] dark:shadow-gray-900 sm:flex-row">
<div class="relative h-48 w-full shrink-0 overflow-hidden sm:h-auto sm:w-64">
<div class="absolute inset-0 bg-cover bg-center transition duration-500 group-hover:scale-105" data-alt="Laptop screen showing code" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDYieCdKOOCdnv7w38IM-awaddwd9PInp41jlM-3fMgtWkF4kfdGaCebbhYVDw0_Qi3eX-zTDbXza6DsBSeTXg_cAGzO4pNcEj5skjs9vUzLlDN2-PNjJ_xwxHEwecfNXJhpvuvBOck4teDirlmwyvAca7Q2YUPau_BKlpAmInY1uZfZcjLTYtPIdzbERvW68izaM1udjul5ZCRJ1QuVe4wxJJz-kH8Qqo0X5g3K_hIAVtksjUIhLlxz39e4l08u1OFszNoyC4A_zo");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent sm:hidden"></div>
<div class="absolute bottom-3 left-3 flex items-center gap-2 sm:hidden">
<div class="flex size-8 items-center justify-center rounded-full bg-white/20 backdrop-blur-sm">
<span class="material-symbols-outlined text-white" style="font-size: 20px;">play_arrow</span>
</div>
<span class="text-sm font-bold text-white">Module 3</span>
</div>
</div>
<div class="flex flex-1 flex-col justify-between p-5">
<div class="flex flex-col gap-2">
<div class="flex items-center justify-between">
<span class="rounded-full bg-primary/10 px-2.5 py-0.5 text-xs font-bold text-primary">Web Development</span>
<span class="text-xs text-[#617289] dark:text-gray-400">2h 15m remaining</span>
</div>
<h3 class="text-lg font-bold text-[#111418] dark:text-white">Introduction to Python</h3>
<p class="line-clamp-2 text-sm text-[#617289] dark:text-gray-400">Master the basics of Python programming, from syntax to data structures. In this module, we cover Lists and Dictionaries.</p>
</div>
<div class="mt-4 flex flex-col gap-3">
<div class="flex items-center justify-between text-xs font-medium">
<span class="text-[#111418] dark:text-white">Progress</span>
<span class="text-[#111418] dark:text-white">65%</span>
</div>
<div class="h-2 w-full rounded-full bg-[#f0f2f4] dark:bg-gray-800">
<div class="h-2 rounded-full bg-primary" style="width: 65%;"></div>
</div>
<div class="flex gap-3 pt-2">
<button class="flex flex-1 items-center justify-center gap-2 rounded-lg bg-primary px-4 py-2 text-sm font-bold text-white transition hover:bg-blue-700">
                                                Resume Learning
                                            </button>
</div>
</div>
</div>
</div>
</div>
<!-- AI Recommendations -->
<div class="flex flex-col gap-4">
<div class="flex items-center justify-between">
<h2 class="flex items-center gap-2 text-xl font-bold tracking-tight text-[#111418] dark:text-white">
<span class="material-symbols-outlined text-purple-600">auto_awesome</span>
                                    AI Recommendations
                                </h2>
<a class="text-sm font-medium text-primary hover:underline" href="#">View All</a>
</div>
<div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
<!-- Rec Card 1 -->
<div class="flex flex-col overflow-hidden rounded-xl bg-white shadow-sm transition hover:shadow-md dark:bg-[#111418] dark:shadow-gray-900">
<div class="h-32 w-full bg-cover bg-center" data-alt="Data visualization graph on screen" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBFo6jr-XaYdRhOeXaEmcAfTtCz4XJ6NCHa6TVgvpdgvzfEN6oCStUwLhwgGCurbUrWFY3bXNJteQlzgQu_mVqYmZyBeuMpyPtf4GuSO50ba3mG40eX4yySD3ShEJyghNQtlG9vFn7hnV1hFjbSi0A24UFgkanwrU51lb4fA2I8yiMugElQOSHNPo20_AT4uuruwqV__K-spvjjekhzIHpZF36RdyFTBANY8YsymrOB1SRmFOGJcPrUYvxHAOukJflRtirpMkMUZos");'></div>
<div class="flex flex-1 flex-col p-4">
<div class="mb-2 flex items-start justify-between">
<span class="rounded bg-purple-100 px-2 py-0.5 text-[10px] font-bold uppercase tracking-wider text-purple-700 dark:bg-purple-900 dark:text-purple-200">Based on quiz</span>
<button class="text-[#617289] hover:text-primary dark:text-gray-400">
<span class="material-symbols-outlined" style="font-size: 20px;">bookmark</span>
</button>
</div>
<h3 class="mb-1 text-base font-bold text-[#111418] dark:text-white">Data Science 101</h3>
<p class="mb-4 text-xs text-[#617289] dark:text-gray-400">Learn how to analyze data effectively with Pandas.</p>
<div class="mt-auto flex items-center gap-2 text-xs font-medium text-[#617289] dark:text-gray-400">
<span class="material-symbols-outlined" style="font-size: 16px;">schedule</span>
<span>4 Weeks</span>
<span class="h-1 w-1 rounded-full bg-gray-300"></span>
<span>Beginner</span>
</div>
</div>
</div>
<!-- Rec Card 2 -->
<div class="flex flex-col overflow-hidden rounded-xl bg-white shadow-sm transition hover:shadow-md dark:bg-[#111418] dark:shadow-gray-900">
<div class="h-32 w-full bg-cover bg-center" data-alt="Abstract colorful neural network visualization" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA3_tkKgM7W8adLWnyE5knUk_xDrSbQw1kJF5vY_pCzUcmAFodDz0_VryTq1A_6odPWRJZUZURp2Bq2IRuTmkteXCBXZRAPUfhheGBkbLOKM4eFBfM3-lvKM6-viYK3IpjfW_t0hjZCoalq2PQKtA1jpX9Ejw8q-UxUIyWErbITDjTGhosOJA0rxVX074CoEQCTqF2vcKYkL1JjtVY67blQoK6nOZnYRMkphk44uEiitj-hX2mAoxpPs4hINCyOIUBY0e59wJAvXHE");'></div>
<div class="flex flex-1 flex-col p-4">
<div class="mb-2 flex items-start justify-between">
<span class="rounded bg-purple-100 px-2 py-0.5 text-[10px] font-bold uppercase tracking-wider text-purple-700 dark:bg-purple-900 dark:text-purple-200">Trending</span>
<button class="text-[#617289] hover:text-primary dark:text-gray-400">
<span class="material-symbols-outlined" style="font-size: 20px;">bookmark</span>
</button>
</div>
<h3 class="mb-1 text-base font-bold text-[#111418] dark:text-white">Machine Learning Basics</h3>
<p class="mb-4 text-xs text-[#617289] dark:text-gray-400">Understand the core concepts of ML algorithms.</p>
<div class="mt-auto flex items-center gap-2 text-xs font-medium text-[#617289] dark:text-gray-400">
<span class="material-symbols-outlined" style="font-size: 16px;">schedule</span>
<span>6 Weeks</span>
<span class="h-1 w-1 rounded-full bg-gray-300"></span>
<span>Intermediate</span>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Right Column (Widgets) -->
<div class="flex flex-col gap-6">
<!-- Upcoming Schedule -->
<div class="flex flex-col rounded-xl bg-white p-5 shadow-sm dark:bg-[#111418] dark:shadow-gray-900">
<div class="mb-4 flex items-center justify-between">
<h3 class="text-base font-bold text-[#111418] dark:text-white">Upcoming Deadlines</h3>
<button class="text-primary hover:text-blue-700">
<span class="material-symbols-outlined" style="font-size: 20px;">calendar_month</span>
</button>
</div>
<div class="flex flex-col gap-4">
<!-- Item 1 -->
<div class="flex items-start gap-3">
<div class="flex flex-col items-center justify-center rounded-lg bg-red-50 px-2 py-1 text-red-600 dark:bg-red-900/20 dark:text-red-400">
<span class="text-xs font-bold uppercase">Oct</span>
<span class="text-lg font-bold">24</span>
</div>
<div class="flex flex-col">
<p class="text-sm font-medium text-[#111418] dark:text-white">Python Quiz: Lists</p>
<p class="text-xs text-[#617289] dark:text-gray-400">Due at 11:59 PM</p>
</div>
</div>
<div class="h-px w-full bg-[#f0f2f4] dark:bg-gray-800"></div>
<!-- Item 2 -->
<div class="flex items-start gap-3">
<div class="flex flex-col items-center justify-center rounded-lg bg-[#f0f2f4] px-2 py-1 text-[#617289] dark:bg-gray-800 dark:text-gray-400">
<span class="text-xs font-bold uppercase">Oct</span>
<span class="text-lg font-bold">28</span>
</div>
<div class="flex flex-col">
<p class="text-sm font-medium text-[#111418] dark:text-white">UX Case Study</p>
<p class="text-xs text-[#617289] dark:text-gray-400">Due at 5:00 PM</p>
</div>
</div>
<div class="h-px w-full bg-[#f0f2f4] dark:bg-gray-800"></div>
<!-- Item 3 -->
<div class="flex items-start gap-3">
<div class="flex flex-col items-center justify-center rounded-lg bg-[#f0f2f4] px-2 py-1 text-[#617289] dark:bg-gray-800 dark:text-gray-400">
<span class="text-xs font-bold uppercase">Nov</span>
<span class="text-lg font-bold">02</span>
</div>
<div class="flex flex-col">
<p class="text-sm font-medium text-[#111418] dark:text-white">Peer Review</p>
<p class="text-xs text-[#617289] dark:text-gray-400">Due at 12:00 PM</p>
</div>
</div>
</div>
</div>
<!-- Leaderboard Widget -->
<div class="flex flex-col rounded-xl bg-white p-5 shadow-sm dark:bg-[#111418] dark:shadow-gray-900">
<div class="mb-4 flex items-center justify-between">
<h3 class="text-base font-bold text-[#111418] dark:text-white">Top Learners</h3>
<span class="material-symbols-outlined text-[#617289]" style="font-size: 20px;">leaderboard</span>
</div>
<div class="flex flex-col gap-3">
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<span class="flex size-6 items-center justify-center text-xs font-bold text-[#eab308]">1</span>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-8" data-alt="User avatar" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAXUeZfDfLOcpVBR28E-ZyUARaoeXUncsIZQIUBk8tvX-2qKxVHSGKKAW1a1MFMri5by55ocvY57dpIdoOIynOWGwi4Wy3JMwEa3WpzuekkCYTmIhHe_iuW7AbbX4W8PzznbI1wyXr93WpK1v-wqgGkV8N4sjOTtdMirZnsZKbQASIpYzlAV495Yo6fHe0ZDLBdWbfXGYq-B-vvjg2GrhYJ51haR7BtqrVQCUT6g9iLskSCT7Pg_hOTL69LjWPLmYzeJnzUR4bIW78");'></div>
<span class="text-sm font-medium text-[#111418] dark:text-white">Sarah K.</span>
</div>
<span class="text-xs font-bold text-primary">2,400 XP</span>
</div>
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<span class="flex size-6 items-center justify-center text-xs font-bold text-[#9ca3af]">2</span>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-8" data-alt="User avatar" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDD4aiiRI5qQbs2pXguNV0Wd8pFV7VyYea4wjzWAq0HStvu-D6RGyltcrnPtHeS5_kgfRRp5lbY1-eaFAM1W9tr-nodYV7SsDqNN5jeGfsX62foYWsa60bRsR3xs48MsB8LU8BygfPWwfor73EyYf1knmelpAdTy6IEbioV_WzcLj_m88sDAYLqbgg66rqqgxyIJLLwqZcXBQ24HAg_ry5uVsu9MrH-LEfR91thmMFPOBzkAfbpq4pmOzLuabNzZ88StoqKbWzsimA");'></div>
<span class="text-sm font-medium text-[#111418] dark:text-white">Mike R.</span>
</div>
<span class="text-xs font-bold text-primary">2,150 XP</span>
</div>
<div class="flex items-center justify-between rounded-lg bg-primary/5 p-2 -mx-2">
<div class="flex items-center gap-3">
<span class="flex size-6 items-center justify-center text-xs font-bold text-[#111418] dark:text-white">8</span>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-8" data-alt="Your avatar" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCB9v0c6CjSmD9v1UJThPCSAkQEpoAseExWn7iol-kHx2bWl6Yq5i6wA7fexovRmAClOUylnDXLxEY3iwWziPSYlXKIm24K7PI7C0CnNkvZXO_Uum6sPYgz7scLNou_rgVVjVuYxtRz8V5GaDWo33vHjgUWRTwQK1JepxtXMorkssvaZHX-zBWxzhEgmdcdBmqiScPnBoDb--FPC8fTEzYuXYwZKfFAHOw9VkLAUpNGLSy4flckz6imuJce__UsfPkuuYMHfDrhLD0");'></div>
<span class="text-sm font-medium text-[#111418] dark:text-white">You</span>
</div>
<span class="text-xs font-bold text-primary">1,890 XP</span>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>