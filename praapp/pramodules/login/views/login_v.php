<?php $this->load->view('common/login_header_v'); ?>
<style>
<?php $this->load->resource('common/js/jquery-1.11.0.js'); ?>
</style>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div>
                    <h3 class="panel-title errmsg"><?php if ($this->session->flashdata('error')) { echo $this->session->flashdata('error');} ?></h3>
                </div>
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo lang('header'); ?></h3>
                </div>
                <div class="panel-body">
                    <?php 
                        $attributes = array('name' => 'process', 'role' => 'form', 'method' => 'post');
                        echo form_open('', $attributes); 
                    ?>
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="<?php echo lang('username'); ?>" name="username" id="username" type="text" autofocus>
                                <?php echo form_error('username','<div class="error uerror">', '</div>');?>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="<?php echo lang('password'); ?>" name="password" id="password" type="password" value="">
                                <?php echo form_error('password','<div class="error">', '</div>');?>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me"><?php echo lang('remember_me'); ?>
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <a name="submitBtn" id="loginBtn" class="btn btn-lg btn-success btn-block"><?php echo lang('login');?></a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('common/login_footer_v'); ?><!-- Common Resources load -->
<?php $this->load->resource('login/login_js'); ?><!-- Page Specific Resources load -->
<?php $this->load->view('common/login_footer_html_v'); ?><!-- End of body, html tags  -->

