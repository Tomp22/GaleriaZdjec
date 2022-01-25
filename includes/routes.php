<link rel="stylesheet" href="<?php echo assets('global.css')?>" type="text/css" media="screen" charset="utf-8" />
<script src="js/jquery1.3.2/jquery.min.js"></script>
<link href="http://fonts.cdnfonts.com/css/roboto" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


<?php
$_routes = [
    'welcome/{param}' => 'index',
    'dashboard/{param}' => 'dashboard',
    'zdjecia/{param}' => 'zdjecia',
    'dokumenty/{param}' => 'dokumenty',
    'login/{param}' => 'login',
    'rejestracja/{param}' => 'rejestracja',

];