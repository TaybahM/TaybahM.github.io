
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<?php  
 
if(isset($_POST['submit'])) {
 $mailto = "hmawebdesign@hotmail.com";  //My email address
 //getting customer data
 $name = $_POST['name']; //getting customer name
 $fromEmail = $_POST['email']; //getting customer email
 $phone = $_POST['tel']; //getting customer Phome number
 $subject = $_POST['subject']; //getting subject line from client
 $subject2 = "Confirmation: Message was submitted successfully | HMA WebDesign"; // For customer confirmation
 
 //Email body I will receive
 $message = "Cleint Name: " . $name . "\n"
 . "Phone Number: " . $phone . "\n\n"
 . "Client Message: " . "\n" . $_POST['message'];
 
 //Message for client confirmation
 $message2 = "Dear" . $name . "\n"
 . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
 . "You submitted the following message: " . "\n" . $_POST['message'] . "\n\n"
 . "Regards," . "\n" . "- HMA WebDesign";
 
 //Email headers
 $headers = "From: " . $fromEmail; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
  $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }
 
}
 
?>
	<head>
		<title>BlackBeard</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><img src="images/BB/BlackBeard_title.png" alt="Black Beard Logo"  width="auto" height="21.936px"></a>
									<ul class="icons">
										<li><a href="https://www.linkedin.com/in/taybah-mohammad/" class="icon brands fa-linkedin"><span class="label">Linkedin</span></a></li>
										<li><a href="https://github.com/TaybahM/TaybahM.github.io" class="icon brands fa-github"><span class="label">Github</span></a></li>
										<li><a href="https://twitter.com/MohammadTaybah" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									</ul>
								</header>

							<!-- Content -->
								<section>
							
								</section>

<!-- Form -->
<h3>Contact Form</h3>

<form method="post" action="#">
    <div class="row gtr-uniform">
        <div class="col-6 col-12-xsmall">
            <input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
        </div>
        <div class="col-6 col-12-xsmall">
            <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
        </div>
        <!-- Break -->
        <div class="col-12">
            <select name="demo-category" id="demo-category">
                <option value="">- Category -</option>
                <option value="1">Logo Design</option>
                <option value="1">Print</option>
                <option value="1">Advertising/ Marketing</option>
                <option value="1">Other</option>
            </select>
        </div>
        <!-- Break -->
        <div class="col-12">
            <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
        </div>
        <!-- Break -->
        <div class="col-12">
            <ul class="actions">
                <li><input type="submit" value="Send Message" class="primary" /></li>
                <li><input type="reset" value="Reset" /></li>
            </ul>
        </div>
    </div>
</form>

								

						</div>
					</div>
					


								<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index.html">Homepage</a></li>
										<li><a href="about.html">About Me</a></li>
										<li>
											<span class="opener">Projects</span>
											<ul>
												<li><a href="ah-brand.html">Anchorheart</a></li>
												<li><a href="jamaad.html">Jamaad Basketball Camp</a></li>
												<li><a href="arabic.html">Arabic Work</a></li>
												<li><a href="index.html#projects">Others</a></li>
											</ul>
										</li>
										<li><a href="faqs.html">FAQS</a></li>
										<li><a href="index.html#contact">Contact Me</a></li>
										<li>
											<span class="opener">Learn</span>
											<ul>
												<li><a href="oops.html">Designer Mistakes to Avoid</a></li>
												<li><a href="oops.html">Client Mistakes to Avoid</a></li>
												<li><a href="oops.html">Hiring a Designer</a></li>
												<li><a href="oops.html">Helpful Resources for Designers</a></li>
											</ul>
										</li>
										<li><a href="oops.html">Share</a></li>
									</ul>
								</nav>

							<!--copy from here-->
                            <!-- Section -->
                                <section>
                                    <header class="major">
                                        <h2>News Wall</h2>
                                    </header>
									<h6>Updated: 02/06/2022</h6>
									<h6>Source: <a href="https://tldr.tech/" target="_blank">TLDR Newsletter</a></h6>
                                    <div class="mini-posts">
                                        <article>
                                            <a href="https://developer.chrome.com/articles/high-definition-css-color-guide/?utm_source=tldrnewsletter" target="_blank" class="image"><img src="images/news wall/css.jpg" alt="" /></a>
                                            <p>High Definition CSS Color Guide</p>
                                        </article>
                                        <article>
                                            <a href="https://www.theregister.com/2023/02/03/googles_chromium_ios/?utm_source=tldrnewsletter" class="image" target="_blank"><img src="images/news wall/google-new-logo-450x450.jpg" alt="" /></a>
                                            <p>Google works on Blink-based iOS browser contrary to Apple's WebKit rule</p>
                                        </article>
                                        <article>
                                            <a href="https://www.theverge.com/2023/2/3/23584675/microsoft-ai-bing-chatgpt-screenshots-leak?utm_source=tldrnewsletter" class="image" target="_blank"><img src="images/news wall/chatgpt.jpg" alt="" /></a>
                                            <p>Is this Microsoft’s ChatGPT-powered Bing?</p>
                                        </article>
                                    </div>
                                </section>
                                <!--end copy-->

							<!-- Section -->
								<section>
									<header class="major">
										<h2 id="#contact">Get in touch</h2>
									</header>
									<p>Contact me if you have any questions, would like to request more information.</p>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="mailto:taybahmohammad7@gmail.com">TaybahMohammad7@gmail.com</a></li>
										<li class="icon solid fa-home">Dallas, TX<br />
										</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; TmPortfolio. All rights reserved.<a href="https://html5up.net/" target="_blank">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
