<?php

	$error = "";
	$success = "";
	
	if($_POST)
	{
		if(!$_POST['name'])
			$error.="Name is required<br>";
		if(!$_POST['email'])
			$error.= "Email adress is required<br>";
        if(!$_POST['subject'])
			$error.= "Subject is required<br>";
		if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false)
			$error.= "Enter a valid email address<br>";
		if (isset($_POST['find-us']))
		{
			$category = "\nI came to know about you through ".$_POST['find-us'].".";
		}
		if($_POST['news'])
			$news="I would like to subscribe to your newsletter";
		else
			$news="";
        if(!$_POST['body'])
            $error.="Content is required<br>";
		if($error != "")
			$error= '<div class="alert alert-danger" role = "alert"><strong>There were error(s) in your form:</strong><br>' .$error. '</div>';
		else
		{
			$emailTo = "adityakhandelwal4201@gmail.com";
			$subject = $_POST['subject'];
			$body = $_POST['body'].".\n".$category."\n".$news.".\nBy ".$_POST['name'];
			$headers = "From: " . $_POST['email'];
			if(mail($emailTo,$subject,$body,$headers))
				$success = '<div class="alert alert-success" role = "alert">Email sent successfully. We will contact to you soon.</div>';
			else
				$error = '<div class="alert alert-danger" role = "alert">Unable to send email. Please try again later.</div>';
		}
	}		
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/jpg" href="logo.jpg">
    <!-- For apple devices -->
    <link rel="apple-touch-icon" type="image/jpg" href="logo.jpg" />
    <title>CODING CLUB NITJ</title>
</head>

