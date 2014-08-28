<script>
    $(document).ready(function(){
        
        // Clear form on each page load
        $( 'form[name=form_user]' ).clearForm(  );
        
        // Datatables initialization
        $('#dataTables-user').dataTable();
        
        // Form Validation Plugin declaration
        $('#form_user')
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
                     group_id: { 
                       message: 'Choose the Group',
                        validators: {
                             notEmpty: {
                                message: 'select the group'
                             },
                            required: true
                        }
                    },
                    role_id: { 
                       message: 'Choose the Role',
                        validators: {
                             notEmpty: {
                                message: 'select the role'
                             },
                            required: true
                        }
                    },                    
                    username: {
                        message: 'The username is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The username is required and cannot be empty'
                            },
                            stringLength: {
                                min: 4,
                                max: 30,
                                message: 'The username must be more than 4 and less than 30 characters long'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_]+$/,
                                message: 'The username can only consist of alphabetical, number and underscore'
                            }
                        }
                    },                    
                    password: {
                        message: 'The password is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The password is required and cannot be empty'
                            },
                            stringLength: {
                                min: 4,
                                max: 30,
                                message: 'The password must be more than 4 and less than 30 characters long'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_]+$/,
                                message: 'The password can only consist of alphabetical, number and underscore'
                            }
                        }
                    },
                   
                    
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
        
    });
    
    //role list through ajax
    function listRole(id){
        var base_url = "<?php echo base_url();?>";
        
        $.post(base_url+'user/roleList',{id:id},function(data){
					  $("#role_list").html(data);					  
					});       
        
    }
 
   
    // Hide / Show Create User Form
    $( 'button#user' ).click(function() {
        if ($( 'button#user' ).html() == 'Hide Form') {
            $( '#user_form' ).css( 'display', 'none' );
            $( 'button#user' ).html('Create User');
        } else if ($( 'button#user' ).html() == 'Create User') {
            $('select#group_id').val('choose_group');
            $('select#role_id').val('choose_role');
            $( '#user_form' ).css( 'display', 'block' );
            $( 'button#user' ).html('Hide Form');
        }
    });
    
    function resetForm() {
        // Reset form
        $('form[name=form_user]').clearForm();
        $('form[name=form_user] i.glyphicon').css( 'display', 'none' );
        $('select#role_id').attr('disabled','disabled'); 
        $('form div.form-user').removeClass('has-success');
        $( 'form button[type=submit]' ).attr('disabled', 'disabled');
    }
    // Reset button click event
    $( 'button[type=reset]' ).click(function() {
        resetForm();
    });
    
    // Ajax Call to insert data
    $( 'button[type=submit]' ).click(function() {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>user/user/create',
            data: $("#form_user").serialize(),
            success: function() {
                alert('User Added Successfully!');
                $( '#user_form' ).hide();
                $( 'button#user' ).html('Create User');
                
                resetForm();
            },
            error: function() {
                alert('Error in Adding Role!');
            }
        });
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
