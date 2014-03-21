<?php 
session_start();
$page = $_GET['page'];
 
$def = "home";
$dir = "inc";
$ext = "php";
 
if (isset($page)) {
    $page = substr(strtolower(preg_replace('([^a-zA-Z0-9-/])', '', $page)), 0, 20);
    if (file_exists("$dir/$page.$ext") and is_readable("$dir/$page.$ext")) {
        include("$dir/$page.$ext");
    }
    else {
        include("$dir/error404.$ext");
    }
}
else {
    include("$dir/$def.$ext");
}



//:: This switch will manage page to page management. The case's are in the same order as they appear on the live site.
switch($_GET['page']){
		
		//:: Default is incex.php aka Home
		default:
		$ElegantWeddings->setTitle("");
		$main->add('<div id="ajContent">');
		$main->add('<div id="headerRibbon"><h1 class="ribbon"><span class="ribbon-content">Helping you write <span class="italic">your</span> love story.</span></h1></div>');
		$main->add('<h2 class="centered">Welcome to Elegant Weddings &amp; Events!</h2>');
		$main->add("<p>Elegant Weddings & Events is an event planning and coordination service committed to providing the people of Southern Alberta with the assistance they desire for their wedding or planned events. We strive to use our creativity, attention to detail and thrifty nature to aid in the creation of your dream day. By choosing Elegant Weddings & Events, you will have a planner devoted to seeing your vision into a reality.</p>");
		$main->add('<div class="frontImage"><img class="pageImg" src="'. IMG .'frontPage.jpg" /></div>');
		$main->add('</div>');
		
		break;
	
	//:: story is Our Story
	case "story":
		$ElegantWeddings->setTitle("- Our Story");
		$main->add('<div id="ajContent">');
		$main->add('<div id="headerRibbon"><h1 class="ribbon"><span class="ribbon-content">Congratulations on your engagement!</span></h1></div>');
		$main->add('<img class="pageImg selfy" src="'. IMG .'selfy.jpg" />');
		$main->add('<p class="no-wrap">Allow me introduce myself. My name is Andrea. I have lived in Southern Alberta my entire life and Lethbridge became my home over 10 years ago. I have had a life long interest in weddings and events, and it has always been my dream to own my own business. After graduating from the Business Administration program at Lethbridge College, I decided to further develop my interest in the wedding industry and pursue my dream. I have received my WPICC certification through the Wedding Planners Institute of Canada. I work with trusted friends and other certified wedding planners to make sure coordination of all wedding and event details go smoothly. Since opening my business in 2011, it has been my privilege to have worked with over a dozen couples to help make their dream day a reality. Contact us today for your a free initial meeting to discuss how we can help your dream day come true.</p>');
		
		$main->add('<div class="difference">');
		$main->add('<h2>What makes me different?</h2>');
		
		$main->add('<p>My number one priority as your coordinator, is that you enjoy the time you spend as an engaged couple. I want to make this experience as stress-free as possible for you. I want your wedding to be a representation of you, and will work with you to make that happen. As a certified wedding coordinator I take my position seriously. Striving to keep in touch with the latest trends and networking with other people in the industry, including other planners. You can trust that I will always act in an ethical way and have your best interests at heart.</p>');
		
		$main->add('</div>');
		
		
		$main->add('<span class="wpicc"><a href="http://wpic.ca/code-of-ethics/" target="_blank" ><img src="'. IMG .'seal_lowres.png" /></a></span>');
		$main->add('</div>');
	
	break;
	
	//:: Portfolio
	case "portfolio":
	$ElegantWeddings->setTitle("- Portfolio");
	$main->add('<div id="ajContent">');
		$main->add('<div id="headerRibbon"><h1 class="ribbon"><span class="ribbon-content">Portfolio</span></h1></div>');
		$main->add( $Gallery->drawGallery( "Tennille & Jim", "Gallery_One" , "Test Gallery") );
		$main->add( $Gallery->drawGallery( "Lindsay & Kyle", "Gallery_Two" ) );
		$main->add( $Gallery->drawGallery( "Heather & Chris", "Gallery_Three" ) );
		$main->add( $Gallery->drawGallery( "Cynthia & Travis", "Gallery_Four" ) );	
		
		$main->add('</div>');	

	break;
	
	case "testimonials":
	$main->add('<div id="ajContent">');
		$main->add('<div id="headerRibbon"><h1 class="ribbon"><span class="ribbon-content">Testimonials</span></h1></div>');
		$main->add( drawTestimonialsFirst() );	
		$main->add( drawTestimonialsSecond() );
		$main->add( drawTestimonialsThird() );
		$main->add('</div>');
		
	break;
	
	case "packages":
	$ElegantWeddings->setTitle("- Packages");
		$main->add('<div id="ajContent">');
		
		$main->add('<div id="headerRibbon"><h1 class="ribbon"><span class="ribbon-content">Packages</span></h1></div>');
		$main->add( packageDisclosure() );
		$main->add( packageMenu() );
		$main->add('<hr />');
		$main->add('<a name="ultimate"></a>');
		$main->add('<a class="top">Top</a>');
		$main->add('<div class="packageBlock">');
		$main->add('<h2 class="centered shadow underline">The Ultimate</h2>');
		$main->add('<ul class="styledList">');
		$main->add('<li>Assistance with the planning every detail of your wedding. Including budget, design, theme, decor, venue selection, seating/floor plans, entertainment and anything else you want to include in your big day</li>');
		$main->add('<li>Time management of planning schedule through detailed checklists and a personalized wedding day schedule.</li>');
		$main->add('<li>Organize and arrange meetings with any vendors and arrange for all contracts.</li>');
		$main->add('<li>Unlimited contact with planner through phone or email to discuss your wedding plan.</li>');
		$main->add('<li>Coordination on the day of by lead and assistant coordinator to ensure your vision is achieved. Each coordinator is equipped with a Day Of Emergency Kit.</li>');
		$main->add('</ul>');
		$main->add('</div>');
		
		$main->add('<hr />');

		//$main->add('<li></li>');
		$main->add('<a name="seeItUpTo"></a>');
		$main->add('<a class="top">Top</a>');		
		$main->add('<div class="packageBlock">');
		$main->add('<h2 class="centered shadow underline">See it up To</h2>');
		$main->add('<ul class="styledList">');
		$main->add('<li>Assistance with the planning every detail of your wedding. Including budget, design, theme, decor, venue selection, seating/floor plans, entertainment and anything else you want to include in your big day</li>');	
		$main->add('<li>Time management of planning schedule through detailed checklists and a personalized wedding day schedule.</li>');	
		$main->add('<li>Organize and arrange meetings with any vendors, and arrange for contracts.</li>');
		$main->add('<li>Unlimited contact with planner through phone or email to discuss your wedding plan.</li>');
		$main->add('</ul>');
		$main->add('</div>');
		
		$main->add('<hr />');
		
		$main->add('<a name="seeItThrough"></a>');
		$main->add('<a class="top">Top</a>');		
		$main->add('<div class="packageBlock">');
		$main->add('<h2 class="centered shadow underline">See it Through</h2>');
		$main->add('<ul class="styledList">');
		$main->add('<li>Consultations one month, and two weeks prior to event to discuss contracted vendors and wedding details.</li>');
		$main->add('<li>Create customized checklists and help with errends.</li>');
		$main->add('<li>Coordination on the day of by lead and assistant coordinator to ensure your vision is achieved. Each coordinator is equipped with a Day Of Emergency Kit.</li>');
		$main->add('</ul>');
		$main->add('</div>');
		
		$main->add('<hr />');
		
		$main->add('<a name="aLaCarte"></a>');
		$main->add('<a class="top">Top</a>');
		$main->add('<div class="packageBlock">');
		$main->add('<h2 class="centered shadow underline">&Agrave; La Carte</h2>');
		$main->add('<h4 class="centered shadow">(Great for parties!)</h4>');
		$main->add('<ul class="styledList">');	
		$main->add('<li>Hourly consultations for help with weddings, corporate events, showers, reunions or other celebrations.</li>');
		$main->add('<li>Specialty table design and setups (Sweet tables, Hot Chocolate Bar, Photo Booths, and endless other possibilities available)</li>');
		$main->add('</ul>');
		$main->add('</div>');
		
		$main->add('<br /><br /><br />');
		
		$main->add('<span class="contact-button" ><a href="contact-us" class="navLink">Book Today</a></span>');
		$main->add('</div>');
		
	break;
	
	case "promotions":
	$ElegantWeddings->setTitle("- Promotions");
	$main->add('<div id="ajContent">');
		$main->add('<div id="headerRibbon"><h1 class="ribbon"><span class="ribbon-content">Promotions</span></h1></div>');
		$main->add('<div class="promoBlock">');
		$main->add('<h2 class="centered">Early Bird Special!</h2>');
		$main->add('<h3 class="noLeftMargin">Early bird discount:</h3>');
		$main->add('<ul class="styledList">');
		$main->add('<li>All couples booking over one year in advance, receive 10% off the Ultimate Planning Package.</li>');
		
		$main->add('</ul>');
		
		$main->add('<div class="frontImage"><img class="pageImg" src="'. IMG .'packagePic.jpg" alt="Lemon Flower Arrangement" title="Lemon Flower" /></div>');
		
		//$main->add('<h3 class="noLeftMargin">&Agrave; la carte - Mini Packs $200 for 3 Hours</h3>');
		//$main->add('<ul class="styledList liContainer">');
		//$main->add('<li>Styling Services:<ul class="styledList"><li class="sub">Need help with the design of your wedding? Elegant Weddings &amp; Events would love to sit down and help you customize the design aspect of your wedding.</li></ul></li>');
		//$main->add('<li>Getting Started Consultation:<ul class="styledList"><li class="sub">Help with creating a budget and a timeline to help with your planning.</li></ul></li>');
		//$main->add('</ul>');
		
		$main->add('</div>');
		$main->add('</div>');
	
	break;
	
	//:: contact-us is Contact us
	case "contact-us":
	$ElegantWeddings->setTitle("- Contact Us");		
		$main->add('<div id="ajContent">');
		$main->add('<div id="headerRibbon"><h1 class="ribbon"><span class="ribbon-content">Call Today for a Free Initial Meeting</span></h1></div>');
		//$main->add('<span class="success">'.$_SESSION['success'].'</span>');
		
		$main->add('<div class="contactBlock">');
		$main->add('<h2 class="shadow underline centered">Appointments are available at your convenience.</h2>');
		
		$main->add('<h3 class="noLeftMargin">Phone:</h3>');
		$main->add('<ul class="styledList">');
		$main->add('<li>(403) 942 - 0597 [Office]</li>');
		$main->add('<li>(403) 715 - 8077 [Cell]</li>');
		$main->add('</ul>');
		
		$main->add('<h3 class="noLeftMargin">E-Mail:</h3>');
		$main->add('<ul class="styledList">');
		$main->add('<li><a class="email" href="mailto:'.ADMIN_EMAIL.'">Send us an email!</a></li>');
		$main->add('</ul>');
		
		$main->add('<a name="contactFormAnch"></a>');
		$main->add('<h3 class="noLeftMargin">Contact Form:</h3>');
		$main->add('<h5 class="noLeftMargin">(If you wish to be contacted by Elegant Weddings &amp; Events, please fill out the form below.)</h5>');

		
		if( !isset($_POST['submit']) ){	
			$main->add( contactForm() );
		}
		else{
				$name 		= $_POST['name'];
				$email 		= $_POST['email'];
				$subject 	= $_POST['subject'];
				$comments 	= $_POST['contactComments'];
			
			require_once('captcha/recaptchalib.php');
			$privatekey = "6LfSte4SAAAAAAYuAAsNlth1temvmOnZeCg9UFnY";
			$resp = recaptcha_check_answer ($privatekey,
											$_SERVER["REMOTE_ADDR"],
											$_POST["recaptcha_challenge_field"],
											$_POST["recaptcha_response_field"]);
			  //:: If the Captcha Fails 
			if (!$resp->is_valid) {
				// What happens when the CAPTCHA was entered incorrectly
				$captchaError = "Captcha is required, we need to make sure you are human.";
				$main->add(contactForm($name, $email, $subject, $comments, $captchaError ) );
			} 
			//:: If the Captcha is Successful
			else {
				 $date = date("F j, Y, g:i a");
				 
				 sendMail($name, $email, $subject, $comments, $date);
				 sendReceipt($name, $email, $subject, $comments);
				 //$_SESSION['success'] = "Message Sent Successfully";				 
				 $main->add( '<span class="success">The message was sent successfully.</span>' );
				 $main->add( contactForm() );
				
				 //var_dump($_SESSION['success']);
				 //die();
				 //header("Location: index.php?page=contact-us#top");
			}
			
		}
		$success = "Your contact form has been sent successfully!";
		$main->add('</div>');
		
		$main->add('<br /><br /><br />');
		$main->add('</div>');
			
	
	break;
	
	
	
	//:: This page is for content management, it is unfinished.
	case "admin":
		//$Auth->checkLogin("test@test.ca", "PASSWORD");
		
		switch($_GET['action']){
			
			case "login":
			if($Auth->is_logged_in){
				
				header('location: index.php?page=admin&action=manage');
			}
			else{
				$main->add($Auth->drawLogin());
			}
			
			break;
			
			case "manage":
			if($Auth->is_logged_in){
				$main->add('Welcome to the admin area '.$_SESSION['name'].'<br />');
				$main->add('You are currently logged in using the username: '.$_SESSION['uName'].'<br />');
				$main->add('And using ID: '.$_SESSION['id'].'<br />');
				$main->add('<br /><br />You can use this page to Create, Update, and Delete entries from all pages, just use the navigation at the top to choose the page you want to edit. Please make sure to log out when you are done, and the page will return to normal.');
				
			}
			else{
				header('location: index.php?page=admin&action=login');				
			}
			break;
			
			case "manageTestimonial":
			$Testimonial = new Testimonial(4);
			$main->add("<h1>Manage Testimonials</h1>");
			
			if(isset($_POST['submit'])){
				$picture = $_POST['picture'];
				$quote   = $_POST['quote'];
				$date    = $_POST['date'];
				
							
			
			$main->add($Testimonial->addTestimonial($picture, $quote, $date) );
				
			
				
			
			}
			else{
				$main->add($Testimonial->drawAddTestimonalForm());
			}
			
			
			
			break;
		
		}

			
			//if($Auth->is_logged_in){
				//$main->add("Access Granted");
				
				
				
			//}
			//else{
				//$main->add("FORBIDDEN!<br /><br />You do not have permission to view this page.<br />
							//(If you believe that you have received this message in error, please contact the system administrator.)");
							
			//}
			//break;
		

		
	
	break;
			
		
			

		
		

}




?>