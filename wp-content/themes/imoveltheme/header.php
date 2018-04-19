<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/style.css">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
		<?php wp_head(); ?>
	</head>

	<body>
		<div class="firstView col-md-12">
			<div class="titleBox">
				<h2 class="titleHead">O imóvel perfeito para você e para sua família</h2>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<fieldset class="form-group col-md-4 col-md-offset-4 col-xs-6">
					<input class="form-control" aria-describedby="emailInfo" placeholder="Digite seu email para mais informações" type="text" id="emailInfo" name="emailInfo"/>
				</fieldset>
				<fieldset class="form-group col-md-4 col-xs-6">
					<button type="button" class="btn btn-primary">Mais Info</button>
				</fieldset>
			</div>
		</div>