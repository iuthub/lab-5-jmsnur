<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Buy Your Way to a Better Education!</h1>
		<p>
			The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
		</p>
		
		<hr />
		
		<h2>Give Us Your Money</h2>
		<dl>
			<dt>Name</dt>
			<dd>
			<form action="suckers.php" method="post">
				<div>
					<input type="text" name="name" />
				</div>
			</form>
			</dd>
			
			<dt>Section</dt>
			<dd>
			<form action="suckers.php" method="post">
				<div>
					<input type="text" name="Section" />
				</div>
			</form>
			</dd>
			
			<dt>Credit Card</dt>
			<dd>
			<form action="suckers.php" method="post">
				<div>
					<input type="text" name="card" /><br/>
					<input type="radio" id="visa" name="card" value="visa">
					<label for="male">Visa</label>
					<input type="radio" id="master" name="card" value="master">
					<label for="female">Master</label>
				</div>
			</form>
			</dd>
		</dl>
		
		<div>
			<form action="suckers.php" method="post">
				<div>
					<input type="submit" value="I am a giant sucker." name="submit" />
				</div>
			</form>
		</div>
	</body>
</html>