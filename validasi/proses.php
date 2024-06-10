<?php

require_once './helper/fungsi-validasi.php';

$peraturan = [
    'nama' => ['required'],
    'email' => ['required'],
    'username' => ['required'],
    'usia' => ['required'],
];

validasi($peraturan);
