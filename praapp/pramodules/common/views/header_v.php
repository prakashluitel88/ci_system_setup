<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>
    <style>
        <?php $this->load->resource('common/css/bootstrap.min.css'); ?>
        <?php $this->load->resource('common/css/plugins/metisMenu/metisMenu.min.css'); ?>
        <?php $this->load->resource('common/css/sb-admin-2.css'); ?>
        <?php $this->load->resource('common/font-awesome-4.1.0/css/font-awesome.min.css'); ?>
        <?php $this->load->resource('common/css/header.css'); ?>
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="top-menu">
        <div class="usermenu">
            <ul class="navbar-nav navbar-right nav">
                <li class="divider divider-locales"><span></span></li><li class="locales active"><a href="<?php echo base_url() . 'common/switchLanguage?lang=en&current_url=' . current_url(); ?>" >en</a></li>
                <li class="locales last"><a href="<?php echo base_url() . 'common/switchLanguage?lang=fr&current_url=' . current_url(); ?>">fr</a></li></ul>
        </div>					
    </div>