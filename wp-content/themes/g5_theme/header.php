<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <!-- Appel du fichier style.css de notre thème -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

		<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>


		<title>
			<?php
				bloginfo('name');
				if (wp_title('', false)) {
					echo '|';
				} else {
					echo bloginfo('description');
				} wp_title('');
			?>
		</title>


        <!-- Execution de la fonction wp_head() obligatoire ! -->
        <?php wp_head(); ?>
    </head>
	<body <?php body_class(); ?>>
        <header id="header">
		<?php
			$mouse = get_field('type_of_mouse', 'options');
			if($mouse == 'experimental'):
		?>
			<div class="wrap">
				<div class="wrap__ball wrap__ball-js" style="background-color: <?php the_field('mouse_color', 'options') ?>;"></div>
			</div>
		<?php
			endif;
		?>
		<?php include 'menu.php'; ?>
        </header>
