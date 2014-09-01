<div class="panel panel-default">
    <div class="panel-heading">
        <button id="role" class="btn btn-success"><?php echo lang('add_role');?></button>
    </div>
    <div id="role_form" class="panel-body" style="display: none;">
        <div class="col-lg-6">
            <form name="form_role" role="form" id="form_role" method="post">
                <div class="form-group">
                    <select name="group_id" id="group_id" class="form-control">
                        <option><?php echo lang('choose_group');?></option>
                        <?php foreach ($groups as $group) { ?>
                        
                        <option value="<?php echo $group->id;?>"><?php echo $group->name;?></option>                        
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <input name="name" placeholder="<?php echo lang('role_placeholder_name');?>" class="form-control">
                </div>
                <div class="form-group">
                    <textarea placeholder="<?php echo lang('role_placeholder_desc');?>" name="description" rows="3" class="form-control"></textarea>
                </div>
                <!--<button onclick="return false;" id="submit" class="btn btn-success" type="submit">Submit</button>-->
                <button onclick="return false;" type="submit" class="btn btn-success"><?php echo lang('sign_up');?></button>
                <button id="reset" class="btn btn-success" type="reset"><?php echo lang('reset');?></button>
            </form>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-role">
                <thead>
                    <tr>
                        <th><?php echo lang('sn');?></th>
                        <th><?php echo lang('name');?></th>
                        <th><?php echo lang('group');?></th>
                        <th><?php echo lang('description');?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $sn = 1; ?>
                    <?php foreach ($roles as $role) { ?>
                        <tr class="odd gradeX">
                            <td><?php echo $sn++; ?></td>
                            <td><?php echo $role->name; ?></td>
                            <td><?php echo $this->common_m->getById('prak_group', 'id', $role->group_id,'name')->name; ?></td>
                            <td><?php echo $role->description; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.panel-body -->
</div>

<?php $this->load->resource('user/js/role_r'); ?>
<?php $this->load->resource('user/css/role_r'); ?>