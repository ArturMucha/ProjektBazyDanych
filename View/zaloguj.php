<?php

if (isset($_POST['login'])) {
	$login=$_POST['login'];
	$haslo=$_POST['haslo'];
	$plik = fopen("dane.txt", "r");
	while(!feof($plik))
	{   
		$linia=fgets($plik,50);
		$linia1=fgets($plik,50);
	}
	fclose($plik);
	$linia= trim($linia);
	$linia1= trim($linia1);

        if( $login == $linia && $haslo == $linia1)
	{
            header('Location:Gui.html');
             
		 
	}
	else{
            
	    header('Location:../index.php');
            
	}
}









?>