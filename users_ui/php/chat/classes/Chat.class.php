<?php

/* The Chat class exploses public static methods, used by ajax.php */
session_start();

class Chat{
	
	
	
	// public static function checkLogged(){
	// 	$response = array('logged' => false);
			
	// 	if($_SESSION['user']['name']){
	// 		$response['logged'] = true;
	// 		$response['loggedAs'] = array(
	// 			'name'		=> $_SESSION['user']['name'],
	// 			'gravatar'	=> Chat::gravatarFromHash($_SESSION['user']['gravatar'])
	// 		);
	// 	}
		
	// 	return $response;
	// }
	
	
	public static function submitChat($chatText){
		if(!$_SESSION['user_id']){
			throw new Exception('You are not logged in');
		}
		
		if(!$chatText){
			throw new Exception('You haven\' entered a chat message.');
		}
	
		$chat = new ChatLine(array(
			'author'	=> $_SESSION['user']['name'],
			'gravatar'	=> $_SESSION['user']['gravatar'],
			'text'		=> $chatText
		));
	
		// The save method returns a MySQLi object
		$insertID = $chat->save()->insert_id;
	
		return array(
			'status'	=> 1,
			'insertID'	=> $insertID
		);
	}
	
	public static function getUsers(){
		if($_SESSION['user']['name']){
			$user = new ChatUser(array('name' => $_SESSION['user']['name']));
			$user->update();
		}
		
		// Deleting chats older than 5 minutes and users inactive for 30 seconds
		
		DB::query("DELETE FROM webchat_lines WHERE ts < SUBTIME(NOW(),'0:5:0')");
		DB::query("DELETE FROM webchat_users WHERE last_activity < SUBTIME(NOW(),'0:0:30')");
		
		$result = DB::query('SELECT * FROM webchat_users ORDER BY name ASC LIMIT 18');
		
		$users = array();
		while($user = $result->fetch_object()){
			$user->gravatar = Chat::gravatarFromHash($user->gravatar,30);
			$users[] = $user;
		}
	
		return array(
			'users' => $users,
			'total' => DB::query('SELECT COUNT(*) as cnt FROM webchat_users')->fetch_object()->cnt
		);
	}
	
	public static function getChats($lastID){
		$lastID = (int)$lastID;
	
		$result = DB::query('SELECT * FROM webchat_lines WHERE id > '.$lastID.' ORDER BY id ASC');
	
		$chats = array();
		while($chat = $result->fetch_object()){
			
			// Returning the GMT (UTC) time of the chat creation:
			
			$chat->time = array(
				'hours'		=> gmdate('H',strtotime($chat->ts)),
				'minutes'	=> gmdate('i',strtotime($chat->ts))
			);
			
			$chat->gravatar = Chat::gravatarFromHash($chat->gravatar);
			
			$chats[] = $chat;
		}
	
		return array('chats' => $chats);
	}
	
	
}


?>