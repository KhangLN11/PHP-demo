<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông tin sinh viên</title>
</head>
<body>

<?php
    $Hoten = "Nguyen Hoang Gia";
    $age = 18;
    $nganhhoc = "Công nghệ lung tung";
    $email = "Svgia@gmail.com";
?>

<h1>Thông tin sinh viên</h1>

<p>Họ tên: <?php echo $Hoten; ?></p>

<p>Tuổi: <?php echo $age; ?></p>

<p>Ngành học: <?php echo $nganhhoc; ?></p>

<p>Email: <?php echo $email; ?></p>

<?php
if ($age >= 18)
{
    echo "<p style='color:green'>Đủ tuổi học đại học</p>";
}
else
{
    echo "<p style='color:red'>Chưa đủ tuổi học đại học</p>";
}
?>

</body>
</html>