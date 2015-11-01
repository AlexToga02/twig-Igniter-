$(document).ready(function(){	   
/* Navigation Menu */
$('#menu > span').click(function () {
	  $(this).toggleClass("active");  
	  $(this).parent().find("> ul").slideToggle('medium');
	});

/*Footer Link*/
$(".column h3").click(function () {
			$screensize = $(window).width();
			if ($screensize < 801) {
				$(this).toggleClass("active");  
				$(this).parent().find("ul").slideToggle('medium');
			}
		});
/*Title heading span wrap*/
$('.box-heading').wrapInner('<span></span>')

/******** Menu Show Hide Sub Menu ********/
$('#menu > ul > li').mouseover(function() {
			$screensize = $(window).width();
			if ($screensize > 801) {
			$(this).find('> div').css('display', 'block');
			}			
			$(this).bind('mouseleave', function() {
				$screensize = $(window).width();
			if ($screensize > 801) {
				$(this).find('> div').css('display', 'none');
			}
		});});

/*plus mines button in qty*/
$(".qtyBtn").click(function(){
		if($(this).hasClass("plus")){
			var qty = $("#qty").val();
			qty++;
			$("#qty").val(qty);
		}else{
			var qty = $("#qty").val();
			qty--;
			if(qty>0){
				$("#qty").val(qty);
			}
		}
	});	
});