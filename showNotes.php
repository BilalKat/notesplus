
		<?php
        
			
			include("header.php");
			include("functions.php"); 
			
			$connection = OpenDB();
            $id = $_POST['id'];
            $title = $_POST['title'];
			
			$query = "SELECT id FROM bootcamp2014_01_notes WHERE id = '$id'";
			

			$result = mysql_query($query)
				or die("query failed : ".mysql_error());
				
			mysql_close($connection);
            $title = $_POST['title'];
		?>
	
			<form action="deleteNote.php" method="post">
			<table border="1">

			
				<tr>
				<th></th>
				<th><?php echo "$title";?></th>
				<th><img src="img/pencil.png"width="40px"></th>
				<th><img src="img/bin.jpg"width="40px"></th>
				<th> </th>
			
				</tr>
			
				<?php
				
					while($row = mysql_fetch_array($result)){
						echo("<tr>");
							echo('<td><input type="checkbox" name="id[]" value="'.$row['id'].'"/></td>'); 
							echo("<td>".$row['title']."</td>");
							echo("<td>".$row['noteText']."</td>");
							echo('<td><a href="editNote.php?id='.$row['id'].'">edit</a></td>');
					
						echo("</tr>");
					}
				?>
			
			</table>
					<input type="submit" value="delete"/>  
		</form>

	
		
	
		
	</body>
</html>