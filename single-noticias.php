<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class="wrap">
<div class="content">
		
		<div class="entry-content">
		
		<h2><?php the_category(); ?></h2>
		<h3><?php the_title(); ?></h3>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<small><?php the_time('j'); ?> de <?php the_time('F'); ?> de <?php the_time('Y'); ?></small>
    	
    	<?php the_content(); ?>
    	
    	</div>
    	
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>

		<h3><?php _e("<!--:es-->M&aacute;s Not&iacute;cias<!--:--><!--:ca-->M&eacute;s not&iacute;cies<!--:-->"); ?>:</h3>

			<?php query_posts(array( 'post_type' => 'Noticias', 'category_name' => 'noticiasantinea', 'posts_per_page' => 20 )); ?>

			<ul id="mycarousel" class="jcarousel-skin-tango">
        	<?php while (have_posts()) : the_post(); ?>
		
			<li>
			<a href="<?php the_permalink(); ?>">
			<?php if ( has_post_thumbnail()) : ?>
    		<?php the_post_thumbnail( array(110,175) ); ?>
    		<br />
    		<?php the_title(); ?>
			</a>
			<?php endif; ?>
			</li>
			<?php endwhile; ?>
			</ul>
			<?php wp_reset_query(); ?>


		

<?php else : ?>
        <h2 class="center">No encontrado</h2>
        <p class="center">Ups, lo que buscas no está aquí...</p>
    <?php endif; ?>
</div><!-- .content -->

<?php get_footer(); ?>