<?php
require_once '../model/obslugaAgenci.php';

$dodaj= new obslugaAgenci();
 if(isset($_REQUEST['dodaj']))
       {
            $dodaj->dodaj($_POST['id'],$_POST['imie'], $_POST['nazwkisko'], $_POST['adres'],$_POST['dataUr'],$_POST['dataZa'], $_POST['IDBoss'],$_POST['pensja'],$_POST['notatka'],$_POST['IDReg']);
             
       }
   if(isset($_REQUEST['usun']))    
   {
       $dodaj->usun($_POST['id_usun']);
       
       
       
   }
   
     if(isset($_REQUEST['szkolenie']))    
   {
       $dodaj->wyslijSzkolenie($_POST['nazwa'],$_POST['data_w'],$_POST['il_m'],$_POST['ID_Ag'],$_POST['uwagi'],$_POST['region']);
       
       
       
   }
  
       
?>
