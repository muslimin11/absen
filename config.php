<?php 
$server = 'localhost';
$user_db = 'root';   // root
$password_db = ''; // ''
$db_name = 'absensi';

$con = new mysqli($server, $user_db, $password_db, $db_name);

if ($con->connect_error) {
    die("<script>alert('Tidak tersambung dengan database')</script>");
}

?>