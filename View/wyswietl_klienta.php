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


        .parent-menu {
            background-color: blue;
            min-width:200px;
            min-height: 550px;
            float:left;
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


            #menu ul li a:hover
            {
                background-color:#007ee9;
            }
            #menu ul li:hover > ul {

                left: 200px;

                -webkit-transition: left 200ms ease-in;

                -moz-transition: left 200ms ease-in;

                -ms-transition: left 200ms ease-in;

                transition: left 200ms ease-in;

            }


            #menu ul li > ul {

                position: absolute;

                background-color: #333;

                top: 0;

                left: -200px;

                min-width: 200px;

                z-index: -1;

                height: 100%;

                -webkit-transition: left 200ms ease-in;

                -moz-transition: left 200ms ease-in;

                -ms-transition: left 200ms ease-in;

                transition: left 200ms ease-in;

            }


            #menu ul li > ul li a:hover

            {

                background-color:#2e2e2e;

            }
	</style>
	


</head>


<body>
    
    	<div id="main" >
		<div id="logo"> <h2>System informatyczny dla firmy ubezpieczeniowej</h2></div>	
	<nav id="menu"><br />

  </div>

  </form>

 </body>


</html>
<?php

$username = "root";
$password = "root";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";
//select a database to work with
$selected = mysql_select_db("sys",$dbhandle)
  or die("Could not select examples");

            $result = mysql_query("SELECT * FROM klient");

            echo "<center><font size='4' color='white'><b>Wszyscy Klienci:</font>";
            echo "<br /><br />";
           // echo "<font color='white'><TR><TD>Pesel</TD><TD>Imię</TD><TD>Nazwisko</TD><TD>Adres</TD><TD>Miejscowość</TD><TD>Notatka</TD></TR></font>";
            while ($row = mysql_fetch_array($result)) {
    echo "<font width='50%'><table border='1' bgcolor='white'><TR><TD width='100'>" . $row["Pesel_Klienta"] ."</TD><TD width='100'> ".$row["Imie"]. "</TD><TD width='100'>" . $row["Nazwisko"]."</TD><TD width='100'>". $row["Adres"]."</TD><TD width='100'>". $row["Miejscowosc"]."</TD><TD width='100'>". $row["Notatka"] . "</TD></TR></font></table>";
    echo "<br />";

            }
            echo "</b></center>";
           echo '<center><form action="obsluga_klienta.php" method="post"><input type="submit" value="Wróć" name="submit_kwroc" /></form></center>';
                  mysql_close($dbhandle);
?>
