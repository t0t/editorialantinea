		
<div id="footer">
                
        <div class="menu-footer">
        <?php wp_nav_menu( array( 'theme_location' => 'menu-footer' ) ); ?>
        	<div class="direccion">
        		<small>Editorial Antinea. <?php echo date('Y'); ?> C/ Dr. Fleming, 6. Vinar&ograve;s (Castell&oacute;) Tel. 964 45 45 25 Fax 964 45 20 12 E-mail: <a href="mailto:webmaster@editorialantinea.com"> webmaster[a]editorialantinea.com</a></small>
        	</div>
        </div><!-- .menu-footer -->
        
        <div class="creditos">
        <small>Dise&ntilde;o: <a href="mailto:sergiofores@gmail.com">Sergio For&eacute;s</a></small> |
        <small>Admin: <?php wp_loginout(); ?></small>
        </div><!-- .creditos -->
              
</div><!-- #footer -->
</div><!-- .wrap -->

<?php wp_footer(); ?>
</body>
</html>