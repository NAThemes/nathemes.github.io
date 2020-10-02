<?php get_header(); ?>
<div class="slider_class_guide">
	<?php
	$args = array(
		'post_type' => 'slider_gallery',
		'posts_per_page' => -1
	);

	$slider_gallery = new WP_Query($args);

	if ($slider_gallery->have_posts()) : while ( $slider_gallery->have_posts()) : $slider_gallery->the_post();?>
		<article class="slide" id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
			<div class="left_side">
				<div class="navigation">
					<span class="previous_slide"><i class="fa fa-caret-left" aria-hidden="true"></i></span>
					<span class="next_slide"><i class="fa fa-caret-right" aria-hidden="true"></i></span>
				</div>
				<?php if(ale_get_meta('text_on_slide')){ ?><p class="text_on_slide"><?php echo esc_attr(ale_get_meta('text_on_slide')); ?></p><?php } ?>
			</div>
			<?php if(get_the_post_thumbnail($post->ID,'slider_gallery-thumb')){	?>
			<?php echo get_the_post_thumbnail($post->ID,'slider_gallery-thumb'); ?>
			<?php  } ?>
		</article>
	<?php endwhile; endif; wp_reset_query(); ?>
</div>
<div class="story projects_list cf">
		<h2 class="title_class_guide">
			Галерея
		</h2>
		<div class="projects_grid_container cf">
			<div class="grid_projects">
				<div class="grid-sizer"></div>
				<div class="gutter-sizer"></div>

				<?php
				$i = 0;
				
				if (have_posts()) : while (have_posts()) : the_post(); $i++;
							
						if($i == 1){?>
							<div <?php post_class('grid-projects-item'); ?> id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
								<?php
									echo get_the_post_thumbnail(get_the_ID(), 'projects-img1');
								?>
									<span class="hover_icon"></span>
							</div>
						<?php } else if($i == 2) { ?>
							<div <?php post_class('grid-projects-item'); ?> id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
								<?php
									echo get_the_post_thumbnail(get_the_ID(), 'projects-img2');
								?>
								<span class="hover_icon"></span>

							</div>
						<?php } else if($i == 3) { ?>
							<div <?php post_class('grid-projects-item'); ?> id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
								<?php
									echo get_the_post_thumbnail(get_the_ID(), 'projects-img3');
								?>
									<span class="hover_icon"></span>
							</div>
						<?php } else if($i == 4) { ?>
							<div <?php post_class('grid-projects-item'); ?> id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
								<?php
									echo get_the_post_thumbnail(get_the_ID(), 'projects-img4');
								?>
									<span class="hover_icon"></span>
							</div>
						<?php } else if($i == 5) { ?>
							<div <?php post_class('grid-projects-item  grid-projects-item-two'); ?> id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
								<?php
									echo get_the_post_thumbnail(get_the_ID(), 'projects-img5');
								?>
									<span class="hover_icon"></span>
							</div>
						<?php } else if($i == 6) { ?>
							<div <?php post_class('grid-projects-item'); ?> id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
								<?php
									echo get_the_post_thumbnail(get_the_ID(), 'projects-img6');
								?>
									<span class="hover_icon"></span>
							</div>
						<?php } else if($i == 7) {?>
							<div <?php post_class('grid-projects-item'); ?> id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
								<?php
									echo get_the_post_thumbnail(get_the_ID(), 'projects-img7');
								?>
									<span class="hover_icon"></span>
							</div>
						<?php } else if($i == 8) {?>

							<div <?php post_class('grid-projects-item'); ?> id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
								<?php
									echo get_the_post_thumbnail(get_the_ID(), 'projects-img8');
								?>
									<span class="hover_icon"></span>
							</div>
						<?php } else if($i == 9) {?>
							<div <?php post_class('grid-projects-item grid-projects-item-two'); ?> id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
								<?php
									echo get_the_post_thumbnail(get_the_ID(), 'projects-img9');
								?>
									<span class="hover_icon"></span>
							</div>
						<?php } else if($i == 10) {?>
							<div <?php post_class('grid-projects-item'); ?> id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
								<?php
									echo get_the_post_thumbnail(get_the_ID(), 'projects-img10');
								?>
									<span class="hover_icon"></span>
							</div>

						<?php } ?>
				<?php endwhile; else: ?>
					<?php get_template_part('partials/notfound')?>
				<?php endif; ?>
			</div>
		</div>

		<?php get_template_part('partials/pagination'); ?>
	</div>

<?php get_footer(); ?>