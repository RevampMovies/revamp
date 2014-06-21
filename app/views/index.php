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
       Made in Italy :)
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
    <link href="css/item.css" rel="stylesheet" type="text/css">
    <link href="css/detailed-info.css" rel="stylesheet" type="text/css">
    <link href="css/frame.css" rel="stylesheet" type="text/css">
    <link href="css/header.css" rel="stylesheet" type="text/css">
    <link href="css/navsettings.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jbar.css">
	<link rel="stylesheet" href="css/loading.css">
    <link rel="shortcut icon" href="favicon.ico" />
    <title>Revamp</title>
</head>
    <script>/*
    var password;

    var pass1="lol";

    password=prompt('Please enter your password to view this page!','');

    if (password==pass1)
        alert('Password Correct! Click OK to enter!');
    else
       {
        window.location="http://www.revampmovies.org//home/revampmovies/app/views/errors/404.php";
        }*/
</script>

<body style="margin: 0px;height: 100%;">
    <div class="background" style="overflow-x: hidden;">
		
		<!-- header -->
        <div id="header">


            <div class="title">
                <img src="images/revamp.svg" heigth="20px" width="20px" style="vertical-align: middle"/>&nbsp;Revamp
            </div>

            <div class="movies">
                <a href="/" style="color: #c3c5c7;">Film</a>
                <div class="selected movies"></div>
            </div>


<!--
            <div class="tv-series">
                Cortometraggi
            </div> -->

            <div class="genre" data-filter="*" >
                Genere&nbsp;&nbsp;


                <a id="genre-chooser" href="javascript:;" style="color:#2d75df; ">Tutti</a>


            </div>

            <div class="genre-sort"></div>

		
            <div class="sort-by" data-sort-value="original-order">
                Ordina&nbsp;Per&nbsp;&nbsp;
                <a id="sort-text" href="javascript:;" style="color:#2d75df;">Popolarità</a>
            </div>

            <div class="genre-sort"></div>

            <div class="settings"></div>
            <div class="queue"></div>
            <div class="favorites"></div>
            
            <form class="SearchField" method="GET" action="search">
                <input name="title" type="search" placeholder="Cerca" required>
            </form>

        </div>
        
	    <!-- right mobile style menu -->
        <div id="menu">
			<?php if (!empty($username) && isset($username))
			{
	echo '	<h3>Impostazioni</h3>
				<ul> <!--  class="active" -->
					<li><a href="user/'.$username.'" class="contentLink"><i class="fa fa-user"></i> Profilo </a></li>
					<li><a href="user/'.$username.'#favourite-films"  class="contentLink"><i class="fa fa-film"></i> I miei film </a></li>
					<li><a href="#" class="contentLink"><i class="fa fa-key"></i> Modifica password </a></li>
					<li><a href="logout" class="contentLink"><i class="fa fa-sign-out"></i>'.ucfirst($username).' Logout </a></li>
				</ul>
				<div class="max-max" onclick="fullscreen();">
			</div>';		
			} else {
				 echo '<h3>Accedi</h3><br>
				<ul>
					<li>
					  <input type="text" id="username" name="username" class="inputlog" placeholder="Username" required>
					  <input type="password" id="password" name="password" class="inputlog" placeholder="Password" required>
					  <div class="login-btn">Login</div>
					  <div class="register-btn" onclick="showElm(\'overlay\'); showElm(\'registration\');">Registrati</div>
					</li>
				</ul>';
			} ?>
			</div>
        <div id="item-container">

            <div id="overlay" class="black-overlay"></div>
             <div id="registration">
        <div class="item-cover" style=
        "background: url(images/revamplogo.png) no-repeat, url(images/cinema_pellicola.png) no-repeat;background-position: bottom left, center;background-size: 120px 80px, 196px 292px;">
        </div>
                 

        <div class="close" onclick="hideElm('overlay'); hideElm('registration');"></div>

        <div class="item-title">
            Registrati ora
        </div>

        <div class="item-overview" id="regform">
			<i class="fa fa-user" style="float: left;margin-top: 8px;"></i>
            <input class="inputreg" id="reg_username" name="username"
            placeholder="Username" required="" style="width: 250px;" type=
            "text"><br>
            <br>
            <i class="fa fa-envelope" style="float: left;margin-top: 8px;margin-left: -3px;display: inline;"></i>
            <input class="inputreg" id="reg_email" name="email" placeholder=
            "Email" required="" style="width: 250px;" type="email"><br>
            <br>
            <i class="fa fa-key" style="float: left;margin-top: 8px;margin-left: -3px;"></i>
            <input class="inputreg" id="reg_password" name="password"
            placeholder="Password" required="" style="width: 250px;" type=
            "password"><br>
            <br>

            <div class="check-settings">
                <input id="check-settings" name="check" type="checkbox" value=
                "None"> <label for="check-settings">Ho letto, compreso ed
                accettato l'<a href="/privacy" target="_blank">Informativa
                sulla Privacy</a> e le <a href="/terms" target=
                "_blank">Condizioni Generali di Utilizzo del Servizio</a>, e
                presto il mio consenso ai sensi dell'art. 23 del D.lgs n.
                196/2003.</label>
            </div>
            

            <div class="register-btn" id="regbtn" style=
            "margin-top: -160px;margin-left: 237px;">
                Registrati
            </div>
            
        </div>
    </div>
            
            <div id="item-detail">

                <div class="item-cover" id="coverdetail">

                </div>
                <div class="close" onclick="hideElm('overlay');  hideElm('item-detail');"></div>

                <div class="item-title" id="titledetail"></div>
                <div class="item-year" id="yeardetail"></div>
                <div class="dot"></div>
                <div class="item-runtime" id="runtimedetail"></div>
                <div class="dot"></div>
            <!--
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star null"></div>
            -->

                <div class="item-overview" id="overviewdetail"></div>
                <div id="btn-watch">
                    <div class="watch-now"><a style="color:white;text-decoration:none" class="player" href="http://www.youtube.com/">Guarda Ora</a></div>
                </div>
            <!--
                <div class="q720">LQ</div>


                <div class="q1080">HQ</div>
                <div class="quality switch white">
                    <input type="radio" name="switch" id="switch-off" checked>
                    <input type="radio" name="switch" id="switch-on">

                    <span class="toggle"></span>
                </div>
            -->				
               

                <div class="flag first italian"></div>


            </div>
            
            
				<?php
				 if (empty($films))
				{
					echo '<div id="emptymessage">
								<h2><i class="fa fa-search"></i> Nessun risultato!</h2>
								<h4 style="text-align: center;color: #c3c5c7;">
									<i class="fa fa-arrow-left"></i> 
									<a href="javascript:window.history.back()" style="color: inherit;text-decoration: none;">Torna indietro</a>
								</h4>
						  </div>';
				} else {
					foreach ($films as $film)
					{
								echo '<div id="item" class="'.$film->IDCategoria.'" data-idfilm="'.$film->IDFilm.'">
										<div class="cover" style="background-image: url('.$film->poster.');">
											<div class="itemoverlay">
												<div class="addtofavorites"></div>
												<div class="viewmoreinfo"></div>
												<div class="addtoqueue"></div>
											</div>
										</div>
                                        
										<div class="title">
											'.$film->titolo.'
										</div>

										<div class="year">
											'.substr($film->anno, 0, 4).'
										</div>
									</div>
                                    ';

					}
				}
				?>
        </div>
        <div id="filler" style="width: 100%;height: 100%;margin: 0;padding: 0;position: absolute; top: 0; left: 0;background-color: #17181b;"></div>
             
        <!-- More -->

	<div class="load-more"  >
		<div class="logo load-icon">
            <button type="button" class="btn btn-primary btn-lg btn-block">MORE</button>

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

