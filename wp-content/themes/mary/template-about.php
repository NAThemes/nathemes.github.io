<?php
/*
  * Template name: About Template
  * */
get_header(); ?>
<section class="site_container wrapper about_page">
	<div class="about_slider">
		<div class="slide">
			<?php if(ale_get_meta('info_photo_one')){
				echo "<img class='photo' src=".esc_url(ale_get_meta('info_photo_one'))." alt='".get_the_title()."' />";
			} ?>
			<div class="description">
				<?php if(ale_get_meta('info_title')){ ?><h3 class="info_title"><?php echo esc_attr(ale_get_meta('info_title')); ?></h3><?php } ?>
				<?php if(ale_get_meta('info_description_one')){ ?><p class="info_description_one"><?php echo esc_attr(ale_get_meta('info_description_one')); ?></p><?php } ?>
				<div class="nums">
					<span class="current_slide">
						1
					</span> /
					<span class="all_slides">
						2
					</span>
				</div>
			</div>
		</div>
		<div class="slide">
		<?php if(ale_get_meta('info_photo_two')){
				echo "<img class='photo' src=".esc_url(ale_get_meta('info_photo_two'))." alt='".get_the_title()."' />";
			} ?>
			<div class="description">
				<?php if(ale_get_meta('info_title')){ ?><h3 class="info_title"><?php echo esc_attr(ale_get_meta('info_title')); ?></h3><?php } ?>
				<?php if(ale_get_meta('info_description_two')){ ?><p class="info_description_two"><?php echo esc_attr(ale_get_meta('info_description_two')); ?></p><?php } ?>
				<div class="nums">
					<span class="current_slide">
						1
					</span> /
					<span class="all_slides">
						2
					</span>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>