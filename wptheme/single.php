<?php get_header(); ?>
	<!-- CONTENU DE NOTRE PAGE -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12 mb-5">
				<div id="page">
						<!-- About Section-->
						<?php if(have_posts()): ?>
							<?php while(have_posts()): the_post(); ?>
								<section class="page-section mb-0 post" id="post-<?php the_ID();?>">
										<div class="container">
												<!-- About Section Heading-->
												<h2 class="page-section-heading text-center text-uppercase"><?php the_title(); ?></h2>
												<!-- Icon Divider-->
												<div class="divider-custom divider-dark">
														<div class="divider-custom-line"></div>
														<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
														<div class="divider-custom-line"></div>
												</div>
												<!-- About Section Content-->
												<div class="row post_content">
														<div class="col-lg-4 ml-auto">
															<?php the_post_thumbnail('thumbnail'); ?>
															<p class="lead"><?php the_content(); ?></p>
														</div>
														<div class="col-lg-4 mr-auto">
															<p class="lead">Fait le <?php the_time('j F Y');?> par <?php the_author();?></p>
															<p class="lead">Catégorie: <?php the_category(); ?></p>
															<?php comments_popup_link('Pas de commentaires', '1 commentaire', '% Commentaires');?> | <?php edit_post_link('Editer', '');?>
														</div>
												</div>
												<!-- About Section Button-->
												<div class="text-center mt-4">
														<a class="btn btn-xl btn-outline-dark" href="/WPTHEME/"><i class="fas fa-download mr-2"></i>Revenir en arrière!</a>
												</div>
										</div>
								</section><hr>
							<?php endwhile; ?>
	
							<div class="row">
								<div class="col-md-12">
									<nav>
										<ul>
											<li class='float-left'><?php previous_post_link(); ?></li>
											<li class='float-right'><?php next_post_link(); ?></li>
										</ul>
									</nav>
								</div>
							</div>

						<?php else: ?>
								<section class="page-section mb-0" id="about">
										<div class="container">
												<h1>Pas de résultats.</h1>
										</div>
								</section>
						<?php	endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
