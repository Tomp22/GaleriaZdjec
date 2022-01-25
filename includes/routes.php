<link rel="stylesheet" href="<?php echo assets('global.css')?>" type="text/css" media="screen" charset="utf-8" />
<script src="js/jquery1.3.2/jquery.min.js"></script>
<link href="http://fonts.cdnfonts.com/css/roboto" rel="stylesheet">


<header class="header">

<a href="<?php echo route('dashboard')?>" class="btn btn-primary">Dashboard</a>
<a href="<?php echo route('zdjecia')?>" class="btn btn-primary">zdjecia</a>
<a href="<?php echo route('login')?>" class="btn btn-primary">login me</a>

</header>
<?php
/**
 * Created by PhpStorm.
 * User: anands
 * Date: 17/07/16
 * Time: 12:54 PM
 */


$_routes = [
	
    
    'welcome/{param}' => 'index',
    'dashboard/{param}' => 'dashboard',
    'zdjecia/{param}' => 'zdjecia',
    'login/{param}' => 'login',

];