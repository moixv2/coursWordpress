<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="descriptions" content="Blablabla" />
		<title>Theme</title>
		<!-- Ici nous appellons la fonction wordpress qui récupère les données du HEAD -->
		<?php wp_head(); ?>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="#">Navbar</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav">
<!-- 		      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link" href="#">Menu 1</a>
		      <a class="nav-item nav-link" href="#">Menu 2</a> -->
	      		<?php 
							wp_nav_menu(array(
								'menu' => 'top-menu',
								'theme_location' => 'primary'
							));
						?>
		    </div>
		  </div>
		</nav>

		<div class="jumbotron">
		  <h1 class="display-4">Wesh</h1>
		  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>

		  <form action="<?php bloginfo('home');?>" method="get" id="searchform">
		  	<input type="text" value="<?php the_search_query();?>" name='s' id='s'>
		  	<input type="submit" id="searchsubmit" value="Chercher" />
		  </form>

		</div>

		<div class="container">
			<div class="row">
				<?php if (have_posts()): ?>
				<div class="col-xs-12" id="content">
					<?php 
						while(have_posts()): 
							the_post();
							$date = sprintf('<time class="entry-date" datetime="%1$s">%2$s</time>', esc_attr(get_the_date('c')), esc_html(get_the_date()));
					?>
					<div id="post-<?php the_ID();?>" class="post card" style="width: 18rem;">
						<a href="<?php the_permalink();?>" class="btn btn-primary"><?php the_post_thumbnail('thumbnail'); ?></a>
					  <div class="card-body">
					    <h5 class="card-title"><?php the_title(); ?></h5>
					    <p class="card-text post-content"><?php the_excerpt(); ?></p>
					    <p>publié le <?php echo $date; ?>, dans la catégorie <?php the_category(); ?></p>
					    <a href="<?php the_permalink();?>" class="btn btn-primary">Go to article</a>
					  </div>
					</div>
				<?php endwhile; ?>
					<nav>
						<ul>
							<li class="pull-left"><?php previous_post_link(); ?></li>
							<li class="pull-right"><?php next_post_link(); ?></li>
						</ul>
					</nav>
				</div>
			<?php 
				else:
					echo "Pas de résultats.";
				endif; 
			?>
			</div>
		</div>

		
		<!-- Appel du footer, dans notre cas il contiendra les balises <scripts>, entre autres -->
		<?php wp_footer(); ?>
	</body>
</html>