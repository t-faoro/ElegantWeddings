<?php 
session_start();
function contactForm($name = null, $email = null, $subject = null, $comments = null, $captchaErr = null, $errorMessage = null){
	
	$markUp  = '<div id="contactForm">';
	if($errorMessage != null){
		$markUp .= '<span class="captchaErr bold">'.$errorMessage.'</span>';
	}
	//var_dump($_SESSION['success']);
	//die();
	$markUp .= '<span class="note">(Note: All fields are requred.)</span>';
	$markUp .= '<form id="Contact" method="POST" action="#contactFormAnch">';
	$markUp .= '<label class="bold"  for="name">Name: </label>';
	$markUp .= '<input type="text" name="name" value="'.$name.'" />';
	$markUp .= '<br /><br />';
	$markUp .= '<label class="bold"  for="email">E-Mail: </label>';
	$markUp .= '<input type="text" name="email" value="'.$email.'" />';
	$markUp .= '<br />';
	$markUp .= '<label class="bold"  for="subject">Subject</label>';
	$markUp .= '<input type="text" name="subject" value="'.$subject.'" />';
	$markUp .= '<br /><br />';
	$markUp .= '<span class="commentContainer"><label id="commentLabel" class="bold" for="contactComments">Comments: </label>';
	$markUp .= '<textarea name="contactComments" >';
	$markUp .= $comments;
	$markUp .= '</textarea></span>';
	$markUp .= '<br /><br />';
 	
	if($captchaErr != null){
		$markUp .= '<span class="captchaErr bold">'.$captchaErr.'</span>';
	}
	require_once('captcha/recaptchalib.php');
  	$publickey = "6LfSte4SAAAAAGw3ZfC3vmV_boXUXJEypAxk61Zm"; // you got this from the signup page  	
	$markUp .=  recaptcha_get_html($publickey);	
	
	$markUp .= '<br /><br />';
	
	$markUp .= '<input type="submit" name="submit" value="Send" />';	

	$markUp .= '</form>';
	$markUp .= '</div>';
	
	return $markUp;	
}

function sendMail($name, $email, $subject, $comments, $date){
	$to = ADMIN_EMAIL;
	$fromName = $name;
	$fromEmail = $email;
	$mailSubject = "[WEBSITE CONTACT] ".$subject;
	$body = $comments;
	$dateTime = $date;
	$headers = "From: ".$email."\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 
	
	$email  = '<html></body>';
	$email .= 'Message sent on: <b>'.$dateTime."</b><br />";
	$email .= 'By: '.$name."<br />";
	$email .= 'From Email: '.$email."<br />";
	$email .= '<h2><u>You Have received a Website contact! Information Below:</u></h2>';
	$email .= '<br /><br />';
	
	$email .=  '<hr />';
	$email .= '<u><h2>The Original Message:</h2></u>';
	$email .= $comments;
	$email .= '<hr />';
	
	$email .= '</body></html>';

	
	
	mail($to, $mailSubject, $email, $headers);

	
}

function sendReceipt($name, $email, $subject, $comments){
	$to = $email;
	$fromName = "Elegant Weddings &amp; Events";
	$fromEmail = "do-not-reply@elegantweddingsevents.com";
	$mailSubject = "Re: ".$subject;

	$body  = '<html><body>';

	$body .= '<p>Hello '.$name.': <br /><br />';
	$body .= 'Thank you for contacting Elegant Weddings &amp; Events! I look forward to speaking to you about your dream. I pride myself on
			  responding to contact requests within 24 hours of receiving them. So, you will be hearing from me very soon.<br /><br />';
			  
	$body .= 'Thank you again!<br /><br />';		  
			  
	$body .= 'Sincerely,<br />';
	$body .= 'Andrea Zdun - <i>WPICC</i><br />';
	$body .= 'Event Coordinator<br />';
	$body .= 'Elegant Weddings &amp; Events<br />';
	$body .= 'http://www.elegantweddingsevents.com<br />';
	
	$body .= '<hr />';
	$body .= '<u><h2>Your Original Message:</h2></u>';
	$body .= $comments;
	$body .= '<hr />';
	$body .= '<br /><br /><b><i><u>This Email is simply a receipt automatically generated, and sent to you from the Elegant Weddings &amp; Events
			  servers. Please do not reply to this email, as no response will be given.</b></i></u></p>';
	
	$body .= '</body></html>';
		
	$headers = "From: do-not-reply@elegantweddingsevents.com\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 
	
	mail($to, $mailSubject, $body, $headers);

}

