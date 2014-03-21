<?php 

function CSS($styleName){
	$styleSheet = "";

	$styleSheet .= '<link rel="stylesheet" type="text/css" href="'.CSS_PATH . $styleName.'">';
	$styleSheet .= "\n";
	
	return $styleSheet;
}

function JS($javaScript, $defer = NULL){
	
	$javaScript = "";
	if($defer == TRUE){
		$javaScript .= '<script defer src="'.JS_PATH . $javaScript.'">';
		$javaScript .= '</script>'.\n;
	}
	else{
		$javaScript .= '<script src="'.JS_PATH . $javaScript.'">';
		$javaScript .= '</script>'.\n;	
	}
	
	return $javaScript;
}


function startLayout($css, $js){
	$markUp = DOCTYPE;	
	$markUp .= '<HTML>'.\n;	
	$markUp .= $css;
	$markUp .= $js;
	$markUp .= '<HEAD>'.\n;
	$markUp .= '</HEAD>'.\n;
	$markUp .= '<BODY>'.\n;
	
	return $markUp;
}

function endLayout(){
	$markUp  = \n.'</BODY>';
	$markUp .= "Pie";
	$markUp .= '</HTML>';
	
	return $markUp;
}

?>
