<script type="text/javascript">
    $( document ).ready(function(){
        originalTitle = document.title;
	startChatSession();

	jQuery([window, document]).blur(function(){
		windowFocus = false;
	}).focus(function(){
		windowFocus = true;
		document.title = originalTitle;
	});
        
       $(document).keypress(function(e) {
            if(e.which == 13) {
                $('#btn-chat').click();
            }
        });
        
        var last_chat_id = "<?php echo !empty($last_msg_id) ? $last_msg_id->message_id:'0';?>";
        
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
        //loading the ajax call in each 3 sec
        //setInterval (loadLog, 3000);
        
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
                        //alert("data added sucessfully");
                        $('#txt_message').val('');
                        
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
                          
                            if(data == 1) {                              
                                //refresh the chatbox div
                                $("#chatbox").load(location.href+" #chatbox>*",""); 
                                //place the scroll bar to the bottom
                                window.setInterval(function() {
                                    var elem = document.getElementById('chatbox');
                                    elem.scrollTop = elem.scrollHeight;
                                  }, 2000);
                                return false;
                            }
                            return false;                            
                            			
                    },
            });
        }
        
        

});
</script>
