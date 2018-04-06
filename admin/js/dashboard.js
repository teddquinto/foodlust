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
					$('#remove').click(function(){
						$('.container').css({'opacity': '0.1'});
						$('.popup').show();
					});
					$('.popup2 .cancel').click(function(){
						$('.popup').fadeOut("fast",function(){
							$('.container').animate({'opacity': '1'});
                            $('.content').css({'opacity': '1'});
                            $('.sidebar').css({'opacity': '1'});
                            $('.header').css({'opacity': '1'});
						});
					});

	// Sidebar mobile margin top
	setInterval(function(){
		$('.sidebar').css({'top': $('.header').height() });
	});
		 $('.notif-bar #date').click(function(){
            //$('.content').load('../php/admin/category/products.php

            var date = $(this).attr('alt');
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').attr('class', 'content animated fadeInDown');
                    $('.content').fadeIn('slow',function(){
                         $('.content').load('php/userss.php?d='+date);
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

 $(' #report').click(function(){
            //$('.content').load('../php/admin/category/products.php

            var id = $(this).attr('alt');
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').attr('class', 'content animated fadeInDown');
                    $('.content').fadeIn('slow',function(){
                         $('.content').load('php/report.php?id='+id);
                    });
            });
            });

  $(' #name').click(function(){
            //$('.content').load('../php/admin/category/products.php

            var id2 = $(this).attr('alt');
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').attr('class', 'content animated fadeInDown');
                    $('.content').fadeIn('slow',function(){
                         $('.content').load('php/users_info.php?id='+id2);
                    });
            });
            });

    $(' .users #products ').click(function(){
            //$('.content').load('../php/admin/category/products.php

            var id2 = $(this).attr('alt');
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').attr('class', 'content animated fadeInDown');
                    $('.content').fadeIn('slow',function(){
                         $('.content').load('php/prods.php?id='+id2);
                    });
            });
            });

     $(' .users #conv ').click(function(){
            //$('.content').load('../php/admin/category/products.php

            var id2 = $(this).attr('alt');
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').attr('class', 'content animated fadeInDown');
                    $('.content').fadeIn('slow',function(){
                         $('.content').load('php/user_tran.php?id='+id2);
                    });
            });
            });


 $(' .graph').click(function(){
            //$('.content').load('../php/admin/category/products.php

            var date2 = $(this).attr('alt');
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').attr('class', 'content animated fadeInDown');
                    $('.content').fadeIn('slow',function(){
                         $('.content').load('php/graph.php');
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


 $(' .graph2').click(function(){
            //$('.content').load('../php/admin/category/products.php

            var date2 = $(this).attr('alt');
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').attr('class', 'content animated fadeInDown');
                    $('.content').fadeIn('slow',function(){
                         $('.content').load('php/graph2.php');
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


  $(' #ac').click(function(){
            //$('.content').load('../php/admin/category/products.php

            var id = $(this).attr('alt');
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').attr('class', 'content animated fadeInDown');
                    $('.content').fadeIn('slow',function(){
                         $('.content').load('php/users_ac_log.php?id='+id);
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
   $(' .fil .table').click(function(){
            //$('.content').load('../php/admin/category/products.php

            var id = $(this).attr('alt');
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').attr('class', 'content animated fadeInDown');
                    $('.content').fadeIn('slow',function(){
                         $('.content').load('php/table.php?id='+id);
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
     $(' .fil .trends').click(function(){
            //$('.content').load('../php/admin/category/products.php

            var id = $(this).attr('alt');
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').attr('class', 'content animated fadeInDown');
                    $('.content').fadeIn('slow',function(){
                         $('.content').load('php/trends.php');
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
       $(' .fil .events').click(function(){
            //$('.content').load('../php/admin/category/products.php

            var id = $(this).attr('alt');
            $('.content').fadeOut('3000',function(){
                $('.content').html(' ');
                $('.content').attr('class', 'content animated fadeInDown');
                    $('.content').fadeIn('slow',function(){
                         $('.content').load('php/events.php');
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

			//update product
				$('.item #update-prod').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.add_products2').fadeIn();
					$('.add_products').fadeOut();

				var id = $(this).attr('value');
				$.post('php/update.php',{ id: id },function(data){
					$('#ccc').html(data);
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

			// 	$('.market .tname').click(function(){
			// 		$('.container').animate({'opacity': '0.4'});
			// 		$('.content').animate({'opacity': '0.4'});
			// 		$('.sidebar').animate({'opacity': '0.4'});
			// 		$('.header').animate({'opacity': '0.4'});
			// 		$('.users_info').fadeIn();
			// 		$('.add_products').fadeOut();

			// 	var id3 = $(this).attr('alt');
			// 	$.post('php/users_info.php',{ id3: id3 },function(data){
			// 		$('.info').html(data);
			// 	}); 

			// });


			// 		$('.item .tname').click(function(){
			// 		$('.container').animate({'opacity': '0.4'});
			// 		$('.content').animate({'opacity': '0.4'});
			// 		$('.sidebar').animate({'opacity': '0.4'});
			// 		$('.header').animate({'opacity': '0.4'});
			// 		$('.users_info').fadeIn();
			// 		$('.add_products').fadeOut();

			// 	var id3 = $(this).attr('alt');
			// 	$.post('php/users_info.php',{ id3: id3 },function(data){
			// 		$('.info').html(data);
			// 	}); 

			// });

			// 		$('.message-box .message-bar #user').click(function(){
			// 		$('.container').animate({'opacity': '0.4'});
			// 		$('.content').animate({'opacity': '0.4'});
			// 		$('.sidebar').animate({'opacity': '0.4'});
			// 		$('.header').animate({'opacity': '0.4'});
			// 		$('.chat').fadeIn();
			// 		$('.add_products').fadeOut();

			// 	var id4 = $(this).attr('alt');
			// 	$.post('php/messages.php',{ id4: id4 },function(data){
			// 		$('.chats').html(data);
			// 	}); 

			// });

			//add product popup
		$('.eventuser-btn').click(function(){
					// $('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.add_event').fadeIn();
			});
$('.eve #eventss').click(function(){
                    // $('.container').animate({'opacity': '0.4'});
                    $('.content').animate({'opacity': '0.4'});
                    $('.sidebar').animate({'opacity': '0.4'});
                    $('.header').animate({'opacity': '0.4'});
                    $('.view_event').fadeIn();
                        var id = $(this).attr('alt');
                $.post('php/event_view.php',{ id: id },function(data){
                    $('#event_view').html(data);
                }); 
            });
$('.eve #events_r').click(function(){
                    // $('.container').animate({'opacity': '0.4'});
                    $('.content').animate({'opacity': '0.4'});
                    $('.sidebar').animate({'opacity': '0.4'});
                    $('.header').animate({'opacity': '0.4'});
                    $('.popup').fadeIn();
                        var id = $(this).attr('alt');
                $.post('php/confirm2.php',{ id: id },function(data){
                    $('#user_r').html(data);
                }); 
            });
$('.eve #events_e').click(function(){
                    // $('.container').animate({'opacity': '0.4'});
                    $('.content').animate({'opacity': '0.4'});
                    $('.sidebar').animate({'opacity': '0.4'});
                    $('.header').animate({'opacity': '0.4'});
                    $('.edit_event').fadeIn();
                        var id = $(this).attr('alt');
                $.post('php/edit_event.php',{ id: id },function(data){
                    $('#edit_view').html(data);
                }); 
            });

		$('.users #prod_pic').click(function(){
                    // $('.container').animate({'opacity': '0.4'});
                    $('.content').animate({'opacity': '0.4'});
                    $('.sidebar').animate({'opacity': '0.4'});
                    $('.header').animate({'opacity': '0.4'});
                    $('.prod_pic').fadeIn();
                        var id = $(this).attr('alt');
                $.post('php/prodpic.php',{ id: id },function(data){
                    $('#product').html(data);
                }); 
            });


			$('.mail').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.smail').fadeIn();

							var id = $(this).attr('alt');
				$.post('php/smail.php',{ id: id },function(data){
					$('.mailss').html(data);
				}); 

					// $('.add_products2').fadeOut();
			});

			$(' .deactivate_acc').click(function(){
					$('.container').animate({'opacity': '0.4'});
					$('.content').animate({'opacity': '0.4'});
					$('.sidebar').animate({'opacity': '0.4'});
					$('.header').animate({'opacity': '0.4'});
					$('.popup').fadeIn();
					$('.add_products').fadeOut();

				var id = $(this).attr('alt');
				$.post('php/confirm.php',{ id: id },function(data){
					$('#user_r').html(data);
				}); 

			});


			//	
			// $('#up_user').click(function(){
			// 		$('.container').animate({'opacity': '0.4'});
			// 		$('.content').animate({'opacity': '0.4'});
			// 		$('.sidebar').animate({'opacity': '0.4'});
			// 		$('.header').animate({'opacity': '0.4'});
			// 		$('.update_info').fadeIn();
			// 		$('.add_products').fadeout();
					
			
			// });

			


			//hide add product
			$('.header-title span i').click(function(){
					$('.smail').fadeOut("fast",function(){
					  	$('.container').animate({'opacity': '1'});
							$('.content').css({'opacity': '1'});
							$('.sidebar').css({'opacity': '1'});
							$('.header').css({'opacity': '1'});
					});
                        $('.prod_pic').fadeOut("fast",function(){
                        $('.container').animate({'opacity': '1'});
                            $('.content').css({'opacity': '1'});
                            $('.sidebar').css({'opacity': '1'});
                            $('.header').css({'opacity': '1'});
                    });
					$('.add_event').fadeOut("fast",function(){
							$('.container').animate({'opacity': '1'});
							$('.content').css({'opacity': '1'});
							$('.sidebar').css({'opacity': '1'});
							$('.header').css({'opacity': '1'});
					});
                        $('.view_event').fadeOut("fast",function(){
                            $('.container').animate({'opacity': '1'});
                            $('.content').css({'opacity': '1'});
                            $('.sidebar').css({'opacity': '1'});
                            $('.header').css({'opacity': '1'});
                    });
                             $('.edit_event').fadeOut("fast",function(){
                            $('.container').animate({'opacity': '1'});
                            $('.content').css({'opacity': '1'});
                            $('.sidebar').css({'opacity': '1'});
                            $('.header').css({'opacity': '1'});
                    });
                                  $('.remove_event').fadeOut("fast",function(){
                            $('.container').animate({'opacity': '1'});
                            $('.content').css({'opacity': '1'});
                            $('.sidebar').css({'opacity': '1'});
                            $('.header').css({'opacity': '1'});
                    });

					// 	$('.update_info').fadeOut("fast",function(){
					// 		$('.container').animate({'opacity': '1'});
					// 		$('.content').css({'opacity': '1'});
					// 		$('.sidebar').css({'opacity': '1'});
					// 		$('.header').css({'opacity': '1'});
					// });
					// 	$('.comment_sec').fadeOut("fast",function(){
					// 		$('.container').animate({'opacity': '1'});
					// 		$('.content').css({'opacity': '1'});
					// 		$('.sidebar').css({'opacity': '1'});
					// 		$('.header').css({'opacity': '1'});
					// });
					// 	$('.users_info').fadeOut("fast",function(){
					// 		$('.container').animate({'opacity': '1'});
					// 		$('.content').css({'opacity': '1'});
					// 		$('.sidebar').css({'opacity': '1'});
					// 		$('.header').css({'opacity': '1'});
					// });
					// 	$('.chat').fadeOut("fast",function(){
					//   	$('.container').animate({'opacity': '1'});
					// 		$('.content').css({'opacity': '1'});
					// 		$('.sidebar').css({'opacity': '1'});
					// 		$('.header').css({'opacity': '1'});
					// });
			});
			//image upload
			// function readURL(input) {
			// 			if (input.files && input.files[0]) {
			// 					var reader = new FileReader();

			// 					reader.onload = function (e) {
			// 							$('.img-cont img').attr('src', e.target.result);
			// 					}

			// 					reader.readAsDataURL(input.files[0]);
			// 			}
			// 	}

				// $("#add_image").change(function () {
				// 		readURL(this);
				// });

				// var file = document.getElementById('add_image');
				// file.onchange = function(e){
				//     var ext = this.value.match(/\.([^\.]+)$/)[1];
				//     switch(ext)
				//     {
				//         case 'jpg':
				//         case 'bmp':
				//         case 'png':
				//         case 'tif':
				//         case 'jpeg':
				// 		    case 'JPG':
				// 		    case 'BMP':
				// 		    case 'PNG':
				// 		    case 'TIF':
				// 		    case 'JPEG':
				// 					 $('#addprod-submit').attr('disabled', false);
				// 					 $('#erorr').html(' ');
				// 					 $('#erorr').hide();
				//             break;
				//         default:
				// 					 $('.img-cont img').css({'width': '100%'});
				// 					 $('#erorr').show();
				// 					 $('#erorr').prepend("<br><kbd class='animated shake erorr'>This File is not allowed</kbd>");
				// 					 $('#addprod-submit').attr('disabled', true);
				// 					 $('#addprod-submit').css({'background-color': '#e74c3c'});
				//     }
				// };


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
						var cat = $(this).val();
						var a = 'LoggedIn';
						var b = 'Logoutfromfoodlust';
						var c = 'Commentedtoapost';
						var d = 'deletedproduct';
						var e = 'addedproduct';
						var f = 'updatedproduct';
						var g = 'ratedaPhoto5star';						
						var h = 'ratedaPhoto4star';
						var i = 'ratedaPhoto3star';
						var j = 'ratedaPhoto2star';
						var k = 'ratedaPhoto1star';
						var l = 'Updatedhisprofile';

						if(cat==='LoggedIn'){
								
								$(' #Logoutfromfoodlust').hide();
								$(' #Commentedtoapost').hide();
								$(' #deletedproduct').hide();
								$(' #addedproduct').hide();
								$(' #Updatedproduct').hide();
								$(' #ratedaPhoto5star').hide();
								$(' #ratedaPhoto4star').hide();
								$(' #ratedaPhoto3star').hide();
								$(' #ratedaPhoto2star').hide();
								$(' #ratedaPhoto1star').hide();
								$(' #ratedauser5star').hide();
								$(' #ratedauser4star').hide();
								$(' #ratedauser3star').hide();
								$(' #ratedauser2star').hide();
								$(' #ratedauser1star').hide();
								$(' #Updatedhisprofile').hide();
                                 $(' #addedbusinessinq').hide();
                                 $(' #interestedinainquery').hide();
                                 $(' #addedphototoaproduct').hide();

								setTimeout(function(){
									$(' #LoggedIn').fadeIn();
								},500);
						}
						if(cat==='Logoutfromfoodlust'){
								
								$(' #LoggedIn').hide();
								$(' #Commentedtoapost').hide();
								$(' #deletedproduct').hide();
								$(' #addedproduct').hide();
								$(' #Updatedproduct').hide();
								$(' #ratedaPhoto5star').hide();
								$(' #ratedaPhoto4star').hide();
								$(' #ratedaPhoto3star').hide();
								$(' #ratedaPhoto2star').hide();
								$(' #ratedaPhoto1star').hide();
								$(' #Updatedhisprofile').hide();
								$(' #ratedauser5star').hide();
								$(' #ratedauser4star').hide();
								$(' #ratedauser3star').hide();
								$(' #ratedauser2star').hide();
								$(' #ratedauser1star').hide();
                                 $(' #addedbusinessinq').hide();
                                 $(' #interestedinainquery').hide();
                                 $(' #addedphototoaproduct').hide();

								setTimeout(function(){
									$(' #Logoutfromfoodlust').fadeIn();
								},500);
						}
						if(cat==='Commentedtoapost'){
								
								$(' #Logoutfromfoodlust').hide();
								$(' #LoggedIn').hide();
								$(' #deletedproduct').hide();
								$(' #addedproduct').hide();
								$(' #Updatedproduct').hide();
								$(' #ratedaPhoto5star').hide();
								$(' #ratedaPhoto4star').hide();
								$(' #ratedaPhoto3star').hide();
								$(' #ratedaPhoto2star').hide();
								$(' #ratedaPhoto1star').hide();
								$(' #Updatedhisprofile').hide();
								$(' #ratedauser5star').hide();
								$(' #ratedauser4star').hide();
								$(' #ratedauser3star').hide();
								$(' #ratedauser2star').hide();
								$(' #ratedauser1star').hide();
                                 $(' #addedbusinessinq').hide();
                                 $(' #interestedinainquery').hide();
                                 $(' #addedphototoaproduct').hide();

								setTimeout(function(){
									$(' #Commentedtoapost').fadeIn();
								},500);
						}
						if(cat==='deletedproduct'){
								
								$(' #Logoutfromfoodlust').hide();
								$(' #Commentedtoapost').hide();
								$(' #LoggedIn').hide();
								$(' #addedproduct').hide();
								$(' #Updatedproduct').hide();
								$(' #ratedaPhoto5star').hide();
								$(' #ratedaPhoto4star').hide();
								$(' #ratedaPhoto3star').hide();
								$(' #ratedaPhoto2star').hide();
								$(' #ratedaPhoto1star').hide();
								$(' #Updatedhisprofile').hide();
								$(' #ratedauser5star').hide();
								$(' #ratedauser4star').hide();
								$(' #ratedauser3star').hide();
								$(' #ratedauser2star').hide();
								$(' #ratedauser1star').hide();
                                 $(' #addedbusinessinq').hide();
                                 $(' #interestedinainquery').hide();
                                 $(' #addedphototoaproduct').hide();

								setTimeout(function(){
									$(' #deletedproduct').fadeIn();
								},500);
						}
						if(cat==='addedproduct'){
								
								$(' #Logoutfromfoodlust').hide();
								$(' #Commentedtoapost').hide();
								$(' #deletedproduct').hide();
								$(' #LoggedIn').hide();
								$(' #Updatedproduct').hide();
								$(' #ratedaPhoto5star').hide();
								$(' #ratedaPhoto4star').hide();
								$(' #ratedaPhoto3star').hide();
								$(' #ratedaPhoto2star').hide();
								$(' #ratedaPhoto1star').hide();
								$(' #Updatedhisprofile').hide();
								$(' #ratedauser5star').hide();
								$(' #ratedauser4star').hide();
								$(' #ratedauser3star').hide();
								$(' #ratedauser2star').hide();
								$(' #ratedauser1star').hide();
                                 $(' #addedbusinessinq').hide();
                                 $(' #interestedinainquery').hide();
                                 $(' #addedphototoaproduct').hide();

								setTimeout(function(){
									$(' #addedproduct').fadeIn();
								},500);
						}
						if(cat==='Updatedproduct'){
								
								$(' #Logoutfromfoodlust').hide();
								$(' #Commentedtoapost').hide();
								$(' #deletedproduct').hide();
								$(' #addedproduct').hide();
								$(' #LoggedIn').hide();
								$(' #ratedaPhoto5star').hide();
								$(' #ratedaPhoto4star').hide();
								$(' #ratedaPhoto3star').hide();
								$(' #ratedaPhoto2star').hide();
								$(' #ratedaPhoto1star').hide();
								$(' #Updatedhisprofile').hide();
								$(' #ratedauser5star').hide();
								$(' #ratedauser4star').hide();
								$(' #ratedauser3star').hide();
								$(' #ratedauser2star').hide();
								$(' #ratedauser1star').hide();
                                 $(' #addedbusinessinq').hide();
                                 $(' #interestedinainquery').hide();
                                 $(' #addedphototoaproduct').hide();

								setTimeout(function(){
									$(' #Updatedproduct').fadeIn();
								},500);
						}
						if(cat==='ratedaPhoto5star'){
								
								$(' #Logoutfromfoodlust').hide();
								$(' #Commentedtoapost').hide();
								$(' #deletedproduct').hide();
								$(' #addedproduct').hide();
								$(' #Updatedproduct').hide();
								$(' #LoggedIn').hide();
								$(' #ratedaPhoto4star').hide();
								$(' #ratedaPhoto3star').hide();
								$(' #ratedaPhoto2star').hide();
								$(' #ratedaPhoto1star').hide();
								$(' #Updatedhisprofile').hide();
								$(' #ratedauser5star').hide();
								$(' #ratedauser4star').hide();
								$(' #ratedauser3star').hide();
								$(' #ratedauser2star').hide();
								$(' #ratedauser1star').hide();
                                 $(' #addedbusinessinq').hide();
                                 $(' #interestedinainquery').hide();
                                 $(' #addedphototoaproduct').hide();

								setTimeout(function(){
									$(' #ratedaPhoto5star').fadeIn();
								},500);
						}
						if(cat==='ratedaPhoto4star'){
								
								$(' #Logoutfromfoodlust').hide();
								$(' #Commentedtoapost').hide();
								$(' #deletedproduct').hide();
								$(' #addedproduct').hide();
								$(' #Updatedproduct').hide();
								$(' #ratedaPhoto5star').hide();
								$(' #LoggedIn').hide();
								$(' #ratedaPhoto3star').hide();
								$(' #ratedaPhoto2star').hide();
								$(' #ratedaPhoto1star').hide();
								$(' #Updatedhisprofile').hide();
								$(' #ratedauser5star').hide();
								$(' #ratedauser4star').hide();
								$(' #ratedauser3star').hide();
								$(' #ratedauser2star').hide();
								$(' #ratedauser1star').hide();
                                 $(' #addedbusinessinq').hide();
                                 $(' #interestedinainquery').hide();
                                 $(' #addedphototoaproduct').hide();

								setTimeout(function(){
									$(' #ratedaPhoto4star').fadeIn();
								},500);
						}
							if(cat==='ratedaPhoto3star'){
								
								$(' #Logoutfromfoodlust').hide();
								$(' #Commentedtoapost').hide();
								$(' #deletedproduct').hide();
								$(' #addedproduct').hide();
								$(' #Updatedproduct').hide();
								$(' #ratedaPhoto5star').hide();
								$(' #LoggedIn').hide();
								$(' #ratedaPhoto4star').hide();
								$(' #ratedaPhoto2star').hide();
								$(' #ratedaPhoto1star').hide();
								$(' #Updatedhisprofile').hide();
								$(' #ratedauser5star').hide();
								$(' #ratedauser4star').hide();
								$(' #ratedauser3star').hide();
								$(' #ratedauser2star').hide();
								$(' #ratedauser1star').hide();
                                 $(' #addedbusinessinq').hide();
                                 $(' #interestedinainquery').hide();
                                 $(' #addedphototoaproduct').hide();

								setTimeout(function(){
									$(' #ratedaPhoto3star').fadeIn();
								},500);
						}
							if(cat==='ratedaPhoto2star'){
								
								$(' #Logoutfromfoodlust').hide();
								$(' #Commentedtoapost').hide();
								$(' #deletedproduct').hide();
								$(' #addedproduct').hide();
								$(' #Updatedproduct').hide();
								$(' #ratedaPhoto5star').hide();
								$(' #LoggedIn').hide();
								$(' #ratedaPhoto3star').hide();
								$(' #ratedaPhoto4star').hide();
								$(' #ratedaPhoto1star').hide();
								$(' #Updatedhisprofile').hide();
								$(' #ratedauser5star').hide();
								$(' #ratedauser4star').hide();
								$(' #ratedauser3star').hide();
								$(' #ratedauser2star').hide();
								$(' #ratedauser1star').hide();
                                 $(' #addedbusinessinq').hide();
                                 $(' #interestedinainquery').hide();
                                 $(' #addedphototoaproduct').hide();

								setTimeout(function(){
									$(' #ratedaPhoto2star').fadeIn();
								},500);
						}
							if(cat==='ratedaPhoto1star'){
								
								$(' #Logoutfromfoodlust').hide();
								$(' #Commentedtoapost').hide();
								$(' #deletedproduct').hide();
								$(' #addedproduct').hide();
								$(' #Updatedproduct').hide();
								$(' #ratedaPhoto5star').hide();		
								$(' #ratedaPhoto3star').hide();
								$(' #ratedaPhoto2star').hide();
								$(' #ratedaPhoto4star').hide();
								$(' #Updatedhisprofile').hide();
								$(' #ratedauser5star').hide();
								$(' #ratedauser4star').hide();
								$(' #ratedauser3star').hide();
								$(' #ratedauser2star').hide();
								$(' #ratedauser1star').hide();
								$(' #LoggedIn').hide();
                                 $(' #addedbusinessinq').hide();
                                 $(' #interestedinainquery').hide();
                                 $(' #addedphototoaproduct').hide();

								setTimeout(function(){
									$(' #ratedaPhoto1star').fadeIn();
								},500);
						}
						if(cat==='ratedauser5star'){
								
								$(' #Logoutfromfoodlust').hide();
								$(' #Commentedtoapost').hide();
								$(' #deletedproduct').hide();
								$(' #addedproduct').hide();
								$(' #Updatedproduct').hide();
								$(' #LoggedIn').hide();
								$(' #ratedauser4star').hide();
								$(' #ratedauser3star').hide();
								$(' #ratedauser2star').hide();
								$(' #ratedauser1star').hide();
								$(' #Updatedhisprofile').hide();
								$(' #ratedaPhoto5star').hide();
								$(' #ratedaPhoto4star').hide();
								$(' #ratedaPhoto3star').hide();
								$(' #ratedaPhoto2star').hide();
								$(' #ratedaPhoto1star').hide();
                                 $(' #addedbusinessinq').hide();
                                 $(' #interestedinainquery').hide();
                                 $(' #addedphototoaproduct').hide();

								setTimeout(function(){
									$(' #ratedauser5star').fadeIn();
								},500);
						}
						if(cat==='ratedauser4star'){
								
								$(' #Logoutfromfoodlust').hide();
								$(' #Commentedtoapost').hide();
								$(' #deletedproduct').hide();
								$(' #addedproduct').hide();
								$(' #Updatedproduct').hide();
								$(' #ratedauser5star').hide();
								$(' #LoggedIn').hide();
								$(' #ratedauser3star').hide();
								$(' #ratedauser2star').hide();
								$(' #ratedauser1star').hide();
								$(' #Updatedhisprofile').hide();
								$(' #ratedaPhoto5star').hide();
								$(' #ratedaPhoto4star').hide();
								$(' #ratedaPhoto3star').hide();
								$(' #ratedaPhoto2star').hide();
								$(' #ratedaPhoto1star').hide();
                                 $(' #addedbusinessinq').hide();
                                 $(' #interestedinainquery').hide();
                                 $(' #addedphototoaproduct').hide();

								setTimeout(function(){
									$(' #ratedauser4star').fadeIn();
								},500);
						}
							if(cat==='ratedauser3star'){
								
								$(' #Logoutfromfoodlust').hide();
								$(' #Commentedtoapost').hide();
								$(' #deletedproduct').hide();
								$(' #addedproduct').hide();
								$(' #Updatedproduct').hide();
								$(' #ratedauser5star').hide();
								$(' #LoggedIn').hide();
								$(' #ratedauser4star').hide();
								$(' #ratedauser2star').hide();
								$(' #ratedauser1star').hide();
								$(' #Updatedhisprofile').hide();
								$(' #ratedaPhoto5star').hide();
								$(' #ratedaPhoto4star').hide();
								$(' #ratedaPhoto3star').hide();
								$(' #ratedaPhoto2star').hide();
								$(' #ratedaPhoto1star').hide();
                                 $(' #addedbusinessinq').hide();
                                 $(' #interestedinainquery').hide();
                                 $(' #addedphototoaproduct').hide();

								setTimeout(function(){
									$(' #ratedauser3star').fadeIn();
								},500);
						}
							if(cat==='ratedauser2star'){
								
								$(' #Logoutfromfoodlust').hide();
								$(' #Commentedtoapost').hide();
								$(' #deletedproduct').hide();
								$(' #addedproduct').hide();
								$(' #Updatedproduct').hide();
								$(' #ratedauser5star').hide();								
								$(' #ratedauser3star').hide();
								$(' #ratedauser4star').hide();
								$(' #ratedauser1star').hide();
								$(' #LoggedIn').hide();
								$(' #Updatedhisprofile').hide();
								$(' #ratedaPhoto5star').hide();
								$(' #ratedaPhoto4star').hide();
								$(' #ratedaPhoto3star').hide();
								$(' #ratedaPhoto2star').hide();
								$(' #ratedaPhoto1star').hide();
                                 $(' #addedbusinessinq').hide();
                                 $(' #interestedinainquery').hide();
                                 $(' #addedphototoaproduct').hide();

								setTimeout(function(){
									$(' #ratedauser2star').fadeIn();
								},500);
						}
							if(cat==='ratedauser1star'){
								
								$(' #Logoutfromfoodlust').hide();
								$(' #Commentedtoapost').hide();
								$(' #deletedproduct').hide();
								$(' #addedproduct').hide();
								$(' #Updatedproduct').hide();
								$(' #ratedauser5star').hide();
								$(' #LoggedIn').hide();
								$(' #ratedauser3star').hide();
								$(' #ratedauser2star').hide();
								$(' #ratedauser4star').hide();
								$(' #Updatedhisprofile').hide();
								$(' #ratedaPhoto5star').hide();
								$(' #ratedaPhoto4star').hide();
								$(' #ratedaPhoto3star').hide();
								$(' #ratedaPhoto2star').hide();
								$(' #ratedaPhoto1star').hide();
                                 $(' #addedbusinessinq').hide();
                                 $(' #interestedinainquery').hide();
                                 $(' #addedphototoaproduct').hide();

								setTimeout(function(){
									$(' #ratedauser1star').fadeIn();
								},500);
						}
							if(cat==='Updatedhisprofile'){
								
								$(' #Logoutfromfoodlust').hide();
								$(' #Commentedtoapost').hide();
								$(' #deletedproduct').hide();
								$(' #addedproduct').hide();
								$(' #Updatedproduct').hide();
								$(' #ratedaPhoto5star').hide();
								$(' #LoggedIn').hide();
								$(' #ratedaPhoto3star').hide();
								$(' #ratedaPhoto2star').hide();
								$(' #ratedaPhoto1star').hide();
								$(' #ratedaPhotostar').hide();
                                $(' #addedbusinessinq').hide();
                                $(' #interestedinainquery').hide();
                                $(' #addedphototoaproduct').hide();

								setTimeout(function(){
									$(' #Updatedhisprofile').fadeIn();
								},500);
						}
                        if(cat==='addedbusinessinq'){
                                
                                $(' #Logoutfromfoodlust').hide();
                                $(' #Commentedtoapost').hide();
                                $(' #deletedproduct').hide();
                                $(' #addedproduct').hide();
                                $(' #Updatedproduct').hide();
                                $(' #ratedaPhoto5star').hide();
                                $(' #LoggedIn').hide();
                                $(' #ratedaPhoto3star').hide();
                                $(' #ratedaPhoto2star').hide();
                                $(' #ratedaPhoto1star').hide();
                                $(' #ratedaPhotostar').hide();
                                $(' #interestedinainquery').hide();
                                $(' #addedphototoaproduct').hide();

                                setTimeout(function(){
                                    $(' #addedbusinessinq').fadeIn();
                                },500);
                        }
                         if(cat==='interestedinainquery'){
                                
                                $(' #Logoutfromfoodlust').hide();
                                $(' #Commentedtoapost').hide();
                                $(' #deletedproduct').hide();
                                $(' #addedproduct').hide();
                                $(' #Updatedproduct').hide();
                                $(' #ratedaPhoto5star').hide();
                                $(' #LoggedIn').hide();
                                $(' #ratedaPhoto3star').hide();
                                $(' #ratedaPhoto2star').hide();
                                $(' #ratedaPhoto1star').hide();
                                $(' #ratedaPhotostar').hide();
                                $(' #addedbusinessinq').hide();
                                $(' #addedphototoaproduct').hide();

                                setTimeout(function(){
                                    $(' #interestedinainquery').fadeIn();
                                },500);
                        }
                          if(cat==='addedphototoaproduct'){
                                
                                $(' #Logoutfromfoodlust').hide();
                                $(' #Commentedtoapost').hide();
                                $(' #deletedproduct').hide();
                                $(' #addedproduct').hide();
                                $(' #Updatedproduct').hide();
                                $(' #ratedaPhoto5star').hide();
                                $(' #LoggedIn').hide();
                                $(' #ratedaPhoto3star').hide();
                                $(' #ratedaPhoto2star').hide();
                                $(' #ratedaPhoto1star').hide();
                                $(' #ratedaPhotostar').hide();
                                $(' #addedbusinessinq').hide();
                                $(' #interestedinainquery').hide();

                                setTimeout(function(){
                                    $(' #addedphototoaproduct').fadeIn();
                                },500);
                        }
							if(cat==='All'){
								
								$(' #Logoutfromfoodlust').fadeIn();
								$(' #Commentedtoapost').fadeIn();
								$(' #deletedproduct').fadeIn();
								$(' #addedproduct').fadeIn();
								$(' #Updatedproduct').fadeIn();
								$(' #ratedaPhoto5star').fadeIn();
								$(' #LoggedIn').fadeIn();
								$(' #ratedaPhoto3star').fadeIn();
								$(' #ratedaPhoto2star').fadeIn();
								$(' #ratedaPhoto1star').fadeIn();
								$(' #ratedaPhotostar').fadeIn();
								$(' #Updatedhisprofile').fadeIn();
                                $(' #addedbusinessinq').fadeIn();
                                $(' #interestedinainquery').fadeIn();
                                $(' #addedphototoaproduct').fadeIn();
								
						}
						// if(cat==='seller'){
						// 		$('.product-market-container #buyer').hide();
								
								
						// 		setTimeout(function(){
						// 			$('.product-market-container #seller').fadeIn();
						// 		},500);
						// }
						// 	if(cat==='All'){
						// 		$('.product-market-container #seller').fadeIn();
						// 		$('.product-market-container #buyer').fadeIn();
								
						// }


				});


});


$(document).keyup(function(e) {
if (e.keyCode == 27) {
		$('.s_mail').fadeOut("fast",function(){
				$('.container').animate({'opacity': '1'});
				$('.content').css({'opacity': '1'});
				$('.sidebar').css({'opacity': '1'});
				$('.header').css({'opacity': '1'});
		});
		// $('.popup').fadeOut("fast",function(){
		//   	$('.container').animate({'opacity': '1'});
		// 	  $('.content').css({'opacity': '1'});
		//   	$('.sidebar').css({'opacity': '1'});
		//   	$('.header').css({'opacity': '1'});
		// });
		$('.add_event').fadeOut("fast",function(){
				$('.container').animate({'opacity': '1'});
				$('.content').css({'opacity': '1'});
				$('.sidebar').css({'opacity': '1'});
				$('.header').css({'opacity': '1'});
		});
		// $('.users_info').fadeOut("fast",function(){
		// 		$('.container').animate({'opacity': '1'});
		// 		$('.content').css({'opacity': '1'});
		// 		$('.sidebar').css({'opacity': '1'});
		// 		$('.header').css({'opacity': '1'});
		// });

}
});


$('#searchr').keypress(function(e) {
    if(e.which == 13) {
        var s = $(this).val();
        document.location.href = 'home.php?q='+s;
    }
});