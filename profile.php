<?php include ('header.php');?>

	<header class="mainheader">
		<nav><ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="reg.php">Register</a></li>
			<li><a href="login.php">login</a></li>

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
    include ('functions.php');
    include ('header.php');

    $username = "";
    $firstname = "";

?>


        <img src="img/shaghai.jpg" height="250" width="200" alt="<?php echo $username; ?>'s Profile" title="<? echo $username; ?>'s Profile"/>
        <br/>
        <div class="textHeader"><?php echo $username; ?>'s Profile </div>
        <div class="profileLeftSideContent">some content about this persons profile..</div>

        <div class="profileLeftSideContent">
        </div>

<?php
    $connection = OpenDB;
    $id = $_POST['id'];
    $query = "SELECT username  FROM bootcamp2014_01_users WHERE id ='$id'" ;
			

			$result = mysql_query($query)
				or die("query failed : ".mysql_error());
?>

						
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






