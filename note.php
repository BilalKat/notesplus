<?php include('header.php');?>

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
                        	 <form action="noteHandler.php" method="post">
            <input id="title" type="text" name="title" placeholder="Title"  maxlength="50"><br/>
            <textarea name="noteText" id="noteText" cols="64" rows="20" maxlength="500" placeholder="enter noteText"></textarea>
            <input type="submit" id="noteText" value="    save     " width="50px"/>
            <input type="reset" id="noteText" value="    cancel     " width="50px"/>
        </form>
						
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

