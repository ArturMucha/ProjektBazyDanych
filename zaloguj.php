<?php

$login=$_POST['login'];
$haslo=$_POST['haslo'];
/*
if($login=='admin' && $haslo=='admin')
{
	header('Location:Gui.html ');
}
else
{
	echo " Blad logowania";
	header('Location:Gui.php');
	
}*/
$plik = fopen("dane.txt", "r");
while(!feof($plik))
{   
    

	
	
	$linia1=fgets($plik,50);
	 
	
	
	
}


fclose($plik);
if( $login==false or $haslo==$linia1)
{
	 header('Location:View/Gui.html');
	 
	 
}
else{
	
    header('Location:Gui.php');
	
}



?>