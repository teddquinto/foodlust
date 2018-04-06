<!-- <style type="text/css">
	div.toggler				{ border:1px solid #ccc; background:url(gmail2.jpg) 10px 12px #eee no-repeat; cursor:pointer; padding:10px 32px; }
div.toggler .subject	{ font-weight:bold; }
div.read					{ color:#666; }
div.toggler .from, div.toggler .date { font-style:italic; font-size:11px; }
div.body					{ padding:10px 20px; }
</style>
 -->
<?php


require_once "../../imap/autoload.php";

require_once "../../imap/ImapClient/ImapClientException.php";
require_once "../../imap/ImapClient/ImapConnect.php";
require_once "../../imap/ImapClient/ImapClient.php";
require_once "../../imap/ImapClient/IncomingMessage.php";
require_once "../../imap/ImapClient/TypeAttachments.php";
require_once "../../imap/ImapClient/TypeBody.php";

use SSilence\ImapClient\ImapClientException;
use SSilence\ImapClient\ImapConnect;
use SSilence\ImapClient\ImapClient as Imap;

$hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
$username = 'foodlust2017@gmail.com';
$password = 'foodlustkami';

/* try to connect */
$inbox = imap_open($hostname,$username,$password) or die('Cannot connect to Gmail: ' . imap_last_error());

/* grab emails */
$emails = imap_search($inbox,'ALL');

/* if emails are returned, cycle through each... */
if($emails) {
	
	/* begin output var */
	$output = '';
	
	/* put the newest emails on top */
	rsort($emails);
	
	/* for every email... */
	foreach($emails as $email_number) {
		
		/* get information specific to this email */
		$overview = imap_fetch_overview($inbox,$email_number,0);
		$message = imap_fetchbody($inbox,$email_number,2);
		
		 // echo "
                  
   //                    $name
   //                    <p class='email'>$email</p>
   //                    <p class='message'>$message</p>
   //                   $date</p>
   //                </div>
   //                <div class='remove-msg'>
   //                    <i class='fa fa-remove' onclick='$(this).parent().parent().fadeOut();'></i>
   //                </div>
   //            </div>";


		/* output the email header information */
		$output.= "<div class='message-box animated bounceInLeft' style='background-color:#2c3e50 !important;'>";
		$output.= "<div class='message-bar'>";
		// $output.= '<div class="toggler '.($overview[0]->seen ? 'read' : 'unread').'">';
		// $output.= '<span class="subject">'.$overview[0]->subject.'</span> ';
		$output.= " <p class='name'><i class='fa fa-user'></i>".$overview[0]->from."</p>";
		$output.= '< <p class="date">on '.$overview[0]->date.'</p>';
	
		
		/* output the email body */
		$output.= ' <p class="message">'.$message.'</p>';
		$output.= '</div>';
		$output.= "<div class='remove-msg'>
                   <i class='fa fa-remove' onclick='$(this).parent().parent().fadeOut();'></i>
                  </div>";
		$output.= '</div>';
	}
	
	echo $output;
} 

/* close the connection */
imap_close($inbox);


?>

<!-- <script type="text/javascript">
	window.addEvent('domready',function() {
	var togglers = $$('div.toggler');
	if(togglers.length) var gmail = new Fx.Accordion(togglers,$$('div.body'));
	togglers.addEvent('click',function() { this.addClass('read').removeClass('unread'); });
	togglers[0].fireEvent('click'); //first one starts out read
});
</script> -->