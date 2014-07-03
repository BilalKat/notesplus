		<?php
					
		/*	include 'header.php'; */
			include 'functions.php';
	
		
			$connection = openDB();
		
			
			$title        = $_POST['title'];
			$noteText	  = $_POST['noteText'];
	
		
		$query ="UPDATE users SET title='$title', noteText='$noteText'
			WHERE id='$id'";
			
		$result = mysql_query($query)
		or die("query failed : ".mysql_error());
		?>
		<a href="showNotes.php">Confirm edits?</a>

	</body>
	
</html>