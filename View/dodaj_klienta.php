<!DOCTYPE HTML>
<html>
<head>
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta charset="utf-8"/>
	<title>Firma ubezpieczeniowa </title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	
	<style>
            body {background-color: #009999}
	#main
	{
	    width:1000px;
		margin-left:auto;
		margin-right:auto;
	}
        #logo
	{
	  background-color:black;
	  color:white;
	  text-align:center;
	  padding:3px;
        }
            p, ul, li, div, nav
        {

            padding:0;
            margin:0;
        }


        body
        {
            font-family:Calibri;
        }


        #menu {
            overflow: auto;
            position:relative;
            z-index:2;
        }


	</style>
	


</head>


<body>


<form action="obsluga_klienta.php" method="post">

  <div>
      <li>
  PESEL:<br />
  
  <input name="pesel_klienta" value="" /><br />
      </li>
  Imię:<br />

  <input name="imie_klienta" value="" /><br />

  Nazwisko:<br />

  <input name="nazwisko_klienta" value="" /><br />

  Adres:<br />

  <input name="adres_klienta" value="" /><br />
  
  Miejscowość:<br />

  <input name="miejscowosc_klienta" value="" /><br />
  
  *Notatka:<br />

  <input name="notatka_klienta" value="" /><br /><br />
  
 *pola nieobowiązkowe<br /><br />
 
  <input type="submit" value="Dodaj" name="submit_kdodaj" />
  <input type="submit" value="Wróć" name="submit_kwroc" />
 

  </div>

  </form>

 </body>


</html>