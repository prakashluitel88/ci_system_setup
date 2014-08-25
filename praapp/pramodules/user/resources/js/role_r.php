<script>
    $(document).ready(function(){
        $('#dataTables-role').dataTable();
        
        $('#form_role')
            .on('init.form.bv', function(e, data) {
                data.bv.disableSubmitButtons(true);
            })
            .on('success.field.bv', function(e, data) {
                var isValid = data.bv.isValid();
                data.bv.disableSubmitButtons(!isValid);
            })
            .bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    name: {
                        message: 'The username is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The Role name is required and cannot be empty'
                            },
                            stringLength: {
                                min: 4,
                                max: 30,
                                message: 'The role name must be more than 4 and less than 30 characters long'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_]+$/,
                                message: 'The role name can only consist of alphabetical, number and underscore'
                            }
                        }
                    },
                    description: {
                        validators: {
                            notEmpty: {
                                message: 'The description is required and cannot be empty'
                            },
                            stringLength: {
                                min: 5,
                                max: 200,
                                message: 'The description must be more than 5 and less than 200 characters long'
                            }
                        }
                    }
                }
            })
            .on('success.form.bv', function(e) {
                e.preventDefault();
                var $form = $(e.target),
                bv    = $form.data('bootstrapValidator');
                $.post($form.attr('action'), $form.serialize(), function(result) {
                    $('#alertBox').removeClass('hide').alert();
                }, 'json');
            });
        
        // Hide / Show Create Role Form
       
    });
    $( 'button#role' ).click(function() {
        if ($( 'button#role' ).html() == 'Hide Form') {
            $( '#role_form' ).css( 'display', 'none' );
            $( 'button#role' ).html('Create Role');
        } else if ($( 'button#role' ).html() == 'Create Role') {
            $( '#role_form' ).css( 'display', 'block' );
            $( 'button#role' ).html('Hide Form');
        }
    });
    
    $( 'button[type=submit]' ).click(function() {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>user/role/create',
            data: $("#form_role").serialize(),
            success: function() {
                alert('Role Added Successfully!');
                $( '#role_form' ).hide();
                $( 'button#role' ).html('Create Role');
                resetForm();
            },
            error: function() {
                alert('Error in Adding Role!');
            }
        });
    });
    
    function resetForm() {
        // Reset form
        $('form[name=form_role]').clearForm();
        $('form[name=form_role] i.glyphicon').css( 'display', 'none' );
        $('form div.form-group').removeClass('has-success');
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
