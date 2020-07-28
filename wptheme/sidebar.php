<div class="sidebar">
	<form method="get" id="searchform" action="<?php bloginfo('home');?>" class="form-inline my-2 my-lg-0 m-down m-up">
		<input class="form-control mr-sm-2" type="search" placeholder="Search" value="<?php the_search_query();?>" name="s" id="s" />
		<input class="btn btn-outline-success my-2 my-sm-0" type="submit" id="searchsubmit" value="Chercher">
	</form>
	<h2 class="m-up">Calendrier : </h2>
	<?php get_calendar(); ?>
	<h2 class="m-up">Catégories : </h2>
	<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
	<?php wp_list_pages('title_li=<h2 class="m-up">Pages : </h2>'); ?>
	<h2 class="m-up">Infos Meta</h2>   
	<ul> 
		<li><?php wp_register(); ?></li> 
		<li><?php wp_loginout(); ?></li> 
		<li><?php wp_meta(); ?></li> 
	</ul>

</div>