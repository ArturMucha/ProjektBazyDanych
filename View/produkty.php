<?php
        $conn = mysql_connect("localhost",'nazwa_użytkownika','hasło');
        mysql_select_db("produkty");

    if (isset($_POST['submit_pdodaj'])){    
                $id_produktu = $_POST['id_produktu'];
                $nazwa_produktu = $_POST['nazwa_produktu'];
                $dlugosc_trwania_umowy = $_POST['dlugosc_trwania_umowy'];
                  $wysokosc_skladki= $_POST['wysokosc_skladki'];
                $zapytanie = "INSERT INTO KLIENT (id_produktu,nazwa_produktu,dlugosc_trwania_umowy) VALUES('$id_produktu', '$nazwa_produktu', '$dlugosc_trwania_umowy', '$wysokosc_skladki')";
                $idzapytania = mysql_query($zapytanie);
                header("Location: http://localhost/ProjektBazyDanych/View/dodaj_produkt.php");
        }
        if (isset($_POST['submit_pwroc'])){            
                header("Location: http://localhost/ProjektBazyDanych/View/Gui.html");
        }
        
    
    if (isset($_POST['submit_pusun'])){
                $id1_klienta = $_POST['id1_klienta'];
                $zapytanie = "DELETE FROM KLIENT WHERE id_produktu= '$id1_klienta'";
                $idzapytania = mysql_query($zapytanie);
                header("Location: http://localhost/ProjektBazyDanych/View/usun_produkt.php");
        }   
     

       
       mysql_close($conn);
?>