function procUpload(){

}

function drawFooter(){

	
	$markUp  = '<div id="footerStage">';
	
	$markUp .= '<div class="footerLeft">';
	$markUp .= '<span class="smallLogo"><img src="images/EW_logo_small.png" /></span>';
	$markUp .= '<span class="desc">Elegant Weddings &amp; Events <br /> Copyright &#169; 2014  <br /> <a class="top footer">TOP</a></span>';
	//$markUp .= '<a class="top"><h4 class="centered">Top</h4></a>';
	$markUp .= '</div>';
	$markUp .= '<div class="footerRight">';
	$markUp .= '<h4>Connect with us!</h4>';
	$markUp .= '<span class="icon"><a href="https://www.facebook.com/ElegantWeddingsEventsLethbridge" target="_blank"><img src="images/facebook.png" /></a></span>';
	$markUp .= '<span class="icon"><a href="https://twitter.com/EWAELethbridge" target="_blank"><img src="images/twitter.png" /></a></span>';
	$markUp .= '<span class="icon"><a href="http://www.pinterest.com/EWAELethbridge" target="_blank"><img src="images/pinterest.png" /></a></span>';
	$markUp .= '<span class="icon"><a href="http://www.weddingwire.com/biz/elegant-weddings-events-lethbridge-ab-lethbridge/ea29637ba0e46a1c.html" target="_blank"><img src="images/weddingWire.png" /></a></span>';
	$markUp .= '<span class="icon"><a href="mailto:'.ADMIN_EMAIL.'"><img src="images/email.png" /></a></span>';
	
	$markUp .= '</div>';
	$markUp .= '<div class="footerBottom">';
	$markUp .= drawSocialMediaButtons();
	//$markUp .= '<div class="fb-like" data-href="https://www.facebook.com/ElegantWeddingsEventsLethbridge" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>';
	$markUp .= '</div>';	  
	$markUp .= '</div>';
	
	return $markUp;
}

function drawSocialMediaButtons(){
	$markUp  = '<div id="socialMediaButtons">';
	$markUp .= '<div class="facebookButton"><div class="fb-like" data-href="'.FACEBOOK.'" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div></div>';
	$markUp .= '<div class="twitterButton"><a href="'.TWITTER.'" class="twitter-follow-button" data-show-count="false" data-lang="en" data-size="large">Follow @twitter</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div>';
	$markUp .= '</div>';

	return $markUp;
}


function drawFootNav(){
	
	$markUp  = '<ul id="footNav">';
	$markUp .= '<li><a href="#">Home</a></li>';
	$markUp .= '<li><a href="#">Story</a></li>';
	$markUp .= '<li><a href="#">Portfolio</a></li>';
	$markUp .= '<li><a href="#">Testimonial</a></li>';
	$markUp .= '<li><a href="#">Package</a></li>';
	$markUp .= '<li><a href="#">Contact</a></li>';
	$markUp .= '</ul>';
	
	return $markUp;
}

function rotatingBanner($img1, $img2, $img3, $img4 ){
	$markUp  = '<div id="bannerWrap">';
	$markUp .= '<img class="bannerItem" src="'.$img1.'" />';
	$markUp .= '<img class="bannerItem" src="'.$img2.'" />';
	$markUp .= '<img class="bannerItem" src="'.$img3.'" />';
	$markUp .= '<img class="bannerItem" src="'.$img4.'" />';
	$markUp .= '</div>';
	
	return $markUp;	
}

