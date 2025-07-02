<?php 
include('../components/navbar.php');
renderNavbar();
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica de Confidențialitate | LightningRevenue</title>
    <meta name="description" content="Politica de confidențialitate LightningRevenue - Informații despre modul în care colectăm, procesăm și protejăm datele dumneavoastră personale.">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <main class="py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-gray-900 mb-8">Politica de Confidențialitate</h1>
            
            <div class="prose prose-lg max-w-none">
                <p class="text-gray-600 mb-8">Ultima actualizare: <?php echo date('d.m.Y'); ?></p>

                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">1. Introducere</h2>
                    <p class="mb-4">LightningRevenue ("noi", "nouă", "Compania") se angajează să protejeze confidențialitatea datelor dumneavoastră personale. Această politică de confidențialitate explică modul în care colectăm, utilizăm, dezvăluim și protejăm informațiile dumneavoastră atunci când utilizați serviciile noastre.</p>
                    <p class="mb-4">Prin utilizarea serviciilor noastre, sunteți de acord cu colectarea și utilizarea informațiilor în conformitate cu această politică.</p>
                </section>

                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">2. Informațiile pe Care le Colectăm</h2>
                    
                    <h3 class="text-xl font-bold text-gray-900 mb-3">2.1. Date Furnizate Direct</h3>
                    <div class="bg-gray-50 p-6 rounded-lg mb-6">
                        <ul class="list-disc pl-6">
                            <li class="mb-2">Nume și prenume</li>
                            <li class="mb-2">Adresă de email</li>
                            <li class="mb-2">Număr de telefon</li>
                            <li class="mb-2">Adresă de facturare</li>
                            <li class="mb-2">Informații despre companie (dacă este cazul)</li>
                            <li class="mb-2">Conținut generat de utilizator (mesaje, feedback)</li>
                        </ul>
                    </div>

                    <h3 class="text-xl font-bold text-gray-900 mb-3">2.2. Date Colectate Automat</h3>
                    <div class="bg-gray-50 p-6 rounded-lg mb-6">
                        <ul class="list-disc pl-6">
                            <li class="mb-2">Adresă IP</li>
                            <li class="mb-2">Informații despre browser și dispozitiv</li>
                            <li class="mb-2">Date de utilizare și interacțiune cu site-ul</li>
                            <li class="mb-2">Cookie-uri și tehnologii similare</li>
                            <li class="mb-2">Date de localizare aproximativă</li>
                        </ul>
                    </div>
                </section>

                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">3. Cum Utilizăm Informațiile</h2>
                    <div class="space-y-4">
                        <p>Utilizăm informațiile colectate pentru:</p>
                        <ul class="list-disc pl-6">
                            <li class="mb-2">Furnizarea și îmbunătățirea serviciilor noastre</li>
                            <li class="mb-2">Procesarea tranzacțiilor și gestionarea contului</li>
                            <li class="mb-2">Comunicarea cu dumneavoastră despre servicii, actualizări și promoții</li>
                            <li class="mb-2">Personalizarea experienței utilizatorului</li>
                            <li class="mb-2">Analiza și îmbunătățirea website-ului</li>
                            <li class="mb-2">Respectarea obligațiilor legale</li>
                            <li class="mb-2">Prevenirea fraudelor și asigurarea securității</li>
                        </ul>
                    </div>
                </section>

                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">4. Baza Legală pentru Procesarea Datelor</h2>
                    <div class="space-y-4">
                        <p>Procesăm datele dumneavoastră personale pe următoarele baze legale:</p>
                        <ul class="list-disc pl-6">
                            <li class="mb-2">Executarea unui contract cu dumneavoastră</li>
                            <li class="mb-2">Consimțământul dumneavoastră explicit</li>
                            <li class="mb-2">Interesele noastre legitime de afaceri</li>
                            <li class="mb-2">Conformitatea cu obligațiile legale</li>
                        </ul>
                    </div>
                </section>

                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">5. Partajarea Informațiilor</h2>
                    <div class="space-y-4">
                        <p>Putem partaja informațiile dumneavoastră cu:</p>
                        <ul class="list-disc pl-6">
                            <li class="mb-2">Furnizori de servicii (procesatori de plăți, servicii de hosting)</li>
                            <li class="mb-2">Parteneri de afaceri (cu consimțământul dumneavoastră)</li>
                            <li class="mb-2">Autorități publice (când este cerut de lege)</li>
                        </ul>
                        <p class="mt-4">Nu vindem sau închiriem datele dumneavoastră personale către terți.</p>
                    </div>
                </section>

                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">6. Drepturile Dumneavoastră (GDPR)</h2>
                    <div class="bg-blue-50 p-6 rounded-lg mb-6">
                        <p class="mb-4">Conform GDPR, aveți următoarele drepturi:</p>
                        <ul class="list-disc pl-6">
                            <li class="mb-2">Dreptul de acces la date</li>
                            <li class="mb-2">Dreptul la rectificare</li>
                            <li class="mb-2">Dreptul la ștergere ("dreptul de a fi uitat")</li>
                            <li class="mb-2">Dreptul la restricționarea prelucrării</li>
                            <li class="mb-2">Dreptul la portabilitatea datelor</li>
                            <li class="mb-2">Dreptul de a obiecta</li>
                            <li class="mb-2">Dreptul de a nu face obiectul unei decizii bazate exclusiv pe prelucrarea automată</li>
                        </ul>
                        <p class="mt-4">Pentru a vă exercita aceste drepturi, vă rugăm să ne contactați folosind informațiile din secțiunea de contact.</p>
                    </div>
                </section>

                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">7. Securitatea Datelor</h2>
                    <div class="space-y-4">
                        <p>Implementăm măsuri de securitate adecvate pentru a proteja datele dumneavoastră:</p>
                        <ul class="list-disc pl-6">
                            <li class="mb-2">Criptare SSL/TLS pentru transmiterea datelor</li>
                            <li class="mb-2">Acces restricționat la date personale</li>
                            <li class="mb-2">Monitorizare continuă a sistemelor</li>
                            <li class="mb-2">Backup-uri regulate</li>
                            <li class="mb-2">Protocoale de securitate actualizate</li>
                        </ul>
                    </div>
                </section>

                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">8. Păstrarea Datelor</h2>
                    <div class="space-y-4">
                        <p>Păstrăm datele dumneavoastră personale atât timp cât este necesar pentru:</p>
                        <ul class="list-disc pl-6">
                            <li class="mb-2">Furnizarea serviciilor solicitate</li>
                            <li class="mb-2">Respectarea obligațiilor legale</li>
                            <li class="mb-2">Rezolvarea disputelor</li>
                            <li class="mb-2">Aplicarea acordurilor noastre</li>
                        </ul>
                        <p class="mt-4">După această perioadă, datele vor fi șterse sau anonimizate.</p>
                    </div>
                </section>

                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">9. Transferuri Internaționale de Date</h2>
                    <div class="space-y-4">
                        <p>Dacă transferăm date în afara UE/SEE, ne asigurăm că:</p>
                        <ul class="list-disc pl-6">
                            <li class="mb-2">Țara destinatară oferă un nivel adecvat de protecție</li>
                            <li class="mb-2">Există garanții adecvate (clauze contractuale standard)</li>
                            <li class="mb-2">Avem consimțământul dumneavoastră explicit</li>
                        </ul>
                    </div>
                </section>

                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">10. Cookie-uri și Tehnologii Similare</h2>
                    <p class="mb-4">Utilizăm cookie-uri și tehnologii similare pentru a îmbunătăți experiența dumneavoastră. Pentru mai multe informații, consultați <a href="/politica-cookie" class="text-blue-600 hover:text-blue-800">Politica noastră Cookie</a>.</p>
                </section>

                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">11. Modificări ale Politicii de Confidențialitate</h2>
                    <div class="space-y-4">
                        <p>Ne rezervăm dreptul de a actualiza această politică în orice moment. Modificările importante vor fi notificate prin:</p>
                        <ul class="list-disc pl-6">
                            <li class="mb-2">Email (dacă avem adresa dumneavoastră)</li>
                            <li class="mb-2">Notificare pe website</li>
                            <li class="mb-2">Actualizarea datei de "ultima modificare"</li>
                        </ul>
                    </div>
                </section>

                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">12. Contact DPO și Reclamații</h2>
                    <div class="space-y-4">
                        <p>Pentru orice întrebări despre această politică sau despre datele dumneavoastră personale:</p>
                        <ul class="list-disc pl-6">
                            <li class="mb-2">Email: contact@lightningrevenue.com</li>
                            <li class="mb-2">Telefon: 0743 959 914</li>
                            <li class="mb-2">Adresă: București, România</li>
                        </ul>
                        <p class="mt-4">Aveți dreptul să depuneți o plângere la Autoritatea Națională de Supraveghere a Prelucrării Datelor cu Caracter Personal (ANSPDCP) dacă considerați că v-au fost încălcate drepturile.</p>
                    </div>
                </section>

                <div class="bg-gray-50 p-6 rounded-lg mt-8">
                    <p class="text-sm text-gray-600">
                        Această politică de confidențialitate este complementară cu 
                        <a href="/termeni-si-conditii" class="text-blue-600 hover:text-blue-800">Termenii și Condițiile</a> și 
                        <a href="/politica-cookie" class="text-blue-600 hover:text-blue-800">Politica Cookie</a>.
                        Vă recomandăm să citiți toate aceste documente pentru o înțelegere completă a drepturilor și obligațiilor dumneavoastră.
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