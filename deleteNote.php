<?php
                include 'functions.php';
		      include 'Header.php';
		
			
			
			
			if(isset($_POST['id'])){
				$id = $_POST['id'];
			}
			
				else if(isset($_REQUEST['id'])){
					$id[0] = $_REQUEST['id'];
				}
			if(isset($id)){
				$connection = openDB();
			
			
			foreach($id as $i){
				
				$query = "DELETE FROM bootcamp2014_01_notes WHERE id= '$i'";
				$results = mysql_query($query)
				or die("query failed: ".mysql_error());
			}
			$numberOfUsers = sizeOf($id);
			$message = "$numberOfUsers notes deleted." ;
			}
			else{
				 $message = "No notes selected";
			}
?>
		<p><?php echo $message;?></p>
		<a href="showNotes.php">back to Notes</a>
	</body>
</html>