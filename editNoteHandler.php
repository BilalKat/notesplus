
    <?php   include 'functions.php';
            include 'header.php'; 
?>
    
         
	<header class="mainheader">
		<nav><ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="reg.php">Register</a></li>
			<li><a href="#">login</a></li>

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
					

			
	
		
			$connection = openDB();
		
			$id           = $_POST['id']; 
			$title        = $_POST['title'];
			$noteText	  = $_REQUEST['noteText'];
	       $currentDate    = date("Y-m-d");    
		
		$query ="UPDATE bootcamp2014_01_notes SET title='$title', noteText='$noteText', date='$currentDate' WHERE id='$id' ";
			
		$result = mysql_query($query)
		or die("query failed : ".mysql_error());
		?>
		<a href="showNotes.php"><b>Confirm edits?</b></a>

						
				</content>
			</article>
			
							</content>
			</article-->

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
