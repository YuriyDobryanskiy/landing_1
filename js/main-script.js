/*PHONE mask*/
$(function(){
	$("#telephone").mask("+38(099) 999-99-99");
});
$(function(){
	$("#telephone2").mask("+38(099) 999-99-99");
});
/*PHONE mask*/

/*AJAX*/
function call(x) {
	var tel = $("#"+x+">p>input[name='tel']").val();
	var name = $("#"+x+">p>input[name='name']").val();
		
	if (tel.length == 0 || name.length == 0){
		$("#"+x+">#resultsErr").text('Заповніть усі поля');
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








/*TEST*/
setInterval(function() {
            var windHeight = innerHeight;
            //$('.mainBlock').css({'height':windHeight})
            //console.log(windowHeight);
        }, 1000);
/*TEST*/