<?php get_header(); ?>
<?php get_sidebar(); ?>

		<div class="content">
		<div class="titulo"><h2><?php single_cat_title(); ?></h2></div>
   
   		<?php $loop = new WP_Query( array( 'post_type' => 'Noticias', 'category_name' => 'noticiasantinea', 'posts_per_page' => 40 ) ); ?>

		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

	<div class="post">	

	<div class="entry-content">
	<?php if ( has_post_thumbnail()) : ?>

	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	<small><?php the_time('j \\d\e F \\d\e Y') ?></small>
	<?php the_post_thumbnail('thumbnail'); ?>

	<div class="details">
	<h4><?php the_title_attribute(); ?></h4>
	</div>
	</a>
   
 <?php endif; ?>
		
	</div>
	</div>
				<?php wp_reset_query(); ?>

	
<?php endwhile; ?>

    <div class="clearfix"></div>

</div><!-- .content ## -->
<?php get_footer(); ?>