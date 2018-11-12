<?php
	$fonts = "verdana";
	$bgcolor="#444";
	$fontcolor="#fff";
	$errname = $erremail =$errweb = $errcomment = $errgender  = "";

	$name = $email =$website = $comment = $gender = $submit = "";
			
			if ($_SERVER[ 'REQUEST_METHOD' ] == "POST") {

             if (empty($_POST["name"])) {
             	$errname ="<p style='color: red'>Name is required</p>";
             }
             else
             {

             	$name = validate($_POST["name"]);
             }
             if (empty($_POST["email"])) {
             	$erremail ="<p style='color: red'>E-mail is required</p>";
             }
             else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
             	$erremail ="<p style='color: red'>Invalid Email</p>";
             }
             else
             {

             	$email = validate($_POST["email"]);
             }
             if (empty($_POST["website"])) {
             	$errweb ="<p style='color: red'>Website is required</p>";
             }

             else if (!filter_var($_POST["website"], FILTER_VALIDATE_URL)) {
             	$errweb ="<p style='color: red'>Invalid website</p>";
             }

             else
             {

             	$website = validate($_POST["website"]);
             }  
             if (empty($_POST["gender"])) {
             	$errgender ="<p style='color: red'>Gender is required</p>";
             }
             else
             {

             	$gender = validate($_POST["gender"]);
             }


				
				$comment =     validate($_POST["comment"]);
				
				echo " Name   : ". $name ."<br/>";
				echo " Email  : ". $email ."<br/>";
				echo " Website: ". $website ."<br/>";
				echo " Comment: ". $comment ."<br/>";
				echo " Gender : ". $gender ."<br/>";
			}
			function validate($data){
			$data= trim($data);
			$data= stripcslashes($data);
			$data= htmlspecialchars($data);
			return $data;
			}
			
?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP FORM VALIDATION</title>
		<style>
			.phpcoding{
				margin: 0px auto;
				padding: 0;
				background: #ddd;
				width: 900px;
				
			}
			.maincontent{
				min-height: 400px;
				padding-left: 10px;
			}
			.header,.footer{
				background: #000;
				color: #fff;
				font-size: 22px;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<section class="phpcoding">
			
			<section class="header">
				<h2>PHP Fundamentals</h2>
			</section>
			<section class="maincontent">
				
				<h2>PHP Form Validation</h2>
				<hr>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
					<table>
						<p style="color: red"> * Required File</p>
						
						<tr>
							<td>Name </td>
							<td><input type="text" name="name"/>*<?php echo $errname; ?></td>
						</tr>
						<tr>
							<td>Email </td>
							<td><input type="text" name="email"/>* <?php echo $erremail; ?></td>
						</tr>
						<tr>
							<td>Website </td>
							<td><input type="text" name="website"/>* <?php echo $errweb; ?></td>
						</tr>
						<tr>
							<td>Comment </td>
							<td><textarea name="comment" rows="5" cols="40"></textarea></td>
						</tr>
						<tr>
							<td>Gender </td>
							<td><input type="radio" name="gender" value="female" />Female
							<input type="radio" name="gender" value="male" />Male
							*<?php echo $errgender; ?>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="submit" value="Submit" />
						</td>
					</tr>
				</table>
			</form>
			
			
		</section>
		
		<section class="footer">
			<h2>Md Shahjahan Ali</h2>
		</section>
	</section>
</body>
</html>