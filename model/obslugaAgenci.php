<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of obslugaAgenci
 *
 * @author Dominik
 */
class obslugaAgenci {

    public function dodaj($id, $imie, $nazwisko, $adres, $dataUr, $dataZa, $IDBoss, $pensja, $notatka,$IDReg )
    {
    $connection = @mysql_connect('localhost', 'root', 'root')
    or die('Brak połączenia z serwerem MySQL');
    $db = @mysql_select_db('AGENT', $connection)
    or die('Nie mogę połączyć się z bazą danych');
    
    // dodajemy rekord do bazy
    $ins = @mysql_query("INSERT INTO agent SET Id_agenta='$id',imie='$imie', nazwisko='$nazwisko', adres='$adres',Data_Urodzenia='$dataUr', Data_Zatrudnienia='$dataZa', ID_Szefa='$IDBoss', Pensja='$pensja', notatka='$notatka', ID_Regionu= '$IDReg' ");
    
    if($ins) echo "Rekord został dodany poprawnie";
    else echo "Błąd nie udało się dodać nowego rekordu";
    
    mysql_close($connection); 
     
               
    }
    public function usun($id){
         $connection = @mysql_connect('localhost', 'root', 'root')
    or die('Brak połączenia z serwerem MySQL');
    $db = @mysql_select_db('agent', $connection)
    or die('Nie mogę połączyć się z bazą danych');  
     mysql_query("DELETE FROM AGENT WHERE Id_agenta='$id'")
    or die('Błąd zapytania: '.mysql_error());
    
    echo 'Rekord został usunęty z bazy';    
        
        
    }
    public function wyslijSzkolenie($nazwa,$il_m,$id_ag,$uwagi,$id_reg){
         $connection = @mysql_connect('localhost', 'root', 'root')
    or die('Brak połączenia z serwerem MySQL');
    $db = @mysql_select_db('agent', $connection)
    or die('Nie mogę połączyć się z bazą danych');
     $ins = @mysql_query("INSERT INTO szkolenie SET nazwa='$id',data='$nazwa', Ilosc_Miejsc='$il_m', ID_Agenta='$id_ag',Uwagi='$uwagi', ID_Regionu='$id_reg' ");
    
    if($ins) echo "Rekord został dodany poprawnie";
    else echo "Błąd nie udało się dodać nowego rekordu";
    
    mysql_close($connection); 
    
    }
}
