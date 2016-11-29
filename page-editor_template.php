<?php
/* Template Name: editor */
get_header();
?>

<div class="word-count editor_page">
    <h4>Quick start</h4>
    <div class="flex-wrapper soopz-input">
        <textarea onkeyup="textAreaAdjust(this)" name="content" class="flex-item form-control" type="text" placeholder="Type your social message..."></textarea>
        <div class="counters flex-item">
            <ul class="counters">
                <li class="char-count"><span>Characters </span><span class="chars item_circle">0</span></li>
                <li class="word-count"><span>Words</span><span class="words item_circle">0</span></li>
                <li class="par-count"><span>Paragraphs</span><span class="paras item_circle">0</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="flex-wrapper new_textarea ion-ios-plus-outline">
    <span class="flex-item new-input">New input</span>
    <span class="empty-flex-item"></span>
</div>
<div id="global-count">
    <span class="flex-item">Characters</span><span class="chars item_circle">0</span>
    <span class="flex-item">Words</span><span class="words item_circle">0</span>
    <span class="flex-item">Paragraphs</span><span class="paras item_circle">0</span>
</div>
<div class="text_area_items">
    <div class="textare_buttons">
        <span id="btn-open" class="button">Share</span>
        <span id="btn-save" class="button">Save</span>
        <span class="button">Copy All</span>
    </div>
    <p class="post_success_message">YOUR POST SAVED SUCCESSFULLY</p>
    <div id="i_loading" class="ajax_loader_image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif"></div>
</div>
<div class="all_posts">
    <h4>Posts</h4>
    <div class="post_row">
        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish'
        );
        $posts_array = get_posts($args);
        foreach ($posts_array as $value) {
            $post_id = $value->ID;
            $post_title = $value->post_title;
            $post_content = $value->post_content;
            ?>
        
        <div>
            <a target="_blanck" href="<?php echo get_permalink(55);?>/?post_id=<?php echo $post_id;?>"><span class="post_text"><?php echo $post_title; ?></span>
            <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
        </div>
        <?php
        }
        ?>
        <!--        <div>
                <span class="post_text">This is preview of a post that has been saved along with...</span>
                <i class="fa fa-google-plus" aria-hidden="true"></i>
                </div>
                <div>
                <span class="post_text">This is preview of a post that has been saved along with...</span>
               <i class="fa fa-twitter" aria-hidden="true"></i>
                </div>
                <div>
                <span class="post_text">This is preview of a post that has been saved along with...</span>
                <i class="fa fa-pinterest" aria-hidden="true"></i>
                </div>-->
    </div>
</div>

<div id="popup-content">
    <div class="popup_content"></div>
    <p class="post_success_message_for_popup">YOUR POST SAVED SUCCESSFULLY</p>
    <div id="i_loading_for_popup" class="ajax_loader_image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif"></div>
    <div class="popup_footer">
        <div class="popup_footer_text">
            <span>Press CMD+C to copy all text.</span>
        </div>
        <div class="popup_footer_buttons">
            <span class="button popup-button">Share</span>
            <span id="popup-save-btn" class="button save-button">Save</span>
        </div>
    </div>
</div>
<div id="popup-content-share">
    <div class="popup_content_share">
        <div id="social-buttons" class="">
            <?php
            if (function_exists('social_warfare')):
                social_warfare();
            endif;
            ?>
        </div>
        <div class="sharing_text">
            <p>Your selected text will be added to the network share of your choosing.For multiple inputs,use the Copy All option.</p>
            <p>Sharing courtesty of <strong><a href="#">Social Warfare</a></strong> by <strong><a href="#">Warfare Plugins</a></strong>.</p>
        </div>
    </div>

</div>
<?php get_footer(); ?>
