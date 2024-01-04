<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit']))
{
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $stat = $_POST['stat'];
    $rol = $_POST['rol'];

    $sql = 'INSERT INTO users ( username, pass, nama, email, stat, rol)';
    $sql = "VALUES ('$username', '$pass', '$nama', '$email', '$stat', '$rol')";
    $result = mysqli_query($conn, $sql);
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Framework Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Framework Tailwind CSS -->
    <title>Tambah Akun</title>
</head>
<body class="font-mono px-20 min-h-screen flex flex-col content-center px-[2rem] lg:px-[20rem] justify-center flex-wrap py-4"">
    <div class="bg-slate-900 lg:w-full w-full mx-auto pt-14 rounded-md border-transfarant">
        <h1 class="text-gray-600 text-center lg:text-4xl text-[80px] bg-white pb-2.5 pt-0.5 font-bold">Buat Akun Baru</h1>
        <div>
            <form method="post" action="daftar.php" enctype="multipart/form-data">
                <div class="flex flex-col lg:px-8 px-10 lg:my-6 my-6">
                    <span class="text-white lg:text-[25px] text-5xl">Username</span>
                    <input type="text" name="username" placeholder="Silakan isi username anda" class=" block rounded lg:h-10 h-16 lg:text-xl text-[40px] lg:w-full w-full lg:px-5 px-5 lg:mt-1 mt-2.5">
                </div>
                <div class="flex flex-col lg:px-8 px-10 lg:my-6 my-6">
                    <span class="text-white lg:text-[25px] text-5xl">Password</span>
                    <input type="password" name="pass" placeholder="Silakan isi password anda" class=" block rounded lg:h-10 h-16 lg:text-xl text-[40px] lg:w-full w-full lg:px-5 px-5 lg:mt-1 mt-2.5">
                </div>
                <div class="flex flex-col lg:px-8 px-10 lg:my-6 my-6">
                    <span class="text-white lg:text-[25px] text-5xl">Nama</span>
                    <input type="text" name="nama" placeholder="Silakan isi nama anda" class=" block rounded lg:h-10 h-16 lg:text-xl text-[40px] lg:w-full w-full lg:px-5 px-5 lg:mt-1 mt-2.5">
                </div>
                <div class="flex flex-col lg:px-8 px-10 lg:my-6 my=6">
                    <span class="text-white lg:text-[25px] text-5xl">E-mail</span>
                    <input type="text" name="email" placeholder="Silakan isis alamat E-mail anda" class=" block rounded lg:h-10 h-16 lg:text-xl text-[40px] lg:w-full w-full lg:px-5 px-5 lg:mt-1 mt-2.5">
                </div>
                <div class="flex flex-col lg:px-8 px-10 lg:my-6 my-6">
                    <h3 class="text-white lg:text-[25px] text-5xl">Status</h3>
                    <select class=" block rounded lg:h-10 h-16 lg:text-xl text-[40px] lg:w-full w-full lg:px-5 px-5 lg:mt-1 mt-2.5">
                        <option class="text-base" value="">Silakan pilih</option> 
                        <option class="text-base" value="Aktif">Aktif</option>
                        <option class="text-base" value="Nonaktif">Non Aktif</option>
                    </select>
                </div>
                <div class="flex flex-col lg:px-8 px-10 lg:my-6 my-6">
                    <h3 class="text-white lg:text-[25px] text-5xl">Role</h3>
                    <select class=" block rounded lg:h-10 h-16 lg:text-xl text-[40px] lg:w-full w-full lg:px-5 px-5 lg:mt-1 mt-2.5">
                        <option class="text-base" value="">Silakan pilih</option>
                        <option class="text-base" value="Admin">Admin</option>
                        <option class="text-base" value="User">User</option>
                    </select>
                </div>
                <input class="block text-center lg:text-xl text-[48px] h-20 lg:h-10 w-2/6 bg-indigo-400 mx-auto py-1 rounded-xl lg:text-sm font-medium text-gray-800 lg:my-5 my-7" type="submit" name="submit" value="Simpan">
            </form>
        </div>
    </div>
</body>
</html>