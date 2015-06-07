<?php
        $conn = mysql_connect("localhost","root","root");
        mysql_select_db("test");

    if (isset($_POST['submit_pdodaj'])){    
                $id_produktu = $_POST['id_produktu'];
                $nazwa_produktu = $_POST['nazwa_produktu'];
                $przedmiot_umowy = $_POST['przedmiot_umowy'];
                
                $dlugosc_trwania_umowy = $_POST['dlugosc_trwania_umowy'];
                  $wysokosc_skladki_min= $_POST['wysokosc_skladki_min'];
                  $wysokosc_skladki_maks= $_POST['wysokosc_skladki_maks'];
                  $wysokosc_skladki= $_POST['wysokosc_skladki'];
                $zapytanie = "INSERT INTO produkty (id_produktu,nazwa,przedmiot_umowy,dlugosc_trwania_umowy,wysokosc_skladki_min,wysokosc_skladki_maks,wysokosc_skladki) VALUES('$id_produktu', '$nazwa_produktu','$przedmiot_umowy', '$dlugosc_trwania_umowy', '$wysokosc_skladki_min','$wysokosc_skladki_maks','$wysokosc_skladki')";
                $idzapytania = mysql_query($zapytanie);
                header("Location: http://localhost/ProjektBazyDanych/View/dodaj_produkt.php");
        }
        if (isset($_POST['submit_pwroc'])){            
                header("Location: http://localhost/ProjektBazyDanych/View/Gui.html");
        }
        
    
    if (isset($_POST['submit_pusun'])){
                $id1_produktu = $_POST['id1_produktu'];
                $zapytanie = "DELETE FROM produkty WHERE id_produktu= '$id1_produktu'";
                $idzapytania = mysql_query($zapytanie);
                header("Location: http://localhost/ProjektBazyDanych/View/usun_produkt.php");
        }   
          if (isset($_POST['submit_pzmien'])){
                $id_produktu = $_POST['id_produktu'];
                $id2 = $_POST['id2'];
                $nazwa_produktu = $_POST['nazwa_produktu'];
                $przedmiot_umowy = $_POST['przedmiot_umowy'];
                $dlugosc_trwania_umowy = $_POST['dlugosc_trwania_umowy'];
                $wysokosc_skladki_min = $_POST['wysokosc_skladki_min'];
                  $wysokosc_skladki_maks= $_POST['wysokosc_skladki_maks'];
                  $wysokosc_skladki= $_POST['wysokosc_skladki'];
                $result = mysql_query("UPDATE produkty SET id_produktu = '$id2',nazwa_produktu = '$nazwa_produktu', przedmiot_umowy = '$przedmiot_umowy', dlugosc_trwania_umowy = '$dlugosc_trwania_umowy', wysokosc_skladki_min = '$wysokosc_skladki_min', wysokosc_skladki_maks = '$wysokosc_skladki_maks', wysokosc_skladki = '$wysokosc_skladki' WHERE id_produktu='$id_produktu'");
                header("Location: http://localhost/ProjektBazyDanych/View/zmien.php");
        }   
     

       
       mysql_close($conn);
?>

