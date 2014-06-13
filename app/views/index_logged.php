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

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/item.css" rel="stylesheet" type="text/css">
    <link href="css/detailed-info.css" rel="stylesheet" type="text/css">
    <link href="css/frame.css" rel="stylesheet" type="text/css">
    <link href="css/header.css" rel="stylesheet" type="text/css">
    <link href="css/navsettings.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="shortcut icon" href="favicon.ico" />
    <title>Revamp</title>
</head>

<body style="margin: 0px;">
    <div class="background">
		
		<!-- header -->
        <div id="header">


            <div class="title">
                <img src="images/revamp.svg" heigth="20px" width="20px" style="vertical-align: middle"/>&nbsp;Revamp
            </div>

            <div class="movies">
                Film
                <div class="selected movies"></div>
            </div>



            <div class="tv-series">
                Cortometraggi
            </div>

            <div class="genre">
                Genere&nbsp;&nbsp;


                <a href="javascript:;" style="color:#2d75df; ">Tutti</a>


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

            <form class="SearchField">
                <input type="search" placeholder="Cerca">
            </form>

        </div>

	<!-- right mobile style menu -->
		<div id="menu">
			<h3>Impostazioni</h3>
				<ul> <!--  class="active" -->
					<li><a href="user/<?php echo $username; ?>" class="contentLink"><i class="fa fa-user"></i> Profilo </a></li>
					<li><a href="#" class="contentLink"><i class="fa fa-film"></i> I miei film </a></li>
					<li><a href="#" class="contentLink"><i class="fa fa-key"></i> Modifica password </a></li>
					<li><a href="logout" class="contentLink"><i class="fa fa-sign-out"></i><?php echo ucfirst($username); ?> Logout </a></li>
				</ul>
				<div class="max-max" onclick="fullscreen();"></div>
			</div>
        <div id="item-container">

            <div id="overlay" class="black-overlay"></div>
        
            
            <div id="item-detail">

                <div class="item-cover" style="background-image: url(http://pad.mymovies.it/filmclub/2002/08/124/locandina.jpg);">

                </div>
                <div class="close" onclick="hideElm('overlay');  hideElm('item-detail');"></div>

                <div class="item-title">Roma città aperta</div>
                <div class="item-year">1945</div>
                <div class="dot"></div>
                <div class="item-runtime">99 min</div>
                <div class="dot"></div>

                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star null"></div>
                <div class="health-icon Excellent"></div>

                <div class="item-overview">Roma, inverno 1944. L'ingegner Manfredi, comunista e impegnato nel Comitato di Liberazione Nazionale, chiede aiuto a Pina, una popolana vedova con un figlio e in procinto di risposarsi, per portare a termine un'azione. La donna lo mette in contatto con don Pietro, un sacerdote disposto ad aiutare i partigiani. Manfredi è però comunque in pericolo perché la sua amante, Marina, dipende da una collaboratrice della Gestapo che le fornisce la droga.</div>
                <div id="btn-watch">
                    <div class="watch-now">Guarda Ora</div>
                </div>

                <div class="q720">LQ</div>


                <div class="q1080">HQ</div>
                <div class="quality switch white">
                    <input type="radio" name="switch" id="switch-off" checked>
                    <input type="radio" name="switch" id="switch-on">

                    <span class="toggle"></span>
                </div>
				
               

                <div class="flag first italian"></div>


            </div>






            <div id="item">
                <div onclick="showElm('overlay'); showElm('item-detail');" class="cover" style="background-image: url(http://pad.mymovies.it/filmclub/2002/08/124/locandina.jpg);">
                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>
                </div>

                <div class="title">
                    Roma città aperta
                </div>

                <div class="year">
                    1945
                </div>
            </div>

            <div id="item">
                <div class="cover" style="background-image: url(http://travelling.travelsearch.it/wp-content/uploads/2011/12/Ladri-di-biciclette.jpg);">
                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>
                </div>

                <div class="title">
                    Ladri di biciclette
                </div>

                <div class="year">
                    1948
                </div>
            </div>

            <div id="item">
                <div class="cover" style="background-image: url(http://www.forumlibri.com/locandine/2065-riso-amaro.jpg);">
                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>
                </div>

                <div class="title">
                    Riso amaro
                </div>

                <div class="year">
                    1949
                </div>
            </div>

            <div id="item">
                <div class="cover" style="background-image: url(http://images.movieplayer.it/images/2011/12/27/guardie-e-ladri-locandina-del-film-227393.jpg);">
                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>
                </div>

                <div class="title">
                    Guardie e ladri
                </div>

                <div class="year">
                    1951
                </div>
            </div>

            <div id="item">
                <div class="cover" style="background-image: url(http://pad.mymovies.it/filmclub/2002/08/107/locandina.jpg);">
                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>
                </div>

                <div class="title">
                    Ninotchka
                </div>

                <div class="year">
                    1939
                </div>
            </div>

            <div id="item">
                <div class="cover" style="background-image: url(http://pad.mymovies.it/filmclub/2006/07/060/locandina.jpg);">
                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>
                </div>

                <div class="title">
                    Risate di gioia
                </div>

                <div class="year">
                    1960
                </div>
            </div>

            <div id="item">
                <div class="cover" style="background-image: url(http://www.wikimafia.it/wiki/images/e/e7/Locandina-il-gattopardo.jpg);">
                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>
                </div>

                <div class="title">
                    Il Gattopardo
                </div>

                <div class="year">
                    1963
                </div>
            </div>

            <div id="item">
                <div class="cover" style="background-image: url(http://pad.mymovies.it/filmclub/2002/08/113/locandina.jpg);">
                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>
                </div>

                <div class="title">
                    Paisà
                </div>

                <div class="year">
                    1946
                </div>
            </div>

            <div id="item">
                <div class="cover" style="background-image: url(http://www.ivid.it/fotogallery/imagesearch/images/germania_anno_zero_edmund_meschke_roberto_rossellini_003_jpg_cymr.jpg);">
                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>
                </div>

                <div class="title">
                    Germania anno zero
                </div>

                <div class="year">
                    1947
                </div>
            </div>

            <div id="item">
                <div class="cover" style="background-image: url(http://www.ivid.it/fotogallery/imagesearch/images/sciusci_franco_interlenghi_vittorio_de_sica_003_jpg_xcxu.jpg);">

                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>

                </div>

                <div class="title">
                    Sciuscià
                </div>

                <div class="year">
                    1946
                </div>
            </div>





            <div id="item">
                <div class="cover" style="background-image: url(http://pad.mymovies.it/filmclub/2005/09/093/locandina.jpg);">
                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>
                </div>

                <div class="title">
                    Stazione Termini
                </div>

                <div class="year">
                    1953
                </div>
            </div>

            <div id="item">
                <div class="cover" style="background-image: url(http://www.ivid.it/fotogallery/imagesearch/images/giovent_perduta_massimo_girotti_pietro_germi_008_jpg_qkuv.jpg);">
                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>
                </div>

                <div class="title">
                    Gioventù perduta
                </div>

                <div class="year">
                    1947
                </div>
            </div>

            <div id="item">
                <div class="cover" style="background-image: url(http://www.ivid.it/fotogallery/imagesearch/images/roma_ore_11_carla_del_poggio_giuseppe_de_santis_007_jpg_xbhn.jpg);">
                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>
                </div>

                <div class="title">
                    Roma ore 11 
                </div>

                <div class="year">
                    1952
                </div>
            </div>

            <div id="item">
                <div class="cover" style="background-image: url(http://images.movieplayer.it/images/2011/03/28/la-locandina-di-il-bandito-197904.jpg);">
                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>
                </div>

                <div class="title">
                    Il bandito
                </div>

                <div class="year">
                    1946
                </div>
            </div>

 <div id="item">
                <div class="cover" style="background-image: url(http://images.movieplayer.it/images/2013/01/29/la-strada-locandina-originale-264225.jpg);">
                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>
                </div>

                <div class="title">
                    La strada 
                </div>

                <div class="year">
                    1954
                </div>
            </div>

            <div id="item">
                <div class="cover" style="background-image: url(http://www.watchfilm.in/uploads/posters/small/mamma_roma_1962.jpg);">
                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>
                </div>

                <div class="title">
                    Mamma Roma
                </div>

                <div class="year">
                    1962
                </div>
            </div>

            <div id="item">
                <div class="cover" style="background-image: url(http://www.cghv.it/ImagesCghv/LOC_1/7775_LOC.jpg);">
                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>
                </div>

                <div class="title">
                    Viaggio in Italia
                </div>

                <div class="year">
                    1954
                </div>
            </div>

            <div id="item">
                <div class="cover" style="background-image: url(http://www.ondacinema.it/images/locandine/umberto_d_locandina.jpg);">
                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>
                </div>

                <div class="title">
                    Umberto D.
                </div>

                <div class="year">
                    1952
                </div>
            </div>

            <div id="item">
                <div class="cover" style="background-image: url(http://content8.flixster.com/movie/10/22/15/10221518_800.jpg);">
                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>
                </div>

                <div class="title">
                    Luci del varietà
                </div>

                <div class="year">
                    1951
                </div>
            </div>

            <div id="item">
                <div class="cover" style="background-image: url(http://1.bp.blogspot.com/-chCCBTzLTgk/T_C5nY1mvSI/AAAAAAAAAAA/cvteY3-4gog/s640/ivitelloniposter01.jpg);">
                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>
                </div>

                <div class="title">
                    I vitelloni
                </div>

                <div class="year">
                    1953
                </div>
            </div>

            <div id="item">
                <div class="cover" style="background-image: url(http://www.mediaset.it/bin/14.$plit/C_32_articolo_842_paragrafi_paragrafo_0_immagine.jpg);">
                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>
                </div>

                <div class="title">
                    Lo sceicco bianco
                </div>

                <div class="year">
                    1952
                </div>
            </div>

            <div id="item">
                <div class="cover" style="background-image: url(http://www.ivid.it/fotogallery/imagesearch/images/ferroviere_pietro_germi_pietro_germi_004_jpg_gtbe.jpg);">
                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>
                </div>

                <div class="title">
                    Il ferroviere
                </div>

                <div class="year">
                    1956
                </div>
            </div>

            <div id="item">
                <div class="cover" style="background-image: url(http://siciliafilm.files.wordpress.com/2011/04/locandina-innomedellalegge.jpg);">
                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>
                </div>

                <div class="title">
                    In nome della legge
                </div>

                <div class="year">
                    1948
                </div>
            </div>

            <div id="item">
                <div onclick="showElm('overlay'); showElm('item-detail');" class="cover" style="background-image: url(http://www.ivid.it/fotogallery/imagesearch/images/non_c_pace_tra_gli_ulivi_folco_lulli_giuseppe_de_santis_012_jpg_ksfd.jpg);">

                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>

                </div>

                <div class="title">
                    Non c'è pace tra gli ulivi
                </div>

                <div class="year">
                    1950
                </div>
            </div>





            <div id="item">
                <div class="cover" style="background-image: url(http://37.media.tumblr.com/ced252c07396d9ef734c2c7b82565d38/tumblr_n58i891a4p1qh35m6o1_500.jpg);">
                    <div class="itemoverlay">
                        <div class="addtofavorites"></div>
                        <div class="viewmoreinfo"></div>
                        <div class="addtoqueue"></div>
                    </div>
                </div>

                <div class="title">
                    Ossessione
                </div>

                <div class="year">
                    1943
                </div>
            </div>

        </div>




        </div>

    </div>
</body>

<script src="js/jquery-2.1.0.min.js"></script>
<script src="js/isotope.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>

<script>
    function hideElm(name) {
        $('#' + name).fadeOut('slow');
    }
    function showElm(name) {
        $('#' + name).fadeIn('slow');
    }
</script>

<script>
	//Isotope grid
$('#item-container').isotope({
  itemSelector: '#item',
  layoutMode: 'fitRows',
});
</script>

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

<script>
	//active state for lateral settings
$('.settings').click(function(e){
    $(this).toggleClass('page');
    e.preventDefault();
});
</script>

<script type="text/javascript" src="js/scrollmenu.js"></script>
<script type="text/javascript" src="js/jquery.fullscreen-min.js"></script>
<script type="text/javascript" src="js/core.js"></script>
<script>
	//Fullscreen caller
	function fullscreen() {
		$(".settings").trigger( "click" );
		$(document).fullScreen(true);
	}
</script>

</html>
<!-- E' tutto. -->
