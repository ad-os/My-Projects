<?php

	if ($_POST["submit"]) {
		
		$result='<div class="alert alert-success">Form submitted</div>';



	if (!$_POST['name']) {
		
		$error.="<br />Please enter your name";
	}

	if (!$_POST['email']) {
		
		$error.="<br />Please enter your email address";
	}

	if (!$_POST['comment']) {
		
		$error.="<br />Please enter a comment";
	}

	if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { 
    	
		$error.="<br />Please enter a valid email address";
	} 




	if ($error) {
		$result='<div class="alert alert-danger">There were error(s) in the form '.$error.'</div>';
	} else{

		if(mail("adhyan2095@gmail.com", "Comment from website", "<br />NAME ".$_POST['name']."<br />Email: ".$_POST['email']."<br />Comment :".$_POST['comment'])){
					$result='<div class="alert alert-success">Thanky you.I\'ll get in touch.</div>';
		} else {
					$result='<div class="alert alert-danger">Sorry there was an error sendind your message. Please try ahain later.</div>';
		}

	}

}

?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Latest compiled and minified CSS -->
`	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	

	<style>

	.emailForm{
		margin-top: 20px;
		border: 1px solid grey;
		border-radius: 20px;
	}

	form {
		padding-bottom: 10px;
	}


	</style>

</head>

<body>

	<div class="container">

		<div class="row">

			<div class="col-md-6 col-md-offset-3 emailForm">

				<h1>My Email Form</h1>

				<?php echo $result; ?>

				<p class="lead">Please get in touch - I'll get back to you as soon as I can.</p>

				<form method="post">

					<div class="form-group">

						<label for="name">Your name:</label>
						<input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $_POST['name'] ?>" />

					</div>

					<div class="form-group">

						<label for="email">Your name:</label>
						<input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email'] ?>" />

					</div>
					<div class="form-group">

						<label for="comment">Your Comment:</label>
						<textarea name="comment" class="form-control"><?php echo $_POST['comment'] ?>"</textarea>

					</div>

					<input type="submit" name="submit" value="Submit" class="btn btn-success btn-lg" />

				</form>

			</div>
		</div>

	</div>





</body>
</html>
