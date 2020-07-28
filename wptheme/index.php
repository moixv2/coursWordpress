<?php get_header(); ?>

				<!-- JUMBOTRON -->
				<header class="masthead bg-primary text-white text-center">
						<div class="container d-flex align-items-center flex-column">
								<!-- Masthead Avatar Image-->
								<img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="" /><!-- TITRE DU BLOG -->
								<h1 class="masthead-heading text-uppercase mb-0"><?php bloginfo('name'); ?></h1>
								<!-- DIVISIONS -->
								<div class="divider-custom divider-light">
										<div class="divider-custom-line"></div>
										<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
										<div class="divider-custom-line"></div>
								</div>
								<!-- DESCRIPTION DU BLOG -->
								<p class="masthead-subheading font-weight-light mb-0"><?php bloginfo('description'); ?></p>
						</div>
				</header>

				<!-- CONTENU DE NOTRE PAGE -->
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-lg-8 mb-5">
							<div id="page">
									<!-- About Section-->
									<?php if(have_posts()): ?>
										<?php while(have_posts()): the_post(); ?>
											<section class="page-section mb-0 post" id="post-<?php the_ID();?>">
													<div class="container">
															<a class="title-link" href="<?php the_permalink(); ?>"><h2 class="page-section-heading text-center text-uppercase"><?php the_title(); ?></h2></a>
															<div class="divider-custom divider-dark">
																	<div class="divider-custom-line"></div>
																	<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
																	<div class="divider-custom-line"></div>
															</div>
															<div class="row post_content">
																	<div class="col-lg-4 ml-auto"><p class="lead"><?php the_excerpt(); ?></p></div>
																	<div class="col-lg-4 mr-auto">
																		<p class="lead">Fait le <?php the_time('j F Y');?> par <?php the_author();?></p>
																		<p class="lead">Catégorie: <?php the_category('category_li=<a></a>'); ?></p>
																		<?php comments_popup_link('Pas de commentaires', '1 commentaire', '% Commentaires');?> | <?php edit_post_link('Editer', '');?>
																	</div>
															</div>
															<!-- About Section Button-->
															<div class="text-center mt-4">
																	<a class="btn btn-xl btn-outline-dark" href="<?php the_permalink(); ?>"><i class="fas fa-download mr-2"></i>Go !</a>
															</div>
													</div>
											</section><hr>
										<?php endwhile; ?>
									<?php else: ?>
											<section class="page-section mb-0" id="about">
													<div class="container">
															<h1>Pas de résultats.</h1>
													</div>
											</section>
									<?php	endif; ?>
							</div>
						</div>
						<div class="col-md-12 col-lg-4 mb-5">
							<?php get_sidebar(); ?>
						</div>
					</div>
				</div>
				
<?php get_footer(); ?>
