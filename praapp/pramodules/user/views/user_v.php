<div class="panel panel-default">
    <div class="panel-heading">
        <button id="user" class="btn btn-success">Create User</button>
    </div>
    
    <div id="user_form" class="panel-body" style="display: none;">
        <div class="col-lg-6">
            <form name="form_user" role="form" id="form_user" method="post">  
                
                <div class="form-group">
                    <label><?php echo lang('select_group');?></label>
                    <select name="group_id" id="group_id" class="form-control" onchange="listRole(this.value);">
                        <option value="choose_group"><?php echo lang('choose_group');?></option>
                        <?php foreach ($groups as $group) { ?>
                        
                        <option value="<?php echo $group->id;?>" ><?php echo $group->name;?></option>                        
                        <?php } ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <span id="role_list">
                        <label><?php echo lang('select_role');?></label>
                        <select name="role_id" id="role_id" class="form-control">
                            <option value="choose_role"><?php echo lang('choose_role');?></option>
                            <?php if($role) { foreach ($role as $row) {?>

                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>                        
                            <?php } }?>
                        </select>
                    </span>
                </div>
                
                <div class="form-group">
                    <input name="username" placeholder="<?php echo lang('enter_username');?>" class="form-control">
                </div>
                <div class="form-group">
                    <input name="password" type="password" placeholder="<?php echo lang('enter_password');?>" class="form-control">
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="status" value="1"><?php echo lang('status');?>
                        </label>
                    </div>
                </div>               
                <!--<button onclick="return false;" id="submit" class="btn btn-success" type="submit">Submit</button>-->
                <button onclick="return false;" type="submit" class="btn btn-success"><?php echo lang('add');?></button>
                <button id="reset" class="btn btn-success" type="reset"><?php echo lang('reset');?></button>
            </form>
            
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-user">
                <thead>
                    <tr>
                        <th><?php echo lang('sn');?></th>
                        <th><?php echo lang('username');?></th>
                        <th><?php echo lang('group');?></th>
<!--                        <th><?php // echo lang('password');?></th>-->
                        <th><?php echo lang('roles');?></th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $sn = 1; 
                        foreach ($users as $user) { ?>
                            <tr class="odd gradeX">
                                <td><?php echo $sn;?></td>
                                <td><?php echo $user->username;?></td>
                                <td><?php echo $this->common_m->getById('prak_group','id',$user->group_id)->name;?></td>
                                <td><?php echo $this->common_m->getById('prak_role','id',$user->role_id)->name;?></td>
                            </tr>
                    <?php  $sn++; } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.panel-body -->
</div>
<style>
    .glyphicon-ok:before {   
        margin-left: 42px;
    }
    .glyphicon-remove:before {
        margin-left: 42px;
    }
</style>
<?php $this->load->resource('user/js/user_r'); ?>