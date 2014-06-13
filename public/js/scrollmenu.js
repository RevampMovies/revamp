$(function(){
	var menuStatus;
	
	$(".settings").click(function(){
		if(menuStatus != true){				
		$("#item-container").animate({
			marginLeft: "-165px",
		  }, 300, function(){menuStatus = true});
		$("#menu").animate({
			marginRight: "0px",
		  }, 300, function(){menuStatus = true});
		  return false;
		  } else {
			$("#item-container").animate({
			marginLeft: "0px",
		  }, 300, function(){menuStatus = false});
		  $("#menu").animate({
			marginRight: "-165px",
		  }, 300, function(){menuStatus = false});
			return false;
		  }
	});
	
		$("#item-container").click(function(){
			if($(".settings").hasClass('page'))
				$(".settings").trigger( "click" );
		});
	
/*
	$('#item-container').live("swipeleft", function(){
		if (menuStatus){	
		$("#item-container").animate({
			marginLeft: "0px",
		  }, 300, function(){menuStatus = false});
		  }
	});
	
	$('#item-container').live("swiperight", function(){
		if (!menuStatus){	
		$("#item-container").animate({
			marginLeft: "-165px",
		  }, 300, function(){menuStatus = true});
		  }
	});
	
	$("#menu li a").click(function(){
		var p = $(this).parent();
		if($(p).hasClass('active')){
			$("#menu li").removeClass('active');
		} else {
			$("#menu li").removeClass('active');
			$(p).addClass('active');
		}
	});
	*/
		
});
