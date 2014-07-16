<?php   include('header.php');
        include('functions.php');
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
		<button><a href="showNotes.php">back to Notes</a></button>

						
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


