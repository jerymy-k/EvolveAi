<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Reset Password - EvolveAi</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
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
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark min-h-screen flex flex-col font-display">
    <!-- Top Navigation Bar -->
    <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-[#e7ebf3] dark:border-gray-800 px-6 md:px-10 py-3 bg-background-light dark:bg-background-dark">
        <div class="flex items-center gap-4 text-gray-900 dark:text-white">
            <div class="size-6 text-primary">
                <svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" d="M39.475 21.6262C40.358 21.4363 40.6863 21.5589 40.7581 21.5934C40.7876 21.655 40.8547 21.857 40.8082 22.3336C40.7408 23.0255 40.4502 24.0046 39.8572 25.2301C38.6799 27.6631 36.5085 30.6631 33.5858 33.5858C30.6631 36.5085 27.6632 38.6799 25.2301 39.8572C24.0046 40.4502 23.0255 40.7407 22.3336 40.8082C21.8571 40.8547 21.6551 40.7875 21.5934 40.7581C21.5589 40.6863 21.4363 40.358 21.6262 39.475C21.8562 38.4054 22.4689 36.9657 23.5038 35.2817C24.7575 33.2417 26.5497 30.9744 28.7621 28.762C30.9744 26.5497 33.2417 24.7574 35.2817 23.5037C36.9657 22.4689 38.4054 21.8562 39.475 21.6262ZM4.41189 29.2403L18.7597 43.5881C19.8813 44.7097 21.4027 44.9179 22.7217 44.7893C24.0585 44.659 25.5148 44.1631 26.9723 43.4579C29.9052 42.0387 33.2618 39.5667 36.4142 36.4142C39.5667 33.2618 42.0387 29.9052 43.4579 26.9723C44.1631 25.5148 44.659 24.0585 44.7893 22.7217C44.9179 21.4027 44.7097 19.8813 43.5881 18.7597L29.2403 4.41187C27.8527 3.02428 25.8765 3.02573 24.2861 3.36776C22.6081 3.72863 20.7334 4.58419 18.8396 5.74801C16.4978 7.18716 13.9881 9.18353 11.5858 11.5858C9.18354 13.988 7.18717 16.4978 5.74802 18.8396C4.58421 20.7334 3.72865 22.6081 3.36778 24.2861C3.02574 25.8765 3.02429 27.8527 4.41189 29.2403Z" fill="currentColor" fill-rule="evenodd"></path>
                </svg>
            </div>
            <h2 class="text-lg font-bold leading-tight tracking-tight">EvolveAi</h2>
        </div>
        <div class="flex items-center gap-4">
            <button class="text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary">Help Center</button>
        </div>
    </header>
    <!-- Main Content Area -->
    <main class="flex-grow flex items-center justify-center px-4 py-12">
        <div class="w-full max-w-[480px] bg-white dark:bg-gray-900 rounded-xl shadow-sm border border-gray-200 dark:border-gray-800 p-8 md:p-10 flex flex-col items-center">
            <!-- Security Icon Section -->
            <div class="mb-6 flex items-center justify-center size-16 rounded-full bg-primary/10 text-primary">
                <span class="material-symbols-outlined text-4xl" data-icon="lock_reset">lock_reset</span>
            </div>
            <!-- Headline Section -->
            <h1 class="text-[#0d121b] dark:text-white tracking-tight text-2xl md:text-[28px] font-bold leading-tight text-center mb-3">
                Reset your password
            </h1>
            <!-- Body Text Section -->
            <p class="text-gray-600 dark:text-gray-400 text-base font-normal leading-relaxed text-center mb-8">
                Enter your email and we will send you a link to reset your password.
            </p>
            <!-- Form Section -->
            <form class="w-full space-y-6">
                <!-- TextField Component -->
                <div class="flex flex-col w-full">
                    <label class="flex flex-col w-full">
                        <p class="text-[#0d121b] dark:text-gray-200 text-sm font-medium leading-normal pb-2">Email Address</p>
                        <input class="form-input flex w-full min-w-0 resize-none overflow-hidden rounded-lg text-[#0d121b] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#cfd7e7] dark:border-gray-700 bg-white dark:bg-gray-800 focus:border-primary h-14 placeholder:text-[#4c669a] dark:placeholder:text-gray-500 p-[15px] text-base font-normal leading-normal" placeholder="name@company.com" required="" type="email" />
                    </label>
                </div>
                <!-- Primary Action Button -->
                <button class="w-full flex h-14 cursor-pointer items-center justify-center overflow-hidden rounded-lg bg-primary text-white text-base font-bold leading-normal tracking-wide hover:bg-primary/90 transition-colors" type="submit">
                    <span class="truncate">Send Reset Link</span>
                </button>
            </form>
            <!-- Navigation Link ->
            <div class="mt-8">
                <a class="flex items-center gap-2 text-primary font-semibold text-sm hover:underline" href="#">
                    <span class="material-symbols-outlined text-lg" data-icon="arrow_back">arrow_back</span>
                    Back to Login
                </a>
            </div>
        </div>
    </main>
    <!-- Footer Decoration -->
    <footer class="py-6 text-center">
        <p class="text-xs text-gray-400 dark:text-gray-600 uppercase tracking-widest">Secure Authentication Powered by AI Income Hub</p>
    </footer>
    <!-- Abstract Background Pattern Component (Invisible but provides atmosphere) -->
    <div class="fixed inset-0 -z-10 overflow-hidden pointer-events-none opacity-40 dark:opacity-20">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-primary/10 blur-[120px]"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[30%] h-[30%] rounded-full bg-primary/20 blur-[100px]"></div>
    </div>
</body>

</html>