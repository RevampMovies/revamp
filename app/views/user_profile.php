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
    <link href="../css/item.css" rel="stylesheet" type="text/css">
    <link href="../css/detailed-info.css" rel="stylesheet" type="text/css">
    <link href="../css/frame.css" rel="stylesheet" type="text/css">
    <link href="../css/header.css" rel="stylesheet" type="text/css">
    <link href="../css/navsettings.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="shortcut icon" href="../favicon.ico" />
    <title>Revamp</title>
</head>

<body style="margin: 0px;">
    <div class="background">
		
		<!-- header -->
        <div id="header">


            <div class="title">
                <img src="../images/revamp.svg" heigth="20px" width="20px" style="vertical-align: middle"/>&nbsp;Revamp
            </div>

            <div class="movies">
                <a href="/" style="color: #c3c5c7;">Film</a>
                <div class="selected movies"></div>
            </div>


<!--
            <div class="tv-series">
                Cortometraggi
            </div> -->



            <div class="settings"></div>
            <div class="queue"></div>
            <div class="favorites"></div>

            <form class="SearchField">
                <input type="search" placeholder="Cerca">
            </form>

        </div>
        
        	<!-- right mobile style menu -->
		
			<div id="menu">
			<?php if (!empty($username) && isset($username))
			{
	echo '	<h3>Impostazioni</h3>
				<ul> <!--  class="active" -->
					<li><a href="../user/'.$username.'" class="contentLink"><i class="fa fa-user"></i> Profilo </a></li>
					<li><a href="#" class="contentLink"><i class="fa fa-film"></i> I miei film </a></li>
					<li><a href="#" class="contentLink"><i class="fa fa-key"></i> Modifica password </a></li>
					<li><a href="../logout" class="contentLink"><i class="fa fa-sign-out"></i>'.ucfirst($username).' Logout </a></li>
				</ul>
				<div class="max-max" onclick="fullscreen();">
			</div>';		
			} else {
				 echo '<h3>Accedi</h3><br>
				<ul>
					<li>
					  <input type="text" id="username" name="username" class="inputlog" placeholder="Username">
					  <input type="password" id="password" name="password" class="inputlog" placeholder="Password">
					  <div class="login-btn">Login</div>
					  <div class="register-btn" onclick="showElm(\'overlay\'); showElm(\'registration\');">Registrati</div>
					</li>
				</ul>';
			} ?>
			
			</div>
 <div id="item-container" style="font-family: 'Open Sans', sans-serif;height:100%">
	 
	      <div id="overlay" class="black-overlay"></div>
             <div id="registration">
        <div class="item-cover" style=
        "background: url(../images/revamplogo.png) no-repeat, url(../images/cinema_pellicola.png) no-repeat;background-position: bottom left, center;background-size: 120px 80px, 196px 292px;">
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

                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star null"></div>
                <div class="health-icon Excellent"></div>

                <div class="item-overview" id="overviewdetail"></div>
                <div id="btn-watch">
                    <div class="watch-now"><a style="color:white;text-decoration:none" class="player" href="http://www.youtube.com/">Guarda Ora</a></div>
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
	 
	 
	 <section id="user-info" style="display: block;color: #fff;font-weight: normal;-webkit-font-smoothing: antialiased;">
            <div class="spotlight" style="text-align: center;padding: 55px 0px;">
                <figure style="margin: auto;display: block;position: relative;width: 117px;">
                <img class="pulse" style="box-shadow: grey 0px 0px 20px 1px;border-radius: 50%;background: #1f1f1f;outline: #1f1f1f;text-align: center;margin-bottom: 0;" src="<?php echo $userimg; ?>" alt="lorenzo.stl" width="120" height="120">
                
                </figure>
                <h2 style="font-size: 3.429em;font-weight: normal;max-width: 60%;margin: 1em auto 0px;">
                    <?php echo $usernick; ?>
                </h2>
                <p style="line-height: 1.3;font-size: 1.2857em;max-width: 600px;margin: 24px auto;font-weight: normal;-webkit-font-smoothing: antialiased;" class="description"><?php echo $profiledump['name']['formatted']; ?></p>


            </div>
            <ul id="personal-info" class="container row" style="max-width: 940px;padding: 0 1.06383%;margin: 0 auto;zoom: 1;font-size: 0.95em;">
                <li class="ui_pin" style="display: inline-block;float: left;">
                    
                        <i class="fa fa-map-marker"></i>&nbsp;<?php echo $profiledump['currentLocation']; ?>
                    
                </li>

                <li class="right" style="display: inline-block;float: right;">
                    
                            <?php if (isset($profiledump['accounts'][0]['url']))
								echo '<i class="fa fa-external-link"></i>&nbsp;<a style="text-decoration: none;color: #2d75df;" target="_blank" href="'.$profiledump['accounts'][0]['url'].'">'.ucfirst($profiledump['accounts'][0]['shortname']).'</a>';
                             else
								echo '<i class="fa fa-external-link"></i>&nbsp;Ancora nessuno!';
								?>
                </li>
            </ul>
    </section>
	
	<hr style="border: 0;height: 1px;background-image: -webkit-linear-gradient(left, rgba(255,255,255,0), rgba(255,255,255,0.75), rgba(0,0,0,0));background-image:-moz-linear-gradient(left, rgba(255,255,255,0), rgba(255,255,255,0.75), rgba(0,0,0,0));background-image:-ms-linear-gradient(left, rgba(255,255,255,0), rgba(255,255,255,0.75), rgba(0,0,0,0));background-image: -o-linear-gradient(left, rgba(255,255,255,0), rgba(255,255,255,0.75), rgba(0,0,0,0)); "/> 

<br/>

<h2 id="favourite-films" style="color: #c3c5c7;margin-left: 5%;"><i class="fa fa-video-camera"></i>&nbsp;I film di <?php echo $usernick; ?></h2>

 <?php if (empty($films))
				{
					echo '<h4 style="color: #c3c5c7;text-align: center;">Nessun film aggiunto!</h4>';
				}
				?>
				<br/>
<div id="favfilms-container">
	           
<?php
				 if (!empty($films))
				{
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
									</div>';
					}
				}
				?>

</div>
<br/>
<h2 id="watchlater-films" style="color: #c3c5c7;margin-left: 5%;"><i class="fa fa-clock-o"></i>&nbsp;I film da vedere </h2>

 <?php if (empty($watchlater))
				{
					echo '<h4 style="color: #c3c5c7;text-align: center;">Nessun film ancora aggiunto!</h4>';
				}
				?>
				<br/>
<div id="favfilms-container">
	           
<?php
				 if (!empty($watchlater))
				{
					foreach ($watchlater as $film)
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
									</div>';
					}
				}
				?>

</div>



</div>
  
 <div id="filler" style="z-index: -1;width: 100%;height: 100%;margin: 0;padding: 0;position: absolute; top: 0; left: 0;background-color: #17181b;"></div>
	
</div>


<script src="../js/jquery-2.1.0.min.js"></script>
<script src="../js/isotope.min.js"></script>
<script type="text/javascript" src="../js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="../js/jquery.easing.min.js"></script>

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
$('#favfilms-container').isotope({
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

<script type="text/javascript" src="../js/scrollmenu.js"></script>
<script type="text/javascript" src="../js/jquery.fullscreen-min.js"></script>
<script type="text/javascript" src="../js/core.js"></script>
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
   
</script>
</body>
</html>
<!-- E' tutto. -->
