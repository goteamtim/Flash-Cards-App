<?php
  
	//defining the flash cards as multiple arrays
	$phpFlashCards = array(
		array("print_r()","Prints an array, whatever it consists of...multi-dimentional arrays or even objects"),
		array("Variable variables ($$)","If you put 2 dollar signs in front of a variable and define something it will take whatever you used and create a new variable.  Meaning 2dollarsignVariableName = fruit will assign whatever the VariableName value."),
		array("Ternary if/else","If/else statements can be written: (TESTCASE) ? TRUE_ACTION : FALSE_ACTION;"),
		array("glob()","listing files within a directory. Also see Glob_BRACE."),
		array("mysql_real_escape_string()","Ensures sql strings entered into php are safe to execute."),
		array("require()","will attempt to include the file, but fail with a fatal error should it have a problem when trying to get the file. I like this method, as the PHP will stop executing immediately and bug out if the file is not loaded correctly (for whatever reason)."),
		array("func_get_args()","gets whatever amount of arguments that are passed into a function."),
		array("uniqid()","Generates a unique ID."),
		array("json_encode() and json_unencode()","Serializes arrays or objects into strings for use in other languages.")
	);
	//generate random flash card
	$currentCard = rand(0,count($phpFlashCards,0)-1);
	echo "<p><a href=main.php?curCard=".$currentCard."&def=1>Define</a></p>";
	
	
	//if def is set then run the definition otherwise print a new word
	if (isset($_GET['def'])){
		$curCard = $_GET['curCard'];
		//echo print_r($phpFlashCards[$curCard][0],true)."<br>";
		echo "Definition: ".print_r($phpFlashCards[$curCard][1],true);
		echo "<p><a href=main.php>Next Card</a></p>";
	}else {
		echo print_r($phpFlashCards[$currentCard][0],true)."<br>";

	}
	
?>
