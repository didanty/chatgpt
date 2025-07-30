<?php
add_action('after_setup_theme', function(){
    add_theme_support('post-thumbnails');
    register_nav_menus(['main_menu' => 'Основное меню']);
});

add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('sudtehexp-fonts', 'https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700&display=swap');
    wp_enqueue_style('sudtehexp-style', get_stylesheet_uri(), [], '1.0');
});

add_action('init', function(){
    register_post_type('expertise', [
        'labels' => [
            'name' => 'Экспертизы',
            'singular_name' => 'Экспертиза'
        ],
        'public' => true,
        'supports' => ['title','editor','thumbnail'],
        'menu_position' => 5
    ]);

    register_post_type('laboratory', [
        'labels' => [
            'name' => 'Лаборатории',
            'singular_name' => 'Лаборатория'
        ],
        'public' => true,
        'supports' => ['title'],
        'menu_position' => 6,
        'register_meta_box_cb' => 'sudtehexp_lab_metaboxes'
    ]);
});

function sudtehexp_lab_metaboxes(){
    add_meta_box('lab_details','Данные лаборатории','sudtehexp_lab_fields','laboratory');
}

function sudtehexp_lab_fields($post){
    $inn = get_post_meta($post->ID,'lab_inn',true);
    $number = get_post_meta($post->ID,'lab_number',true);
    $term = get_post_meta($post->ID,'lab_term',true);
    echo '<p><label>ИНН<br><input type="text" name="lab_inn" value="'.esc_attr($inn).'" /></label></p>';
    echo '<p><label>Номер<br><input type="text" name="lab_number" value="'.esc_attr($number).'" /></label></p>';
    echo '<p><label>Срок аккредитации<br><input type="text" name="lab_term" value="'.esc_attr($term).'" /></label></p>';
}

add_action('save_post_laboratory','sudtehexp_save_lab');
function sudtehexp_save_lab($post_id){
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if(isset($_POST['lab_inn'])) update_post_meta($post_id,'lab_inn',sanitize_text_field($_POST['lab_inn']));
    if(isset($_POST['lab_number'])) update_post_meta($post_id,'lab_number',sanitize_text_field($_POST['lab_number']));
    if(isset($_POST['lab_term'])) update_post_meta($post_id,'lab_term',sanitize_text_field($_POST['lab_term']));
}
?>
