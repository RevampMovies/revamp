<!-- (c) 2014 Revamp.  
             _
             \`\
             |= |
            /-  ;.---.
      _ __.'     (____)
       `         (_____)
       _'  ._ .' (____)
        `        (___)
       --`'------'`          
       Made in Italy
-->
<!DOCTYPE html>

<html lang="en" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <!-- for Google -->
	<meta name="title" content="Revamp" />
	<meta name="description" content="Revamp is a web application for the streaming of indipendent and historic films." />
	<meta name="keywords" content="revamp,streaming,indie,historic,film,movie" />
	<meta name="author" content="Lorenzo Stella,Giulio Perin" />
	<meta name="copyright" content="2014" />
	<meta name="application-name" content="Revamp" />
	<!-- for Facebook -->          
	<meta property="og:title" content="Revamp" />
	<meta property="og:type" content="article" />
	<meta property="og:image" content=" http://www.revampmovies.org/images/share_logo.png" />
	<meta property="og:url" content=" http://www.revampmovies.org" />
	<meta property="og:description" content="Revamp is a web application for the streaming of indipendent and historic films." />
	<!-- for Twitter -->          
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="Revamp" />
	<meta name="twitter:description" content="Revamp is a web application for the streaming of indipendent and historic films." />
	<meta name="twitter:image" content="http://www.revampmovies.org/images/share_logo.png" />
	<meta name="twitter:creator" content="@lorenzostella"> 
    <link href="css/item.css" rel="stylesheet" type="text/css">
    <link href="css/detailed-info.css" rel="stylesheet" type="text/css">
    <link href="css/frame.css" rel="stylesheet" type="text/css">
    <link href="css/header.css" rel="stylesheet" type="text/css">
    <link href="css/navsettings.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="shortcut icon" href="favicon.ico" />
	<style>
		#tos {
			color: rgb(255, 255, 255);
			font-family: "Open Sans", sans-serif;
			font-size: 14px;
		}
		#print {
			color: #2d75df;
			text-decoration:none;
		}
	</style>
    <title>ToS - Revamp</title>
</head>

<body style="margin: 0px;height: 100%;">
    <div class="background">
		
		<!-- header -->
        <div id="header">


            <div class="title">
                <img src="images/revamp.svg" heigth="20px" width="20px" style="vertical-align: middle"/>&nbsp;Revamp
            </div>

            <div class="movies">
                 <a href="/" style="color: #c3c5c7;">Film</a>
                <div class="selected movies"></div>
            </div>


            <div class="genre" data-filter="*" >
                Genere&nbsp;&nbsp;


                <a id="genre-chooser" href="javascript:;" style="color:#2d75df; ">Tutti</a>


            </div>

            <div class="genre-sort"></div>

		
            <div class="sort-by">
                Ordina&nbsp;Per&nbsp;&nbsp;
                <a href="javascript:;" style="color:#2d75df;">Popolarità</a>
            </div>

            <div class="genre-sort"></div>

            <div class="settings"></div>
            <div class="queue"></div>
            <div class="favorites"></div>

            <form class="SearchField" method="GET" action="search">
                <input name="title" type="search" placeholder="Cerca">
            </form>

        </div>


        <div id="item-container">

				<center>

				<table border="0" cellpadding="0" cellspacing="0" width="700" id="tos">
				  <tbody><tr>
					<td>
					  <h5><b><font color="#FF4136"><i class="fa fa-exclamation-circle"></i>&nbsp;Termini del Servizio (ToS) </font></b></h5></td>
				  </tr>
				  <tr>
					<td>
							<b>Questo sito offre un semplice servizio di catalogazione.</b>
						    Ogni opera audio visiva elencata in questo sito, è inserita in altri siti e quindi non messa da noi. Ogni link ad opere dell’ingegno qui presente è reperibile tramite un qualsiasi motore di ricerca ed inoltre il materiale audio visivo per quanto ci concerne è autorizzato ad essere trasmesso dagli stessi siti che ne mettono a disposizione lo streaming e qualora così non fosse è responsabilità degli stessi siti di streaming cancellare il materiale protetto dalle loro vigenti norme sul diritto d’autore.
						    Il nostro, in conclusione, è un semplice servizio di catalogamento di link verso materiale audio-visivo che non viola in alcun modo le nostre leggi vigenti. Qualora siate convinti del contrario vi preghiamo di contattarci e di segnalare la legge e il/i contenuti\o secondo i quali il nostro non sarebbe un servizio regolare, a <a mailto="lorenzo.stl@gmail.com">lorenzo.stl@gmail.com</a>.
						    
				  </tr>
				  <tr>
					<td height="30">
					  <hr size="1" style="border: 1 dotted #000000">
					</td>
				  </tr>
				  <tr>
					<td align="center">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="center"><a id="print" href="JavaScript:parent.window.print();">Stampa la pagina</a></td>
				  </tr>
				  <tr>
					<td height="50">&nbsp;</td>
				  </tr>
				</tbody></table>

				  </center>
  <div id="filler" style="z-index:-1;width: 100%;height: 100%;margin: 0;padding: 0;position: absolute; top: 0; left: 0;background-color: #17181b;"></div>
	
  
   </div>
</body>

<script src="js/jquery-2.1.0.min.js"></script>
<script src="js/core.js"></script>
<script>
	//Smooth scroll
if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
window.onmousewheel = document.onmousewheel = wheel;

function wheel(event) {
    var delta = 0;
    if (event.wheelDelta) delta = event.wheelDelta / 120;
    else if (event.detail) delta = -event.detail / 3;

    handle(delta);
    if (event.preventDefault) event.preventDefault();
    event.returnValue = false;
}

function handle(delta) {
    var time = 450;
	var distance = 300;
    
    $('html, body').stop().animate({
        scrollTop: $(window).scrollTop() - (distance * delta)
    }, time );
}
</script>


</html>
<!-- E' tutto. -->
