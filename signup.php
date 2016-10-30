<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
ob_start();
    /*
        * Home Page - has Sample Buyer credentials, Camera (Product) Details and Instructiosn for using the code sample
    */
    include('apiCallsData.php');

?>
<script type="text/javascript">
   window.paypalCheckoutReady = function () {
       paypal.checkout.setup('ATZ8sP5hONjDgjdsIasLbZP9BWG_QcgF1Vb37yzmpd-_mfRdVOh40GpQcfSyrUKcPMd4W1NUESYK-Ueh', {
           container: 'myContainer', //{String|HTMLElement|Array} where you want the PayPal button to reside
           environment: 'sandbox' //or 'production' depending on your environment
       });
   };
</script>
<script src="//www.paypalobjects.com/api/checkout.js" async></script>
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
						<h1><a href="index.php"><img id="logo" src="images/logo.png" alt="Nuntius"></a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.php">Home</a></li>
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
								<li><a href="about.php">About Us</a></li>
								<li class="current"><a href="signup.php">Sign Up</a></li>
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
										
										<form id="myContainer" action="/startPayment.php" method="post">
											<input type="hidden" name="csrf" value="<?php echo($_SESSION['csrf']);?>"/>
											Camera:<input type="text" name="camera_amount" value="300" readonly></input><br>
											Tax:<input type="text" name="tax" value="5" readonly></input><br>
											Insurance:<input type="text" name="insurance" value="10" readonly></input><br>
											Handling:<input type="text" name="handling_fee" value="5" readonly></input><br>
											Est. Shipping:<input type="text" name="estimated_shipping" value="2" readonly></input><br>
											Shipping Discount:<input type="text" name="shipping_discount" value="-2" readonly></input><br>
											Total:<input type="text" name="total_amount" value="320" readonly></input><br>
											Currency:<input type="text" name="currencyCodeType" value="USD" readonly></input><br>
										</form>

										<h2>Sign Up with Nuntius - Personal Info</h2>
										<form method="post" action="<?php
										echo htmlspecialchars($_SERVER["PHP_SELF"]);
										?>">
											<div class="row 50%">
												<div class="4u 12u(mobilep)">
													<input type="text" name="fname" id="fname" placeholder="First Name" required pattern="[a-zA-Z]+" title="Names can only contain letters"/>
												</div>
												<div class="4u 12u(mobilep)">
													<input type="text" name="lname" id="lname" placeholder="Last Name" required pattern="[a-zA-Z]+" title="Names can only contain letters"/>
												</div>
												<div class="4u 12u(mobilep)">
													<input type="email" name="email" id="email" placeholder="Email" required/>
												</div>
											</div>
											<div class="row 50%">
												<div class="6u 12u(mobilep)">
													<input type="text" name="address" id="address" placeholder="Street Address" required pattern="\s*\S+(?:\s+\S+){2,5}" title="Please enter a valid address"/>
												</div>
												<div class="3u 12u(mobilep)">
													<input type="text" name="city" id="city" placeholder="City" required pattern="[a-zA-Z]+" title="City names can only contain letters"/>
												</div>
												<div class="1u 12u(mobilep)">
													<input type="text" name="state" id="state" placeholder="State" required pattern="[a-zA-Z]{2}" title="State names can only contain letters."/>
												</div>
												<div class="2u 12u(mobilep)">
													<input type="text" name="zip" id="zip" placeholder="Zip Code" required pattern="\d{5}(?:[-\s]\d{4})?" title="Please enter a valid zipcode"/>
												</div>
											</div>
											<header>
												<h2>Payment Info</h2>
											</header>
											<div class="row 50%">
												<div class="4u 12u(mobilep)">
													<input type="text" name="cardnum" id="cardnum" placeholder="Card Number" required pattern="(?:4[0-9]{12}(?:[0-9]{3})?|(?:5[1-5][0-9]{2}|222[1-9]|22[3-9][0-9]|2[3-6][0-9]{2}|27[01][0-9]|2720)[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|6(?:011|5[0-9]{2})[0-9]{12}|(?:2131|1800|35\d{3})\d{11})" title="Must be a valid credit card number without delimiters"/>
												</div>
												<div class="4u 12u(mobilep)">
													<input type="text" name="expdate" id="expdate" placeholder="Exp. Date mm/dd/yyyy" required pattern="(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d" title="Date must match the given format"/>
												</div>
												<div class="4u 12u(mobilep)">
													<input type="text" name="cvv" id="cvv" placeholder="CVV" required pattern="[0-9]{3,4}"/>
												</div>
											</div>
											<div class="row 50%">
												<div class="12u">
														<input type="submit" class="button alt" onclick="getInput()" value="Sign Up" />
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
									<li><a href="index.php">Home</a></li>
									<li><a href="about.php">About</a></li>
									<li><a href="signup.php">Sign Up</a></li>
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
 $valid = True;
		// define variables and set to empty values
	$fname = $lname= $email = $address = $city = $state = $zip= $carddate = $cardnum = $cvv = "";
	$fieldError = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$email = $_POST["email"];
		$address = $_POST["address"];
		$city = $_POST["city"];
		$state = $_POST["state"];
		$zip = $_POST["zip"];
		$carddate = $_POST["expdate"];
		$cardnum = $_POST["cardnum"];
		$cvv = $_POST["cvv"];
		
		if (!(preg_match("/^[a-zA-Z]+$/",$fname) && preg_match("/^[a-zA-Z]+$/",$lname)))
		{
			$fieldError.= "Names can only contain letters a-z.\\n";
			$valid = False;
		}
		
		if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/",$email))
			{
				$fieldError.= "Please enter a valid email.\\n";
				$valid = False;
			}
		if (!preg_match("/^\s*\S+(?:\s+\S+){2,5}/",$address))
			{
				$fieldError.= "Please enter a valid address.\\n";
				$valid = False;
			}
		if (!preg_match("/^[a-zA-Z]+$/",$city))
		{
			$fieldError.= "City names can only contain letters a-z.\\n";
			$valid = False;
		}
		if (!preg_match("/^[a-zA-Z]{2}$/", $state))
			{
				$fieldError.= "Please enter the two letter state abbreviation.\\n";
				$valid = False;
			}
		if (!preg_match("/^\d{5}(?:[-\s]\d{4})?$/", $zip))
			{
				$fieldError.= "Please enter a valid zipcode.\\n";
				$valid = False;
			}
			//$fieldError = 'alert(' . $fieldError . ')';
			//echo $fieldError;
		if($valid)
		{
			//echo '<script type = "text/javascript">';
			//echo 'alert(" . $fieldError . ")';
			//echo '</script>';
		$con = mysqli_connect("localhost","root","demo","userdata");
		if (mysqli_connect_errno())
			echo "could not reach server";



		$sql = "INSERT INTO customers (fName,lName,Email,Address,City,State,Zip) VALUES ('$fname','$lname','$email','$address','$city','$state','$zip')";
		if (mysqli_query($con,$sql)) {
			echo "New record created successfully";
			header("Location: thankyou.php");
		} else {
			echo "Error: " . $sql . "<br>" . $con->error;
		}
			
			
		}
		else
		{
			echo '<script type="text/javascript">alert("'.$fieldError.'");</script>';
				
		}
			
	}
	

?>