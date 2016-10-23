 
 
 /*  ACORDION COM CSS*/


var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}




/* FIM DO ACORDION COM CSS*/
 
 
$(document).ready(function() {
	$('#doc-nav li a').click(function(){
		$(this).toggleClass('open').parent().find('ul').slideToggle();
		return false;
	});
	$('#doc-nav li a').click(function(){
		jQuery('#doc-nav li a').removeClass('current');
		jQuery(this).addClass('current');
		var tg = jQuery(this).attr('href');
		var oft = jQuery('section'+tg).offset().top;
		$('body, html').animate({scrollTop:oft-40});
		return false;
	});
});


/*
$( function() {
    $( "#accordion" ).accordion();
  } );

*/





$(function() {
   $.mask.definitions['~'] = "[+-]";
   $("#cpf").mask("999.999.999-99");
       $("#pct").mask("99%");

   $.mask.definitions['~'] = "[+-]";
   $("#cnpj").mask("99.999.999\\9999-99");
        $("#pct").mask("99%");
                    
    $("input").blur(function() {
        $("#info").html("Unmasked value: " + $(this).mask());
        }).dblclick(function() {
            $(this).unmask();
            });
     });