<body>
    <header id="home">
        <nav>
            <div class="row">
                <img src="imgs/logo.jpg" alt="Omnifood logo" class="logo">
                <img src="imgs/logo.jpg" alt="Omnifood logo" class="logo-black">
                <ul class="main-nav js--main-nav">
                    <li><a href="#home">HOME</a></li>
                    <li><a href="DSC/index.html" target="_blank">DSC</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="DSC/index.html">TEAM</a></li>
                    <li><a href="#sponsor">SPONSORS</a></li>
                    <li><a href="#cities">EVENTS</a></li>
                    <li><a href="#form">CONTACT US</a></li>
                </ul>
                <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
            </div>
        </nav>
        <div class="hero-text-box">
            <h1 id="welcome"><strong>Welcome to Coding Club NIT Jalandhar.</strong></h1>
        </div>
    </header>

    <section class="section-features js--section-features scrollspy" id="features">
        <div class="row">
            <h2>About us</h2>
            <p class="long-copy">
                Coding Club NITJ was formed  2 years ago to promote the culture of coding in NIT Jalandhar.
            </p>
        </div>

        <div class="row js--wp-1">
            <div class="col span-1-of-4 box">
                <h3>Available Anytime for help</h3>
                <p>
                    We are available everyday and anytime to help the students of NIT Jalandhar in their problems related to coding.
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <h3>Events</h3>
                <p>
                    We also organise various online and offline events to enhance the skills of coding in students of NIT Jalandhar. 
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <h3>Increasing Competition</h3>
                <p>
                    The culture of Coding in NIT Jalandhar is increasing due to the efforts of Coding club NITJ.
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <h3>Placement Diaries</h3>
                <p>
                    We also organised an event called Placement Diaries which helped students clear their queries regarding placements and interviews.
                </p>
            </div>
        </div>s
    </section>

    <section class="section-steps scrollspy" id="about">
        <div class="row">
            <h2><i class="ion-person-stalker icon-small"></i>&nbsp;About&nbsp; Our &nbsp; Awesome Club&nbsp;<i class="ion-person-stalker icon-small"></i> </h2>
        </div>
        <div class="row">
            <div class="col span-1-of-2 steps-box">
                <img src="resources/img/app-iPhone.png" alt="Omnifood app on iPhone" class="app-screen js--wp-2">
            </div>
            <div class="col span-1-of-2 steps-box">
                <div class="works-step clearfix">
                    <div>1</div>
                    <p>We continuously work to promote coding culture</p>
                </div>
                <div class="works-step clearfix">
                    <div>2</div>
                    <p>We want the students of NIT Jalandhar to excel in coding and placements</p>
                </div>
                <div class="works-step clearfix">
                    <div>3</div>
                    <p>We are a newly formed club</p>
                </div>

                <a href="#" class="btn-app"><img src="resources/img/download-app.svg" alt="App Store Button"></a>
                <a href="#" class="btn-app"><img src="resources/img/download-app-android.png" alt="Play Store Button"></a>
            </div>
        </div>
    </section>

    <section class="online-events scrollspy" id="cities">
        <div class="row">
            <h2>Online Events</h2>
        </div>
        <ul class="online-events-imgs clearfix">
            <li>
                <figure class="meal-photo">
                    <img src="resources/Online-Events/Online-1.jpg" alt="Code it Ninja" class="tooltip" title="Online Event 1!">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/Online-Events/Online-2.jpg" alt="Simple italian pizza with cherry tomatoes" class="tooltip" title="Online Event 2!">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/Online-Events/Online-3.jpg" alt="Chicken breast steak with vegetables" class="tooltip" title="Online Event 3!">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/Online-Events/Online-4.jpg" alt="Autumn pumpkin soup" class="tooltip" title="Online Event 4!">
                </figure>
            </li>
        </ul>
        <ul class="online-events-imgs1 clearfix">
            <li>
                <figure class="meal-photo">
                    <img src="resources/Online-Events/Online-5.jpg" alt="Paleo beef steak with vegetables" class="tooltip" title="Online Event 5!">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/Online-Events/Online-6.jpg" alt="Healthy baguette with egg and vegetables" class="tooltip" title="Online Event 6!">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/Online-Events/Online-7.jpg" alt="Burger with cheddar and bacon" class="tooltip" title="Online Event 7!">
                </figure>
            </li>
        </ul>

    </section>

    <section class="offline-events">
        <div class="row">
            <h2>Offline Events</h2>
        </div>
        <ul class="meals-showcase clearfix">
            <li>
                <figure class="meal-photo">
                    <img src="resources/Offline-Events/Offline-1.jpg" alt="Korean bibimbap with egg and vegetables" class="tooltip" title="Offline Event 1!">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/Offline-Events/Offline-2.jpg" alt="Simple italian pizza with cherry tomatoes" class="tooltip" title="Offline Event 2!">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/Offline-Events/Offline-3.jpg" alt="Chicken breast steak with vegetables" class="tooltip" title="Offline Event 3!">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/Offline-Events/Offline-4.jpg" alt="Autumn pumpkin soup" class="tooltip" title="Offline Event 4!">
                </figure>
            </li>
        </ul>
        <ul class="meals-showcase clearfix">
            <li>
                <figure class="meal-photo">
                    <img src="resources/Offline-Events/Offline-5.jpg" alt="Paleo beef steak with vegetables" class="tooltip" title="Offline Event 5!">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/Offline-Events/Offline-6.jpg" alt="Healthy baguette with egg and vegetables" class="tooltip" title="Offline Event 6!">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/Offline-Events/Offline-7.jpg" alt="Burger with cheddar and bacon" class="tooltip" title="Offline Event 7!">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/Offline-Events/Offline-8.jpg" alt="Granola with cherries and strawberries" class="tooltip" title="Offline Event 8!">
                </figure>
            </li>
        </ul>
        <ul class="meals-showcase clearfix">
            <li>
                <figure class="meal-photo">
                    <img src="resources/Offline-Events/Offline-9.jpg" alt="Paleo beef steak with vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/Offline-Events/Offline-10.jpg" alt="Healthy baguette with egg and vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/Offline-Events/Offline-11.jpg" alt="Burger with cheddar and bacon">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/Offline-Events/Offline-12.jpg" alt="Granola with cherries and strawberries">
                </figure>
            </li>
        </ul>
    </section>

    <section class="section-form scrollspy" id="form">
        <div class="row">
            <h2 style="margin-bottom: 50px;">We're happy to hear from you</h2>
        </div>
        <div id="error">
            <? echo $error.$success; ?>
        </div>
        <div class="row">
            <form method="post" class="contact-form">
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="name" class="format">Name</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="name" id="name" placeholder="Your name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="email" class="format">Email</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="email" name="email" id="email" placeholder="Your email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="subject" class="format">Subject</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="subject" id="subject" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="find-us" class="format">How did you find us?</label>
                    </div>
                    <div class="col span-2-of-3">
                        <select name="find-us" id="find-us">
                            <option value="friends" selected>Friends</option>
                            <option value="search">Search engine</option>
                            <option value="ad">Advertisement</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label class="format">Newsletter?</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="checkbox" name="news" id="news" value="Newsletter" checked> 
                            <span id="yes">Yes, please</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label class="format">Drop us a line</label>
                    </div>
                    <div class="col span-2-of-3">
                        <textarea name="body" id="body" placeholder="Place your text"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label>&nbsp;</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="submit" id="submit" value="Send it!">
                    </div>
                </div>
            </form>

        </div>
    </section>

    <section id="sponsor">
        <h1 id="heading">Our Sponsors</h1>
        <div class="design" id="foxmula"><img src="Data/foxmula.png"> </div>
        <div class="design" id="redbus"><img src="Data/redbus.png"> </div>
        <div class="design" id="talentbattle"><img src="Data/TalentBattle.png"> </div>
    </section>

    <footer>
        <div class="row">
            <div class="col span-1-of-2">
                <ul class="footer-nav">
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">iOS App</a></li>
                    <li><a href="#">Android App</a></li>
                </ul>
            </div>
            <div class="col span-1-of-2">
                <ul class="social-links">
                    <li><a href="https://www.facebook.com/arshcodenitj/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="https://twitter.com/NITJofficial" target="_blank"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/codingclubnitj/" target="_blank"><i class="ion-social-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <p>
                This webpage was created in "15 days" by Jayant, Gaurang & Aditya.<br>
                No &nbsp; &nbsp; &nbsp;copyrights &nbsp; &nbsp; &nbsp;here.<br>
                This webpage is for you! So go and do whatever you want with it and have fun.
            </p>
            <p>
                Build &nbsp; &nbsp; &nbsp; with &nbsp; &nbsp; &nbsp;
                <i class="ion-ios-heart" style="color: #ea0000; padding: 0 3px;"></i>
            </p>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>
    <script src="resources/js/form.js"></script>

</body>

</html>
