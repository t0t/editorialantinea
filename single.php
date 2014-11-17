<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class="wrap">
<div class="content">
		
		<h2><?php the_title(); ?></h2>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	<div class="entry-content">
    	<div class="tags"><?php _e("<!--:es-->Escrito por<!--:--><!--:ca-->Escrit per<!--:-->"); ?>: <?php the_tags('',' • ',''); ?></div>
    	<br />
    	<?php the_content(); ?>
    	</div><!-- .entry-content -->
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
		
		

		
		
		<?php if ( is_single() && in_category('biografia') ) {?>

			<div class="otros_generos"><h2><?php _e("<!--:es-->Otros t&iacute;tulos dentro de<!--:--><!--:ca-->Altres t&iacute;tols dintre de<!--:-->"); ?>: <?php the_category(', '); ?></h2></div>
			<?php query_posts(array( 'category_name' => 'biografia', 'posts_per_page' => 20 )); ?>

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
		
		
		
		
		
		<?php if ( is_single() && in_category('ciencias') ) {?>

			<div class="otros_generos"><h2><?php _e("<!--:es-->Otros t&iacute;tulos dentro de<!--:--><!--:ca-->Altres t&iacute;tols dintre de<!--:-->"); ?>: <?php the_category(', '); ?></h2></div>
			<?php query_posts(array( 'category_name' => 'ciencias', 'posts_per_page' => 20 )); ?>

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
		
		
		
		
		
		
		<?php if ( is_single() && in_category('arte') ) {?>

			<div class="otros_generos"><h2><?php _e("<!--:es-->Otros t&iacute;tulos dentro de<!--:--><!--:ca-->Altres t&iacute;tols dintre de<!--:-->"); ?>: <?php the_category(', '); ?></h2></div>
			<?php query_posts(array( 'category_name' => 'arte', 'posts_per_page' => 20 )); ?>

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
		
		
		
		
		
		
		<?php if ( is_single() && in_category('estudiohistorico') ) {?>

			<div class="otros_generos"><h2><?php _e("<!--:es-->Otros t&iacute;tulos dentro de<!--:--><!--:ca-->Altres t&iacute;tols dintre de<!--:-->"); ?>: <?php the_category(', '); ?></h2></div>
			<?php query_posts(array( 'category_name' => 'estudiohistorico', 'posts_per_page' => 20 )); ?>

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
		
		
						
		
		
		
		<?php if ( is_single() && in_category('narrativa') ) {?>

			<div class="otros_generos"><h2><?php _e("<!--:es-->Otros t&iacute;tulos dentro de<!--:--><!--:ca-->Altres t&iacute;tols dintre de<!--:-->"); ?>: <?php the_category(', '); ?></h2></div>
			<?php query_posts(array( 'category_name' => 'narrativa', 'posts_per_page' => 20 )); ?>

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
		
		
		
		
		<?php if ( is_single() && in_category('entorno') ) {?>

			<div class="otros_generos"><h2><?php _e("<!--:es-->Otros t&iacute;tulos dentro de<!--:--><!--:ca-->Altres t&iacute;tols dintre de<!--:-->"); ?>: <?php the_category(', '); ?></h2></div>
			<?php query_posts(array( 'category_name' => 'entorno', 'posts_per_page' => 20 )); ?>

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
		
		
		
		
		
		<?php if ( is_single() && in_category('otrostitulos') ) {?>

			<div class="otros_generos"><h2><?php _e("<!--:es-->Otros t&iacute;tulos dentro de<!--:--><!--:ca-->Altres t&iacute;tols dintre de<!--:-->"); ?>: <?php the_category(', '); ?></h2></div>
			<?php query_posts(array( 'category_name' => 'otrostitulos', 'posts_per_page' => 20 )); ?>

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
		
		
		
		
		
		<?php if ( is_single() && in_category('poesia') ) {?>

			<div class="otros_generos"><h2><?php _e("<!--:es-->Otros t&iacute;tulos dentro de<!--:--><!--:ca-->Altres t&iacute;tols dintre de<!--:-->"); ?>: <?php the_category(', '); ?></h2></div>
			<?php query_posts(array( 'category_name' => 'poesia', 'posts_per_page' => 20 )); ?>

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
		
		
		

<div id="destacado-noticias">
    	<?php query_posts( array ( 'post_type' => 'Noticias', 'category_name' => 'noticiasantinea', 'posts_per_page' => 4 ) ); ?>
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

<?php get_footer(); ?>