<!DOCTYPE html>
<html class="light" lang="en">

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
            padding: 1.5rem;
            border-radius: 1.5rem;
            border: 1px solid #e5e7eb;
            
            background-color: #ffffff;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            
            transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1);
            }

            .bento-card:hover {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 
                        0 2px 4px -1px rgba(0, 0, 0, 0.06);
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
                <div class="flex-1 space-y-4 w-full text-center md:text-left" id="profile">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Full Name</label>
                            <p class="text-lg font-semibold" id="username"><?= $_SESSION['user_name'] ?></p>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Email Address</label>
                            <p class="text-lg font-semibold" id="email"><?= $_SESSION['user_email'] ?></p>
                        </div>
                    </div>
                    <button class="inline-flex items-center gap-2 text-primary font-bold text-sm hover:underline" id="edit_profile">
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
                                <?php foreach ($userData['interest_areas'] as $interest): ?>
                                    <span class="px-2 py-0.5 bg-blue-100 text-blue-700 text-[10px] rounded-md font-bold"><?= $interest ?></span>
                                <?php endforeach; ?>
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
                                <p class="text-sm font-bold"><?= $userData['used_device'] ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="md:col-span-2 space-y-3 pt-2">
                        <h4 class="text-xs font-semibold uppercase tracking-wider text-gray-400 px-1 border-t border-gray-100 dark:border-gray-700 pt-4">Psychographic Insights (Additional info)</h4>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                            <div class="p-3 bg-emerald-50 dark:bg-emerald-900/20 rounded-xl border border-emerald-100 dark:border-emerald-800">
                                <p class="text-[10px] text-emerald-600 dark:text-emerald-400 uppercase font-bold">Financial Feeling</p>
                                <p class="text-sm font-medium"><?= !empty($userData['financial_feeling']) ? $userData['financial_feeling'] : '<?= <h2>Not Defined Yet </h2><h4 class="text-sm text-gray-400 italic">(ex: Stable but looking to diversify income)</h4>' ?></p>
                            </div>

                            <div class="p-3 bg-purple-50 dark:bg-purple-900/20 rounded-xl border border-purple-100 dark:border-purple-800">
                                <p class="text-[10px] text-purple-600 dark:text-purple-400 uppercase font-bold">Dream Goal</p>
                                <p class="text-sm font-medium"><?= !empty($userData['dream_goal']) ? $userData['dream_goal'] : '<?= <h2>Not Defined Yet </h2><h4 class="text-sm text-gray-400 italic">(ex: Establish a cross-border digital empire targeting US markets from Morocco)</h4>' ?></p>
                            </div>

                            <div class="p-3 bg-red-50 dark:bg-red-900/20 rounded-xl border border-red-100 dark:border-red-800">
                                <p class="text-[10px] text-red-600 dark:text-red-400 uppercase font-bold">Work Issues</p>
                                <p class="text-sm font-medium"><?= !empty($userData['work_issues']) ? $userData['work_issues'] : '<?= <h2>Not Defined Yet </h2><h4 class="text-sm text-gray-400 italic">(ex: Manual repetitive tasks & low pay.)</h4>' ?></p>
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

<script>
    const button = document.querySelector('#edit_profile');
    const profile = document.querySelector('#profile');

    button.addEventListener('click', async () => {

            const username_field = profile.querySelector('#username');
            const email_field = profile.querySelector('#email');
            console.log(username_field);
            console.log(email_field);


            if (!profile.dataset.editing) {
                profile.dataset.editing = "true"



                const username_value = username_field.textContent.trim();
                const email_value = email_field.textContent.trim();

                username_field.innerHTML = `<input type="text" value="${username_value}" class="edit-category rounded-lg p-1 editable">`;
                email_field.innerHTML = `<input type="text" value="${email_value}" class="edit-amount rounded-lg p-1 editable">`;

                button.textContent = "confirm";
            } else {
                const mode = profile.dataset.mode;
                const new_username = username_field.querySelector('input').value;
                const new_email = email_field.querySelector('input').value;

                username_field.textContent = new_username;
                email_field.textContent = new_email;

                delete profile.dataset.editing;

                try {
                    const response = await fetch('profile/edit_profile', {
                        method: 'POST',
                        headers: {
                            'Content-type': 'application/x-www-form-urlencoded',
                        },
                        body: `id=${<?= $_SESSION['user_id'] ?>}&user_name=${new_username}&email=${new_email}`
                    });

                    const result = await response.json();

                    if (result.success) {
                        console.log("nice");
                    } else {
                        alert('Failed to edit profile.');
                    }
                } catch (err) {
                    console.error('Error editing profile:', err);
                }
            }
        });
</script>