
    $(document).ready(function() {
        //add product ajax submit / filter / security
        $('#erorr').hide();
        $("#addprod-submit").click(function(event) {
              $('#erorr').html('');
              $('#erorr').hide();
              var name = $('#addproduct #name').val();
              var description = $('#addproduct #description').val();
              if(/^[a-zA-Z0-9- ]*$/.test(name) == false || /^[a-zA-Z0-9- ]*$/.test(description) == false) {
                    $('#erorr').fadeIn();
                    $('#erorr').prepend("<br><kbd class='animated shake erorr'>No Symbols & illegal characters allowed.</kbd>");
                    event.preventDefault();
              } if (description===''){
                    $('#erorr').fadeIn();
                    $('#erorr').prepend("<br><kbd class='animated shake erorr'>Product Description empty</kbd>");
                    event.preventDefault();
              } else {
                    //$('#erorr').html('');
                    //$('#erorr').hide();
                    $("#addproduct").ajaxForm(function(data) {
                        if(data=='yes'){
                              $('.content').load('php/products.php');
                              $('.add_products').fadeOut("fast",function(){
                                  $('.container').animate({'opacity': '1'});
                                  $('.content').css({'opacity': '1'});
                                  $('.sidebar').css({'opacity': '1'});
                                  $('.header').css({'opacity': '1'});


                                  $('#addproduct .img-cont img'). attr('src','../img/images.jpg');
                                  $('#addproduct .form-cont input').val('');
                                  $('#addproduct .form-cont textarea').val('');
                              });
                        } else {
                              $('#erorr').fadeIn();
                              $('#erorr').prepend("<br><kbd class='animated shake erorr'>"+data+"</kbd>");
                        }
                    });
              }
        });

        $("#addprods-submit").click(function(event) {
              $('#erorr').html('');
              $('#erorr').hide();
              // var name = $('#addproduct #name').val();
              var description = $('#addinq #description_inq').val();
              if(/^[a-zA-Z0-9- ]*$/.test(name) == false || /^[a-zA-Z0-9- ]*$/.test(description) == false) {
                    $('#erorr').fadeIn();
                    $('#erorr').prepend("<br><kbd class='animated shake erorr'>No Symbols & illegal characters allowed.</kbd>");
                    event.preventDefault();
              } if (description===''){
                    $('#erorr').fadeIn();
                    $('#erorr').prepend("<br><kbd class='animated shake erorr'>Product Description empty</kbd>");
                    event.preventDefault();
              } else {
                    //$('#erorr').html('');
                    //$('#erorr').hide();
                    $("#addinq").ajaxForm(function(data) {
                        if(data=='yes'){
                              $('.content').load('php/products.php');
                              $('.add_products').fadeOut("fast",function(){
                                  $('.container').animate({'opacity': '1'});
                                  $('.content').css({'opacity': '1'});
                                  $('.sidebar').css({'opacity': '1'});
                                  $('.header').css({'opacity': '1'});


                                  $('#addproduct .img-cont img'). attr('src','../img/images.jpg');
                                  $('#addproduct .form-cont input').val('');
                                  $('#addproduct .form-cont textarea').val('');
                              });
                        } else {
                              $('#erorr').fadeIn();
                              $('#erorr').prepend("<br><kbd class='animated shake erorr'>"+data+"</kbd>");
                        }
                    });
              }
        });

          $("#update_info-submit").click(function(event) {
              $('#erorr').html('');
              $('#erorr').hide();
              var name = $('#updateinfo #name').val();
              var description = $('#updateinfo #description').val();
              if(/^[a-zA-Z0-9- ]*$/.test(name) == false || /^[a-zA-Z0-9- ]*$/.test(description) == false) {
                    $('#erorr').fadeIn();
                    $('#erorr').prepend("<br><kbd class='animated shake erorr'>No Symbols & illegal characters allowed.</kbd>");
                    event.preventDefault();
              } if (description===''){
                    $('#erorr').fadeIn();
                    $('#erorr').prepend("<br><kbd class='animated shake erorr'>Product Description empty</kbd>");
                    event.preventDefault();
              } else {
                    //$('#erorr').html('');
                    //$('#erorr').hide();
                    $("#updateinfo").ajaxForm(function(data) {
                        if(data=='yes'){
                              $('.content').load('php/home.php');
                              $('.update_info').fadeOut("fast",function(){
                                  $('.container').animate({'opacity': '1'});
                                  $('.content').css({'opacity': '1'});
                                  $('.sidebar').css({'opacity': '1'});
                                  $('.header').css({'opacity': '1'});


                                  $('#updateinfo .img-cont img'). attr('src','../img/images.jpg');
                                  $('#updateinfo .form-cont input').val('');
                                  $('#updateinfo .form-cont textarea').val('');
                              });
                        } else {
                              $('#erorr').fadeIn();
                              $('#erorr').prepend("<br><kbd class='animated shake erorr'>"+data+"</kbd>");
                        }
                    });
              }
        });



        //able unable products
        // $("#able").ajaxForm(function(data) {
        //      if(data=='yes'){
        //         $('.content').load('php/products.php');
        //      } else {
        //         alert(data);
        //      }
        // });
        // $("#unable").ajaxForm(function(data) {
        //      if(data=='yes'){
        //         $('.content').load('../php/admin/category/products.php');
        //      } else {
        //         alert(data);
        //      }
        // });
        //delete product
   

 




    });
