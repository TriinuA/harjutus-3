<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>harjutus-3 - Andmetüübid</title>
</head>
  <body>
  	 <h2>Muutujad</h2>
	  	 <?php 
	  	   $randomnumber = 10;
	  	   echo $randomnumber;
	  	   echo "<br>"; 
	  	 ?>
	  	 <?php  
	  	   $randomnumber = 22;
	  	   echo $randomnumber;
	  	 ?>
	 <h3>Stringid</h3> 	 
	   <?php 
	     $message = "Hello World!<br>";
	     echo $message;
	     $message2 = 'Hello :)';
		 echo $message2;
		 echo "<br>";
		 $textnum = "24";
		 $textnum2 = "26";
		 echo $textnum . $textnum2;
		?>
		<h3>Nimekirja väljastamine muutujate ja stringide abil</h3> 
		 <?php  
		   $studient1 = "Ingrid";
		   $studient2 = "Eve";
		   $studient3 = "Merili";
		   $studient4 = "Silja";
		   $studient5 = "Fränk";
		 ?>
		 <ul>
		 	<li><?php echo $studient1 ?></li>
		 	<li><?php echo $studient2 ?></li>
		 	<li><?php echo $studient3 ?></li>
		 	<li><?php echo $studient4 ?></li>
		 	<li><?php echo $studient5 ?></li>
		 </ul>
		 <?php  
		   $firstname = "Triinu";
		   $lastname = "Ausmees";
		   $fullname = $firstname . " " . $lastname;

		   echo $fullname;
		 ?>

		<h3>Stringi interpolatsioon</h3>  
			<?php
			  $test = "Proovime";
			  echo "$test kas interpolatsioon töötab";
			  echo "<br>";

			  $age = "35";
			  echo  "Ma olen {$age}ne aastane";

			 ?>
		 <h3>Nimekirja väljastamine muutujate ja stringide abil</h3>
		 <?php  
		   $source = "see Tekst SISALDAB suuri TAHEMARKE!!!";
		   $lower = strtolower($source);
		   echo  "<br>" . $source;
		   echo "<p>{$lower}</p>";
		   echo  "<br>";
		   $upper = strtoupper($source);
		   echo "<p>{$upper}</p>";
		   $firstupper = ucfirst($lower);
		   echo "<p>{$firstupper}</p>";
		   $allfirstupper = ucwords($lower);
		   echo "<p>{$allfirstupper}</p>";
		   echo strlen($source);
		   echo  "<br>";
		   echo "Mina" . trim("    kirjutan kogu jutu      ") . "järjest";
		 ?>







  </body>
</html>	
