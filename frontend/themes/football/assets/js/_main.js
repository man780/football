$(document).ready(function() {


	$('#mycarousel').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        infinite: true,
        speed: 800,
        fade: false,
        cssEase: 'ease',
        swipe: false
    });

    $('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.slider-nav'
	});
	$('.slider-nav').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		dots: false,
		arrows: true,
		centerMode: true,
		focusOnSelect: true
	});
	
	if($(".checkbox").length > 0 || $(".radio").length > 0){
		checks();
		$(".checkbox input[type='checkbox'], .radio input[type='radio']").change(function(){
			checks();
		});
	};

	$(".tabs-menu a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });

    $(".comment_answer").click( function(event) {
    	event.preventDefault();
    	$(this).parent().parent().find('.answer').toggleClass('active');
    });

    $(".comment_edit_link").click( function(event) {
    	event.preventDefault();
    	var initial = $(this).parent().parent().parent().find('.comment_body:first').html();
    	var editableText = $(this).parent().parent().parent().find('.comment_box_textarea:first');
    	var divHtml = $(this).parent().parent().parent().find('.comment_body:first').html(); // or text(), whatever suits.
    	$(this).parent().parent().parent().find('.comment_self_data:first').css('display', 'none');
    	$(this).parent().parent().parent().find('.comment_footer:first').css('display', 'none');
    	$(this).parent().parent().parent().find('.coment_editbox:first').css('display', 'block');
    	editableText.val(divHtml);
    	editableText.focus();
    	editableText.selectRange(0,editableText.val().length);
        
    	/*event.preventDefault();
        $(this).parent().parent().parent().find('.comment_body:first');
    	var divHtml = $(this).parents().find('.comment_body').html(); // or text(), whatever suits.
    	var editableText = $("<textarea />");
    	editableText.val(divHtml);
    	$(this).parents().find('.comment_body').replaceWith(editableText);
    	editableText.focus();
    	editableText.selectRange(0,editableText.val().length);
	    $(editableText).blur(function() {
		    // Preserve the value of textarea
		    var html = $(this).val();
		    // create a dynamic div
		    var viewableText = $('<div />', {"class": 'comment_body'});
		    // set it's html 
		    viewableText.html(html);
		    // replace out the textarea
		    $(this).replaceWith(viewableText);
		});*/
    });

	$(".comment_box_edit_button").click( function(event) {
    	event.preventDefault();
    	var editableText = $(this).parent().parent().parent().parent().parent().parent().find('.comment_box_textarea:first').val();
    	$(this).parent().parent().parent().parent().parent().parent().find('.comment_self_data:first').css('display', 'block');
    	$(this).parent().parent().parent().parent().parent().parent().find('.comment_footer:first').css('display', 'block');
    	$(this).parent().parent().parent().parent().parent().parent().find('.coment_editbox:first').css('display', 'none');
    	var divHtml = $(this).parent().parent().parent().parent().parent().parent().find('.comment_body:first');
    	divHtml.html(editableText);
    });

    $(".comment_box_cancel_button").click( function(event) {
    	event.preventDefault();
    	$(this).parent().parent().parent().parent().parent().parent().find('.comment_self_data:first').css('display', 'block');
    	$(this).parent().parent().parent().parent().parent().parent().find('.comment_footer:first').css('display', 'block');
    	$(this).parent().parent().parent().parent().parent().parent().find('.coment_editbox:first').css('display', 'none');
    });

    $('.secondary_menu > ul > li').click(function(event) {
        event.preventDefault();
        if($(this).hasClass('opened')) {
            $(this).removeClass('opened');
        }
        else {
            $(this).parent().find('li').removeClass('opened');
            $(this).addClass('opened');
            $('.scroll').jScrollPane({
                mouseWheelSpeed: 20
            });
        }
    });

});

$.fn.selectRange = function(start, end) {
    if(!end) end = start; 
    return this.each(function() {
        if (this.setSelectionRange) {
            this.focus();
            this.setSelectionRange(start, end);
        } else if (this.createTextRange) {
            var range = this.createTextRange();
            range.collapse(true);
            range.moveEnd('character', end);
            range.moveStart('character', start);
            range.select();
        }
    });
};
	
function checks(){
	$(".checkbox input[type='checkbox'], .radio input[type='radio']").each(function(){
		if($(this).attr('checked')){$(this).closest('label').addClass('checked');}
		else {$(this).closest('label').removeClass('checked');}
	});
}

function initSearch () {
    
    $('.header-search-button').on('click', function () {
        
        var opened = $('.search_block').hasClass('opened'),
            empty = $('.header-search-input').val() === '' ? true : false;
        var searchVal = $('.header-search-input');
        
        if (!opened) {
            $('.search_block').addClass('opened');
            $('.header-search-input').focus();
            $('.header-search-input').selectRange(0,searchVal.val().length);
        };
        
        if (opened && empty) {
            $('.search_block').removeClass('opened');
        };
        
        if (opened && !empty) {
            return true
        };
        
        return false
    });
};

$(window).load(function () {
    initSearch();
});

$(document).on('click', function (e) {
    if ($(e.target).closest('.search_block').length === 0) {
        $('.search_block').removeClass('opened');
    }
    if ($(e.target).closest('.secondary_menu > ul > li ').length === 0) {
        $('.secondary_menu  > ul > li').removeClass('opened');
    }
});







