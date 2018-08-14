<?php
/*
loading css pages depending on $pageName value
{index,}

css Files
	sharespages
	index
	
php Main Pages
	index
*/

$t1='<link rel="stylesheet" type="text/css" href="css/';
$t2='.css">';

if(!isset($pageName))
	header("location: ../notfound.php");
	//exit;
//array of css files of the page
$cssFilesArray = array("sharedpages", "header");

//add files names to array
if($pageName=="index")
	array_push($cssFilesArray, "index");
else if($pageName=="header")
	array_push($cssFilesArray, "");

//print HTML tags of css files
foreach ($cssFilesArray as &$fileName) {
    if($fileName!="")
		echo $t1.$fileName.$t2;
}

?>
