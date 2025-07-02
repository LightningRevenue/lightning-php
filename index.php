<?php
require_once 'components/navbar.php';
require_once 'components/footer.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lightning - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <?php renderNavbar('home'); ?>

    <main>
        <!-- Hero Section -->
        <section class="bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Column - Text Content -->
                    <div class="space-y-8">
                        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">
                            Agentie Marketing Bucuresti cu <span class="text-blue-600">REZULTATE RAPIDE</span>
                        </h1>
                        <div class="text-xl text-gray-600 space-y-4">
                            <p>
                                Suntem o <a href="/lightning-revenue/pages/despre-noi.php" class="text-blue-600 hover:text-blue-700 underline">agenție de marketing digital</a> din București specializată în:
                            </p>
                            <ul class="space-y-2 ml-4">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <a href="/lightning-revenue/pages/servicii/google-ads.php" class="hover:text-blue-600 transition-colors">
                                        Campanii Google Ads performante
                                    </a>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <a href="/lightning-revenue/pages/servicii/seo.php" class="hover:text-blue-600 transition-colors">
                                        Optimizare SEO pentru vizibilitate maximă
                                    </a>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <a href="/lightning-revenue/pages/servicii/web-development.php" class="hover:text-blue-600 transition-colors">
                                        Dezvoltare website-uri și magazine online
                                    </a>
                                </li>
                            </ul>
                            <p class="pt-2">
                                Descoperă cum putem să <a href="/lightning-revenue/pages/servicii/analytics.php" class="text-blue-600 hover:text-blue-700 underline">măsurăm și să îmbunătățim</a> prezența ta online pentru rezultate excepționale.
                            </p>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="/lightning-revenue/pages/contact.php" 
                               class="inline-flex justify-center items-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition duration-150">
                                Contactează-ne
                                <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <a href="/lightning-revenue/pages/portofoliu.php"
                               class="inline-flex justify-center items-center px-8 py-3 border border-gray-300 text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 transition duration-150">
                                Vezi Portofoliu
                            </a>
                        </div>

                        <!-- Trust Indicators -->
                        <div class="pt-8 border-t border-gray-200">
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 items-center">
                                <a href="/lightning-revenue/pages/testimoniale.php" class="flex items-center space-x-2 hover:text-blue-600 transition-colors">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-600">100+ Clienți mulțumiți</span>
                                </a>
                                <a href="/lightning-revenue/pages/certificari.php" class="flex items-center space-x-2 hover:text-blue-600 transition-colors">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-600">Expertiză certificată</span>
                                </a>
                                <a href="/lightning-revenue/pages/suport.php" class="flex items-center space-x-2 hover:text-blue-600 transition-colors">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-600">Suport 24/7</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Image -->
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl transform rotate-6 scale-105 opacity-10"></div>
                        <img src="/lightning-revenue/assets/images/marketing-agency-hero-image-acasa.jpg"
                             alt="Agenție Marketing Digital București"
                             class="relative rounded-2xl shadow-2xl object-cover w-full h-[600px]">
                        <!-- Floating Elements -->
                        <div class="absolute -bottom-6 -left-6 bg-white rounded-lg shadow-lg p-4 flex items-center space-x-4">
                            <div class="bg-blue-600 rounded-full p-2">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-900">Creștere Garantată</p>
                                <p class="text-xs text-gray-600">ROI măsurabil</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tags Section -->
        <section class="py-8 bg-gray-50 border-y border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap justify-center gap-3 text-sm">
                    <a href="/lightning-revenue/servicii/marketing-digital-bucuresti" 
                       class="px-4 py-2 rounded-full bg-white text-gray-600 hover:text-blue-600 hover:shadow-md transition duration-300 border border-gray-200">
                        Agentie Marketing Bucuresti
                    </a>
                    <a href="/lightning-revenue/servicii/seo-bucuresti" 
                       class="px-4 py-2 rounded-full bg-white text-gray-600 hover:text-blue-600 hover:shadow-md transition duration-300 border border-gray-200">
                        Agentie SEO Bucuresti
                    </a>
                    <a href="/lightning-revenue/servicii/dezvoltare-website-bucuresti" 
                       class="px-4 py-2 rounded-full bg-white text-gray-600 hover:text-blue-600 hover:shadow-md transition duration-300 border border-gray-200">
                        Dezvoltare Website Bucuresti
                    </a>
                    <a href="/lightning-revenue/servicii/email-marketing-bucuresti" 
                       class="px-4 py-2 rounded-full bg-white text-gray-600 hover:text-blue-600 hover:shadow-md transition duration-300 border border-gray-200">
                        Email Marketing Bucuresti
                    </a>
                    <a href="/lightning-revenue/servicii/servicii-marketing-bucuresti" 
                       class="px-4 py-2 rounded-full bg-white text-gray-600 hover:text-blue-600 hover:shadow-md transition duration-300 border border-gray-200">
                        Servicii Marketing Bucuresti
                    </a>
                    <a href="/lightning-revenue/servicii/pr-bucuresti" 
                       class="px-4 py-2 rounded-full bg-white text-gray-600 hover:text-blue-600 hover:shadow-md transition duration-300 border border-gray-200">
                        PR Bucuresti
                    </a>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-20 px-6 bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">
                        Servicii Marketing Digital Bucuresti
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Oferim servicii complete de marketing digital pentru creșterea afacerii tale online
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Google Ads -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                        <a href="/lightning-revenue/pages/servicii/google-ads.php" class="block">
                            <div class="p-8">
                                <div class="text-blue-600 mb-4">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Google Ads</h3>
                                <ul class="text-gray-600 space-y-2">
                                    <li>• Campanii Search</li>
                                    <li>• Campanii Display</li>
                                    <li>• Remarketing</li>
                                    <li>• Shopping Ads</li>
                                </ul>
                                <div class="mt-4 flex items-center text-blue-600">
                                    <span class="text-sm font-medium">Află mai multe</span>
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- SEO -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                        <a href="/lightning-revenue/pages/servicii/seo.php" class="block">
                            <div class="p-8">
                                <div class="text-blue-600 mb-4">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Optimizare SEO</h3>
                                <ul class="text-gray-600 space-y-2">
                                    <li>• Audit SEO</li>
                                    <li>• Optimizare On-Page</li>
                                    <li>• Link Building</li>
                                    <li>• Content Marketing</li>
                                </ul>
                                <div class="mt-4 flex items-center text-blue-600">
                                    <span class="text-sm font-medium">Află mai multe</span>
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Email Marketing -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                        <a href="/lightning-revenue/pages/servicii/email-marketing.php" class="block">
                            <div class="p-8">
                                <div class="text-blue-600 mb-4">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Email Marketing</h3>
                                <ul class="text-gray-600 space-y-2">
                                    <li>• Automatizări Email</li>
                                    <li>• Newsletter Marketing</li>
                                    <li>• Campanii Personalizate</li>
                                    <li>• A/B Testing</li>
                                </ul>
                                <div class="mt-4 flex items-center text-blue-600">
                                    <span class="text-sm font-medium">Află mai multe</span>
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Social Media -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                        <a href="/lightning-revenue/pages/servicii/social-media.php" class="block">
                            <div class="p-8">
                                <div class="text-blue-600 mb-4">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Social Media</h3>
                                <ul class="text-gray-600 space-y-2">
                                    <li>• Facebook Ads</li>
                                    <li>• Instagram Marketing</li>
                                    <li>• LinkedIn Ads</li>
                                    <li>• Content Creation</li>
                                </ul>
                                <div class="mt-4 flex items-center text-blue-600">
                                    <span class="text-sm font-medium">Află mai multe</span>
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Web Development -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                        <a href="/lightning-revenue/pages/servicii/web-development.php" class="block">
                            <div class="p-8">
                                <div class="text-blue-600 mb-4">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Web Development</h3>
                                <ul class="text-gray-600 space-y-2">
                                    <li>• Website-uri Corporate</li>
                                    <li>• Magazine Online</li>
                                    <li>• Landing Pages</li>
                                    <li>• Website Maintenance</li>
                                </ul>
                                <div class="mt-4 flex items-center text-blue-600">
                                    <span class="text-sm font-medium">Află mai multe</span>
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Analytics & Reporting -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                        <a href="/lightning-revenue/pages/servicii/analytics.php" class="block">
                            <div class="p-8">
                                <div class="text-blue-600 mb-4">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Analytics & Reporting</h3>
                                <ul class="text-gray-600 space-y-2">
                                    <li>• Google Analytics</li>
                                    <li>• Rapoarte Personalizate</li>
                                    <li>• Analiza Competiției</li>
                                    <li>• Optimizare Conversii</li>
                                </ul>
                                <div class="mt-4 flex items-center text-blue-600">
                                    <span class="text-sm font-medium">Află mai multe</span>
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comparison Section -->
        <section class="py-16 bg-gradient-to-br from-gray-50 to-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">De ce LightningRevenue?</h2>
                    <p class="text-lg text-gray-600">Diferența dintre o agenție care livrează rezultate și una care livrează promisiuni</p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-8 mt-12">
                    <!-- LightningRevenue Column -->
                    <div class="bg-white p-8 rounded-xl shadow-lg border-2 border-blue-500">
                        <div class="flex items-center mb-6">
                            <div class="bg-blue-500 rounded-full p-2">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-blue-500 ml-3">LightningRevenue</h3>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Google Ads si Remarketing pentru rezultate rapide</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Dezvoltare Website-uri Rapide si Responsive</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Optimizare SEO pentru rezultate sustenabile</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Social Media Marketing pentru creștere de brand</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Solutii Scalabile pentru creștere de afaceri</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Generic Agencies Column -->
                    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200">
                        <div class="flex items-center mb-6">
                            <div class="bg-gray-400 rounded-full p-2">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-400 ml-3">Agenții Generici</h3>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-gray-400 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                <span class="text-gray-600">Abordare tip șablon pentru toți clienții</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-gray-400 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                <span class="text-gray-600">Raportare limitată și întârziată</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-gray-400 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                <span class="text-gray-600">Focus pe metrici irelevante pentru business</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-gray-400 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                <span class="text-gray-600">Resurse împărțite între mai mulți clienți</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-gray-400 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                <span class="text-gray-600">Implementare lentă și optimizări rare</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <a href="/lightning-revenue/contact" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition duration-300">
                        Discută cu un expert
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Avantajele Tale cu LightningRevenue</h2>
                    <p class="text-lg text-gray-600">Rezultate concrete pentru afacerea ta</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Benefit 1 -->
                    <div class="relative p-8 bg-gradient-to-br from-blue-50 to-white rounded-xl shadow-sm border border-blue-100 overflow-hidden">
                        <div class="absolute top-0 right-0 w-20 h-20 transform translate-x-6 -translate-y-6">
                            <svg class="w-full h-full text-blue-100" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Creștere Rapidă</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Primele rezultate în 30 de zile</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Creștere organică sustenabilă</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Optimizare continuă a performanței</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Benefit 2 -->
                    <div class="relative p-8 bg-gradient-to-br from-blue-50 to-white rounded-xl shadow-sm border border-blue-100 overflow-hidden">
                        <div class="absolute top-0 right-0 w-20 h-20 transform translate-x-6 -translate-y-6">
                            <svg class="w-full h-full text-blue-100" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">ROI Garantat</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Investiție cu return măsurabil</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Rapoarte clare de performanță</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Fără costuri ascunse</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Benefit 3 -->
                    <div class="relative p-8 bg-gradient-to-br from-blue-50 to-white rounded-xl shadow-sm border border-blue-100 overflow-hidden">
                        <div class="absolute top-0 right-0 w-20 h-20 transform translate-x-6 -translate-y-6">
                            <svg class="w-full h-full text-blue-100" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-2 14l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Calitate Asigurata</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Campanii de Marketing Profesionale</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Dezvoltare Website-uri Rapide si Responsive</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Strategii de SEO performante</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Quick Contact Form -->
                <div class="mt-12 p-8 bg-white rounded-xl shadow-lg border border-blue-100">
                    <h4 class="text-2xl font-bold text-center text-gray-900 mb-6">
                        Vrei să Crești Afacerea Ta?
                    </h4>
                    <p class="text-center text-gray-600 mb-8">
                        Completează formularul și te contactăm în maxim 24 de ore
                    </p>
                    <form action="/lightning-revenue/process-form.php" method="POST" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="nume" class="block text-sm font-medium text-gray-700 mb-1">Nume</label>
                                <input type="text" name="nume" id="nume" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div>
                                <label for="prenume" class="block text-sm font-medium text-gray-700 mb-1">Prenume</label>
                                <input type="text" name="prenume" id="prenume" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" name="email" id="email" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div>
                                <label for="telefon" class="block text-sm font-medium text-gray-700 mb-1">Număr de Telefon</label>
                                <input type="tel" name="telefon" id="telefon" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>
                        <div>
                            <label for="mesaj" class="block text-sm font-medium text-gray-700 mb-1">Mesaj Scurt</label>
                            <textarea name="mesaj" id="mesaj" rows="3" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Spune-ne mai multe despre obiectivele tale..."></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" 
                                class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300">
                                Vreau să Cresc Online
                                <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </section>

        <!-- Detailed Services Section -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Creștem Afaceri în București prin Marketing Digital</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        De la vizibilitate online până la conversii, construim strategii complete de marketing digital pentru rezultate pe termen lung
                    </p>
                </div>

                <div class="prose prose-lg max-w-none text-gray-600">
                    <div class="bg-white rounded-xl p-8 shadow-sm mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Abordarea Noastră pentru Succesul Tău Digital</h3>
                        
                        <p class="mb-6">
                            În peisajul dinamic al mediului de afaceri din București, prezența online puternică nu mai este un lux, ci o necesitate. 
                            La <strong>LightningRevenue</strong>, înțelegem că fiecare afacere este unică și necesită o strategie personalizată pentru a excela în mediul digital.
                        </p>

                        <p class="mb-8">
                            Serviciile noastre sunt integrate într-un ecosistem digital complet, unde fiecare componentă lucrează în sinergie pentru a maximiza rezultatele tale:
                        </p>

                        <div class="space-y-12">
                            <div>
                                <h4 class="text-xl font-semibold text-gray-900 mb-4">
                                    <a href="/lightning-revenue/promovare-google-ads-promovare-online" class="text-blue-600 hover:text-blue-700">
                                        1. Campanii Google Ads cu Impact Imediat
                                    </a>
                                </h4>
                                <p class="mb-4">
                                    Generăm rezultate rapide prin campanii Google Ads optimizate pentru piața din București. Abordarea noastră include:
                                </p>
                                <ul class="list-disc pl-6 mb-4 space-y-2">
                                    <li>Cercetare detaliată a cuvintelor cheie relevante pentru afacerea ta</li>
                                    <li>Setarea campaniilor Search și Display cu targeting precis</li>
                                    <li>Optimizare continuă pentru reducerea costului per conversie</li>
                                    <li>Remarketing inteligent pentru maximizarea ratei de conversie</li>
                                </ul>
                                <p>
                                    Campaniile noastre sunt construite pentru a aduce <strong>rezultate măsurabile</strong>, cu focus pe ROI și creșterea constantă a performanței.
                                </p>
                            </div>

                            <div>
                                <h4 class="text-xl font-semibold text-gray-900 mb-4">
                                    <a href="/lightning-revenue/servicii/seo-bucuresti" class="text-blue-600 hover:text-blue-700">
                                        2. Optimizare SEO pentru Creștere Organică
                                    </a>
                                </h4>
                                <p class="mb-4">
                                    Construim fundația succesului tău digital prin strategii SEO comprehensive, adaptate pentru piața din București:
                                </p>
                                <ul class="list-disc pl-6 mb-4 space-y-2">
                                    <li>Analiză tehnică aprofundată și optimizare on-page</li>
                                    <li>Crearea de conținut valoros, optimizat pentru intențiile de căutare</li>
                                    <li>Strategii de link building etice și eficiente</li>
                                    <li>Monitorizare și ajustare continuă a strategiei</li>
                                </ul>
                                <p>
                                    Rezultatul? <strong>Vizibilitate crescută</strong> în căutările organice și trafic de calitate pentru website-ul tău.
                                </p>
                            </div>

                            <div>
                                <h4 class="text-xl font-semibold text-gray-900 mb-4">
                                    <a href="/lightning-revenue/servicii/dezvoltare-website-bucuresti" class="text-blue-600 hover:text-blue-700">
                                        3. Website-uri Performante pentru Afaceri Mici si Mijlocii
                                    </a>
                                </h4>
                                <p class="mb-4">
                                    Dezvoltăm platforme web care nu doar arată bine, ci și convertesc vizitatorii în clienți:
                                </p>
                                <ul class="list-disc pl-6 mb-4 space-y-2">
                                    <li>Design modern și responsive, optimizat pentru toate dispozitivele</li>
                                    <li>Viteză de încărcare excelentă și performanță tehnică</li>
                                    <li>Integrare cu instrumente de marketing și analytics</li>
                                    <li>Focus pe experiența utilizatorului și rate de conversie</li>
                                </ul>
                            </div>

                            <div>
                                <h4 class="text-xl font-semibold text-gray-900 mb-4">
                                    <a href="/lightning-revenue/promovare-google-ads-promovare-online" class="text-blue-600 hover:text-blue-700">
                                        4. Social Media Marketing Strategic
                                    </a>
                                </h4>
                                <p class="mb-4">
                                    Transformăm prezența ta în social media într-un canal de creștere pentru brand și vânzări:
                                </p>
                                <ul class="list-disc pl-6 mb-4 space-y-2">
                                    <li>Strategii personalizate pentru Facebook, Instagram și LinkedIn</li>
                                    <li>Conținut creativ care rezonează cu audiența ta</li>
                                    <li>Campanii de advertising targetate pentru rezultate maxime</li>
                                    <li>Construirea și gestionarea unei comunități active</li>
                                </ul>
                            </div>

                            <div>
                                <h4 class="text-xl font-semibold text-gray-900 mb-4">
                                    <a href="/lightning-revenue/promovare-google-ads-promovare-online" class="text-blue-600 hover:text-blue-700">
                                        5. Email Marketing pentru Fidelizare și Conversii
                                    </a>
                                </h4>
                                <p class="mb-4">
                                    Dezvoltăm strategii de email marketing care mențin clienții aproape de brandul tău:
                                </p>
                                <ul class="list-disc pl-6 mb-4 space-y-2">
                                    <li>Segmentare avansată pentru mesaje personalizate</li>
                                    <li>Automatizări inteligente pentru nurturing și conversii</li>
                                    <li>Design responsive și copywriting persuasiv</li>
                                    <li>Analiză și optimizare continuă a campaniilor</li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-12 p-6 bg-blue-50 rounded-lg">
                            <h4 class="text-xl font-semibold text-gray-900 mb-4">De Ce să Alegi LightningRevenue pentru Marketing Digital?</h4>
                            <ul class="list-disc pl-6 space-y-2 mb-6">
                                <li>Experiență dovedită pe piața din București</li>
                                <li>Abordare integrată a marketingului digital</li>
                                <li>Focus pe rezultate măsurabile și ROI</li>
                                <li>Transparență totală în raportare</li>
                                <li>Echipă dedicată de specialiști</li>
                            </ul>
                            <p class="text-lg">
                                Fie că ești o afacere mică în căutare de creștere sau o companie mare care dorește să-și consolideze prezența online, 
                                avem expertiza necesară pentru a-ți transforma obiectivele în realitate.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <a href="/lightning-revenue/contact" class="inline-flex items-center px-8 py-4 border border-transparent text-lg font-semibold rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition duration-300">
                        Programează o Consultație Gratuită
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Întrebări Frecvente</h2>
                    <p class="text-xl text-gray-600">Răspunsuri la cele mai comune întrebări despre serviciile noastre</p>
                </div>

                <div class="grid gap-6 max-w-4xl mx-auto">
                    <!-- FAQ Item 1 -->
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">
                            Cât durează până văd primele rezultate?
                        </h3>
                        <p class="text-gray-600">
                            În funcție de serviciul ales și de situația actuală a afacerii tale, primele rezultate pot fi vizibile în 30-60 de zile. 
                            Pentru Google Ads, rezultatele sunt imediate, în timp ce pentru SEO, rezultatele sustenabile apar în 3-6 luni.
                        </p>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">
                            Care este investiția minimă pentru serviciile voastre?
                        </h3>
                        <p class="text-gray-600">
                            Investiția variază în funcție de obiectivele tale și de serviciile necesare. Oferim pachete personalizate 
                            pentru fiecare client, începând de la 500€/lună. Programează o consultație gratuită pentru o ofertă exactă.
                        </p>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">
                            Cum măsurați și raportați rezultatele?
                        </h3>
                        <p class="text-gray-600">
                            Folosim instrumente avansate de analytics pentru a măsura KPI-uri relevante pentru afacerea ta. 
                            Primești rapoarte săptămânale și lunare detaliate, cu metrici clare și recomandări de optimizare.
                        </p>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">
                            Ce mă diferențiază de competiție?
                        </h3>
                        <p class="text-gray-600">
                            Ne concentrăm pe rezultate măsurabile și ROI, nu pe metrici vanitate. Strategiile noastre sunt 
                            personalizate pentru piața din București și adaptate constant la schimbările din industria ta.
                        </p>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">
                            Cât timp durează implementarea?
                        </h3>
                        <p class="text-gray-600">
                            După semnarea contractului, începem implementarea în 24-48 de ore. Timpul exact depinde de complexitatea 
                            proiectului: 1-2 zile pentru Google Ads, 2-3 săptămâni pentru un website nou, 1-2 săptămâni pentru SEO inițial.
                        </p>
                    </div>

                    <!-- FAQ Item 6 -->
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">
                            Oferiti servicii si in afara Bucurestiului?
                        </h3>
                        <p class="text-gray-600">
                            Da, deși suntem bazați în București, oferim servicii în toată România. Folosim instrumente de colaborare 
                            online și organizăm întâlniri video pentru clienții din alte orașe.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Final CTA Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Pregătit să Transformăm Afacerea Ta?
                </h2>
                <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                    Hai să discutăm despre cum putem crește afacerea ta prin marketing digital performant
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="/lightning-revenue/contact" 
                        class="inline-flex items-center px-8 py-4 border border-transparent text-lg font-semibold rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition duration-300">
                        Programează Consultație Gratuită
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="tel:0743959914" 
                        class="inline-flex items-center px-8 py-4 border border-blue-200 text-lg font-semibold rounded-lg text-blue-600 hover:bg-blue-50 transition duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        0743 959 914
                    </a>
                </div>
            </div>
        </section>

    </main>

    <?php renderFooter(); ?>
</body>
</html> 