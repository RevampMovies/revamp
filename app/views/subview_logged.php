	echo '	<h3>Impostazioni</h3>
				<ul> <!--  class="active" -->
					<li><a href="user/'.$username.'" class="contentLink"><i class="fa fa-user"></i> Profilo </a></li>
					<li><a href="#" class="contentLink"><i class="fa fa-film"></i> I miei film </a></li>
					<li><a href="#" class="contentLink"><i class="fa fa-key"></i> Modifica password </a></li>
					<li><a href="logout" class="contentLink"><i class="fa fa-sign-out"></i><?php echo ucfirst($username); ?> Logout </a></li>
				</ul>
				<div class="max-max" onclick="fullscreen();"></div>
			</div>
';
