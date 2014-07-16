<?php
    include('header.php');
    include('functions.php');
?>

        <header class="mainheader">
            <nav><ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="reg.php">Register</a></li>

		</ul></nav>
	   </header>
	
	<div class="maincontent">
		<div class ="content">
			<article class="topcontent">
				
	
				<content>
					<?php

			
			$connection = OpenDB();
			
			$title = $_POST['title'];
			$noteText = $_POST['noteText'];
	       //session_start();
           $userId =  $_SESSION['userId'];  
			
			$query ="INSERT INTO bootcamp2014_01_notes(title, noteText,users_id) VALUES('$title','$noteText','$userId')";
					
			$result = mysql_query($query)
			or die("query failed : ".mysql_error());
			
			mysql_close($connection);
		
		?>
		<br/>
		<p>1 note added</p>
		<button><a href="showNotes.php">Show Notes</a></button>
					
						
				</content>
			</article>
			
			
		</div>
	</div>
	
	
	<aside class="middle-sidebar">
        
            <p>Test</p> 
        
	</aside>
	

	<footer class="mainfooter">
   <p class="p">copyright&copy ITvarsity bootcamp 2014 (Sahal Motala , Haroon Vankra)</p>
	</footer>
</body>
</html>