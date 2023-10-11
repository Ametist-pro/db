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
?>