<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Sign Up - EvolveAi</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet" />
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

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark min-h-screen flex items-stretch overflow-x-hidden">
    <!-- Left Side: Inspiration Panel (Desktop Only) -->
    <div class="hidden lg:flex lg:w-1/2 flex-col gap-6 p-12 relative overflow-hidden bg-gradient-to-br from-primary via-[#6366f1] to-[#a855f7]">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;"></div>
        <!-- Logo/Brand -->
        <div class="relative z-10 flex items-center gap-3 text-white">
            <div class="size-10 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-md">
                <span class="material-symbols-outlined text-white">rocket_launch</span>
            </div>
            <h2 class="text-xl font-bold tracking-tight">EvolveAi</h2>
        </div>
        <!-- Quote and Dashboard Preview -->
        <div class="relative z-10 flex flex-col gap-10">
            <div class="max-w-md">
                <p class="text-white text-4xl font-bold leading-tight">
                    The best way to predict the future is to create it. Start your AI journey today.
                </p>
            </div>
            <!-- Glassmorphic Dashboard Preview -->
            <div class="glass-effect rounded-xl p-6 shadow-2xl max-w-lg transform rotate-2 hover:rotate-0 transition-transform duration-500">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex gap-2">
                        <div class="w-3 h-3 rounded-full bg-red-400/50"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-400/50"></div>
                        <div class="w-3 h-3 rounded-full bg-green-400/50"></div>
                    </div>
                    <div class="text-white/60 text-xs font-medium">Monthly Revenue Growth</div>
                </div>
                <div class="flex items-end gap-2 h-32">
                    <div class="w-full bg-white/20 rounded-t-sm h-1/3"></div>
                    <div class="w-full bg-white/20 rounded-t-sm h-1/2"></div>
                    <div class="w-full bg-white/30 rounded-t-sm h-2/3"></div>
                    <div class="w-full bg-white/40 rounded-t-sm h-1/2"></div>
                    <div class="w-full bg-white/50 rounded-t-sm h-3/4"></div>
                    <div class="w-full bg-primary/80 rounded-t-sm h-full shadow-[0_0_15px_rgba(19,91,236,0.5)]"></div>
                </div>
                <div class="mt-4 flex justify-between items-center">
                    <div>
                        <p class="text-white/60 text-xs">Total Earnings</p>
                        <p class="text-white text-xl font-bold">$12,450.00</p>
                    </div>
                    <div class="px-3 py-1 bg-green-500/20 text-green-300 text-xs rounded-full border border-green-500/30">
                        +24.5%
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Side: Sign Up Form -->
    <div class="w-full lg:w-1/2 flex flex-col justify-center items-center p-6 sm:p-12 md:p-20 bg-white dark:bg-background-dark">
        <div class="w-full max-w-md">
            <!-- Mobile Logo -->
            <div class="lg:hidden flex items-center gap-3 mb-8 text-primary">
                <span class="material-symbols-outlined text-4xl">rocket_launch</span>
                <h2 class="text-2xl font-bold tracking-tight">EvolveAi</h2>
            </div>

            <!-- Page Heading -->
            <div class="mb-10">
                <h1 class="text-[#0d121b] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em] mb-2">Create your account</h1>
                <p class="text-[#4c669a] dark:text-gray-400 text-base font-normal">Join 5,000+ creators building their future with AI.</p>
            </div>

            <!-- ✅ Message d'erreur -->
            <?php if (!empty($error)): ?>
                <div class="mb-6 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <!-- Registration Form -->
            <form class="space-y-5" method="POST" action="/auth/register">
                <!-- Full Name -->
                <div class="flex flex-col">
                    <label class="text-[#0d121b] dark:text-gray-200 text-sm font-semibold leading-normal pb-2">User Name</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">person</span>
                        <input
                            class="form-input flex w-full min-w-0 flex-1 rounded-lg text-[#0d121b] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-[#cfd7e7] dark:border-gray-700 bg-background-light dark:bg-gray-800 focus:border-primary h-14 pl-12 pr-4 placeholder:text-[#4c669a] text-base font-normal transition-all"
                            placeholder="Enter your full name"
                            name="name"
                            type="text"
                            required
                            value="<?= htmlspecialchars($_POST['name'] ?? '') ?>"
                        />
                    </div>
                </div>

                <!-- Email -->
                <div class="flex flex-col">
                    <label class="text-[#0d121b] dark:text-gray-200 text-sm font-semibold leading-normal pb-2">Email Address</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">mail</span>
                        <input
                            class="form-input flex w-full min-w-0 flex-1 rounded-lg text-[#0d121b] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-[#cfd7e7] dark:border-gray-700 bg-background-light dark:bg-gray-800 focus:border-primary h-14 pl-12 pr-4 placeholder:text-[#4c669a] text-base font-normal transition-all"
                            placeholder="name@example.com"
                            type="email"
                            name="email"
                            required
                            value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                        />
                    </div>
                </div>

                <!-- Password -->
                <div class="flex flex-col">
                    <label class="text-[#0d121b] dark:text-gray-200 text-sm font-semibold leading-normal pb-2">Password</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">lock</span>
                        <input
                            class="form-input flex w-full min-w-0 flex-1 rounded-lg text-[#0d121b] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-[#cfd7e7] dark:border-gray-700 bg-background-light dark:bg-gray-800 focus:border-primary h-14 pl-12 pr-12 placeholder:text-[#4c669a] text-base font-normal transition-all"
                            placeholder="Create a strong password"
                            type="password"
                            name="password"
                            required
                        />
                        <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 cursor-pointer hover:text-primary">visibility</span>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="pt-4 flex flex-col gap-4">
                    <button type="submit" class="w-full flex h-14 items-center justify-center rounded-lg bg-primary text-white text-base font-bold shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all active:scale-[0.98]">
                        Create Account
                    </button>
                </div>
            </form>

            <!-- Login Link -->
            <p class="mt-8 text-center text-sm text-[#4c669a] dark:text-gray-400">
                Already have an account?
                <a class="text-primary font-bold hover:underline" href="/auth/login">Log in</a>
            </p>

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
