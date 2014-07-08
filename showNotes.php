
		<?php
        
			include("config.php");
			include("header.php");
			include("functions.php"); 
			
			$connection = OpenDB();
			
			$query = "SELECT * FROM bootcamp2014_01_notes";
			

			$result = mysql_query($query)
				or die("query failed : ".mysql_error());
				
			mysql_close($connection);
		?>
	
			<form action="deleteNote.php" method="post">
			<table border="1">

			
				<tr>
				<th></th>
				<th>Title</th>
				<th>NoteText</th>
				<th></th>
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