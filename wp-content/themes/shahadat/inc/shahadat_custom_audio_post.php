<?php


// ===============================
add_action( 'init', 'create_audio_post_type' );
function create_audio_post_type() {
  register_post_type( 'audio',
    array(
      'labels' => array(
        'name' => __( 'Audio' ),
        'singular_name' => __( 'Audio' )
      ),
      'public' => true,
      'has_archive' => true,
      'show_in_nav_menus' => true,
      'menu_icon'  => 'dashicons-format-audio',
      'supports' => array( 'title', 'editor','post-formats','comments' ),
      'taxonomies' => array( 'category' )
    )
  );
}

// default video format
function default_audio_format( $format )
{
    global $post_type;
    return ( $post_type == 'audio' ? 'audio' : $format );
}
add_filter( 'option_default_post_format', 'default_audio_format', 10, 1 );

// custom fields with post by meta box
// ****************************************
function add_custom_meta_box_audio()
{
    add_meta_box("demo-meta-box", "বয়ান সম্পর্কিত তথ্য", "custom_meta_box_audio_markup", "audio", "side", "default", null);
}
add_action("add_meta_boxes", "add_custom_meta_box_audio");

function custom_meta_box_audio_markup($object)
{
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");

    ?>
        <table align="center">
            <tr>
            <td><label for="subject">বিষয়ঃ </label></td>
            <td ><input name="subject" type="text" value="<?php echo get_post_meta($object->ID, "subject", true); ?>"></td>
            </tr>
            <tr>
            <td><label for="place">স্থানঃ</label></td>
            <td><input name="place" type="text" value="<?php echo get_post_meta($object->ID, "place", true); ?>"></td>
            </tr>
            <tr>
            <td><label for="date">তারিখঃ</label></td>
            <td><input name="date" type="text" value="<?php echo get_post_meta($object->ID, "date", true); ?>"></td>
            </tr>
        </table>
    <?php  
}

function save_custom_meta_box_audio($post_id, $post, $update)
{
    if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
        return $post_id;

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    $slug = "audio";
    if($slug != $post->post_type)
        return $post_id;

    $subject = "";
    $place = "";
    $date = "";

    if(isset($_POST["subject"]))
    {
        $subject = $_POST["subject"];
    }   
    update_post_meta($post_id, "subject", $subject);

    if(isset($_POST["place"]))
    {
        $place = $_POST["place"];
    }   
    update_post_meta($post_id, "place", $place);

    if(isset($_POST["date"]))
    {
        $date = $_POST["date"];
    }   
    update_post_meta($post_id, "date", $date);
}

add_action("save_post", "save_custom_meta_box_audio", 10, 3);

function remove_custom_field_meta_box_audio()
{
    remove_meta_box("postcustom", "video", "normal");
}

add_action("do_meta_boxes", "remove_custom_field_meta_box_audio");

// *********************
