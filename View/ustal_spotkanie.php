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
            
            #popo{
               padding-left: 1000px;
            }

	</style>
	


</head>


<body>

                <form action="obsluga_klienta.php" method="post">

  Data spotkania:<br />
  
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
  <input type="submit" value="Wróć" name="submit_kwroc" />

  </form> 
 </body>


</html>