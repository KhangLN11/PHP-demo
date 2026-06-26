```php
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài tập 3 - Form đăng ký</title>
</head>
<body>

<h2>Đăng ký tài khoản</h2>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $hoten = $_POST["hoten"];
    $email = $_POST["email"];
    $matkhau = $_POST["matkhau"];

    if (empty($hoten))
    {
        echo "<p style='color:red'>Họ tên không được để trống.</p>";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "<p style='color:red'>Email không hợp lệ.</p>";
    }
    elseif (strlen($matkhau) < 6)
    {
        echo "<p style='color:red'>Mật khẩu phải có ít nhất 6 ký tự.</p>";
    }
    else
    {
        echo "<h3 style='color:green'>Đăng ký thành công!</h3>";

        echo "<p>Họ tên: " . htmlspecialchars($hoten) . "</p>";
        echo "<p>Email: " . htmlspecialchars($email) . "</p>";
    }

}

?>

<form method="POST">

    <label>Họ tên:</label><br>
    <input type="text" name="hoten"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Mật khẩu:</label><br>
    <input type="password" name="matkhau"><br><br>

    <input type="submit" value="Đăng ký">

</form>

</body>
</html>
```
