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


<form action="produkty.php" method="post">

  <div>
      <li>
  Id_produktu:<br />
  
  <input name="id_produktu" value="" /><br />
      </li>
  Nazwa:<br />

  <input name="nazwa_produktu" value="" /><br />

  Dlugosc umowy (w miesiacach):<br />

  <input name="dlugosc_trwania_umowy" value="" /><br />

  Skladka minimalna (w zł):<br />

  <input name="wysokosc_skladki" value="" /><br />
  
  
 
  <input type="submit" value="Dodaj" name="submit_pdodaj" />
  <input type="submit" value="Wróć" name="submit_pwroc" />
 

  </div>

  </form>

 </body>


</html>