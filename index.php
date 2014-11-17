<?php get_header(); ?>
<?php get_sidebar(); ?>

    <div class="content">
    <?php if (have_posts()) : ?>
       
        <?php while (have_posts()) : the_post(); ?>
               
            <div class="post" id="post-<?php the_ID(); ?>">
            
                <h2><?php the_title(); ?></h2>
                                            
                <div class="entry">
                    <?php the_content(); ?>
                </div>   
                   
            </div>  
            
        
        <?php endwhile; ?>
        
       
    <?php else : ?>
    
        <h2 class="center">No encontrado</h2>
        <p class="center">Ups, lo que buscas no está aquí...</p>
        
    <?php endif; ?>
    </div>
    
<?php get_footer(); ?>