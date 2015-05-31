<?php
        $connect = mysql_connect("localhost",'nazwa_użytkownika','hasło');
        mysql_select_db("nazwabazy.sql");

    if (isset($_POST['submit_kdodaj'])){     
                $pesel_klienta = $_POST['pesel_klienta'];
                $imie_klienta = $_POST['imie_klienta'];
                $nazwisko_klienta = $_POST['nazwisko_klienta'];
                $adres_klienta = $_POST['adres_klienta'];
                $miejscowosc_klienta = $_POST['miejscowosc_klienta'];
                $notatka_klienta = $_POST['notatka_klienta'];   
                $zapytanie = "INSERT INTO KLIENT (Pesel_Klienta, Imie, Nazwisko, Adres, Miejscowosc, Notatka) VALUES('$pesel_klienta', '$imie_klienta', '$nazwisko_klienta', '$adres_klienta', '$miejscowosc_klienta', '$notatka_klienta')";
                $idzapytania = mysql_query($zapytanie);
                header("Location: http://localhost/ProjektBazyDanych/View/dodaj_klienta.php");
        }
        if (isset($_POST['submit_kwroc'])){            
                header("Location: http://localhost/ProjektBazyDanych/View/Gui.html");
        }
        if (isset($_POST['submit_uspot'])){ 
                $data_spotkania = $_POST['data_spotkania'];
                $uwagi = $_POST['uwagi'];
                $pesel_klienta = $_POST['pesel_klienta'];
                $id_agenta = $_POST['id_agenta'];
                $id_regionu = $_POST['id_regionu'];
                $zapytanie = "INSERT INTO SPOTKANIA (Data_Spotkania, Uwagi, Pesel_Klienta, ID_Agenta, ID_Regionu) VALUES('$data_spotkania', '$uwagi', '$pesel_klienta', '$id_agenta', '$id_regionu')";
                $idzapytania = mysql_query($zapytanie);
                header("Location: http://localhost/ProjektBazyDanych/View/ustal_spotkanie.php");
        }
    if (isset($_POST['submit_kedytuj'])){         
                $pesel_klienta = $_POST['pesel_klienta'];
                $pesel_klienta2 = $_POST['pesel_klienta2'];
                $imie_klienta = $_POST['imie_klienta'];
                $nazwisko_klienta = $_POST['nazwisko_klienta'];
                $adres_klienta = $_POST['adres_klienta'];
                $miejscowosc_klienta = $_POST['miejscowosc_klienta'];
                $notatka_klienta = $_POST['notatka_klienta'];
                $zapytanie = "UPDATE KLIENT SET Pesel_Klienta = '$pesel_klienta2',Imie = '$imie_klienta', Nazwisko = '$nazwisko_klienta', Adres = '$adres_klienta', Miejscowosc = '$miejscowosc_klienta', Notatka = '$notatka_klienta' WHERE Pesel_Klienta='$pesel_klienta'";
                $idzapytania = mysql_query($zapytanie);
                header("Location: http://localhost/ProjektBazyDanych/View/edytuj_klienta.php");
        }
    if (isset($_POST['submit_kusun'])){
                $u_pesel_klienta = $_POST['u_pesel_klienta'];
                $zapytanie = "DELETE FROM KLIENT WHERE Pesel_Klienta= '$u_pesel_klienta'";
                $idzapytania = mysql_query($zapytanie);
                header("Location: http://localhost/ProjektBazyDanych/View/usun_klienta.php");
        }   
     

       
       mysql_close($connect);
?>

