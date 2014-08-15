<?php
    //echo base_url();
    //echo $this->dynamic_menu->build_menu('1');
?>

<?php $this->load->view('common/header_v'); ?>
<?php $this->load->view('common/sidebar_v'); ?>

    <div id="wrapper">

        <?php $this->load->view('common/topmenu_v'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php if($page_title) echo $page_title; ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <?php $this->load->view($page_view); ?>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php $this->load->view('common/footer_v'); ?><!-- Common Resources load -->
<?php $this->load->view('common/footer_html_v'); ?><!-- End of body, html tags  -->
