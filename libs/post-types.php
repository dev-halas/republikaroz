<?php

    add_action('init','theme_init_posttypes');
    
    function theme_init_posttypes() {
        //CUSTOM POST
        $realization_args = array( 'labels' => array(
            'name' => 'Realizacje',
            'singular_name' => 'Realizacja',
            'all_items' => 'Wszystkie Realizacje',
            'add_new' => 'Dodaj nową Realizacje',
            'add_new_item' => 'Dodaj nową Realizacje',
            'edit_item' => 'Edytuj Realizacje',
            'new_item' => 'Nowa Realizacje',
            'view_item' => 'Zobacz Realizacje',
            'search_items' => 'Szukaj Realizacje',
            'not_found' => 'Nie znaleziono żadnych realizacji', 
            'not_found_in_trash' => 'Nie znaleziono żadnych realizacji w koszu', 
            'parent_item_colon' => ''
        ),
        'public' => true, 
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'query_var' => true,
        'rewrite' => true, 
        'capability_type' => 'post', 
        'hierarchical' => false, 
        'menu_position' => 5, 
        'supports' => array(
            'title','editor','author','thumbnail','excerpt','comments','custom-fields', 'post-formats' ),
            'has_archive' => true );
        
        register_post_type('realization', $realization_args);

    }
?>