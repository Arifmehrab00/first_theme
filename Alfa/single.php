<?php get_header(); ?>

<?php get_template_part("/template-part/common/hero"); ?>
<!-- single post view style start -->

<div class="main_area">

	<div class="col-8">
		<!---post Formate show--->
<?php 
while(have_posts()){

	the_post();
?>

<div class="main_post" <?php post_class(); ?>>
	<div class="post_content">
		<div class="image">
		   <!-- feture imag show st -->
     <?php
if(has_post_thumbnail()){

	the_post_thumbnail("large",array("class"=>"imag"));
}

     ?>
		   <!-- feture imag show end -->
		<h3><?php the_title(); ?></h3>
           <p><?php the_content(); ?></p>
            <strong><?php the_author(); ?></strong>
			<br>
			<strong><?php echo get_the_date(); ?></strong>
			<br>
			<strong>
				<?php get_the_tag_list("<ul class=\"order_list\"><li>","</li><li>","</li></ul>"); ?>
			</strong>
			<hr>
		</div>
	</div>
</div>

<?php }//end while// ?>
<!---post formate show end-->

<!-- pregnation start -->
<div class="post-pregnatin">
	<?php the_posts_pagination(array(
         "screen_reader_text"=>" ",
         "prev_text"=>"New-Post",
         "next_text"=>"Old-Post"
       )); ?>
</div>
<!-- pregnation end --->

<!-- single post next prev post st -->
<button><?php next_post_link(); ?></button>
<button><?php previous_post_link(); ?></button>
<!-- single post next prev post st -->

<!-- comment start -->
<?php if(comments_open()){ ?>
<div class="main_post">
	<?php comments_template(); ?>
</div>
<?php
}?>
<!-- comment end --->
	</div>
	<!-- sidebar start -->
<div class="col-4">
	<!--widget start -->
	<?php 
if(is_active_sidebar("sidebar-1")){
	
	dynamic_sidebar("sidebar-1");

}
	?>
	<!--widget end -->
</div>
	<!-- sidebar end -->
	
</div>


<!-- single post view syle end --->
<?php get_footer(); ?>
