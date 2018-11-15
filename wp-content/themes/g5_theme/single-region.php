<?php


$main_picture = get_field('main_picture');
$secondary_picture = get_field('region_photo');
$thumb1 = get_field('thumbnail_1');
$thumb2 = get_field('thumbnail_2');



get_header() ?>

<div class="RegionPage">
	<?php if(!empty($main_picture)): ?>
		<img class="RegionPage__main-picture" src="<?php echo $main_picture; ?>" />
	<?php endif; ?>
	<div class="RegionPage__title">
		<h1><?php the_field("name_of_region"); ?><span>.</span></h1>
	</div>
	<div class="RegionPage__data-line"></div>
	<span class="RegionPage__data-subtitle">Quelques données</span>
	<div class="RegionPage__location">
		<i></i>
		<h4><span>L</span>ocalisation</h4>
		<p><?php the_field("location_text") ?></p>
	</div>
	<div class="RegionPage__area">
		<i></i>
		<h4><span>S</span>uperficie</h4>
		<p><?php the_field("area_text"); ?></p>
	</div>
	<div class="RegionPage__climate">
		<i></i>
		<h4><span>C</span>limat</h4>
		<p><?php the_field("climate_text"); ?></p>
	</div>
	<span class="RegionPage__region-subtitle">
		<?php the_field("title_of_region"); ?><span>.</span>
	</span>
	<div class="RegionPage__region-text">
		<p>
			<?php the_field("main_text"); ?>
		</p>
		<span><?php the_field("name_of_region") ?></span>
	</div>
	<div class="RegionPage__region-picture">
	<?php if(!empty($secondary_picture)): ?>
		<img src="<?php echo $secondary_picture; ?>" />
	<?php endif; ?>
	</div>
	<h2 class="RegionPage__climate-subtitle-1">Changement</h2>
	<h2 class="RegionPage__climate-subtitle-2">Climatique<span>.</span></h2>
	<div class="RegionPage__climate-fact-line"></div>
	<span class="RegionPage__climate-fact-subtitle">
		<?php the_field("fact") ?>
	</span>
	<div class="RegionPage__temperature-images">
	<?php if(!empty($thumb1)): ?>
		<img src="<?php echo $thumb1; ?>" />
	<?php endif; ?>
	<?php if(!empty($thumb2)): ?>
		<img src="<?php echo $thumb2; ?>" />
	<?php endif; ?>
	<div class="RegionPage__temperature-images__badfact">
		<p><?php the_field("fact_number") ?></p>
		<p><?php the_field("small_fact") ?></p>
	</div>
	</div>
	<p class="RegionPage__temperature-text">
		<?php the_field("secondary_text"); ?>
	</p>
	<h5 class="RegionPage__species-title">Espèces en disparition<span>...</span></h5>
	<img class="RegionPage__species-picture RegionPage__species-picture-1" src="https://picsum.photos/200/200"/>
	<img class="RegionPage__species-picture RegionPage__species-picture-2" src="https://picsum.photos/200/200"/>
	<img class="RegionPage__species-picture RegionPage__species-picture-3" src="https://picsum.photos/200/200"/>
	<img class="RegionPage__species-picture RegionPage__species-picture-4" src="https://picsum.photos/200/200"/>
	<a href="#" class="RegionPage__species-text RegionPage__species-text-1">Découvrir</a>
	<a href="#" class="RegionPage__species-text RegionPage__species-text-2">Découvrir</a>
	<a href="#" class="RegionPage__species-text RegionPage__species-text-3">Découvrir</a>
	<a href="#" class="RegionPage__species-text RegionPage__species-text-4">Découvrir</a>
</div>
