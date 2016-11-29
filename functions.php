<?php
function footer_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Footer Sidebar', 'footer_sidebar' ),
		'id' => 'sidebar_footer',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );
	register_sidebar( array(
		'name' => __( 'Footer Photos', 'footer_sidebar' ),
		'id' => 'sidebar_photos',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );

}
add_action( 'widgets_init', 'footer_widgets_init' );



add_action('wp_head','theme_ajaxurl');
function theme_ajaxurl() {
?>
 <script type="text/javascript">
 var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
 </script>
<?php
}

//save posts 
add_action( 'wp_ajax_save_post', 'save_post' );

function save_post() {
    if((isset($_POST['textarea_val']) && trim($_POST['textarea_val']) != '') && (isset($_POST['post_title']) && trim($_POST['post_title']) != '')){
        if (is_user_logged_in()) {
            $user = wp_get_current_user();
                    $user_id = $user->ID;
            $my_post = array(
                'post_title'    => wp_strip_all_tags( $_POST['post_title'] ),
                'post_content'  => $_POST['textarea_val'],
                'post_author' => $user_id,
                'post_status'   => 'publish'
              );

              // Insert the post into the database
              $post_inserted = wp_insert_post( $my_post );
                      }
                      if($post_inserted){
        $post_success = true;
                      }
        echo json_encode($post_success);
    }
    exit();
}