        </section><!-- /#global-content -->
		<footer id="main-footer">	
			<div class="footer-copyright">
				<?php _e('Todos los Derechos Reservados '); ?>&copy; <?php echo date('Y'); ?> <?php _e('WIN TECNOLOGIES INC S.A.'); ?>
                <!-- Obtengo el año actual y el título de la página y lo imprimo | I get the current year and the title of the page and print it -->
			</div><!-- /.footer-copyright -->
		</footer><!-- footer -->
	</div><!-- /#global-container -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/script.js"></script>

    
    <?php wp_footer(); ?>
    <!-- Aquí llamo los script para cargar y ejecutar todas las funciones al final del footer. |
         I call the script to load and execute all the functions of the footer-->

</body>
</html>