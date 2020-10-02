<?php get_header(); ?>

<section class="site_container">
    <div class="blog_cats">
        <ul class="categories font_two">
            <?php
            $categories = get_categories( array(
                'orderby' => 'name',
                'order'   => 'ASC'
            ) );

            foreach( $categories as $category ) {
                $category_link = sprintf(
                    '<li><a href="%1$s" alt="%2$s">%3$s</a></li>',
                    esc_url( get_category_link( $category->term_id ) ),
                    esc_attr( $category->name),
                    esc_html( $category->name )
                );
                echo ale_wp_kses($category_link);
            }
            ?>
        </ul>
    </div>
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
                            <h3 class="post_title">
                                <?php the_title(); ?>
                            </h3>
                        </a>
                    <?php  } else{?>
                        <a href="<?php if(ale_get_meta('works_link')) { echo esc_attr(ale_get_meta('works_link'));} ?>">
                            <div class="post_data">
                                <h3 class="post_title">
                                    <?php the_title(); ?>
                                </h3>
                            </div>
                        </a>
                    <?php }?>
                </article>
                <?php endwhile; else:;endif;  ?>
        </div>
  </section>

</section>
<?php get_footer(); ?>