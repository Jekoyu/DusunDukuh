<?php
// config.php

function loadEnv($path)
{
    if (!file_exists($path)) {
        die("⚠️ ERROR: File .env tidak ditemukan! Pastikan berada di direktori yang benar.");
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue; // Abaikan komentar
        list($key, $value) = explode('=', $line, 2);
        $key = trim($key);
        $value = trim($value);
        $_ENV[$key] = $value;
        putenv("$key=$value");
    }
}

// Panggil fungsi untuk membaca .env
loadEnv(__DIR__ . '/.env');
