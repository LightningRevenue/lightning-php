<?php 
include('../components/navbar.php');
renderNavbar();
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica Cookie | LightningRevenue</title>
    <meta name="description" content="Politica cookie LightningRevenue - Informații despre cookie-urile utilizate pe site și modul în care acestea vă afectează confidențialitatea.">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <main class="py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-gray-900 mb-8">Politica Cookie</h1>
            
            <div class="prose prose-lg max-w-none">
                <p class="text-gray-600 mb-8">Ultima actualizare: <?php echo date('d.m.Y'); ?></p>

                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">1. Ce Sunt Cookie-urile?</h2>
                    <p class="mb-4">Cookie-urile sunt fișiere text de mici dimensiuni care sunt stocate pe dispozitivul dumneavoastră (computer, tabletă, telefon mobil) atunci când vizitați website-ul nostru. Acestea permit website-ului să rețină acțiunile și preferințele dumneavoastră pentru o perioadă de timp, astfel încât să nu fie nevoie să le reintroduceți de fiecare dată când reveniți pe site sau navigați de la o pagină la alta.</p>
                </section>

                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">2. Tipuri de Cookie-uri Utilizate</h2>
                    
                    <h3 class="text-xl font-bold text-gray-900 mb-3">2.1. Cookie-uri Strict Necesare</h3>
                    <div class="bg-gray-50 p-6 rounded-lg mb-6">
                        <p class="mb-4">Aceste cookie-uri sunt esențiale pentru funcționarea website-ului și nu pot fi dezactivate în sistemele noastre. Ele includ:</p>
                        <ul class="list-disc pl-6">
                            <li class="mb-2">Cookie-uri pentru autentificare și securitate</li>
                            <li class="mb-2">Cookie-uri de sesiune</li>
                            <li class="mb-2">Cookie-uri pentru preferințele de bază ale site-ului</li>
                        </ul>
                    </div>

                    <h3 class="text-xl font-bold text-gray-900 mb-3">2.2. Cookie-uri Analitice</h3>
                    <div class="bg-gray-50 p-6 rounded-lg mb-6">
                        <p class="mb-4">Ne ajută să înțelegem cum este utilizat website-ul nostru:</p>
                        <ul class="list-disc pl-6">
                            <li class="mb-2">Google Analytics (pentru statistici de trafic)</li>
                            <li class="mb-2">Cookie-uri pentru analiza comportamentului utilizatorilor</li>
                            <li class="mb-2">Cookie-uri pentru măsurarea performanței site-ului</li>
                        </ul>
                    </div>

                    <h3 class="text-xl font-bold text-gray-900 mb-3">2.3. Cookie-uri Funcționale</h3>
                    <div class="bg-gray-50 p-6 rounded-lg mb-6">
                        <p class="mb-4">Permit website-ului să ofere funcționalități îmbunătățite:</p>
                        <ul class="list-disc pl-6">
                            <li class="mb-2">Preferințe de limbă</li>
                            <li class="mb-2">Informații despre formular</li>
                            <li class="mb-2">Setări de afișare</li>
                        </ul>
                    </div>

                    <h3 class="text-xl font-bold text-gray-900 mb-3">2.4. Cookie-uri de Marketing</h3>
                    <div class="bg-gray-50 p-6 rounded-lg mb-6">
                        <p class="mb-4">Utilizate pentru publicitate și marketing:</p>
                        <ul class="list-disc pl-6">
                            <li class="mb-2">Google Ads</li>
                            <li class="mb-2">Facebook Pixel</li>
                            <li class="mb-2">Cookie-uri pentru remarketing</li>
                        </ul>
                    </div>
                </section>

                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">3. Durata de Viață a Cookie-urilor</h2>
                    <div class="space-y-4">
                        <p>Cookie-urile utilizate pe website-ul nostru au diferite durate de viață:</p>
                        <ul class="list-disc pl-6">
                            <li class="mb-2">Cookie-uri de Sesiune: Expiră când închideți browserul</li>
                            <li class="mb-2">Cookie-uri Persistente: Pot rămâne active până la 2 ani, în funcție de scopul lor</li>
                            <li class="mb-2">Cookie-uri de Marketing: De obicei active 30 de zile</li>
                        </ul>
                    </div>
                </section>

                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">4. Controlul Cookie-urilor</h2>
                    <div class="space-y-4">
                        <p>Puteți controla și/sau șterge cookie-urile după cum doriți. Puteți:</p>
                        <ul class="list-disc pl-6">
                            <li class="mb-2">Șterge toate cookie-urile din browser</li>
                            <li class="mb-2">Seta browserul să blocheze cookie-urile</li>
                            <li class="mb-2">Alege ce cookie-uri acceptați prin banner-ul nostru de cookie-uri</li>
                        </ul>
                        <p class="mt-4">Pentru instrucțiuni despre cum să gestionați cookie-urile în browserul dumneavoastră, vizitați:</p>
                        <ul class="list-disc pl-6">
                            <li class="mb-2"><a href="https://support.google.com/chrome/answer/95647" class="text-blue-600 hover:text-blue-800">Google Chrome</a></li>
                            <li class="mb-2"><a href="https://support.mozilla.org/en-US/kb/enhanced-tracking-protection-firefox-desktop" class="text-blue-600 hover:text-blue-800">Mozilla Firefox</a></li>
                            <li class="mb-2"><a href="https://support.microsoft.com/en-us/windows/microsoft-edge-browsing-data-and-privacy-bb8174ba-9d73-dcf2-9b4a-c582b4e640dd" class="text-blue-600 hover:text-blue-800">Microsoft Edge</a></li>
                            <li class="mb-2"><a href="https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac" class="text-blue-600 hover:text-blue-800">Safari</a></li>
                        </ul>
                    </div>
                </section>

                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">5. Cookie-uri Terță Parte</h2>
                    <div class="space-y-4">
                        <p>Website-ul nostru include cookie-uri de la următorii terți:</p>
                        <ul class="list-disc pl-6">
                            <li class="mb-2">Google Analytics - pentru analiza traficului</li>
                            <li class="mb-2">Google Ads - pentru remarketing și publicitate</li>
                            <li class="mb-2">Facebook - pentru integrare social media și publicitate</li>
                            <li class="mb-2">LinkedIn - pentru integrare social media și publicitate</li>
                        </ul>
                        <p>Fiecare dintre acești furnizori are propria politică de confidențialitate și propriile metode de colectare a datelor.</p>
                    </div>
                </section>

                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">6. Impactul Dezactivării Cookie-urilor</h2>
                    <div class="space-y-4">
                        <p>Dezactivarea anumitor cookie-uri poate afecta funcționalitatea website-ului:</p>
                        <ul class="list-disc pl-6">
                            <li class="mb-2">Imposibilitatea de a rămâne autentificat</li>
                            <li class="mb-2">Preferințele nu vor fi salvate</li>
                            <li class="mb-2">Anumite funcții și servicii pot deveni indisponibile</li>
                        </ul>
                    </div>
                </section>

                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">7. Actualizări ale Politicii Cookie</h2>
                    <div class="space-y-4">
                        <p>Ne rezervăm dreptul de a modifica această politică cookie în orice moment. Modificările vor fi publicate pe această pagină cu o nouă dată de actualizare.</p>
                        <p>Continuarea utilizării website-ului nostru după publicarea modificărilor constituie acceptarea acestora.</p>
                    </div>
                </section>

                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">8. Contact</h2>
                    <p class="mb-4">Pentru orice întrebări legate de utilizarea cookie-urilor pe website-ul nostru, ne puteți contacta la:</p>
                    <ul class="list-disc pl-6">
                        <li class="mb-2">Email: contact@lightningrevenue.com</li>
                        <li class="mb-2">Telefon: 0743 959 914</li>
                    </ul>
                </section>

                <div class="bg-gray-50 p-6 rounded-lg mt-8">
                    <p class="text-sm text-gray-600">
                        Această politică cookie face parte din politica noastră de confidențialitate. Pentru mai multe informații despre cum protejăm datele dumneavoastră, vă rugăm să consultați 
                        <a href="/lightning-revenue/politica-confidentialitate" class="text-blue-600 hover:text-blue-800">Politica de Confidențialitate</a>.
                    </p>
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