<?php
	mysql_connect("localhost", "root", "") 
	or die ("could not connect to SQL sever");
	mysql_select_db("Notesplus") 
	or die("could not find database");
?>