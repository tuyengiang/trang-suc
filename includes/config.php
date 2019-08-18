<?php
//connect database
$username = "root";
$password = "";
$server = "localhost";
$dataname = "trang-suc";

$conn = mysqli_connect($server, $username, $password, $dataname);
if ($conn) {
    mysqli_set_charset($conn, 'utf8');
} else {
    die('Lỗi kết cơ sở dữ liệu') . mysqli_error($conn);
}

//define urrl
function curPageURL()
{
    $pageURL = 'http';
    $pageURL .= "://";
    $port = "1005";
    $folder = "trang-suc";
    $pageURL .= $_SERVER["SERVER_NAME"] . ':' . $port . "/" . $folder . "/admin/";
    return $pageURL;
}

?>