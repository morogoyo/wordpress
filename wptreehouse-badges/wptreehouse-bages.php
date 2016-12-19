<?php
/*
*Plugin Name: Official Treehouse Badges Plugin
*Plugin URI: http://localhost/wordpress/
*Description:Badges from Team Tree house
*Version:1.0
*Author:Rene Torres
*License:Gpl2
*
*
*
*/

/*
 *	Set Global Variables
*/

$plugin_url= WP_PLUGIN_URL . '/wptreehouse-badges';

/*
 *	Add a link to our plugin in the admin menu
 *	under 'Settings > Treehouse Badges'
 *
*/

function wptreehouse_badges_menu()
    {
    /*
		 * 	Use the add_options_page function
		 * 	add_options_page( $page_title, $menu_title, $capability,$menu-slug, $function )
		 *
		*/

       add_options_page(
       'Offical Treehouse Badges Plugin',
       'Treehouse Badges',
       'manage_options',
       'wptreehouse-badges',
       'wptreehouse_badges_options_page'

       );

    }

add_action('admin_menu','wptreehouse_badges_menu');

function wptreehouse_badges_options_page()
{
    if (!current_user_can( 'manage_options' )) {
        wp_die( 'you do not have sufficient permission ');
        }

    global  $plugin_url;

    if (isset($_POST['wptreehouse_form_submitted'])) {
            $hidden_field =esc_html( $_POST['wptreehouse_form_submitted'] );
            if ($hidden_field == 'Y') {

                $wptreehouse_username = esc_html( $_POST['wptreehouse_username'] );
                echo $wptreehouse_username;

            }
    }

    require 'inc/options-page-wrapper.php';
}

function wptreehouse_badges_styles()
{
wp_enqueue_style( 'wptreehouse_badges_styles', plugins_url( 'wptreehouse-badges/wptreehouse-badges.css' ) );

}

add_action( 'admin_head', 'wptreehouse_badges_styles' );
