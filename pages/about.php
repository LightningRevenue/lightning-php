<?php
require_once '../components/navbar.php';
require_once '../components/footer.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - PHP Lightning</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <?php renderNavbar('about'); ?>

    <main>
        <!-- Hero Section -->
        <section class="bg-white py-20 px-6">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">About Us</h1>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        We're passionate about creating beautiful, efficient, and user-friendly web experiences using modern technologies.
                    </p>
                </div>

                <!-- Team Section -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mt-16">
                    <!-- Team Member 1 -->
                    <div class="text-center">
                        <div class="w-32 h-32 mx-auto rounded-full bg-blue-600 flex items-center justify-center mb-4">
                            <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900">John Doe</h3>
                        <p class="text-blue-600">Founder & CEO</p>
                        <p class="text-gray-600 mt-2">Leading the vision and strategy of PHP Lightning.</p>
                    </div>

                    <!-- Team Member 2 -->
                    <div class="text-center">
                        <div class="w-32 h-32 mx-auto rounded-full bg-blue-600 flex items-center justify-center mb-4">
                            <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900">Jane Smith</h3>
                        <p class="text-blue-600">Lead Developer</p>
                        <p class="text-gray-600 mt-2">Architecting our technical solutions.</p>
                    </div>

                    <!-- Team Member 3 -->
                    <div class="text-center">
                        <div class="w-32 h-32 mx-auto rounded-full bg-blue-600 flex items-center justify-center mb-4">
                            <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900">Mike Johnson</h3>
                        <p class="text-blue-600">Design Lead</p>
                        <p class="text-gray-600 mt-2">Creating beautiful user experiences.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Values Section -->
        <section class="py-20 px-6 bg-gray-100">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Our Values</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Value 1 -->
                    <div class="bg-white rounded-lg p-8 shadow-lg">
                        <div class="text-blue-600 mb-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Quality First</h3>
                        <p class="text-gray-600">We never compromise on quality. Every line of code, every pixel matters.</p>
                    </div>

                    <!-- Value 2 -->
                    <div class="bg-white rounded-lg p-8 shadow-lg">
                        <div class="text-blue-600 mb-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Innovation</h3>
                        <p class="text-gray-600">Constantly pushing boundaries and embracing new technologies.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php renderFooter(); ?>
</body>
</html> 