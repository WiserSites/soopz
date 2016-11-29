<?php
/* Template Name: Login */
?>
<?php
if ( is_user_logged_in() ){
    //wp_redirect(get_permalink(8));
}
?>
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

        <!-- Favicon
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link rel="icon" type="image/png" href="images/favicon.png">

    </head>
    <body>
        <div id="wrapper">
            <div id="content_login" class="login_page">
                <div id="container_login">
                    <div class='login_page_logo'>
                        <?php
                        $image_id = get_field("login_page_logo");
                        $image_url = wp_get_attachment_url($image_id);
                        ?>
                        <img src='<?php echo $image_url ?>'>
                    </div>

                    <div class='login_page_headline'>
                        <?php
//                        $headline = get_field("login_page_headline");
                        ?>
                        <!--<h1><?php // echo $headline;  ?></h1>-->
                    </div>
                    <?php
                    if ( !is_user_logged_in() ) {
                    ?>
                    <div class="sign_in_form">
                        <form action="">
                            <input type="text" name="email" placeholder="Email">
                            <input type="password" name="password" placeholder="Password">
                        </form>
                    </div>
                    <div class='login_page_sign_buuttons'>
                        <div class="connect_other_account">
                            <div class="conect_with_other_social">
                                <div class="all_social_buttons">
                                    <div class='google_plus_button'>
                                        <a href="http://soopz.com/wp-login.php?loginGoogle=1&redirect=http://soopz.com"
                                           class="button google-plus-button"
                                           onclick="window.location = 'http://soopz.com/wp-login.php?loginGoogle=1&redirect='+window.location.href; return false;">Google+</a>
                                    </div>
                                    <div class='facebook_button'>
                                        <a href="http://soopz.com/wp-login.php?loginFacebook=1&redirect=http://soopz.com"
                                           class="button facebook-button"
                                           onclick="window.location = 'http://soopz.com/wp-login.php?loginFacebook=1&redirect='+window.location.href; return false;">Facebook</a>
                                    </div>
                                    <div class='twitter_button'>
                                        <a href="http://soopz.com/wp-login.php?loginTwitter=1&redirect=http://soopz.com"
                                           class="button twitter-button"
                                           onclick="window.location = 'http://soopz.com/wp-login.php?loginTwitter=1&redirect='+window.location.href; return false;">Twitter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="register_new_account">
                            <p>New here?<a href="#"> Register</a> an account.</p>
                        </div>

                        <?php
                        } else {
                            echo 'You already logged in';

                            //$user_info = get_user_meta( get_current_user_id() );
                            //$user_profile_picture = get_user_meta( get_current_user_id(), 'fb_profile_picture', true );
//                            echo '<pre>';print_r( $user_info );
                        }
                        ?>
                </div>

            </div>
        </div>

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
        <script src="http://soopz.com/wp-content/themes/soopz-0-3/word-counter.js"></script>

        <!-- End Document
          –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    </body>
</html>
