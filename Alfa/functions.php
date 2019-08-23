<?php 
function alfa_butstraping(){

load_theme_textdomain("alpa");
//* post thumbnails show *//
add_theme_support("post-thumbnails");
//* post title show *//
add_theme_support("title-tag");
//* header image change customaizer and color *//
$color_support=
array(
	'header-text'=>true,
	'default_text_color' => '#22',
	'width'=>1200,
	'height'=>600,
	'flex-height'=>true,
	'flex-width'=>true,
   );
add_theme_support("custom-header",$color_support);

//* logo support *//
$logo_custom_width=array(
                  'width'>= '100',
                  'height'>= '100'
                  );
add_theme_support("custom-logo",$logo_custom_width);
//* theme custom background *//
add_theme_support("custom-background");
//* menu show top *//
register_nav_menu("topmenu",__("Top Menu","alpa"));
//* menu show footer *//
register_nav_menu("footermenu",__("Footer Menu","alpa"));



}

/// css and js and boostrap file link ///


function theme_files(){

//*css file link*//
wp_enqueue_style("bootstrap-css", get_template_directory_uri()."/assets/css/bootstrap.min.css",null,null);

wp_enqueue_style("bootstrap-4-css", get_template_directory_uri()."/assets/css/bootstrap-4-navbar.css");

wp_enqueue_style( "alpaStyle", get_template_directory_uri()."/style.css",null,time());

//*js file link*//
wp_enqueue_script("bootstrap-js", get_template_directory_uri()."/assets/js/bootstrap.min.js",null,null,true);


wp_enqueue_script("bootstrap-4-navbar-js", get_template_directory_uri()."/assets/js/bootstrap-4-navbar.js",null,null,true);

//wp_enqueue_script("alpa-js", get_template_directory_uri()."/assets/js/main.js",null,null,true);

}

add_action("wp_enqueue_scripts","theme_files");


//* sidebar show function start *//
add_action("after_setup_theme","alfa_butstraping");


function alfa_saidbar(){

	register_sidebar(
		array(

			'name' => __('right sidebar','alpa'),
				'id' => 'sidebar-1',
				'description' => __( 'right-sidebar','alpa' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s" >',
				'after_widget' => '</section>',
				'before_title' => '<h2 class="widget-title" >',
				'after_title' => '</h2>',

	      )
	);

	// footer one sideber //
	register_sidebar(
		array(

			'name' => __('footer one','alpa'),
				'id' => 'footer-1',
				'description' => __( 'footerOne','alpa' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s" >',
				'after_widget' => '</section>',
				'before_title' => '<h2 class="widget-title" >',
				'after_title' => '</h2>',

	      )
	);

	//footer two sidebar//
	register_sidebar(
		array(

			'name' => __('footer two','alpa'),
				'id' => 'footer-2',
				'description' => __( 'FooterTwo','alpa' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s" >',
				'after_widget' => '</section>',
				'before_title' => '<h2 class="widget-title" >',
				'after_title' => '</h2>',

	      )
	);
}

add_action("widgets_init","alfa_saidbar");

//* sidebar show function end *//


//* style system in wordpress *//

function feture_image_backgroun(){
	if(is_page()) {
$fetur_image=get_the_post_thumbnail_url(null,"large");
  ?>
<style>
	.main_section{

		background-image: url(<?php echo $fetur_image; ?>);
	}
</style>
 <?php
  }

//* header image show secript *//

  if(is_front_page()){
  	if(current_theme_supports("custom-header")){
    ?>
 <style>
 	.header_image{
 		background-image: url(<?php echo header_image(); ?>);
 		background-repeat: no-repeat;
 		background-size: cover;
 		padding:80px 10px;
 	}
 /* header tagline and site color option */
  .wp{
  	color:#<?php echo get_header_textcolor(); ?>;

  	<?php

if(!display_header_text()){
	echo "display:none;";
}

  	 ?>
  }
 </style>

   <?php
  	}
  }
}
add_action("wp_head","feture_image_backgroun",100);


