<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Questionnaire</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#135bec",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                    },
                    fontFamily: {
                        "display": ["Inter"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .selected-card {
            border-color: #135bec;
            background-color: rgba(19, 91, 236, 0.05);
            border-width: 2px;
        }

        .unselected-card {
            position: relative;
            display: flex;

            border-radius: 0.75rem;
            border: 2px solid #e5e7eb;

            background-color: #ffffff;

            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 200ms;
            cursor: pointer;
        }

        .unselected-card:hover {
            border-color: rgba(var(--primary-color-rgb), 0.5);
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark min-h-screen flex flex-col font-display transition-colors duration-300">
    <!-- Top Navigation Bar -->
    <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-gray-200 dark:border-gray-800 px-6 py-4 bg-white dark:bg-background-dark">
        <div class="flex items-center gap-3 text-primary">
            <div class="size-8 bg-primary rounded-lg flex items-center justify-center text-white">
                <span class="material-symbols-outlined">psychology</span>
            </div>
            <h2 class="text-gray-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">AI Income Gen</h2>
        </div>
        <div class="flex items-center gap-4">
            <button class="text-gray-500 dark:text-gray-400 text-sm font-medium hover:text-primary transition-colors">
                Save &amp; Exit
            </button>
            <button class="flex min-w-[84px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold hover:bg-primary/90 transition-colors">
                Help
            </button>
        </div>
    </header>
    <!-- Main Content Area -->
    <main class="flex-1 flex flex-col items-center justify-center px-4 py-12">
        <div class="w-full max-w-[800px] flex flex-col gap-8">
            <!-- Progress Bar Section -->
            <div class="flex flex-col gap-3">
                <div class="flex gap-6 justify-between items-end">
                    <p class="text-gray-900 dark:text-white text-sm font-semibold uppercase tracking-wider" id="completion">Step <span id="currentStep"></span> of 10</p>
                    <p class="text-gray-900 dark:text-white text-sm font-medium"><span id="currentPercentage"></span> Complete</p>
                </div>
                <div class="h-2 w-full rounded-full bg-gray-200 dark:bg-gray-800 overflow-hidden">
                    <div class="h-full rounded-full bg-primary" id="progress_bar" style="width: 0%;"></div>
                </div>
                <p class="text-gray-500 dark:text-gray-400 text-sm font-normal">Setting up your personalized learning path</p>
            </div>
            <!-- Headline Section -->
            <div class="question flex flex-col gap-3 w-full max-w-md">
                <div
                    data-value="18-24"
                    class="card age-option relative flex items-center justify-between p-4 cursor-pointer rounded-xl unselected-card transition-all duration-200 hover:border-primary/50">
                    <div class="flex flex-col pointer-events-none">
                        <span class="text-sm font-semibold text-gray-900 dark:text-gray-100">18 - 24 years</span>
                    </div>
                </div>
                <div
                    data-value="25-34"
                    class="card age-option relative flex items-center justify-between p-4 cursor-pointer rounded-xl unselected-card transition-all duration-200 hover:border-primary/50">
                    <div class="flex flex-col pointer-events-none">
                        <span class="text-sm font-semibold text-gray-900 dark:text-gray-100">25 - 34 years</span>
                    </div>
                </div>
                <div
                    data-value="35-40"
                    class="card age-option relative flex items-center justify-between p-4 cursor-pointer rounded-xl unselected-card transition-all duration-200 hover:border-primary/50">
                    <div class="flex flex-col pointer-events-none">
                        <span class="text-sm font-semibold text-gray-900 dark:text-gray-100">25 - 34 years</span>
                    </div>
                </div>
            </div>
            <div class="question hidden" id="main-goal-step">
                <div class="text-center py-4">
                    <h1 class="text-gray-900 dark:text-white tracking-tight text-4xl font-extrabold leading-tight mb-3">
                        What is your main goal?
                    </h1>
                    <p class="text-gray-500 dark:text-gray-400 text-lg font-normal max-w-xl mx-auto">
                        Select the primary outcome you want to achieve so we can prioritize the right tools for you.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <div data-value="side_hustle"
                        class="card relative flex flex-col gap-4 p-6 rounded-xl unselected-card hover:border-primary/50 cursor-pointer transition-all duration-200">
                        <div class="icon-box size-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center transition-colors">
                            <span class="material-symbols-outlined text-3xl">payments</span>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white text-lg font-bold">Earn Extra Income</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">I want to start a side hustle using AI to generate $500 - $2,000+ per month.</p>
                        </div>
                        <div class="check-icon absolute top-4 right-4 text-primary hidden">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                    <div data-value="work_efficiency"
                        class="card relative flex flex-col gap-4 p-6 rounded-xl unselected-card hover:border-primary/50 cursor-pointer transition-all duration-200">
                        <div class="icon-box size-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center transition-colors">
                            <span class="material-symbols-outlined text-3xl">rocket_launch</span>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white text-lg font-bold">Automate My Work</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">I want to use AI to finish my current work faster and reclaim my free time.</p>
                        </div>
                        <div class="check-icon absolute top-4 right-4 text-primary hidden">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                    <div data-value="content_creation"
                        class="card relative flex flex-col gap-4 p-6 rounded-xl unselected-card hover:border-primary/50 cursor-pointer transition-all duration-200">
                        <div class="icon-box size-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center transition-colors">
                            <span class="material-symbols-outlined text-3xl">movie_edit</span>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white text-lg font-bold">Build a Brand</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">I want to use AI to create content for YouTube, TikTok, or Faceless channels.</p>
                        </div>
                        <div class="check-icon absolute top-4 right-4 text-primary hidden">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                    <div data-value="full_time_business"
                        class="card relative flex flex-col gap-4 p-6 rounded-xl unselected-card hover:border-primary/50 cursor-pointer transition-all duration-200">
                        <div class="icon-box size-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center transition-colors">
                            <span class="material-symbols-outlined text-3xl">storefront</span>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white text-lg font-bold">Launch a Business</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">I want to build a scalable, AI-driven business that replaces my 9-to-5 job.</p>
                        </div>
                        <div class="check-icon absolute top-4 right-4 text-primary hidden">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="question hidden" id="interest-areas-step">
                <div class="text-center py-4">
                    <h1 class="text-gray-900 dark:text-white tracking-tight text-4xl font-extrabold leading-tight mb-3">
                        What areas would you love to explore?
                    </h1>
                    <p class="text-gray-500 dark:text-gray-400 text-lg font-normal max-w-xl mx-auto">
                        Select all that apply. This helps us find the exact high-paying gigs for you.
                    </p>
                </div>

                <div class="flex flex-wrap justify-center gap-3 mt-8 max-w-4xl mx-auto">

                    <div data-value="design" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">palette</span>
                        <span class="font-semibold">Design & Creativity</span>
                    </div>

                    <div data-value="writing" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">edit_note</span>
                        <span class="font-semibold">Writing & Blogging</span>
                    </div>

                    <div data-value="web" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">language</span>
                        <span class="font-semibold">Web Projects</span>
                    </div>

                    <div data-value="ai_automation" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">smart_toy</span>
                        <span class="font-semibold">AI & Automation</span>
                    </div>

                    <div data-value="marketing" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">ads_click</span>
                        <span class="font-semibold">Marketing & Ads</span>
                    </div>

                    <div data-value="social" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">share</span>
                        <span class="font-semibold">Social Media Tasks</span>
                    </div>

                    <div data-value="video" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">videocam</span>
                        <span class="font-semibold">Video Projects</span>
                    </div>

                    <div data-value="photography" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">photo_camera</span>
                        <span class="font-semibold">Photography</span>
                    </div>

                    <div data-value="ecommerce" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">shopping_cart</span>
                        <span class="font-semibold">E-commerce</span>
                    </div>

                    <div data-value="consulting_strategy" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">lightbulb</span>
                        <span class="font-semibold">Consulting & Strategy</span>
                    </div>

                </div>
                <div class="mt-8 max-w-lg mx-auto">
                    <div class="relative flex items-center">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-gray-400">add</span>
                        </div>
                        <input
                            type="text"
                            id="custom-interest"
                            placeholder="Can't find yours? Type it here..."
                            class="block w-full pl-11 pr-32 py-3 bg-white dark:bg-gray-800 border-2 border-dashed border-gray-300 dark:border-gray-600 rounded-full text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-primary focus:border-solid transition-all outline-none">
                        <button
                            type="button"
                            class="add-pill-btn absolute right-2 px-4 py-1.5 bg-primary text-white text-sm font-bold rounded-full hover:bg-primary/90 transition-colors">
                            Add Area
                        </button>
                    </div>
                    <p class="text-center text-gray-400 text-xs mt-3 italic">
                        Press enter or click 'Add Area' to add it to the selection.
                    </p>
                </div>

            </div>
            <div class="question hidden" id="device-selection-step">
                <div class="text-center py-4">
                    <h1 class="text-gray-900 dark:text-white tracking-tight text-4xl font-extrabold leading-tight mb-3">
                        Which device are you using?
                    </h1>
                    <p class="text-gray-500 dark:text-gray-400 text-lg font-normal max-w-xl mx-auto">
                        This helps us suggest tools and workflows that work best for your current setup.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div data-value="phone"
                        class="card relative flex flex-col gap-4 p-6 rounded-xl unselected-card hover:border-primary/50 cursor-pointer transition-all duration-200">
                        <div class="icon-box size-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center transition-colors">
                            <span class="material-symbols-outlined text-3xl">smartphone</span>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white text-lg font-bold">Smartphone / Tablet</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">I prefer working on the go using mobile apps and interfaces.</p>
                        </div>
                        <div class="check-icon absolute top-4 right-4 text-primary hidden">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                    <div data-value="pc"
                        class="card relative flex flex-col gap-4 p-6 rounded-xl unselected-card hover:border-primary/50 cursor-pointer transition-all duration-200">
                        <div class="icon-box size-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center transition-colors">
                            <span class="material-symbols-outlined text-3xl">desktop_windows</span>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white text-lg font-bold">Computer / Laptop</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">I use a desktop environment for more complex tasks and multitasking.</p>
                        </div>
                        <div class="check-icon absolute top-4 right-4 text-primary hidden">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="question hidden" id="employment-step">
                <div class="text-center py-4">
                    <h1 class="text-gray-900 dark:text-white tracking-tight text-4xl font-extrabold leading-tight mb-3">
                        What is your employment status?
                    </h1>
                    <p class="text-gray-500 dark:text-gray-400 text-lg font-normal max-w-xl mx-auto">
                        This helps us understand your available resources and current professional environment.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div data-value="employed"
                        class="card relative flex flex-col gap-4 p-6 rounded-xl unselected-card hover:border-primary/50 cursor-pointer transition-all duration-200">
                        <div class="icon-box size-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center transition-colors">
                            <span class="material-symbols-outlined text-3xl">work</span>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white text-lg font-bold">Full-time Employed</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">I currently have a 9-to-5 or stable job but looking for new opportunities.</p>
                        </div>
                        <div class="check-icon absolute top-4 right-4 text-primary hidden">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                    <div data-value="freelance"
                        class="card relative flex flex-col gap-4 p-6 rounded-xl unselected-card hover:border-primary/50 cursor-pointer transition-all duration-200">
                        <div class="icon-box size-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center transition-colors">
                            <span class="material-symbols-outlined text-3xl">badge</span>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white text-lg font-bold">Self-Employed</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">I am a freelancer, business owner, or contractor working for myself.</p>
                        </div>
                        <div class="check-icon absolute top-4 right-4 text-primary hidden">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                    <div data-value="student"
                        class="card relative flex flex-col gap-4 p-6 rounded-xl unselected-card hover:border-primary/50 cursor-pointer transition-all duration-200">
                        <div class="icon-box size-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center transition-colors">
                            <span class="material-symbols-outlined text-3xl">school</span>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white text-lg font-bold">Student</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">I am currently studying and looking to build skills or income on the side.</p>
                        </div>
                        <div class="check-icon absolute top-4 right-4 text-primary hidden">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                    <div data-value="unemployed"
                        class="card relative flex flex-col gap-4 p-6 rounded-xl unselected-card hover:border-primary/50 cursor-pointer transition-all duration-200">
                        <div class="icon-box size-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center transition-colors">
                            <span class="material-symbols-outlined text-3xl">person_search</span>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white text-lg font-bold">Unemployed</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">I am currently between jobs and can dedicated more time to this project.</p>
                        </div>
                        <div class="check-icon absolute top-4 right-4 text-primary hidden">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="question hidden" id="current-career-step">
                <div class="text-center py-4">
                    <h1 class="text-gray-900 dark:text-white tracking-tight text-4xl font-extrabold leading-tight mb-3">
                        What is your current role?
                    </h1>
                    <p class="text-gray-500 dark:text-gray-400 text-lg font-normal max-w-xl mx-auto">
                        Select your current or most recent job. This helps us match opportunities to your professional experience.
                    </p>
                </div>

                <div class="flex flex-wrap justify-center gap-3 mt-8 max-w-4xl mx-auto">
                    <div data-value="software-engineer" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">code</span>
                        <span class="font-semibold">Software Engineer</span>
                    </div>

                    <div data-value="data-analyst" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">monitoring</span>
                        <span class="font-semibold">Data Analyst</span>
                    </div>

                    <div data-value="digital-marketer" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">campaign</span>
                        <span class="font-semibold">Digital Marketer</span>
                    </div>

                    <div data-value="sales-representative" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">sell</span>
                        <span class="font-semibold">Sales Representative</span>
                    </div>

                    <div data-value="customer-support" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">support_agent</span>
                        <span class="font-semibold">Customer Support</span>
                    </div>

                    <div data-value="content-creator" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">video_library</span>
                        <span class="font-semibold">Content Creator</span>
                    </div>

                    <div data-value="project-manager" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">account_tree</span>
                        <span class="font-semibold">Project Manager</span>
                    </div>

                    <div data-value="graphic-designer" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">brush</span>
                        <span class="font-semibold">Graphic Designer</span>
                    </div>

                    <div data-value="administrative-assistant" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">badge</span>
                        <span class="font-semibold">Admin Assistant</span>
                    </div>

                    <div data-value="educator-teacher" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">history_edu</span>
                        <span class="font-semibold">Educator / Teacher</span>
                    </div>
                    <div data-value="unemployed" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">history_edu</span>
                        <span class="font-semibold">Unemployed</span>
                    </div>
                </div>

                <div class="mt-8 max-w-lg mx-auto">
                    <div class="relative flex items-center">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-gray-400">work_history</span>
                        </div>
                        <input
                            type="text"
                            id="custom-career"
                            placeholder="Other job title..."
                            class="block w-full pl-11 pr-32 py-3 bg-white dark:bg-gray-800 border-2 border-dashed border-gray-300 dark:border-gray-600 rounded-full text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-primary focus:border-solid transition-all outline-none">
                        <button
                            type="button"
                            class="add-pill-btn absolute right-2 px-4 py-1.5 bg-primary text-white text-sm font-bold rounded-full hover:bg-primary/90 transition-colors">
                            Add Job
                        </button>
                    </div>
                </div>
            </div>
            <div class="question hidden" id="previous-career-step">
                <div class="text-center py-4">
                    <h1 class="text-gray-900 dark:text-white tracking-tight text-4xl font-extrabold leading-tight mb-3">
                        What was your previous role?
                    </h1>
                    <p class="text-gray-500 dark:text-gray-400 text-lg font-normal max-w-xl mx-auto">
                        Knowing your background helps us identify transferable skills that could double your AI earning potential.
                    </p>
                </div>

                <div class="flex flex-wrap justify-center gap-3 mt-8 max-w-4xl mx-auto">
                    <div data-value="hospitality-tourism" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">luggage</span>
                        <span class="font-semibold">Hospitality & Tourism</span>
                    </div>

                    <div data-value="retail-sales" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">shopping_bag</span>
                        <span class="font-semibold">Retail & Sales</span>
                    </div>

                    <div data-value="healthcare-medical" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">medical_services</span>
                        <span class="font-semibold">Healthcare</span>
                    </div>

                    <div data-value="manual-labor-trades" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">construction</span>
                        <span class="font-semibold">Trades & Labor</span>
                    </div>

                    <div data-value="finance-accounting" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">account_balance</span>
                        <span class="font-semibold">Finance / Accounting</span>
                    </div>

                    <div data-value="legal-services" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">gavel</span>
                        <span class="font-semibold">Legal Services</span>
                    </div>

                    <div data-value="marketing-comms" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">hub</span>
                        <span class="font-semibold">Marketing / PR</span>
                    </div>

                    <div data-value="manufacturing-logistics" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">precision_manufacturing</span>
                        <span class="font-semibold">Manufacturing</span>
                    </div>

                    <div data-value="government-ngo" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">public</span>
                        <span class="font-semibold">Gov / NGO</span>
                    </div>

                    <div data-value="no-prior-experience" class="card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50">
                        <span class="material-symbols-outlined text-xl">history</span>
                        <span class="font-semibold">None (First Job)</span>
                    </div>
                </div>

                <div class="mt-8 max-w-lg mx-auto">
                    <div class="relative flex items-center">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-gray-400">rebase_edit</span>
                        </div>
                        <input
                            type="text"
                            id="custom-prev-career"
                            placeholder="Other past role..."
                            class="block w-full pl-11 pr-32 py-3 bg-white dark:bg-gray-800 border-2 border-dashed border-gray-300 dark:border-gray-600 rounded-full text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-primary focus:border-solid transition-all outline-none">
                        <button
                            type="button"
                            class="add-pill-btn absolute right-2 px-4 py-1.5 bg-primary text-white text-sm font-bold rounded-full hover:bg-primary/90 transition-colors">
                            Add Past
                        </button>
                    </div>
                </div>
            </div>
            <div class="question hidden" id="schedule-step">
                <div class="text-center py-4">
                    <h1 class="text-gray-900 dark:text-white tracking-tight text-4xl font-extrabold leading-tight mb-3">
                        What is your work schedule?
                    </h1>
                    <p class="text-gray-500 dark:text-gray-400 text-lg font-normal max-w-xl mx-auto">
                        Tell us when you are usually busy so we can suggest the best times for your AI implementation.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <div data-value="fixed_day"
                        class="card relative flex flex-col gap-4 p-6 rounded-xl unselected-card hover:border-primary/50 cursor-pointer transition-all duration-200">
                        <div class="icon-box size-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center transition-colors">
                            <span class="material-symbols-outlined text-3xl">schedule</span>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white text-lg font-bold">Standard Day Shift</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">I work a typical 9-to-5 or morning-to-afternoon schedule.</p>
                        </div>
                        <div class="check-icon absolute top-4 right-4 text-primary hidden">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                    <div data-value="night_shift"
                        class="card relative flex flex-col gap-4 p-6 rounded-xl unselected-card hover:border-primary/50 cursor-pointer transition-all duration-200">
                        <div class="icon-box size-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center transition-colors">
                            <span class="material-symbols-outlined text-3xl">dark_mode</span>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white text-lg font-bold">Night / Late Shift</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">I work evenings or nights and have my mornings/afternoons free.</p>
                        </div>
                        <div class="check-icon absolute top-4 right-4 text-primary hidden">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                    <div data-value="flexible_irregular"
                        class="card relative flex flex-col gap-4 p-6 rounded-xl unselected-card hover:border-primary/50 cursor-pointer transition-all duration-200">
                        <div class="icon-box size-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center transition-colors">
                            <span class="material-symbols-outlined text-3xl">update</span>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white text-lg font-bold">Flexible / Irregular</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">My hours change weekly or I choose my own working hours.</p>
                        </div>
                        <div class="check-icon absolute top-4 right-4 text-primary hidden">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                    <div data-value="fully_open"
                        class="card relative flex flex-col gap-4 p-6 rounded-xl unselected-card hover:border-primary/50 cursor-pointer transition-all duration-200">
                        <div class="icon-box size-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center transition-colors">
                            <span class="material-symbols-outlined text-3xl">event_available</span>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white text-lg font-bold">Fully Available</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">I don't have a fixed work schedule and can start immediately.</p>
                        </div>
                        <div class="check-icon absolute top-4 right-4 text-primary hidden">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="question hidden" id="ai-familiarity-step">
                <div class="text-center py-4">
                    <h1 class="text-gray-900 dark:text-white tracking-tight text-4xl font-extrabold leading-tight mb-3">
                        What is your familiarity with AI?
                    </h1>
                    <p class="text-gray-500 dark:text-gray-400 text-lg font-normal max-w-xl mx-auto">
                        Choose the option that best describes your current experience level so we can tailor your income generation strategy.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <div data-value="beginner"
                        class="card relative flex flex-col gap-4 p-6 rounded-xl unselected-card hover:border-primary/50 cursor-pointer transition-all duration-200">
                        <div class="icon-box size-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center transition-colors">
                            <span class="material-symbols-outlined text-3xl">child_care</span>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white text-lg font-bold">Complete Beginner</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">I've heard of AI but never used tools like ChatGPT or Midjourney.</p>
                        </div>
                        <div class="check-icon absolute top-4 right-4 text-primary hidden">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                    <div data-value="casual"
                        class="card relative flex flex-col gap-4 p-6 rounded-xl unselected-card hover:border-primary/50 cursor-pointer transition-all duration-200">
                        <div class="icon-box size-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center transition-colors">
                            <span class="material-symbols-outlined text-3xl">person</span>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white text-lg font-bold">Casual User</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">I use tools like ChatGPT occasionally for quick questions or fun.</p>
                        </div>
                        <div class="check-icon absolute top-4 right-4 text-primary hidden">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                    <div data-value="intermediate"
                        class="card relative flex flex-col gap-4 p-6 rounded-xl unselected-card hover:border-primary/50 cursor-pointer transition-all duration-200">
                        <div class="icon-box size-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center transition-colors">
                            <span class="material-symbols-outlined text-3xl">bolt</span>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white text-lg font-bold">Intermediate</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">I use AI regularly to assist with my professional work and productivity.</p>
                        </div>
                        <div class="check-icon absolute top-4 right-4 text-primary hidden">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                    <div data-value="power_user"
                        class="card relative flex flex-col gap-4 p-6 rounded-xl unselected-card hover:border-primary/50 cursor-pointer transition-all duration-200">
                        <div class="icon-box size-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center transition-colors">
                            <span class="material-symbols-outlined text-3xl">memory</span>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white text-lg font-bold">Power User</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">I build with AI, use advanced prompting, or automate workflows.</p>
                        </div>
                        <div class="check-icon absolute top-4 right-4 text-primary hidden">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="question hidden" id="time-investment-step">
                <div class="text-center py-4">
                    <h1 class="text-gray-900 dark:text-white tracking-tight text-4xl font-extrabold leading-tight mb-3">
                        How much time can you invest?
                    </h1>
                    <p class="text-gray-500 dark:text-gray-400 text-lg font-normal max-w-xl mx-auto">
                        Be realistic. This determines whether we suggest quick "low-lift" AI tasks or deep business building.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <div data-value="minimal"
                        class="card relative flex flex-col gap-4 p-6 rounded-xl unselected-card hover:border-primary/50 cursor-pointer transition-all duration-200">
                        <div class="icon-box size-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center transition-colors">
                            <span class="material-symbols-outlined text-3xl">timer</span>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white text-lg font-bold">Under 1 Hour</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">I'm very busy. I need highly automated, "set-it-and-forget-it" AI systems.</p>
                        </div>
                        <div class="check-icon absolute top-4 right-4 text-primary hidden">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                    <div data-value="moderate"
                        class="card relative flex flex-col gap-4 p-6 rounded-xl unselected-card hover:border-primary/50 cursor-pointer transition-all duration-200">
                        <div class="icon-box size-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center transition-colors">
                            <span class="material-symbols-outlined text-3xl">bolt</span>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white text-lg font-bold">1 - 3 Hours</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">I can dedicate my evenings or early mornings to consistent growth.</p>
                        </div>
                        <div class="check-icon absolute top-4 right-4 text-primary hidden">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                    <div data-value="dedicated"
                        class="card relative flex flex-col gap-4 p-6 rounded-xl unselected-card hover:border-primary/50 cursor-pointer transition-all duration-200">
                        <div class="icon-box size-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center transition-colors">
                            <span class="material-symbols-outlined text-3xl">model_training</span>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white text-lg font-bold">3 - 5 Hours</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">I am serious about scaling and can treat this like a part-time job.</p>
                        </div>
                        <div class="check-icon absolute top-4 right-4 text-primary hidden">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                    <div data-value="full_time"
                        class="card relative flex flex-col gap-4 p-6 rounded-xl unselected-card hover:border-primary/50 cursor-pointer transition-all duration-200">
                        <div class="icon-box size-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center transition-colors">
                            <span class="material-symbols-outlined text-3xl">rocket</span>
                        </div>
                        <div>
                            <h3 class="text-gray-900 dark:text-white text-lg font-bold">5+ Hours (Full Immersion)</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">I am all in. I want to build a complex AI infrastructure as fast as possible.</p>
                        </div>
                        <div class="check-icon absolute top-4 right-4 text-primary hidden">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="question hidden">
                <h2>Congratulations, you finished the survey</h2>
                <h3 class="text-gray-400">click next to go to the dashboard page and take a look at the oppotunities our Ai have found for you based on your answers</h3>
                <br>
                <h4 class="text-gray-400 text-1">you can always change your answers in the profile page and even answer more questions to help us provide more precise oppotunities</h4>
            </div>
            <!-- Footer Navigation -->
            <div class="flex items-center justify-between pt-8 pb-12">
                <button class="flex items-center gap-2 px-6 py-3 rounded-lg font-bold text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors" id="prevBtn">
                    <span class="material-symbols-outlined">arrow_back</span>
                    Previous
                </button>
                <button class="flex items-center gap-2 px-10 py-3 rounded-lg bg-primary text-white font-bold hover:bg-primary/90 shadow-lg shadow-primary/20 transition-all transform hover:-translate-y-0.5" id="nextBtn">
                    Next Step
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
            </div>
        </div>
    </main>
    <!-- Simple Footer for Context -->
    <footer class="py-6 border-t border-gray-200 dark:border-gray-800 bg-white dark:bg-background-dark text-center">
        <p class="text-gray-400 text-xs">© 2024 AI Income Generator. Your data is secure and encrypted.</p>
    </footer>
</body>

</html>

<script>
    const questions = document.querySelectorAll('.question');
    const currentStep = document.querySelector("#currentStep");
    const currentPercentage = document.querySelector("#currentPercentage");
    const progressBar = document.querySelector("#progress_bar")
    const completion = document.querySelector("#completion")

    let step = 0;
    let percentage = 0;

    currentStep.textContent = step + 1;
    currentPercentage.textContent = percentage + "%";


    let answers = {
        age_range: null,
        main_goal: null,
        interest_areas: [],
        used_device: null,
        employment_status: null,
        current_career: null,
        previous_career: null,
        work_schedule: null,
        ai_familiarity: null,
        daily_time_investment: null
    };
    const stepKeys = [
        'age_range',
        'main_goal',
        'interest_areas',
        'used_device',
        'employment_status',
        'current_career',
        'previous_career',
        'work_schedule',
        'ai_familiarity',
        'daily_time_investment'
    ];

    let cards = document.querySelectorAll('.card');
    let currentAnswer = null;

    document.addEventListener('click', (e) => {
        // Look for the closest .card element from the click target
        const card = e.target.closest('.card');

        // If the click wasn't on a card, or if it's inside the custom input area, ignore it
        if (!card || e.target.closest('#custom-interest') || e.target.closest('#add-interest-btn')) return;

        const parentQuestion = card.closest('.question');
        const isMultiSelect = parentQuestion && parentQuestion.id === 'interest-areas-step';

        if (isMultiSelect) {
            // MULTI-SELECT LOGIC (Interest Areas)
            card.classList.toggle('selected-card');
            card.classList.toggle('unselected-card');

            const value = card.dataset.value;
            if (answers.interest_areas.includes(value)) {
                answers.interest_areas = answers.interest_areas.filter(s => s !== value);
            } else {
                answers.interest_areas.push(value);
            }
            // Sync the currentAnswer variable for the "Next" button check
            currentAnswer = answers.interest_areas.length > 0 ? answers.interest_areas : null;

        } else if (parentQuestion) {
            // SINGLE-SELECT LOGIC (Everything else)
            const questionCards = parentQuestion.querySelectorAll('.card');
            questionCards.forEach(c => {
                c.classList.remove('selected-card');
                c.classList.add('unselected-card');
            });
            card.classList.add('selected-card');
            card.classList.remove('unselected-card');
            currentAnswer = card.dataset.value;
        }
    });

    function showstep(step) {
        questions.forEach((q, i) => {
            q.classList.toggle('hidden', i !== step);
            currentStep.textContent = step + 1;
            currentPercentage.textContent = Math.round(percentage) + "%";
            progressBar.style.width = percentage + '%';
        });
        console.log(answers);
    }

    document.querySelector('#nextBtn').addEventListener('click', (e) => {
        if (step < questions.length - 1) {

            if (currentAnswer) {
                answers[stepKeys[step]] = currentAnswer;
                currentAnswer = null;

                if (stepKeys[step] == "daily_time_investment") {
                    completion.textContent = 'completed';
                    document.querySelector('#nextBtn').textContent = "Finish setup";
                }else{
                    document.querySelector('#nextBtn').textContent = "Next";
                }

                step++;
                percentage = ((step + 1) / questions.length) * 100;
                progressBar.style.width = percentage + '%';
                showstep(step);
            }
        } else {
            submitSurvey();
        }
    });

    document.querySelector('#prevBtn').addEventListener('click', (e) => {
        if (step > 0) {
            step--;
            percentage = ((step + 1) / questions.length) * 100;
            progressBar.style.width = percentage + '%';

            showstep(step);
        }
    });

    const addBtns = document.querySelectorAll('.add-pill-btn');

    function addCustomPill() {
        // Find the currently active question step
        const activeStep = questions[step];

        // Find the input and container specifically inside this active step
        const input = activeStep.querySelector('input[type="text"]');
        const container = activeStep.querySelector('.flex-wrap');

        if (!input || !container) return;

        const val = input.value.trim();
        if (val === "") return;

        const valSlug = val.toLowerCase().replace(/\s+/g, '-');

        // Create the new pill
        const newPill = document.createElement('div');
        // We keep it as 'unselected-card' because the .click() call below 
        // will trigger your global listener to select it and add it to the 'answers' object.
        newPill.className = 'card flex items-center gap-2 px-6 py-3 rounded-full unselected-card text-gray-700 dark:text-gray-300 cursor-pointer transition-all hover:border-primary/50';
        newPill.setAttribute('data-value', valSlug);
        newPill.innerHTML = `
        <span class="material-symbols-outlined text-xl">stars</span>
        <span class="font-semibold">${val}</span>
    `;

        // Append, clear, and auto-select
        container.appendChild(newPill);
        input.value = "";

        // This triggers your global document.addEventListener('click') logic
        newPill.click();
    }

    // 2. Attach the listener to all buttons found
    addBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            addCustomPill();
        });
    });

    // Inside your <script>
    async function submitSurvey() {
        try {
            const response = await fetch('/questionnaire/submit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(answers)
            });

            const result = await response.json();

            if (result.success) {
                window.location.href = '/opportunity';
            }
        } catch (error) {
            console.error("Error communicating with server:", error);
        }
    }
</script>