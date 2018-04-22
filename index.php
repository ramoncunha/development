<?php
get_header();
?>

<div class="firstElement row">
	<div class="element col-md-4 col-sm-12">
		<i class="fas fa-tv"></i>
		<font class="inf1">Apartamento completo</font>
		<font class="desc1">Mobília já incluida em maravilhosos ambientes</font>
	</div>
	<div class="element col-md-4 col-sm-12">
		<i class="fas fa-angle-double-up"></i>
		<font class="inf1">Alto padrão</font>
		<font class="desc1">Imóvel de alto padrão e em excelente localização</font>		
	</div>
	<div class="element col-md-4 col-sm-12">
		<i class="far fa-check-circle"></i>
		<font class="inf1">Negociação fácil</font>
		<font class="desc1">Financiamento desburocratizado e barato</font>
	</div>
</div>

<?php
	$args = array('post_type' => 'post', 'showposts' =>2);
	$my_posts = get_posts($args);

	if($my_posts) : foreach ($my_posts as $post) : setup_postdata($post); ?>

		<div class="row">
			<div class="col-md-6 col-sm-6">
				<p class="inf1"><?php the_title(); ?></p>
				<p class="desc1"><?php the_excerpt(); ?></p>
			</div>
			<div class="col-md-6 col-sm-6">
				<img class="img-responsive" alt="Planta do Quarto" src="<?php echo get_template_directory_uri()?>/img/planta-quarto2.jpg">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<img class="img-responsive" alt="Planta da Area de Lazer" src="<?php echo get_template_directory_uri()?>/img/planta-lazer.jpg">
			</div>
			<div class="col-md-6 col-sm-6">
				<p class="inf1">Ampla e diversa área de lazer</p>
				<p class="desc1">Área de lazer planejada para o divertimento de toda a família, com piscina,
				quadra, área de churrasco, sala de jogos. Tudo feito com carinho para o desfrute
				de sua família</p>
			</div>
		</div>

	<?php endforeach; endif; ?>

<?php
get_footer();
?>