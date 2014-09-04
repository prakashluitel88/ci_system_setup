<script type="text/javascript">
$( document ).ready(function() {
   
    $('a#loginBtn').click(function(){
        var username = $('#username').val();
        var password = $('#password').val();
        var url = "<?php echo base_url() ?>login/process";        
        
        $.ajax({
            type: 'POST',
            url: url,
            data:{username: username, password: password},
            success: function(data){
                if(data == "Success"){
                    window.location= "<?php echo base_url();?>dash";
                }else {
                    window.location= "<?php echo base_url();?>login";
                }
               
            },
            error:function(){
                alert("error");
            }
            
        });
        
    });
});
</script>