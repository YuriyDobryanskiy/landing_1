/*PHONE mask*/
$(function(){
	$("#telephone").mask("+38(099) 999-99-99");
});
$(function(){
	$("#telephone2").mask("+38(099) 999-99-99");
});
/*PHONE mask*/

/*AJAX*/
function call(x,y) {
 		var tel = $("#"+x+">p>input[name='tel']").val();
 		var name = $("#"+x+">p>input[name='name']").val();
		
		if (tel.length == 0 || name.length == 0){			
			$('#'+y).text('Заповніть усі поля');
		}
 		else{
		/*AJAX*/								
			var msg = $('#'+x).serialize();
	 	  
	        $.ajax({
	          type: 'POST',
	          url: 'form.php',
	          data: msg,
	          success: function(data) {
	            $('#'+y).html(data);
	          },
	          error:  function(xhr, str){
				alert('ErroR: ' + xhr.responseCode);
	          }
	        });			
		}	
    }
/*AJAX*/










/*TEST*/
setInterval(function() {
            var windHeight = innerHeight;
            //$('.mainBlock').css({'height':windHeight})
            //console.log(windowHeight);
        }, 1000);
/*TEST*/