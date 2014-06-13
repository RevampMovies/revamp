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
      url: "/revamp/public/login",
      type: "post",
      data: val,
    //datatype: 'json',
      success: function(data){
			String.prototype.capitalize = function() { return this.charAt(0).toUpperCase() + this.slice(1); };
			$(".settings").trigger( "click" );
			setTimeout(function () {
				$("#menu").html('<h3>Impostazioni</h3><ul><li><a href="user/'+data.username+'" class="contentLink"><i class="fa fa-user"></i> Profilo </a></li>	<li><a href="#" class="contentLink"><i class="fa fa-film"></i> I miei film </a></li><li><a href="#" class="contentLink"><i class="fa fa-key"></i> Modifica password </a></li><li><a href="logout" class="contentLink"><i class="fa fa-sign-out"></i> '+data.username.capitalize()+' Logout </a></li></ul><div class="max-max" onclick="fullscreen();"></div>'); 
			}, 600);
      },
      error:function(){
          $("#username, #password").css('box-shadow', '1px 0px 4px 1px rgba(255, 65, 54, 0.85)');
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
			  url: "/revamp/public/register",
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
		alert("Devi accettare le condizioni proposte!");
	}
});


/*------ GET FILM DETAILS ------*/
$(".itemoverlay").click(function(event) {
	showElm('overlay');
	var parentid = $(this).parent().parent().data('idfilm');
			  $.ajax({
			  url: "/revamp/public/film/"+parentid,
			  type: "get",
			  datatype: 'json',
			  success: function(data){
				  
				  $('#coverdetail').css('background-image', 'url(' + data.poster + ')');
				  $('#titledetail').text(data.titolo);
				  $('#yeardetail').text(data.anno);
				  $('#runtimedetail').text(data.durata);
				  $('#overviewdetail').text(data.descrizione);
				  $('.player').attr('href',data.link);
				  showElm('item-detail');
				},
			  error:function(){
				  alert("Qualcosa è andato storto.");
			  }   
			}); 
	
	
	
});






