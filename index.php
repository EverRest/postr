<?php
require 'config/paths.php';
require 'config/database.php';
require 'libs/Database.php';
require 'libs/Session.php';
require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/model.php';
require 'libs/View.php';
require 'libs/Captcha.php';
require 'libs/XSS.php';
$app = new Bootstrap();
?>
