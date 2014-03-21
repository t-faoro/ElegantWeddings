<?php 
//:: Start of Functions

//:: Creates the Form to create an Album
function createAlbumForm($con){
	
	$markUp  = '<form method="POST" action="index.php?album=new">';
	$markUp .= '<label>Album Name</label>'."<br />";
	$markUp .= '<input type="text" name="album" value="Something"/>'."<br />";
	$markUp .= '<br />';
	$markUp .= '<input type="submit" name="createAlbum" value="Create Album" />';
	$markUp .= '</form>';
	
	return $markUp;
}

//:: Creates Album entry in Database
function createAlbum($con, $title){
		$album = mysqli_real_escape_string($con, $title);	
				
		$sql  = "INSERT INTO album ";
		$sql .= '(Album_Name)';
		$sql .= ' VALUES(';
		$sql .= " '".$album."'";
		$sql .= ')';
			
		mysqli_query($con, $sql);
}

//:: Creates a link that will allow the user to go back to the home page
function backHome(){
	echo '<a href="index.php?p='.HOME_PAGE.'">Back Home</a>';
}

//:: Selects and Displays the album on the page.
function getAlbums($con){
	$sql  = "SELECT * ";
	$sql .= "FROM album ";
	
	$query = mysqli_query($con, $sql);
	
	$markUp  = '<table border=1>';
	$markUp .=  '<tr>';	
	$markUp .= '<th>ALBUM NAME</th>';
	$markUp .= '<th>ALBUM ID</th>';
	$markUp .= '</tr>';
	
	while($album = mysqli_fetch_array($query)){
		
		$albumID = getAlbumId($con, $album['Album_Name']);
		
		$markUp .= '<tr>';	
		$markUp .= '<td>';
		$markUp .= $album['Album_Name'];
		$markUp .= '</td>';
		$markUp .= '<td>';
		$markUp .= $albumID;
		$markUp .= '</td>';
		$markUp .= '<td>';
		$markUp .= getToolBox($con, $albumID);
		$markUp .= '</td>';
		$markUp .= '</tr>';
	}
	$markUp .= '</table>';
	
	return $markUp;
	
	
}

//:: Retrieves the Album ID from the Database from the Album Name.

function getAlbumId($con, $albumName) {
	$sql = "SELECT gal_Field_ID ";
	$sql .= "FROM album ";
	$sql .= 'WHERE Album_Name = "' . $albumName . '"';

	$query = mysqli_query($con, $sql);
	while ($album = mysqli_fetch_array($query)) {

		$id = $album['gal_Field_ID'];
	}
	return $id;
}

function getToolBox($con, $id){
	$markUp   =	'<div><a href="index.php?album=view&id='.$id.'">V</a></div>';
	$markUp  .= '<div><a href="index.php?album=modify&id='.$id.'">M</a></div>';
	$markUp  .= '<div><a href="index.php?album=delete&id='.$id.'">D</a></div>';
	
	return $markUp;
}
	
//:: A function that will display images that belong to the specified album.
function getImagesByAlbum($con, $album){
	
}

function uploadImageForm($con) {
		
	$markUp  = '<form method="post"';
	$markUp .= 'enctype="multipart/form-data">';
	$markUp .= '<label for="file">Filename:</label>';
	$markUp .= '<input type="file" name="file" id="file"><br>';
	$markUp .= '<input type="submit" name="submit" value="Submit">';
	$markUp .= '</form>';
	
	return $markUp;
}

function uploadImageScript($con){
	
}


?>