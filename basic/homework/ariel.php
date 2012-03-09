<?php
//will use later to display the final string or error message
$showDiv = FALSE;
$showError = FALSE;
$str = "";
//Check if form had been sent
if (isset($_POST['btn'])) {

//Catch the Strings
$str = $_POST['StringToEdit'];
$words = $_POST['ForbidenWords'];

// fix for line braeke - didnt work with nl2br
$str = str_replace( array("\n","\r","\r\n"), '<br />', $str );

//Seperate Words forbiden to array and remove white spaces

$arr = explode(',', $words);

//check if array index[] is in the User String and replace it with *******
if (!empty($str) && !empty($words)) {
	foreach ($arr as $key => $value) {
		//trims only the whitespace in the begining - so it allows multiple-word like "son -- a -----"
		$value = trim($value);
		$str = str_replace($value, '******', $str);
	}
  	$showDiv = TRUE;
} else {
	$showError = TRUE;
  	$showDiv = FALSE;
}
//out put the new string with boolean for jquery

}
?>
<!DOCTYPE >
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>HomeWork</title>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	
	<style type="text/css" media="screen">
	#container{
		width:500px;
		margin: 0 auto;
		padding: 10px;
	}
	textarea{
		width: 300px;
		height: 150px;
		padding: 6px;
		display: block;
		clear: both;
		border: 1px solid #ccc;
		margin-bottom: 20px;
	}
	input[type="text"]{
		width: 300px;
		height: 30px;
		padding: 6px;
		display: block;
		clear: both;
		border: 1px solid #ccc;
		margin-bottom: 20px;
	}
	input[type="submit"]{
		width: 300px;
		height: 30px;
		padding: 6px;
		display: block;
		clear: both;
	}	
	.nice{
		font-size: 30px;
		border: 2px solid red;
		padding: 5px;
		width: 288px;
	}
	</style>
	
	<script>
	// if the $showDiv is true so the form process is done and we can show the output
	// if the $showError is true so show that div 
	<?php if ($showDiv) { ?>
		$(document).ready(function(){
			var str = "<?php echo $str ?>";
			$("#finalOutput").append("<p>" + str + "</p>");
			$("#finalOutput").addClass("nice");
			$("#finalOutput").fadeIn(1000);
		});
	<?php };
	if ($showError) { ?>
		$(document).ready(function(){
			$("#error").addClass("nice");
			$("#error").fadeIn(1000);
		});
	<?php }; ?>
	</script>
</head>
<body>
	<div id="container">
		<form action="" method="post">
			<textarea name="StringToEdit" placeholder="Type a String"></textarea>
			<input type="text" name="ForbidenWords" placeholder="Type Words to Exclude (sepereted by comma)" />
			<input type="submit" value="Send" name="btn"/>
		</form>
		<div id="finalOutput" style="display: none">
			<p><span style="color:red">This is what came out at the end:</span></p>
		</div>
		<div id="error" style="display: none">
			<p>One or All of you Fields is Empty - Plase try again</p>
		</div>
	</div>
</body>
</html>
