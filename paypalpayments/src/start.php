<?php

session_start();
$_SESSION['user_id'] = 1 ;
$db = mysqli_connect ('127.0.0.1','root','','ezhalha') ;

$user = $db->prepare("SELECT * FROM users WHERE id = :user_id");

$user->execute(['user_id' => $_SESSION['user_id']]) ;
$user = $user->fetchObject();
