<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
	$db = mysqli_connect('localhost','root','demo','userData')
	or die("Could not reach server")
?>
<html>
	<head>
		<title>Sign Up - Nuntius</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h1><a href="index.html"><img id="logo" src="images/logo.png" alt="Nuntius"></a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.html">Home</a></li>
			<!--					<li>
									<a href="#">Dropdown</a>
									<ul>
										<li><a href="#">Lorem dolor</a></li>
										<li><a href="#">Magna phasellus</a></li>
										<li><a href="#">Etiam sed tempus</a></li>
										<li>
											<a href="#">Submenu</a>
											<ul>
												<li><a href="#">Lorem dolor</a></li>
												<li><a href="#">Phasellus magna</a></li>
												<li><a href="#">Magna phasellus</a></li>
												<li><a href="#">Etiam nisl</a></li>
												<li><a href="#">Veroeros feugiat</a></li>
											</ul>
										</li>
										<li><a href="#">Veroeros feugiat</a></li>
									</ul>
								</li>
								<li><a href="left-sidebar.html">Left Sidebar</a></li>
								<li><a href="right-sidebar.html">Right Sidebar</a></li>
								<li><a href="two-sidebar.html">Two Sidebar</a></li>
			-->
								<li><a href="about.html">About Us</a></li>
								<li class="current"><a href="signup.html">Sign Up</a></li>
							</ul>
						</nav>

				</div>

			<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div id="content">

							<!-- Content -->

								<article>
									<header>
										<h2>Sign Up with Nuntius</h2>
										<form>
											<div class="row 50%">
												<div class="4u 12u(mobilep)">
													<input type="text" name="fname" id="fname" placeholder="First Name" />
												</div>
												<div class="4u 12u(mobilep)">
													<input type="text" name="lname" id="lname" placeholder="Last Name" />
												</div>
												<div class="4u 12u(mobilep)">
													<input type="email" name="email" id="email" placeholder="Email" />
												</div>
											</div>
											<div class="row 50%">
												<div class="6u 12u(mobilep)">
													<input type="text" name="address" id="address" placeholder="Street Address" />
												</div>
												<div class="3u 12u(mobilep)">
													<input type="text" name="city" id="city" placeholder="City" />
												</div>
												<div class="1u 12u(mobilep)">
													<input type="text" name="state" id="state" placeholder="State" />
												</div>
												<div class="2u 12u(mobilep)">
													<input type="text" name="zip" id="zip" placeholder="Zip Code" />
												</div>
											</div>
											<div class="row 50%">
												<div class="12u">
														<input type="submit" class="button alt" value="Sign Up" />
												</div>
											</div>
										</form>
									</header>
								</article>

						</div>
					</div>
				</section>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
							<section class="6u 6u(narrower) 12u$(mobilep)">
								<h3>Links</h3>
								<ul class="links">
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">About</a></li>
									<li><a href="signup.html">Sign Up</a></li>
								</ul>
							</section>
							<section class="6u 12u(narrower)">
								<h3>Get In Touch</h3>
								<form>
									<div class="row 50%">
										<div class="6u 12u(mobilep)">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="6u 12u(mobilep)">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<textarea name="message" id="message" placeholder="Message" rows="5"></textarea>
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<ul class="actions">
												<li><input type="submit" class="button alt" value="Send Message" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
						</div>
					</div>

					<!-- Copyright -->
						<div class="copyright">
							<ul class="menu">
								<li>&copy; Nuntius. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>

				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>

<?php
// define variables and set to empty values
$fname = $lname= $email = $address = $city = $state = $zip= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = $_POST["fname"];
	$lname = $_POST["lname"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $state = $_POST["state"];
	$zip = $_POST["zip"];
	if (test_input($fname, $lname, $email, $address, $city, $state, $zip))
		
}

function test_input($fname, $lname, $email, $address, $city, $state, $zip) {
	$ret = false;
  $fname = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
