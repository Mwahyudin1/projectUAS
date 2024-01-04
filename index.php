<?php
include("koneksi.php");

$q = "";
if (isset($_GET['submit']) && !empty($_GET['q'])) {
    $q = $_GET['q'];
    $sql_where = "WHERE tanggal LIKE '%".$q."%' or toilet_id LIKE '%".$q."%' or kloset LIKE '%".$q."%' or wastafel LIKE '%".$q."%' or lantai LIKE '%".$q."%' or dinding LIKE '%".$q."%' or sabun LIKE '%".$q."%' or bau LIKE '%".$q."%' or users_id LIKE '%".$q."%'" ;


}
$title = 'Checklist Toilet';
$sql = 'SELECT * FROM checklist ';
if (isset($sql_where))
    $sql .= $sql_where;
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Checklist Toilet</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-lg">
        <h1 class="text-3xl mb-4">Checklist Toilet</h1>
        <form action="index.php" method="get" class="mb-4">
            <div class="flex items-center">
                <label for="q" class="mr-2">Cari Data Toilet</label>
                <input type="text" placeholder="Masukkan Pencarian" id="q" name="q" class="border rounded py-1 px-2 focus:outline-none focus:border-blue-500" value="<?php echo $q ?>">
                <button type="submit" name="submit" class="ml-2 bg-blue-500 hover:bg-blue-700 text-white py-1 px-4 rounded">Cari</button>
            </div>
        </form>
        <table class="w-full mb-4">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Tanggal</th>
                    <th class="border px-4 py-2">Kode Toilet</th>
                    <th class="border px-4 py-2">Kloset</th>
                    <th class="border px-4 py-2">Wastafel</th>
                    <th class="border px-4 py-2">Lantai</th>
                    <th class="border px-4 py-2">Dinding</th>
                    <th class="border px-4 py-2">Kaca</th>
                    <th class="border px-4 py-2">Bau</th>
                    <th class="border px-4 py-2">Sabun</th>
                    <th class="border px-4 py-2">Petugas</th>
                    <th class="border px-4 py-2">ID Barang</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result) : ?>
                    <?php while ($row = mysqli_fetch_array($result)) : ?>
                        <tr>
                            <td class="border px-4 py-2"><?= $row['tanggal']; ?></td>
                            <td class="border px-4 py-2"><?= $row['toilet_id']; ?></td>
                            <td class="border px-4 py-2"><?= $row['kloset']; ?></td>
                            <td class="border px-4 py-2"><?= $row['wastafel']; ?></td>
                            <td class="border px-4 py-2"><?= $row['lantai']; ?></td>
                            <td class="border px-4 py-2"><?= $row['dinding']; ?></td>
                            <td class="border px-4 py-2"><?= $row['kaca']; ?></td>
                            <td class="border px-4 py-2"><?= $row['bau']; ?></td>
                            <td class="border px-4 py-2"><?= $row['sabun']; ?></td>
                            <td class="border px-4 py-2"><?= $row['users_id']; ?></td>
                            <td class="border px-4 py-2"><?= $row['id']; ?></td>
                            <td class="border px-4 py-2">
                                <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded"><a href="ubah.php?id=<?= $row['id']; ?>">Ubah Data</a></button>
                                <button type="button" class="bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded"><a href="hapus.php?id=<?= $row['id']; ?>">Hapus Data</a></button>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else : ?>
                    <tr>
                        <td class="border px-4 py-2 text-center" colspan="12" style="color: darkblue;">Belum ada data</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="mb-4">
            <button class="bg-green-500 hover:bg-green-700 text-white py-1 px-4 rounded"><a href="tambah.php">Tambah Data Checklist</a></button>
        </div>
        <div>
            <button class="bg-gray-500 hover:bg-gray-700 text-white py-1 px-4 rounded"><a href="home.php">Kembali</a></button>
        </div>
    </div>
</body>

</html>
