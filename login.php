<?php
session_start();
$title ='Login';
include_once 'koneksi.php';

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$pass}'";

    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_affected_rows($conn) !=0){
        $_SESSION['login'] = true;
        $_SESSION['username'] = mysqli_fetch_array($result);

        header('location: home.php');
        exit();
    }else
    $errorMsg = "<p style=\"color:red;\">Gagal Login,
    silakan ulangi lagi.</p>";
}
if (isset($errorMsg)) echo $errorMsg;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Framework Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Framework Tailwind CSS -->
    <title>Login</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body class="bg-stone-200 font-sans min-h-screen box-border flex flex-col content-center px-20 lg:px-[20rem] justify-center flex-wrap">
<div class="bg-white border-solid border-2 border-gray-400 rounded w-full min-h-[400px] py-4 shadow-2xl">
    <h1 class="my-5 text-5xl text-gray-500 font-medium border-b-4 border-indigo-500 pb-3.5 text-center">LOGIN</h1>
    <div>
        <form method="POST">
            <div class="px-7">
                <label for="staticEmail" class="font-medium text-gray-500 text-[48px] lg:text-xl">Username</label>
                <input type="text" id="staticEmail" placeholder="Username" name="username" class="border-solid border-2 border-gray-400 rounded pb-0.5 px-3 h-16 lg:text-xl text-[30px] w-full mt-2.5">
            </div>
            <br>
            <div class="px-7">
                <label for="inputPassword" class="font-medium text-gray-500 text-[48px] lg:text-xl">Password</label>
                <div>
                    <input type="password" id="inputPassword" placeholder="Password" name="pass" class="border-solid border-2 border-gray-400 rounded pb-0.5 px-3 h-16 lg:text-xl text-[30px] w-full mt-2.5">
                </div>
            </div>
            <br>
                <button class="block mx-auto text-center lg:text-xl text-[48px] h-20 lg:h-10 w-2/6 bg-indigo-400 mx-auto py-1 rounded-xl lg:text-sm font-medium text-gray-800" type="submit" name="submit">Login</button>
            <br>
            <div class="px-7 pb-3">
                <p class="text-gray-500 text-5xl my-4 lg:text-lg pb-2">Belum memiliki akun??</p>
                <a class="text-center px-4 lg:text-xl text-[48px] h-20 w-2/6 bg-indigo-400 mx-auto py-1 rounded-xl lg:text-sm font-medium text-gray-800" href="daftar.php">Buat Akun Baru</a>
            </div>
        </form>
    </div>
</div>
</body>
