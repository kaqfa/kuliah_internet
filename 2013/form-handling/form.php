<!DOCTYPE HTML>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="form_processor1.php" method="post">
	  Your Name: <input type="text" name="yourname" /><br />
		E-mail: <input type="email" name="email" /> <br />
	  Please choose your gender?
	  <select name="formGender">
	     <option value="">Select...</option>
	     <option value="M">Male</option>
	     <option value="F">Female</option>
	  </select><br />
	  Do you like this website?
		<input type="radio" name="likeit" value="Yes" checked="checked" /> Yes
		<input type="radio" name="likeit" value="No" /> No
		<input type="radio" name="likeit" value="Not sure" /> Not sure<br />
		Your comments:<br />
		<textarea name="comments" rows="10" cols="40"></textarea>
	 	<br />
		<input type="submit" name="formSubmit" value="Submit" />
	</form>
</body>
</html>