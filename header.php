<?php
        session_start();
			if(!isset($_SESSION['isLoggedIn'])){
				header("Location:localhost/notesplus/loginform.php");
			}
       
?>

<!doctype html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title>
        Notesplus
    </title>
    <meta name="desrciption" content="Notesplus">
    <meta name="author" content="sitepoint"> 
   <link rel="stylesheet" href="style.css" type="text/css"/>  
</head>
    <body>
