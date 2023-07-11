<?php
function skh_post_types() {
    // COURSE POST 
    register_post_type('course', array(
        'show_in_rest' => true,
        'supports' => array('title', 'excerpt'),
        'rewrite' => array('slug' => 'courses'),
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Courses',
            'add_new_item' => 'Add New Course',
            'edit_item' => 'Edit Course',
            'all_items' => 'All Courses',
            'singular_name' => 'Course'
        ),
        'menu_icon' => 'dashicons-book'
    )); 

    // CLASS POST -ASSOCIATED WITH COURSE
    register_post_type('class', array(
        'show_in_rest' => true,
        'supports' => array('title', 'excerpt'),
        'rewrite' => array('slug' => 'classes'),
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Classes',
            'add_new_item' => 'Add New Class',
            'edit_item' => 'Edit Class',
            'all_items' => 'All Classes',
            'singular_name' => 'Class'
        ),
        'menu_icon' => 'dashicons-welcome-learn-more'
    )); 

    // SERVICES - SUB CATEGORY FOR LASH BAR, BEAUTY & WEIGHTLOSS CLINICS
    register_post_type('services', array(
        'show_in_rest' => true,
        'supports' => array('title', 'excerpt'),
        'rewrite' => array('slug' => 'services'),
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Services',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service',
            'all_items' => 'All Services',
            'singular_name' => 'Service'
        ),
        'menu_icon' => 'dashicons-awards'
    ));

}




// TEAM MEMEBER POST

add_action('init', 'skh_post_types');
?>