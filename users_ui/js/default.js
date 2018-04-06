$(function(){ 

		$('#forget').click(function(){
					
					
					$('.header').animate({'opacity': '0.4'});
					$('.forget_pass').fadeIn();
					$('.login-modal ').hide();
			});
		
		$('.header-title span i').click(function(){
					$('.forget_pass').fadeOut("fast",function(){
					  	$('.container').animate({'opacity': '1'});
							
							$('.header').css({'opacity': '1'});
					});
					});
	// $('.profilepicx').hover(function(){
	// 	$(this).find('.overlay').fadeIn();
	// 	$(this).find('img').css({'opacity': '0.11'});
	// }); 
	// $('.profilepicx').mouseleave(function(){
	// 	$(this).find('.overlay').slideUp(); 
	// 	$(this).find('img').css({'opacity': '1'});   
	// });


	// $('.profilepicx').hover(function(){ 
	// 	$(this).find('.overlay').fadeIn();
	// 	$(this).find('img').css({'opacity': '0.05'});
		 
	// }); 
	// $('.profilepicx').mouseleave(function(){
	// 	$(this).find('.overlay').hide();
	// 	$(this).find('img').css({'opacity': '1'},"slow");  
		
	// });
 
$('#signupbtn2').click(function(){
			$('.login-modal .login').hide();
			$('.login-modal .login .input-container').hide();
			$('.login-modal .signup').fadeIn(); 
		});
		$('#loginbtn2').click(function(){
			$('.login-modal .signup').hide();
			$('.login-modal .login .input-container').hide();	
			$('.login-modal .login').fadeIn(); 
		});

		$('#loginmodal').click(function(){
			$('.login-modal').show();
			$('.login-modal .login .input-container').hide();
			$('body .container').css({'opacity': '1'}); 
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




	$('#cats').change(function(){
						var cat = $(this).val();
						if(cat==='rawmeat'){
								
								$('.product-container #rawfish').hide();
								$('.product-container #product').hide();
								$('.product-container #fruits').hide();
								
								$('.product-container #cupcakesandcookies').hide();
								$('.product-container #cateringservice').hide();
								$('.product-container #cakes').hide();
								$('.product-container #vegatables').hide();

								setTimeout(function(){
									$('.product-container #rawmeat').fadeIn();
								},500);
						}
						else if(cat==='product'){
								$('.product-container #rawfish').hide();
								$('.product-container #rawmeat').hide();
								$('.product-container #fruits').hide();
								
								$('.product-container #cupcakesandcookies').hide();
								$('.product-container #cateringservice').hide();
								$('.product-container #cakes').hide();
								$('.product-container #vegatables').hide();

								
								
								setTimeout(function(){
									$('.product-container #product').fadeIn();
								},500);
						}
							else if(cat==='fruits'){
									$('.product-container #rawfish').hide();
								$('.product-container #rawmeat').hide();
								$('.product-container #product').hide();
								
								$('.product-container #cupcakesandcookies').hide();
								$('.product-container #cateringservice').hide();
								$('.product-container #cakes').hide();
								$('.product-container #vegatables').hide();

								
								
								setTimeout(function(){
									$('.product-container #fruits').fadeIn();
								},500);
						}
						else if(cat==='cupcakesandcookies'){
									$('.product-container #rawfish').hide();
								$('.product-container #rawmeat').hide();
								$('.product-container #fruits').hide();
								
								$('.product-container #product').hide();
								$('.product-container #cateringservice').hide();
								$('.product-container #cakes').hide();
								$('.product-container #vegatables').hide();

								
								
								setTimeout(function(){
									$('.product-container #cupcakesandcookies').fadeIn();
								},500);
						}
						else if(cat==='cateringservice'){
									$('.product-container #rawfish').hide();
								$('.product-container #rawmeat').hide();
								$('.product-container #fruits').hide();
								
								$('.product-container #product').hide();
								$('.product-container #cupcakesandcookies').hide();
								$('.product-container #cakes').hide();
								$('.product-container #vegatables').hide();

								
								
								setTimeout(function(){
									$('.product-container #cateringservice').fadeIn();
								},500);
						}
						else if(cat==='cakes'){
									$('.product-container #rawfish').hide();
								$('.product-container #rawmeat').hide();
								$('.product-container #fruits').hide();
								
								$('.product-container #product').hide();
								$('.product-container #cateringservice').hide();
								$('.product-container #cupcakesandcookies').hide();
								$('.product-container #vegatables').hide();

								
								
								setTimeout(function(){
									$('.product-container #cakes').fadeIn();
								},500);
						}
							 else if(cat==='vegatables'){
									$('.product-container #rawfish').hide();
								$('.product-container #rawmeat').hide();
								$('.product-container #fruits').hide();
								
								$('.product-container #product').hide();
								$('.product-container #cateringservice').hide();
								$('.product-container #cupcakesandcookies').hide();
								$('.product-container #cakes').hide();

								
								
								setTimeout(function(){
									$('.product-container #vegatables').fadeIn();
								},500);
						}
						else if(cat == 'all') {
							$('.product-container #vegatables').fadeIn();
							$('.product-container #cakes').fadeIn();
							$('.product-container #cateringservice').fadeIn();
							$('.product-container #cupcakesandcookies').fadeIn();
							$('.product-container #fruits').fadeIn();
							$('.product-container #product').fadeIn();
							$('.product-container #rawmeat').fadeIn();
							$('.product-container #rawfish').fadeIn();

						}			
						


				});