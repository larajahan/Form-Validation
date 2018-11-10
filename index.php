<!DOCTYPE html>
<html>
	<head>
		<title>Strings</title>
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
						
						<tr>
							<td>Name </td>
							<td><input type="text" name="name"/></td>
						</tr>
						<tr>
							<td>Email </td>
							<td><input type="text" name="email"/></td>
						</tr>
						<tr>
							<td>Website </td>
							<td><input type="text" name="website"/></td>
						</tr>
						<tr>
							<td>Comment </td>
							<td><textarea name="comment" rows="5" cols="40"></textarea></td>
						</tr>
						<tr>
							<td>Gender </td>
							<td><input type="radio" name="gender" value="female" />Female
							<input type="radio" name="gender" value="male" />Male
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
			<?php
			   $name = $email =$website = $comment = $gender = $submit ="";
			   
			if ($_SERVER[ 'REQUEST_METHOD' ] == "POST") {
				$name    =     validate($_POST["name"]);
				$email   =     validate($_POST["email"]);
				$website =     validate($_POST["website"]);
				$comment =     validate($_POST["comment"]);
				$gender  =     validate($_POST["gender"]);
				$submit  =     validate($_POST["submit"]);


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
			
		</section>
		
		<section class="footer">
			<h2>Md Shahjahan Ali</h2>
		</section>
	</section>
</body>
</html>