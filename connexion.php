<?php
   define('DB_SERVER', '127.0.0.1:9000');
   define('DB_USERNAME', 'houssem');
   define('DB_PASSWORD', 'houssem');
   define('DB_DATABASE', 'ECG');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>