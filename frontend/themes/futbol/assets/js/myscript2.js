function ProcessBar(aPos) {
	$('.loaderVideoin').animate({
		'width' : aPos + '%'
    },{
		duration: 'slow',
		step: function(now, fx) {
			$('.LDVspan').text(parseInt(now) + '%');
		}
	});
}
function randerFunc(){
	if ($('.MsgBox, .chatBoxOt').is(':visible')) {
		if($(window).height() > 400 ){
			$('.inSoob').height($(window).height()-225);
			$('.FriendScroll').height($(window).height()-320);
			$('.chatScroll').height($(window).height()-278);
			$('.inWinL .FriendScroll').height($('.inWinL').height()-60)
		}else{
			$('.inSoob').height(250);
			$('.FriendScroll').height(150);
			$('.chatScroll').height(197);
			$('.inWinL .FriendScroll').height($('.inWinL').height()-60)
		}
		$('.OffandOnS').toggle(function(){
			$(this).css('background-position','-125px -54px');
			$('.soundicon').css('background-position','-45px -55px');
		},function(){
			$(this).css('background-position','-66px -54px')
			$('.soundicon').css('background-position','-24px -55px')
		});
		$('.removeUs').click(function(){
			$(this).parent().remove();
			$('.FriendScroll').jScrollPane({
				showArrows:true, 
				verticalDragMinHeight: 41,
				verticalDragMaxHeight: 41
			});
		});
		$('.msg .FileUP, .msg .smile').fadeTo(0, 0.5)
		$('.msg .FileUP, .msg .smile').hover(function(){
			$(this).fadeTo(100, 1);
		},function(){
			$(this).fadeTo(100, 0.5);
		});
		$('.FriendScroll').jScrollPane({
			showArrows:true, 
			verticalDragMinHeight: 41,
			verticalDragMaxHeight: 41
		});
	};
}
$(document).ready(function(){
	$('.vcbar').hover(function(){
		var aactive = $(this).parent().find("a")[0];
		$(aactive).attr('id','activeshad');
	},function(){	
		var aactive = $(this).parent().find("a")[0];
		$(aactive).attr('id','');
	});
	$(".hovera").hover(function(){
		var cenarbg = $(this).parent().find("div.cenarbg")[0];
		var reparrt = $(this).parent().find("div.reparrt")[0];
		var w = parseFloat($(this).parent().css("width"));		
		$(cenarbg).css('width', w - 32 + 'px');
		$(reparrt).css("margin-left", 5 + 12 + (w - 32) + 'px');	
	},function(){});
	$('.bgchange').hover(function(){
	$(this).stop().animate({'width':'130px'}, 500);
	$('.screensw').css('backgroundPosition','-64px 0');
	$('.textsw').stop().animate({'width':'100px'}, 500, function(){
		$('.arrowsw').css({'backgroundPosition':'-48px 0'});
		$(this).css('color','#00aeff');
	});
	},function(){
		$(this).stop().animate({'width':'30px'}, 500);
		$('.arrowsw').css('backgroundPosition','0 0');
		$('.screensw').css('backgroundPosition','-14px 0');
		$('.textsw').stop().css('color','#9ca4af').animate({'width':'0'}, 500);		
	});
	$('#closet').click(function(){
		$('.massan').fadeOut(500)
	});
	$('.sptwo a').hover(function(){
		$(this).parent().find('.addava').css({'background-position':'-22px 0'})
	},function(){
		$(this).parent().find('.addava').css({'background-position':'3px 0'})
	});	
	$('.sptwt a').hover(function(){
		$(this).parent().find('.addava').css({'background-position':'-23px -22px'})
	},function(){
		$(this).parent().find('.addava').css({'background-position':'3px -22px'})
	});	
	$('.sptwf a').hover(function(){
		$(this).parent().find('.addava').css({'background-position':'-20px -45px'})
	},function(){
		$(this).parent().find('.addava').css({'background-position':'3px -45px'})
	});
	$('.sptwfr a').hover(function(){
		$(this).parent().find('.addava').css({'background-position':'-20px -65px'})
	},function(){
		$(this).parent().find('.addava').css({'background-position':'3px -65px'})
	});
	$('.HoverP').mouseenter(function(){
		$(this).parent().find('.yesAndNo').fadeIn(150);
	});				
	$('.yesAndNo').mouseleave(function(){
		$(this).parent().find('.yesAndNo').delay(500).fadeOut(150);		
	});
	$('.hovernews').click(function(){
		$('.outNBHide, .NBcontentIn').hide(700, function(){
			$('.hovernews').hide();
			$('.hideinNB').show(300);
		});	
	});  
	$('.hideinNB img').click(function(){
		$('.hideinNB').hide(300, function(){
			$('.outNBHide, .NBcontentIn').show(700);
			$('.hovernews').show();
		});	
	});	
	$('.hoverFix').click(function(){
		$('.outFix').hide(700, function(){
			$('.hoverFix').hide();
			$('.hideInFix').show(300);
		});	
	});  
	$('.hideInFix img').click(function(){
		$('.hideInFix').hide(300, function(){
			$('.outFix').show(700);
			$('.hoverFix').show();
		});	
	}); 
	var hoverSmileH = 0;	
	$('.smile').click(function(){
		hoverSmileH = 0;
		$(this).find('.hoverSmile').show(300, function(){
			hoverSmileH = 1;
		});
	});
	$('body').click(function(event){
		if($('.hoverSmile').attr('alt') == 'none'
			&& hoverSmileH == 1
			&& $(event.target).parent().attr('class') != 'SmileIn') {
			$('.hoverSmile').hide(300);
		}
	});
	$('.goRight').click(function(){
		$('.NBUl').css('background','none');
		$('.NBUl li').fadeOut(500, function(){
			$('.NBUl li').ready(function(){
				$('.NBUl').css('background','#f9f9f9')
				$('.NBUl li').fadeIn(500)
			});
		});
	});
	$('.goLeft').click(function(){
		$('.NBUl').css('background','none');
		$('.NBUl li').fadeOut(500, function(){
			$('.NBUl li').ready(function(){
				$('.NBUl').css('background','#f9f9f9')
				$('.NBUl li').fadeIn(500)
			});
		});
	});
	$('.deleteImgP img').click(function(){
		$(this).parent().parent().remove();
	});
	$('.hideBlocks:not(.statusinUP)').hide(); 
	$('.LoaderMenu li').click(function(){
		var aLi = this;
		$('.LoaderMenu li').removeClass('LMActive');
		$(aLi).addClass('LMActive');
		$('.hideBlocks').hide(0, function(){
			$('.' + $(aLi).attr('alt')).show();
		});
	});
	$('.forradioBut').click(function(){
		$(this).css('background-position','100% -26px');
	});
	$('.addAnswer').click(function(){
		var TextThis = $(this).parent().find('.answer').text();
		$(this).parent().find('.answer').text('');
		$(this).parent().before('<div class="outAnswar PLC"><div class="answer" contenteditable="true"  inText="Ответ">'+TextThis+'</div><div class="RemoveAnsver">-<div class="hint">Удалить<b></b></div></div></div>');
		$('.RemoveAnsver').click(function(){
			$(this).parent().remove('.outAnswar');
		});
	});
	$('.RemoveAnsver').click(function(){
		$(this).parent().remove('.outAnswar');
	});
	
	$('.PLC').focus(function(){
		var inText = $(this).attr('inText');
		var textIn = $(this).text();
		if(inText==textIn){$(this).text('')};
	});

	$('.PLC').blur(function(){
		var inText = $(this).attr('inText');
		var textIn = $(this).text();
		if(textIn == ''){$(this).text(inText)};
	});
	$('.conen').focus(function(){
		var chatOut = $(this).parents('.chatOut');
		$(chatOut).find('.msg').height(150);
		$(this).height(82);
		if($(this).text()=='Написать сообщение'){
			$(this).text('');
			var jspPane = $(this).parents('.chatOut').find('.jspPane');
			$(jspPane).find('.outCombtn').css('height', '80px');
			$(chatOut).find('.FriendScroll').jScrollPane({
				showArrows:true, 
				verticalDragMinHeight: 41,
				verticalDragMaxHeight: 41
			});
			$(jspPane).css('top', (parseInt($(jspPane).css('top')) - 70) + 'px');
		}
	});
	$('.conen').blur(function(){
		var inTextB = $(this).text();
		var chatOut = $(this).parents('.chatOut');
		
		if(!inTextB || inTextB == 'Написать сообщение'){
			$(chatOut).find('.msg').height(80);
			$(this).height(12);
		};
		if($(this).text()==''){
			$(this).text('Написать сообщение');
			var jspPane = $(chatOut).find('.jspPane');
			$(jspPane).find('.outCombtn').css('height', '');

			$(chatOut).find('.FriendScroll').jScrollPane({
				showArrows:true, 
				verticalDragMinHeight: 41,
				verticalDragMaxHeight: 41
			});
		}
	});
	$('.PlayVidUs').click(function(){
		$(this).hide();
		var parOut = $(this).parent();
		parOut.find('.infoVidUs').hide();
		parOut.find('.infoVidUs+img').hide();
		parOut.html('<iframe width="491" height="285" src="http://mover.uz/video/embed/9OzzPMFj/" frameborder="0" allowfullscreen></iframe>')
	});
	$('.videoLoader').hide();
	$('.forradioBut').click(function(){
		$('.radioButagre').click();
		$('.videoLoader').show('slow');
		ProcessBar(Math.floor(Math.random() * 100));
	});
	// hide #back-top first
	$('#back-top').hide();
	
	var mtop = $('.themsBlock').offset().top - 100;

	// fade in #back-top
	$(window).scroll(function () {
		if ($(this).scrollTop() > 200) {
			$('#back-top').fadeIn();
		} else {
			$('#back-top').fadeOut();
		};
		if($(this).scrollTop()>60){
			$('#header').css('marginBottom', '105px');
			$('#navAndaft').css({
			'position':'fixed',
			'width':'100%',
			'z-index':'999',
			'top':'0'
			});
			$('.inSoob').css('margin-top','111px');
		}else{
			$('#header').css('marginBottom', '');
			$('#navAndaft').css({
			'position':'',
			'width':'',
			'z-index':'',
			'top':''
			});
			$('.inSoob').css('margin-top','171px');
		}
		
		var abTop = $(this).scrollTop() + mtop + 80;
		
		var amBottom = $('#navAndaft').height() + $('.themsBlock').height() - $(this).height();

		if ($(this).scrollTop() > mtop) {
			if (abTop < $('#content').height()) {
				$('.themsBlock').css({
					'position':'fixed',
					'top':'105px',
					'bottom':''
				});
			} else {
				$('.themsBlock').css({
					'position':'fixed',
					'top':'',
					'bottom':(abTop - $('#content').height() - amBottom)+'px'
				});
			}
		} else {
			$('.themsBlock').css({
				'position':'',
				'top':''
			});
		}
		//$('#content').height()-$('.themsBlock').height()+
		//$('.ThemsLink').html($(this).scrollTop()+$('.footer').height() + parseInt($('.footer').css('padding-top')) + parseInt($('.footer').css('padding-bottom')));
		
	});
	
	/*alert($('.footer').height() + parseInt($('.footer').css('padding-top')) + parseInt($('.footer').css('padding-bottom')));*/
	
	$('.asideHoverInHide').toggle(function(){
		var aParent = $(this).parent();
		var inhoverBlock = $(aParent).find('.asideHoverInShow');
		var mh = $(aParent).height();
		$(inhoverBlock).hide(300, function(){
			$(aParent).find('.asideHoverInHide').css('background-position','100% -20px');
			mh =  mh - $(aParent).height();
			mtop-= mh;
		});
	},function(){
		var aParent = $(this).parent();
		var inhoverBlock = $(aParent).find('.asideHoverInShow');
		var mh = $(aParent).height();
		$(inhoverBlock).show(300, function(){
			$(aParent).find('.asideHoverInHide').css('background-position','100% 0');
			mh = $(aParent).height() - mh;
			mtop+= mh; 
		});
	});
	
	
	
	
	
	
	
	
	
	
	// scroll body to 0px on click
	$('#back-top a').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});
	
	$('.plashBlack, .cloeSoob').click(function(){
		$('body').css('overflow','auto');
		if($('.MsgBox').is(':visible')) $('.MsgBox').fadeOut('slow');
		if($('.chatBoxOt').is(':visible')) $('.chatBoxOt').fadeOut('slow');
		if($('.WindowLike').is(':visible')) $('.WindowLike').fadeOut('slow');
	});
	
	$('.massa').click(function(){
		if ($('.chatBoxOt').is(':visible'))
			$('.comma').click();
		if ($('.MsgBox').is(':visible')) {
		
			$('body').css('overflow','auto');
			$('.MsgBox').fadeOut('slow');
		} else {
			$('#navAndaft').attr('class', 'zind')
			$('body').css('overflow','hidden');
			$('.arrowSoob').css('left', '270px');
			$('.MsgBox').fadeIn('slow');
		}
		
		randerFunc();
	});
	
	$('.comma').click(function(){
		if ($('.MsgBox').is(':visible'))
			$('.massa').click();
		
		if ($('.chatBoxOt').is(':visible')) {
			$('body').css('overflow','auto');
			$('.chatBoxOt').fadeOut('slow');
		} else {
			$('#navAndaft').attr('class', 'zind')
			$('body').css('overflow','hidden');
			$('.arrowSoob').css('left', '370px');
			$('.chatBoxOt').fadeIn('slow');
		}
		randerFunc();
	});

	$('.SortIn').click(function(){
		if($('.IBLul').is(':hidden')){
			$('.IBLul').fadeIn(300); 
		}else{
			$('.IBLul').fadeOut(300);
		}
	});
	$('.IBLul li').click(function(){
		$('.SortIn').text($(this).text());
		$('.IBLul').fadeOut(300)
	});
		
		
		
		
		/******************************************************************/
		$('.collPeople').click(function(){
			$('.WindowLike').fadeIn(300)
			$('body').css('overflow','hidden')
			$('.FriendScroll').jScrollPane({
				showArrows:true, 
				verticalDragMinHeight: 127,
				verticalDragMaxHeight: 127
			});
		});
		$('.closeWindL').click(function(){
			$('body').css('overflow','auto')
			$('.WindowLike').fadeOut(300)}
		);
		
		
		
		
		//Минусовой верхний отступ внутренего блока
		 var inWinHe = $('.inWinL').height()/2;
		$('.inWinL').css({'margin-top':-inWinHe})
		$('.inWinL .FriendScroll').height($('.inWinL').height()-60)
		
		
		
		
		
		
		
		
		
		/******************************************************************/
		
		
		
		
		
		
		
		
		
		
		
		
		
});//ready
