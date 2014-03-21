// JavaScript Document

$(document).ready (function () {
	
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
		
	
	});



});