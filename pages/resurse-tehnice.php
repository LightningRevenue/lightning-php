<?php 
include('../components/navbar.php');
renderNavbar();
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resurse Tehnice | LightningRevenue</title>
    <meta name="description" content="Resurse tehnice, proiecte open source și tehnologii inovatoare dezvoltate de echipa LightningRevenue.">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- AlpineJS pentru interactivitate -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50">
    <main class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Intro Section -->
            <div class="text-center mb-16">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Resurse Tehnice</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Bun venit în secțiunea de resurse tehnice! Aici veți găsi proiecte open-source, tutoriale, și documentație pentru tehnologiile pe care le dezvoltăm și utilizăm.
                </p>
            </div>

            <div class="flex flex-col md:flex-row gap-8">
                <!-- Sidebar -->
                <div class="w-full md:w-64 flex-shrink-0" x-data="{ open: true }">
                    <div class="md:hidden mb-4">
                        <button @click="open = !open" class="w-full flex items-center justify-between p-4 bg-white rounded-lg shadow">
                            <span class="font-medium">Navigare</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"></path>
                                <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"></path>
                            </svg>
                        </button>
                    </div>
                    <nav class="sticky top-8" :class="{'hidden': !open}" class="md:block">
                        <div class="bg-white shadow rounded-lg p-6">
                            <h2 class="text-lg font-semibold text-gray-900 mb-4">Categorii</h2>
                            <ul class="space-y-2">
                                <li>
                                    <a href="#tech-stack" class="text-blue-600 hover:text-blue-800 block py-1">Tech Stack</a>
                                </li>
                                <li>
                                    <a href="#proiecte-viitoare" class="text-blue-600 hover:text-blue-800 block py-1">Proiecte Viitoare</a>
                                </li>
                                <li>
                                    <a href="#domenii" class="text-blue-600 hover:text-blue-800 block py-1">Domenii de Expertiză</a>
                                </li>
                                <li>
                                    <a href="#contributie" class="text-blue-600 hover:text-blue-800 block py-1">Cum să Contribui</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <!-- Content -->
                <div class="flex-1">
                    <!-- Tech Stack Section -->
                    <section id="tech-stack" class="mb-16">
                        <div class="bg-white shadow rounded-lg p-6">
                            <h2 class="text-2xl font-bold text-gray-900 mb-6">Tech Stack</h2>
                            
                            <div class="grid gap-6 md:grid-cols-2">
                                <div class="space-y-4">
                                    <h3 class="text-xl font-semibold text-gray-800">Backend</h3>
                                    <ul class="space-y-2">
                                        <li class="flex items-center gap-2">
                                            <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                                            <span>PHP 8.x (Laravel, Symfony)</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                                            <span>Node.js (Express, NestJS)</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                                            <span>Python (Django, FastAPI)</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                                            <span>GraphQL</span>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="space-y-4">
                                    <h3 class="text-xl font-semibold text-gray-800">Frontend</h3>
                                    <ul class="space-y-2">
                                        <li class="flex items-center gap-2">
                                            <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                                            <span>React (Next.js)</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                                            <span>Vue.js (Nuxt.js)</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                                            <span>TypeScript</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                                            <span>Tailwind CSS</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="space-y-4">
                                    <h3 class="text-xl font-semibold text-gray-800">DevOps & Cloud</h3>
                                    <ul class="space-y-2">
                                        <li class="flex items-center gap-2">
                                            <span class="w-2 h-2 bg-purple-500 rounded-full"></span>
                                            <span>Docker & Kubernetes</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span class="w-2 h-2 bg-purple-500 rounded-full"></span>
                                            <span>AWS & Google Cloud</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span class="w-2 h-2 bg-purple-500 rounded-full"></span>
                                            <span>CI/CD (GitHub Actions, Jenkins)</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="space-y-4">
                                    <h3 class="text-xl font-semibold text-gray-800">Baze de Date</h3>
                                    <ul class="space-y-2">
                                        <li class="flex items-center gap-2">
                                            <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                                            <span>MySQL & PostgreSQL</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                                            <span>MongoDB</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                                            <span>Redis</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Proiecte Viitoare Section -->
                    <section id="proiecte-viitoare" class="mb-16">
                        <div class="bg-white shadow rounded-lg p-6">
                            <h2 class="text-2xl font-bold text-gray-900 mb-6">Proiecte Viitoare</h2>
                            
                            <div class="prose prose-lg max-w-none">
                                <p class="mb-6">În curând vom începe să publicăm proiecte open-source și resurse tehnice în următoarele categorii:</p>
                                
                                <ul class="space-y-4">
                                    <li class="flex items-start gap-4">
                                        <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold">Framework-uri și Librării</h3>
                                            <p class="text-gray-600">Componente reutilizabile, librării de utilități și framework-uri pentru dezvoltare rapidă</p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-4">
                                        <div class="flex-shrink-0 w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold">Boilerplate-uri și Starter Kits</h3>
                                            <p class="text-gray-600">Template-uri și configurații predefinite pentru diverse tipuri de proiecte</p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-4">
                                        <div class="flex-shrink-0 w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold">Tutoriale și Ghiduri</h3>
                                            <p class="text-gray-600">Resurse educaționale pentru diverse tehnologii și best practices</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <!-- Domenii Section -->
                    <section id="domenii" class="mb-16">
                        <div class="bg-white shadow rounded-lg p-6">
                            <h2 class="text-2xl font-bold text-gray-900 mb-6">Domenii de Expertiză</h2>
                            
                            <div class="grid gap-6 md:grid-cols-2">
                                <div class="border rounded-lg p-6">
                                    <h3 class="text-xl font-semibold mb-4">Dezvoltare Web</h3>
                                    <ul class="space-y-2 text-gray-600">
                                        <li>• Aplicații web la scară mare</li>
                                        <li>• API-uri RESTful și GraphQL</li>
                                        <li>• Arhitecturi microservicii</li>
                                        <li>• Progressive Web Apps (PWA)</li>
                                    </ul>
                                </div>

                                <div class="border rounded-lg p-6">
                                    <h3 class="text-xl font-semibold mb-4">E-commerce</h3>
                                    <ul class="space-y-2 text-gray-600">
                                        <li>• Platforme personalizate</li>
                                        <li>• Integrări cu gateway-uri de plată</li>
                                        <li>• Sisteme de inventar</li>
                                        <li>• Analytics și raportare</li>
                                    </ul>
                                </div>

                                <div class="border rounded-lg p-6">
                                    <h3 class="text-xl font-semibold mb-4">Marketing Digital</h3>
                                    <ul class="space-y-2 text-gray-600">
                                        <li>• Automatizări marketing</li>
                                        <li>• Integrări CRM</li>
                                        <li>• Email marketing</li>
                                        <li>• Analytics și tracking</li>
                                    </ul>
                                </div>

                                <div class="border rounded-lg p-6">
                                    <h3 class="text-xl font-semibold mb-4">DevOps & Cloud</h3>
                                    <ul class="space-y-2 text-gray-600">
                                        <li>• Containerizare și orchestrare</li>
                                        <li>• CI/CD pipelines</li>
                                        <li>• Cloud infrastructure</li>
                                        <li>• Monitoring și logging</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Cum să Contribui Section -->
                    <section id="contributie" class="mb-16">
                        <div class="bg-white shadow rounded-lg p-6">
                            <h2 class="text-2xl font-bold text-gray-900 mb-6">Cum să Contribui</h2>
                            
                            <div class="prose prose-lg max-w-none">
                                <p class="mb-6">
                                    Suntem deschiși colaborării și contribuțiilor din partea comunității. În curând vom publica ghiduri detaliate pentru:
                                </p>
                                
                                <ul class="space-y-4">
                                    <li class="flex items-center gap-2">
                                        <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Cum să raportezi bug-uri și să propui îmbunătățiri</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Procesul de trimitere a pull request-urilor</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Standarde de cod și convenții</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Cum să participi la discuții și să propui idei noi</span>
                                    </li>
                                </ul>

                                <div class="mt-8 p-4 bg-blue-50 rounded-lg">
                                    <p class="text-blue-800">
                                        <strong>Notă:</strong> Această secțiune este în curs de dezvoltare. Reveniți în curând pentru actualizări și noi resurse!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
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