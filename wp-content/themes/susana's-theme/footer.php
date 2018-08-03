        </section><!-- /#global-content -->
		<footer id="main-footer">	
			<div class="footer-copyright">
				&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
                <!-- Obtengo el año actual y el título de la página y lo imprimo | I get the current year and the title of the page and print it -->
			</div><!-- /.footer-copyright -->
		</footer><!-- footer -->
	</div><!-- /#global-container -->
    
    <?php wp_footer(); ?>
    <!-- Aquí llamo los script para cargar y ejecutar todas las funciones al final del footer. |
         I call the script to load and execute all the functions of the footer-->
</body>
</html>