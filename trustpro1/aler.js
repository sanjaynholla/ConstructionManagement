$("h1").click(function()
{
$('#dialog').attr('title','').text('').dialog();
	$('#menu').slideUp(800); 
	 $('#menu').slideDown(800); 
	  } );
$("#content").click(function()
{
	
	$('#masthead').slideUp(800); 
	 $('#masthead').slideDown(800); 
	 $('#masthead').fadeOut();
	 $('#content').delay(800).fadeOut();
	 $('#footer').fadeOut().delay(800).fadeIn();
	 $('h1').delay(3000).css('color','red');
	  $('h2').delay(6000).css('color','gold');
	  } );