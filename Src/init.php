<?php

require '../vendor/autoload.php';


use App\Exception\CustomException;
use App\Object\User;
    $err=new CustomException();
    $user = new User();
//    $user->firstName = $_POST['firstName'];
//    $user->lastName = $_POST['lastName'];
//    $user->number = $_POST['number'];
    $user->email = $_POST['email'];
    $user->password = $_POST['password'];
//    $user->password = $_POST['password'];
//    $user->city = $_POST['city'];
//    $user->street = $_POST['street'];
//    $user->credits = 10000;
//    $user->created = date('y-m-d h:m:s');
//    $user->role_id = 1;


    $stmt = $user->loginUser();
    if($stmt->rowCount() == 1) {
        echo '<h2>Uspesno logovanje</h2>';
        $err->varDumpStyle($user);
    } else {
        echo 'Nije uspelo logovanje';
        echo '<br>';
        echo '<br>';
        $err->varDumpStyle($user);
    }