<html>
<head>
    
  <link rel="stylesheet" href="form.css" type="text/css"/>
    
</head>
    <body>
	<?php

        /*	include 'header.php';*/
			include 'functions.php'; 
			include 'config.php'; 
		$id = $_REQUEST['id']; 
		
	
		
			$connection = openDB();
			
			$query = "SELECT * FROM bootcamp2014_01_notes WHERE id='$id'";
			
			$result = mysql_query($query)
			or die("querry failed : ".mysql_error());
			
			$row = mysql_fetch_array($result);
	
	?>
		<form action="editNoteHandler.php" method="post">
			<table>
				<tr>
					<td><label for="title"></label></td>
					<td><input type="text" name="title" id="title" maxlength="50" size="84"  placeholder="Title" value="<?php echo $row['title'];?>"/>                       </td>
				</tr>
			
					<tr>
					<td><label for="noteText"></label></td>
					<td>   <textarea name="noteText" id="noteText" cols="64" rows="20" maxlength="500" placeholder=" NoteText"  value="<?php                                    echo $row['noteText'];?>"></textarea></td>
				    </tr>

				
			
				<tr>
					<td><input type="hidden" name="id" value="<?php echo $id;?>"></td>
				</tr>
					<tr>
				<td colspan="2" align="center">
					<input type="submit" value="   save   "/>
					<input type="reset" value="  cancel   "/>
				</td>
				</tr>
			</table>
		</form>
	
	</body>
</html>