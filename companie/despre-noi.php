<?php 
include('../components/navbar.php');
renderNavbar();
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despre Noi | LightningRevenue</title>
    <meta name="description" content="Află mai multe despre LightningRevenue - expertiza noastră în dezvoltare web, marketing digital și creșterea afacerilor online.">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <main class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <div class="text-center mb-16">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Despre LightningRevenue</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Suntem o echipă pasionată de tehnologie și marketing digital, dedicată creșterii afacerilor în mediul online.
                </p>
            </div>

            <!-- Main Content -->
            <div class="grid gap-12 md:grid-cols-3">
                <!-- Left Column - About Us -->
                <div class="md:col-span-2 space-y-8">
                    <section class="bg-white rounded-lg shadow p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Cine Suntem</h2>
                        <div class="prose prose-lg text-gray-600">
                            <p class="mb-4">
                                LightningRevenue este o agenție digitală cu sediul în București, specializată în dezvoltarea de soluții web personalizate și strategii de marketing digital eficiente.
                            </p>
                            <p class="mb-4">
                                Cu o experiență de peste 5 ani în domeniu, am ajutat numeroase afaceri să-și dezvolte prezența online și să-și maximizeze potențialul de creștere prin soluții tehnologice inovatoare și strategii de marketing adaptate.
                            </p>
                        </div>
                    </section>

                    <section class="bg-white rounded-lg shadow p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Serviciile Noastre</h2>
                        <div class="grid gap-6 md:grid-cols-2">
                            <div class="border rounded-lg p-6 hover:shadow-lg transition-all">
                                <h3 class="text-xl font-semibold mb-3">Dezvoltare Website-uri</h3>
                                <p class="text-gray-600 mb-4">
                                    Creăm website-uri moderne, optimizate și ușor de administrat pentru afacerea ta.
                                </p>
                                <a href="/lightning-revenue/dezvoltare-siteuri-bucuresti" class="text-blue-600 hover:text-blue-800">
                                    Află mai multe →
                                </a>
                            </div>

                            <div class="border rounded-lg p-6 hover:shadow-lg transition-all">
                                <h3 class="text-xl font-semibold mb-3">Google Ads</h3>
                                <p class="text-gray-600 mb-4">
                                    Strategii personalizate de advertising pentru maximizarea ROI-ului tău.
                                </p>
                                <a href="/lightning-revenue/promovare-google-ads-promovare-online" class="text-blue-600 hover:text-blue-800">
                                    Află mai multe →
                                </a>
                            </div>

                            <div class="border rounded-lg p-6 hover:shadow-lg transition-all">
                                <h3 class="text-xl font-semibold mb-3">Email Marketing</h3>
                                <p class="text-gray-600 mb-4">
                                    Campanii de email marketing care convertesc și construiesc relații durabile.
                                </p>
                                <a href="/lightning-revenue/email-marketing-bucuresti" class="text-blue-600 hover:text-blue-800">
                                    Află mai multe →
                                </a>
                            </div>

                            <div class="border rounded-lg p-6 hover:shadow-lg transition-all">
                                <h3 class="text-xl font-semibold mb-3">Resurse Tehnice</h3>
                                <p class="text-gray-600 mb-4">
                                    Explorează resursele și instrumentele noastre pentru dezvoltatori.
                                </p>
                                <a href="/lightning-revenue/resurse-tehnice" class="text-blue-600 hover:text-blue-800">
                                    Află mai multe →
                                </a>
                            </div>
                        </div>
                    </section>

                    <section class="bg-white rounded-lg shadow p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">De Ce Să Ne Alegi</h2>
                        <div class="grid gap-6 md:grid-cols-2">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="font-semibold mb-2">Expertiză Tehnică</h3>
                                    <p class="text-gray-600">Echipă cu experiență în cele mai noi tehnologii web</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="font-semibold mb-2">Suport Dedicat</h3>
                                    <p class="text-gray-600">Asistență tehnică și consultanță permanentă</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="font-semibold mb-2">Soluții Personalizate</h3>
                                    <p class="text-gray-600">Adaptăm serviciile la nevoile afacerii tale</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="font-semibold mb-2">Rezultate Măsurabile</h3>
                                    <p class="text-gray-600">Raportare transparentă și KPI relevanți</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Right Column - Contact Form -->
                <div class="md:col-span-1">
                    <div class="bg-white rounded-lg shadow p-8 sticky top-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Contactează-ne</h2>
                        <form action="#" method="POST" class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nume</label>
                                <input type="text" name="name" id="name" required 
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" name="email" id="email" required 
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Telefon</label>
                                <input type="tel" name="phone" id="phone" 
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Mesaj</label>
                                <textarea name="message" id="message" rows="4" required 
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                            </div>

                            <div class="pt-2">
                                <button type="submit" 
                                    class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                                    Trimite Mesajul
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php 
include '../components/footer.php';
renderFooter();
?>
</body>
</html> 