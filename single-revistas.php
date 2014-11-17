<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class="wrap">
<div class="content">
		
		<h2><?php the_category(); ?></h2>
		<h3><?php _e("<!--:es-->Esta es la revista<!--:--><!--:ca-->Aquesta es la revista<!--:-->"); ?>: "<?php the_title(); ?>". <?php _e("<!--:es-->Clica en la imagen para descargar gratuitamente la revista en formato *.PDF<!--:--><!--:ca-->Fes click a sobre de la image per a descarregar-la gratüitament en format *.PDF<!--:-->"); ?></h3>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	    	
    	<?php if ( get_field('fotorevista') ) {?>
		<a href="<?php the_field('fotorevista'); ?>">
		<?php the_post_thumbnail('portada-revistas');?>
		</a>
		<?php }?>
		
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>

		
		
		<?php if ( is_single() && in_category('7diesbenicarlo') ) {?>

			<?php query_posts(array( 'post_type' => 'Revistas', 'category_name' => '7diesbenicarlo', 'posts_per_page' => 20 )); ?>

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

		<?php }?>

		
		
		<?php if ( is_single() && in_category('7diesvinaros') ) {?>

			<?php query_posts(array( 'post_type' => 'Revistas', 'category_name' => '7diesvinaros', 'posts_per_page' => 20 )); ?>

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

		<?php }?>
		
		

<?php else : ?>
        <h2 class="center">No encontrado</h2>
        <p class="center">Ups, lo que buscas no está aquí...</p>
    <?php endif; ?>
</div><!-- .content -->

<?php get_footer(); ?>