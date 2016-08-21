<?php 
session_start();
$name = $_POST['name'];
$place = $_POST['place'];
$submit = $_POST['submit'];
$picture = $_FILES['picture'];

$pic_dir = "photos/";
if(isset($submit)){
	$pic_file = $pic_dir . date('dmYGis').basename($picture["name"]);
	move_uploaded_file($picture["tmp_name"], $pic_file);

	$listf = fopen('list.txt','a+') or die("Unable to open file!");
	if(filesize('list.txt') != 0){
			fwrite($listf, '@@@');
	}
		fwrite($listf, $name .'|');
		fwrite($listf, $place.'|');
		fwrite($listf, $pic_file);
	
	fclose($listf);
	header('Location:index.php');

}else{
	header('Location:index.php');
}
?>