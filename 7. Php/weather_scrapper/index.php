<!DOCTYPE html>
<html lang="en">
  <head>

  	<title>Weather Scrapper</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


	<style>

	html, body{
		height: 100%;
	}

	.container{
		background-image: url("ad.jpg");
		width: 100%;
		height: 100%;
		background-size: cover;
		background-position: center;
		padding-top: 100px;
	}

	.center{
		text-align: center;
	}

	.text{
		color: white;
	}

	p{
		padding-top: 15px;
		padding-bottom: 15px;
	}

	button {
		margin-top: 20px;
		margin-bottom: 20px;
	}

	.alert{
		margin-top: 20px;
		display: none;
	}


	</style>


</head>

<body>

	<div class="container">

		<div class="row center text">

			<div class="col-md-6 col-md-offset-3">

				<h1>Weather Predictor</h1>

				<p class="lead">Enter your city below to get a forecast of your weather</p>


				<form>

					<div class="form-group">

						<input type="text" class="form-control" placeholder="New-Delhi, Noida, Chandigarh...." id="city" />
	 
					</div>

					<button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>

				</form>

				<div id="success" class="alert alert-success">Message</div>

				<div id="fail" class="alert alert-danger">Could not find the weather data for that city.</div>

				<div id="noCity" class="alert alert-danger">Please enter a city</div>

			</div>


		</div>

	</div>

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script>

    	$("#findMyWeather").click(function(event){

    		event.preventDefault();

    		$(".alert").hide();

    		if($("#city").val()!=""){

    		$.get("scraper.php?city="+$("#city").val(), function( data) {


    			if(data==""){
    				$("#fail").fadeIn();
    			}else{
    				$("#success").html(data).fadeIn();
    			}

    		});

    	}else{

    		$("#noCity").fadeIn();
    	}


    	});

    </script>
</body>

</html>