<?php
    include 'config.php';
    include 'functions.php';
	
	
     $connection = openDB();
	 $query = "DROP TABLE IF EXISTS bootcamp2014_01_users,bootcamp2014_01_notes";
	  $results = mysql_query($query)
				or die("query failed: ".mysql_error());
	 
    $query ="CREATE TABLE IF NOT EXISTS `notesplus`.`bootcamp2014_01_users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(100) NULL,
  `lastname` VARCHAR(100) NULL,
  `username` VARCHAR(100) NULL,
  `password` VARCHAR(200) NULL,
  `email` VARCHAR(50) NULL,
  `gender` VARCHAR(1) NULL,
  `active` TINYINT(1) NULL,
  `activationDate` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB" ;
    
    $results = mysql_query($query)
				or die("query failed: ".mysql_error());
				
	
	
	$query	= "CREATE TABLE IF NOT EXISTS `notesplus`.`bootcamp2014_01_notes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(200) NULL,
  `noteText` TEXT NULL,
  `date` DATETIME NULL,
  `users_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_notes_users_idx` (`users_id` ASC),
  CONSTRAINT `fk_notes_users`
    FOREIGN KEY (`users_id`)
    REFERENCES `notesplus`.`bootcamp2014_01_users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
";
	
	
		$results = mysql_query($query)
				or die("query failed: ".mysql_error());
	
	
				
			
				
		 closeDB($connection);
?>