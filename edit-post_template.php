<?php
/* Template Name: edit post */
get_header();

if(isset($_GET['post_id']) && is_numeric($_GET['post_id']))
    {
        $post_id = $_GET['post_id'];
}
?>
<div class="twelve columns word-count edit_post">
    <?php
        $post = get_post( $post_id );
        $post_title = $post->post_title;
        $post_content = $post->post_content;
        $output_ =  apply_filters( 'the_content', $post->post_title );
        $output =  apply_filters( 'the_content', $post->post_content );
//        $post_title = str_replace('<', '&lt;', $post_title);
//        $post_title = str_replace('>', '&gt;', $post_title);
//        $post_content = str_replace('<', '&lt;', $post_content);
//        $post_content = str_replace('>', '&gt;', $post_content);
    ?>
   <!--<div class="flex-wrapper flex-item soopz-input">-->
   <div class="">
       <!--<textarea class="flex-item form-control" name="post_content">-->
           <?php 
           echo $output_;
           echo $output;
//                wp_editor( $output, $editor_id );

            ?>
       <!--</textarea>-->
        
    </div>
    <div class="update_posts">
        <span class="update_post_button button">Save</span>
    </div>
</div>
