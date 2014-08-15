<script>
    $(document).ready(function() {
        $( '#dataTables-group' ).dataTable();
    });
    
    // Hide / Show Create Group Form
    $( 'button#group' ).click(function() {
        if ($( 'button#group' ).html() == 'Hide Form') {
            $( '#group_form' ).css( 'display', 'none' );
            $( 'button#group' ).html('Create Group');
        } else if ($( 'button#group' ).html() == 'Create Group') {
            $( '#group_form' ).css( 'display', 'block' );
            $( 'button#group' ).html('Hide Form');
        }
    });
    
    $( 'button#submit' ).click(function() {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>user/group/create',
            data: $("#form_group").serialize(),
            success: function() {
                //alert('succeed');
            },
            error: function() {
                alert('Error in Connection!');
            }
        });
    });
</script>
