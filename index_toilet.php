<?php
include("koneksi.php");

$q = "";
if (isset($_GET['submit']) && !empty($_GET['q'])) {
    $q = $_GET['q'];
    $sql_where = "WHERE keterangan LIKE '%".$q."%' or lokasi LIKE '%".$q."%'";
}
$title = 'Toilet';
$sql = 'SELECT * FROM toilet ';
if (isset($sql_where))
    $sql .= $sql_where;
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hidayat Tulloh UAS</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Kustomisasi tambahan jika diperlukan */
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold mb-4">Data Toilet</h1>
            <form class="flex" action="" method="get">
                <label for="q" class="mr-2">Cari Data Toilet</label>
                <input type="text" placeholder="Masukkan Pencarian" id="q" name="q" class="border rounded py-1 px-2 focus:outline-none focus:border-blue-500" value="<?php echo $q ?>">
                <button type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-4 rounded ml-2">Cari</button>
            </form>
        </div>

        <div class="mb-8">
            <table class="border-collapse border w-full">
                <thead>
                    <tr>
                        <th class="border py-2 px-4">Kode Toilet</th>
                        <th class="border py-2 px-4">Lokasi Toilet</th>
                        <th class="border py-2 px-4">Keterangan</th>
                        <th class="border py-2 px-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($result): ?>
                    <?php while($row = mysqli_fetch_array($result)): ?>
                    <tr>
                        <td class="border py-2 px-4"><?= $row['id'];?></td>
                        <td class="border py-2 px-4"><?= $row['lokasi'];?></td>
                        <td class="border py-2 px-4"><?= $row['keterangan'];?></td>
                        <td class="border py-2 px-4">
                            <button class="bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded">
                                <a href="hapus_toilet.php?id=<?= $row['id'];?>" class="text-white">Hapus Data</a>
                            </button>
                        </td>
                    </tr>
                    <?php endwhile; else: ?>
                    <tr>
                        <td colspan="4" class="border py-2 px-4">Belum ada data</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div class="mb-4">
            <button class="bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded">
                <a href="tambah_toilet.php" class="text-white">Tambah Data Toilet</a>
            </button>
        </div>

        <div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded">
                <a href="home.php" class="text-white">Kembali</a>
            </button>
        </div>
    </div>
</body>
</html>
