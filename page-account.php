<?php
/* Template Name: account */
get_header();
?>
<div class="twelve columns word-count account_page">
    <div class="user_info">
    <h4>Your info:</h4>
    <div class="user_all_data">
<!--        <span class="user_data user_name">First name</span>
        <span class="user_data user_last_name">Last name</span>
        <span class="user_data user_email">Email</span>-->
        <?php 
        $user_info = get_user_meta( get_current_user_id() );
                    $user = wp_get_current_user();
                    $user_name = $user_info["first_name"][0];
                    $user_last_name = $user_info["last_name"][0];
                    $user_id = $user->ID;
                    $user_email = $user->user_email;
//                    echo '<pre>';
//                    print_r($user);
//                    echo '</pre>';
        ?>
        
            <form action="#">
                <input class="user_data user_name" type="text" name="firstname" value="<?php echo $user_name;?>" placeholder="First name">
                <input class="user_data user_last_name" type="text" name="lastname" value="<?php echo $user_last_name;?>" placeholder="Last name" value="">
                <input class="user_data user_email" type="text" name="email" value="<?php echo $user_email;?>" placeholder="Email">
                <input class="user_data user_pass" type="password" name="pass" value="" placeholder="Password">
                <input class="user_data form_submit" type="submit" value="Save">
            </form> 

        
        
        </div>
    </div>
    <div class="connected_accounts">
        <h4>Connected Account(s):</h4>
        <div class="all_connection">

        </div>
    </div>
    <div class="connect_other_account">
        <h4>Connect Other Account:</h4>
        <div class="conect_with_other_social">
            <span class="ion-ios-plus-outline"></span>
            <div class="all_social_buttons">
                <div class='google_plus_button'>
                    <a class="button google-plus-button" href="#">Google+</a>
                </div>
                <div class='facebook_button'>
                    <a class="button facebook-button" href="#">Facebook</a>
                </div>
                <div class='twitter_button'>
                    <a class="button twitter-button" href="#">Twitter</a>
                </div>
            </div>
        </div>
    </div>
    <div class="sharing_options">
        <h4>Sharing Options:</h4>
        <div id="social-buttons" class="ten columns">
            <?php
            if (function_exists('social_warfare')):
                social_warfare();
            endif;
            ?>
        </div>
    </div>
    <div class="usage">
        <h4>Usage</h4>
        <div class="user_storage">
            <span class="storage_size">50MB / 50%</span>
            <span class="used_place"></span>
            <span class="free_place"></span>
        </div>
        <div class="upgrate_storage">
            <span class="button">Upgrate Storage</span>
        </div>
    </div>

</div>
