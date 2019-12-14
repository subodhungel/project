<?php
include 'food-ordering-system/includes/connect.php';
include 'food-ordering-system/includes/wallet.php';

	if($_SESSION['customer_sid']==session_id())
	{
		?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset = "UTF-8">
	<title>Foodies</title>
	<link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Foodies</title>

	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="custom.css">
	<link  href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet">
	<link  href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
	<link  href="fontawesome-free-5.0.7/web-fonts-with-css/css/fontawesome.min.css" rel="stylesheet">
</head>

<body>
	<header>

		<div class="row">
			<ul class = "main-nav">
				<li style="color: white;
				text-decoration: none;
				font-size: 90%;
				font-weight: bold;">
          <?php echo $name;?>
					<ul>
						<li> <a href="food-ordering-system/routers/logout.php"> Logout </a> </li>
					</ul>
        </li>
			</ul>
		</div>

		<div class = "Background_wrapper">
			<h1>WELCOME TO FOODIES</h1>
			<span>Search for your desired cuisine</span>
			<form class="form_code" action="search.php" method="post">
				<input class="post_code" type="text" name="restaurantsearch" placeholder="Search for restaurant and food">
				<button type="submit" name="search">Search</button>
			</form>
		</div>

	</header>

	<section class = "features">

		<h3 class = "text-center">Features</h3>

		<<div class = "container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-3">
					<img src="images/icons/order.png" alt="Order" width="100px" height="100px"><br>
					<span> <b> Order Food </b> </span>
				<p class="arranging"></p>
				</div>
				<!-- <div class="col-md-1"></div> -->
				<div class="col-md-3">
					<img src="images/icons/reservation.png" alt="Reservation" width="100px" height="100px"><br>
					<span> <b> Reservation </b> </span>
				<p class="arranging"></p>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-3">
					<img src="images/icons/gpslogo.png" alt="GPS Logo" width="100px" height="100px"><br>
					<span> <b> Locate Restaurant </b> </span>
				<p class="arranging"></p>
			</div>

			</div>
		</div>
	</section>

	<section class="meal">
		<ul class="meal-showcase">
			<li>
				<figure class="meal-photo">
					<img src="images/resourceImage/food1.jpg">
				</figure>
			</li>

			<li>
				<figure class="meal-photo">
					<img src="images/resourceImage/food2.jpg">
				</figure>
			</li>

			<li>
				<figure class="meal-photo">
					<img src="images/resourceImage/food3.jpg">
				</figure>
			</li>

			<li>
				<figure class="meal-photo">
					<img src="images/resourceImage/food4.jpeg">
				</figure>
			</li>

		</ul>
		<br><br><br>
		<br><br><br>
		<br><br><br>

	</section>

	<section>
		<div class="partners">
			<h2 style="text-align: center; font-weight: bold;">Our Partners</h2>
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-2">
					<a href="stakeholder_bootstrap/restaurant_profileA.php"><img src="images/resourceImage/dummy_rest_logo1.jpg" width="125px" height="100px"></a>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-2">
					<a href="stakeholder_bootstrap/restaurant_profileB.php">
					<img src="images/resourceImage/dummy_rest_logo2.jpg" width="125px" height="100px"></a>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-2"><a href="stakeholder_bootstrap/restaurant_profileC.php">
					<img src="images/resourceImage/dummy_rest_logo3.jpg" width="125px" height="100px"></a>
				</div>
				<div class="col-md-2"></div>
			</div>
			<br><br><br>
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-2"><a href="stakeholder_bootstrap/restaurant_profileD.php">
					<img src="images/resourceImage/dummy_rest_logo4.jpg" width="125px" height="100px"></a>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-2"><a href="stakeholder_bootstrap/restaurant_profileE.php">
					<img src="images/resourceImage/dummy_rest_logo5.jpg" width="125px" height="100px"></a>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-2"><a href="stakeholder_bootstrap/restaurant_profileF.php">
					<img src="images/resourceImage/dummy_rest_logo6.jpg" width="125px" height="100px"></a>
				</div>
				<div class="col-md-2"></div>
			</div>


		</div>



	</section>

	<section class="testimonials">
		<h3 class="text-center">OUR MOST VALUED USERS</h3>
		<div class="container" >
			<div class="row">
				<div class="col-md-4">
						<p>
							type your text here type your text heretype your text here type your text here type your text heretype your text here
						</p>

						<cite><img src="images/resourceImage/bale.jpg">Gareth Bale</cite>
				</div>

				<div class="col-md-4">
						<p>
							type your text here type your text heretype your text here type your text here type your text heretype your text here
						</p>

						<cite><img src="images/resourceImage/de-gea.jpg">David De Gea</cite>
				</div>

				<div class="col-md-4">
						<p>
							type your text here type your text heretype your text here type your text here type your text heretype your text here
						</p>

						<cite><img src="images/resourceImage/beckham.jpg">David Beckham</cite>
				</div>
			</div>
		</div>
	</section>

	<section class="form">
		<div class="container">
			<h3 class="text1">FEEDBACK</h3>
		</div>

		<div class="row gap">
			<form method="POST" action="comment.php">
			<div class="col-md-4">
				<input type="text" name="username" placeholder="Username" class="form-control"><br>
				<input type="Email" name="email" placeholder="Email" class="form-control"><br>
				<input type="password" name="password" placeholder="Password" class="form-control"><br>
			</div>

			<div class="col-md-8">
				<textarea class="form-control" name="comment" rows="8" placeholder="Write a Comment"></textarea>
				<button class="btn btn-warning btn-block">Submit</button>
			</div>
			</div>
		</form>
		</div>
		<br>
		<br>
	</section><hr>

	<section class="Res_reg" style="text-align: center;">
		<h2>Register your restaurant here</h2>
		<a href="stakeholder_bootstrap/stake_reg.html"><button class="btn btn-success">Send Request</button></a>
		<br><br><br><br>
	</section>

</body>

</html>
<?php
}else {
	header('location:index.html');
}


 ?>
