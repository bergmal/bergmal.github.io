<!DOCTYPE HTML>
<html>
	<head>
		<SCRIPT LANGUAGE="JavaScript">
			var requiredfrom = "index.html"; //  required prev. page
		
			if (document.referrer.indexOf(requiredfrom) == -1) {
				alert("You must come to this page from " + requiredfrom);
				window.location=requiredfrom;
			}
		<title>Sign-In</title>
		<link rel="stylesheet" type="text/css" href="..\Resources\login-style.css">
		<link rel="stylesheet" type="text/css" href="../Resources/icon.ico.crdownload">
	</head>
	<body id="body-color">
		<div id="Sign-In">
			<fieldset style="width:95%"><legend>LOG-IN HERE</legend>
				<form method="POST" action="/Resources/conectivity.php">
					<p> -Username: <input type="text" name="user" size="20" /> </p>
					<p> -Password : <input type="password" name="pass" size="20" /> </p>
					<br>
					<p> <input id="button" type="submit" name="submit" value="Log-In"> </p>
				</form> 
			</fieldset>	 
		</div> 
	</body> 
</html>
