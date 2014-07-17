<?php

 function get_filmstrip_header(){
     $imgHTML = '';
     $images = get_option('filmstrip_images');
     foreach ($images as $image){
         $imgHTML .= '<img alt="" src='.$image.' class=""/>' ;
     }
     echo $imgHTML;
}

function filmstrip_header_get_image_url($index){
    $images = get_option('filmstrip_images');
    echo $images[$index];
}
function filmstrip_header_get_image($index){
    $images = get_option('filmstrip_images');
    return $images[$index];
}
function filmstrip_header_image_exists($index){
    $images = get_option('filmstrip_images');
    if($index < sizeof($images)){
        return true;
    }
    return false;
}

/*
 * Add admin page
 */
add_action('admin_menu', 'fh_add_pages');

function fh_add_pages()
{
    add_theme_page('Filmstrip Header Options', 'Filmstrip Header', 'manage_options', 'filmstrip_header', 'display_filmstrip_header_menu');
}


//need to add menu to add up to 6(?) images for filmstrip.

function display_filmstrip_header_menu() {

    //must check that the user has the required capability
    if (!current_user_can('manage_options'))
    {
        wp_die( __('You do not have sufficient permissions to access this page.') );
    }

    //need to add uploading of images currently in filmstrip header

    // variables for the field and option names
    $hidden_field_name = 'mt_submit_hidden';

    // See if the user has posted us some information
    // If they did, this hidden field will be set to 'Y'
    if( isset($_POST[ $hidden_field_name ]) && $_POST[ $hidden_field_name ] == 'Y' ) {
        $i = 0;
        foreach ( $_FILES as $image )
        {   // if a files was upload
            if ($image['size'])
            {     // if it is an image
                if ( preg_match('/(jpg|jpeg|png|gif)$/', $image['type']) ) {
                    $override = array('test_form' => false);
                    // save the file, and store an array, containing its location in $file
                    $file = wp_handle_upload( $image, $override );
                    $filmstrip_images[$i] = $file['url'];
                }
                else {
                    // Not an image.
                    //$options = get_option('filmstrip_images');
                    //$filmstrip_images[$i] = $file['url'];
                    // Die and let the user know that they made a mistake.
                    wp_die('No image was uploaded.');     }
            }
            // Else, the user didn't upload a file.
            // Retain the image that's already on file.
            else
            {
                $options = get_option('filmstrip_images');
                $filmstrip_images[$i] = $options[$i];
            }
            $i++;
        }
        update_option("filmstrip_images", $filmstrip_images);
        ?>
        <div class="updated"><p><strong><?php _e('settings saved.', 'menu-test' ); ?></strong></p></div>
    <?php

    }

    // Now display the settings editing screen

    echo '<div class="wrap">';

    // header

    echo "<h2>" . __( 'Menu Test Plugin Settings', 'menu-test' ) . "</h2>";

    // settings form

    ?>

    <form name="form1" method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="<?php echo $hidden_field_name; ?>" value="Y">

        <p>Image 1
            <input type="file" name="image1" />
            <?php
                if (filmstrip_header_image_exists(0)){
                    echo '<img alt="" src='.filmstrip_header_get_image(0).' style="max-width=200px; max-height=200px">';
                }
           ?>

        </p><hr />
        <p>Image 2
            <input type="file" name="image2" />
            <?php
            if (filmstrip_header_image_exists(1)){
                echo '<img alt="" src='. filmstrip_header_get_image(1).' class="filmstrip-header"/>';
            }
            ?>
        </p><hr />
        <p>Image 3
            <input type="file" name="image3" />
            <?php
            if (filmstrip_header_image_exists(2)){
                echo '<img alt="" src='. filmstrip_header_get_image(2).' class="filmstrip-header"/>';
            }
            ?>
        </p><hr />
        <p>Image 4
            <input type="file" name="image4" />
            <?php
            if (filmstrip_header_image_exists(3)){
                echo '<img alt="" src='. filmstrip_header_get_image(3).' class="filmstrip-header"/>';
            }
            ?>
        </p><hr />
        <p>Image 5
            <input type="file" name="image5" />
            <?php
            if (filmstrip_header_image_exists(4)){
                echo '<img alt="" src='. filmstrip_header_get_image(4).' class="filmstrip-header"/>';
            }
            ?>
        </p><hr />

        <p class="submit">
            <input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e('Save Changes') ?>" />
        </p>

    </form>
    </div>

<?php

}
