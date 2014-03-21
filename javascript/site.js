// JavaScript Document

$(document).load( function(){
		$('#gallery-carousel').scrollingCarousel();
		
		$('#gallery-carousel').scrollingCarousel( {
			scrollerAlignment : 'horizontal',
			autoScroll: true
		});

	$('a.gallery').colorbox({
		rel: 'gallery',
		maxWidth: '80%',
		maxHeight: '75%',
		opacity: 0.85
	
	});

});

$(document).ready (function () {

	
	
	
/*	var $gallery = $("a[rel=gallery]").colorbox();
	$("a.gallery").click(function(e){
		//e.preventDefault();
		$gallery.eq(0).click();
	});
*/	
	
	$('.galName').css("display", "none");
	$('.existGalName').css("display", "none");
	$(function() {
		$('input#albumNew').change(function(){			
			$('.existGalName').css("display", "none");
			$('.galName').css("display", "block");
		});
		$('input#albumExist').change(function(){
			$('.galName').css("display", "none");
			$('.existGalName').css("display", "block");
		});
		
		
		
		//var newExist;
		
/*		if( $('input#albumNew').is(':checked') ){
			$('.galName').css("display", "block");
		}
		else if( $('input#albumExist').is(':checked') )	{
			$('.galName').css("display", "none");
		}*/
/*		else{
			$('.galName').css("display", "none");
		}*/
	
	});



});