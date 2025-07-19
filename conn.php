<?php



$host = 'localhost';
$db_name = 'pro-sqlinjection';//namedatabase
$username = 'root';
$password ='';
$conmysql = new mysqli($host, $username, $password, $db_name);//هذا اتصال بقاعدة البيانات القديم

$conn = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);//هذا اتصال بقاعدة البيانات الجديد
    




?>