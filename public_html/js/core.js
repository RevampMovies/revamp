 /* -------- LOGIN -------------------- */
 /* attach a submit handler to the form */
  $(".login-btn").click(function(event) {

  /* stop form from submitting normally */
  event.preventDefault();

  /* Change the text of the button */
  $(this).text("Attendi...");
  
  /* get some values from elements on the page: */
  var val = $("#menu :input").serialize();

  /* Send the data using post and put the results in a div */
  $.ajax({
      url: "login",
      type: "post",
      data: val,
    //datatype: 'json',
      success: function(data){
			String.prototype.capitalize = function() { return this.charAt(0).toUpperCase() + this.slice(1); };
			$(".settings").trigger( "click" );
			setTimeout(function () {
				$("#menu").html('<h3>Impostazioni</h3><ul><li><a href="user/'+data.username+'" class="contentLink"><i class="fa fa-user"></i> Profilo </a></li>	<li><a href="user/'+data.username+'#favourite-films" class="contentLink"><i class="fa fa-film"></i> I miei film </a></li><li><a href="#" class="contentLink"><i class="fa fa-key"></i> Modifica password </a></li><li><a href="logout" class="contentLink"><i class="fa fa-sign-out"></i> '+data.username.capitalize()+' Logout </a></li></ul><div class="max-max" onclick="fullscreen();"></div>'); 
			}, 600);
      },
      error:function(){
          $("#username, #password").css('box-shadow', '1px 0px 4px 1px rgba(255, 65, 54, 0.85)');
          $(".login-btn").bar({
			color			 : '#2d75df',
			background_color : 'rgba(255,255,255, 0.8)',
			position		 : 'bottom',
			removebutton     : false,
			message			 : 'Nome utente o password errati!',
			time			 : 3000
		}); 
           var l = 20;  
		   for( var i = 0; i < 4; i++ )   
			 $( ".login-btn" ).animate( { 'margin-left': "+=" + ( l = -l ) + 'px' }, 100);
			 
		   /* Reset the text button */
		   $(".login-btn").text("Login");
		   
      }   
    }); 
});
/*-------REGISTRATION------*/
$("#regbtn").click(function(event) {
	
  /* stop form from submitting normally */
  event.preventDefault();
	
  if ($("#check-settings").is(':checked'))
  {
		  /* Change the text of the button */
		  $(this).text("Attendi...");
		  
		  /* get some values from elements on the page: */
		  var val = $("#regform :input").serialize();

		  /* Send the data using post and put the results in a div */
		  $.ajax({
			  url: "register",
			  type: "post",
			  data: val,
			//datatype: 'json',
			  success: function(data){
					hideElm('overlay');  hideElm('registration');
					String.prototype.capitalize = function() { return this.charAt(0).toUpperCase() + this.slice(1); };
					$(".settings").trigger( "click" );
					setTimeout(function () {
						$("#menu").html('<h3>Impostazioni</h3><ul><li><a href="user/'+data.username+'" class="contentLink">Profilo </a></li>	<li><a href="#" class="contentLink">I miei film </a></li><li><a href="#" class="contentLink">Modifica password </a></li><li><a href="logout" class="contentLink">'+data.username.capitalize()+' Logout </a></li></ul><div class="max-max" onclick="fullscreen();"></div>'); 
					}, 100);
			  },
			  error:function(){
				  $("#reg_username, #reg_email, #reg_password").css('box-shadow', '1px 0px 4px 1px rgba(255, 65, 54, 0.85)');
				   var l = 20;  
				   for( var i = 0; i < 4; i++ )   
					 $( "#regbtn" ).animate( { 'margin-left': "+=" + ( l = -l ) + 'px' }, 100);
					 
				   /* Reset the text button */
				   $("#regbtn").text("Login");
			  }   
			}); 
	} else {
		$(".register-btn").bar({
			color			 : '#2d75df',
			background_color : 'rgba(255,255,255, 0.8)',
			position		 : 'bottom',
			removebutton     : false,
			message			 : 'Devi accettare le condizioni proposte!',
			time			 : 3000
		}); 
		
	}
});


/*------ GET FILM DETAILS ------*/
$( document ).on( "click", ".itemoverlay", function (event) {
	showElm('overlay');
	var parentid = $(this).parent().parent().data('idfilm');
			  $.ajax({
			  url: "/film/"+parentid,
			  type: "get",
			  datatype: 'json',
			  success: function(data){
				  
				  $('#coverdetail').css('background-image', 'url(' + data.poster + ')');
				  $('#titledetail').text(data.titolo);
				  $('#yeardetail').text(data.anno);
				  $('#runtimedetail').text(data.durata+" min");
				  $('#overviewdetail').text(data.descrizione);
				  $('.player').attr('href',data.link);
				  showElm('item-detail');
				},
			  error:function(){
				       $(".item-overlay").bar({
							color			 : '#2d75df',
							background_color : 'rgba(255,255,255, 0.8)',
							position		 : 'bottom',
							removebutton     : false,
							message			 : 'Qualcosa è andato storto!',
							time			 : 3000
						});
			  }   
			}); 
});


/*------ ADD TO FAV ------*/
$( document ).on( "click", ".addtofavorites", function (e) {
		  e.stopPropagation();
		  	var parentid = $(this).parent().parent().parent().data('idfilm');
			  $.ajax({
			  url: "addfav/"+parentid,
			  type: "post",
			  datatype: 'json',
			  success: function(data){
				   $('.addtofavorites').animate({ paddingBottom: 10, opacity: 0.5 }, {duration: 250, easing: 'easeOutBounce'}).animate({ paddingBottom: 0, opacity: 1 }, {duration: 250, easing: 'easeOutBounce'});
				},
			  error:function(request, status, error){
				          $(".addtofavorites").bar({
								color			 : '#2d75df',
								background_color : 'rgba(255,255,255, 0.8)',
								position		 : 'bottom',
								removebutton     : false,
								message			 : jQuery.parseJSON(request.responseText).error,
								time			 : 3000
						});
			  }   
			}); 
		  });
		  
/*------ STREAM FEED LOADER ------*/
$(window).scroll(function() {
   if($(window).scrollTop() + $(window).height() == $(document).height()) {
       $('.load-more').addClass('on');
       var last = $('#item:last-child').attr('data-idfilm');
       
			  $.ajax({
			  url: "stream/"+last,
			  type: "get",
			  datatype: 'json',
			  success: function(data){
				  var items = "";
				  for (var i = 0; i < data.length; i++)
				   items += '<div id="item" class="'+data[i].IDCategoria+'" data-idfilm="'+data[i].IDFilm+'"><div class="cover" style="background-image: url('+data[i].poster+
				   ');"><div class="itemoverlay"><div class="addtofavorites"></div><div class="viewmoreinfo"></div><div class="addtoqueue"></div></div></div><div class="title">'+data[i].titolo+
				   '</div><div class="year">'+data[i].anno.substring(0, 4)+'</div></div>';
				   var $newItems = $(items);
				   $('#item-container').isotope( 'insert', $newItems );
				   $('.load-more').removeClass('on');
				},
			  error:function(request, status, error){
				  $('.load-more').removeClass('on');
				          $(".addtofavorites").bar({
								color			 : '#2d75df',
								background_color : 'rgba(255,255,255, 0.8)',
								position		 : 'bottom',
								removebutton     : false,
								message			 : jQuery.parseJSON(request.responseText).error,
								time			 : 3000
						});
						
			  }    
			}); 
   }
});


