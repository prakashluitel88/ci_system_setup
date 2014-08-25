<div class="panel-body">
    <?php
    $attributes = array('name' => 'process', 'role' => 'form', 'method' => 'post');
    echo form_open('login/process', $attributes);
    ?>
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