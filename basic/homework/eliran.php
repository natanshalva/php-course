<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
	<head>
		<style>
		</style>
	</head>
	<body>
		<form action="" method="post">
			<p>
				insert text :<textarea name="textarea" rows="10"> </textarea>
</p>			<p>
				words to filter:<input type="text" name="clean"  />
			</p>
			<p>
				<input type="submit" name="send" vale="send now" />
			</p>
		</form>
		<?php
		if (isset($_POST['send'])) {
			$textarea = $_POST['textarea'];
			$clean = $_POST['clean'];
			$subject = "*****";

			$expo = explode(",", $clean);

			foreach ($expo as $value) {

				$textarea = str_replace($value, $subject, $textarea);

			}

			echo "<br/>" . $textarea . "<br/>";
		}
		?>
	</body>
</html>