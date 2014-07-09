
		<?php
        
			
			include("header.php");
			include("functions.php"); 
			
			$connection = OpenDB();
          session_start();
           $userId =  $_SESSION['userId']; 
               
			
			$query = "SELECT * FROM bootcamp2014_01_notes WHERE users_id ='$userId'" ;
			

			$result = mysql_query($query)
				or die("query failed : ".mysql_error());
				
			mysql_close($connection);
            //$title = $_POST['title'];
		?>
	
			<form action="deleteNote.php" method="post">
			<table border="1">

			
				<tr>
				
				
				
				
			
				</tr>
			
				<?php
				
					while($row = mysql_fetch_array($result)){
						echo("<tr>");
							echo('<td><input type="checkbox" name="id[]" value="'.$row['id'].'"/></td>'); 
							echo("<td>".$row['title']."</td>");
						//	echo("<td>".$row['noteText']."</td>");
							echo('<td><a href="editNote.php?id='.$row['id'].'"><img src="img/pencil.png"width="20px"></a></td>');
							echo('<td><a href="deleteNote.php?id='.$row['id'].'"><img src="img/bin.jpg"width="20px"></a></td>');
					
						echo("</tr>");
					}
				?>
			
			</table>
                    <button><a href="note.php">Create New Note</a></button>
                   
					<input type="submit" value="delete"/>  
		</form>

	
		
	
		
	</body>
</html>