function fancyBanner(){
	$markUp  = '<div id="allinone_bannerRotator_attractive" style="display:none;">';
	$markUp .= '<ul class="allinone_bannerRotator_list">';
	$markUp .= '<li data-bottom-thumb="banner/images/thumbs/b_norland-thumb.jpg" data-text-id="#allinone_bannerRotator_photoText4"><img src="banner/images/b_norland.jpg" alt="" /></li>';
	$markUp .= '<li data-bottom-thumb="banner/images/thumbs/flowers-thumb.jpg" data-text-id="#allinone_bannerRotator_photoText1"><img src="banner/images/flowers.jpg" alt="" /></li>';
	$markUp .= '<li data-bottom-thumb="banner/images/thumbs/heather-thumb.jpg" data-text-id="#allinone_bannerRotator_photoText2"><img src="banner/images/heather.jpg" alt="" /></li>';
	$markUp .= '<li data-bottom-thumb="banner/images/thumbs/tenille-thumb.jpg" data-text-id="#allinone_bannerRotator_photoText3"><img src="banner/images/tenille.jpg" alt="" /></li>';
	
	$markUp .= '</ul>';
	$markUp .= '</div>';
	//$markUp .= '';
	
	return $markUp;
	
}


function drawTestimonialsFirst(){

	$markUp  = '<div class="testimonialStage">';
	
	$markUp .= '<div class="testimBlock">';
	$markUp .= '<div class="testimonialImgLeftFloat"><img src="images/lindsay.jpg" /></div>';
	$markUp .= '<div class="testimonialTextLeftFloat"><span class="testimonial">Every single one of my wedding ideas became reality. She knew my vision for my wedding and ensured that I had everything I dreamt of. Having Andrea was invaluable.</span></div>';
	$markUp .= '<div class="clientName"><h3 class="centered bold noPadd">Lindsay - Married August 25, 2012</h3></div>';	
	$markUp .= '</div>';
	
	$markUp .= '</div>';
	
	return $markUp;	

}

function drawTestimonialsSecond(){

	$markUp  = '<div class="testimonialStage">';
	
	$markUp .= '<div class="testimBlock">';
	$markUp .= '<div class="testimonialImgRightFloat"><img src="images/Tennille.jpg" /></div>';
	$markUp .= '<div class="testimonialTextRightFloat"><span class="testimonial">It\'s the best thing a bride could do for herself! Even for family on the day of. My mother-in-law is still talking about how they all got to enjoy, and nobody had to miss out.</span></div>';
	$markUp .= '<div class="clientNameRight"><h3 class="centered bold noPadd">Tennille - Married October 5, 2013</h3></div>';	
	$markUp .= '</div>';
	
	$markUp .= '</div>';
	
	return $markUp;	

}

function drawTestimonialsThird(){

	$markUp  = '<div class="testimonialStage">';
	
	$markUp .= '<div class="testimBlock">';
	$markUp .= '<div class="testimonialImgLeftFloat"><img src="images/Katie.jpg" /></div>';
	$markUp .= '<div class="testimonialTextLeftFloat"><span class="testimonial"> I would recommend Andrea to any of my friends if you\'re looking for someone who can manage your budget, your planning and your sanity.</span></div>';
	$markUp .= '<div class="clientName"><h3 class="centered bold noPadd">Katie - Married August 4, 2012</h3></div>';	
	$markUp .= '</div>';
	
	$markUp .= '</div>';
	
	return $markUp;	

}


function packageMenu(){

	$markUp  = '<div id="packageMenu">';
	
	$markUp .= '<ul class="packageNav">';
	$markUp .= '<li><a id="ultimate">The Ultimate</a></li>';
	$markUp .= '<li><a id="seeItUpTo">See It Up To</a></li>';
	$markUp .= '<li><a id="seeItThrough">See It Through</a></li>';
	$markUp .= '<li><a id="ALaCarte">&Agrave; La Carte</a></li>';
	
	$markUp .= '</ul>';
	
	$markUp .= '</div>';
	
	return $markUp;

}

function packageDisclosure(){
	$markUp  = '<div class="packDisclose">';
	
	$markUp .= '<p>Prices are not listed because dreams often vary greatly, thus, prices will also vary. Contact us today so we can help your dream become a reality.<br /><br /> Please click one of the links below to see more information on our packages.</p>';
	
	$markUp .= '</div>';
	
	return $markUp;	
}




























?>