<?php
require_once 'C:/xampp/htdocs/model/obslugaSzkolenie.php';

$dodaj= new obslugaSzkolenie();
 if(isset($_REQUEST['dodaj']))
       {
            $dodaj->dodaj($_POST['nazwa'],$_POST['data'], $_POST['il_m'], $_POST['id_ag'],$_POST['uwagi'],$_POST['id_reg']);
             
       }
 if(isset($_REQUEST['usun']))    
   {
       $dodaj->usun($_POST['id_usun']);
   }

 if(isset($_REQUEST['edytuj']))
   {
        $dodaj->edytuj($_POST['nazwa2'],$_POST['data'], $_POST['il_m'], $_POST['id_ag'],$_POST['uwagi'],$_POST['id_reg'],$_POST['nazwa']);
   }
  
  
       
?>
