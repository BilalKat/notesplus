<?php

            include 'header.php';
			include 'functions.php';  
		
			$connection = openDB();
			//session_start();
           //$userId =  $_SESSION['userId'];
            $id = $_REQUEST['id'];

			$query = "SELECT * FROM bootcamp2014_01_notes WHERE id ='$id'" ;
			
			$result = mysql_query($query)
			or die("querry failed : ".mysql_error());
			
			$row = mysql_fetch_array($result);
	
?>
		<form action="viewNote_handler.php" method="post">
			<table>
				<tr>
					<td><label for="title"></label></td>
					<td><input type="text" name="title" id="title" maxlength="50" size="84"  placeholder="Title" value="<?php echo                          $row['title'];?>"/></td>
				</tr>
			     
					<tr>
					<td><label for="noteText"></label></td>
					<td>   <textarea name="noteText" id="noteText" readonly cols="64" rows="20" maxlength="500" placeholder=" NoteText"                                     ><?php  echo $row['noteText'];?></textarea></td>
				    </tr>

				<tr>
					<td><input type="hidden" name="id" value="<?php echo $id;?>"></td>
				</tr>
					<tr>
				<td colspan="2" align="center">
					<a href="showNotes.php">Back</a>&nbsp;&nbsp;&nbsp;
					<a href="note.php">Add new note</a>
				</td>
				</tr>
			</table>
		</form>
	
	</body>
</html>