<?php


session_start();
$DB_HOST = $_ENV["DB_HOST"];
$DB_USER = $_ENV["DB_USER"];
$DB_PASSWORD = $_ENV["DB_PASSWORD"];
$DB_NAME = $_ENV["DB_NAME"];
$DB_PORT = $_ENV["DB_PORT"];
$db=mysqli_connect("DB_HOST","DB_USER","DB_PASSWORD","DB_NAME","DB_PORT");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle</title>

    <style>
        body{
            background: linear-gradient(to right, rgb(147, 20, 220), rgb(54, 17, 71));
            color: white;
            
        }
      </style>
</head>
  <body>
    <h1>ola mundo</h1>
  </body>
  </html>
