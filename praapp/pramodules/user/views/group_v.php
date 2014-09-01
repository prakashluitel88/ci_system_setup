<div class="panel panel-default">
    <div class="panel-heading">
        <button id="group" class="btn btn-success"><?php echo lang('add_group'); ?></button>
    </div>
    <div id="group_form" class="panel-body" style="display: none;">
        <div class="col-lg-6">
            <form name="form_group" role="form" id="form_group" method="post">
                <div class="form-group">
                    <input name="name" placeholder="<?php echo lang('group_placeholder_name');?>" class="form-control">
                </div>
                <div class="form-group">
                    <textarea placeholder="<?php echo lang('group_placeholder_description');?>" name="description" rows="3" class="form-control"></textarea>
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
            <table class="table table-striped table-bordered table-hover" id="dataTables-group">
                <thead>
                    <tr>
                        <th><?php echo lang('sn');?></th>
                        <th><?php echo lang('name');?></th>
                        <th><?php echo lang('description');?></th>
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

<?php $this->load->resource('user/js/group_r'); ?>
<?php $this->load->resource('user/css/group_r'); ?>