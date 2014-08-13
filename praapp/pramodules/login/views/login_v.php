<?php $this->load->view('common/header_v'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo lang('header'); ?></h3>
                </div>
                <div class="panel-body">
                    <form role="form" action='<?php echo base_url() . "login/process" ; ?>' method='post' name='process'>
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="<?php echo lang('username'); ?>" name="username" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="<?php echo lang('password'); ?>" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me"><?php echo lang('remember_me'); ?>
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <a href="<?php echo base_url(); ?>login/process" class="btn btn-lg btn-success btn-block"><?php echo lang('login'); ?></a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $this->load->view('common/footer_v'); ?><!-- Common Resources load -->
<?php $this->load->resource('login/login_js'); ?><!-- Page Specific Resources load -->
<?php $this->load->view('common/footer_html_v'); ?><!-- End of body, html tags  -->

