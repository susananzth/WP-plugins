<?php get_header(); ?><!-- Call to header partial -->
			
			<section id="main-content">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<article class="post">
					<header class="post-title">
						<h1><?php the_title(); ?></h1>
						<small class="meta"><?php the_time(get_option('date_format')); ?> &bull; <?php the_category(', '); ?></small>
					</header>
					<div class="post-content">
						<?php the_content(); ?>
					</div>
				</article>	<!-- article -->
				<?php endwhile; endif ?>
                
				<div id="comments-area">
				
					<h3>Hay un comentario</h3>
					
					<ol id="comments-list">
						
						<li id="" class="comment">
							<article class="comment-body">
								<footer class="comment-meta">
									<div class="comment-author vcard">
										<img alt='' src='http://placehold.it/32x32' class='avatar' />
										<b class="fn"><a href='' rel='external nofollow' class='url'>Juan Pérez</a></b>
										<span class="says">dice:</span>
									</div><!-- .comment-author -->
								
									<div class="comment-metadata">
										<a href="">
											<time>28 marzo, 2014 a las 12:08 pm</time>
										</a>
									</div><!-- .comment-metadata -->
								
								</footer><!-- .comment-meta -->
								
								<div class="comment-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div><!-- .comment-content -->
								
								<div class="reply">
									<a class="comment-reply-link" href="">Responder</a>	
								</div><!-- .reply -->
							</article><!-- .comment-body -->
						</li><!-- #comment-## -->
						
						<li id="" class="comment">
							<article class="comment-body">
								<footer class="comment-meta">
									<div class="comment-author vcard">
										<img alt='' src='http://placehold.it/32x32' class='avatar' />
										<b class="fn"><a href='' rel='external nofollow' class='url'>Juan Pérez</a></b>
										<span class="says">dice:</span>
									</div><!-- .comment-author -->
								
									<div class="comment-metadata">
										<a href="">
											<time>28 marzo, 2014 a las 12:08 pm</time>
										</a>
									</div><!-- .comment-metadata -->
								
								</footer><!-- .comment-meta -->
								
								<div class="comment-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div><!-- .comment-content -->
								
								<div class="reply">
									<a class="comment-reply-link" href="">Responder</a>	
								</div><!-- .reply -->
							</article><!-- .comment-body -->
							
							
							
							<ul class="children">
								<li id="" class="comment">
									<article class="comment-body">
										<footer class="comment-meta">
											<div class="comment-author vcard">
												<img alt='' src='http://placehold.it/32x32' class='avatar' />
												<b class="fn"><a href='' rel='external nofollow' class='url'>Juan Pérez</a></b>
												<span class="says">dice:</span>
											</div><!-- .comment-author -->
										
											<div class="comment-metadata">
												<a href="">
													<time>28 marzo, 2014 a las 12:08 pm</time>
												</a>
											</div><!-- .comment-metadata -->
										
										</footer><!-- .comment-meta -->
										
										<div class="comment-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div><!-- .comment-content -->
										
										<div class="reply">
											<a class="comment-reply-link" href="">Responder</a>	
										</div><!-- .reply -->
									</article><!-- .comment-body -->
								</li><!-- #comment-## -->
							</ul><!-- /#comments-list -->
							
							
						</li><!-- #comment-## -->
					</ol><!-- /#comments-list -->
					
					
					<div id="respond" class="comment-respond">
						<h3 id="reply-title" class="comment-reply-title">Deja un comentario</h3>
						
						<form action="" id="commentform" class="comment-form">
							
							<p class="comment-notes">Tu dirección de correo electrónico no será publicada. Los campos necesarios están marcados <span class="required">*</span></p>
							
							<p class="comment-form-author">
								<label for="author">Nombre <span class="required">*</span></label>
								<input id="author" name="author" type="text" />
							</p>
							
							<p class="comment-form-email">
								<label for="email">Correo electrónico <span class="required">*</span></label>
								<input id="email" name="email" type="email" />
							</p>
							
							<p class="comment-form-url">
								<label for="url">Web</label>
								<input id="url" name="url" type="url" value="" size="30" />
							</p>
							
							<p class="comment-form-comment">
								<label for="comment">Comentario</label>
								<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
							</p>
							
							<p class="form-allowed-tags">Puedes usar las siguientes etiquetas y atributos <abbr title="HyperText Markup Language">HTML</abbr>:  <code>&lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </code></p>								
							<p class="form-submit">
								<input name="submit" type="submit" id="submit" value="Publicar comentario" />
							</p>
						
						</form>
					
					</div><!-- #respond -->
				
				</div><!-- #comments-area -->
				
				
			</section><!-- /#main-content -->
			
			<?php get_sidebar(); ?><!-- Call to sidebar partial -->
			
<?php get_footer(); ?><!-- Call to footer partial -->