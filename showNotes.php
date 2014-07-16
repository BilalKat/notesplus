
<!-------------------------------------------------------- ////////////////////////////////////// -------------------------------->

		<?php
    	
			include("header.php");
			include("functions.php"); 
			
			$connection = OpenDB();
    //      session_start();
           $userId =  $_SESSION['userId']; 
               
			
			$query = "SELECT * FROM bootcamp2014_01_notes WHERE users_id ='$userId'" ;
			

			$result = mysql_query($query)
				or die("query failed : ".mysql_error());
				
			mysql_close($connection);
            //$title = $_POST['title'];
		?>




<body class="body">

	<header class="mainheader">
		<nav><ul>
			<li><a href="#">Home</a></li>
			<li><a href="note.php">Create New Note</a></li>
			<li><a href="logout.php">Logout</a></li>

		</ul></nav>
	</header>
	
	<div class="maincontent">
		<div class ="content">
			<article class="topcontent">
				<header>
					<!--<h2><a href="#" title="First post">First post</a></h2>-->
				</header>
				
				<footer> 
					<p class ="post-info">
				</footer>
				
				<content>
			
			<form action="deleteNote.php" method="post">
			<table border="1">

			
				<tr>
				<th></th>
				<th>Title</th>
				<th>Edit</th>
				<th>Delete</th>

				</tr>
			
				<?php
				
					while($row = mysql_fetch_array($result)){
						echo("<tr>");
							echo('<td><input type="checkbox" name="id[]" value="'.$row['id'].'"/></td>'); 
							echo('<td><a href="viewNote.php?id='.$row['id'].'">'.$row['title'].'</a></td>');
						//	echo("<td>".$row['noteText']."</td>");
							echo('<td><a href="editNote.php?id='.$row['id'].'"><img src="img/pencil.png"width="40px" height="40px"></a></td>');
							echo('<td><a href="deleteNote.php?id='.$row['id'].'"><img src="img/bin.jpg"width="40px" height="40px"></a></td>');
					
						echo("</tr>");
					}
				?>
			
			</table>
                 
                   
					<input type="submit" value="Delete"/>  

		</form>

	                  
	
	</body>
</html>
					
						
				</content>
			</article>
			
			<article class="bottomcontent">
				<p>Go Away!!!!!</p>
				
	       
			</article>
		</div>
	</div>
	
	
	<aside class="middle-sidebar">
        

        
	</aside>
	

	<footer class="mainfooter">
   <p class="p">copyright&copy ITvarsity bootcamp 2014 (Sahal Motala , Haroon Vankra)</p>
	</footer>
</body>

</html>