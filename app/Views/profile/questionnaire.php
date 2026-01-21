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
                    <p class="text-gray-900 dark:text-white text-sm font-semibold uppercase tracking-wider">Step <span id="currentStep">2</span> of 6</p>
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
            <div class="question hidden">
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

    let step = 0;
    let percentage = 0;

    currentStep.textContent = step + 1;
    currentPercentage.textContent = percentage + "%";


    let answers = {
        age_range: null,
        main_goal: null,
        employment_status: null,
        work_schedule: null,
        ai_familiarity: null,
        daily_time_investment: null
    };
    const stepKeys = [
        'age_range',
        'main_goal',
        'employment_status',
        'work_schedule',
        'ai_familiarity',
        'daily_time_investment'
    ];

    const cards = document.querySelectorAll('.card');
    let currentAnswer = null;

    cards.forEach(card => {
        card.addEventListener('click', (e) => {
            cards.forEach(c => c.classList.remove('selected-card'));
            cards.forEach(c => c.classList.add('unselected-card'));
            card.classList.add('selected-card');
            card.classList.remove('unselected-card');
            currentAnswer = e.currentTarget.dataset.value;
        });
    });

    function showstep(step) {
        questions.forEach((q, i) => {
            q.classList.toggle('hidden', i !== step);
            currentStep.textContent = step + 1;
            currentPercentage.textContent = percentage + "%";
            progressBar.style.width = percentage + '%';
            console.log(progressBar.style.width);

        });
    }

    document.querySelector('#nextBtn').addEventListener('click', (e) => {
        if (step < questions.length - 1) {
            if (currentAnswer) {
                step++;
                percentage+= 17;
                answers[stepKeys[step]] = currentAnswer;
                currentAnswer = null;
                progressBar.style.width = +17;
                showstep(step);
            }
        }
    });

    document.querySelector('#prevBtn').addEventListener('click', (e) => {
        if (step > 0) {
            step--;
            showstep(step);
        }
    });
</script>