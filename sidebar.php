<div id="sidebar">

	<div id="generos">
		<h2><?php _e("<!--:es-->G&eacute;neros<!--:--><!--:ca-->G&egrave;neres<!--:-->"); ?></h2>
		<ul>
			<?php wp_list_categories('include=8,5,6,9,1,4,10,7,3&title_li=' ); ?>
		</ul>
	</div>
	
	<div id="llibresenvalencia">
		<ul>
			<?php wp_list_categories('include=145&title_li=' ); ?>
		</ul>
	</div>
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('primary') ) ?>
	
	<div class="tagcloud">
		<h2><?php _e("<!--:es-->Autores<!--:--><!--:ca-->Autors<!--:-->"); ?></h2>
		<ul>
			<?php wp_tag_cloud('smallest=8&largest=22'); ?>
		</ul>
	</div>
		
	<div id="buscador">
	<h2>Buscar</h2>
	<?php get_search_form(); ?>
	</div>
	
</div>