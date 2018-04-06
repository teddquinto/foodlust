$(function(){ 
 	$('#userlogin').ajaxForm(function(data) { 
        if(data>0){
	 		$('.login-modal #loader').fadeIn();
	 		$('.login-modal .login').hide();
	 		$('.login-modal .signup').hide();
	 		setTimeout(function(){
        		document.location.href= "home.php";
	 		},2000);
        } else {
	 		$('.login-modal #loader').fadeIn();
	 		$('.login-modal .login').hide();
	 		$('.login-modal .signup').hide();
	 		setTimeout(function(){
		 		$('.login-modal #loader').hide();
		 		$('.login-modal .login').show();
		 		$('.login-modal .login').find('small').hide();
		 		$('.login-modal .login').prepend('<center><small style="color:red;">Wrong Username or Password</small></center>');
		 		$('.login-modal .login input').val('');
		 		$('.login-modal .signup').hide(); 
	 		},2000);
        }
    }); 

    $('#signupsubmit').ajaxForm(function(data) { 
        if(data<=0){
	 		$('.login-modal #loader').fadeIn();
	 		$('.login-modal .login').hide();
	 		$('.login-modal .signup').hide();
	 		setTimeout(function(){
		 		$('.login-modal #loader').hide();
		 		$('.login-modal .login').hide();
		 		$('.login-modal .signup').find('small').hide();
		 		$('.login-modal .signup').html('<center><small style="color:red;">You may now login</small></center>');
		 		$('.login-modal .signup input').val('');
		 		$('.login-modal .signup textarea').val('');	
		 		$('.login-modal .signup').show(); 
		 		setTimeout(function(){
		 			document.location.href = 'home.php';
		 		},1000);	
	 		},2000);
	 		 }else if(data='match'){
	 		$('.login-modal #loader').fadeIn();
	 		$('.login-modal .login').hide();
	 		$('.login-modal .signup').hide();
	 		setTimeout(function(){
		 		$('.login-modal #loader').hide();
		 		$('.login-modal .login').hide();
		 		$('.login-modal .signup').find('small').hide();
		 		$('.login-modal .signup').prepend('<center><small style="color:red;">Email Already Exist</small></center>');
		 		$('.login-modal .signup input').val('');
		 		$('.login-modal .signup textarea').val('');
		 		$('.login-modal .signup').show(); 
	 		},2000);
        }else if(data='pass'){
	 		$('.login-modal #loader').fadeIn();
	 		$('.login-modal .login').hide();
	 		$('.login-modal .signup').hide();
	 		setTimeout(function(){
		 		$('.login-modal #loader').hide();
		 		$('.login-modal .login').hide();
		 		$('.login-modal .signup').find('small').hide();
		 		$('.login-modal .signup input').val('');
		 		$('.login-modal .signup textarea').val('');	
		 		$('.login-modal .signup').show(); 
		 		$('.login-modal .signup').prepend('<center><small style="color:red;">Password Does not Match</small></center>');
				
	 		},2000);
		 		
	 	
        }else if(data='symbol'){
	 		$('.login-modal #loader').fadeIn();
	 		$('.login-modal .login').hide();
	 		$('.login-modal .signup').hide();
	 		setTimeout(function(){
		 		$('.login-modal #loader').hide();
		 		$('.login-modal .login').hide();
		 		$('.login-modal .signup').find('small').hide();
		 		$('.login-modal .signup').prepend('<center><small style="color:red;">No symbols allowed</small></center>');
		 		$('.login-modal .signup input').val('');
		 		$('.login-modal .signup textarea').val('');
		 		$('.login-modal .signup').show(); 
	 		},2000);
        }else if(data='error'){
	 		$('.login-modal #loader').fadeIn();
	 		$('.login-modal .login').hide();
	 		$('.login-modal .signup').hide();
	 		setTimeout(function(){
		 		$('.login-modal #loader').hide();
		 		$('.login-modal .login').hide();
		 		$('.login-modal .signup').find('small').hide();
		 		$('.login-modal .signup').prepend('<center><small style="color:red;">Something Went Wrong</small></center>');
		 		$('.login-modal .signup input').val('');
		 		$('.login-modal .signup textarea').val('');
		 		$('.login-modal .signup').show(); 
	 		},2000);
         
        }
    }); 

	//push Notif
    // $('.overlay #addtocart').click(function(data){
    // 	$('#notif').hide();
    // 	var prodid = $(this).attr('alt');
    // 	var qty = $(this).siblings('#qty').val(); 
    // 	$.post('php/addtocart.php',{ qty: qty , prodid: prodid },function(data){
    // 		if(data>=1){
    // 			$('#notif').fadeIn();
    // 			$('#notif').html('Product has been added to cart'); 
    // 			setTimeout(function(){
    // 				$('#notif').fadeOut();
    // 			},2000);
    // 		} else {
    // 			alert('An error occured !');
    // 		}
    // 	});

    // });


});	

function readURL(input) {
						if (input.files && input.files[0]) {
								var reader = new FileReader();

								reader.onload = function (e) {
										$('.img-cont img').attr('src', e.target.result);
								}

								reader.readAsDataURL(input.files[0]);
						}
				}

				$("#add_image").change(function () {
						readURL(this);
				});

				var file = document.getElementById('add_image');
				
				file.onchange = function(e){
				    var ext = this.value.match(/\.([^\.]+)$/)[1];
				    switch(ext)
				    {
				        case 'jpg':
				        case 'bmp':
				        case 'png':
				        case 'tif':
				        case 'jpeg':
						    case 'JPG':
						    case 'BMP':
						    case 'PNG':
						    case 'TIF':
						    case 'JPEG':
									 $('#addprod-submit').attr('disabled', false);
									 $('#erorr').html(' ');
									 $('#erorr').hide();
				            break;
				        default:
									 $('.img-cont img').css({'width': '100%'});
									 $('#erorr').show();
									 $('#erorr').prepend("<br><kbd class='animated shake erorr'>This File is not allowed</kbd>");
									 $('#addprod-submit').attr('disabled', true);
									 $('#addprod-submit').css({'background-color': '#e74c3c'});
				    }
				};


	// when esc is clicked
	$(document).keyup(function(e) {
	if (e.keyCode == 27) {
			$('.login-modal').slideUp('fast');
			$('body .container').css({'opacity': '1'},"slow");  
	 		$('.login-modal #loader').hide();
	 		$('.login-modal .login').show();
	 		$('.login-modal .signup').hide();
		 
	}
	});
   