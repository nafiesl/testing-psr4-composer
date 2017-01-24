<?php

require __DIR__ . '/bootstrap.php';

// Kalo mau pakai `use` dengan namespace kaya gini
use Model\Kodok;

// Kalo sudah pakai `use`, langsung new nama kelas saja.
$kodok = new Kodok;
$kodok->melompat();