<?php
   
    include('functions.php');
        
    $connection = openDB();
    $id = 1;
    $query ="UPDATE bootcamp2014_01_users SET active=true  WHERE id='$id'  ";    
    $result = mysql_query($query)
    or die("query failed : ".mysql_error());

?>