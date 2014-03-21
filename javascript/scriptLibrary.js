

$(document).ready(function() {
	$("div#nav ul li").click(function(){
		$("div#nav ul li").removeClass('selected');
		$(this).addClass('selected');
	
	});
	
	
	$('#Contact').validate({
		rules: {
			name:{
				required: true,
			},			
			email:{
				required: true,
				email: true
			},
			subject:{
				required: true,
			},
			contactComments:{
				required: true,
			}
		},
		messages:{
			name: "Your name is required.",
			email:{
				email: "An Email must follow the 'name@domain.com' format.",
				required: "Your Email is required."
			},
			subject: "A Subject is a required.",
			contactComments: "Your Comments are required." ,
			
		}
		
		
	
	});


	function scrollToAnchor(aid){
		var aTag = $("a[name='"+ aid +"']");
		$('html,body').animate({scrollTop: aTag.offset().top},'slow');
	}
	
	$("#ultimate").click(function() {
	   scrollToAnchor('ultimate');
	});
	$("#seeItUpTo").click(function() {
	   scrollToAnchor('seeItUpTo');
	});
	$("#seeItThrough").click(function() {
	   scrollToAnchor('seeItThrough');
	});
	$("#ALaCarte").click(function() {
	   scrollToAnchor('aLaCarte');
	});
	
	$(".top").click(function() {
		scrollToAnchor('top');
	});
	

	
   $("#content").css("display", "none");
 
    $("#content").fadeIn(1000);
 
    $("a.navLink").click(function(event){
        event.preventDefault();
        linkLocation = this.href;
        $("#content").fadeOut(500, redirectPage);
		
		      
    });
         
    function redirectPage() {
        window.location = linkLocation;
    }
	

});


$(window).load(function() { //start after HTML, images have loaded
			$('#allinone_bannerRotator_attractive').allinone_bannerRotator({
				skin: 'attractive',
				width: 960,
				height: 384,
				responsive: true,
				defaultEffect: 'fade',
				effectDuration: 1,
				thumbsWrapperMarginBottom: -10	
			});	

	$("#Gallery_One").thumbScroller({
		slideWidth: 200,
		slideHeight: 200,
		responsive: true,
		keyboard: true,
		mousewheel: true,
		numDisplay: 4,
		slideMargin: 10,
		autoPlay: true,
		pauseOnHover: true,
		moveByOne: true
	});
	$("#Gallery_Two").thumbScroller({
		slideWidth: 200,
		slideHeight: 200,
		responsive: true,
		keyboard: true,
		mousewheel: true,
		numDisplay: 4,
		slideMargin: 10,
		autoPlay: true,
		pauseOnHover: true,
		moveByOne: true
	});
	$("#Gallery_Three").thumbScroller({
		slideWidth: 200,
		slideHeight: 200,
		responsive: true,
		keyboard: true,
		mousewheel: true,
		numDisplay: 4,
		slideMargin: 10,
		autoPlay: true,
		pauseOnHover: true,
		moveByOne: true
	});
	$("#Gallery_Four").thumbScroller({
		slideWidth: 200,
		slideHeight: 200,
		responsive: true,
		keyboard: true,
		mousewheel: true,
		numDisplay: 4,
		slideMargin: 10,
		autoPlay: true,
		pauseOnHover: true,
		moveByOne: true
	});

	
  


});