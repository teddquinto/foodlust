$(function(){ 


	$('.profilepicx').hover(function(){
		$(this).find('.overlay').fadeIn();
		$(this).find('img').css({'opacity': '0.11'});
	}); 
	$('.profilepicx').mouseleave(function(){
		$(this).find('.overlay').slideUp(); 
		$(this).find('img').css({'opacity': '1'});   
	});


	$('.profilepicx').hover(function(){ 
		$(this).find('.overlay').fadeIn();
		$(this).find('img').css({'opacity': '0.05'});
		 
	}); 
	$('.profilepicx').mouseleave(function(){
		$(this).find('.overlay').hide();
		$(this).find('img').css({'opacity': '1'},"slow");  
		
	});
 
$('#signupbtn2').click(function(){
			$('.login-modal .login').hide();
			$('.login-modal .signup').fadeIn(); 
		});
		$('#loginbtn2').click(function(){
			$('.login-modal .signup').hide();
			$('.login-modal .login').fadeIn(); 
		});

		$('#loginmodal').click(function(){
			$('.login-modal').show();
			$('body .container').css({'opacity': '0.3'}); 
		});
		$('.login #close').click(function(){
			$('.login-modal').slideUp('fast');
			$('body .container').css({'opacity': '1'},"slow"); 
		});
		$('.signup #close').click(function(){
			$('.login-modal').slideUp('fast');
			$('body .container').css({'opacity': '1'},"slow"); 
		});
		$('body').unload(function(){
		    $('body').html();
		    $('html body').css({'background-color':':black'});
		    alert('asd');
		});


});


$('#searchr').keypress(function(e) {
    if(e.which == 13) {
        var s = $(this).val();
        document.location.href = 'home.php?q='+s;
    }
});