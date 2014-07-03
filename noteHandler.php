<html>
	<body>
		
		<?php

			include 'functions.php';
			include 'config.php';
			$connection = OpenDB();
			
			$title = $_POST['title'];
			$noteText = $_POST['noteText'];
	
			
	
			$password = encryptPassword($password);
		
			$query ="INSERT INTO notes(title, noteText)
					VALUES('$title','$noteText')";
					
			$result = mysql_query($query)
			or die("query failed : ".mysql_error());
			
			mysql_close($connection);
		
		?>
		<br/>
		<p>1 note added</p>
		<a href="showNotes.php">Show Notes</a>
	</body>
</html> 