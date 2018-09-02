<?php

use Carbon_Fields\Carbon_Fields;
use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Field\Complex_Field;
use Carbon_Fields\Field\Text_Field;

add_action( 'after_setup_theme', 'crb_load' );
function crb_load()
{
    Carbon_Fields::boot();
}

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options', 'crb' ) )
        ->add_tab( __('Footer description'), array(
            Field::make( 'rich_text', 'crb_footer_description', 'Description' ),
        ) )
        ->add_tab( __('Section Contact us'), array(
            Field::make( 'rich_text', 'crb_footer_contact_us', 'Contact us' ),
        ) )
        ->add_tab( __('social link'), array(
            Field::make( 'complex', 'crb_footer_soc_block', 'Slides' )
                ->add_fields( array(
                    Field::make( 'text', 'link', 'Add link' ),
                    Field::make( 'text', 'icon', 'Add font awesome class' ),
                ) ),
        ) );
    Container::make( 'post_meta', 'Add classes for page' )
        ->where( 'post_type', '=', 'page' )
        ->add_fields(array(
            Field::make( 'text', 'html_class', 'Add some class for page' ),
            Field::make( 'text', 'body_class', 'Add some class for body' ),
            Field::make( 'text', 'footer_class', 'Add some class for footer' ),
        ));
}