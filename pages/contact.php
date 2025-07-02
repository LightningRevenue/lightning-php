<?php
require_once '../components/navbar.php';
require_once '../components/footer.php';
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - LightningRevenue | Agenție Marketing Digital București</title>
    <meta name="description" content="Contactează-ne pentru servicii profesionale de marketing digital, dezvoltare web și promovare online în București. Răspundem prompt la toate solicitările.">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <?php renderNavbar('contact'); ?>

    <main>
        <!-- Hero Section -->
        <section class="bg-gradient-to-r from-blue-600 to-blue-800 py-20 px-6">
            <div class="max-w-7xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Hai să Discutăm Despre Proiectul Tău</h1>
                <p class="text-xl text-blue-100 max-w-3xl mx-auto mb-8">
                    Suntem aici să te ajutăm să-ți dezvolți afacerea online. Contactează-ne pentru o consultație gratuită.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="https://wa.me/+40743959914" target="_blank" class="inline-flex items-center px-6 py-3 bg-green-500 hover:bg-green-600 text-white rounded-lg transition duration-150">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        WhatsApp
                    </a>
                    <a href="tel:+40743959914" class="inline-flex items-center px-6 py-3 bg-white text-blue-600 rounded-lg hover:bg-blue-50 transition duration-150">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        Sună-ne Acum
                    </a>
                </div>
            </div>
        </section>

        <!-- Contact Form Section -->
        <section class="py-16 px-6 bg-gray-50">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Contact Form -->
                    <div class="bg-white rounded-lg shadow-xl p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Trimite-ne un Mesaj</h2>
                        <form action="#" method="POST" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">Nume</label>
                                    <input type="text" name="name" id="name" required
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" name="email" id="email" required
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                            </div>

                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700">Subiect</label>
                                <input type="text" name="subject" id="subject" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>

                            <div>
                                <label for="service" class="block text-sm font-medium text-gray-700">Serviciu Dorit</label>
                                <select name="service" id="service" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="">Selectează un serviciu</option>
                                    <option value="google-ads">Google Ads</option>
                                    <option value="web-development">Dezvoltare Website</option>
                                    <option value="email-marketing">Email Marketing</option>
                                    <option value="other">Alt Serviciu</option>
                                </select>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700">Mesaj</label>
                                <textarea name="message" id="message" rows="4" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    placeholder="Descrie pe scurt proiectul tău..."></textarea>
                            </div>

                            <div>
                                <button type="submit"
                                    class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Trimite Mesajul
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Contact Information -->
                    <div class="space-y-8">
                        <div class="bg-white rounded-lg shadow-xl p-8">
                            <h2 class="text-2xl font-bold text-gray-900 mb-6">Informații de Contact</h2>
                            <div class="space-y-6">

                                <!-- Email -->
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <h3 class="text-lg font-medium text-gray-900">Email</h3>
                                        <p class="mt-1 text-gray-600">
                                            <a href="mailto:contact@lightning-revenue.com" class="hover:text-blue-600">
                                                contact@lightning-revenue.com
                                            </a>
                                        </p>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <h3 class="text-lg font-medium text-gray-900">Telefon</h3>
                                        <p class="mt-1 text-gray-600">
                                            <a href="tel:+40123456789" class="hover:text-blue-600">
                                                0743 959 914
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Program -->
                        <div class="bg-white rounded-lg shadow-xl p-8">
                            <h2 class="text-2xl font-bold text-gray-900 mb-6">Program de Lucru</h2>
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Luni - Vineri:</span>
                                    <span class="text-gray-900 font-medium">09:00 - 18:00</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Sâmbătă:</span>
                                    <span class="text-gray-900 font-medium">10:00 - 14:00</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Duminică:</span>
                                    <span class="text-gray-900 font-medium">Închis</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

                <!-- Services Quick Links -->
                <section class="py-16 px-6 bg-white">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">Serviciile Noastre</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Google Ads -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition duration-300">
                        <div class="text-blue-600 mb-4">
                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C5.372 0 0 5.372 0 12s5.372 12 12 12 12-5.372 12-12S18.628 0 12 0zm4.595 16.583l-3.375-3.375-1.22.61-2.625 2.625-1.125-1.125 2.625-2.625.61-1.22-3.375-3.375 1.41-1.41 8.485 8.485-1.41 1.41z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Google Ads</h3>
                        <p class="text-gray-600 mb-4">Campanii de publicitate optimizate pentru rezultate maxime și ROI crescut.</p>
                        <a href="/lightning-revenue/promovare-google-ads-promovare-online" class="text-blue-600 hover:text-blue-700 font-medium">
                            Află mai multe →
                        </a>
                    </div>

                    <!-- Web Development -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition duration-300">
                        <div class="text-blue-600 mb-4">
                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 10.935v2.131l-8 3.947v-2.23l5.64-2.783-5.64-2.79v-2.223l8 3.948zm-16 3.848l-5.64-2.783 5.64-2.79v-2.223l-8 3.948v2.131l8 3.947v-2.23zm7.047-10.783h-2.078l-4.011 16h2.073l4.016-16z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Dezvoltare Website</h3>
                        <p class="text-gray-600 mb-4">Website-uri moderne, responsive și optimizate pentru conversii.</p>
                        <a href="/lightning-revenue/dezvoltare-siteuri-bucuresti" class="text-blue-600 hover:text-blue-700 font-medium">
                            Află mai multe →
                        </a>
                    </div>

                    <!-- Email Marketing -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition duration-300">
                        <div class="text-blue-600 mb-4">
                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Email Marketing</h3>
                        <p class="text-gray-600 mb-4">Strategii de email marketing pentru creșterea conversiilor și fidelizarea clienților.</p>
                        <a href="/lightning-revenue/email-marketing-bucuresti" class="text-blue-600 hover:text-blue-700 font-medium">
                            Află mai multe →
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="bg-blue-600 py-16 px-6">
            <div class="max-w-7xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-white mb-4">Pregătit să Începem?</h2>
                <p class="text-xl text-blue-100 mb-8">
                    Contactează-ne acum pentru o consultație gratuită și vom găsi cea mai bună soluție pentru afacerea ta.
                </p>
                <div class="flex justify-center space-x-4">
                    <a href="tel:+40743959914" class="inline-flex items-center px-6 py-3 bg-white text-blue-600 rounded-lg hover:bg-blue-50 transition duration-150">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        Sună Acum
                    </a>
                    <a href="https://wa.me/+40743959914" target="_blank" class="inline-flex items-center px-6 py-3 bg-green-500 text-white rounded-lg hover:bg-green-600 transition duration-150">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        WhatsApp
                    </a>
                </div>
            </div>
        </section>
    </main>

    <?php renderFooter(); ?>
</body>
</html> 