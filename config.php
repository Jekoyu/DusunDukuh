<?php
// config.php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Deteksi environment
$env = $_SERVER['HTTP_HOST'] === 'localhost' ? 'local' : 'production';

if ($env === 'local') {
    // Load dari file .env
    function loadEnv($path) {
        if (!file_exists($path)) {
            die(".env file not found.");
        }
        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (strpos(trim($line), '#') === 0) continue;
            list($key, $value) = explode('=', $line, 2);
            $_ENV[trim($key)] = trim($value);
        }
    }
    loadEnv(__DIR__ . '/.env');

} else {
    // Langsung hardcode untuk production (InfinityFree)
    $_ENV['DB_HOST'] = 'sql112.infinityfree.com';
    $_ENV['DB_PORT'] = 3306;
    $_ENV['DB_DATABASE'] = 'if0_38676309_hmsi';
    $_ENV['DB_USERNAME'] = 'if0_38676309';
    $_ENV['DB_PASSWORD'] = '6blJrX3Ojh';
}
