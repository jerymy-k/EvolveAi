<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Create New Password - AI Income Hub</title>
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
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark min-h-screen flex flex-col font-display">
    <!-- Top Navigation Bar -->
    <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e7ebf3] dark:border-b-slate-800 bg-white dark:bg-background-dark px-6 md:px-10 py-3">
        <div class="flex items-center gap-4 text-primary">
            <div class="size-6">
                <svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" d="M39.475 21.6262C40.358 21.4363 40.6863 21.5589 40.7581 21.5934C40.7876 21.655 40.8547 21.857 40.8082 22.3336C40.7408 23.0255 40.4502 24.0046 39.8572 25.2301C38.6799 27.6631 36.5085 30.6631 33.5858 33.5858C30.6631 36.5085 27.6632 38.6799 25.2301 39.8572C24.0046 40.4502 23.0255 40.7407 22.3336 40.8082C21.8571 40.8547 21.6551 40.7875 21.5934 40.7581C21.5589 40.6863 21.4363 40.358 21.6262 39.475C21.8562 38.4054 22.4689 36.9657 23.5038 35.2817C24.7575 33.2417 26.5497 30.9744 28.7621 28.762C30.9744 26.5497 33.2417 24.7574 35.2817 23.5037C36.9657 22.4689 38.4054 21.8562 39.475 21.6262ZM4.41189 29.2403L18.7597 43.5881C19.8813 44.7097 21.4027 44.9179 22.7217 44.7893C24.0585 44.659 25.5148 44.1631 26.9723 43.4579C29.9052 42.0387 33.2618 39.5667 36.4142 36.4142C39.5667 33.2618 42.0387 29.9052 43.4579 26.9723C44.1631 25.5148 44.659 24.0585 44.7893 22.7217C44.9179 21.4027 44.7097 19.8813 43.5881 18.7597L29.2403 4.41187C27.8527 3.02428 25.8765 3.02573 24.2861 3.36776C22.6081 3.72863 20.7334 4.58419 18.8396 5.74801C16.4978 7.18716 13.9881 9.18353 11.5858 11.5858C9.18354 13.988 7.18717 16.4978 5.74802 18.8396C4.58421 20.7334 3.72865 22.6081 3.36778 24.2861C3.02574 25.8765 3.02429 27.8527 4.41189 29.2403Z" fill="currentColor" fill-rule="evenodd"></path>
                </svg>
            </div>
            <h2 class="text-[#0d121b] dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">AI Income Hub</h2>
        </div>
        <div class="flex flex-1 justify-end gap-8">
            <div class="hidden md:flex items-center gap-9">
                <a class="text-[#0d121b] dark:text-slate-300 text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Features</a>
                <a class="text-[#0d121b] dark:text-slate-300 text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Pricing</a>
                <a class="text-[#0d121b] dark:text-slate-300 text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">About</a>
            </div>
            <button class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-blue-700 transition-colors">
                <span class="truncate">Sign In</span>
            </button>
        </div>
    </header>
    <main class="flex-grow flex items-center justify-center py-12 px-4">
        <div class="w-full max-w-[480px] bg-white dark:bg-slate-900 rounded-xl shadow-xl border border-slate-100 dark:border-slate-800 overflow-hidden">
            <div class="p-8">
                <!-- Headline Section -->
                <div class="text-center mb-8">
                    <h1 class="text-[#0d121b] dark:text-white tracking-light text-[32px] font-bold leading-tight pb-3">Create New Password</h1>
                    <p class="text-slate-500 dark:text-slate-400 text-base font-normal leading-normal">
                        Please enter and confirm your new password to regain access to your account.
                    </p>
                </div>
                <!-- Form Section -->
                <form class="space-y-6">
                    <!-- New Password Field -->
                    <div class="flex flex-col gap-2">
                        <label class="flex flex-col w-full">
                            <p class="text-[#0d121b] dark:text-slate-200 text-base font-medium leading-normal pb-2">New Password</p>
                            <div class="flex w-full items-stretch rounded-lg shadow-sm">
                                <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0d121b] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-[#cfd7e7] dark:border-slate-700 bg-white dark:bg-slate-800 focus:border-primary h-14 placeholder:text-[#4c669a] dark:placeholder:text-slate-500 p-[15px] rounded-r-none border-r-0 text-base font-normal leading-normal" placeholder="Enter new password" type="password" />
                                <div class="text-[#4c669a] dark:text-slate-500 flex border border-[#cfd7e7] dark:border-slate-700 bg-white dark:bg-slate-800 items-center justify-center pr-[15px] rounded-r-lg border-l-0 cursor-pointer hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">visibility</span>
                                </div>
                            </div>
                        </label>
                    </div>
                    <!-- Password Strength Indicator -->
                    <div class="px-1">
                        <div class="flex justify-between items-center mb-2">
                        </div>
                        <div class="mt-3 grid grid-cols-2 gap-2">
                            <div class="flex items-center gap-2 text-xs text-green-600 dark:text-green-400">
                                <span class="material-symbols-outlined text-[14px] font-bold">check</span>
                                <span>At least 8 characters</span>
                            </div>
                            <div class="flex items-center gap-2 text-xs text-green-600 dark:text-green-400">
                                <span class="material-symbols-outlined text-[14px] font-bold">check</span>
                                <span>One uppercase letter</span>
                            </div>
                            <div class="flex items-center gap-2 text-xs text-green-600 dark:text-green-400">
                                <span class="material-symbols-outlined text-[14px] font-bold">check</span>
                                <span>One number</span>
                            </div>
                            <div class="flex items-center gap-2 text-xs text-green-600 dark:text-green-400">
                                <span class="material-symbols-outlined text-[14px] font-bold">check</span>
                                <span>One special char</span>
                            </div>
                        </div>
                    </div>
                    <!-- Confirm Password Field -->
                    <div class="flex flex-col gap-2 pt-2">
                        <label class="flex flex-col w-full">
                            <p class="text-[#0d121b] dark:text-slate-200 text-base font-medium leading-normal pb-2">Confirm New Password</p>
                            <div class="flex w-full items-stretch rounded-lg shadow-sm">
                                <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0d121b] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-[#cfd7e7] dark:border-slate-700 bg-white dark:bg-slate-800 focus:border-primary h-14 placeholder:text-[#4c669a] dark:placeholder:text-slate-500 p-[15px] rounded-r-none border-r-0 text-base font-normal leading-normal" placeholder="Repeat new password" type="password" />
                                <div class="text-[#4c669a] dark:text-slate-500 flex border border-[#cfd7e7] dark:border-slate-700 bg-white dark:bg-slate-800 items-center justify-center pr-[15px] rounded-r-lg border-l-0 cursor-pointer hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">visibility</span>
                                </div>
                            </div>
                        </label>
                    </div>
                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button class="w-full flex h-14 items-center justify-center overflow-hidden rounded-xl bg-primary text-white text-base font-bold leading-normal tracking-[0.015em] hover:bg-blue-700 transition-all shadow-lg shadow-primary/20" type="submit">
                            Save and Sign In
                        </button>
                    </div>
                </form>
                <!-- Footer Link -->
                <div class="mt-8 text-center">
                    <a class="text-sm font-medium text-primary hover:underline" href="#">
                        Return to Login
                    </a>
                </div>
            </div>
            <!-- Bottom decorative banner -->
            <div class="h-2 w-full bg-gradient-to-r from-primary via-blue-400 to-primary"></div>
        </div>
    </main>
    <footer class="py-8 text-center">
        <p class="text-slate-400 dark:text-slate-600 text-xs">
            © 2024 AI Income Hub. All rights reserved. Secure Password Recovery.
        </p>
    </footer>
</body>

</html>