$(function(){ 
 	$('#userlogin').ajaxForm(function(data) { 
        if(data == 10){
	 		$('.login-modal #loader').fadeIn();
	 		$('.login-modal .login').hide();
	 		$('.login-modal .signup').hide();
	 		setTimeout(function(){
        		document.location.href= "home.php";
	 		},2000);
        }else if(data == 211){
	 		$('.login-modal #loader').fadeIn();
	 		$('.login-modal .login').hide();
	 		$('.login-modal .signup').hide();
	 		setTimeout(function(){
        		document.location.href= "home.php";
	 		},2000);
        }

         else if (data == 200) {
         		$('.login-modal #loader').fadeIn();
	 		$('.login-modal .login').hide();
	 		$('.login-modal .signup').hide();
	 		setTimeout(function(){
		 		$('.login-modal #loader').hide();
		 		$('.login-modal .login').show();
		 		$('.login-modal .input-container').show();
		 		$('.login-modal .login').find('small').hide();
		 		$('.login-modal .login').prepend('<center><small style="color:red;">pls fill up the capcha</small></center>');
		 		$('.login-modal .login input').val('');
		 		$('.login-modal .signup').hide(); 
	 		},2000);
	 		
        }else {
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
    //     if($_COOKIE['login'] <= 3){
    //     	$('.login-modal #loader').fadeIn();

	 		// $('.login-modal .login').hide();
	 		// $('.login-modal .signup').hide();
	 		// setTimeout(function(){
		 	// 	$('.login-modal #loader').hide();
		 	// 	$('.login-modal .login').show();	
		 	// 	$('input-container').show();
		 	// 	$('.login-modal .login').find('small').hide();
		 	// 	$('.login-modal .login').prepend('<center><small style="color:red;">Wrong Username or Password</small></center>');
		 	// 	$('.login-modal .login input').val('');
		 	// 	$('.login-modal .signup').hide(); 
	 		// },2000);

    //     }
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


 	$('#ver_email').ajaxForm(function(data) { 
 		$('.forget_pass .form_c').hide();
 		var email = $('#emailed').val();
        if(data == 1){
	 		$('.forget_pass  #loader').fadeIn();
	 		
	 		
	 		setTimeout(function(){
        	$('.forget_pass .inputs-container  #loader').hide();
        	$('.forget_pass .form-cont').hide();
		 	$('.login-modal .inputs-container').show();
		 	$('.forget_pass .form_c').show();
	  $.ajax({
  url: "php/send_code.php",
  data:'email='+email,
  type: "POST",
   success: function( data ) {
                  if (data == 'yes') {
        alert(' message sent');             
    }else{
      alert(data);
    }
      },
      error: function(data) {
                // Handle error here
                alert(data);
              },
              timeout: 30000  
  });
		$('.forget_pass .inputs-container').html('<center><small style="color:red;">please check your email for code</small></center>');
	$('.forget_pass .form_c').html('<form id="new_passs" action="php/new_pass.php" method="POST"><center><input type="hidden" name="emails" value="'+email+'"> code:<input type = "text" name="code" placeholder="code" style="border:1px solid black; outline: 1; width: 50%; height:25%;  margin-bottom: 2.5%; margin-right: 1%; padding: 1%;">'
		+'<br>new pass:<input type = "password" name="pass1" placeholder="new Password" style="border:1px solid black; outline: 1; width: 50%; height:25%;  margin-bottom: 2.5%; margin-right: 1%; padding: 1%;">'
		+'<br>retype new pass:<input type = "password" name = "pass2" placeholder="re type Password" style="border:1px solid black; outline: 1; width: 50%; height:25%;  margin-bottom: 2.5%; margin-right: 1%; padding: 1%;"><br>'+
		'<button id="update_pass" style="width:30%; float:center; font-size: 1vw; color:black; background-color: transparent; border: 1px solid black; padding-top: 1%; padding-bottom: 1%; padding-left: 3%; padding-right: 3%;" > submit</button></center></form>');
 		
		 		
	 		},2000);
        }else if(data == 2){
	 		$('.forget_pass #loader').hide();
		 	$('.forget_pass .form_c').hide();
	 		setTimeout(function(){

        	$('.login-modal .inputs-container').show();

        	$('.forget_pass .inputs-container').html('<center><small style="color:red;">email does not exist</small></center>');
		 		

	 		},2000);
        }

       
    }); 


 	$('#new_passs').ajaxForm(function(data) { 
 		 if(data == "welcome!"){
 		 		$('.forget_pass ').fadeOut();
 		 		alert("password has been changed");

 		 }else if(data == 'error'){
 		 alert(data);
 		}
    }); 

   //  $('#forget').click(function(){
			// 		$('.container').animate({'opacity': '0.4'});
					
			// 		$('.header').animate({'opacity': '0.4'});
			// 		$('.forget_pass').fadeIn();
					
			// });
		

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
   