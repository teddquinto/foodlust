$(function(){

					//content
					//var height = $(window).height();
					//$('.content').css({'height': height});


					$('#burgermenu').click(function(){
						$('.sidebar').slideDown();
						var sidebar = $('#burgermenu').attr('alt');
						if(sidebar>0){
							$('.sidebar').animate({'left':'0%'});
							$(this).attr('alt', '0');
							$(this).attr('class', 'fa fa-remove');
						} else {
							$('.sidebar').animate({'left':'-100%'});
							$(this).attr('alt', '1');
							$(this).attr('class', 'fa fa-bars');
						}
					});
				// 	$('#r_user').click(function(){
				// 		var id = $(this).attr('alt');

				// 		$('.container').css({'opacity': '0.1'});
				// 		$('.popup').show();
						
				// 				$('.popup #ok').click(function(){

				// 		$.get('php/report_user.php',{ id: id },function(data){
				// 		 if (data == 'ok') {
    //   				  alert('successfully reported this user. your report will be reviewed by foodlust');  
    //                 		$('.popup').fadeOut("fast",function(){
				// 			$('.container').animate({'opacity': '1'});
				// 			$('.content').animate({'opacity': '1'});
				// 			$('.sidebar').css({'opacity': '1'});
				// 			$('.header').css({'opacity': '1'});
				// 		});
    // 						}else{
    //  				 alert(data);
   	// 					 }
				// }); 

				// 		});
					
				// 	});
								
					$('.user_r .popup2 #cancel').click(function(){
						$('.popup').fadeOut("fast",function(){
							$('.container').animate({'opacity': '1'});
							$('.content').animate({'opacity': '1'});
							$('.sidebar').css({'opacity': '1'});
							$('.header').css({'opacity': '1'});
						});
					});

					

	// Sidebar mobile margin top
	setInterval(function(){
		$('.sidebar').css({'top': $('.header').height() });
	});

			//update product
				$('.item #update-prod').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.popup').fadeIn();
					$('.add_products').fadeOut();

				var id = $(this).attr('value');
				$.post('php/update_p1.php',{ id: id },function(data){
					$('#user_r').html(data);
				}); 

			});

					$('.popup2 #update').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.add_products2').fadeIn();
					$('.popup').fadeOut();

				var id = $(this).attr('alt');
				$.post('php/update.php',{ id: id },function(data){
					$('#ccc').html(data);
				}); 

			});

					$('.popup2 #update_p').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.add_products2').fadeIn();
					$('.popup').fadeOut();

				var id = $(this).attr('alt');
				$.post('php/update_product_pic.php',{ id: id },function(data){
					$('#ccc').html(data);
				}); 

			});


$('.item #add-image').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.add_photoss').fadeIn();
					$('.add_products').fadeOut();

				var id = $(this).attr('value');
				$.post('php/add_photo.php',{ id: id },function(data){
					$('#sss').html(data);
				}); 

			});


$('.product-market-container #slide').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.pics').fadeIn();
					$('.add_products').fadeOut();

				var id = $(this).attr('alt');
				$.post('php/pics.php',{ id: id },function(data){
					$('#picss').html(data);
				}); 

			});

$('.product-market-container2 #slide').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.pics').fadeIn();
					$('.add_products').fadeOut();

				var id = $(this).attr('alt');
				$.post('php/pics.php',{ id: id },function(data){
					$('#picss').html(data);
				}); 

			});

