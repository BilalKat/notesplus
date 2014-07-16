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
			
			<!--article class="bottomcontent">
				<header>
				
				</header>
				
				<footer>
					<p class ="post-info"></p>
				</footer>
				
				<content><p class="p">
					Allow us to show you the way…

We understand that choosing a career can be a difficult and daunting task, and finding the right information to assist you in making an informed decision isn’t easy.

That is why IT varsity offers you absolutely free career guidance. On this page we’ve listed a few of the most commonly asked questions regarding careers, along with our answers in plain and simple language.

If you have a question that is not here, please feel free to contact us to chat – we will be happy to assist!

For a quick read on the subject of IT careers, check out our Infographic: Why IT at IT varsity?</p>
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

