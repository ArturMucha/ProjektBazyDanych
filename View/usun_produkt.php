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
                   <li><a href="http://localhost/ProjektBazyDanych/View/dodaj_produkt.php">Dodaj Produkt</a></li>

                    <li><a href="http://localhost/ProjektBazyDanych/View/usun_produkt.php">Usuń Produkt</a></li>

                    <li><a href="http://localhost/ProjektBazyDanych/View/zmien.php">Zmień Specyfikację </a></li>
        </ul>

    </nav>
                <center>       <div id="pola" >
<form action="produkty.php" method="post">

  <div>
      
  Id uslugi do usuniecia:<br />
  
  <input name="id1_produktu" value="" /><br /><br />
      </li>
 
  <input type="submit" value="Usuń" name="submit_pusun" />
  <input type="submit" value="Wróć" name="submit_pwroc" />
 

  </div>

  </form>

 </body>


</html>