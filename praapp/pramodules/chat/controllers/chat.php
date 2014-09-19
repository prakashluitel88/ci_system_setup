<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* Author: Prakash Luitel
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */

class Chat extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index($action) {
        if (!isset($_SESSION['chatHistory'])) {
            $_SESSION['chatHistory'] = array();	
        }

        if (!isset($_SESSION['openChatBoxes'])) {
            $_SESSION['openChatBoxes'] = array();	
        }
        if ($action == "startchatsession") {
            $this->startchatsession();
        }
        if ($action == "chatHeartbeat") {
            $this->chatHeartbeat();
        }
        if ($action == "sendchat") {
            $this->sendChat();
        }
        if ($action == "closechat") {
            $this->closeChat();
        }
    }

    function sendChat() {
        $from = $this->session->userdata('username');
        $to = $this->input->post('to');
        $message = $this->input->post('message');

        $_SESSION['openChatBoxes'][$_POST['to']] = date('Y-m-d H:i:s', time());

        $messagesan = $this->sanitize($message);

        if (!isset($_SESSION['chatHistory'][$_POST['to']])) {
            $_SESSION['chatHistory'][$_POST['to']] = '';
        }

        $_SESSION['chatHistory'][$_POST['to']] .= <<<EOD
					   {
			"s": "1",
			"f": "{$to}",
			"m": "{$messagesan}"
	   },
EOD;


        unset($_SESSION['tsChatBoxes'][$_POST['to']]);

        $this->db->insert('chat', array('from' => mysql_real_escape_string($from),
            'to' => mysql_real_escape_string($to),
            'message' => mysql_real_escape_string($message),
            'sent' => date('Y-m-d H:i:s', time()),
            'recd' => "xxxx"));

        echo "1";
        exit(0);
    }

    function sanitize($text) {
        $text = htmlspecialchars($text, ENT_QUOTES);
        $text = str_replace("\n\r", "\n", $text);
        $text = str_replace("\r\n", "\n", $text);
        $text = str_replace("\n", "<br>", $text);
        return $text;
    }
    function closeChat() {

        unset($_SESSION['openChatBoxes'][$_POST['chatbox']]);

        echo "1";
        exit(0);
    }
    function chatBoxSession($chatbox) {
	
	$items = '';
	
	if (isset($_SESSION['chatHistory'][$chatbox])) {
		$items = $_SESSION['chatHistory'][$chatbox];
	}

	return $items;
    }
    
    function startChatSession() {
	$items = '';
	if (!empty($_SESSION['openChatBoxes'])) {
		foreach ($_SESSION['openChatBoxes'] as $chatbox => $void) {
			$items .= $this->chatBoxSession($chatbox);
		}
	}

	if ($items != '') {
		$items = substr($items, 0, -1);
	}

        header('Content-type: application/json');
        ?>
        {
                        "username": "<?php echo $this->session->userdata('username');?>",
                        "items": [
                                <?php echo $items;?>
                ]
        }

        <?php


                exit(0);
        }
        
    function chatHeartbeat() {
	$this->db->select('*');
        $this->db->from('chat');
        $this->db->where('to',mysql_real_escape_string($this->session->userdata('username')));
        $this->db->where('recd',0);
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $result = $query->result();
//	$sql = "select * from chat order by id ASC";
//	$query = mysql_query($sql);
	$items = '';

	$chatBoxes = array();

	foreach($result as $chat) {

		if (!isset($_SESSION['openChatBoxes'][$chat->from]) && isset($_SESSION['chatHistory'][$chat->from])) {
			$items = $_SESSION['chatHistory'][$chat->from];
		}

		$chat_message = $this->sanitize($chat->message);

		$items .= <<<EOD
					   {
			"s": "0",
			"f": "{$chat->from}",
			"m": "{$chat->message}"
	   },
EOD;

	if (!isset($_SESSION['chatHistory'][$chat->from])) {
		$_SESSION['chatHistory'][$chat->from] = '';
	}

	$_SESSION['chatHistory'][$chat->from] .= <<<EOD
						   {
			"s": "0",
			"f": "{$chat->from}",
			"m": "{$chat->message}"
	   },
EOD;
		
		unset($_SESSION['tsChatBoxes'][$chat->from]);
		$_SESSION['openChatBoxes'][$chat->from] = $chat->sent;
	}

	if (!empty($_SESSION['openChatBoxes'])) {
	foreach ($_SESSION['openChatBoxes'] as $chatbox => $time) {
		if (!isset($_SESSION['tsChatBoxes'][$chatbox])) {
			$now = time()-strtotime($time);
			$time = date('g:iA M dS', strtotime($time));

			$message = "Sent at $time";
			if ($now > 180) {
				$items .= <<<EOD
{
"s": "2",
"f": "$chatbox",
"m": "{$message}"
},
EOD;

	if (!isset($_SESSION['chatHistory'][$chatbox])) {
		$_SESSION['chatHistory'][$chatbox] = '';
	}

	$_SESSION['chatHistory'][$chatbox] .= <<<EOD
		{
"s": "2",
"f": "$chatbox",
"m": "{$message}"
},
EOD;
			$_SESSION['tsChatBoxes'][$chatbox] = 1;
		}
		}
	}
}
        $this->db->update('chat',array('recd'=>1),array('to'=>$this->session->userdata['username']));
//	$sql = "update chat set recd = 1 where chat.to = '".mysql_real_escape_string($_SESSION['username'])."' and recd = 0";
//	$query = mysql_query($sql);

	if ($items != '') {
		$items = substr($items, 0, -1);
	}
header('Content-type: application/json');
?>
{
		"items": [
			<?php echo $items;?>
        ]
}

<?php
			exit(0);
}

}

?>