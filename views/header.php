<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>POstR</title>

    <!-- Bootstrap -->
    <link href="<?php echo URL; ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="<?php echo URL; ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom -->
    <link href="<?php echo URL; ?>public/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo URL; ?>vendor/components/jquery/jquery.min.js"></script>
    <?php
    if(isset($this->js)) {
        foreach($this->js as $js) {
            echo '<script src="'.URL.'views/'.$js.'"></script>';
        }
    }
    ?>
    <script src="<?php echo URL; ?>vendor/validation/dist/jquery.validate.min.js"></script>
</head>
<body>
    <?php Session::init(); ?>
    <header id="header">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo URL; ?>">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo URL; ?>dashboard/index">New</a></li>
                        <li><a href="<?php echo URL; ?>dashboard/all">Dashboard</a></li>

                        <?php if(Session::get('loggedIn') == TRUE):?>
                            <li><a href="<?php echo URL; ?>dashboard/logout">Logout</a></li>
                        <?php else: ?>
                            <li><a href="<?php echo URL; ?>login">Login</a></li>
                        <?php endif; ?>

                        <li><a href="<?php echo URL; ?>help">Help</a></li>

                        <?php if(Session::get('moderator') == TRUE): ?>
                            <li><a href="<?php echo URL; ?>dashboard/moderate">Moderation</a></li>
                        <? endif; ?>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
    <main id="content" class="container">