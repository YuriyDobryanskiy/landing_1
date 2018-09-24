/*PHONE mask*/
$(function(){$("#telephone").mask("+38(099) 999-99-99");});
$(function(){$("#telephone2").mask("+38(099) 999-99-99");});
$(function(){$(".mobPhone").mask("+38(099) 999-99-99");});
/*PHONE mask*/

/*burger menu*/
/*fadeIN-OUT - http://jquery.page2page.ru/index.php5/%D0%9F%D0%BE%D1%8F%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5_%D0%B8_%D0%B8c%D1%87%D0%B5%D0%B7%D0%BD%D0%BE%D0%B2%D0%B5%D0%BD%D0%B8%D0%B5_%D1%8D%D0%BB%D0%B5%D0%BC%D0%B5%D0%BD%D1%82%D0%BE%D0%B2_%D0%B7%D0%B0_%D1%81%D1%87%D0%B5%D1%82_%D0%BF%D1%80%D0%BE%D0%B7%D1%80%D0%B0%D1%87%D0%BD%D0%BE%D1%81%D1%82%D0%B8*/
$('.icon-menu').click(function() {
    if($('.menuSmall').css('display') == 'block'){
        $('.icon-menu').html('<svg height="32px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/></svg>');
        $('.icon-menu svg').css('padding-bottom', '5px');
        $('.menuSmall').css('display', 'none');
    }else{
        //$('.icon-menu').html('');
        $('.icon-menu').html('<svg height="32px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M437.5,386.6L306.9,256l130.6-130.6c14.1-14.1,14.1-36.8,0-50.9c-14.1-14.1-36.8-14.1-50.9,0L256,205.1L125.4,74.5  c-14.1-14.1-36.8-14.1-50.9,0c-14.1,14.1-14.1,36.8,0,50.9L205.1,256L74.5,386.6c-14.1,14.1-14.1,36.8,0,50.9  c14.1,14.1,36.8,14.1,50.9,0L256,306.9l130.6,130.6c14.1,14.1,36.8,14.1,50.9,0C451.5,423.4,451.5,400.6,437.5,386.6z"/></svg>');
        $('.icon-menu svg').css('padding-bottom', '15px');
        $('.menuSmall').css('display', 'block');
    };
});
/*burger menu*/

/*show all Opp*/
var toggle_stat = 'fasle';
$('.arrDown').click(function() {
    if (toggle_stat == false) {
        $('.allOpp').animate({"height":"450"}, 1000);
        toggle_stat = true;
        $('.arrDown').css({
            'margin':'0px auto 0',
            'transform':'rotate(0deg)'
        });
    } else {
        $('.allOpp').animate({"height":"980"}, 1000);
        toggle_stat = false;
        $('.arrDown').css({
            'margin':'-10px auto 0',
            'transform':'rotate(180deg)'
        });
    }
});
/*show all Opp*/

/*AJAX*/
function call(x) {
	var tel = $("#"+x+">p>input[name='tel']").val();
	var name = $("#"+x+">p>input[name='name']").val();
		
	if ((tel.length == 0 || name.length == 0) && x == 'texts'){
		//$("#"+x+">#resultsErr").text('Заповніть усі поля');
        if (tel.length == 0){$("#"+x+">p>input[name='tel']").css({border: "1px solid white"})}
        if (name.length == 0){$("#"+x+">p>input[name='name']").css({border: "1px solid white"})}
        if (tel.length != 0){$("#"+x+">p>input[name='tel']").css({border: "1px solid #ce4040"})}
        if (name.length != 0){$("#"+x+">p>input[name='name']").css({border: "1px solid #ce4040"})}
	}
	else if((tel.length == 0 || name.length == 0) && x == 'texts2'){
        if (tel.length == 0){$("#"+x+">p>input[name='tel']").css({border: "1px solid #ce4040"})}
        if (name.length == 0){$("#"+x+">p>input[name='name']").css({border: "1px solid #ce4040"})}
        if (tel.length != 0){$("#"+x+">p>input[name='tel']").css({border: "1px solid white"})}
        if (name.length != 0){$("#"+x+">p>input[name='name']").css({border: "1px solid white"})}
    }
    else if((tel.length == 0 || name.length == 0) && x == 'texts3'){
        if (tel.length == 0){$("#"+x+">p>input[name='tel']").css({border: "1px solid white"})}
        if (name.length == 0){$("#"+x+">p>input[name='name']").css({border: "1px solid white"})}
        if (tel.length != 0){$("#"+x+">p>input[name='tel']").css({border: "1px solid #ce4040"})}
        if (name.length != 0){$("#"+x+">p>input[name='name']").css({border: "1px solid #ce4040"})}
    }
	else{
		/*AJAX*/
		$("#"+x+">#resultsErr").text('');
		var msg = $('#'+x).serialize();
	 	  
		$.ajax({
			type: 'POST',
			url: 'form.php',
			data: msg,
			success: function(data) {
	        	$('#results').html(data);
	        },
	        error:  function(xhr, str){
				alert('ErroR: ' + xhr.responseCode);
	        }
	    });

	    //else
        $('#results').css({'top':$(window).scrollTop()+ 150}).fadeIn();
        $('#results-bg').fadeIn();

        $('#results-bg').click(function(){
            $('#results').fadeOut();
            $('#results-bg').fadeOut();
        });

    	$(window).scroll(function () {
        	$('#results').css({'top':$(window).scrollTop()+ 150})
    	}).scroll();
	}
}
/*AJAX*/





/*POPUP
$('.openPopup').click(function(){
    $('#results').css({'top':$(window).scrollTop()+ 150}).addClass('active');
    $('#results-bg').fadeIn();
});

$('#results-bg').click(function(){
    $('#results').removeClass('active');
    $('#results-bg').fadeOut();
});
/*POPUP*/


/*TEST
setInterval(function() {
            var windHeight = innerHeight;
            //$('.mainBlock').css({'height':windHeight})
            //console.log(windowHeight);
        }, 1000);
TEST*/