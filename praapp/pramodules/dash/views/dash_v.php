<!-- /.panel -->
<style type="text/css" media="screen">
			.chat_time {
				font-style: italic;
				font-size: 9px;
			}
		</style>
		


<div class="chat-panel panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-comments fa-fw"></i>
        Chat
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
    <div class="panel-body">
        <ul class="chat">
            <li class="left clearfix">
                <span class="chat-img pull-left">
                    <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                </span>
                <div class="chat-body clearfix">
                    <div class="header">
                        <strong class="primary-font">Jack Sparrow</strong> 
                        <small class="pull-right text-muted">
                            <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                        </small>
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
            </li>
        </ul>
    </div>
    <!-- /.panel-body -->
    <div class="panel-footer">
        <div class="input-group">
            <input id="btn-input" id="txt_message"  name="txt_message" type="text" class="form-control input-sm" placeholder="Type your message here..." />
            <span class="input-group-btn">
                <button class="btn btn-warning btn-sm" id="btn-chat" name="btn_send_chat" id="btn_send_chat" onclick="javascript:sendChatText();" >
                    Send
                </button>
            </span>
        </div>
    </div>
    <!-- /.panel-footer -->
</div>
<div class="chat" onload="javascript:startChat();">
		<p id="p_status">Status: Normal</p>
		Current Chitter-Chatter:
		<div id="div_chat" style="height: 300px; width: 500px; overflow: auto; background-color: #CCCCCC; border: 1px solid #555555;">
			
		</div>
		<form id="frmmain" name="frmmain" onsubmit="return blockSubmit();">
			<input type="button" name="btn_get_chat" id="btn_get_chat" value="Refresh Chat" onclick="javascript:getChatText();" />
			<input type="button" name="btn_reset_chat" id="btn_reset_chat" value="Reset Chat" onclick="javascript:resetChat();" /><br />
<!--			<input type="text" id="txt_message" name="txt_message" style="width: 447px;" />-->
<!--			<input type="button" name="btn_send_chat" id="btn_send_chat" value="Send" onclick="javascript:sendChatText();" />-->
		</form>
</div>
<!-- /.panel .chat-panel -->