<?php get_header(); ?>

<?php get_sidebar(); ?>

    <div class="content">

    <?php if (have_posts()) : ?>
       <h2><?php the_category(); ?></h2>
       
        <?php while (have_posts()) : the_post(); ?>
            
            <div class="post" id="post-<?php the_ID(); ?>">
                                                           
                <div class="entry">
                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail('thumbnail'); ?>
                <?php the_title(); ?>
                </a>
                </div>
                
            </div><!-- .post -->   
                   
            
        <?php endwhile; ?>
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
        
    <?php else : ?>
    
        <h2 class="center">No encontrado</h2>
        <p class="center">Ups, lo que buscas no está aquí...</p>
        
    <?php endif; ?>
    </div>
    
<?php get_footer(); ?>