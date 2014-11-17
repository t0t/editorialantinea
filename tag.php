<?php get_header(); ?>
<?php get_sidebar(); ?>

    
    <div class="content">
    
    <h2>Libros del Autor <?php single_cat_title(); ?>:</h2>
    
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
               
            <div class="thumbs"> 
            
            <div class="post" id="post-<?php the_ID(); ?>">
                                                           
                <div class="entry">
                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail('thumbnail'); ?>
                <?php the_title(); ?></a>
                </div>
                </div>   
                   
            </div> 
            
        <?php endwhile; ?>
        
               <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

    <?php else : ?>
    
        <h2 class="center">No encontrado</h2>
        <p class="center">Ups, lo que buscas no está aquí...</p>
        
    <?php endif; ?>
    </div>
    
<?php get_footer(); ?>