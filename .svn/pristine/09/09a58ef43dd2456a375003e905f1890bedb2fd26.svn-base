<?php 
class Testimonial extends Database{
	public $number;


public function __construct($num){	
	
	$this->number = $num;
	
}

public function editTestimonial(){

}

public function addTestimonial($pic, $quote, $date){
	$date = strtotime($date);
	
	$sql  = 'INSERT INTO testimonial ( ';
	$sql .= 'testim_picture, testim_quote, testim_weddingDate';
	$sql .= ') ';
	$sql .= 'VALUES( ';
	$sql .= $pic.', ';
	$sql .= $quote.', ';
	$sql .= $date;
	$sql .= ')';
	
		
	Database::executeQuery($sql);
	

}

public function drawAddTestimonalForm($pic = NULL, $quote = NULL, $date = NULL){
	$markUp  = '<div id="testimonialBlock" >';
	$markUp .= '<form method="POST" enctype="multipart/form-data" action="index.php?page=admin&action=manageTestimonial" >';
	$markUp .= '<label for="picture">Picture: </label>';
	$markUp .= '<input type="file" name="picture" value="picture" /><br /><br />';
	$markUp .= '<label for="quote">Quote: </label>';
	$markUp .= '<textarea name="quote">'.$quote.'</textarea><br /><br />';
	$markUp .= '<label for="date">Event Date: </label>';
	$markUp .= '<input type="date" name="date" value="'.$date.'"/><br /><br />';
	$markUp .= '<label for="testimBlock">Block to Edit</label>';
	$markUp .=  $this->drawTestimSelect($this->number)."<br /><br />";
	$markUp .= '<input type="submit" name="submit" value="Submit" />';
	$markUp .= '<button>Preview</button>';
	$markUp .= '</form>';
	$markUp .= '</div><br /><br /><br />';
	
	$markUp .= '<div id="testimonialPreviewBox">';
	$markUp .= '<span id="testimPreview">Something</span>';
	$markUp .= '</div>';
		
	return $markUp;
	
}

public function drawEditTestimonalForm($pic = null, $quote = null, $date = null){
	$markUp  = '<div id="testimonialBlock" >';
	$markUp .= '<form method="POST" enctype="multipart/form-data" action="managePages.php?page=testimonial" >';
	$markUp .= '<label for="testimBlock">Block to Edit</label>';
	$markUp .=  $this->drawTestimSelect($this->number)."<br /><br />";
	
	$markUp .= '<label for="picture">Picture: </label>';
	$markUp .= '<input type="file" name="picture" value="picture" /><br /><br />';
	$markUp .= '<label for="quote">Quote: </label>';
	$markUp .= '<textarea name="quote">'.$quote.'</textarea><br /><br />';
	$markUp .= '<label for="date">Event Date: </label>';
	$markUp .= '<input type="date" name="date" value="'.$date.'"/><br /><br />';
	
	
	$markUp .= '<input type="submit" name="submit" value="Submit" />';
	$markUp .= '<button>Preview</button>';
	$markUp .= '</form>';
	$markUp .= '</div><br /><br /><br />';
	
	$markUp .= '<div id="testimonialPreviewBox">';
	$markUp .= '<span id="testimPreview">Something</span>';
	$markUp .= '</div>';
		
	return $markUp;
	
}

public function deleteTestimonial(){

}

public function buildTestimonial(){

}

private function drawTestimSelect($num){	
		
	$markUp  = '<select name="testimBlock">';
	for($option = 0; $option < $num; $option++){
		$markUp .= '<option>'.($option+1).'</option>';
	}
	$markUp .= '</select>';
	
	return $markUp;

}	



}

?>