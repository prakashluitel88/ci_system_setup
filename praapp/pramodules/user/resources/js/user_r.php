<script>
    $(document).ready(function(){
        $('#dataTables-user').dataTable();
        
    });
    
    // Hide / Show Create User Form
    $( 'button#user' ).click(function() {
        if ($( 'button#user' ).html() == 'Hide Form') {
            $( '#user_form' ).css( 'display', 'none' );
            $( 'button#user' ).html('Create User');
        } else if ($( 'button#user' ).html() == 'Create User') {
            $( '#user_form' ).css( 'display', 'block' );
            $( 'button#user' ).html('Hide Form');
        }
    });
    
    function resetForm() {
        // Reset form
        $('form[name=form_group]').clearForm();
        $('form[name=form_group] i.glyphicon').css( 'display', 'none' );
        $('form div.form-user').removeClass('has-success');
        $( 'form button[type=submit]' ).attr('disabled', 'disabled');
    }
    
    $( 'button[type=reset]' ).click(function() {
        resetForm();
    });
    
    // Clear Form plugin
    $.fn.clearForm = function() {
        return this.each(function() {
            var type = this.type, tag = this.tagName.toLowerCase();
            if (tag == 'form')
                return $(':input', this).clearForm();
            if (type == 'text' || type == 'password' || tag == 'textarea')
                this.value = '';
            else if (type == 'checkbox' || type == 'radio')
                this.checked = false;
            else if (tag == 'select')
                this.selectedIndex = -1;
        });
    };
    
</script>
