<?php get_header(); ?>

<section class="site_container">
    <!-- Content -->
    <section class="blog wrapper">
        <div class="grid">
            <?php
                $i = 0;
                if (have_posts()) : while (have_posts()) : the_post(); $i++;
            ?>
            <article data-aos="fade-up" data-aos-anchor-placement="top-center" id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
                <span class="post_number"><?php echo $i; ?></span>
                <?php if(get_the_post_thumbnail($post->ID,'works-thumb')){	?>
                    <a href="<?php if(ale_get_meta('works_link')) { echo esc_attr(ale_get_meta('works_link'));} ?>">
                        <?php echo get_the_post_thumbnail($post->ID,'works-thumb'); ?>
                        <?php if(ale_get_meta('works_subtitle')) {?>
                            <h3 class="post_title">
                                <?php echo esc_attr(ale_get_meta('works_subtitle')); ?>
                            </h3>
                        <?php } ?>
                    </a>
                <?php  } else{?>
                    <a href="<?php if(ale_get_meta('works_link')) { echo esc_attr(ale_get_meta('works_link'));} ?>">
                        <div class="post_data">
                            <?php if(ale_get_meta('works_subtitle')) {?>
                                <h3 class="post_title">
                                    <?php echo esc_attr(ale_get_meta('works_subtitle')); ?>
                                </h3>
                            <?php } ?>
                        </div>
                    </a>
                <?php }?>
            </article>
            <?php endwhile; else:;endif;  ?>
        </div>        
  </section>

</section>
<?php get_footer(); ?>