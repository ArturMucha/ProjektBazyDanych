<?php

$login=$_POST['login'];
$haslo=$_POST['haslo'];

$plik = fopen("dane.txt", "r");
while(!feof($plik))
{   
    

	$linia=fgets($plik,50);
	
	$linia1=fgets($plik,50);
	 
	
	
	
}


fclose($plik);
if( $login==$linia and $haslo==$linia1)
{
	 header('Location:View/Gui.html');
	 
	 
}
else{
	
    header('Location:Gui.php');
	
}



?>
