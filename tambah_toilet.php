<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit']))
{
    $toilet_id = $_POST['toilet_id'];
    $lokasi = $_POST['lokasi'];
    $keterangan = $_POST['keterangan'];

    $sql = 'INSERT INTO toilet (id, lokasi, keterangan) ';
    $sql .= "VALUES ('{$toilet_id}', '{$lokasi}', '{$keterangan}')";
    $result = mysqli_query($conn, $sql);
    header('location: index_toilet.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Toilet</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">Tambah Data Toilet</h1>
        <div class="mb-4">
            <form method="post" action="tambah_toilet.php" enctype="multipart/form-data">
                <div class="mb-4">
                    <span class="block">Kode Toilet</span>
                    <input type="text" name="toilet_id" class="border rounded py-1 px-2 w-full focus:outline-none focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label class="block">Lokasi</label>
                    <select aria-label="Default select example" name="lokasi" class="border rounded py-1 px-2 w-full focus:outline-none focus:border-blue-500">
                        <option value=""></option>
                        <option value="Office">Office</option>
                        <option value="Factory 1">Factory 1</option>
                        <option value="Factory 2">Factory 2</option>
                        <option value="Security">Security</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block">Keterangan</label>
                    <select aria-label="Default select example" name="keterangan" class="border rounded py-1 px-2 w-full focus:outline-none focus:border-blue-500">
                        <option value=""></option>
                        <option value="Sudah">Sudah</option>
                        <option value="Belum">Belum</option>
                    </select>
                </div>
                <input type="submit" name="submit" value="Simpan" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded">
            </form>
        </div>
    </div>
</body>
</html>
