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
    
</body>

</html>