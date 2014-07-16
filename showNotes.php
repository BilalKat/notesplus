<?php include ('header.php');?>
    <script>
        function confirmDelete(noteId){
            var r = confirm('Are you sure?');
            var url = window.location.pathname; 
            var pathArray = url.split('/'); // <-- no need in "string()" 
            var host = pathArray[0]; 
            var newHost = 'deleteNote.php?id='+noteId; 
            if (r == true) { window.location = host + newHost; 
                            //document.location.href = '/headquarters/designReset';
                           }
                            else { alert('it didnt work'); } 
                            return false;
        }
    </script>
	<header class="mainheader">
		<nav><ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="reg.php">Register</a></li>
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
					<p class="p">
                        	<?php
        
			

			include("functions.php"); 
			
			$connection = OpenDB();
        
           $userId =  $_SESSION['userId']; 
               
			
			$query = "SELECT * FROM bootcamp2014_01_notes WHERE users_id ='$userId' ORDER BY date DESC" ;
			

			$result = mysql_query($query)
				or die("query failed : ".mysql_error());
				
			mysql_close($connection);
            //$title = $_POST['title'];
		?>
	
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
							echo('<td><a href="editNote.php?id='.$row['id'].'"><img class="t" src="img/pencil.png"width="30px"></a></td>');
							echo('<td><a onclick = "return confirmDelete('.$row['id'].')" href="#"><img class="t" src="img/bin.jpg"width="30px"></a></td>'); 
					
						echo("</tr>");
					}
				?>
			
			</table>
                    <button><a href="note.php">Create New Note</a></button>
                   
					<input type="submit" value="delete"/>  
                  <button>  <a href="login.php">Logout</a></button>
		</form>

						
				</content>
			</article>


		</div>
	</div>
	<aside class="top-sidebar">
		<article>
             <p><a href="#">Download notesplus</a></p>    

		</article>
	</aside>
	
	<aside class="middle-sidebar">
        
		<article>
		<img class="bootcamp" src="img/bt.jpg">
		</article>
        <img class="social" src="img/facebook.jpg">
        <img class="social" src="img/twitter.jpg">
        <img class="social" src="img/whatsapp.jpg">
        
        
	</aside>
	

	<footer class="mainfooter">
   <p class="p">copyright&copy ITvarsity bootcamp 2014 (Sahal Motala , Haroon Vankra)</p>
	</footer>
</body>

</html>

