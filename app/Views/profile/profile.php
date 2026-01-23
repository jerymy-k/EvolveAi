<!DOCTYPE html>
<html class="light" lang="en">
    <?php var_dump($userData) ?>
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>User Profile &amp; Settings - AI Income Hub</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
                        "2xl": "1rem",
                        "3xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        body {
            font-family: 'Inter', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .bento-card {
            @apply bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-3xl p-6 shadow-sm hover:shadow-md transition-shadow duration-300;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark min-h-screen font-display text-gray-900 dark:text-white">
    <header class="sticky top-0 z-50 flex items-center justify-between border-b border-gray-200 dark:border-gray-800 px-6 py-4 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md">
        <div class="flex items-center gap-3 text-primary">
            <div class="size-8 bg-primary rounded-lg flex items-center justify-center text-white">
                <span class="material-symbols-outlined">psychology</span>
            </div>
            <h2 class="text-gray-900 dark:text-white text-lg font-bold leading-tight tracking-tight">AI Income Hub</h2>
        </div>
    </header>
    <main class="max-w-6xl mx-auto px-6 py-10">
        <div class="mb-10">
            <h1 class="text-3xl font-extrabold tracking-tight">Profile &amp; Settings</h1>
            <p class="text-gray-500 dark:text-gray-400 mt-1">Manage your account preferences and AI strategy parameters.</p>
        </div>
        <div class="flex flex-col gap-6">
            <div class="bento-card flex flex-col md:flex-row items-center gap-8">
                <div class="relative group">
                    <div class="bg-cyan-200 size-28 rounded-full overflow-hidden shadow-[0px_0px_5px_gray] flex justify-center items-center text-5xl">
                        <?= ucfirst($_SESSION['user_name'][0]) ?>
                    </div>
                </div>
                <div class="flex-1 space-y-4 w-full text-center md:text-left">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Full Name</label>
                            <p class="text-lg font-semibold"><?= $_SESSION['user_name'] ?></p>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Email Address</label>
                            <p class="text-lg font-semibold"><?= $_SESSION['user_email'] ?></p>
                        </div>
                    </div>
                    <button class="inline-flex items-center gap-2 text-primary font-bold text-sm hover:underline">
                        <span class="material-symbols-outlined text-lg">edit</span>
                        Edit Profile Info
                    </button>
                </div>
            </div>
            <div class="bento-card w-full">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-bold flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">analytics</span>
                        AI Strategy Profile
                    </h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <div class="space-y-3">
                        <h4 class="text-xs font-semibold uppercase tracking-wider text-gray-400 px-1">Identity & Goals</h4>
                        <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-800/50 rounded-xl border-l-4 border-primary">
                            <div>
                                <p class="text-[10px] text-gray-500 uppercase">Main Goal</p>
                                <p class="text-sm font-bold"><?= $userData['main_goal'] ?></p>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-800/50 rounded-xl">
                            <div>
                                <p class="text-[10px] text-gray-500 uppercase">Age Range</p>
                                <p class="text-sm font-bold"><?= $userData['age_range'] ?></p>
                            </div>
                        </div>


                        <div class="p-3 bg-gray-50 dark:bg-gray-800/50 rounded-xl">
                            <p class="text-[10px] text-gray-500 uppercase mb-1">Interests</p>
                            <div class="flex flex-wrap gap-3">
                            <?php foreach($userData['interest_areas'] as $interest):?>
                                <span class="px-2 py-0.5 bg-blue-100 text-blue-700 text-[10px] rounded-md font-bold"><?= $interest ?></span>
                            <?php endforeach;?>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-800/50 rounded-xl">
                            <div>
                                <p class="text-[10px] text-gray-500 uppercase">AI Confidence</p>
                                <p class="text-sm font-bold"><?= $userData['ai_confidence'] ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <h4 class="text-xs font-semibold uppercase tracking-wider text-gray-400 px-1">Professional Context</h4>

                        <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-800/50 rounded-xl">
                            <div>
                                <p class="text-[10px] text-gray-500 uppercase">Career</p>
                                <p class="text-sm font-bold"><?= $userData['current_career'] ?></p>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-800/50 rounded-xl">
                            <div>
                                <p class="text-[10px] text-gray-500 uppercase">Background</p>
                                <p class="text-sm font-bold italic text-gray-600"><?= $userData['previous_career'] ?></p>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-800/50 rounded-xl">
                            <div>
                                <p class="text-[10px] text-gray-500 uppercase">Schedule & Availability</p>
                                <p class="text-sm font-bold"><?= $userData['work_schedule'] ?></p>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-800/50 rounded-xl">
                            <div>
                                <p class="text-[10px] text-gray-500 uppercase">Primary Device</p>
                                <p class="text-sm font-bold">Desktop / Mac</p>
                            </div>
                        </div>
                    </div>

                    <div class="md:col-span-2 space-y-3 pt-2">
                        <h4 class="text-xs font-semibold uppercase tracking-wider text-gray-400 px-1 border-t border-gray-100 dark:border-gray-700 pt-4">Psychographic Insights (Additional info)</h4>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                            <div class="p-3 bg-emerald-50 dark:bg-emerald-900/20 rounded-xl border border-emerald-100 dark:border-emerald-800">
                                <p class="text-[10px] text-emerald-600 dark:text-emerald-400 uppercase font-bold">Financial Feeling</p>
                                <p class="text-sm font-medium">Seeking Stability</p>
                            </div>

                            <div class="p-3 bg-purple-50 dark:bg-purple-900/20 rounded-xl border border-purple-100 dark:border-purple-800">
                                <p class="text-[10px] text-purple-600 dark:text-purple-400 uppercase font-bold">Dream Goal</p>
                                <p class="text-sm font-medium">Remote Agency Owner</p>
                            </div>

                            <div class="p-3 bg-red-50 dark:bg-red-900/20 rounded-xl border border-red-100 dark:border-red-800">
                                <p class="text-[10px] text-red-600 dark:text-red-400 uppercase font-bold">Work Issues</p>
                                <p class="text-sm font-medium">Burnout, Manual Tasks</p>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="w-full mt-6 py-3 bg-gray-100 dark:bg-gray-800 hover:bg-primary hover:text-white transition-all rounded-xl font-bold text-sm flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-sm">edit</span>
                    Update Survey Responses
                </button>
            </div>
        </div>
        <div class="mt-12 flex flex-col sm:flex-row items-center justify-between gap-6 p-6 bg-white dark:bg-gray-900 rounded-3xl border border-gray-200 dark:border-gray-800 shadow-xl">
            <div class="text-center sm:text-left">
                <p class="font-bold text-gray-900 dark:text-white">Unsaved changes detected</p>
                <p class="text-sm text-gray-500 dark:text-gray-400">Last saved 2 hours ago</p>
            </div>
            <div class="flex gap-3 w-full sm:w-auto">
                <button class="flex-1 sm:flex-none px-8 py-3 rounded-2xl font-bold text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                    Discard
                </button>
                <button class="flex-1 sm:flex-none px-12 py-3 bg-primary text-white font-bold rounded-2xl shadow-lg shadow-primary/20 hover:bg-primary/90 transform hover:-translate-y-0.5 transition-all">
                    Save Changes
                </button>
            </div>
        </div>
    </main>
    <footer class="py-12 border-t border-gray-200 dark:border-gray-800 text-center">
        <div class="flex justify-center gap-6 mb-4">
            <a class="text-sm text-gray-500 hover:text-primary transition-colors" href="#">Privacy Policy</a>
            <a class="text-sm text-gray-500 hover:text-primary transition-colors" href="#">Terms of Service</a>
            <a class="text-sm text-gray-500 hover:text-primary transition-colors" href="#">Contact Support</a>
        </div>
        <p class="text-gray-400 text-xs">© 2024 AI Income Hub. All data is encrypted and secure.</p>
    </footer>

</body>

</html>