var fifiElements;
var offsetForFifi = 200;
var delayBetweenFified = 50;

function fifi(elementToFifi, elementToExclude) {
    if (!fifiSupported())
        return;

	//hide the elements
    fifiElements = $(elementToFifi);
    if (elementToExclude)
        fifiElements = fifiElements.not(elementToExclude);

	fifiElements.css('opacity', 0);

	//attach the scroll event handler
	jQuery(window).scroll(fifiUpdate);
	jQuery(window).resize(fifiUpdate);
	jQuery(document).bind('resize', fifiUpdate);
	
	//init
	fifiUpdate();
}

function fifiSupported() {
    if (
        navigator.userAgent.toLowerCase().indexOf("android") > -1 ||
        navigator.platform.indexOf("iPhone") > -1 ||
        navigator.platform.indexOf("iPad") > -1 ||
        navigator.platform.indexOf("iPod") > -1) {
        return false;
    }
    return true;
};

//chiamare questa funzione nel caso in cui si voglia forzare un aggiornamento di fifi,
//ad esempio a seguito di un fadeIn() su un elemento della pagina o su un effetto di accordion.
function fifiUpdate() {
	//Nota. In jquery:
	// $(window).height();   // returns height of browser viewport
	// $(document).height(); // returns height of HTML document

	//calculate sensitive area
    var b = $(window).scrollTop() + $(window).height() - offsetForFifi;
	
	//if there is no elements stop monitoring scroll event
    if (fifiElements.size() == 0) {
        jQuery(window).unbind('scroll', fifiUpdate);
        jQuery(window).unbind('resize', fifiUpdate);
        jQuery(document).unbind('resize', fifiUpdate);
    }
	
	//animation logic
    var a = [];	
	var momFifiElements = fifiElements;
    momFifiElements.each(function(){
		d = $(this);
		
		//is this element inside the viewport?
        if (b >= d.offset().top || (jQuery(document).height() - b) == offsetForFifi) {
		
			//this is an element to fadein
            a.push(d[0]);
			
			//and remove this element from the array (of the element to still process)
			fifiElements = jQuery.grep(fifiElements, function(value) { 				
				return !($(value).get(0) === d.get(0));
			});						
			fifiElements = $(fifiElements);			
        }
    });
	
	//fadein elements inside the sensible area
    jQuery.each(a, function(c){
		$(this).delay(c * delayBetweenFified).animate({opacity: 1});
    });
}	
