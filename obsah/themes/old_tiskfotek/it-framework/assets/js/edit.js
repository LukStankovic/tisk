(function($) { 
	
	"use strict";

	$(".anim-deldu").hide();
	show_hide_anim();
	$(".anim-class select").change(function(){
	    show_hide_anim();
	});
	function show_hide_anim(){
	    if($(".anim-class select").val() == ""){
	           $(".anim-deldu").hide();
	    }else{
	        $(".anim-deldu").show();
	    }
	}
	$(".them-color").hide();
	show_hide_col();
	
	$(".col-class select").change(function(){
	    show_hide_col();
	});
	
	function show_hide_col(){
	    if($(".col-class select").val() != "custom"){
	           $(".them-color").hide();
	    }else{
	        $(".them-color").show();
	    }
	}
	
	/* ================ Checkbox Styling. ================ */
    /*var checkBox = $('.checkbox');
    $(checkBox).each(function(){
        $(this).wrap( "<span class='custom-checkbox'></span>" );
        if($(this).is(':checked')){
            $(this).parent().addClass("selected");
            //$(this).attr('value','1');
        }
    });
    $(checkBox).click(function(){
        $(this).parent().toggleClass("selected");
        if ( $(this).is(':checked')){
        	$(this).attr('value','1');
        }else{
        	$(this).attr('value','0');
        }
    });
	$('.custom-checkbox').append('<div class="switcher"/>');*/

})(jQuery);
