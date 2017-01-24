# Testing Composer Autoload

Testing composer psr-4 autoload mengikuti [panduan ini](https://jeremycurny.com/2016/06/30/php-psr-4-autoloader/).

1. Buat file `composer.json` di root project, isikan :

    ```json
    {
        "autoload": {
            "psr-4": {"": "src/"}
        }
    }
    ```
-  pada terminal, cd ke direktori project, lalu `composer dumpautoload`.
    Otomatis muncul folder `vendor` dengan isinya file `autoload.php`.
-  Buat file `bootstrap.php` di root project, isikan:
    ```php
    <?php
    // bootstrap.php
    define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);
    define('VENDOR', ROOT . 'vendor' . DIRECTORY_SEPARATOR);

    require VENDOR . 'autoload.php';
    ```
-  Buat direktori `src` di root project
-  Buat file `class` contoh, misal `Testing.php` yang isinya:
   ```php
   <?php

    class Testing
    {
        function __construct()
        {
            echo "testing kelas dipanggil";
        }
    }
   ```
-  Buat file `index.php` pada root project, yang me-*require* file `boostrap.php`, misal isinya:

    ```php
    <?php

    require __DIR__ . '/bootstrap.php';

    $class = new Testing;
    ```
-  Buka browser kesayangan kita, menuju ke project root, misal di PC saya:

    `http://localhost/php/riset/testing-composer`

    maka akan muncul konten berisi:

    ```html
    testing kelas dipanggil
    ```