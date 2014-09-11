<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo lang('dashboard_header');?></title>
    <link href="<?php echo base_url(); ?>../praapp/pramodules/common/resources/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>../praapp/pramodules/common/resources/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>../praapp/pramodules/common/resources/bower-form-validate/dist/css/bootstrapValidator.min.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        <?php $this->load->resource('common/css/plugins/metisMenu/metisMenu.min.css'); ?>
        <?php $this->load->resource('common/css/plugins/dataTables.bootstrap.css'); ?>
        <?php $this->load->resource('common/css/sb-admin-2.css'); ?>
        <?php $this->load->resource('common/css/header.css'); ?>
        <?php $this->load->resource('common/css/plugins/timeline.css'); ?>
        <?php $this->load->resource('common/css/plugins/morris.css'); ?>
    </style>
    <script type="text/javascript">
        <?php $this->load->resource('common/js/jquery-1.11.0.js'); ?>
    </script>
    <script type="text/javascript" src="<?php echo base_url(); ?>../praapp/pramodules/common/resources/bower-form-validate/dist/js/bootstrapValidator.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>../praapp/pramodules/common/resources/bower-form-validate/dist/js/language/en_US.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script language="JavaScript" type="text/javascript">
			var sendReq = getXmlHttpRequestObject();
			var receiveReq = getXmlHttpRequestObject();
			var lastMessage = 0;
			var mTimer;
			//Function for initializating the page.
			function startChat() {
				//Set the focus to the Message Box.
				document.getElementById('txt_message').focus();
				//Start Recieving Messages.
				getChatText();
			}		
			//Gets the browser specific XmlHttpRequest Object
			function getXmlHttpRequestObject() {
				if (window.XMLHttpRequest) {
					return new XMLHttpRequest();
				} else if(window.ActiveXObject) {
					return new ActiveXObject("Microsoft.XMLHTTP");
				} else {
					document.getElementById('p_status').innerHTML = 'Status: Cound not create XmlHttpRequest Object.  Consider upgrading your browser.';
				}
			}
			
			//Gets the current messages from the server
			function getChatText() {alert("test");return false;
				if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
					receiveReq.open("GET", 'getChat.php?chat=1&last=' + lastMessage, true);
					receiveReq.onreadystatechange = handleReceiveChat; 
					receiveReq.send(null);
				}			
			}
			//Add a message to the chat server.
			function sendChatText() {
				if(document.getElementById('txt_message').value == '') {
					alert("You have not entered a message");
					return;
				}
				if (sendReq.readyState == 4 || sendReq.readyState == 0) {
					sendReq.open("POST", 'getChat.php?chat=1&last=' + lastMessage, true);
					sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
					sendReq.onreadystatechange = handleSendChat; 
					var param = 'message=' + document.getElementById('txt_message').value;
					param += '&name=Ryan Smith';
					param += '&chat=1';
					sendReq.send(param);
					document.getElementById('txt_message').value = '';
				}							
			}
			//When our message has been sent, update our page.
			function handleSendChat() {
				//Clear out the existing timer so we don't have 
				//multiple timer instances running.
				clearInterval(mTimer);
				getChatText();
			}
			//Function for handling the return of chat text
			function handleReceiveChat() {
				if (receiveReq.readyState == 4) {
					var chat_div = document.getElementById('div_chat');
					var xmldoc = receiveReq.responseXML;
					var message_nodes = xmldoc.getElementsByTagName("message"); 
					var n_messages = message_nodes.length
					for (i = 0; i < n_messages; i++) {
						var user_node = message_nodes[i].getElementsByTagName("user");
						var text_node = message_nodes[i].getElementsByTagName("text");
						var time_node = message_nodes[i].getElementsByTagName("time");
						chat_div.innerHTML += user_node[0].firstChild.nodeValue + '&nbsp;';
						chat_div.innerHTML += '<font class="chat_time">' + time_node[0].firstChild.nodeValue + '</font><br />';
						chat_div.innerHTML += text_node[0].firstChild.nodeValue + '<br />';
						chat_div.scrollTop = chat_div.scrollHeight;
						lastMessage = (message_nodes[i].getAttribute('id'));
					}
					mTimer = setTimeout('getChatText();',2000); //Refresh our chat in 2 seconds
				}
			}
			//This functions handles when the user presses enter.  Instead of submitting the form, we
			//send a new message to the server and return false.
			function blockSubmit() {
				sendChatText();
				return false;
			}
			//This cleans out the database so we can start a new chat session.
			function resetChat() {
				if (sendReq.readyState == 4 || sendReq.readyState == 0) {
					sendReq.open("POST", 'getChat.php?chat=1&last=' + lastMessage, true);
					sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
					sendReq.onreadystatechange = handleResetChat; 
					var param = 'action=reset';
					sendReq.send(param);
					document.getElementById('txt_message').value = '';
				}							
			}
			//This function handles the response after the page has been refreshed.
			function handleResetChat() {
				document.getElementById('div_chat').innerHTML = '';
				getChatText();
			}	
		</script>

</head>

<body onload="javascript:startChat();">
