<?php

function openDB(){
    include 'config.php';

    //connecting to the sever
    $connection = mysql_connect("$host", "$username", "" )
        or die("could not connect to the sever".mysql_error());

    //connecting to the database
    $database	=	mysql_select_db($database,$connection)
        or die("could not find the database".mysql_error());



    return $connection;

}
function closeDB($connection){
    mysql_close($connection);
}

function encryptPassword($password){
    $password .= "#!&lmo";
    $password  = sha1($password);
    return $password;
}

function sanitize($input){
    $input = str_replace( "--", "",$input);
    $input = str_replace( "'", "",$input);
    $input = str_replace( '"', '',$input);
    $input = str_replace( '!', '',$input);

    return $input;
}
function sendVerificationEmail($to){
    $subject = "Notesplus Verify your email";
    $message = "Click on the following link to verify your email<br/>";
    $message.= "Link goes here";
    mail($to,$subject,$message);
}
?>