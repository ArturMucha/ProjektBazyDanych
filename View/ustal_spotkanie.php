<!DOCTYPE HTML>
<html>
<head>
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
            float :left;
        }


        .parent-menu {
            background-color: blue;
            min-width:200px;
            min-height: 550px;
            float:left;
            width : 40%; 
        }


        #menu ul
        {
            list-style-type:none;
        }


        #menu ul li a
        {

            padding:10px 15px;
            display:block;
            color:#fff;
            text-decoration:none;
        }


       
             #pola{
            float:left;
         width : 40%;  
        }
	</style>
	


</head>


<body>


	<div id="main" >
		<div id="logo"> <h2>System informatyczny dla firmy ubezpieczeniowej</h2></div>	
	<nav id="menu">

        <ul class="parent-menu">
                   <li><a href="http://localhost/ProjektBazyDanych/View/dodaj_klienta.php">Dodaj Klienta</a></li>

                    <li><a href="http://localhost/ProjektBazyDanych/View/usun_klienta.php">Usuń Klienta</a></li>

                   <li><a href="http://localhost/ProjektBazyDanych/View/edytuj_klienta.php">Edytuj Klienta</a></li>

                    <li><a href="http://localhost/ProjektBazyDanych/View/ustal_spotkanie.php">Ustal Spotkanie</a></li>
        </ul>

    </nav>
                <center>       <div id="pola" >

            <form action="obsluga_klienta.php" method="post" text-align: center>

  <div>
      <li>  Data spotkania:<br />
  
  <input name="data_spotkania" value="" /><br /> 

  Uwagi:<br />

  <input name="uwagi" value="" /><br />

  PESEL klienta:<br />

  <input name="pesel_klienta" value="" /><br />

  ID agenta:<br />

  <input name="id_agenta" value="" /><br />

  ID regionu:<br />

  <input name="id_regionu" value="" /><br /><br />
 
  <input type="submit" value="Dodaj" name="submit_uspot" />
  <input type="submit" value="Wróć" name="submit_kwroc" /><center/>

  </form> 
 </body>


</html>