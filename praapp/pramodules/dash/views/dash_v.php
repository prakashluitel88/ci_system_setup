
<div class="chat-panel panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-comments fa-fw"></i>
        Group Chat 
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-chevron-down"></i>
            </button>
            <ul class="dropdown-menu slidedown">
                <li>
                    <a href="#">
                        <i class="fa fa-refresh fa-fw"></i> Refresh
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-check-circle fa-fw"></i> Available
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-times fa-fw"></i> Busy
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-clock-o fa-fw"></i> Away
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <i class="fa fa-sign-out fa-fw"></i> Sign Out
                    </a>
                </li>
            </ul>
        </div>
        
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body" id="chatbox">
        <?php if(!empty($chat_details)){
            foreach($chat_details as $row){ ?>
                <ul class="chat">
                    <li class="left clearfix">
                        <span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                        </span>
                        <div class="chat-body clearfix">
                            <div class="header">
                                <strong class="primary-font"><span id="chat_name"><?php echo $row->user_name;?></span></strong> 
                                <small class="pull-right text-muted">
                                    <i class="fa fa-clock-o fa-fw sess_time"></i><?php echo $row->post_time;?>
                                </small>
                            </div>
                            <div id="chatmsg">
                                <p>
                                    <?php echo $row->message;?>
                                </p>
                            </div>
                        </div>
                    </li>
<!--            <li class="right clearfix">
                <span class="chat-img pull-right">
                    <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                </span>
                <div class="chat-body clearfix">
                    <div class="header">
                        <small class=" text-muted">
                            <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                        <strong class="pull-right primary-font">Bhaumik Patel</strong>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                    </p>
                </div>
            </li>
            <li class="left clearfix">
                <span class="chat-img pull-left">
                    <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                </span>
                <div class="chat-body clearfix">
                    <div class="header">
                        <strong class="primary-font">Jack Sparrow</strong> 
                        <small class="pull-right text-muted">
                            <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                    </p>
                </div>
            </li>
            <li class="right clearfix">
                <span class="chat-img pull-right">
                    <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                </span>
                <div class="chat-body clearfix">
                    <div class="header">
                        <small class=" text-muted">
                            <i class="fa fa-clock-o fa-fw"></i> 15 mins ago</small>
                        <strong class="pull-right primary-font">Bhaumik Patel</strong>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                    </p>
                </div>
            </li>-->
        </ul>
            <?php }
        } ?>
        
    </div>
    <!-- /.panel-body -->
    <div class="panel-footer">
<!--        <input type="button" name="btn_get_chat" id="btn_get_chat" value="Refresh Chat" />
            <input type="button" name="btn_reset_chat" id="btn_reset_chat" value="Reset Chat" />-->            
        <div class="input-group">
            
            <input id="txt_message"  name="txt_message" type="text" class="form-control input-sm" placeholder="Type your message here..." />
            <span class="input-group-btn">                
                <button class="btn btn-warning btn-sm" id="btn-chat" name="btn_send_chat"> Send  </button>
            </span>
        </div>
    </div>
    <!-- /.panel-footer -->    
</div>

<?php $this->load->resource('dash/js/dash_r'); ?>
<?php $this->load->resource('dash/css/dash_r'); ?>
<style>
    .chatbox {
        position:fixed;
	margin-right: 10px;
	width: 225px;
        float:right;
}

.chatboxhead {
	background-color: #ACC9FD;
	padding:7px;
	color: #ffffff;

	border-right:1px solid #ACC9FD;
	border-left:1px solid #ACC9FD;
}

.chatboxblink {
	/*background-color: #176689;*/
	background-color: #6992FC;
	border-right:1px solid #176689;
	border-left:1px solid #176689;
}

.chatboxcontent {
	font-family: arial,sans-serif;
	font-size: 13px;
	color: #333333;
	height:200px;
	width:225px;
	overflow-y:auto;
	overflow-x:auto;
	padding:7px;
	border-left:1px solid #cccccc;
	border-right:1px solid #cccccc;
	border-bottom:1px solid #eeeeee;
	background-color: #ffffff;
	line-height: 1.3em;
}

.chatboxinput {
	padding: 5px;
	background-color: #ffffff;
	border-left:1px solid #cccccc;
	border-right:1px solid #cccccc;
	border-bottom:1px solid #cccccc;
}

.chatboxtextarea {
	width: 206px;
	height:44px;
	padding:3px 0pt 3px 3px;
	border: 1px solid #0066FF;
	margin: 1px;
	overflow:hidden;
}

.chatboxtextareaselected {
	border: 2px solid #ACC9FD;
	margin:0;
}

.chatboxmessage {
	margin-left:1em;
}

.chatboxinfo {
	margin-left:-1em;
	color:#666666;

}

.chatboxmessagefrom {
	margin-left:-1em;
	font-weight: bold;
}

.chatboxmessagecontent {
}

.chatboxoptions {
	float: right;
}

.chatboxoptions a {
	text-decoration: none;
	color: white;
	font-weight:bold;
	font-family:Verdana,Arial,"Bitstream Vera Sans",sans-serif;
}

.chatboxtitle {
	float: left;
	font-size:13px;
}

.chatboxhead {
		/*cursor:move !important;*/
}


</style>