<?php get_header(); ?>

<?php get_template_part("/template-part/common/hero"); ?>
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
		<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
           <p><?php 
             if(!post_password_required()){

             	the_excerpt();

             }else{
               echo get_the_password_form();
             }
            ?></p>
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

<?php get_footer(); ?>

