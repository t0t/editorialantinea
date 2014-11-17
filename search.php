<?php get_header(); ?>

<div class="wrap">
<?php get_sidebar(); ?>

	<div class="content">
	<h2><?php _e("<!--:es-->Resultados de la b&uacute;squeda<!--:--><!--:ca-->Resultats de la recerca<!--:-->"); ?>: "<?php the_search_query() ?>"</h2>
	
	
	<?php if (have_posts()) : ?>
		<div class="entry">
		
		<?php while (have_posts()) : the_post(); ?>
			
				<div class="post">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
				<?php the_post_thumbnail('thumbnail'); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_excerpt('...'); ?>
				</a>
				<h3><?php _e("<!--:es-->En<!--:--><!--:ca-->A<!--:-->"); ?>: <?php the_category(', '); ?></h3>
				</div>
				
				
				
		<?php endwhile; ?>
		</div><!-- .entry -->
	     
	    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

	</div><!-- .content -->

	<?php else : ?>
		Ups!... No se encontraron coincidencias para "<?php the_search_query() ?>". 
	<?php endif; ?>
	
	<div class="clearfix"></div><!-- para que cierre el wrap com dios manda -->
    </div><!-- .wrap -->

<?php get_footer(); ?>