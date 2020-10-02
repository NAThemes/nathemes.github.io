<?php get_header(); ?>



<section class="blog wrapper">
        <div class="grid">
        <?php
            $i = 0;
            if (have_posts()) : while (have_posts()) : the_post(); $i++;
        ?>
            <article data-aos="fade-up" data-aos-anchor-placement="top-center" 
            <?php if($i % 2 == 0) {post_class('second_box');} else {post_class('box');}?>
             
            id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">

                    <?php if(get_the_post_thumbnail($post->ID,'post-blogimg')){?>
                        <div class="post_thumbnail">
                            <?php echo get_the_post_thumbnail($post->ID,'post-blogimg'); ?>
                        </div>
                    <?php  }?>
                    <div class="post_data">
                        <span class="post_number"><?php echo $i; ?></span>
                        <h2 class="post_title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <?php if(ale_get_meta('post_sub_title')) {?>
                            <span class="post_subtitle">
                                <?php echo esc_attr(ale_get_meta('post_sub_title')); ?>
                            </span>
                        <?php } ?>
                        <span class="date">
                            <i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_date(); ?>
                        </span>
                    </div>
                    <script>
                        var r = Math.floor(Math.random()*256);
                            g = Math.floor(Math.random()*256);
                            b = Math.floor(Math.random()*256);

                            $('#post-<?php the_ID()?>').css('backgroundColor','rgb('+r+','+g+','+b+')');
                    </script>
                </article>
                <?php endwhile; else:;endif;  ?>
        </div>
  </section>

<?php get_footer(); ?>