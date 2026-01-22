<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>EvolveAi - Future of Digital Wealth</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#3b82f6",
                        "accent": "#8b5cf6",
                        "background-dark": "#030712",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "Inter", "sans-serif"],
                        "sans": ["Inter", "sans-serif"]
                    },
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        @layer base {
          body { @apply bg-background-dark text-slate-100 font-sans; }
        }
        .mesh-gradient {
            background-image: 
                radial-gradient(at 0% 0%, rgba(59, 130, 246, 0.15) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(139, 92, 246, 0.15) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(59, 130, 246, 0.1) 0px, transparent 50%),
                radial-gradient(at 0% 100%, rgba(139, 92, 246, 0.1) 0px, transparent 50%);
        }
        .glass-morphism {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
        .shimmer-text {
            background: linear-gradient(90deg, #fff 0%, #a78bfa 50%, #fff 100%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shine 8s linear infinite;
        }
        @keyframes shine {
            to { background-position: 200% center; }
        }
        .warp-speed {
            background: radial-gradient(circle at center, #1e1b4b 0%, #030712 100%);
            position: relative;
            overflow: hidden;
        }
        .warp-speed::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: radial-gradient(2px 2px at 20px 30px, #eee, rgba(0,0,0,0)),
                              radial-gradient(2px 2px at 40px 70px, #fff, rgba(0,0,0,0)),
                              radial-gradient(2px 2px at 50px 160px, #ddd, rgba(0,0,0,0));
            background-repeat: repeat;
            background-size: 200px 200px;
            opacity: 0.2;
        }
        .bento-card:hover {
            border-color: rgba(139, 92, 246, 0.4);
            transform: translateY(-2px);
            transition: all 0.3s ease;
        }
        .timeline-pulse {
            box-shadow: 0 0 0 0 rgba(59, 130, 246, 0.7);
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(59, 130, 246, 0.7); }
            70% { transform: scale(1); box-shadow: 0 0 0 10px rgba(59, 130, 246, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(59, 130, 246, 0); }
        }
    </style>
</head>

<body class="mesh-gradient min-h-screen">
    <header class="fixed top-0 z-[100] w-full bg-background-dark/50 backdrop-blur-xl border-b border-white/5">
        <div class="max-w-[1400px] mx-auto px-8 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="size-10 bg-gradient-to-tr from-primary to-accent rounded-xl flex items-center justify-center text-white shadow-lg shadow-primary/20">
                    <span class="material-symbols-outlined font-bold">rocket_launch</span>
                </div>
                <h2 class="text-xl font-display font-extrabold tracking-tight text-white uppercase italic">EvolveAi</h2>
            </div>
            <nav class="hidden lg:flex items-center justify-between gap-20">
                <a class="text-sm font-medium text-slate-400 hover:text-white transition-colors" href="#features">Features</a>
                <a class="text-sm font-medium text-slate-400 hover:text-white transition-colors" href="#how-it-works">Ecosystem</a>
                <a class="text-sm font-medium text-slate-400 hover:text-white transition-colors" href="#community">Network</a>
            </nav>
            <div class="flex items-center gap-8">
                <a class="text-sm font-semibold text-slate-400 hover:text-white transition-colors" href="/auth/login">Login</a>
                <a class="bg-white text-background-dark px-6 py-2.5 rounded-full text-sm font-bold hover:scale-105 transition-all shadow-xl" href="/auth/register">
                    Get Early Access</a>
            </div>
        </div>
    </header>
    <main>
        <section class="relative min-h-screen flex items-center pt-24 pb-32 overflow-hidden">
            <div class="max-w-[1400px] mx-auto px-8 grid lg:grid-cols-2 gap-20 items-center relative z-10">
                <div class="space-y-10">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass-morphism border-white/10">
                        <span class="flex h-2 w-2 rounded-full bg-primary animate-pulse"></span>
                        <span class="text-xs font-bold tracking-widest uppercase text-slate-400">Next-Gen Income Generation</span>
                    </div>
                    <h1 class="text-6xl md:text-8xl font-display font-black leading-[1.05] tracking-tight text-white">
                        Master AI.<br />
                        <span class="shimmer-text">Generate Alpha.</span>
                    </h1>
                    <p class="text-xl text-slate-400 max-w-xl leading-relaxed">
                        The elite ecosystem for creators to build, scale, and automate high-margin income streams using cutting-edge AI neural networks.
                    </p>
                    <div class="flex flex-wrap gap-5">
                        <button class="group relative px-10 py-5 bg-primary text-white rounded-2xl font-black text-lg overflow-hidden transition-all hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-r from-primary via-accent to-primary opacity-50 group-hover:opacity-100 transition-opacity"></div>
                            <span class="relative">Start Your Journey</span>
                        </button>
                    </div>
                    <div class="flex items-center gap-8 pt-8">
                        <div class="flex -space-x-4">
                            <div class="size-10 rounded-full border-2 border-background-dark bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuACFu8hwYC5I_987gKBdEgVhC48T_0TgjLWdrjTyU9m1DyBpS3_jUcNVu9-QdKIEGTSlkRyX-1cUUZscajqxtPkX7XQGwfTNoKO9emj13S2rwR0rS_CEuHrlRdZcmVxYiHIbUcJX8v02yxG7h2rhFiCwpb7KmhP9c57GgD6aKxsc6goaovcnh2rGJRxHoktGYLT_reQbitBb1ROZ7AW1FxmmH03l4kn5G9QyJizamK-y7JhJGSltfSZLkGFGTtTQp7oTFGrTCYN8Z2z')"></div>
                            <div class="size-10 rounded-full border-2 border-background-dark bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDG9ZSqvTGtzNpSkjoO58cXbT_xv1WwOnSSUhFFhborRGdkdtaBnHV8czNvr5plY1PYYbQGHv93rynv3uBNlNa60bd4W_OUycMygIpOoNkTObwg4okb8BhT64Yf9gGnHrw6Xy0XVpUXSJWcwPXSAoamXyAOQ2uQP0xIudkKds2akeVTEu6ZAOm69PS5BY5wHlSfKBreI2uu3ISrbuyc9MJSCcIkACVS4RHyyG2k6stCN2nLdAXzQD7fpS8yAPkLCFe3jmyyCFFw-QOa')"></div>
                            <div class="size-10 rounded-full border-2 border-background-dark bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAxgdzF6t39EZYaCOPt6PpYRvxamCvJpqVipNhfN07ThGz2aSJgU8CzTwihqJpWuZb6TVDF1xyymjMEgAZrbTFA9pxXFvq9YPVo0gHc8WeyMfTmkP21st-Q2Tu6WfPddD2dLil8_umkBLMp8mBgSk62Akx7zo2frbawqWj7JT3WONBylEHZQOP_cDUdVvfm8LOGgYMCDGCn-A6-9jUKjK_IoPvbJphWuY22CN2dB9eFhaNph2GQcvH5pXL8JafFrgLz0tgowt0YJ3lp')"></div>
                            <div class="size-10 rounded-full border-2 border-background-dark bg-slate-800 flex items-center justify-center text-[10px] font-bold text-white">+2k</div>
                        </div>
                        <p class="text-sm text-slate-500 font-medium">Joined by <span class="text-white">12,400+</span> creators this month</p>
                    </div>
                </div>
                <div class="relative">
                    <div class="relative z-10 glass-morphism p-2 rounded-[2rem] border-white/20 shadow-2xl shadow-primary/20 rotate-3 hover:rotate-0 transition-transform duration-700">
                        <div class="bg-background-dark/90 rounded-[1.8rem] p-8 overflow-hidden aspect-square flex flex-col gap-6 border border-white/5">
                            <div class="flex justify-between items-center">
                                <div class="flex gap-2">
                                    <div class="size-3 rounded-full bg-red-500/50"></div>
                                    <div class="size-3 rounded-full bg-amber-500/50"></div>
                                    <div class="size-3 rounded-full bg-emerald-500/50"></div>
                                </div>
                                <div class="text-[10px] font-mono text-slate-600 uppercase tracking-widest">Neural Link: Active</div>
                            </div>
                            <div class="h-32 bg-gradient-to-br from-white/5 to-transparent rounded-2xl border border-white/10 p-6 flex items-end">
                                <div class="flex items-baseline gap-2">
                                    <span class="text-4xl font-display font-black text-white">$42,910</span>
                                    <span class="text-xs font-bold text-emerald-400 leading-none">↑ 24%</span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="h-24 glass-morphism rounded-xl flex flex-col justify-center px-4">
                                    <span class="text-[10px] text-slate-500 font-bold uppercase mb-1">Compute</span>
                                    <div class="h-1 bg-white/10 rounded-full overflow-hidden">
                                        <div class="h-full bg-primary w-2/3"></div>
                                    </div>
                                </div>
                                <div class="h-24 glass-morphism rounded-xl flex flex-col justify-center px-4">
                                    <span class="text-[10px] text-slate-500 font-bold uppercase mb-1">Latency</span>
                                    <div class="h-1 bg-white/10 rounded-full overflow-hidden">
                                        <div class="h-full bg-accent w-1/3"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1 rounded-xl border border-dashed border-white/10 flex items-center justify-center">
                                <span class="material-symbols-outlined text-white/10 text-6xl">blur_on</span>
                            </div>
                        </div>
                    </div>
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] pointer-events-none">
                        <div class="absolute top-10 right-10 size-4 rounded-full bg-primary shadow-[0_0_30px_rgba(59,130,246,1)] animate-pulse"></div>
                        <div class="absolute bottom-20 left-10 size-3 rounded-full bg-accent shadow-[0_0_30px_rgba(139,92,246,1)] animate-pulse" style="animation-delay: 1s"></div>
                        <div class="absolute top-1/4 left-1/4 size-2 rounded-full bg-white shadow-[0_0_20px_rgba(255,255,255,0.8)] animate-pulse" style="animation-delay: 0.5s"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-32" id="features">
            <div class="max-w-[1400px] mx-auto px-8">
                <div class="flex flex-col md:flex-row justify-between items-end gap-10 mb-20">
                    <div class="max-w-2xl">
                        <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-6">Engineered for Hyper-Growth</h2>
                        <p class="text-slate-400 text-lg">Leave outdated courses behind. Access an integrated ecosystem designed for high-velocity revenue generation.</p>
                    </div>
                    <div class="hidden md:block">
                        <span class="text-slate-600 font-mono text-xs uppercase tracking-[0.3em]">Module: 01 // Features</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 grid-rows-2 gap-6 h-auto md:h-[600px]">
                    <div class="md:col-span-2 md:row-span-2 bento-card glass-morphism rounded-3xl p-10 flex flex-col justify-between group overflow-hidden relative">
                        <div class="absolute top-0 right-0 p-10 opacity-10 group-hover:opacity-20 transition-opacity">
                            <span class="material-symbols-outlined text-[180px]">show_chart</span>
                        </div>
                        <div>
                            <div class="size-14 bg-primary/20 text-primary rounded-2xl flex items-center justify-center mb-10 group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined">analytics</span>
                            </div>
                            <h3 class="text-3xl font-bold text-white mb-4">Mastery Analytics</h3>
                            <p class="text-slate-400 text-lg leading-relaxed">Visualize your skill acquisition in real-time. Our neural-map tracks your competency across 40+ high-value AI frameworks.</p>
                        </div>
                        <div class="h-32 flex items-end gap-2">
                            <div class="flex-1 bg-white/5 rounded-t-lg h-[40%]" style="transition: height 1s"></div>
                            <div class="flex-1 bg-white/10 rounded-t-lg h-[60%]"></div>
                            <div class="flex-1 bg-primary/40 rounded-t-lg h-[85%] border-t-2 border-primary"></div>
                            <div class="flex-1 bg-white/10 rounded-t-lg h-[70%]"></div>
                            <div class="flex-1 bg-white/5 rounded-t-lg h-[50%]"></div>
                            <div class="flex-1 bg-accent/40 rounded-t-lg h-[95%] border-t-2 border-accent"></div>
                        </div>
                    </div>
                    <div class="md:col-span-2 bento-card glass-morphism rounded-3xl p-8 flex items-center gap-8 group">
                        <div class="size-20 shrink-0 bg-accent/20 text-accent rounded-full flex items-center justify-center border border-accent/20 group-hover:bg-accent group-hover:text-white transition-all">
                            <span class="material-symbols-outlined text-3xl">hub</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white mb-2">Vetted Revenue Flows</h3>
                            <p class="text-sm text-slate-400">Instant access to verified high-margin AI opportunities, updated hourly by our intelligence engine.</p>
                        </div>
                    </div>
                    <div class="bento-card glass-morphism rounded-3xl p-8 group">
                        <div class="size-12 bg-white/5 text-white rounded-xl flex items-center justify-center mb-6 group-hover:bg-white group-hover:text-background-dark transition-all">
                            <span class="material-symbols-outlined">bolt</span>
                        </div>
                        <h3 class="font-bold text-white mb-2">Rapid Deploy</h3>
                        <p class="text-sm text-slate-400">One-click automation templates for instant business launch.</p>
                    </div>
                    <div class="bento-card glass-morphism rounded-3xl p-8 group">
                        <div class="size-12 bg-white/5 text-white rounded-xl flex items-center justify-center mb-6 group-hover:bg-white group-hover:text-background-dark transition-all">
                            <span class="material-symbols-outlined">shield</span>
                        </div>
                        <h3 class="font-bold text-white mb-2">Alpha Guard</h3>
                        <p class="text-sm text-slate-400">Proprietary prompts and workflows protected by encryption.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-32 relative" id="how-it-works">
            <div class="max-w-[1000px] mx-auto px-8">
                <div class="text-center mb-24">
                    <h2 class="text-4xl font-display font-bold text-white mb-4">The Evolution Protocol</h2>
                    <p class="text-slate-400">From zero to autonomous revenue in 3 precise phases.</p>
                </div>
                <div class="relative">
                    <div class="absolute left-1/2 -translate-x-1/2 h-full w-px bg-gradient-to-b from-primary via-accent to-transparent"></div>
                    <div class="space-y-32">
                        <div class="relative flex flex-col md:flex-row items-center justify-between group">
                            <div class="md:w-[42%] text-center md:text-right">
                                <h4 class="text-2xl font-bold text-white mb-3">Objective Definition</h4>
                                <p class="text-slate-400">Our neural engine analyzes your current skill set and capital to architect your optimal path.</p>
                            </div>
                            <div class="relative z-10 size-16 bg-background-dark border-4 border-primary rounded-full flex items-center justify-center timeline-pulse my-8 md:my-0">
                                <span class="text-primary font-black text-xl">01</span>
                            </div>
                            <div class="md:w-[42%] hidden md:block"></div>
                        </div>
                        <div class="relative flex flex-col md:flex-row items-center justify-between group">
                            <div class="md:w-[42%] hidden md:block"></div>
                            <div class="relative z-10 size-16 bg-background-dark border-4 border-accent rounded-full flex items-center justify-center timeline-pulse my-8 md:my-0" style="animation-delay: 0.5s">
                                <span class="text-accent font-black text-xl">02</span>
                            </div>
                            <div class="md:w-[42%] text-center md:text-left">
                                <h4 class="text-2xl font-bold text-white mb-3">Neural Onboarding</h4>
                                <p class="text-slate-400">Receive a personalized curriculum of high-impact AI tools and prompt engineering mastery modules.</p>
                            </div>
                        </div>
                        <div class="relative flex flex-col md:flex-row items-center justify-between group">
                            <div class="md:w-[42%] text-center md:text-right">
                                <h4 class="text-2xl font-bold text-white mb-3">Revenue Activation</h4>
                                <p class="text-slate-400">Deploy your first AI-driven agent and start capturing market share with automated systems.</p>
                            </div>
                            <div class="relative z-10 size-16 bg-background-dark border-4 border-white rounded-full flex items-center justify-center timeline-pulse my-8 md:my-0" style="animation-delay: 1s">
                                <span class="text-white font-black text-xl">03</span>
                            </div>
                            <div class="md:w-[42%] hidden md:block"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section  class="py-32 overflow-hidden bg-white/5" id="community">
            <div class="max-w-[1400px] mx-auto px-8 mb-16 flex justify-between items-center">
                <h2 class="text-3xl font-display font-bold text-white">The EvolveAi Network</h2>
                <div class="flex gap-2">
                    <div class="px-3 py-1 glass-morphism rounded-full text-[10px] font-bold text-emerald-400 uppercase tracking-widest border-emerald-400/20">Live Sync</div>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 px-4">
                <div class="glass-morphism p-6 rounded-2xl flex flex-col items-center text-center gap-4 hover:scale-105 transition-all">
                    <div class="size-16 rounded-full bg-cover bg-center border-2 border-primary" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuACFu8hwYC5I_987gKBdEgVhC48T_0TgjLWdrjTyU9m1DyBpS3_jUcNVu9-QdKIEGTSlkRyX-1cUUZscajqxtPkX7XQGwfTNoKO9emj13S2rwR0rS_CEuHrlRdZcmVxYiHIbUcJX8v02yxG7h2rhFiCwpb7KmhP9c57GgD6aKxsc6goaovcnh2rGJRxHoktGYLT_reQbitBb1ROZ7AW1FxmmH03l4kn5G9QyJizamK-y7JhJGSltfSZLkGFGTtTQp7oTFGrTCYN8Z2z')"></div>
                    <div>
                        <p class="font-bold text-sm">@alex_node</p>
                        <p class="text-xs text-slate-500">$12.4k / mo</p>
                    </div>
                    <div class="bg-primary/10 text-primary text-[10px] px-2 py-0.5 rounded uppercase font-black">Design Alpha</div>
                </div>
                <div class="glass-morphism p-6 rounded-2xl flex flex-col items-center text-center gap-4 hover:scale-105 transition-all md:mt-8">
                    <div class="size-16 rounded-full bg-cover bg-center border-2 border-accent" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDG9ZSqvTGtzNpSkjoO58cXbT_xv1WwOnSSUhFFhborRGdkdtaBnHV8czNvr5plY1PYYbQGHv93rynv3uBNlNa60bd4W_OUycMygIpOoNkTObwg4okb8BhT64Yf9gGnHrw6Xy0XVpUXSJWcwPXSAoamXyAOQ2uQP0xIudkKds2akeVTEu6ZAOm69PS5BY5wHlSfKBreI2uu3ISrbuyc9MJSCcIkACVS4RHyyG2k6stCN2nLdAXzQD7fpS8yAPkLCFe3jmyyCFFw-QOa')"></div>
                    <div>
                        <p class="font-bold text-sm">@sarah.eth</p>
                        <p class="text-xs text-slate-500">$8.2k / mo</p>
                    </div>
                    <div class="bg-accent/10 text-accent text-[10px] px-2 py-0.5 rounded uppercase font-black">SaaS Creator</div>
                </div>
                <div class="glass-morphism p-6 rounded-2xl flex flex-col items-center text-center gap-4 hover:scale-105 transition-all">
                    <div class="size-16 rounded-full bg-cover bg-center border-2 border-white" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAxgdzF6t39EZYaCOPt6PpYRvxamCvJpqVipNhfN07ThGz2aSJgU8CzTwihqJpWuZb6TVDF1xyymjMEgAZrbTFA9pxXFvq9YPVo0gHc8WeyMfTmkP21st-Q2Tu6WfPddD2dLil8_umkBLMp8mBgSk62Akx7zo2frbawqWj7JT3WONBylEHZQOP_cDUdVvfm8LOGgYMCDGCn-A6-9jUKjK_IoPvbJphWuY22CN2dB9eFhaNph2GQcvH5pXL8JafFrgLz0tgowt0YJ3lp')"></div>
                    <div>
                        <p class="font-bold text-sm">@m_thorne</p>
                        <p class="text-xs text-slate-500">$45.0k / mo</p>
                    </div>
                    <div class="bg-white/10 text-white text-[10px] px-2 py-0.5 rounded uppercase font-black">Agency Elite</div>
                </div>
                <div class="glass-morphism p-6 rounded-2xl flex flex-col items-center text-center gap-4 hover:scale-105 transition-all md:mt-8">
                    <div class="size-16 rounded-full bg-slate-800 flex items-center justify-center text-xl font-bold">JD</div>
                    <div>
                        <p class="font-bold text-sm">@j_doe_ai</p>
                        <p class="text-xs text-slate-500">$5.1k / mo</p>
                    </div>
                    <div class="bg-emerald-400/10 text-emerald-400 text-[10px] px-2 py-0.5 rounded uppercase font-black">Copy Wizard</div>
                </div>
                <div class="glass-morphism p-6 rounded-2xl flex flex-col items-center text-center gap-4 hover:scale-105 transition-all">
                    <div class="size-16 rounded-full bg-slate-700 flex items-center justify-center text-xl font-bold">BK</div>
                    <div>
                        <p class="font-bold text-sm">@king.beta</p>
                        <p class="text-xs text-slate-500">$19.8k / mo</p>
                    </div>
                    <div class="bg-primary/10 text-primary text-[10px] px-2 py-0.5 rounded uppercase font-black">Ops Master</div>
                </div>
            </div>
        </section>
        <section class="py-40 warp-speed">
            <div class="max-w-[1400px] mx-auto px-8 relative z-10 text-center">
                <h2 class="text-5xl md:text-8xl font-display font-black text-white mb-10 tracking-tight">
                    THE FUTURE IS <span class="text-primary italic">AUTONOMOUS.</span>
                </h2>
                <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto mb-16 font-medium leading-relaxed">
                    Will you be a spectator, or will you build the engine? Join the elite hub of AI innovators today.
                </p>
                <div class="flex flex-col items-center gap-8">
                    <button class="px-16 py-8 bg-white text-background-dark rounded-full font-black text-2xl hover:bg-primary hover:text-white transition-all hover:scale-110 shadow-[0_0_50px_rgba(255,255,255,0.3)]">
                        Unlock Your AI Future
                    </button>
                    <div class="flex items-center gap-4 text-slate-500 font-mono text-xs uppercase tracking-widest">
                        <span>No subscription needed</span>
                        <span class="size-1 rounded-full bg-slate-700"></span>
                        <span>Direct API access</span>
                        <span class="size-1 rounded-full bg-slate-700"></span>
                        <span>Global Network</span>
                    </div>
                </div>
            </div>
            <div class="absolute inset-0 opacity-30 pointer-events-none">
                <div class="absolute top-1/2 left-0 w-full h-px bg-gradient-to-r from-transparent via-primary to-transparent rotate-12"></div>
                <div class="absolute top-1/2 left-0 w-full h-px bg-gradient-to-r from-transparent via-accent to-transparent -rotate-12"></div>
            </div>
        </section>
    </main>
    <footer class="bg-background-dark border-t border-white/5 py-24">
        <div class="max-w-[1400px] mx-auto px-8 grid grid-cols-2 lg:grid-cols-6 gap-16">
            <div class="col-span-2">
                <div class="flex items-center gap-3 mb-8">
                    <div class="size-8 bg-gradient-to-tr from-primary to-accent rounded-lg flex items-center justify-center text-white">
                        <span class="material-symbols-outlined text-sm">rocket_launch</span>
                    </div>
                    <span class="text-lg font-display font-extrabold text-white tracking-tight uppercase italic">EvolveAi

                    </span>
                </div>
                <p class="text-slate-500 text-sm leading-relaxed mb-10 max-w-xs">
                    The global infrastructure for AI-leveraged wealth creation. Built for the modern digital pioneer.
                </p>
                <div class="flex gap-6">
                    <a class="text-slate-600 hover:text-white transition-colors" href="#"><span class="material-symbols-outlined">alternate_email</span></a>
                    <a class="text-slate-600 hover:text-white transition-colors" href="#"><span class="material-symbols-outlined">hub</span></a>
                    <a class="text-slate-600 hover:text-white transition-colors" href="#"><span class="material-symbols-outlined">terminal</span></a>
                </div>
            </div>
            <div>
                <h5 class="text-white font-bold mb-8 uppercase text-xs tracking-widest">System</h5>
                <ul class="space-y-4 text-sm text-slate-500 font-medium">
                    <li><a class="hover:text-primary transition-colors" href="#">Neural Maps</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">Flow Engine</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">Vault</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">API Docs</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-white font-bold mb-8 uppercase text-xs tracking-widest">Collective</h5>
                <ul class="space-y-4 text-sm text-slate-500 font-medium">
                    <li><a class="hover:text-primary transition-colors" href="#">Network</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">Live Feed</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">Elite Program</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">Governance</a></li>
                </ul>
            </div>
            <div class="col-span-2">
                <h5 class="text-white font-bold mb-8 uppercase text-xs tracking-widest">Status</h5>
                <div class="glass-morphism rounded-2xl p-6 border-white/5">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-[10px] text-slate-400 font-bold uppercase tracking-widest">System Load</span>
                        <span class="text-[10px] text-emerald-400 font-bold uppercase tracking-widest">Optimal</span>
                    </div>
                    <div class="h-1 bg-white/5 rounded-full overflow-hidden mb-6">
                        <div class="h-full bg-emerald-400 w-1/4"></div>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed">Global node distribution active across 42 regions. Real-time arbitrage sync: 12ms.</p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>