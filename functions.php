<?php

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

// create custom plugin settings menu
add_action('admin_menu', 'ec_create_menu');

function ec_create_menu() {

	//create new top-level menu
	add_menu_page('Explode Code Settings', 'Explode Code Settings', 'administrator', __FILE__, 'ec_settings_page',plugins_url('/images/icon.png', __FILE__));

	//call register settings function
	add_action( 'admin_init', 'register_ecsettings' );
}


function register_ecsettings() {
	//register our settings
	register_setting( 'ec-settings-group', 'workshops_title' );
	register_setting( 'ec-settings-group', 'workshops_description' );
	register_setting( 'ec-settings-group', 'workshops_action' );
	register_setting( 'ec-settings-group', 'talks_title' );
	register_setting( 'ec-settings-group', 'talks_description' );
	register_setting( 'ec-settings-group', 'talks_action' );
	register_setting( 'ec-settings-group', 'helloworld_title' );
	register_setting( 'ec-settings-group', 'helloworld_description' );
	register_setting( 'ec-settings-group', 'helloworld_action' );
}

function ec_settings_page() {
?>
<div class="wrap">
<h2>Explode Code Settings</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'ec-settings-group' ); ?>
    <?php //do_settings( 'ec-settings-group' ); ?>
    <h3>Workshops on Homepage</h2>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Title</th>
        <td><input type="text" name="workshops_title" value="<?php echo get_option('workshops_title'); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Description</th>
        <td><textarea name="workshops_description"><?php echo get_option('workshops_description'); ?></textarea></td>
        </tr>

        <tr valign="top">
        <th scope="row">Call to Action</th>
        <td><input type="text" name="workshops_action" value="<?php echo get_option('workshops_action'); ?>" /></td>
        </tr>


    </table>

    <h3>Talks on Homepage</h2>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Title</th>
        <td><input type="text" name="talks_title" value="<?php echo get_option('talks_title'); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Description</th>
        <td><textarea name="talks_description"><?php echo get_option('talks_description'); ?></textarea></td>
        </tr>

        <tr valign="top">
        <th scope="row">Call to Action</th>
        <td><input type="text" name="talks_action" value="<?php echo get_option('talks_action'); ?>" /></td>
        </tr>


    </table>

    <h3>Hello World on Homepage</h2>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Title</th>
        <td><input type="text" name="helloworld_title" value="<?php echo get_option('helloworld_title'); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Description</th>
        <td><textarea name="helloworld_description"><?php echo get_option('helloworld_description'); ?></textarea></td>
        </tr>

        <tr valign="top">
        <th scope="row">Call to Action</th>
        <td><input type="text" name="helloworld_action" value="<?php echo get_option('helloworld_action'); ?>" /></td>
        </tr>


    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php 
}