<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $course = array("HTML", "CSS", "JavaScript", "PHP");
    ?>

    <ul>
<?php
    foreach($course as $mon)
{
    if($mon == "PHP")
    {
        echo "<li>$mon - Đang học</li>";
    }
    else
    {
        echo "<li>$mon</li>";
    }
}
?>
</ul>

</body>
</html>