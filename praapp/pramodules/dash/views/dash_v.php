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

<script type="text/javascript">
    $( document ).ready(function(){
        var last_chat_id = "<?php echo !empty($last_msg_id) ? $last_msg_id->message_id:'';?>";
        
        //current time calculation
        var currentTime = new Date()
        var hours = currentTime.getHours()
        var minutes = currentTime.getMinutes()

        if (minutes < 10){
          minutes = "0" + minutes;
        }
        var suffix = "AM";
        if (hours >= 12) {
        suffix = "PM";
        hours = hours - 12;
        }
        if (hours == 0) {
        hours = 12;
        }
       var current_time = ( hours + ":" + minutes + " " + suffix );
        
        var username = "<?php echo $this->session->userdata('username');?>";
        setInterval (loadLog, 2500);
        
        $('#btn-chat').on('click',function(){
            var msg = $('#txt_message').val();
            if (msg == "") {
                alert("enter the message");
                return false;
            }
            $.ajax({
                    url: "<?php echo base_url();?>dash/insert",
                    data: {message: msg, current_time:current_time},
                    type: 'post',
                    success: function(data){
                        alert("data added sucessfully"); 
                        $("#chatbox").animate({ scrollTop: 1000}, 'normal');
                    },
            });
            
        });
        
        
        function loadLog(){
            var msg = $('#txt_message').val();
            $.ajax({
                    url: "<?php echo base_url();?>dash/getChat",
                    data: {last_chat_id:last_chat_id},
                    type: 'post',
                    cache: false,
                    success: function(data){
                            ///location.reload(); 
                            setInterval(function() {
                            $('#chatbox').load("<?php echo base_url();?>dash/dash_v.php");
                            }, 5000);
                             //Autoscroll to bottom of div
                            			
                    },
            });
        }

});
</script>