<?php 
/*
template name: Ancho completo
*/
get_header(); ?><!-- Call to header partial -->
			
			<section id="main-content" class="fullwidth">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <!-- Si hay posts, mientras haya posts, muestra el post -->
				
				<article class="post">
					<header class="post-title">
						<h1><?php the_title(); ?></h1>
                        <!-- Muestra el título del post -->
					</header>
					<div class="post-content">
						<?php the_content(); ?>
                        <!-- Muestra el artículo -->
					</div>
				</article>	<!-- article -->
				<?php endwhile; endif ?>
				
			</section><!-- /#main-content -->
			
<?php get_footer(); ?><!-- Call to footer partial -->