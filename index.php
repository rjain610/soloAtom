<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Solo Atom</title>
	<link rel="icon" href="images/soloatom.png" />
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="containers">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="logo navbar-brand">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img class="top-img" src="images/soloatom.jpg">
							</div>
							<div class="back">
								<img class="top-img" src="images/soloatomrev.jpg">
							</div>
						</div>
					</div>
				</div>
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="what-we-do.php">What we do</a></li>
						<li><a href="who-we-are.php">Who we are</a></li>
						<li><a href="upcoming-events.php">Upcoming events</a></li>
						<li data-toggle="modal" data-target="#myModal"><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="slide-img "></div>		
		<div class="center-section jumbotron">

			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<center><h4 class="modal-title">Contact Us</h4></center>
						</div>
						<div class="modal-body">
							<form method="POST" action="#">
								<h4>Name:</h4><input name="fname" class="input" type="text" required="required" placeholder="Ranjeet">
								<h4>E-mail:</h4><input name="e-mail" class="input" type="email" required="required" placeholder="Ranjeetjain3@gmail.com">
								<h4>Your Comment</h4><textarea name="comment" class="input-cont" required="required" placeholder="   Your comment please"></textarea>
								
								<center><input type="submit" class="btn btn-success btn-lg"></input></center>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
						</div>
					</div>
				</div>
			</div>
			
			<div class="home1">
				
				<div class="home-txt1">
					<center><h2 class="hvr-float-shadow" style="font-family: 'ace-records';font-weight: bold;font-size: 50px; text-shadow:5px 5px silver;">Manpower solutions</h2></center>
					<p style="font-size: 27px;">Solo atom is a temporary manpower providing company based in Chennai for different types of events like concerts, matches, weddings, promotions, marketing, out-station and also work-at-home work like data entry and many more.
						Solo atom welcomes you to the place where we can help you by providing temporary manpower who are qualified in all aspects to suit your needs. We provide manpower for all types of events and meetings, let it be professional promotions, sports tournaments or DJ parties. We look forward to working with you and providing you great quality which will make us the preferred provider for you.
					</p>
				</div>
				<div >
					<img class="home-img1" src="images/home-event1.jpg">
				</div>
			</div>
			
			<div class="home2">
				
				<div class="home-txt2">
					<center><h2 class="hvr-float-shadow" style="font-family: 'ace-records';font-weight: bold;font-size: 50px; text-shadow:5px 5px silver;">Joining us</h2></center>
					<p style="font-size: 27px;">In this generation, we as youth know the necessity of the passion of making money. There is a great deal of satisfaction and self-respect for ourselves when we young brains earn on our own and make ourselves some pocket money and savings. So we have got ample opportunities suitable for you so that you can learn and earn all at the same time. You just need to be smart, motivated, dynamic, energetic and more importantly passionate about working with us. Come, join us to start gaining both money and experience. Be ready to explore.
					</p>
				</div>
				<div >
					<img class="home-img2" src="images/aboutus-bkimg.jpg">
				</div>
			</div>
			
		</div>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

	</body>
	</html>