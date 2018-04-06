
<?php 
	session_start();	
include "dbconn.php";

$id = $_POST['id'];

$sql = "SELECT * FROM events where id='$id' ";
$result =mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc($result);

 	$id =$row['id'];
	$title = $row['title'];
	$details = $row['details'];
	$start = $row['start_d'];
	$end = $row['end_d'];
	$organizers = $row['organizer'];
	$photo = $row['photo'];
$details = str_replace('<br />', " ",  $details ); 


echo '
	<form id="edit_e" action="php/update_event.php" method="post" enctype="multipart/form-data">
<div class="usersss"> 
	  <div class="img-cont">
	<img id="user_pic"  src="img/uploads/'.$photo.'">
	</div>
	
	  <input type="file" name="image" value="" id="add_image" accept="image/png,image/jpg,image/jpeg,image/gif,image/    bitman" >
 		
 		 <div class="controls input-append date form_datetime" data-date="" data-date-format="MM dd yyyy HH:ii p" data-link-field="dtp_input1">
                                 <input size="16" type="text" name="Start" id="start-date" placeholder="Date Start" value="'.date("M/d/Y g:ia",$start).'" readonly>
                                 <span class="add-on"><i class="icon-th"></i></span>
                                 </div>
                                 <div class="controls input-append date form_datetime" data-date="" data-date-format="MM dd yyyy HH:ii p" data-link-field="dtp_input1">
                                <input size="16" type="text" name="End" id="end-date" placeholder="date end" value="'.date("M/d/Y g:ia",$end).'" readonly>
                                <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                                <div class="form-cont">
	<input type = "hidden" value="'.$id.'" name = "id">
                                <input type="text" name="title"  id="title" value="'.$title.'" >
 		  <textarea name="details" id="details" rows="8" value="details" >'.$details.'</textarea>
	
	<input type="text" name="organizer" id="organizer" value="'.$organizers.'" >


	  <button id="editevent-submit">Submit</button>

	</div>
	</div>
</form>
	';
	
		
echo '<script type="text/javascript" src="js/dashboard.js"></script>';

?>
<script type="text/javascript" src="php/form_jquery.js"></script>
<script type="text/javascript">
	$(function(){
		$("#edit_e").ajaxForm(function(data){
			if(data=='yes'){
				$('.edit_event').fadeOut("fast",function(){
				$('.container').animate({'opacity': '1'});
				$('.content').css({'opacity': '1'});
				$('.sidebar').css({'opacity': '1'});
				$('.header').css({'opacity': '1'});
				alert('Success');
                $('.content').load('php/events.php');
		});
			} else {	
				alert(data);
			}
		});
	});
			
</script>
<script type="text/javascript" src="../Date Picker/Js/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="../Date Picker/Js/bootstrap.min.js"></script>
<script type="text/javascript" src="../Date Picker/Js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="../Date Picker/Js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">

    $('.form_datetime').datetimepicker({
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1,
        startDate: new Date()
    });

</script>
