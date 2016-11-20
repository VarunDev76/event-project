<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Landing Page Template With Flexbox</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/flipclock.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/mine.js"></script>
    <script type="text/javascript" src="assets/js/wow.min.js"></script>
    <script type="text/javascript" src="assets/js/flipclock.js"></script>
    <style>
          .wow:first-child {
                visibility: hidden;
            }
          .carousel-control.right, .carousel-control.left {
                 background-image: none;   color: #f4511e;
            }
    </style>
    <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    
  </script>
</head>

<body>

	<header id="navigation-home">
		<h2><a href="index.php">Party Event</a></h2>
		<nav class="nav_height navbar-fixed-top " role="navigation">
			<li><a href="#Home">Home</a></li>
			<li><a href="#partyEvent">Party Events</a></li>
			<li><a href="#Contact">Contacts</a></li>
		</nav>
	</header>


	<section class="hero">
		<div class="background-image" style="background-image: url(assets/img/hero.jpg);"></div>
        <h1> <span class="wow fadeIn">Party</span> <span class="wow fadeIn"> Event </span> </h1>
		
	</section>


	<section class="our-work" id="partyEvent">
        <h3 class="title wow fadeInDownBig">Some of our Party work</h3>
        <hr>

		<ul class="grid">
			<li class="large wow bounceInLeft" style="background-image: url(assets/img/part2.jpg);"></li>
			<li class="small wow bounceInRight" style="background-image: url(assets/img/party1.jpg);"></li>
			<li class="small wow bounceInLeft" style="background-image: url(assets/img/party3.jpg);"></li>
			<li class="large wow bounceInRight" style="background-image: url(assets/img/party4.jpg);"></li>
		</ul>
	</section>
	


	<section class="contact" id="Contact">
		<h3 class="title wow fadeInDown"><i class="fa fa-envelope"></i>  Contact Us</h3>	
		<p class="wow fadeInUp">If you like Parties. Then Subscribe now.</p>
		<hr>

		<form action="assets/ajaxfile/insertevent.php" method="post">
			<input type="text" placeholder="Event Name" class="wow bounceInLeft" id="ename" name="ename"> 
            <input type="text" placeholder="Tags" class="wow bounceInRight" id="tag" name="tag">
			<input type="submit" class="btn" id="submit" name="submit"  value="Subscribe now">
		</form>
	</section>

	<footer>
		<ul>
			<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
			<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
			<li><a href="#"><i class="fa fa-snapchat-square"></i></a></li>
			<li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
			<li><a href="#"><i class="fa fa-github-square"></i> </a> </li>
		</ul>
		<p>@copyright by <ahref="mailto:varundev77@gmail.com" >Varun Dev.</a> </p>
	</footer>

</body>

</html>
