    <?php  
    /* 
    Template Name: Sitemap 
    */  
    ?>  
    
    <?php get_header(); ?>
<?php get_sidebar(); ?>

    <div id="content">
    <?php if (have_posts()) : ?>
       
        <?php while (have_posts()) : the_post(); ?>
               
            <div class="post" id="post-<?php the_ID(); ?>">
            
                <h2><?php the_title(); ?></h2>
                                            
                <div class="entry">
                    
                    <h2>Paginas:</h2>  
    <ul><?php wp_list_pages("title_li=" ); ?></ul>  
 
<h2>Categor&iacute;as:</h2>  
    <ul><?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?></ul>  

<h2>Todas las entradas:</h2>  
    <ul><?php $archive_query = new WP_Query('showposts=1000&cat=-8');  
            while ($archive_query->have_posts()) : $archive_query->the_post(); ?>  
                <li>  
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>  
                </li>  
            <?php endwhile; ?>  
    </ul>  
  
<h2>Archivos</h2>  
    <ul>  
        <?php wp_get_archives('type=monthly&show_post_count=true'); ?>  
    </ul>
                    
                </div>                      
            </div>  
            
        <?php endwhile; ?>
        
    <?php else : ?>
    
        <h2 class="center">No encontrado</h2>
        <p class="center">Ups, lo que buscas no está aquí...</p>
        <?php include (TEMPLATEPATH . "/searchform.php"); ?>
        
    <?php endif; ?>
    </div>
    
<?php get_footer(); ?>