<?php
function checkLogin($email, $password)
{
    $sql = "SELECT * FROM user WHERE email ='$email' AND password ='$password'";
    return getOneData($sql);
}
function createUser($name, $email, $password)
{
    $sql = "INSERT INTO user (name,email, password,role) VALUES ('$name','$email','$password',1)";
    return pdo_excecute($sql);
}
