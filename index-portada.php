<?php
/*
Template Name: Portada
*/
?>

<?php get_header(); ?>

<div class="wrap">

	<?php get_sidebar(); ?>

    <div class="content">
    
    <h2><?php the_title(); ?></h2>
    
    <div id="slider-container">
	
	<div class="slider">
	<?php query_posts( array ( 'category_name' => 'Recientes', 'posts_per_page' => 7 ) ); ?>
    <?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
               
		<div class="post">
		<?php if ( has_post_thumbnail()) : ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="lista_thumbnail" >
		<?php the_post_thumbnail('thumbnail'); ?>
		<h3><?php the_title(); ?></h3>
		<?php the_excerpt(); ?> 
		<?php edit_post_link(); ?>
		</a>
		<h4><?php _e("<!--:es-->En: <!--:--><!--:ca-->A: <!--:-->"); ?><?php the_category(', '); ?></h4>
		<?php endif; ?>
		</div><!-- .post -->

	<?php endwhile; ?>
	
	<?php wp_reset_query(); ?>
	</div><!-- .slider -->
        
	
	<div class="slider-controls">
	<a class="prev" title="">&lt;</a>
	<a class="next" title="">&gt;</a>
	</div>
	
	</div><!-- #slider-container -->
	
    
    <div id="destacado">
        
   <?php query_posts( array ( 'category_name' => 'Recientes', 'posts_per_page' => 3 ) ); ?>
        <?php while (have_posts()) : the_post(); ?>
		<div class="post">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="lista_thumbnail" >
		<?php the_post_thumbnail( 'destacados' ); ?>
		<?php the_title(); ?>
		</a>
		</div><!-- .post -->
		<?php endwhile;?>

        <?php wp_reset_query(); ?>
        </div>
        
        
        <div id="destacado-peque">
    	<?php query_posts( array ( 'category_name' => 'envalencia', 'posts_per_page' => 6 ) ); ?>
        <h2><?php single_cat_title(); ?></h2>
        <?php while (have_posts()) : the_post(); ?>
		<div class="post">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="lista_thumbnail" >
		<?php the_post_thumbnail( array(110,110) ); ?>
		</a>
		</div><!-- .post -->
		<?php endwhile;?>

		<div class="mas">
		<a href="http://www.editorialantinea.com/antineawp/libros/envalencia/" title="" class="" >+</a>
		</div>
        <?php wp_reset_query(); ?>
        </div>
        
               
        <div id="destacado-noticias">
    	<?php query_posts( array ( 'post_type' => 'Noticias', 'category_name' => 'noticiasantinea', 'posts_per_page' => 6 ) ); ?>
		<h2><?php single_cat_title(); ?></h2>
    	<?php while (have_posts()) : the_post(); ?>
		
		<div class="post">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="lista_thumbnail" >
		<h4><?php the_title(); ?></h4>
		<?php the_post_thumbnail( array(110,110) ); ?>
		<?php the_excerpt(); ?>
		</a>
		</div><!-- .post -->
		
		<?php endwhile;?>

		<div class="mas">
		<a href="http://www.editorialantinea.com/antineawp/noticiasantinea/" title="" class="" >+</a>
		</div>
        <?php wp_reset_query(); ?>
        </div>
        
    <?php else : ?>
        <h2 class="center">No encontrado</h2>
        <p class="center">Ups, lo que buscas no está aquí...</p>
    <?php endif; ?>
	
	</div><!-- .content -->
	<div class="clearfix"></div><!-- para que cierre el wrap com dios manda -->
    </div><!-- .wrap -->
    
<?php get_footer(); ?>