<?php 


function my_excerpt_length($length){
    return 20;
}

add_filter('excerpt_length','my_excerpt_length',999);
set_post_thumbnail_size(300,300);
add_theme_support('post-thumbnails') ;

//Register nav menu
register_nav_menus(array(
'primary'=>'Primary Menu',
'tours'=>'Tours Menu',
'footer'=>'Footer Menu'
));

//Page Slug Body Class
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
    }
    add_filter( 'body_class', 'add_slug_body_class' );
    add_filter( 'widget_text', 'do_shortcode' );

    //Let's wp know we're linking to astuteo's jquery
function my_theme_scripts(){
    wp_enqueue_script('astuteo',get_template_directory_uri() . '/js/astuteo.js','1.0.0',false);
}
add_action('wp_enqueue_scripts','my_theme_scripts');

function site1_widgets_init(){
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar Blog', 'summer-site-1'),
            'id'            => "sidebar-blog",
            'description'   => esc_html__('Our Blog Widget', 'summer-site-1'),
            'before_widget' => '<section id="%1s" class="widget %2s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => "</h3>"  
        )
    );
    
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar Tour', 'summer-site-1'),
            'id'            => "sidebar-tours",
            'description'   => esc_html__('Our Tours Widget', 'summer-site-1'),
            'before_widget' => '<section id="%1s" class="widget %2s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => "</h3>"  
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar About', 'summer-site-1'),
            'id'            => "sidebar-about",
            'description'   => esc_html__('Our About Widget', 'summer-site-1'),
            'before_widget' => '<section id="%1s" class="widget %2s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => "</h3>"  
        )
    ); 

    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar Footer', 'summer-site-1'),
            'id'            => "sidebar-content-footer",
            'description'   => esc_html__('Our Footer Content', 'summer-site-1'),
            'before_widget' => '<section id="%1s" class="widget %2s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => "</h3>"  
        )
    );
     
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar Buy', 'summer-site-1'),
            'id'            => "sidebar-buy",
            'description'   => esc_html__('Our Buy Widget', 'summer-site-1'),
            'before_widget' => '<section id="%1s" class="widget %2s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => "</h3>"  
        )
    );


}

add_action('widgets_init','site1_widgets_init');


function diwp_get_list_of_shortcodes(){

	// Get the array of all the shortcodes
	global $shortcode_tags;
	
	$shortcodes = $shortcode_tags;
	
	// sort the shortcodes with alphabetical order
	ksort($shortcodes);
	
	$shortcode_output = "<ul>";
	
	foreach ($shortcodes as $shortcode => $value) {
		$shortcode_output = $shortcode_output.'<li>['.$shortcode.']</li>';
	}
	
	$shortcode_output = $shortcode_output. "</ul>";
	
	return $shortcode_output;

}
add_shortcode('get-shortcode-list', 'diwp_get_list_of_shortcodes');

function covid_disclaimer() {
    return'<small> Before you purchase your tickets,
    check with everyone that you can think of to make sure that you are good to go, 
    because these tickets are not refundable</small>';
}
add_shortcode('disclaimer','covid_disclaimer');

function today_date(){
    return(date('l\, F jS Y '));
}
add_shortcode('current_date','today_date');

function specials(){
    if(isset($_GET['today'])){
        $today=$_GET['today'];
    } else {
        $today = date('l');
    }
    switch($today){
        case 'Monday' :
            $content='Today\'s special is good old Yellowstone. Learn more <a href=""> here</a>';
        break;
        case 'Tuesday' :
            $content='Today\'s special is The Amazon. Learn more <a href=""> here</a>';
        break;
        case 'Wednesday' :
            $content='Today\'s special is good old Ethiopia. Learn more <a href=""> here</a>';
        break;
        case 'Thursday' :
            $content='Today\'s special is good old London. Learn more <a href=""> here</a>';
        break;
        case 'Friday' :
            $content='Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Praesentium quae beatae autem ex aperiam. Quos labore cumque odio! 
            Iusto doloribus hic tempore vel vitae ratione. Illo sed libero tenetur maxime?. 
            Learn more <a href=""> here</a>';
        break;
        case 'Saturday' :
            $content='Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Omnis perferendis pariatur odio rerum consequatur provident quam totam minima tempora! 
            Minima. Learn more <a href=""> here</a>';
        break;
        case 'Sunday' :
            $content='Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel unde veritatis maiores!. Learn more <a href=""> here</a>';
        break;
}
return $content;
}
add_shortcode('today_specials','specials');

function year(){
    return date('Y');
}
add_shortcode('current_year','year');

remove_filter('the_content','wpautop');