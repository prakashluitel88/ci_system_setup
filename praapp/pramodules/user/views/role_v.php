<div class="panel panel-default">
    <div class="panel-heading">
        <button id="role" class="btn btn-success">Create Role</button>
    </div>
    <div id="role_form" class="panel-body" style="display: none;">
        <div class="col-lg-6">
            <form name="form_role" role="form" id="form_role" method="post">
                <div class="form-group">
                    <select name="group_id" id="group_id" class="form-control">
                        <option>Choose Group</option>
                        <?php foreach ($groups as $group) { ?>
                        
                        <option value="<?php echo $group->id;?>"><?php echo $group->name;?></option>                        
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <input name="name" placeholder="Enter Role Name..." class="form-control">
                </div>
                <div class="form-group">
                    <textarea placeholder="Enter Role Description..." name="description" rows="3" class="form-control"></textarea>
                </div>
                <!--<button onclick="return false;" id="submit" class="btn btn-success" type="submit">Submit</button>-->
                <button onclick="return false;" type="submit" class="btn btn-success">Sign up</button>
                <button id="reset" class="btn btn-success" type="reset">Reset</button>
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
                        <th>SN.</th>
                        <th>Name</th>
                        <th>Group</th>
                        <th>Description</th>
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