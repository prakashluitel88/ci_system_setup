<div class="panel panel-default">
    <div class="panel-heading">
        <button id="role" class="btn btn-success">Create Role</button>
    </div>
    <div id="role_form" class="panel-body" style="display: none;">
        <div class="col-lg-6">
            <form name="form_role" role="form" id="form_role" method="post">
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
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $sn = 1; ?>
                    <?php foreach ($groups as $group) { ?>
                        <tr class="odd gradeX">
                            <td><?php echo $sn++; ?></td>
                            <td><?php echo $group->name; ?></td>
                            <td><?php echo $group->description; ?></td>
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