<?php

add_action( 'admin_init', 'custom_meta_boxes' );
add_action( 'admin_init', 'gallery_meta_boxes' );

function custom_meta_boxes() {
  $my_meta_box = array(
    'id'          => 'meta_box',
    'title'       => 'Meta Box',
    'desc'        => '',
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => 'Form sidebar',
        'id'          => 'options',
        'type'        => 'tab'
      ),
      array(
        'label'       => '',
        'id'          => 'title_form',
        'type'        => 'text',
        'desc'        => 'Заголовок формы'
      ),
      array(
        'label'       => '',
        'id'          => 'text_form',
        'type'        => 'text',
        'desc'        => 'Введите шорткод из contact-form-7 для сайдбара'
      ),
      array(
        'label'       => 'Price',
        'id'          => 'price',
        'type'        => 'tab'
      ),
      array(
        'label'       => 'Price article',
        'id'          => 'price_text',
        'type'        => 'textarea-simple'
      ),
      array(
        'label'       => 'Questions',
        'id'          => 'questions',
        'type'        => 'tab'
      ),
      array(
        'label'       => 'Questions article',
        'id'          => 'questions_text',
        'type'        => 'textarea-simple'
      ),
      array(
        'label'       => 'Gallery slug',
        'id'          => 'slug',
        'type'        => 'tab'
      ),
      array(
        'label'       => 'Slug rubrick',
        'id'          => 'slug_text',
        'type'        => 'text'
      ),
      array(
        'label'       => 'Gallery',
        'id'          => 'galler',
        'type'        => 'tab'
      ),
      array(
        'label'       => 'Show Gallery',
        'id'          => 'gallery_show',
        'type'        => 'on-off',
        'desc'        => sprintf( __( 'Shows the Gallery when set to %s.', 'theme-text-domain' ), '<code>on</code>' ),
        'std'         => 'off'
      ),
      array(
        'label'       => '',
        'id'          => 'gallery_textblock',
        'type'        => 'textblock',
        'desc'        => 'Created a gallery!',
        'operator'    => 'and',
        'condition'   => 'gallery_show:is(on),gallery:not()'
      ),
      array(
        'label'       => 'Gallery',
        'id'          => 'gallery',
        'type'        => 'gallery',
        'condition'   => 'gallery_show:is(on)'
      )
    )
  );
  
  if( function_exists('ot_register_meta_box')){
    ot_register_meta_box($my_meta_box);
  }
}

function gallery_meta_boxes() {
  $gallery_meta_box = array(
    'id'          => 'gallery_box',
    'title'       => 'Gallery Box',
    'desc'        => '',
    'pages'       => array('post'),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => 'gallery-src',
        'id'          => 'src',
        'type'        => 'tab'
      ),
      array(
        'label'       => 'Название картинки',
        'id'          => 'img_src',
        'type'        => 'text'
      )
    )
  );
  
  if( function_exists('ot_register_meta_box')){
    ot_register_meta_box($gallery_meta_box);
  }
}