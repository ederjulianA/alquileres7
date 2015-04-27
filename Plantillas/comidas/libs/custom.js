$(document).ready(function () {



    $('.book-table select').selectpicker();

    $(".btn-book-table").click(function () {
        $(".intro > .book-table").slideToggle(function () {
            $(".btn-book-table").html($(this).is(":visible") ? "X<br>close" : "Book a<br>table");
        });
        return false;
    });

    // nice hover for prefooter's latest pictures component
    $(".latest-pictures li a").hover(function () {
        $(this).find("span").stop().fadeIn("fast");
    }, function () {
        $(this).find("span").stop().fadeOut("fast");
    });

    $(".nice-hover").mouseenter(function () {
        $(this).closest("div").find(".nice-hover-content").stop().fadeIn("fast");
    });

    $(".nice-hover-content").mouseleave(function () {
        $(this).fadeOut("fast");
    });


    // turn on mainslider auto slideshow
    /*
     $('#main-carousel.carousel').carousel({
     interval: 2000
     })
     */

    // disable auto slideshow

    $('.carousel').carousel({
        interval: false
    })


    //dynamicly set position for carousel controls when data-position applied
    $(".carousel-nav").each(function () {
        var position = $(this).find("a").data("position");
        var newpos = position + "%";
        $(this).find("a").css("top", newpos);
    });

    $(".item-featured").hover(function () {
        $(this).find(".onhover").stop().fadeIn("normal");
    }, function () {
        $(this).find(".onhover").stop().fadeOut("normal");
    });

    //custom scroll to anchor function
    $(".gotop").click(function () {
        $.scrollTo($($(this).attr("href")), {
            duration: 750,
            easing: "easeInOutExpo"
        });
        return false;
    });

	/* accordion class active */


    jQuery(".accordion").on("show",function (e) {
        jQuery(e.target).prev(".accordion-heading").find(".accordion-toggle").addClass("active");
    }).on("hide",function (e) {
                jQuery(this).find(".accordion-toggle").not(jQuery(e.target)).removeClass("active");
            }).each(function () {
                var $a = jQuery(this);
                $a.find("a.accordion-toggle").attr("data-parent", "#" + $a.attr("id"));
            });


    /* scrool spy faq with smooth scroll */

    jQuery('.faqMenu a').bind('click', function(e) {
       e.preventDefault();
       jQuery('html, body').animate({
           scrollTop: jQuery(this.hash).offset().top }, 300);
    });


      /* twitter */

	 if(jQuery().tweet) {
	    //run plugin dependent code

		 jQuery('.tweets').tweet({
	       template: "{text} {time}",
	       //li_class: " ",
	       twitter_api_url: 'twitter/proxy/twitter_proxy.php'
		 });
     }

});



function initBars() {

	/* in-viewport plugin */
	(function($){$.belowthefold=function(element,settings){var fold=$(window).height()+$(window).scrollTop();return fold<=$(element).offset().top-settings.threshold;};$.abovethetop=function(element,settings){var top=$(window).scrollTop();return top>=$(element).offset().top+$(element).height()-settings.threshold;};$.rightofscreen=function(element,settings){var fold=$(window).width()+$(window).scrollLeft();return fold<=$(element).offset().left-settings.threshold;};$.leftofscreen=function(element,settings){var left=$(window).scrollLeft();return left>=$(element).offset().left+$(element).width()-settings.threshold;};$.inviewport=function(element,settings){return!$.rightofscreen(element,settings)&&!$.leftofscreen(element,settings)&&!$.belowthefold(element,settings)&&!$.abovethetop(element,settings);};$.extend($.expr[':'],{"below-the-fold":function(a,i,m){return $.belowthefold(a,{threshold:0});},"above-the-top":function(a,i,m){return $.abovethetop(a,{threshold:0});},"left-of-screen":function(a,i,m){return $.leftofscreen(a,{threshold:0});},"right-of-screen":function(a,i,m){return $.rightofscreen(a,{threshold:0});},"in-viewport":function(a,i,m){return $.inviewport(a,{threshold:0});}});})(jQuery);


	jQuery('.progress:in-viewport').each(function() {
		var $barEl = jQuery(this).find('.bar');

		if($barEl.width()==0) {
			$barEl.delay(700).stop().animate({'width':jQuery(this).attr('data-percentage')+'%'}, 1000);
		}
  });
}

jQuery(window).scroll(function () {
	initBars();
});

