<?php require('quoteLogic.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title> About Me </title>
	 <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<h1> ruth phillips...</h1>

		<img src="img/alien-cartoon-001.jpg" alt="alien picture">

		<h2> since you asked ... </h2>
				<div class="likes">
						<ol>
							<li>I'm a novice at server-side programming, hence the class. </li>
							<li>My previous experience is with embedded software.</li>
							<li>Hate Hate Hate Apples.</li>
						</ol>
				</div>

			<h2>favorite quotes ...</h2>
			<div class ="container">
				<p>
					<?php echo $quote[$myKey]; ?>;
				</p>
		</div>
	</body>
</html>
