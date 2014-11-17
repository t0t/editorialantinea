<?php get_header(); ?>
<?php get_sidebar(); ?>

	<div class="content">
	<h2><?php single_cat_title(); ?></h2>

		<?php query_posts(array( 'post_type' => 'Revistas' )); ?>

		<ul id="mycarousel" class="jcarousel-skin-tango">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<li>
		<a href="<?php the_permalink(); ?>">
		<?php if ( has_post_thumbnail()) : ?>
    	<?php the_post_thumbnail(array(110,175)); ?>
    	<br />
    	<?php the_title(); ?>
		</a>
		<?php endif; ?>
		
		</li>
		<?php endwhile; ?>
		</ul>
		
		<?php wp_reset_query(); ?>
			
				
		<div id="destacado-revistas">
		
		<?php query_posts(array( 'post_type' => 'Revistas', 'category_name' => '7diesvinaros', 'posts_per_page' => 4 )); ?>
        <h3><?php single_cat_title(); ?></h3>
        <?php while (have_posts()) : the_post(); ?>
		<div class="post">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
		<?php the_post_thumbnail( array(110,160) ); ?>
		<?php the_title(); ?>
		</a>
		</div><!-- .post -->
		<?php endwhile;?>
		
		<div class="mas">
		<a href="http://www.editorialantinea.com/antineawp/libros/envalencia/" title="" class="" >+</a>
		</div>
		
        <?php wp_reset_query(); ?>
        </div>
		
		
		<div id="destacado-revistas">
		
		<?php query_posts(array( 'post_type' => 'Revistas', 'category_name' => '7diesbenicarlo', 'posts_per_page' => 4 )); ?>
        <h3><?php single_cat_title(); ?></h3>
        <?php while (have_posts()) : the_post(); ?>
		<div class="post">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
		<?php the_post_thumbnail( array(110,160) ); ?>
		<?php the_title(); ?>
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
	
</div>

<?php get_footer(); ?>