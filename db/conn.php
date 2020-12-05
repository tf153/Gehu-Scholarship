<?php
  $host = "freedb.tech";
  $db = "freedbtech_RJ";
  $user = "freedbtech_tf153";
  $pass = "bepositive";
  $charset = 'utf8mb4';
/*
  $host = '127.0.0.1';
  $db = 'scholar';
  $user = 'root';
  $pass= '';
  $charset = 'utf8mb4';
*/
  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

  try{
    $pdo=new PDO($dsn,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e){
    echo "Connection Not Established";
  }
?>
