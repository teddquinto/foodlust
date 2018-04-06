$(function(){

					//content
					//var height = $(window).height();
					//$('.content').css({'height': height});


					$('.notifications-box #useras').click(function(){
						var id0 = $(this).attr('alt');
						var id00 = $(this).attr('value');
					 $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').fadeIn('fast',function(){
                    $('.content').load('php/product_likes.php?id='+id0+'&u_id='+id00);
                });
            });
					 $('#a_products').find('.icon').removeClass('active');
            $('#a_products').find('.name').removeClass('active2');
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
            		$('.popup').fadeOut("fast",function(){
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

    });

                    $('.user_r .popup2 #viewed').click(function(){
                        var id = $(this).attr('alt');
                    
                     $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                 $('.content').css({'opacity': '1'});
                $('.content').fadeIn('fast',function(){
                    $('.content').load('php/users_info2.php?id='+id);
                });
            });
                     $('#a_products').find('.icon').removeClass('active');
            $('#a_products').find('.name').removeClass('active2');
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
                    $('.popup').fadeOut("fast",function(){
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

    });
				// 	$('.usersss #user').click(function(){
				// 		var id5 = $(this).attr('value');
				// 	 $('.content').fadeOut('3000',function(){
    //             $('.content').html(' ');
    //             $('.content').css({'opacity': '1'});
    //             $('.content').fadeIn('fast',function(){
    //                 $('.content').load('php/messages.php?id='+id5);
    //             });
    //         });
				// 	 $('#a_products').find('.icon').removeClass('active');
    //         $('#a_products').find('.name').removeClass('active2');
    //         $('#a_marketplace').find('.icon').removeClass('active');
    //         $('#a_marketplace').find('.name').removeClass('active2');
    //         $('#a_trends').find('.icon').removeClass('active');
    //         $('#a_trends').find('.name').removeClass('active2');
    //         $('#a_messages').find('.icon').removeClass('active');
    //         $('#a_messages').find('.name').removeClass('active2');
    //         $('#a_accounts').find('.icon').removeClass('active');
    //         $('#a_accounts').find('.name').removeClass('active2');

           
            
    //         		$('.add_products').fadeOut("fast",function(){
    //         				$('.container').animate({'opacity': '1'});
    //         				$('.content').css({'opacity': '1'});
    //         				$('.sidebar').css({'opacity': '1'});
    //         				$('.header').css({'opacity': '1'});
    //         		});
    //         		$('.popup').fadeOut("fast",function(){
    //         		  	$('.container').animate({'opacity': '1'});
    //         			  $('.content').css({'opacity': '1'});
    //         		  	$('.sidebar').css({'opacity': '1'});
    //         		  	$('.header').css({'opacity': '1'});
    //         		});
    //         		$('.add_products2').fadeOut("fast",function(){
    //         				$('.container').animate({'opacity': '1'});
    //         				$('.content').css({'opacity': '1'});
    //         				$('.sidebar').css({'opacity': '1'});
    //         				$('.header').css({'opacity': '1'});
    //         		});
    //         		$('.users_info').fadeOut("fast",function(){
    //         				$('.container').animate({'opacity': '1'});
    //         				$('.content').css({'opacity': '1'});
    //         				$('.sidebar').css({'opacity': '1'});
    //         				$('.header').css({'opacity': '1'});
    //         		});

    //         		$('.chat').fadeOut("fast",function(){
				// 	  	$('.container').animate({'opacity': '1'});
				// 			$('.content').css({'opacity': '1'});
				// 			$('.sidebar').css({'opacity': '1'});
				// 			$('.header').css({'opacity': '1'});
				// 	});

    // });
					$('.usersss #user_pic').click(function(){
						var idd = $(this).attr('alt');
					 $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').css({'opacity': '1'});
                $('.content').fadeIn('fast',function(){
                    $('.content').load('php/users_info2.php?id='+idd);
                });
            });
					 $('#a_products').find('.icon').removeClass('active');
            $('#a_products').find('.name').removeClass('active2');
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
            		$('.popup').fadeOut("fast",function(){
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

    });


				// 	$('.message-box .message-bar #user').click(function(){
				// 		var id4 = $(this).attr('alt');
				// 	 $('.content').fadeOut('3000',function(){
    //             $('.content').html(' ');
    //             $('.content').fadeIn('slow',function(){
    //                 $('.content').load('php/messages.php?id='+id4);
    //             });
    //         });

           
    //         $('#a_products').find('.icon').removeClass('active');
    //         $('#a_products').find('.name').removeClass('active2');
    //         $('#a_marketplace').find('.icon').removeClass('active');
    //         $('#a_marketplace').find('.name').removeClass('active2');
    //         $('#a_trends').find('.icon').removeClass('active');
    //         $('#a_trends').find('.name').removeClass('active2');
    //         $('#a_messages').find('.icon').removeClass('active');
    //         $('#a_messages').find('.name').removeClass('active2');
    //         $('#a_accounts').find('.icon').removeClass('active');
    //         $('#a_accounts').find('.name').removeClass('active2');


    //         		$('.add_products').fadeOut("fast",function(){
    //         				$('.container').animate({'opacity': '1'});
    //         				$('.content').css({'opacity': '1'});
    //         				$('.sidebar').css({'opacity': '1'});
    //         				$('.header').css({'opacity': '1'});
    //         		});
    //         		$('.popup').fadeOut("fast",function(){
    //         		  	$('.container').animate({'opacity': '1'});
    //         			  $('.content').css({'opacity': '1'});
    //         		  	$('.sidebar').css({'opacity': '1'});
    //         		  	$('.header').css({'opacity': '1'});
    //         		});
    //         		$('.add_products2').fadeOut("fast",function(){
    //         				$('.container').animate({'opacity': '1'});
    //         				$('.content').css({'opacity': '1'});
    //         				$('.sidebar').css({'opacity': '1'});
    //         				$('.header').css({'opacity': '1'});
    //         		});

    //         		$('.users_info').fadeOut("fast",function(){
				// 			$('.container').animate({'opacity': '1'});
				// 			$('.content').css({'opacity': '1'});
				// 			$('.sidebar').css({'opacity': '1'});
				// 			$('.header').css({'opacity': '1'});
				// 	});
				// 		$('.chat').fadeOut("fast",function(){
				// 	  	$('.container').animate({'opacity': '1'});
				// 			$('.content').css({'opacity': '1'});
				// 			$('.sidebar').css({'opacity': '1'});
				// 			$('.header').css({'opacity': '1'});
				// 	});
    // });


});


