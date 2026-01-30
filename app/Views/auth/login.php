<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Login - EvolveAi</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
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
                        "display": ["Inter", "sans-serif"]
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

<body class="bg-background-light dark:bg-background-dark text-[#0d121b] dark:text-white min-h-screen">
    <div class="flex min-h-screen w-full flex-col lg:flex-row">
        <!-- Left Side: Visual / Success Metric Panel -->
        <div
            class="relative hidden lg:flex lg:w-1/2 flex-col justify-center items-center bg-primary p-12 overflow-hidden">
            <!-- Decorative Background Pattern -->
            <div class="absolute inset-0 opacity-10 pointer-events-none">
                <svg height="100%" width="100%" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern height="40" id="grid" patternunits="userSpaceOnUse" width="40">
                            <path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="1"></path>
                        </pattern>
                    </defs>
                    <rect fill="url(#grid)" height="100%" width="100%"></rect>
                </svg>
            </div>
            <div class="relative max-w-md text-center">
                <div class="mb-8 inline-flex items-center justify-center rounded-2xl bg-white/10 p-4 backdrop-blur-md">
                    <span class="material-symbols-outlined text-white text-5xl">trending_up</span>
                </div>
                <h2 class="text-white text-4xl font-black leading-tight tracking-tight mb-4">
                    Join 10,000+ AI Entrepreneurs
                </h2>
                <p class="text-white/80 text-lg mb-8">
                    Our community has generated over <span class="text-white font-bold">$2.4M in passive income</span>
                    using our AI-driven insights this month.
                </p>
                <!-- Success Metric Card -->
                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-6 text-left shadow-2xl">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="size-12 rounded-full bg-cover bg-center"
                            data-alt="Portrait of a successful entrepreneur"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAgJPa6yBfQwLpWYukhibyqYdeu2fskrFy6DDBNJNBGDW3drx7lY9Yj4c5Ucbfq3i5mczYGy-ShvBlkhGVrRY3xjC17qny5zUmE7-cZJ0S3Q4JL9LtDm56vSV9y9DhesQ1785IR4i5s56d5fSgrFbx85WppSk1qCO-5yI4gogQprocKHuXMrKHUb5fOHiXT6RhXJuYoLcxwCiPtHswkzUwpt09PYKXJlxy65B1xcrpLggrota0myLnxV_6SH3Hy4hAvO2zNetM9EEjT');">
                        </div>
                        <div>
                            <p class="text-white font-bold">Alex Rivera</p>
                            <p class="text-white/60 text-xs">Community Member</p>
                        </div>
                    </div>
                    <p class="text-white/90 italic">"The EvolveAi analytics helped me scale my workflow 5x. Best investment of the year."</p>
                </div>
            </div>
            <!-- Absolute positioned abstract image element for texture -->
            <div class="absolute -bottom-20 -right-20 w-96 h-96 bg-blue-400/20 rounded-full blur-3xl"></div>
        </div>

        <!-- Right Side: Login Form Panel -->
        <div
            class="flex flex-1 flex-col justify-center px-6 py-12 lg:px-24 bg-background-light dark:bg-background-dark">
            <div class="mx-auto w-full max-w-[480px]">
                <!-- Header Component -->
                <header class="mb-10 flex flex-col items-start gap-4">
                    <div class="flex items-center gap-2 mb-2">
                        <div class="size-8 bg-primary rounded-lg flex items-center justify-center text-white">
                            <svg class="size-5" fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd"
                                    d="M39.475 21.6262C40.358 21.4363 40.6863 21.5589 40.7581 21.5934C40.7876 21.655 40.8547 21.857 40.8082 22.3336C40.7408 23.0255 40.4502 24.0046 39.8572 25.2301C38.6799 27.6631 36.5085 30.6631 33.5858 33.5858C30.6631 36.5085 27.6632 38.6799 25.2301 39.8572C24.0046 40.4502 23.0255 40.7407 22.3336 40.8082C21.8571 40.8547 21.6551 40.7875 21.5934 40.7581C21.5589 40.6863 21.4363 40.358 21.6262 39.475C21.8562 38.4054 22.4689 36.9657 23.5038 35.2817C24.7575 33.2417 26.5497 30.9744 28.7621 28.762C30.9744 26.5497 33.2417 24.7574 35.2817 23.5037C36.9657 22.4689 38.4054 21.8562 39.475 21.6262ZM4.41189 29.2403L18.7597 43.5881C19.8813 44.7097 21.4027 44.9179 22.7217 44.7893C24.0585 44.659 25.5148 44.1631 26.9723 43.4579C29.9052 42.0387 33.2618 39.5667 36.4142 36.4142C39.5667 33.2618 42.0387 29.9052 43.4579 26.9723C44.1631 25.5148 44.659 24.0585 44.7893 22.7217C44.9179 21.4027 44.7097 19.8813 43.5881 18.7597L29.2403 4.41187C27.8527 3.02428 25.8765 3.02573 24.2861 3.36776C22.6081 3.72863 20.7334 4.58419 18.8396 5.74801C16.4978 7.18716 13.9881 9.18353 11.5858 11.5858C9.18354 13.988 7.18717 16.4978 5.74802 18.8396C4.58421 20.7334 3.72865 22.6081 3.36778 24.2861C3.02574 25.8765 3.02429 27.8527 4.41189 29.2403Z"
                                    fill="currentColor" fill-rule="evenodd"></path>
                            </svg>
                        </div>
                        <span class="text-[#0d121b] dark:text-white font-bold text-lg">EvolveAi</span>
                    </div>
                    <h1
                        class="text-[#0d121b] dark:text-white text-3xl font-black leading-tight tracking-tight sm:text-4xl">
                        Welcome back
                    </h1>
                    <p class="text-[#4c669a] dark:text-slate-400 text-base">
                        Enter your credentials to access your EvolveAi dashboard.
                    </p>
                </header>

                <!-- ✅ Message d'erreur (flash) -->
                <?php if (!empty($error)): ?>
                    <div class="mb-6 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                        <?= htmlspecialchars($error) ?>
                    </div>
                <?php endif; ?>

                <!-- ✅ FORM: method + action -->
                <form class="flex flex-col gap-5" method="POST" action="/auth/login">
                    <!-- Email Field -->
                    <div class="flex flex-col gap-2">
                        <label class="text-[#0d121b] dark:text-white text-sm font-semibold">Email Address</label>
                        <input
                            class="form-input w-full rounded-lg border-[#cfd7e7] dark:border-slate-700 bg-white dark:bg-slate-900 h-14 px-4 text-base placeholder:text-[#4c669a] focus:border-primary focus:ring-1 focus:ring-primary transition-all"
                            placeholder="name@company.com" required type="email" name="email"
                            value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" />
                    </div>

                    <!-- Password Field -->
                    <div class="flex flex-col gap-2">
                        <div class="flex justify-between items-center">
                            <label class="text-[#0d121b] dark:text-white text-sm font-semibold">Password</label>
                            <div class="mt-3 flex justify-center">
                                <a class="text-primary text-sm font-semibold hover:underline"
                                    href="/auth/forgotPassword">
                                    Forgot password?
                                </a>
                            </div>
                        </div>
                        <div class="relative">
                            <input
                                class="form-input w-full rounded-lg border-[#cfd7e7] dark:border-slate-700 bg-white dark:bg-slate-900 h-14 px-4 pr-12 text-base placeholder:text-[#4c669a] focus:border-primary focus:ring-1 focus:ring-primary transition-all"
                                placeholder="••••••••" required type="password" name="password" />
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button
                        class="flex w-full items-center justify-center rounded-lg bg-primary h-14 text-white text-base font-bold tracking-wide hover:bg-blue-700 transition-colors shadow-lg shadow-primary/20 mt-2"
                        type="submit">
                        Sign In
                    </button>
                </form>

                <!-- Footer Component -->
                <p class="mt-10 text-center text-[#4c669a] dark:text-slate-400 text-sm">
                    Don't have an account?
                    <a class="text-primary font-bold hover:underline ml-1" href="/auth/register">Create an account</a>
                </p>
            </div>

            <!-- Mobile Footer Links -->
            <div class="mt-auto pt-10 flex justify-center gap-6 text-[#4c669a] dark:text-slate-500 text-xs">
                <a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
                <a class="hover:text-primary transition-colors" href="#">Terms of Service</a>
                <a class="hover:text-primary transition-colors" href="#">Help Center</a>
            </div>
        </div>
    </div>
</body>

</html>