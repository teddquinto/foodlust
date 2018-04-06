$(function(){
                        
        		// $('.content').load('php/home.php');

          //   $(this).find('.icon').attr('class', 'icon active');
          //   $(this).find('.name').attr('class', 'name active2');
          //   $('#a_products').find('.icon').removeClass('active');
          //   $('#a_products').find('.name').removeClass('active2');
          //   $('#a_marketplace').find('.icon').removeClass('active');
          //   $('#a_marketplace').find('.name').removeClass('active2');
          //   $('#a_trends').find('.icon').removeClass('active');
          //   $('#a_trends').find('.name').removeClass('active2');
          //   $('#a_messages').find('.icon').removeClass('active');
          //   $('#a_messages').find('.name').removeClass('active2');
          //   $('#a_accounts').find('.icon').removeClass('active');
          //   $('#a_accounts').find('.name').removeClass('active2');


          //   		$('.add_products').fadeOut("fast",function(){
          //   				$('.container').animate({'opacity': '1'});
          //   				$('.content').css({'opacity': '1'});
          //   				$('.sidebar').css({'opacity': '1'});
          //   				$('.header').css({'opacity': '1'});
          //   		});
          //   		$('.popup').fadeOut("fast",function(){
          //   		  	$('.container').animate({'opacity': '1'});
          //   			  $('.content').css({'opacity': '1'});
          //   		  	$('.sidebar').css({'opacity': '1'});
          //   		  	$('.header').css({'opacity': '1'});
          //   		});
          //   		$('.add_products2').fadeOut("fast",function(){
          //   				$('.container').animate({'opacity': '1'});
          //   				$('.content').css({'opacity': '1'});
          //   				$('.sidebar').css({'opacity': '1'});
          //   				$('.header').css({'opacity': '1'});
          //   		});

    $('#a_information').click(function(){

      			//$('.content').load('../php/admin/category/information.php');
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').fadeIn('slow',function(){
                    $('.content').load('php/home.php');
                });
            });

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
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
            $('#a_notifs').find('.icon').removeClass('active');
            $('#a_notifs').find('.name').removeClass('active2');

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

    });
 $('#cssmenu #settings').click(function(){

                //$('.content').load('../php/admin/category/information.php');
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').fadeIn('slow',function(){
                    $('.content').load('php/settings.php');
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
            $('#a_notifs').find('.icon').removeClass('active');
            $('#a_notifs').find('.name').removeClass('active2');

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

    });

    $('#a_products').click(function(){
            //$('.content').load('../php/admin/category/products.php
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').attr('class', 'content animated fadeInDown');
                    $('.content').fadeIn('slow',function(){
                        $('.content').load('php/products.php');
                    });
            });

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_information').find('.icon').removeClass('active');
            $('#a_information').find('.name').removeClass('active2');
            $('#a_marketplace').find('.icon').removeClass('active');
            $('#a_marketplace').find('.name').removeClass('active2');
            $('#a_trends').find('.icon').removeClass('active');
            $('#a_trends').find('.name').removeClass('active2');
            $('#a_messages').find('.icon').removeClass('active');
            $('#a_messages').find('.name').removeClass('active2');
            $('#a_accounts').find('.icon').removeClass('active');
            $('#a_accounts').find('.name').removeClass('active2');
            $('#a_notifs').find('.icon').removeClass('active');
            $('#a_notifs').find('.name').removeClass('active2');

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

    });
    $('#a_marketplace').click(function(){
      			$('.content').load('php/f_mplace.php');

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_products').find('.icon').removeClass('active');
            $('#a_products').find('.name').removeClass('active2');
            $('#a_information').find('.icon').removeClass('active');
            $('#a_information').find('.name').removeClass('active2');
            $('#a_trends').find('.icon').removeClass('active');
            $('#a_trends').find('.name').removeClass('active2');
            $('#a_messages').find('.icon').removeClass('active');
            $('#a_messages').find('.name').removeClass('active2');
            $('#a_accounts').find('.icon').removeClass('active');
            $('#a_accounts').find('.name').removeClass('active2');
            $('#a_notifs').find('.icon').removeClass('active');
            $('#a_notifs').find('.name').removeClass('active2');

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

    });
    $('#a_trends').click(function(){
      			$('.content').load('php/trends.php');

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_information').find('.icon').removeClass('active');
            $('#a_information').find('.name').removeClass('active2');
            $('#a_marketplace').find('.icon').removeClass('active');
            $('#a_marketplace').find('.name').removeClass('active2');
            $('#a_products').find('.icon').removeClass('active');
            $('#a_products').find('.name').removeClass('active2');
            $('#a_messages').find('.icon').removeClass('active');
            $('#a_messages').find('.name').removeClass('active2');
            $('#a_accounts').find('.icon').removeClass('active');
            $('#a_accounts').find('.name').removeClass('active2');
            $('#a_notifs').find('.icon').removeClass('active');
            $('#a_notifs').find('.name').removeClass('active2');

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

    });
    $('#a_messages').click(function(){
            $('.content').load('php/users.php');

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_information').find('.icon').removeClass('active');
            $('#a_information').find('.name').removeClass('active2');
            $('#a_marketplace').find('.icon').removeClass('active');
            $('#a_marketplace').find('.name').removeClass('active2');
            $('#a_trends').find('.icon').removeClass('active');
            $('#a_trends').find('.name').removeClass('active2');
            $('#a_products').find('.icon').removeClass('active');
            $('#a_products').find('.name').removeClass('active2');
            $('#a_accounts').find('.icon').removeClass('active');
            $('#a_accounts').find('.name').removeClass('active2');
            $('#a_notifs').find('.icon').removeClass('active');
            $('#a_notifs').find('.name').removeClass('active2');

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

    });
    $('#a_accounts').click(function(){
      			$('.content').load('php/add_products.php');

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_information').find('.icon').removeClass('active');
            $('#a_information').find('.name').removeClass('active2');
            $('#a_marketplace').find('.icon').removeClass('active');
            $('#a_marketplace').find('.name').removeClass('active2');
            $('#a_trends').find('.icon').removeClass('active');
            $('#a_trends').find('.name').removeClass('active2');
            $('#a_messages').find('.icon').removeClass('active');
            $('#a_messages').find('.name').removeClass('active2');
            $('#a_products').find('.icon').removeClass('active');
            $('#a_products').find('.name').removeClass('active2');
             $('#a_notifs').find('.icon').removeClass('active');
            $('#a_notifs').find('.name').removeClass('active2');


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

    });

     $('#a_notifs').click(function(){
                $('.content').load('php/notifications.php');

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_information').find('.icon').removeClass('active');
            $('#a_information').find('.name').removeClass('active2');
            $('#a_marketplace').find('.icon').removeClass('active');
            $('#a_marketplace').find('.name').removeClass('active2');
            $('#a_trends').find('.icon').removeClass('active');
            $('#a_trends').find('.name').removeClass('active2');
            $('#a_messages').find('.icon').removeClass('active');
            $('#a_messages').find('.name').removeClass('active2');
            $('#a_products').find('.icon').removeClass('active');
            $('#a_products').find('.name').removeClass('active2');
            $('#a_accounts').find('.icon').removeClass('active');
            $('#a_accounts').find('.name').removeClass('active2');
            $('#a_notifs2').find('.icon').removeClass('active');
            $('#a_notifs2').find('.name').removeClass('active2');

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

    });





 $('#a_information2').click(function(){

                //$('.content').load('../php/admin/category/information.php');
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').fadeIn('slow',function(){
                    $('.content').load('php/home.php');
                });
            });

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_products2').find('.icon').removeClass('active');
            $('#a_products2').find('.name').removeClass('active2');
            $('#a_marketplace2').find('.icon').removeClass('active');
            $('#a_marketplace2').find('.name').removeClass('active2');
            $('#a_trends2').find('.icon').removeClass('active');
            $('#a_trends2').find('.name').removeClass('active2');
            $('#a_messages2').find('.icon').removeClass('active');
            $('#a_messages2').find('.name').removeClass('active2');
            $('#a_accounts2').find('.icon').removeClass('active');
            $('#a_accounts2').find('.name').removeClass('active2');
            $('#a_notifs2').find('.icon').removeClass('active');
            $('#a_notifs2').find('.name').removeClass('active2');

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

    });
    $('#a_products2').click(function(){
            //$('.content').load('../php/admin/category/products.php
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').attr('class', 'content animated fadeInDown');
                    $('.content').fadeIn('slow',function(){
                        $('.content').load('php/products.php');
                    });
            });

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_information2').find('.icon').removeClass('active');
            $('#a_information2').find('.name').removeClass('active2');
            $('#a_marketplace2').find('.icon').removeClass('active');
            $('#a_marketplace2').find('.name').removeClass('active2');
            $('#a_trends2').find('.icon').removeClass('active');
            $('#a_trends2').find('.name').removeClass('active2');
            $('#a_messages2').find('.icon').removeClass('active');
            $('#a_messages2').find('.name').removeClass('active2');
            $('#a_accounts2').find('.icon').removeClass('active');
            $('#a_accounts2').find('.name').removeClass('active2');
            $('#a_notifs2').find('.icon').removeClass('active');
            $('#a_notifs2').find('.name').removeClass('active2');

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

    });
    $('#a_marketplace2').click(function(){
                $('.content').load('php/f_mplace.php');

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_products2').find('.icon').removeClass('active');
            $('#a_products2').find('.name').removeClass('active2');
            $('#a_information2').find('.icon').removeClass('active');
            $('#a_information2').find('.name').removeClass('active2');
            $('#a_trends2').find('.icon').removeClass('active');
            $('#a_trends2').find('.name').removeClass('active2');
            $('#a_messages2').find('.icon').removeClass('active');
            $('#a_messages2').find('.name').removeClass('active2');
            $('#a_accounts2').find('.icon').removeClass('active');
            $('#a_accounts2').find('.name').removeClass('active2');
            $('#a_notifs2').find('.icon').removeClass('active');
            $('#a_notifs2').find('.name').removeClass('active2');

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

    });
    $('#a_trends2').click(function(){
                $('.content').load('php/trends.php');

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_information2').find('.icon').removeClass('active');
            $('#a_information2').find('.name').removeClass('active2');
            $('#a_marketplace2').find('.icon').removeClass('active');
            $('#a_marketplace2').find('.name').removeClass('active2');
            $('#a_products2').find('.icon').removeClass('active');
            $('#a_products2').find('.name').removeClass('active2');
            $('#a_messages2').find('.icon').removeClass('active');
            $('#a_messages2').find('.name').removeClass('active2');
            $('#a_accounts2').find('.icon').removeClass('active');
            $('#a_accounts2').find('.name').removeClass('active2');
            $('#a_notifs2').find('.icon').removeClass('active');
            $('#a_notifs2').find('.name').removeClass('active2');

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

    });
    $('#a_messages2').click(function(){
            $('.content').load('php/users.php');

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_information2').find('.icon').removeClass('active');
            $('#a_information2').find('.name').removeClass('active2');
            $('#a_marketplace2').find('.icon').removeClass('active');
            $('#a_marketplace2').find('.name').removeClass('active2');
            $('#a_trends2').find('.icon').removeClass('active');
            $('#a_trends2').find('.name').removeClass('active2');
            $('#a_products2').find('.icon').removeClass('active');
            $('#a_products2').find('.name').removeClass('active2');
            $('#a_accounts2').find('.icon').removeClass('active');
            $('#a_accounts2').find('.name').removeClass('active2');
            $('#a_notifs2').find('.icon').removeClass('active');
            $('#a_notifs2').find('.name').removeClass('active2');

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

    });
    $('#a_accounts2').click(function(){
                $('.content').load('php/add_products.php');

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_information2').find('.icon').removeClass('active');
            $('#a_information2').find('.name').removeClass('active2');
            $('#a_marketplace2').find('.icon').removeClass('active');
            $('#a_marketplace2').find('.name').removeClass('active2');
            $('#a_trends2').find('.icon').removeClass('active');
            $('#a_trends2').find('.name').removeClass('active2');
            $('#a_messages2').find('.icon').removeClass('active');
            $('#a_messages2').find('.name').removeClass('active2');
            $('#a_products2').find('.icon').removeClass('active');
            $('#a_products2').find('.name').removeClass('active2');
            $('#a_notifs2').find('.icon').removeClass('active');
            $('#a_notifs2').find('.name').removeClass('active2');

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

    });

      $('#a_notifs2').click(function(){
                $('.content').load('php/notifications.php');

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_information2').find('.icon').removeClass('active');
            $('#a_information2').find('.name').removeClass('active2');
            $('#a_marketplace2').find('.icon').removeClass('active');
            $('#a_marketplace2').find('.name').removeClass('active2');
            $('#a_trends2').find('.icon').removeClass('active');
            $('#a_trends2').find('.name').removeClass('active2');
            $('#a_messages2').find('.icon').removeClass('active');
            $('#a_messages2').find('.name').removeClass('active2');
            $('#a_products2').find('.icon').removeClass('active');
            $('#a_products2').find('.name').removeClass('active2');
            $('#a_accounts2').find('.icon').removeClass('active');
            $('#a_accounts2').find('.name').removeClass('active2');


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

    });

});
