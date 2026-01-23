<?php

if (!isset($_SESSION['user_id'])) {
    header('Location: /login');
    exit;
}

$surveyResponses = $surveyResponses ?? [];
$opportunities = $opportunities ?? [];
$hasSurvey = !empty($surveyResponses);
?>
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <title>AI Opportunities - EvolveAI</title>
    <?php require __DIR__ . '/../layouts/head.php'; ?>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-[#0d121b] dark:text-white">
    <div class="flex h-screen overflow-hidden">
        <!-- SideNavBar -->
        <?php require __DIR__ . '/../layouts/sidebar.php'; ?>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto bg-background-light dark:bg-background-dark scroll-smooth">
            <div class="max-w-7xl mx-auto px-8 py-8">
                <!-- Page Header -->
                <header class="mb-8">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div>
                            <h1 class="text-[#0d121b] dark:text-white text-4xl font-black leading-tight tracking-tight mb-2">
                                AI-Generated Opportunities
                            </h1>
                            <p class="text-[#4c669a] dark:text-slate-400 text-lg">
                                Personalized income opportunities based on your survey responses
                            </p>
                        </div>
                        <?php if ($hasSurvey): ?>
                            <button
                                onclick="generateOpportunities()"
                                id="generateBtn"
                                class="px-6 py-3 bg-primary hover:bg-blue-700 text-white font-bold rounded-xl transition-all shadow-lg shadow-primary/25 flex items-center gap-2 group">
                                <span class="material-symbols-outlined">auto_awesome</span>
                                Generate New Opportunities
                            </button>
                        <?php else: ?>
                            <a
                                href="/questionnaire"
                                class="px-6 py-3 bg-amber-500 hover:bg-amber-600 text-white font-bold rounded-xl transition-all shadow-lg flex items-center gap-2">
                                <span class="material-symbols-outlined">quiz</span>
                                Complete Survey First
                            </a>
                        <?php endif; ?>
                    </div>
                </header>

                <?php if (!$hasSurvey): ?>
                    <!-- No Survey Message -->
                    <div class="bg-gradient-to-br from-amber-50 to-orange-50 dark:from-amber-900/20 dark:to-orange-900/20 border-2 border-amber-200 dark:border-amber-800 rounded-2xl p-8 text-center">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-amber-100 dark:bg-amber-900/40 rounded-full mb-4">
                            <span class="material-symbols-outlined text-4xl text-amber-600">quiz</span>
                        </div>
                        <h2 class="text-2xl font-bold text-[#0d121b] dark:text-white mb-2">Complete Your Survey</h2>
                        <p class="text-[#4c669a] dark:text-slate-400 max-w-md mx-auto mb-6">
                            To generate personalized AI opportunities, we need to understand your goals, skills, and interests. Please complete the survey first.
                        </p>
                        <a
                            href="/questionnaire"
                            class="inline-flex items-center gap-2 px-8 py-4 bg-amber-500 hover:bg-amber-600 text-white font-bold rounded-xl transition-all shadow-lg">
                            Start Survey
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                    </div>
                <?php else: ?>

                    <!-- Survey Summary Card -->
                    <section class="mb-8">
                        <div class="bg-white dark:bg-slate-900 border border-[#cfd7e7] dark:border-slate-800 rounded-xl p-6 shadow-sm">
                            <h2 class="text-xl font-bold mb-4 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">person</span>
                                Your Profile Summary
                            </h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                                <?php
                                $survey = $surveyResponses[0];
                                $profileItems = [
                                    ['icon' => 'target', 'label' => 'Main Goal', 'value' => $survey['main_goal'] ?? 'Not specified'],
                                    ['icon' => 'work', 'label' => 'Employment', 'value' => $survey['employment_status'] ?? 'Not specified'],
                                    ['icon' => 'schedule', 'label' => 'Time Available', 'value' => $survey['daily_time_investment'] ?? 'Not specified'],
                                    ['icon' => 'psychology', 'label' => 'AI Confidence', 'value' => $survey['ai_confidence'] ?? 'Not specified'],
                                ];
                                foreach ($profileItems as $item): ?>
                                    <div class="flex items-start gap-3 p-3 bg-slate-50 dark:bg-slate-800/50 rounded-lg">
                                        <div class="flex items-center justify-center w-10 h-10 bg-primary/10 text-primary rounded-lg flex-shrink-0">
                                            <span class="material-symbols-outlined text-xl"><?= $item['icon'] ?></span>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-xs text-[#4c669a] dark:text-slate-400 font-semibold uppercase tracking-wide"><?= $item['label'] ?></p>
                                            <p class="text-sm font-bold text-[#0d121b] dark:text-white truncate"><?= htmlspecialchars($item['value']) ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </section>

                    <!-- AI Opportunities Container -->
                    <section>
                        <div class="mb-4 flex items-center justify-between">
                            <h2 class="text-2xl font-bold text-[#0d121b] dark:text-white flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">lightbulb</span>
                                Your Personalized Opportunities
                            </h2>
                            <div id="loadingIndicator" class="hidden">
                                <div class="flex items-center gap-2 text-primary">
                                    <div class="animate-spin rounded-full h-5 w-5 border-b-2 border-primary"></div>
                                    <span class="text-sm font-semibold">Generating...</span>
                                </div>
                            </div>
                        </div>

                        <!-- AI Generated Content Container -->
                        <div id="aiOpportunitiesContainer" class="bg-white dark:bg-slate-900 border border-[#cfd7e7] dark:border-slate-800 rounded-xl overflow-hidden shadow-sm">
                            <div class="p-12 text-center">
                                <div class="inline-flex items-center justify-center w-20 h-20 bg-primary/10 rounded-full mb-4">
                                    <span class="material-symbols-outlined text-5xl text-primary">auto_awesome</span>
                                </div>
                                <h3 class="text-xl font-bold text-[#0d121b] dark:text-white mb-2">Ready to Discover Opportunities</h3>
                                <p class="text-[#4c669a] dark:text-slate-400 mb-6 max-w-md mx-auto">
                                    Click "Generate New Opportunities" to get AI-powered recommendations tailored to your profile.
                                </p>
                                <button
                                    onclick="generateOpportunities()"
                                    class="inline-flex items-center gap-2 px-8 py-4 bg-primary hover:bg-blue-700 text-white font-bold rounded-xl transition-all shadow-lg shadow-primary/25">
                                    <span class="material-symbols-outlined">auto_awesome</span>
                                    Generate Opportunities
                                </button>
                            </div>
                        </div>
                    </section>

                    <!-- Existing Opportunities -->
                    <?php if (!empty($opportunities)): ?>
                        <section class="mt-8">
                            <h2 class="text-2xl font-bold text-[#0d121b] dark:text-white mb-4 flex items-center gap-2">
                                <span class="material-symbols-outlined text-green-600">bookmark</span>
                                Saved Opportunities
                            </h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <?php foreach ($opportunities as $opp): ?>
                                    <div class="bg-white dark:bg-slate-900 border border-[#cfd7e7] dark:border-slate-800 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all">
                                        <div class="h-2 bg-gradient-to-r from-primary to-blue-700"></div>
                                        <div class="p-6">
                                            <h3 class="text-lg font-bold text-[#0d121b] dark:text-white mb-2"><?= htmlspecialchars($opp['title']) ?></h3>
                                            <p class="text-sm text-[#4c669a] dark:text-slate-400 mb-4"><?= htmlspecialchars($opp['description']) ?></p>

                                            <?php if (!empty($opp['required_skill'])): ?>
                                                <div class="mb-4">
                                                    <p class="text-xs text-[#4c669a] dark:text-slate-400 font-semibold mb-2">Required Skills:</p>
                                                    <div class="flex flex-wrap gap-2">
                                                        <?php
                                                        $skills = explode(',', $opp['required_skill']);
                                                        foreach ($skills as $skill): ?>
                                                            <span class="px-2 py-1 bg-purple-100 dark:bg-purple-900/40 text-purple-700 dark:text-purple-300 text-xs font-bold rounded">
                                                                <?= htmlspecialchars(trim($skill)) ?>
                                                            </span>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <div class="flex items-center justify-between pt-4 border-t border-slate-100 dark:border-slate-800">
                                                <?php if (!empty($opp['money_gain'])): ?>
                                                    <span class="text-primary font-bold text-sm">$<?= number_format($opp['money_gain'], 2) ?></span>
                                                <?php else: ?>
                                                    <span class="text-[#4c669a] dark:text-slate-400 text-sm">Income varies</span>
                                                <?php endif; ?>

                                                <?php if (!empty($opp['link'])): ?>
                                                    <a href="<?= htmlspecialchars($opp['link']) ?>" target="_blank" class="text-xs font-bold text-primary flex items-center gap-1 hover:text-blue-700 transition-colors">
                                                        View Details
                                                        <span class="material-symbols-outlined text-sm">open_in_new</span>
                                                    </a>
                                                <?php endif; ?>
                                            </div>

                                            <div class="mt-4">
                                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold uppercase
                                        <?php
                                        echo match ($opp['status']) {
                                            'in_progress' => 'bg-blue-100 dark:bg-blue-900/40 text-blue-700 dark:text-blue-300',
                                            'completed' => 'bg-green-100 dark:bg-green-900/40 text-green-700 dark:text-green-300',
                                            default => 'bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300'
                                        };
                                        ?>">
                                                    <?= htmlspecialchars($opp['status']) ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </section>
                    <?php endif; ?>

                <?php endif; ?>
            </div>
        </main>
    </div>

    <script>
        async function generateOpportunities() {
            const container = document.getElementById('aiOpportunitiesContainer');
            const loadingIndicator = document.getElementById('loadingIndicator');
            const generateBtn = document.getElementById('generateBtn');

            // Show loading state
            loadingIndicator.classList.remove('hidden');
            if (generateBtn) {
                generateBtn.disabled = true;
                generateBtn.classList.add('opacity-50', 'cursor-not-allowed');
            }

            container.innerHTML = `
                <div class="p-12 text-center">
                    <div class="inline-flex items-center justify-center w-20 h-20 mb-4">
                        <div class="animate-spin rounded-full h-16 w-16 border-b-4 border-primary"></div>
                    </div>
                    <h3 class="text-xl font-bold text-[#0d121b] dark:text-white mb-2">Generating Your Opportunities...</h3>
                    <p class="text-[#4c669a] dark:text-slate-400">
                        Our AI is analyzing your profile and finding the best opportunities for you.
                    </p>
                </div>
            `;

            try {
                const response = await fetch('/opportunity/generateFromSurvey', {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json'
                    }
                });

                if (!response.ok) {
                    const errorData = await response.json().catch(() => ({
                        error: `HTTP error ${response.status}`
                    }));
                    throw new Error(errorData.error || errorData.message || `HTTP error! status: ${response.status}`);
                }

                const data = await response.json();

                if (data.status !== 'success' || !data.opportunities || data.opportunities.length === 0) {
                    throw new Error('No opportunities were generated. Please try again.');
                }

                // Render the opportunities
                container.innerHTML = renderOpportunities(data.opportunities);

                // Add event listeners to any buttons in the generated content
                initializeOpportunityButtons();

            } catch (error) {
                console.error('Error generating opportunities:', error);
                container.innerHTML = `
                    <div class="p-8 text-center">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 dark:bg-red-900/40 rounded-full mb-4">
                            <span class="material-symbols-outlined text-4xl text-red-600">error</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#0d121b] dark:text-white mb-2">Error Generating Opportunities</h3>
                        <p class="text-[#4c669a] dark:text-slate-400 mb-6">
                            ${error.message || 'An unexpected error occurred. Please try again.'}
                        </p>
                        <button 
                            onclick="generateOpportunities()" 
                            class="px-6 py-3 bg-primary hover:bg-blue-700 text-white font-bold rounded-lg transition-all">
                            Try Again
                        </button>
                    </div>
                `;
            } finally {
                loadingIndicator.classList.add('hidden');
                if (generateBtn) {
                    generateBtn.disabled = false;
                    generateBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                }
            }
        }

        function renderOpportunities(opportunities) {
            const grid = opportunities.map((opp, index) => {
                const skills = Array.isArray(opp.skills) ? opp.skills : (typeof opp.skills === 'string' ? opp.skills.split(',') : []);
                const skillBadges = skills.map(skill =>
                    `<span class="px-2 py-1 bg-purple-100 dark:bg-purple-900/40 text-purple-700 dark:text-purple-300 text-xs font-bold rounded">${escapeHtml(skill.trim())}</span>`
                ).join('');

                return `
                    <div class="bg-white dark:bg-slate-900 border border-[#cfd7e7] dark:border-slate-800 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all">
                        <div class="h-2 bg-gradient-to-r from-primary to-blue-700"></div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-[#0d121b] dark:text-white mb-2">${escapeHtml(opp.title)}</h3>
                            <p class="text-sm text-[#4c669a] dark:text-slate-400 mb-4">${escapeHtml(opp.description)}</p>
                            
                            ${skills.length > 0 ? `
                            <div class="mb-4">
                                <p class="text-xs text-[#4c669a] dark:text-slate-400 font-semibold mb-2">Required Skills:</p>
                                <div class="flex flex-wrap gap-2">
                                    ${skillBadges}
                                </div>
                            </div>
                            ` : ''}

                            <div class="flex items-center justify-between pt-4 border-t border-slate-100 dark:border-slate-800">
                                <span class="text-primary font-bold text-sm">$${escapeHtml(opp.PossibleGain || '0')}</span>
                                
                                ${opp.link ? `
                                <a href="${escapeHtml(opp.link)}" target="_blank" class="text-xs font-bold text-primary flex items-center gap-1 hover:text-blue-700 transition-colors">
                                    View Details
                                    <span class="material-symbols-outlined text-sm">open_in_new</span>
                                </a>
                                ` : ''}
                            </div>
                            
                            <div class="mt-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold uppercase bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">
                                    ${escapeHtml(opp.status || 'not_started')}
                                </span>
                            </div>
                        </div>
                    </div>
                `;
            }).join('');

            return `
                <div class="p-6">
                    <div class="mb-4 flex items-center justify-between">
                        <h3 class="text-xl font-bold text-[#0d121b] dark:text-white">
                            ${opportunities.length} Opportunities Found
                        </h3>
                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/40 text-green-700 dark:text-green-300 text-xs font-bold rounded-full">
                            AI Generated
                        </span>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        ${grid}
                    </div>
                </div>
            `;
        }

        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }

        function initializeOpportunityButtons() {
            // Add any custom JavaScript for the generated opportunity cards
            console.log('Opportunity buttons initialized');
        }

        // Auto-generate on page load if needed
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.get('auto') === 'true') {
                generateOpportunities();
            }
        });
    </script>
</body>

</html>