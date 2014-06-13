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
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="shortcut icon" href="favicon.ico" />
    <style>
			#text-shadow-box {
			position: absolute;
			width: 100%;
			height: 100%;
			background: #666;
			overflow: hidden;
			cursor: none;
			border: 1px solid #333;
			-webkit-tap-highlight-color: rgba(0,0,0,0);
			-webkit-user-select: none;
		}

		#text-shadow-box div.wall {
			position: absolute;
			top: 175px;
			left: 0;
			width: 100%;
		}

		#tsb-text {
			margin: 0;
			color: #999;
			font-family: Helvetica, Arial, sans-serif;
			font-size: 200px;
			line-height: 0.5em;
			height: 1px;
			font-weight: bold;
			text-align: center;
		}

		div.wall div {
			position: absolute;
			background: #999;
			top: 42px;
			left: 0;
			height: 300px;
			width: 100%;
		}

		#tsb-spot {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
		/*	background: url(/revamp/public/images/spotlight.png) top center no-repeat; */
		}
			
    
    </style>
    <title>404 - Revamp</title>
</head>

<body style="margin: 0px;overflow: hidden;background-color:#000000;">
    <div class="background">
		<div class="contain">
			<div id="text-shadow-box">
					<div class="wall">
						<p id="tsb-text" style="text-shadow: black 0px -25px 15px;"><i class="pulse">404</i></p>
						
					</div>
				<div id="tsb-spot" style="background-position: -300px -250px;"></div>
			</div>
		</div>
    </div>
    
<script type="text/javascript" language="javascript" charset="utf-8">
var text;
var spot;

var w = window,
    d = document,
    e = d.documentElement,
    g = d.getElementsByTagName('body')[0],
    x = w.innerWidth || e.clientWidth || g.clientWidth,
    y = w.innerHeight|| e.clientHeight|| g.clientHeight;

///window.onload = init;
init();

function init() {
    text = document.getElementById('tsb-text');
    spot = document.getElementById('tsb-spot');
    
    document.getElementById('text-shadow-box').onmousemove = onMouseMove;
    document.getElementById('text-shadow-box').ontouchmove = function (e) {e.preventDefault(); e.stopPropagation(); onMouseMove({clientX: e.touches[0].clientX, clientY: e.touches[0].clientY});};
    
    onMouseMove({clientX: 300, clientY: 200});
}


function onMouseMove(e) {
    var xm = e.clientX - 600;
    var ym = e.clientY - 275;
    var d = Math.sqrt(xm*xm + ym*ym);
    text.style.textShadow = -xm + 'px ' + -ym + 'px ' + (d / 5 + 10) + 'px black';
    
    xm = e.clientX - 600;
    ym = e.clientY - 450;
    spot.style.backgroundPosition = xm + 'px ' + ym + 'px';
}
</script>
</body>
</html>
