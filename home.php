<?php
session_start();
$title ='Home';
include_once 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Framework Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Framework Tailwind CSS -->
    <title>Home</title>
</head>
<body class="bg-gray-200 flex flex-col flex-wrap justify-center content-center min-h-screen">
    <div class="block bg-zinc-950 border border-slate-800 lg:w-2/5 text-white m-auto lg:p-5 rounded">
        <h1 class="font-medium bg-white text-center text-stone-700 lg:text-2xl font-mono lg:mb-5 rounded">SELAMAT DATANG DI APLIKASI CHECKLIST</h1>
        <ul class="rounded font-medium bg-white text-center text-stone-800 lg:text-lg lg:p-2.5">
            <li class="border-b-2 border-gray-600 lg:mb-2.5">Menu</li>
            <li class="rounded bg-blue-500 text-white lg:w-40 mx-auto lg:mb-2.5">
                <a class="" href="index.php">Checklist Toilet</a>
            </li>
            <li class="rounded bg-blue-500 text-white lg:w-40 mx-auto">
                <a href="index_toilet.php">Data Toilet</a>
            </li>
        </ul>
        <div class="lg:mt-5">
            <button type="button">
                <a class="rounded bg-blue-500 text-white lg:w-20 lg:px-2" href="login.php">Logout</a>
            </button>
        </div>
    </div>
</body>
</html>