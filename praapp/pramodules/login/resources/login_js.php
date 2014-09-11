<script type="text/javascript">
$( document ).ready(function() {
   
    $('a#loginBtn').click(function(){
        var username = $('#username').val();
        var password = $('#password').val();
        
        if (username == '') {
            alert("Enter Username");
            return false;
        }
        if (password == '') {
            alert("Enter Password");
            return false;
        }
        
        var url = "<?php echo base_url() ?>login/process";        
        
        $.ajax({
            type: 'POST',
            url: url,
            data:{username: username, password: password},
            success: function(data){
                if(data == "1"){
                    window.location= "<?php echo base_url();?>dash";
                }else {
                    $('div h3.errmsg').html("Invalid username and/or password.").css('color','red');
                    return false;
                }
               
            },
            error:function(){
                alert("error");
            }
            
        });
        
    });
});
</script>