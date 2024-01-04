<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit'])) 
{
    $id = $_POST['id'];
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

    $sql = "UPDATE checklist SET tanggal = '$tanggal', toilet_id = '$toilet_id', kloset = '$kloset', 
    wastafel = '$wastafel', lantai = '$lantai', dinding = '$dinding', kaca = '$kaca', 
    bau = '$bau', sabun = '$sabun', users_id = '$users_id' ";
    $sql .= "WHERE id = '{$id}'";
    $result = mysqli_query($conn, $sql);

    header('location: index.php');
    }

    $id = $_GET['id'];
    $sql = "SELECT * FROM checklist WHERE id = '{$id}'";
    $result = mysqli_query($conn, $sql);
    if (!$result) die('Error: Data tidak tersedia');
    $data = mysqli_fetch_array($result); 

    function is_select($var, $val) {
        if ($var == $val) return 'selected="selected"';
        return false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ubah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white p-6 rounded shadow-md max-w-md w-full lg:mt-24">
        <h1 class="text-2xl mb-4 text-center">Ubah Data</h1>
        <form method="post" action="ubah.php" enctype="multipart/form-data">
            <div>
                <span>Tanggal</span>
                <input type="date" name="tanggal" data-date-format="DD/MMM/YYYY" placeholder="dd/mm/yyyy" value = "<?php echo $data['tanggal'];?>"/>
            </div>

            <div>
                <span>Kode Toilet</span>
                <input type="text" name="toilet_id" value="<?php echo $data['toilet_id'];?>"/>
            </div>

            <div>
                <span>Kode Petugas</span>
                <input type="text" name="users_id" value="<?php echo $data['users_id'];?>"/>
            </div>

            <div>
                <label>Kloset</label>
                <select aria-label="Default select example" name="kloset" class="border rounded py-1 px-2 w-full focus:outline-none focus:border-blue-500">
                    <option <?php echo is_select ('Bersih', $data['kloset']);?> value="Bersih">Bersih</option>
                    <option <?php echo is_select ('Kotor', $data['kloset']);?> value="Kotor">Kotor</option>
                    <option <?php echo is_select ('Rusak', $data['kloset']);?> value="Rusak">Rusak</option>
                </select>
            </div>

            <div>
                <label>Wastafel</label>
                <select aria-label="Default select example" name="wastafel" class="border rounded py-1 px-2 w-full focus:outline-none focus:border-blue-500">
                    <option <?php echo is_select ('Bersih', $data['wastafel']);?> value="Bersih">Bersih</option>
                    <option <?php echo is_select ('Kotor', $data['wastafel']);?> value="Kotor">Kotor</option>
                    <option <?php echo is_select ('Rusak', $data['wastafel']);?> value="Rusak">Rusak</option>
                </select>
            </div>

            <div>
                <label>Lantai</label>
                <select aria-label="Default select example" name="lantai" class="border rounded py-1 px-2 w-full focus:outline-none focus:border-blue-500">
                    <option <?php echo is_select ('Bersih', $data['lantai']);?> value="Bersih">Bersih</option>
                    <option <?php echo is_select ('Kotor', $data['lantai']);?> value="Kotor">Kotor</option>
                    <option <?php echo is_select ('Rusak', $data['lantai']);?> value="Rusak">Rusak</option>
                </select>
            </div>

            <div>
                <label>Dinding</label>
                <select aria-label="Default select example" name="dinding" class="border rounded py-1 px-2 w-full focus:outline-none focus:border-blue-500">
                    <option <?php echo is_select ('Bersih', $data['dinding']);?> value="Bersih">Bersih</option>
                    <option <?php echo is_select ('Kotor', $data['dinding']);?> value="Kotor">Kotor</option>
                    <option <?php echo is_select ('Rusak', $data['dinding']);?> value="Rusak">Rusak</option>
                </select>
            </div>

            <div>
                <label>Kaca</label>
                <select aria-label="Default select example" name="kaca" class="border rounded py-1 px-2 w-full focus:outline-none focus:border-blue-500">
                    <option <?php echo is_select ('Bersih', $data['kaca']);?> value="Bersih">Bersih</option>
                    <option <?php echo is_select ('Kotor', $data['kaca']);?> value="Kotor">Kotor</option>
                    <option <?php echo is_select ('Rusak', $data['kaca']);?> value="Rusak">Rusak</option>
                </select>
            </div>

            <div>
                <label>Bau</label>
                <select aria-label="Default select example" name="bau" class="border rounded py-1 px-2 w-full focus:outline-none focus:border-blue-500">
                    <option <?php echo is_select ('Ya', $data['bau']);?> value="Ya">Ya</option>
                    <option <?php echo is_select ('Tidak', $data['bau']);?> value="Tidak">Tidak</option>
                </select>
            </div>

            <div>
                <label>Sabun</label>
                <select aria-label="Default select example" name="sabun" class="border rounded py-1 px-2 w-full focus:outline-none focus:border-blue-500">
                    <option <?php echo is_select ('Ada', $data['sabun']);?> value="Ada">Ada</option>
                    <option <?php echo is_select ('Habis', $data['sabun']);?> value="Habis">Habis</option>
                    <option <?php echo is_select ('Hilang', $data['sabun']);?> value="Hilang">Hilang</option>
                </select>
            </div>

            <div>
                <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                <input type="submit" name="submit" value="Simpan" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded w-full mt-4">
            </div>
        </form>
    </div>
</body>
</html>
