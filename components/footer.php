<?php
function renderFooter() {
    $year = date('Y');
    ?>
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-xl font-bold mb-4">LightningRevenue</h3>
                    <p class="text-gray-400">Agentie de Marketing Digital Bucuresti si Dezvoltare Website pentru afaceri mici si mijlocii</p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Servicii</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="/lightning-revenue/promovare-google-ads-promovare-online" class="text-gray-400 hover:text-white transition duration-150">
                                Promovare Online Bucuresti
                            </a>
                        </li>
                        <li>
                            <a href="/lightning-revenue/dezvoltare-siteuri-bucuresti" class="text-gray-400 hover:text-white transition duration-150">
                                Dezvoltare Website Bucuresti
                            </a>
                        </li>
                        <li>
                            <a href="/lightning-revenue/email-marketing-bucuresti" class="text-gray-400 hover:text-white transition duration-150">
                                Email Marketing Bucuresti
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Company Pages -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Companie</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="/lightning-revenue/despre-noi" class="text-gray-400 hover:text-white transition duration-150">
                                Agentie Online Bucuresti
                            </a>
                        </li>
                        <li>
                            <a href="/lightning-revenue/resurse-tehnice" class="text-gray-400 hover:text-white transition duration-150">
                                Resurse Tehnice
                            </a>
                        </li>
                        <li>
                            <a href="/lightning-revenue/contact" class="text-gray-400 hover:text-white transition duration-150">
                                Contacteaza-ne
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Legal & Social -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Legal</h3>
                    <ul class="space-y-2 mb-6">
                        <li>
                            <a href="/lightning-revenue/termeni-si-conditii" class="text-gray-400 hover:text-white transition duration-150">
                                Termeni și Condiții
                            </a>
                        </li>
                        <li>
                            <a href="/lightning-revenue/politica-cookie" class="text-gray-400 hover:text-white transition duration-150">
                                Politica Cookie
                            </a>
                        </li>
                        <li>
                            <a href="/lightning-revenue/politica-confidentialitate" class="text-gray-400 hover:text-white transition duration-150">
                                Politica de Confidențialitate
                            </a>
                        </li>
                    </ul>

                    <h3 class="text-xl font-bold mb-4">Urmărește-ne pe:</h3>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/profile.php?id=61574910389308" class="text-gray-400 hover:text-white transition duration-150">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                        <a href="https://github.com/LightningRevenue" class="text-gray-400 hover:text-white transition duration-150">
                            <span class="sr-only">GitHub</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="mt-8 pt-8 border-t border-gray-800 text-center">
                <p class="text-gray-400">&copy; <?php echo $year; ?> LightningRevenue | Agentie Online Bucuresti. <br> Toate Drepturile Rezervate</p>
            </div>
        </div>
    </footer>
    <?php
}
?> 