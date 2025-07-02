<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dezvoltare Website și Magazin Online în București | LightningRevenue</title>
    <meta name="description" content="Servicii profesionale de dezvoltare website-uri și magazine online în București. Creăm site-uri responsive, optimizate SEO și ușor de administrat.">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php 
include('../components/navbar.php');
renderNavbar('website');
?>

<main>
    <!-- Hero Section -->
    <section class="pt-20 pb-12 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-left">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        Dezvoltare Website <span class="text-blue-600">si Magazin Online</span> în București
                    </h1>
                    <p class="text-xl text-gray-600 mb-8">
                        Creste-ti baza de clienti cu un website dezvoltat profesional pentru nevoile tale specifice
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/contact" 
                            class="inline-flex items-center px-8 py-4 border border-transparent text-lg font-semibold rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition duration-300">
                            Solicită Ofertă Personalizată
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
                    <div class="mt-8 flex items-center gap-8">
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" class="opacity-50"/>
                                </svg>
                            </div>
                            <span class="ml-2 text-lg font-semibold text-gray-900">4.5/5</span>
                            <span class="mx-2 text-gray-500">Rating</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-lg font-semibold text-gray-900">100+</span>
                            <span class="ml-2 text-gray-500">Clienți Mulțumiți</span>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-blue-100 rounded-3xl transform rotate-3"></div>
                    <img src="/assets/images/dezvoltare-website-imagine.jpg" alt="Dezvoltare Website Illustration" class="relative rounded-2xl shadow-lg w-full h-auto z-10">
                </div>
            </div>
        </div>
    </section>

    <!-- Tags Section -->
    <section class="py-8 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap gap-3 justify-center">
                <span class="px-4 py-2 rounded-full bg-white text-gray-700 text-sm font-medium shadow-sm border border-gray-100 hover:border-blue-400 transition-colors cursor-pointer">
                    Dezvoltare Website
                </span>
                <span class="px-4 py-2 rounded-full bg-white text-gray-700 text-sm font-medium shadow-sm border border-gray-100 hover:border-blue-400 transition-colors cursor-pointer">
                    Dezvoltare Site de Prezentare
                </span>
                <span class="px-4 py-2 rounded-full bg-white text-gray-700 text-sm font-medium shadow-sm border border-gray-100 hover:border-blue-400 transition-colors cursor-pointer">
                    Dezvoltare Site
                </span>
                <span class="px-4 py-2 rounded-full bg-white text-gray-700 text-sm font-medium shadow-sm border border-gray-100 hover:border-blue-400 transition-colors cursor-pointer">
                    Dezvoltare Magazin Online
                </span>
                <span class="px-4 py-2 rounded-full bg-white text-gray-700 text-sm font-medium shadow-sm border border-gray-100 hover:border-blue-400 transition-colors cursor-pointer">
                    Dezvoltare Site E-commerce
                </span>
                <span class="px-4 py-2 rounded-full bg-white text-gray-700 text-sm font-medium shadow-sm border border-gray-100 hover:border-blue-400 transition-colors cursor-pointer">
                    Site-uri in Wordpress
                </span>
                <span class="px-4 py-2 rounded-full bg-white text-gray-700 text-sm font-medium shadow-sm border border-gray-100 hover:border-blue-400 transition-colors cursor-pointer">
                    Dezvoltare Site Shopify
                </span>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">De Ce să Alegi Serviciile Noastre de Promovare?</h2>
                <p class="text-xl text-gray-600">Soluții complete de marketing digital pentru creșterea afacerii tale</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Google Ads -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:border-blue-500 transition-colors">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Dezvoltare Site de Prezentare</h3>
                    <p class="text-gray-600">Dezvoltare site de prezentare profesional pentru a-ti prezenta produsele sau serviciile tale</p>
                </div>

                <!-- Marketing Online -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:border-blue-500 transition-colors">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Dezvoltare Magazin Online</h3>
                    <p class="text-gray-600">Dezvolta-ti un magazin online pentru a-ti vinde produsele sau serviciile tale, cu analitice, dashboard-uri, si performanta ridicata</p>
                </div>

                <!-- Email Marketing -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:border-blue-500 transition-colors">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Dezvoltare Site Wordpress</h3>
                    <p class="text-gray-600">Dezvoltare Site Wordpress profesional pentru a-ti prezenta produsele sau serviciile tale</p>
                </div>

                <!-- Social Media -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:border-blue-500 transition-colors">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Dezvoltare Site Shopify</h3>
                    <p class="text-gray-600">Dezvoltare de Site E-commerce cu Shopify, pentru a-ti vinde produsele sau serviciile tale, cu tema personalizata</p>
                </div>

                <!-- TikTok -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:border-blue-500 transition-colors">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Dezvoltare Software Intern</h3>
                    <p class="text-gray-600">Dezvoltare CRM, Facturare, ERP pentru afacerea si nevoile tale specifice</p>
                </div>

                <!-- Influencer Marketing -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:border-blue-500 transition-colors">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Automatizari pentru Procese de Business</h3>
                    <p class="text-gray-600">Automatizare procese de business, pentru a te descurca mai usor si mai eficient</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Details -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Servicii Complete de Dezvoltare Prezenta Online</h2>
                <p class="text-xl text-gray-600">Descoperă soluțiile noastre personalizate pentru succesul afacerii tale</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Left Column - Services List -->
                <div class="space-y-8">
                    <!-- Google Ads Service -->
                    <div class="group">
                        <a href="/promovare-google-ads" class="block bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors">
                                        Dezvoltare Site Profesional
                                        <span class="inline-block ml-2 transform group-hover:translate-x-1 transition-transform">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                            </svg>
                                        </span>
                                    </h3>
                                    <p class="mt-2 text-gray-600">Maximizează-ți vizibilitatea online prin dezvoltarea unui site profesional, cu design personalizat, si functionalitati complete</p>
                                    <div class="mt-4 flex flex-wrap gap-2">
                                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-sm font-medium rounded-full">SEO Ready</span>
                                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-sm font-medium rounded-full">E-Commerce</span>
                                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-sm font-medium rounded-full">Performanta & Scalabilitate</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Social Media Service -->
                    <div class="group">
                        <a href="/promovare-social-media" class="block bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-purple-600 transition-colors">
                                        Automatizari pentru Customer Service
                                        <span class="inline-block ml-2 transform group-hover:translate-x-1 transition-transform">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                            </svg>
                                        </span>
                                    </h3>
                                    <p class="mt-2 text-gray-600">Construiește o prezență puternică si de incredere cu chatbot-uri, si automatizari pentru customer service</p>
                                    <div class="mt-4 flex flex-wrap gap-2">
                                        <span class="px-3 py-1 bg-purple-50 text-purple-700 text-sm font-medium rounded-full">Live Chat</span>
                                        <span class="px-3 py-1 bg-purple-50 text-purple-700 text-sm font-medium rounded-full">Automatizari Customer Care</span>
                                        <span class="px-3 py-1 bg-purple-50 text-purple-700 text-sm font-medium rounded-full">Sistem de Tichete</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Email Marketing Service -->
                    <div class="group">
                        <a href="/email-marketing" class="block bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-green-600 transition-colors">
                                        Solutii Integrate de Marketing
                                        <span class="inline-block ml-2 transform group-hover:translate-x-1 transition-transform">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                            </svg>
                                        </span>
                                    </h3>
                                    <p class="mt-2 text-gray-600">Transformă abonatii în clienți fideli prin campanii de email personalizate și automatizări inteligente.</p>
                                    <div class="mt-4 flex flex-wrap gap-2">
                                        <span class="px-3 py-1 bg-green-50 text-green-700 text-sm font-medium rounded-full">Newsletters</span>
                                        <span class="px-3 py-1 bg-green-50 text-green-700 text-sm font-medium rounded-full">Automatizări</span>
                                        <span class="px-3 py-1 bg-green-50 text-green-700 text-sm font-medium rounded-full">Segmentare</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Right Column - Featured Content -->
                <div class="lg:pl-8">
                    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">De Ce Să Alegi Serviciile Noastre?</h3>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Expertiză Dovedită</h4>
                                    <p class="mt-1 text-gray-600">Peste 100 de clienți mulțumiți și campanii de succes în diverse industrii.</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Rezultate Rapide</h4>
                                    <p class="mt-1 text-gray-600">Primele rezultate vizibile în 24-48 de ore de la implementare.</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Raportare Transparentă</h4>
                                    <p class="mt-1 text-gray-600">Acces 24/7 la statistici și rapoarte detaliate despre performanța campaniilor.</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <a href="/contact" class="inline-flex items-center justify-center w-full px-6 py-3 text-base font-medium text-white bg-blue-600 border border-transparent rounded-lg shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Solicită o Consultație Gratuită
                                <svg class="w-5 h-5 ml-2 -mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 bg-white">
                    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="text-center mb-12">
                            <h2 class="text-3xl font-bold text-gray-900 mb-4">Solicită o Analiză Gratuită</h2>
                            <p class="text-xl text-gray-600">Completează formularul și te vom contacta în cel mai scurt timp</p>
                        </div>

                        <form action="/submit-form.php" method="POST" class="space-y-6 bg-white rounded-xl shadow-sm p-8 border border-gray-100">
                            <div class="grid md:grid-cols-2 gap-6">
                                <!-- Nume -->
                                <div>
                                    <label for="nume" class="block text-sm font-medium text-gray-700 mb-1">Nume și Prenume *</label>
                                    <input type="text" name="nume" id="nume" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>

                                <!-- Email -->
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                                    <input type="email" name="email" id="email" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>

                                <!-- Telefon -->
                                <div>
                                    <label for="telefon" class="block text-sm font-medium text-gray-700 mb-1">Telefon *</label>
                                    <input type="tel" name="telefon" id="telefon" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>

                                <!-- Website -->
                                <div>
                                    <label for="website" class="block text-sm font-medium text-gray-700 mb-1">Website</label>
                                    <input type="url" name="website" id="website"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>
                            </div>

                            <!-- Buget -->
                            <div>
                                <label for="buget" class="block text-sm font-medium text-gray-700 mb-1">Buget Lunar Estimat *</label>
                                <select name="buget" id="buget" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    <option value="">Selectează bugetul</option>
                                    <option value="500-1000">500€ - 1.000€</option>
                                    <option value="1000-2000">1.000€ - 2.000€</option>
                                    <option value="2000-5000">2.000€ - 5.000€</option>
                                    <option value="5000+">5.000€ +</option>
                                </select>
                            </div>

                            <!-- Mesaj -->
                            <div>
                                <label for="mesaj" class="block text-sm font-medium text-gray-700 mb-1">Mesaj</label>
                                <textarea name="mesaj" id="mesaj" rows="4"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Spune-ne mai multe despre obiectivele tale..."></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="flex justify-center">
                                <button type="submit"
                                    class="px-8 py-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300 flex items-center">
                                    Trimite Solicitarea
                                    <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                    </svg>
                                </button>
                            </div>

                            <p class="text-sm text-gray-500 text-center mt-4">
                                Câmpurile marcate cu * sunt obligatorii
                            </p>
                        </form>
                    </div>
                </section>

    <!-- Detailed Information Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Tot ce Trebuie să Știi Despre Dezvoltarea unui Site Web în 2025</h2>
                
                <!-- Timeline and Process -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Cât Durează să Dezvoltăm un Site Web?</h3>
                    <div class="prose prose-lg text-gray-600 max-w-none">
                        <p class="mb-4">Dezvoltarea unui site web profesional implică mai multe etape, iar durata poate varia în funcție de complexitatea proiectului:</p>
                        
                        <ul class="space-y-4 mb-6">
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mt-1 mr-3">
                                    <span class="text-blue-600 text-sm font-semibold">1</span>
                                </span>
                                <div>
                                    <span class="font-semibold text-gray-900">Primele 2-3 zile:</span> Analiză și planificare. Definim împreună obiectivele, funcționalitățile necesare și structura site-ului.
                                </div>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mt-1 mr-3">
                                    <span class="text-blue-600 text-sm font-semibold">2</span>
                                </span>
                                <div>
                                    <span class="font-semibold text-gray-900">Săptămâna 1:</span> Design și mockup-uri. Creăm designul vizual și experiența utilizatorului pentru toate paginile principale.
                                </div>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mt-1 mr-3">
                                    <span class="text-blue-600 text-sm font-semibold">3</span>
                                </span>
                                <div>
                                    <span class="font-semibold text-gray-900">Săptămânile 2-3:</span> Dezvoltare și implementare. Transformăm designul în cod, implementăm funcționalitățile și integrăm sistemul de administrare.
                                </div>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mt-1 mr-3">
                                    <span class="text-blue-600 text-sm font-semibold">4</span>
                                </span>
                                <div>
                                    <span class="font-semibold text-gray-900">Săptămâna 4:</span> Testare și lansare. Verificăm totul în detaliu, optimizăm performanța și lansăm site-ul în mediul de producție.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Budget Section -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Ce Buget este Necesar pentru un Site Web Professional?</h3>
                    <div class="prose prose-lg text-gray-600 max-w-none">
                        <p class="mb-4">Investiția într-un site web variază în funcție de complexitatea proiectului și funcționalitățile necesare:</p>

                        <div class="bg-gray-50 rounded-xl p-6 mb-6">
                            <h4 class="text-xl font-semibold text-gray-900 mb-3">Tipuri de Proiecte și Bugete Estimate</h4>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>Site de Prezentare: de la 800€</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>Magazin Online: de la 1.200€</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-blue-600 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>Platformă Web Personalizată: de la 2.000€</span>
                                </li>
                            </ul>
                        </div>

                        <p class="mb-4">Fiecare proiect include găzduire gratuită pentru primul an, suport tehnic, și optimizare SEO de bază.</p>
                    </div>
                </div>

                <!-- Expectations Section -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Ce Primești cu Site-ul Tău?</h3>
                    <div class="prose prose-lg text-gray-600 max-w-none">
                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm">
                                <h4 class="text-lg font-semibold text-gray-900 mb-3">Funcționalități Standard</h4>
                                <ul class="space-y-2">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Design Responsive pentru toate dispozitivele</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Panou de Administrare Intuitiv</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Optimizare SEO de Bază</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm">
                                <h4 class="text-lg font-semibold text-gray-900 mb-3">Extra Features</h4>
                                <ul class="space-y-2">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Integrare cu Rețele Sociale</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Sistem de Newsletter</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Chatbot și Suport Live</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SEO Optimized Content -->
                <div class="prose prose-lg text-gray-600 max-w-none">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Dezvoltare Site-uri Web pentru Afaceri în 2025</h3>
                    
                    <div class="bg-gradient-to-br from-blue-50 to-white p-8 rounded-2xl shadow-sm border border-blue-100 mb-8">
                        <p class="text-gray-800 leading-relaxed mb-6">În era digitală, un site web profesional reprezintă fundamentul prezenței online a oricărei afaceri. Prin combinarea designului modern cu tehnologii de ultimă generație, creăm experiențe web care convertesc vizitatorii în clienți.</p>
                        
                        <div class="grid md:grid-cols-2 gap-8">
                            <div>
                                <h4 class="text-xl font-semibold text-gray-900 mb-4">Tehnologii Moderne</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        <span class="text-gray-700">Framework-uri moderne (React, Vue.js)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        <span class="text-gray-700">Optimizare pentru viteza de încărcare</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        <span class="text-gray-700">Securitate avansată și GDPR ready</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold text-gray-900 mb-4">Beneficii pentru Afacerea Ta</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        <span class="text-gray-700">Creșterea vizibilității online</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        <span class="text-gray-700">Automatizarea proceselor de business</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        <span class="text-gray-700">Analitice și rapoarte detaliate</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-2xl shadow-sm border border-gray-100">
                        <h4 class="text-xl font-semibold text-gray-900 mb-4">De Ce să Alegi Serviciile Noastre?</h4>
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="flex flex-col items-center text-center p-4">
                                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                </div>
                                <h5 class="font-semibold text-gray-900 mb-2">Rezultate Rapide</h5>
                                <p class="text-gray-600">Strategii optimizate pentru rezultate vizibile încă din primele zile</p>
                            </div>
                            <div class="flex flex-col items-center text-center p-4">
                                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                    </svg>
                                </div>
                                <h5 class="font-semibold text-gray-900 mb-2">ROI Măsurabil</h5>
                                <p class="text-gray-600">Rapoarte detaliate și analize complete ale performanței</p>
                            </div>
                            <div class="flex flex-col items-center text-center p-4">
                                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                </div>
                                <h5 class="font-semibold text-gray-900 mb-2">Expertiză Dovedită</h5>
                                <p class="text-gray-600">Peste 100 de clienți mulțumiți și proiecte de succes</p>
                            </div>
                        </div>
                    </div>

                    <p class="mt-8 text-lg text-gray-700">Indiferent de dimensiunea afacerii tale sau de industria în care activezi, avem <a href="/pages/marketing-digital" class="text-blue-600 hover:text-blue-800 font-medium">soluția potrivită</a> pentru creșterea prezenței tale online și atragerea de clienți noi.</p>
                </div>

                <!-- Final CTA -->
                <div class="mt-12">
                    <div class="bg-gradient-to-r from-blue-600 to-blue-700 rounded-2xl p-8 md:p-12 shadow-lg">
                        <div class="text-center">
                            <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">Pregătit să Crești Online?</h3>
                            <p class="text-blue-100 text-lg mb-8">Programează o consultație gratuită și află cum te putem ajuta să-ți dezvolți afacerea</p>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <a href="/contact" class="inline-flex items-center px-8 py-4 border-2 border-white text-lg font-semibold rounded-lg text-white hover:bg-white hover:text-blue-600 transition duration-300">
                                    Programează Consultația
                                    <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                    </svg>
                                </a>
                                <a href="/about" class="inline-flex items-center px-8 py-4 text-lg font-semibold rounded-lg text-white hover:bg-white hover:text-blue-600 border-2 border-white transition duration-300">
                                    Despre Noi
                                    <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Pachete de Servicii Dezvoltare Website</h2>
                <p class="text-xl text-gray-600">Soluții personalizate pentru orice dimensiune de business</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Startup Package -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Website de Prezentare</h3>
                    <p class="text-gray-600 mb-6">Perfect pentru afaceri la început</p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Design Personalizat pentru afacerea ta</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Implementare Google Analytics si Search Console</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Landing Page Optimizat <strong> GRATUIT </strong></span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Optimizare SEO de bază</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Raportare săptămânală</span>
                        </li>
                    </ul>
                    <a href="/contact" 
                        class="block w-full text-center px-6 py-3 border border-blue-600 text-blue-600 font-semibold rounded-lg hover:bg-blue-50 transition duration-300">
                        Solicită Ofertă
                    </a>
                </div>

                <!-- Business Package -->
                <div class="bg-white p-8 rounded-xl shadow-lg border-2 border-blue-500 relative">
                    <div class="absolute top-0 right-0 bg-blue-500 text-white px-4 py-1 rounded-bl-lg text-sm font-semibold">
                        Popular
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Dezvoltare Magazin Online</h3>
                    <p class="text-gray-600 mb-6">Pentru magazine online, scalabile si performante</p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Dezvoltare magazin online performant</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Implementare Pixeli si Tracking Avansat</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Implementare Sistem de Comenzi si Inventar</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Optimizare SEO <strong>COMPLETA
                            </strong></span>
                        </li>
                    </ul>
                    <a href="/contact" 
                        class="block w-full text-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300">
                        Solicită Ofertă
                    </a>
                </div>

                <!-- Enterprise Package -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Implementari Enterprise</h3>
                    <p class="text-gray-600 mb-6">Pentru afaceri mari, cu nevoie de redundanta si scalabilitate infinita</p>
                    <div class="text-3xl font-bold text-gray-900 mb-6">
                        De la 3.500€<span class="text-lg text-gray-600">/lună</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Arhitectura Microservice</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Reduntanta Multi-Region</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Automatizari Complete</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Abordare Performance-First</span>
                        </li>
                    </ul>
                    <a href="/contact" 
                        class="block w-full text-center px-6 py-3 border border-blue-600 text-blue-600 font-semibold rounded-lg hover:bg-blue-50 transition duration-300">
                        Solicită Ofertă
                    </a>
                </div>
            </div>
        </div>
    </section>

                <!-- Final CTA -->
                <section class="py-20 bg-white">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                            Pregătit să Creștem Împreună?
                        </h2>
                        <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                            Programează o consultație gratuită și află cum putem ajuta afacerea ta să crească prin Google Ads și marketing online
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                            <a href="/contact" 
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
            </div>
        </div>
    </section>
</main>

<?php 
include '../components/footer.php';
renderFooter();
?>
</body>
</html>