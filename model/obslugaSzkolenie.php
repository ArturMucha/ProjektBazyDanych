<?php

class obslugaSzkolenie {

    public function dodaj($nazwa,$data,$im_m,$id_ag,$uwagi,$id_reg )
    {
    $connection = @mysql_connect('localhost', 'root', 'root')
    or die('Brak połączenia z serwerem MySQL');
    $db = @mysql_select_db('test', $connection)
    or die('Nie mogę połączyć się z bazą danych');
    
    // dodajemy rekord do bazy
    $ins = @mysql_query("INSERT INTO szkolenia SET Nazwa='$nazwa',Data='$data', Ilosc_Miejsc='$il_m', ID_Agenta='$id_ag',Uwagi='$Uwagi', ID_Regionu='$id_reg'");
    
    if($ins) echo "Rekord został dodany poprawnie";
    else echo "Błąd nie udało się dodać nowego rekordu";
    
    mysql_close($connection); 
     
               
    }  
     public function usun($id){
         $connection = @mysql_connect('localhost', 'root', 'root')
    or die('Brak połączenia z serwerem MySQL');
    $db = @mysql_select_db('sql', $connection)
    or die('Nie mogę połączyć się z bazą danych');  
     mysql_query("DELETE FROM szkolenia WHERE Nazwa='$id'")
    or die('Błąd zapytania: '.mysql_error());
    
    echo 'Rekord został usunęty z bazy';    
        
        
    }

    public function edytuj($nazwa,$data,$im_m,$id_ag,$uwagi,$id_reg,$nazwa2)
    {
        $connection = @mysql_connect('localhost', 'root', 'root')
            or die('Brak połączenia z serwerem MySQL');
            $db = @mysql_select_db('sql', $connection)
            or die('Nie mogę połączyć się z bazą danych');

            // dodajemy rekord do bazy
            $ins = @mysql_query("INSERT INTO szkolenia SET Nazwa='$nazwa',Data='$data', Ilosc_Miejsc='$il_m', ID_Agenta='$id_ag',Uwagi='$Uwagi', ID_Regionu='$id_reg' WHERE Nazwa='$nazwa2'");

            if($ins) echo "Rekord został dodany poprawnie";
            else echo "Błąd nie udało się dodać nowego rekordu";

            mysql_close($connection);
    }
}



