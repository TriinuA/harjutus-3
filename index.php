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
		   echo "Mina " . trim("    kirjutan kogu jutu      ") . " järjest";
		 ?>
		 <h2>Arvud</h2>
		 <h3>Täisarvud</h3>
		 <?php  
		   $num1 = 13;
		   $num2 = 9;
		   echo ($num1 * $num2) * 10;
		 ?>
		 <h3>Numbri funktsioonid</h3>
		   <?php  
		     echo abs (-286); //absoluutväärtus
		     echo  "<br>";
		     echo pow(4, 3);  //astendamine, esmine on astendatav ja teine astendaja
		     echo  "<br>";
		     echo pow(2, 2);
		     echo  "<br>";
		     echo pow(247, 65);
		     echo  "<br>";
		     echo rand(); //genereerib suvalise juhusliku numbri
		     echo  "<br>";
		     echo rand(17, 35); //genereerib suvalise numbri vahemikus 17 kuni 35
		     echo  "<br>";
		    ?>
		 <h3>Numbrite kasvatamine ja kahandamine</h3>
		   <?php
		     $sample_nr = 45; 
		     $sample_nr = $sample_nr + 5; //Võimalus numbri  kasvatamiseks
		     echo $sample_nr;
		     echo  "<br>";

		     $sample_nr2 = 45;
		     $sample_nr2 += 5; //Sama asi lühemalt
		     echo $sample_nr2;
		     echo  "<br>";


		     $sample_nr3 = 45;
		     $sample_nr3 -=10; //Sama asi lahutamisega
		     echo $sample_nr3;
		     echo  "<br>";

		     $sample_nr4 = 45;
		     $sample_nr4 *=2; //Sama asi korrutamisega
		     echo $sample_nr4;
		     echo  "<br>";

		     $sample_nr5 = 45;
		     $sample_nr5 /=9; //Sama asi jagamisega
		     echo $sample_nr5;
		     echo  "<br>";
		   ?>
		 <h3>Numbri ja stringi liitmine</h3>
		 <p>
		 	Lugesin ülesande läbi ja sain aru. Kuna see on nagunii halb praktika, 
		 	siis seda läbi ei katsetanud.
		 </p>
  </body>
</html>	
