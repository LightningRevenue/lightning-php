<?php
function renderNavbar($activePage = '') {
    ?>
    <!-- Topbar -->
    <div class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2">
            <div class="flex justify-between items-center text-sm">
                <div class="flex items-center">
                    <?php if ($activePage === 'promovare'): ?>
                        <span class="font-medium">Servicii Promovare Online Bucuresti | Promovare Google Ads</span>
                    <?php elseif ($activePage === 'website'): ?>
                        <span class="font-medium">Dezvoltare Website Bucuresti | Dezvoltare Magazin Online</span>
                    <?php elseif ($activePage === 'email'): ?>
                        <span class="font-medium">Agentie Email Marketing Bucuresti | Implentare Newsletter</span>
                    <?php else: ?>
                        <span class="font-medium">Agentie Marketing Bucuresti</span>
                    <?php endif; ?>
                </div>
                <div class="flex items-center">
                    <svg class="h-4 w-4 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span>Contact: <a href="tel:0743959914" class="hover:text-blue-400 transition-colors">0743 959 914</a></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center">
                        <a href="" class="flex items-center">
                            <img src="/assets/images/logo-lightning-revenue.png" alt="Lightning Revenue" class="h-10 w-auto">
                        </a>
                    </div>
                </div>

                <!-- Navigation Links -->
                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <a href="/servicii/promovare-google-ads-promovare-online" 
                       class="<?php echo $activePage === 'promovare' 
                            ? 'border-blue-500 text-gray-900' 
                            : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'; ?> 
                            inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Servicii Promovare Online Bucuresti
                    </a>
                    <a href="/servicii/dezvoltare-siteuri-bucuresti" 
                       class="<?php echo $activePage === 'dezvoltare' 
                            ? 'border-blue-500 text-gray-900' 
                            : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'; ?> 
                            inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Dezvoltare Website Bucuresti
                    </a>
                    <a href="/servicii/email-marketing-bucuresti"
                       class="<?php echo $activePage === 'email' 
                            ? 'border-blue-500 text-gray-900' 
                            : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'; ?> 
                            inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Email Marketing Bucuresti
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex items-center sm:hidden">
                    <button type="button" 
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
                            onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
                            aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="hidden sm:hidden" id="mobile-menu">
            <div class="space-y-1 pt-2 pb-3">
                <a href="/servicii/promovare-google-ads-promovare-online" 
                    class="<?php echo $activePage === 'promovare' 
                        ? 'bg-blue-50 border-blue-500 text-blue-700' 
                        : 'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700'; ?> 
                        block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Servicii Promovare Online Bucuresti
                </a>
                <a href="/servicii/dezvoltare-siteuri-bucuresti" 
                    class="<?php echo $activePage === 'dezvoltare' 
                        ? 'bg-blue-50 border-blue-500 text-blue-700' 
                        : 'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700'; ?> 
                        block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Dezvoltare Website Bucuresti
                </a>
                <a href="/servicii/email-marketing-bucuresti"
                   class="<?php echo $activePage === 'email' 
                        ? 'bg-blue-50 border-blue-500 text-blue-700' 
                        : 'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700'; ?> 
                        block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Email Marketing Bucuresti
                </a>
            </div>
        </div>
    </nav>
    <?php
}
?> 