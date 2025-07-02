<?php
// Set the content type to XML
header("Content-Type: application/xml; charset=utf-8");

// Function to get the last modified time of a file
function getLastModified($file) {
    return date("c", filemtime($file));
}

// Base URL of the website
$baseURL = "https:/.com";

// Array of all pages with their priorities and change frequencies
$pages = [
    // Pagini principale
    "" => [
        "priority" => "1.0",
        "changefreq" => "weekly"
    ],
    "despre-noi" => [
        "priority" => "0.8",
        "changefreq" => "monthly"
    ],
    "contact" => [
        "priority" => "0.8",
        "changefreq" => "monthly"
    ],
    "preturi" => [
        "priority" => "0.9",
        "changefreq" => "weekly"
    ],
    
    // Servicii
    "promovare-google-ads-promovare-online" => [
        "priority" => "0.9",
        "changefreq" => "weekly"
    ],
    "dezvoltare-siteuri-bucuresti" => [
        "priority" => "0.9",
        "changefreq" => "weekly"
    ],
    "email-marketing-bucuresti" => [
        "priority" => "0.9",
        "changefreq" => "weekly"
    ],
    
    // Pagini legale și resurse
    "termeni-si-conditii" => [
        "priority" => "0.3",
        "changefreq" => "yearly"
    ],
    "politica-cookie" => [
        "priority" => "0.3",
        "changefreq" => "yearly"
    ],
    "politica-confidentialitate" => [
        "priority" => "0.3",
        "changefreq" => "yearly"
    ],
    "resurse-tehnice" => [
        "priority" => "0.7",
        "changefreq" => "monthly"
    ]
];

// Start XML output
echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

// Generate URLs for each page
foreach ($pages as $page => $metadata) {
    $url = $baseURL . ($page ? "/$page" : "");
    $filePath = __DIR__ . ($page ? "/pages/$page.php" : "/index.php");
    
    // Skip if file doesn't exist
    if (!file_exists($filePath)) {
        continue;
    }
    
    echo "\t<url>" . PHP_EOL;
    echo "\t\t<loc>" . htmlspecialchars($url) . "</loc>" . PHP_EOL;
    echo "\t\t<lastmod>" . getLastModified($filePath) . "</lastmod>" . PHP_EOL;
    echo "\t\t<changefreq>" . $metadata['changefreq'] . "</changefreq>" . PHP_EOL;
    echo "\t\t<priority>" . $metadata['priority'] . "</priority>" . PHP_EOL;
    echo "\t</url>" . PHP_EOL;
}

// End XML output
echo '</urlset>'; 