<?php 
/*
template name: Inicio
*/
?>
<?php get_header(); ?><!-- Call to header partial -->
	<section id="main-content">
        <div class="row">
            <div class="col-3 col-xs col-padding-2">
                <a href="#" type="text/html" target="_blank"><span class="icon-shield"></span>
                    Registro de membresía
                </a>
            </div>
            <div class="col-3 col-xs col-padding-2">
                <a href="https://www.winistoshare.com" type="text/html" target="_blank"><span class="icon-monetization_on"></span>
                    Registro de accionistas
                </a>
            </div>
            <div class="col-3 col-xs col-padding-2">
                <a href="https://www.winistoshare.com" type="text/html" target="_blank"><span class="icon-directions_car"></span>
                    Registro de conductores
                </a>
            </div>
        </div>
    </section><!-- /#main-content -->
    <?php get_sidebar(); ?><!-- Call to sidebar partial -->
<?php get_footer(); ?><!-- Call to footer partial -->