$(' #r_user').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.popup').fadeIn();
					$('.add_products').fadeOut();

				var id = $(this).attr('alt');
				$.post('php/report_user.php',{ id: id },function(data){
					$('#user_r').html(data);
				}); 

			});





			$('.icon #comment').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.comment_sec').fadeIn();
					$('.add_products').fadeOut();

				var id2 = $(this).attr('value');
				$.post('php/comments.php',{ id2: id2 },function(data){
					$('#jafhioasbfaskldhasd').html(data);
				}); 

			});


			$('.icon #interested').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.popup').fadeIn();
					$('.add_products').fadeOut();

				var id2 = $(this).attr('alt');
				$.post('php/interested.php',{ id2: id2 },function(data){
					$('#user_r').html(data);
				}); 

			});

	

			$('.icon #likes').click(function(){
					

				var id4 = $(this).attr('value');
				$.post('php/count.php',{ id4: id4 },function(data){
					if(data=='yes'){
				
				alert('you like this post');
                $('.content').load('php/marketplace.php');
		
			} else {	
				alert(data);
			}

				}); 

			});
			  $('#change_pass').click(function(){
            //$('.content').load('../php/admin/category/products.php

            var id = $(this).attr('alt');
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').attr('class', 'content animated fadeInDown');
                    $('.content').fadeIn('slow',function(){
                         $('.content').load('php/c_pass.php');
                    });
            });

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_activity_log').find('.icon').removeClass('active');
            $('#a_activity_log').find('.name').removeClass('active2');
            $('#a_marketplace').find('.icon').removeClass('active');
            $('#a_marketplace').find('.name').removeClass('active2');
            $('#a_trends').find('.icon').removeClass('active');
            $('#a_trends').find('.name').removeClass('active2');
            $('#a_messages').find('.icon').removeClass('active');
            $('#a_messages').find('.name').removeClass('active2');
            $('#a_accounts').find('.icon').removeClass('active');
            $('#a_accounts').find('.name').removeClass('active2');


                    $('.add_products').fadeOut("fast",function(){
                            $('.container').animate({'opacity': '1'});
                            $('.content').css({'opacity': '1'});
                            $('.sidebar').css({'opacity': '1'});
                            $('.header').css({'opacity': '1'});
                    });
                
    });
  $('.fils .cats').click(function(){
            //$('.content').load('../php/admin/category/products.php

            var c = $(this).attr('id');
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').attr('class', 'content animated fadeInDown');
                    $('.content').fadeIn('slow',function(){
                         $('.content').load('php/marketplace.php?c=' + c);
                    });
            });

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_activity_log').find('.icon').removeClass('active');
            $('#a_activity_log').find('.name').removeClass('active2');
            $('#a_marketplace').find('.icon').removeClass('active');
            $('#a_marketplace').find('.name').removeClass('active2');
            $('#a_trends').find('.icon').removeClass('active');
            $('#a_trends').find('.name').removeClass('active2');
            $('#a_messages').find('.icon').removeClass('active');
            $('#a_messages').find('.name').removeClass('active2');
            $('#a_accounts').find('.icon').removeClass('active');
            $('#a_accounts').find('.name').removeClass('active2');


                    $('.add_products').fadeOut("fast",function(){
                            $('.container').animate({'opacity': '1'});
                            $('.content').css({'opacity': '1'});
                            $('.sidebar').css({'opacity': '1'});
                            $('.header').css({'opacity': '1'});
                    });
                
    });


			  $('#terms').click(function(){
            //$('.content').load('../php/admin/category/products.php

            
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').attr('class', 'content animated fadeInDown');
                    $('.content').fadeIn('slow',function(){
                         $('.content').load('php/terms.php');
                    });
            });

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_activity_log').find('.icon').removeClass('active');
            $('#a_activity_log').find('.name').removeClass('active2');
            $('#a_marketplace').find('.icon').removeClass('active');
            $('#a_marketplace').find('.name').removeClass('active2');
            $('#a_trends').find('.icon').removeClass('active');
            $('#a_trends').find('.name').removeClass('active2');
            $('#a_messages').find('.icon').removeClass('active');
            $('#a_messages').find('.name').removeClass('active2');
            $('#a_accounts').find('.icon').removeClass('active');
            $('#a_accounts').find('.name').removeClass('active2');


                    $('.add_products').fadeOut("fast",function(){
                            $('.container').animate({'opacity': '1'});
                            $('.content').css({'opacity': '1'});
                            $('.sidebar').css({'opacity': '1'});
                            $('.header').css({'opacity': '1'});
                    });
                
    });
 $('#fl').click(function(){
            //$('.content').load('../php/admin/category/products.php

            
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').attr('class', 'content animated fadeInDown');
                    $('.content').fadeIn('slow',function(){
                         $('.content').load('php/fl.php');
                    });
            });

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_activity_log').find('.icon').removeClass('active');
            $('#a_activity_log').find('.name').removeClass('active2');
            $('#a_marketplace').find('.icon').removeClass('active');
            $('#a_marketplace').find('.name').removeClass('active2');
            $('#a_trends').find('.icon').removeClass('active');
            $('#a_trends').find('.name').removeClass('active2');
            $('#a_messages').find('.icon').removeClass('active');
            $('#a_messages').find('.name').removeClass('active2');
            $('#a_accounts').find('.icon').removeClass('active');
            $('#a_accounts').find('.name').removeClass('active2');


                    $('.add_products').fadeOut("fast",function(){
                            $('.container').animate({'opacity': '1'});
                            $('.content').css({'opacity': '1'});
                            $('.sidebar').css({'opacity': '1'});
                            $('.header').css({'opacity': '1'});
                    });
                
    });

			   $('#views').click(function(){
            //$('.content').load('../php/admin/category/products.php

            
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').attr('class', 'content animated fadeInDown');
                    $('.content').fadeIn('slow',function(){
                         $('.content').load('php/top_viewers_u.php');
                    });
            });

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_activity_log').find('.icon').removeClass('active');
            $('#a_activity_log').find('.name').removeClass('active2');
            $('#a_marketplace').find('.icon').removeClass('active');
            $('#a_marketplace').find('.name').removeClass('active2');
            $('#a_trends').find('.icon').removeClass('active');
            $('#a_trends').find('.name').removeClass('active2');
            $('#a_messages').find('.icon').removeClass('active');
            $('#a_messages').find('.name').removeClass('active2');
            $('#a_accounts').find('.icon').removeClass('active');
            $('#a_accounts').find('.name').removeClass('active2');


                    $('.add_products').fadeOut("fast",function(){
                            $('.container').animate({'opacity': '1'});
                            $('.content').css({'opacity': '1'});
                            $('.sidebar').css({'opacity': '1'});
                            $('.header').css({'opacity': '1'});
                    });
                
    });

				$('.market .tname').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.users_info').fadeIn();
					$('.add_products').fadeOut();

				var id3 = $(this).attr('alt');
				$.post('php/users_info.php',{ id3: id3 },function(data){
					$('.info').html(data);
				}); 

			});

				$('#ttname').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.users_info').fadeIn();
					$('.add_products').fadeOut();

				var id3 = $(this).attr('alt');
				$.post('php/users_info.php',{ id3: id3 },function(data){
					$('.info').html(data);
				}); 

			});


					$('.item .tname').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.users_info').fadeIn();
					$('.add_products').fadeOut();

				var id3 = $(this).attr('alt');

				$.post('php/users_info.php',{ id3: id3 },function(data){
					$('.info').html(data);
				}); 

			});
						$('.notifications-box #userasa').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.popup').fadeIn();
					$('.add_products').fadeOut();

					var id = $(this).attr('alt');
					
				$.post('php/accept.php',{ id: id },function(data){
					$('#user_r').html(data);
				}); 

			});

						$('.notifications-box #userasss').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.comment_sec').fadeIn();
					$('.add_products').fadeOut();

				var id2 = $(this).attr('alt');
				$.post('php/comments.php',{ id2: id2 },function(data){
					$('#jafhioasbfaskldhasd').html(data);
				}); 

			});

					
		

			//add product popup
			$('#add').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.add_products').fadeIn();
					$('.add_products2').fadeOut();
			});
			$('#addsss').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.add_inqueries').fadeIn();
					$('.add_products2').fadeOut();
			});

				$('#addvid').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.add_vid').fadeIn();
					$('.add_products2').fadeOut();
			});


			//	
			$('#up_user').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.popup').fadeIn();
					// $('.add_products').fadeout();
						var id2 = $(this).attr('alt');
				$.post('php/update_choose.php',{ id2: id2 },function(data){
					$('#user_r').html(data);
				}); 
			
			});

				$('.popup2 #update_user_p').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.add_products2').fadeIn();
					$('.popup').fadeOut();

				var id = $(this).attr('alt');
				$.post('php/update_user_p.php',{ id: id },function(data){
					$('#ccc').html(data);
				}); 

			});

					$('.popup2 #update_user').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.add_products2').fadeIn();
					$('.popup').fadeOut();

				var id = $(this).attr('alt');
				$.post('php/update_user.php',{ id: id },function(data){
					$('#ccc').html(data);
				}); 

			});

			// $('.delete').click(function(){
			// 		$('.container').animate({'opacity': '0.4'});
			// 		$('.content').animate({'opacity': '0.4'});
			// 		$('.sidebar').animate({'opacity': '0.4'});
			// 		$('.header').animate({'opacity': '0.4'});
			// 		$('.popup').fadeIn();
			// 		$('.add_products').fadeout();
					
			
			// });

			


			//hide add product
			$('.header-title span i').click(function(){
					$('.add_products').fadeOut("fast",function(){
					  	$('.container').animate({'opacity': '1'});
							$('.content').css({'opacity': '1'});
							$('.sidebar').css({'opacity': '1'});
							$('.header').css({'opacity': '1'});
					});
					$('.add_products2').fadeOut("fast",function(){
					  	$('.container').animate({'opacity': '1'});
							$('.content').css({'opacity': '1'});
							$('.sidebar').css({'opacity': '1'});
							$('.header').css({'opacity': '1'});
					});
					$('.add_inqueries').fadeOut("fast",function(){
					  	$('.container').animate({'opacity': '1'});
							$('.content').css({'opacity': '1'});
							$('.sidebar').css({'opacity': '1'});
							$('.header').css({'opacity': '1'});
					});
					$('.popup').fadeOut("fast",function(){
							$('.container').animate({'opacity': '1'});
							$('.content').css({'opacity': '1'});
							$('.sidebar').css({'opacity': '1'});
							$('.header').css({'opacity': '1'});
					});

					$('.add_vid').fadeOut("fast",function(){
							$('.container').animate({'opacity': '1'});
							$('.content').css({'opacity': '1'});
							$('.sidebar').css({'opacity': '1'});
							$('.header').css({'opacity': '1'});
					});
					$('.pics').fadeOut("fast",function(){
							$('.container').animate({'opacity': '1'});
							$('.content').css({'opacity': '1'});
							$('.sidebar').css({'opacity': '1'});
							$('.header').css({'opacity': '1'});
					});
						$('.update_info').fadeOut("fast",function(){
							$('.container').animate({'opacity': '1'});
							$('.content').css({'opacity': '1'});
							$('.sidebar').css({'opacity': '1'});
							$('.header').css({'opacity': '1'});
					});
						$('.comment_sec').fadeOut("fast",function(){
							$('.container').animate({'opacity': '1'});
							$('.content').css({'opacity': '1'});
							$('.sidebar').css({'opacity': '1'});
							$('.header').css({'opacity': '1'});
					});
						$('.users_info').fadeOut("fast",function(){
							$('.container').animate({'opacity': '1'});
							$('.content').css({'opacity': '1'});
							$('.sidebar').css({'opacity': '1'});
							$('.header').css({'opacity': '1'});
					});
						$('.chat').fadeOut("fast",function(){
					  	$('.container').animate({'opacity': '1'});
							$('.content').css({'opacity': '1'});
							$('.sidebar').css({'opacity': '1'});
							$('.header').css({'opacity': '1'});
					});
						$('.add_photoss').fadeOut("fast",function(){
							$('.container').animate({'opacity': '1'});
							$('.content').css({'opacity': '1'});
							$('.sidebar').css({'opacity': '1'});
							$('.header').css({'opacity': '1'});
					});

			});
			//image upload
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


				$('#filter').change(function(){
						var cat = $(this).val();
						if(cat==='buyer'){
								
								$('.product-market-container #seller').hide();
								setTimeout(function(){
									$('.product-market-container #buyer').fadeIn();
								},500);
						}
						if(cat==='seller'){
								$('.product-market-container #buyer').hide();
								
								
								setTimeout(function(){
									$('.product-market-container #seller').fadeIn();
								},500);
						}
							if(cat==='All'){
								$('.product-market-container #seller').fadeIn();
								$('.product-market-container #buyer').fadeIn();
								
						}


				});



				$('#filter2').change(function(){
						var cat2 = $(this).val();
						if(cat2==='trends'){
								
								$('.product-container2 #events').hide();
								setTimeout(function(){
									$('.product-container2 #trends').fadeIn();
								},500);
						}
						if(cat2==='events'){
								$('.product-container2 #trends').hide();
								
								
								setTimeout(function(){
									$('.product-container2 #events').fadeIn();
								},500);
						}
							if(cat2==='All'){
								$('.product-container2 #events').fadeIn();
								$('.product-container2 #trends').fadeIn();
								
						}


				});


});


$(document).keyup(function(e) {
if (e.keyCode == 27) {
		$('.add_products').fadeOut("fast",function(){
				$('.container').animate({'opacity': '1'});
				$('.content').css({'opacity': '1'});
				$('.sidebar').css({'opacity': '1'});
				$('.header').css({'opacity': '1'});
		});
		$('.popup').fadeOut("fast",function(){
		  	$('.container').animate({'opacity': '1'});
			  $('.content').css({'opacity': '1'});
		  	$('.sidebar').css({'opacity': '1'});
		  	$('.header').css({'opacity': '1'});
		});
		$('.popup').fadeOut("fast",function(){
				$('.container').animate({'opacity': '1'});
				$('.content').css({'opacity': '1'});
				$('.sidebar').css({'opacity': '1'});
				$('.header').css({'opacity': '1'});
		});
		$('.users_info').fadeOut("fast",function(){
				$('.container').animate({'opacity': '1'});
				$('.content').css({'opacity': '1'});
				$('.sidebar').css({'opacity': '1'});
				$('.header').css({'opacity': '1'});
		});

}
});


// $('#searchr').keypress(function(e) {
//     if(e.which == 13) {
//         var s = $(this).val();
//         document.location.href = 'home.php?q='+s;
//     }
// });