		<?php
					
		/*	include 'header.php'; */
			include 'functions.php';
	
		
			$connection = openDB();
		
			
			$title        = $_POST['title'];
			$noteText	  = $_POST['noteText'];
	
		
		$query ="UPDATE bootcamp2014_01_notes SET title='$title', noteText='$noteText'
			WHERE id='$id'";
			
		$result = mysql_query($query)
		or die("query failed : ".mysql_error());
		?>
		<a href="showNotes.php">Confirm edits?</a>

	</body>
	
</html>