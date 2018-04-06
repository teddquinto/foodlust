$(function(){
                        
        		$('.content').load('php/activity_log.php');

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_users').find('.icon').removeClass('active');
            $('#a_users').find('.name').removeClass('active2');
            $('#a_marketplace').find('.icon').removeClass('active');
            $('#a_marketplace').find('.name').removeClass('active2');
            $('#a_trends').find('.icon').removeClass('active');
            $('#a_trends').find('.name').removeClass('active2');
            $('#a_messages').find('.icon').removeClass('active');
            $('#a_messages').find('.name').removeClass('active2');
            $('#a_notif').find('.icon').removeClass('active');
            $('#a_notif').find('.name').removeClass('active2');


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

    $('#a_activitylog').click(function(){

      			//$('.content').load('../php/admin/category/activity_log.php');
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').fadeIn('slow',function(){
                    $('.content').load('php/activity_log.php');
                });
            });

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_users').find('.icon').removeClass('active');
            $('#a_users').find('.name').removeClass('active2');
            $('#a_marketplace').find('.icon').removeClass('active');
            $('#a_marketplace').find('.name').removeClass('active2');
            $('#a_trends').find('.icon').removeClass('active');
            $('#a_trends').find('.name').removeClass('active2');
            $('#a_messages').find('.icon').removeClass('active');
            $('#a_messages').find('.name').removeClass('active2');
            $('#a_notif').find('.icon').removeClass('active');
            $('#a_notif').find('.name').removeClass('active2');


            		$('.add_products').fadeOut("fast",function(){
            				$('.container').animate({'opacity': '1'});
            				$('.content').css({'opacity': '1'});
            				$('.sidebar').css({'opacity': '1'});
            				$('.header').css({'opacity': '1'});
            		});
            	
    });
    $('#a_users').click(function(){
            //$('.content').load('../php/admin/category/products.php
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').attr('class', 'content animated fadeInDown');
                    $('.content').fadeIn('slow',function(){
                         $('.content').load('php/users.php');
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
            $('#a_notif').find('.icon').removeClass('active');
            $('#a_notif').find('.name').removeClass('active2');


            		$('.add_products').fadeOut("fast",function(){
            				$('.container').animate({'opacity': '1'});
            				$('.content').css({'opacity': '1'});
            				$('.sidebar').css({'opacity': '1'});
            				$('.header').css({'opacity': '1'});
            		});
            	
    });

   
    $('#a_marketplace').click(function(){
      			 $('.content').load('php/marketplace.php');

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_users').find('.icon').removeClass('active');
            $('#a_users').find('.name').removeClass('active2');
            $('#a_activity_log').find('.icon').removeClass('active');
            $('#a_activity_log').find('.name').removeClass('active2');
            $('#a_trends').find('.icon').removeClass('active');
            $('#a_trends').find('.name').removeClass('active2');
            $('#a_messages').find('.icon').removeClass('active');
            $('#a_messages').find('.name').removeClass('active2');
            $('#a_notif').find('.icon').removeClass('active');
            $('#a_notif').find('.name').removeClass('active2');


            		$('.add_products').fadeOut("fast",function(){
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
            $('#a_activity_log').find('.icon').removeClass('active');
            $('#a_activity_log').find('.name').removeClass('active2');
            $('#a_marketplace').find('.icon').removeClass('active');
            $('#a_marketplace').find('.name').removeClass('active2');
            $('#a_users').find('.icon').removeClass('active');
            $('#a_users').find('.name').removeClass('active2');
            $('#a_messages').find('.icon').removeClass('active');
            $('#a_messages').find('.name').removeClass('active2');
            $('#a_notif').find('.icon').removeClass('active');
            $('#a_notif').find('.name').removeClass('active2');


            		$('.add_products').fadeOut("fast",function(){
            				$('.container').animate({'opacity': '1'});
            				$('.content').css({'opacity': '1'});
            				$('.sidebar').css({'opacity': '1'});
            				$('.header').css({'opacity': '1'});
            		});
            	
    });

    $('#a_messages').click(function(){
            $('.content').load('php/messages.php');

            $(this).find('.icon').attr('class', 'icon active');
            $(this).find('.name').attr('class', 'name active2');
            $('#a_activity_log').find('.icon').removeClass('active');
            $('#a_activity_log').find('.name').removeClass('active2');
            $('#a_marketplace').find('.icon').removeClass('active');
            $('#a_marketplace').find('.name').removeClass('active2');
            $('#a_trends').find('.icon').removeClass('active');
            $('#a_trends').find('.name').removeClass('active2');
            $('#a_users').find('.icon').removeClass('active');
            $('#a_users').find('.name').removeClass('active2');
            $('#a_notif').find('.icon').removeClass('active');
            $('#a_notif').find('.name').removeClass('active2');


            		$('.add_products').fadeOut("fast",function(){
            				$('.container').animate({'opacity': '1'});
            				$('.content').css({'opacity': '1'});
            				$('.sidebar').css({'opacity': '1'});
            				$('.header').css({'opacity': '1'});
            		});
            	
    });
    
    $('#a_notif').click(function(){
      			 $('.content').load('php/user_reported.php');

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
            $('#a_users').find('.icon').removeClass('active');
            $('#a_users').find('.name').removeClass('active2');


            		$('.add_products').fadeOut("fast",function(){
            				$('.container').animate({'opacity': '1'});
            				$('.content').css({'opacity': '1'});
            				$('.sidebar').css({'opacity': '1'});
            				$('.header').css({'opacity': '1'});
            		});
            	
    });


});
