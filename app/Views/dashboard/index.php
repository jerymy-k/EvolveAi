<?php








?>
<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <title>Main Dashboard Overview - AI Income Suite</title>
    <?php require __DIR__ . '/../layouts/head.php'; ?>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-[#0d121b] dark:text-white">
    <div class="flex h-screen overflow-hidden">
        <!-- SideNavBar -->
        <?php require __DIR__ . '/../layouts/sidebar.php'; ?>
        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto bg-background-light dark:bg-background-dark scroll-smooth">
            <div class="max-w-6xl mx-auto px-8 py-8">
                <!-- PageHeading -->
                <header class="flex flex-wrap justify-between items-end gap-3 mb-8">
                    <div class="flex flex-col gap-1">
                        <h2 class="text-[#0d121b] dark:text-white text-4xl font-black leading-tight tracking-tight">Welcome back, tariq</h2>
                        <p class="text-[#4c669a] dark:text-slate-400 text-lg font-medium">You've generated <span class="text-primary font-bold">$125.40</span> this week. Keep it up!</p>
                    </div>
                    <div class="flex gap-2">
                        <button class="flex items-center gap-2 px-4 py-2 bg-white dark:bg-slate-800 border border-[#cfd7e7] dark:border-slate-700 rounded-lg text-sm font-semibold hover:bg-slate-50 dark:hover:bg-slate-700 transition-all">
                            <span class="material-symbols-outlined text-base">calendar_today</span>
                            Today
                        </button>
                    </div>
                </header>
                <!-- TextGrid Metrics -->
                <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                    <!-- Current Plan -->
                    <div class="flex flex-col gap-4 rounded-xl border border-[#cfd7e7] dark:border-slate-800 bg-white dark:bg-slate-900 p-5 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-center w-10 h-10 rounded-lg bg-blue-50 dark:bg-blue-900/30 text-primary">
                            <span class="material-symbols-outlined">auto_fix_high</span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h3 class="text-[#4c669a] dark:text-slate-400 text-xs font-bold uppercase tracking-wider">Current Path</h3>
                            <p class="text-[#0d121b] dark:text-white text-lg font-bold leading-tight">Content Creator</p>
                            <p class="text-[#4c669a] dark:text-slate-400 text-sm">AI-Video Automation</p>
                        </div>
                    </div>
                    <!-- Overall Progress (Circular Representation via text/simulated) -->
                    <div class="flex flex-col gap-4 rounded-xl border border-[#cfd7e7] dark:border-slate-800 bg-white dark:bg-slate-900 p-5 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center justify-center w-10 h-10 rounded-lg bg-green-50 dark:bg-green-900/30 text-green-600">
                                <span class="material-symbols-outlined">donut_large</span>
                            </div>
                            <span class="text-2xl font-black text-green-600">45%</span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h3 class="text-[#4c669a] dark:text-slate-400 text-xs font-bold uppercase tracking-wider">Overall Progress</h3>
                            <p class="text-[#0d121b] dark:text-white text-lg font-bold">Course Mastery</p>
                            <div class="w-full bg-slate-100 dark:bg-slate-800 rounded-full h-1.5 mt-2">
                                <div class="bg-green-500 h-1.5 rounded-full" style="width: 45%"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Recent Skills -->
                    <div class="flex flex-col gap-4 rounded-xl border border-[#cfd7e7] dark:border-slate-800 bg-white dark:bg-slate-900 p-5 shadow-sm">
                        <div class="flex items-center justify-center w-10 h-10 rounded-lg bg-purple-50 dark:bg-purple-900/30 text-purple-600">
                            <span class="material-symbols-outlined">military_tech</span>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-[#4c669a] dark:text-slate-400 text-xs font-bold uppercase tracking-wider">New Skills</h3>
                            <div class="flex flex-wrap gap-1.5">
                                <span class="px-2 py-0.5 bg-purple-100 dark:bg-purple-900/40 text-purple-700 dark:text-purple-300 text-[10px] font-bold rounded uppercase">Prompting</span>
                                <span class="px-2 py-0.5 bg-blue-100 dark:bg-blue-900/40 text-blue-700 dark:text-blue-300 text-[10px] font-bold rounded uppercase">SEO</span>
                                <span class="px-2 py-0.5 bg-pink-100 dark:bg-pink-900/40 text-pink-700 dark:text-pink-300 text-[10px] font-bold rounded uppercase">Editing</span>
                            </div>
                        </div>
                    </div>
                    <!-- Income Goal -->
                    <div class="flex flex-col gap-4 rounded-xl border border-[#cfd7e7] dark:border-slate-800 bg-white dark:bg-slate-900 p-5 shadow-sm">
                        <div class="flex items-center justify-center w-10 h-10 rounded-lg bg-amber-50 dark:bg-amber-900/30 text-amber-600">
                            <span class="material-symbols-outlined">trending_up</span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h3 class="text-[#4c669a] dark:text-slate-400 text-xs font-bold uppercase tracking-wider">Monthly Goal</h3>
                            <p class="text-[#0d121b] dark:text-white text-lg font-bold">$450 <span class="text-sm font-normal text-[#4c669a]">/ $1k</span></p>
                            <div class="w-full bg-slate-100 dark:bg-slate-800 rounded-full h-1.5 mt-2 overflow-hidden">
                                <div class="bg-amber-500 h-1.5 rounded-full" style="width: 45%"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Next Task Section -->
                <section class="mb-10">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-[#0d121b] dark:text-white text-xl font-bold tracking-tight flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">priority_high</span>
                            Up Next
                        </h2>
                    </div>
                    <div class="relative overflow-hidden group rounded-2xl bg-gradient-to-br from-primary to-blue-700 p-[1px] shadow-xl shadow-primary/10">
                        <div class="bg-white dark:bg-slate-900 rounded-[calc(1rem-1px)] p-6 md:p-8 flex flex-col md:flex-row md:items-center justify-between gap-6">
                            <div class="flex-1">
                                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold mb-4 uppercase tracking-wide">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                                    Recommended Action
                                </div>
                                <h3 class="text-[#0d121b] dark:text-white text-2xl font-bold mb-2">Refine AI-Generated Script</h3>
                                <p class="text-[#4c669a] dark:text-slate-400 max-w-lg">Your automated video script for "Top 5 AI Tools" is ready for review. Adjusting the hook now can increase retention by 30% based on recent trends.</p>
                            </div>
                            <div class="flex items-center gap-4">
                                <button class="px-8 py-4 bg-primary hover:bg-blue-700 text-white font-bold rounded-xl transition-all shadow-lg shadow-primary/25 flex items-center gap-2 group-hover:scale-105 transform">
                                    Start Task
                                    <span class="material-symbols-outlined">arrow_forward</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Suggested Opportunities Carousel -->
                <section>
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-[#0d121b] dark:text-white text-lg md:text-xl font-bold tracking-tight">Suggested Opportunities</h2>

                        <div class="flex gap-2">
                            <button class="PrevSlide p-2 rounded-full border border-[#cfd7e7] dark:border-slate-800 bg-white dark:bg-slate-800 transition-colors cursor-pointer z-10 shadow-sm flex justify-center items-center">
                                <span class="material-symbols-outlined">chevron_left</span>
                            </button>
                            <button class="NextSlide p-2 rounded-full border border-[#cfd7e7] dark:border-slate-800 bg-white dark:bg-slate-800 transition-colors cursor-pointer z-10 shadow-sm flex justify-center items-center">
                                <span class="material-symbols-outlined">chevron_right</span>
                            </button>
                        </div>
                    </div>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper pb-1">
                            <!-- Opportunity Card 1 -->
                            <div class="swiper-slide bg-white dark:bg-slate-900 border border-[#cfd7e7] dark:border-slate-800 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col h-auto">
                                <div class="h-40 bg-slate-200 dark:bg-slate-800 relative" data-alt="Abstract digital pattern blue and purple">
                                    <div class="absolute inset-0 bg-gradient-to-tr from-blue-500/20 to-purple-500/20"></div>
                                    <img alt="Data analysis" class="w-full h-full object-cover mix-blend-overlay" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAHajRV47obA7WX5HOydJ4cMiyusuFPAcJPHE0I7U4AAHCDaY_AcISe_5APEzMDmikEH2Bd1MqXU-SW5bUNyOM1MgX9edwngP18zjuoDMEi-6f345ir49Rb2c6zSdhJMrqywHjHsnepJYR1BJ7JxBAcmISitWrrNEw4X1aBH5dHLFCfWtZxGrZ03MqP21zRttfDpY3X5RHZjhC5nP65N1h-YCY9effS6-7HPFHbqu66RNz1Jvqmh1U1uLBe6407PMQS6BwQo_vgsf9g" />
                                    <span class="absolute top-3 left-3 px-2 py-1 bg-white/90 dark:bg-slate-900/90 rounded text-[10px] font-bold uppercase">Trending</span>
                                </div>
                                <div class="p-5 flex flex-col flex-1">
                                    <h4 class="text-base font-bold mb-2">AI Freelancing</h4>
                                    <p class="text-sm text-[#4c669a] dark:text-slate-400 mb-4 flex-1">Help small businesses automate their customer support using simple LLM integrations.</p>
                                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-slate-100 dark:border-slate-800">
                                        <span class="text-primary font-bold text-sm">$50-100/hr</span>
                                        <button class="text-xs font-bold text-[#0d121b] dark:text-white flex items-center gap-1 hover:text-primary transition-colors">
                                            View Details
                                            <span class="material-symbols-outlined text-sm">open_in_new</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Opportunity Card 2 -->
                            <div class="swiper-slide bg-white dark:bg-slate-900 border border-[#cfd7e7] dark:border-slate-800 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col h-auto">
                                <div class="h-40 bg-slate-200 dark:bg-slate-800 relative" data-alt="Abstract gradient orange and red">
                                    <div class="absolute inset-0 bg-gradient-to-tr from-orange-500/20 to-red-500/20"></div>
                                    <img alt="Social media dashboard" class="w-full h-full object-cover mix-blend-overlay" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVFcSS0vSnMj-BMBP5TmVlGcF0AAG6d4FbLgO9HIPSe0_MIU5z79a0tUraqaJPhUYCopD-bZTb1RDfWC3pXjAslmHfFbgraToyLML-4xZjJgBKM3HG65ty4tFIfKmd7XqcS3gzp_ORvgBYplTBvkHx52fIR6wBWmoEPk0sREP60Dp4aBp5Ov0bril8DiCGpXVs3JNRRHC0CEM5Ijy7hNrJiGZ71U5CD6GtwZV9tv8SyDs0F33vqooqEyjkA5l6e7c7HBNU-upLWE2b" />
                                    <span class="absolute top-3 left-3 px-2 py-1 bg-white/90 dark:bg-slate-900/90 rounded text-[10px] font-bold uppercase">Beginner Friendly</span>
                                </div>
                                <div class="p-5 flex flex-col flex-1">
                                    <h4 class="text-base font-bold mb-2">Digital Products</h4>
                                    <p class="text-sm text-[#4c669a] dark:text-slate-400 mb-4 flex-1">Create and sell AI-generated planners and journals on Etsy with zero inventory costs.</p>
                                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-slate-100 dark:border-slate-800">
                                        <span class="text-primary font-bold text-sm">Passive Income</span>
                                        <button class="text-xs font-bold text-[#0d121b] dark:text-white flex items-center gap-1 hover:text-primary transition-colors">
                                            View Details
                                            <span class="material-symbols-outlined text-sm">open_in_new</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Opportunity Card 3 -->
                            <div class="swiper-slide bg-white dark:bg-slate-900 border border-[#cfd7e7] dark:border-slate-800 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col h-auto">
                                <div class="h-40 bg-slate-200 dark:bg-slate-800 relative" data-alt="Abstract gradient teal and blue">
                                    <div class="absolute inset-0 bg-gradient-to-tr from-teal-500/20 to-blue-500/20"></div>
                                    <img alt="Technology background" class="w-full h-full object-cover mix-blend-overlay" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4PjIFAEITr0jgs7MfrvB9QllSX-894-CQN_68qzN8Qw72Ul0OOL83kkVoQZk2-jX5_KEyUTOCWAz2VoRy-0J-GEDn9o42YhsNthSzi0h3K_7CieT59cLQYQQFtBwZjSFKW32ca2GV6VAATjAtW5kWLKA7x0TZEubtxzj8OrVYjJ4UVMJ0s5e1hd8mzJIgOo8U3xnLcc875juEDtO7dcfuoLqANMJxC-ndkFp_pIKyROTkb8iJvoj_ZuljiyTMN516yarfvEsxqmN2" />
                                    <span class="absolute top-3 left-3 px-2 py-1 bg-white/90 dark:bg-slate-900/90 rounded text-[10px] font-bold uppercase text-primary">High Yield</span>
                                </div>
                                <div class="p-5 flex flex-col flex-1">
                                    <h4 class="text-base font-bold mb-2">AI Consulting</h4>
                                    <p class="text-sm text-[#4c669a] dark:text-slate-400 mb-4 flex-1">Offer 1-on-1 sessions teaching solo entrepreneurs how to integrate ChatGPT into their workflow.</p>
                                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-slate-100 dark:border-slate-800">
                                        <span class="text-primary font-bold text-sm">$150/session</span>
                                        <button class="text-xs font-bold text-[#0d121b] dark:text-white flex items-center gap-1 hover:text-primary transition-colors">
                                            View Details
                                            <span class="material-symbols-outlined text-sm">open_in_new</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Duplicated Slides for Better Looping -->
                            <!-- Opportunity Card 1 Copy -->
                            <div class="swiper-slide bg-white dark:bg-slate-900 border border-[#cfd7e7] dark:border-slate-800 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col h-auto">
                                <div class="h-40 bg-slate-200 dark:bg-slate-800 relative" data-alt="Abstract digital pattern blue and purple">
                                    <div class="absolute inset-0 bg-gradient-to-tr from-blue-500/20 to-purple-500/20"></div>
                                    <img alt="Data analysis" class="w-full h-full object-cover mix-blend-overlay" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAHajRV47obA7WX5HOydJ4cMiyusuFPAcJPHE0I7U4AAHCDaY_AcISe_5APEzMDmikEH2Bd1MqXU-SW5bUNyOM1MgX9edwngP18zjuoDMEi-6f345ir49Rb2c6zSdhJMrqywHjHsnepJYR1BJ7JxBAcmISitWrrNEw4X1aBH5dHLFCfWtZxGrZ03MqP21zRttfDpY3X5RHZjhC5nP65N1h-YCY9effS6-7HPFHbqu66RNz1Jvqmh1U1uLBe6407PMQS6BwQo_vgsf9g" />
                                    <span class="absolute top-3 left-3 px-2 py-1 bg-white/90 dark:bg-slate-900/90 rounded text-[10px] font-bold uppercase">Trending</span>
                                </div>
                                <div class="p-5 flex flex-col flex-1">
                                    <h4 class="text-base font-bold mb-2">AI Freelancing</h4>
                                    <p class="text-sm text-[#4c669a] dark:text-slate-400 mb-4 flex-1">Help small businesses automate their customer support using simple LLM integrations.</p>
                                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-slate-100 dark:border-slate-800">
                                        <span class="text-primary font-bold text-sm">$50-100/hr</span>
                                        <button class="text-xs font-bold text-[#0d121b] dark:text-white flex items-center gap-1 hover:text-primary transition-colors">
                                            View Details
                                            <span class="material-symbols-outlined text-sm">open_in_new</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Opportunity Card 2 Copy -->
                            <div class="swiper-slide bg-white dark:bg-slate-900 border border-[#cfd7e7] dark:border-slate-800 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col h-auto">
                                <div class="h-40 bg-slate-200 dark:bg-slate-800 relative" data-alt="Abstract gradient orange and red">
                                    <div class="absolute inset-0 bg-gradient-to-tr from-orange-500/20 to-red-500/20"></div>
                                    <img alt="Social media dashboard" class="w-full h-full object-cover mix-blend-overlay" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVFcSS0vSnMj-BMBP5TmVlGcF0AAG6d4FbLgO9HIPSe0_MIU5z79a0tUraqaJPhUYCopD-bZTb1RDfWC3pXjAslmHfFbgraToyLML-4xZjJgBKM3HG65ty4tFIfKmd7XqcS3gzp_ORvgBYplTBvkHx52fIR6wBWmoEPk0sREP60Dp4aBp5Ov0bril8DiCGpXVs3JNRRHC0CEM5Ijy7hNrJiGZ71U5CD6GtwZV9tv8SyDs0F33vqooqEyjkA5l6e7c7HBNU-upLWE2b" />
                                    <span class="absolute top-3 left-3 px-2 py-1 bg-white/90 dark:bg-slate-900/90 rounded text-[10px] font-bold uppercase">Beginner Friendly</span>
                                </div>
                                <div class="p-5 flex flex-col flex-1">
                                    <h4 class="text-base font-bold mb-2">Digital Products</h4>
                                    <p class="text-sm text-[#4c669a] dark:text-slate-400 mb-4 flex-1">Create and sell AI-generated planners and journals on Etsy with zero inventory costs.</p>
                                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-slate-100 dark:border-slate-800">
                                        <span class="text-primary font-bold text-sm">Passive Income</span>
                                        <button class="text-xs font-bold text-[#0d121b] dark:text-white flex items-center gap-1 hover:text-primary transition-colors">
                                            View Details
                                            <span class="material-symbols-outlined text-sm">open_in_new</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Opportunity Card 3 Copy -->
                            <div class="swiper-slide bg-white dark:bg-slate-900 border border-[#cfd7e7] dark:border-slate-800 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col h-auto">
                                <div class="h-40 bg-slate-200 dark:bg-slate-800 relative" data-alt="Abstract gradient teal and blue">
                                    <div class="absolute inset-0 bg-gradient-to-tr from-teal-500/20 to-blue-500/20"></div>
                                    <img alt="Technology background" class="w-full h-full object-cover mix-blend-overlay" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4PjIFAEITr0jgs7MfrvB9QllSX-894-CQN_68qzN8Qw72Ul0OOL83kkVoQZk2-jX5_KEyUTOCWAz2VoRy-0J-GEDn9o42YhsNthSzi0h3K_7CieT59cLQYQQFtBwZjSFKW32ca2GV6VAATjAtW5kWLKA7x0TZEubtxzj8OrVYjJ4UVMJ0s5e1hd8mzJIgOo8U3xnLcc875juEDtO7dcfuoLqANMJxC-ndkFp_pIKyROTkb8iJvoj_ZuljiyTMN516yarfvEsxqmN2" />
                                    <span class="absolute top-3 left-3 px-2 py-1 bg-white/90 dark:bg-slate-900/90 rounded text-[10px] font-bold uppercase text-primary">High Yield</span>
                                </div>
                                <div class="p-5 flex flex-col flex-1">
                                    <h4 class="text-base font-bold mb-2">AI Consulting</h4>
                                    <p class="text-sm text-[#4c669a] dark:text-slate-400 mb-4 flex-1">Offer 1-on-1 sessions teaching solo entrepreneurs how to integrate ChatGPT into their workflow.</p>
                                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-slate-100 dark:border-slate-800">
                                        <span class="text-primary font-bold text-sm">$150/session</span>
                                        <button class="text-xs font-bold text-[#0d121b] dark:text-white flex items-center gap-1 hover:text-primary transition-colors">
                                            View Details
                                            <span class="material-symbols-outlined text-sm">open_in_new</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper('.mySwiper', {
                slidesPerView: 1,
                spaceBetween: 24,
                loop: true,
                navigation: {
                    nextEl: '.NextSlide',
                    prevEl: '.PrevSlide',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 24,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 32,
                    },
                },
            });
        })
    </script>
</body>

</html>