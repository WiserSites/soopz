<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Soopz by Warfare Plugins</title>
    <meta name="description" content="">
    <meta name="author" content="Warfare Plugins">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,700italic" rel="stylesheet" type="text/css">
    <link href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="/wp-content/themes/soopz-0-3/css/normalize.css">
    <link rel="stylesheet" href="/wp-content/themes/soopz-0-3/css/skeleton.css">
    <link rel="stylesheet" href="/wp-content/themes/soopz-0-3/style.css">

    <!-- Javascript
    ––––––––––––––––––––––––––––––––––––––––––––––––––  -->
    <script>
    function textAreaAdjust(o) {
        o.style.height = "1px";
        o.style.height = (0+o.scrollHeight)+"px";
    }
    </script>

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/lib/basicPopup/dist/css/basicPopup.css" rel="stylesheet">
<!-- <link href="css/basicPopupDark.css" rel="stylesheet"> -->
<!-- <link href="css/basicPopupClear.css" rel="stylesheet"> -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/lib/basicPopup/dist/css/basicPopupDefault.css" rel="stylesheet">
<script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/basicPopup/dist/js/jquery.basicPopup.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/script.js"></script>
</head>
<body>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="header twelve columns">
    <nav class="navbar">
        <div class="nav-container">
            <ul class="navbar-list logo">
                <li class="navbar-item nine columns">
                    <a href="<?php echo get_permalink(8);?>" class="navbar-link"><img src="/wp-content/themes/soopz-0-3/images/logo.png" /></a>
                </li>
            </ul>
            <div class="user-menu two columns">
                <div class="user_data">
                    <?php
                    $user_info = get_user_meta( get_current_user_id() );
//                    echo '<pre>';
//                    print_r($user_info);
//                    echo '</pre>';
                    $user = wp_get_current_user();
                    $user_name = $user_info["first_name"][0];
                    $user_last_name = $user_info["last_name"][0];
                    $user_id = $user->ID;
//                    $args = get_avatar_data( $user_id);
                            $user_profile_picture = get_user_meta( get_current_user_id(), 'fb_profile_picture', true );
                    ?>
                    <span class="profile-username"><?php echo $user_name." ".$user_last_name;?></span>
                        <img src="<?php echo $user_profile_picture;?>">
                </div>
                    <?php wp_nav_menu( array(
                    'menu' => 'Header account menu'
                ) );?>
            </div>
        </div>
    </nav>
</div>
<div class="container">
    <div class="row">