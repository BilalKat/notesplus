
<!----    ----- ------ ----- ---- --- --  ////// ////// ////// ////// /////// /////// ///// ---- ----- ------ ------ ------ --   -->

<?php

            include 'header.php';
			include 'functions.php';  
		
			$connection = openDB();
			//session_start();
           //$userId =  $_SESSION['userId'];
            $id = $_REQUEST['id'];

			$query = "SELECT * FROM bootcamp2014_01_notes WHERE id ='$id'" ;
			
			$result = mysql_query($query)
			or die("querry failed : ".mysql_error());
			
			$row = mysql_fetch_array($result);
	
?>

<body class="body">

	<header class="mainheader">
		<nav><ul> 
			<li><a href="showNotes.php">Back</a></li>
			<li><a href="login.php">Logout</a></li>
			</ul></nav>
	</header>
	
	<div class="maincontent">
		<div class ="content">
			<article class="topcontent">
				<header>
							<form action="editNoteHandler.php" method="post">
			<table>
				<tr>
					<td><label for="title"></label></td>
					<td><input type="text" name="title" id="title" maxlength="50" size="84"  placeholder="Title" value="<?php echo                          $row['title'];?>"/></td>
				</tr>
			     
					<tr>
					<td><label for="noteText"></label></td>
					<td>   <textarea name="noteText" id="noteText" cols="64" rows="20" maxlength="500" placeholder=" NoteText"                                     ><?php  echo $row['noteText'];?></textarea></td>
				    </tr>

				<tr>
					<td><input type="hidden" name="id" value="<?php echo $id;?>"></td>
				</tr>
					<tr>
				<td colspan="2" align="center">
					<input type="submit" value="save"/>
					<input type="reset" value="cancel"/>
				</td>
				</tr>
			</table>
		</form>
				</header>
				
				<footer> 
					<p class ="post-info">
				</footer>
				
				<content>
					<p class="p">About Notesplus App. About Notesplus App. About Notesplus App. About Notesplus App.
                                About Notesplus App. About Notesplus App. About Notesplus App. About Notesplus App.</p>
					
						
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

















