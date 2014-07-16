		<?php
					
			include 'header.php'; 
			include 'functions.php';
	
		
			$connection = openDB();
		
			$id           = $_POST['id']; 
			$title        = $_POST['title'];
			$noteText	  = $_REQUEST['noteText'];
	
		
		$query ="UPDATE bootcamp2014_01_notes SET title='$title', noteText='$noteText' WHERE id='$id'";
			
		$result = mysql_query($query)
		or die("query failed : ".mysql_error());
		?>
		<a href="showNotes.php"><b>Confirm edits?</b></a>

	</body>
	
</html>