<?php 	if (!empty($films))
			{ echo "
<script>
	//Isotope grid
$('#item-container').isotope({
  itemSelector: '#item',
  layoutMode: 'fitRows',
  getSortData: {
      title: '.title',
      year: '.year' }
});
</script>";
} ?>
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
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/jquery.bar.js"></script>
<script>
	
//Fullscreen caller
	function fullscreen() {
		$(".settings").trigger( "click" );
		$(document).fullScreen(true);
	}
	
// Video player
      $(document).ready(function() {
        $('.player').magnificPopup({
          disableOn: 700,
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: false,
          fixedContentPos: false
        });
      });

//set up Genres
    var genres = ["Tutti","Comico","Drammatico","Storico","Non Definito","Commedia","Giallo","Avventura","Grottesco"];
    var i = 1;
          $('.genre,.genre-sort').click( function(e){
    		  $('#genre-chooser').animate({ opacity: 0.8 }, 180 ).text(genres[i]).animate({ opacity: 1 }, "fast" );
    			  $('.genre').attr('data-filter',(i==0) ? '*' : i);
    			  (i==8) ? i = 0 : i++;
    			  var filterValue = $('.genre').attr('data-filter');
    			  if (filterValue!='*')
    					filterValue = "."+filterValue;
    			  $('#item-container').isotope({ filter: filterValue });
    			  
    		  });

//Order By	 
    var sorts = ["Popolarità","Titolo","Anno"];
    var sortsval = ["original-order","title","year"];
    var j = 1;
    		  $('.sort-by').click( function() {
    			    $('#sort-text').animate({ opacity: 0.8 }, 180 ).text(sorts[j]).animate({ opacity: 1 }, "fast" );
    			    $('.sort-by').attr('data-sort-value',sortsval[j]);
    				(j==2) ? j = 0 : j++;
    			var sortValue = $(this).attr('data-sort-value');
    			$('#item-container').isotope({ sortBy: sortValue });
    		  });

//favorites  
    $('.favorites, .queue').click(function(){
		if ($('#menu li:first a').attr('href') == undefined)
			{
    	 $(".favorites").bar({
    								color			 : '#2d75df',
    								background_color : 'rgba(255,255,255, 0.8)',
    								position		 : 'bottom',
    								removebutton     : false,
    								message			 : "Non sei loggato!",
    								time			 : 3000
    						});
						
			} else window.location.replace('http://revampmovies.org/'+$('#menu li:first a').attr('href'));
		});
</script>

</html>
<!-- E' tutto. -->
