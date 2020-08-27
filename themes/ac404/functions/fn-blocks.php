<?php
// https://www.advancedcustomfields.com/resources/blocks/


add_filter( 'allowed_block_types', 'apd_allowed_block_types' );
 
function apd_allowed_block_types( $allowed_blocks ) {
    return array(
        
        'acf/image',
        'acf/text-editor'

    );
}


add_action('acf/init', 'apd_register_blocks');

function apd_register_blocks()
{
    // check function exists
    if (function_exists('acf_register_block')) {

        // register blocks here...
        acf_register_block(array(
            'name' => 'text-editor',
            'title' => __('Text Editor'),
            'render_template'   => get_template_directory() . '/blocks/text-editor/b-text-editor.php',
            'enqueue_style'     => get_template_directory_uri() . '/blocks/text-editor/b-text-editor.min.css',
            'category' => 'layout',
            'icon' => 'media-text',
            'keywords' => array('text', 'section'),
            'post_types' => array('post', 'page'),
            'mode' => 'auto',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                      'content'   => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Quisque velit nisi, pretium ut lacinia in, elementum id enim.",
                      
                    )
                )
            )
        ));

        acf_register_block(array(
            'name' => 'image',
            'title' => __('Image'),
            'render_template'   => get_template_directory() . '/blocks/image/b-image.php',
            'enqueue_style'     => get_template_directory_uri() . '/blocks/image/b-image.min.css',
            'category' => 'layout',
            'icon' => 'format-image',
            'keywords' => array('image', 'section'),
            'post_types' => array('post', 'page'),
            'mode' => 'auto',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                      'image'   => "38",
                      'caption'  => "Your caption goes here"
                    )
                )
            )

        ));

    }
}