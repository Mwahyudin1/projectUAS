<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit']))
{
    $tanggal = $_POST['tanggal'];
    $toilet_id = $_POST['toilet_id'];
    $kloset = $_POST['kloset'];
    $wastafel = $_POST['wastafel'];
    $lantai = $_POST['lantai'];
    $dinding = $_POST['dinding'];
    $kaca = $_POST['kaca'];
    $bau = $_POST['bau'];
    $sabun = $_POST['sabun'];
    $users_id = $_POST['users_id'];

    $sql = 'INSERT INTO checklist (tanggal, toilet_id, kloset, wastafel, lantai, dinding, kaca, bau, sabun, users_id) ';
    $sql .= "VALUES ('{$tanggal}', '{$toilet_id}', '{$kloset}', '{$wastafel}', '{$lantai}', '{$dinding}', '{$kaca}', '{$bau}', '{$sabun}', '{$users_id}')";
    $result = mysqli_query($conn, $sql);
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white p-6 rounded shadow-md max-w-md w-full lg:mt-48">
        <h1 class="text-2xl mb-4 text-center">Tambah Data</h1>
        <form method="post" action="tambah.php" enctype="multipart/form-data">
            <div class="mb-4">
                <label class="block mb-1">Tanggal</label>
                <input type="date" name="tanggal" data-date-format="DD/MMM/YYYY" placeholder="dd/mm/yyyy" class="border rounded py-1 px-2 w-full focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label class="block mb-1">Kode Toilet</label>
                <input type="text" name="toilet_id" class="border rounded py-1 px-2 w-full focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label class="block mb-1">Kode Petugas</label>
                <input type="text" name="users_id" class="border rounded py-1 px-2 w-full focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label class="block mb-1">Kloset</label>
                <select aria-label="Default select example" name="kloset" class="border rounded py-1 px-2 w-full focus:outline-none focus:border-blue-500">
                    <option value=""></option>
                    <option value="Bersih">Bersih</option>
                    <option value="Kotor">Kotor</option>
                    <option value="Rusak">Rusak</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block mb-1">Wastafel</label>
                <select aria-label="Default select example" name="wastafel" class="border rounded py-1 px-2 w-full focus:outline-none focus:border-blue-500">
                    <option value=""></option>
                    <option value="Bersih">Bersih</option>
                    <option value="Kotor">Kotor</option>
                    <option value="Rusak">Rusak</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block mb-1">Lantai</label>
                <select aria-label="Default select example" name="lantai" class="border rounded py-1 px-2 w-full focus:outline-none focus:border-blue-500">
                    <option value=""></option>
                    <option value="Bersih">Bersih</option>
                    <option value="Kotor">Kotor</option>
                    <option value="Rusak">Rusak</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block mb-1">Dinding</label>
                <select aria-label="Default select example" name="dinding" class="border rounded py-1 px-2 w-full focus:outline-none focus:border-blue-500">
                    <option value=""></option>
                    <option value="Bersih">Bersih</option>
                    <option value="Kotor">Kotor</option>
                    <option value="Rusak">Rusak</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block mb-1">Kaca</label>
                <select aria-label="Default select example" name="kaca" class="border rounded py-1 px-2 w-full focus:outline-none focus:border-blue-500">
                    <option value="none" selected>Pilih salah satu</option>
                    <option value="Bersih">Bersih</option>
                    <option value="Kotor">Kotor</option>
                    <option value="Rusak">Rusak</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block mb-1">Bau</label>
                <select aria-label="Default select example" name="bau" class="border rounded py-1 px-2 w-full focus:outline-none focus:border-blue-500">
                    <option value=""></option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block mb-1">Sabun</label>
                <select aria-label="Default select example" name="sabun" class="border rounded py-1 px-2 w-full focus:outline-none focus:border-blue-500">
                    <option value=""></option>
                    <option value="Ada">Ada</option>
                    <option value="Habis">Habis</option>
                    <option value="Hilang">Hilang</option>
                </select>
            </div>
            <input type="submit" name="submit" value="Simpan" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded w-full">
        </form>
    </div>
</body>
</html>
