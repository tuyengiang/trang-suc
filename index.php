<?php
include "functions.php";
if (isset($_POST['login'])) {
    if ($_POST['username'] == "nguyentuyengiangbn@gmail.com" && $_POST['password'] == "admin123456a@") {
        header('location:admin/');
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="<?php echo curPageURL(); ?>assets/css/login.css">
</head>
<body>
<form id="login" method="post">
    <h1>Đăng nhập</h1>
    <fieldset id="inputs">
        <input id="username" type="text" name="username" placeholder="Email" autofocus required>
        <input id="password" type="password" name="password" placeholder="Mật khẩu" required>
    </fieldset>
    <fieldset id="actions">
        <input type="submit" id="submit" name="login" value="Đăng nhập">
    </fieldset>
</form>
</body>
</html>
