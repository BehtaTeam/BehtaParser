<div id="parser" style="background: #FFF; padding: 2px 2px">
<?php
include('parsefunc.php');
$teset = array();
?>
</div>
<!DOCTYPE HTML>
<html lang="fa">
<head>
	<meta charset="utf-8">
	<title>Parser</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body dir="ltr">

	<div id="parser">
		<h2><span class="fontawesome-lock"></span>BehtaParser</h2>
		<form action="Parser.php" method="POST">
		<center>
			<fieldset>
			<?php
				if (isset($text)){
					echo $text;
				}
			?>
				<p><label for="text">Enter Youre Code:</label></p>
				<p><textarea name="inText" cols="40" rows="15" id="inText"><?php echo substr($in, 0, -1); ?></textarea></p>
				<p><label for="textarea">Output:</label></p>
				<p><textarea cols="45" rows="10" readonly><?php echo $opresult ?> </textarea>
				<textarea cols="25" rows="10" readonly><?php echo $opsymbolArr ?> </textarea></p>
				<p><input type="submit" value="Parse"></p>

			</fieldset>
		</center>
		</form>

	</div> <!-- end of parser output -->

</body>	
</html>