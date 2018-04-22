<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
	<head>
		<title><?php wp_title(); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/webfonts/web-fonts-with-css/css/fontawesome-all.css">
		<?php wp_head(); ?>
	</head>

	<body>
		<div class="firstView col-md-12 col-sm-12">
			<div class="titleBox">
				<h2 class="titleHead">O imóvel perfeito para você e para sua família</h2>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4"></div>
				<fieldset class="form-group col-md-4 col-sm-4">
					<input class="form-control" aria-describedby="emailInfo" placeholder="Digite seu email para mais informações" type="text" id="emailInfo" name="emailInfo"/>
				</fieldset>
				<fieldset class="form-group col-md-4 col-sm-4">
					<button type="button" class="btn btn-primary">Mais Info</button>
				</fieldset>
			</div>
		</div>

		<div class="container-fluid">