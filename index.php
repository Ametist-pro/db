<?php
$ip = "127.0.0.1";
$name = "root";
$p = "";
$db = "code";

$connect = mysqli_connect($ip, $name, $p, $db);

if ($connect == false)
{
    echo "Ошибка подключения";
}

$result = mysqli_query($connect,"SELECT * FROM `tags`");

while ($tags = mysqli_fetch_assoc($result))
{
    echo $tags['tag'];
    echo '<br>';
}
?>
