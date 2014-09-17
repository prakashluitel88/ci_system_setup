<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="<?php echo lang('search');?>">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a class="active" href="<?php echo base_url(); ?>dash"><i class="fa fa-dashboard fa-fw"></i> <?php echo lang('dashboard');?></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i><?php echo lang('charts');?><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="flot.html">Flot Charts</a>
                    </li>
                    <li>
                        <a href="morris.html">Morris.js Charts</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li class="<?php echo $this->uri->segment(2) == 'user' ? 'active' : ''; ?>">
                <a href="#"><i class="fa fa-users fa-fw"></i> <?php echo lang('manage');?><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo base_url(); ?>user/group"><?php echo lang('group');?></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>user/role"><?php echo lang('role');?></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>user/user"><?php echo lang('user');?></a>
                    </li>
                </ul>
                <!-- /.nav-third-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Active Users<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="flot.html">Flot Charts</a>
                    </li>
                    <li>
                        <a href="morris.html">Morris.js Charts</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->