<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Nama Aplikasi
    |--------------------------------------------------------------------------
    |
    | Nilai ini adalah nama dari aplikasi kamu, yang akan digunakan ketika
    | framework perlu menampilkan nama aplikasi dalam notifikasi atau elemen
    | UI lain di mana nama aplikasi perlu ditampilkan.
    |
    */

    'name' => env('APP_NAME', 'Manunggal mobilindo'),

    /*
    |--------------------------------------------------------------------------
    | Lingkungan Aplikasi
    |--------------------------------------------------------------------------
    |
    | Nilai ini menentukan "lingkungan" aplikasi kamu sedang berjalan.
    | Ini mungkin akan menentukan bagaimana kamu ingin mengkonfigurasi
    | berbagai layanan yang digunakan oleh aplikasi. Set ini di file ".env".
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Mode Debug Aplikasi
    |--------------------------------------------------------------------------
    |
    | Saat aplikasi dalam mode debug, pesan error yang detail dengan
    | jejak stack akan ditampilkan pada setiap kesalahan yang terjadi
    | dalam aplikasi. Jika dinonaktifkan, halaman error sederhana akan ditampilkan.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | URL Aplikasi
    |--------------------------------------------------------------------------
    |
    | URL ini digunakan oleh konsol untuk membuat URL dengan benar ketika
    | menggunakan alat baris perintah Artisan. Kamu harus mengatur ini ke
    | root aplikasi sehingga tersedia dalam perintah Artisan.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Zona Waktu Aplikasi
    |--------------------------------------------------------------------------
    |
    | Di sini kamu dapat menentukan zona waktu default untuk aplikasi kamu,
    | yang akan digunakan oleh fungsi tanggal dan waktu PHP. Zona waktu
    | diatur ke "UTC" secara default karena cocok untuk kebanyakan kasus.
    |
    */

    'timezone' => env('APP_TIMEZONE', 'Asia/Jakarta'),

    /*
    |--------------------------------------------------------------------------
    | Konfigurasi Lokal Aplikasi
    |--------------------------------------------------------------------------
    |
    | Lokal aplikasi menentukan bahasa default yang akan digunakan oleh metode
    | terjemahan Laravel. Opsi ini bisa diatur ke bahasa apa pun yang kamu
    | rencanakan untuk memiliki string terjemahan.
    |
    */

    'locale' => env('APP_LOCALE', 'id'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'id_ID'),

    /*
    |--------------------------------------------------------------------------
    | Kunci Enkripsi
    |--------------------------------------------------------------------------
    |
    | Kunci ini digunakan oleh layanan enkripsi Laravel dan harus diatur
    | ke string acak 32 karakter untuk memastikan semua nilai yang dienkripsi
    | aman. Kamu harus melakukannya sebelum mendistribusikan aplikasi.
    |
    */

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Driver Mode Pemeliharaan
    |--------------------------------------------------------------------------
    |
    | Opsi konfigurasi ini menentukan driver yang digunakan untuk menentukan
    | dan mengelola status "mode pemeliharaan" Laravel. Driver "cache"
    | akan memungkinkan mode pemeliharaan dikontrol di banyak mesin.
    |
    | Driver yang didukung: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

];
