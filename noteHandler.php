<html>
	<body>
		
		<?php

			include 'functions.php';
			$connection = OpenDB();
			
			$title = $_POST['title'];
			$noteText = $_POST['noteText'];
	       session_start();
           $userId =  $_SESSION['userId'];  
			
			$query ="INSERT INTO bootcamp2014_01_notes(title, noteText,users_id) VALUES('$title','$noteText','$userId')";
					
			$result = mysql_query($query)
			or die("query failed : ".mysql_error());
			
			mysql_close($connection);
		
		?>
		<br/>
		<p>1 note added</p>
		<button><a href="showNotes.php">Show Notes</a></button>
	</body>
</html> 