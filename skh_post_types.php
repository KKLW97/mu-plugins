<?php
function skh_post_types() {
    // COURSE POST 
    register_post_type('course', array(
        'show_in_rest' => true,
        'supports' => array('title','editor','excerpt'),
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
        'supports' => array('title',  'excerpt'),
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

    // SERVICE_CATEGORY - LASH BAR, BEAUTY & WEIGHTLOSS CLINIC ETC
    register_post_type('service-categories', array(
        'show_in_rest' => true,
        'supports' => array('title','editor', 'excerpt'),
        'rewrite' => array('slug' => 'service_categories'),
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Service Categories',
            'add_new_item' => 'Add New Service Category',
            'edit_item' => 'Edit Service Category',
            'all_items' => 'All Service Categories',
            'singular_name' => 'Service Category'
        ),
        'menu_icon' => 'dashicons-admin-multisite'
    ));

    // SERVICES - SUB CATEGORY FOR LASH BAR, BEAUTY & WEIGHTLOSS CLINICS
    register_post_type('services', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt'),
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

    // TEAM MEMBER POST
    register_post_type('team-members', array(
        'show_in_rest' => true,
        'supports' => array('title', 'excerpt', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'team_members'),
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Team Members',
            'add_new_item' => 'Add New Team Member',
            'edit_item' => 'Edit Team Member',
            'all_items' => 'All Team Members',
            'singular_name' => 'Team Member'
        ),
        'menu_icon' => 'dashicons-groups'
    ));

    // TRAINER POST
    register_post_type('trainers', array(
        'show_in_rest' => true,
        'supports' => array('title', 'excerpt', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'trainers'),
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Trainers',
            'add_new_item' => 'Add New Trainer',
            'edit_item' => 'Edit Trainer',
            'all_items' => 'All Trainers',
            'singular_name' => 'Trainer'
        ),
        'menu_icon' => 'dashicons-universal-access'
    ));
}

add_action('init', 'skh_post_types');
?>