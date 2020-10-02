<?php
/*
  * Template name: Homepage Template
  * */

get_header();

?>
<section class="site_container">
    <section class="about_box font_two">
        <div class="effect_photo">

        </div>
        <div class="about_on_home">
            <?php if(ale_get_meta('box_title')){ ?><h3 class="title_about"><?php echo esc_attr(ale_get_meta('box_title')); ?></h3><?php } ?>
            
            <?php if(ale_get_meta('box_description')){ ?><p class="description_about" ><?php echo esc_attr(ale_get_meta('box_description')); ?></p><?php } ?>
            
            <a href="http://localhost/mary/about/" class="about_link">Читать еще <i class="fa fa-caret-right" aria-hidden="true"></i></a>
        </div>
        <?php if(ale_get_meta('box_image')){
            echo "<img class='photo' src=".esc_url(ale_get_meta('box_image'))." alt='".get_the_title()."' />";
        } ?>
    </section>
    <section class="achievements font_two">
        <h3 class="achievements_title_responsive">
            Мария была удостоена ряда достижений
        </h3>
        <div class="lists">
            <ul class="list1">
                <?php if(ale_get_meta('achievement1')){ ?><li class="achievement svg_style" ><?php echo esc_attr(ale_get_meta('achievement1')); ?></li><?php } ?>
                <?php if(ale_get_meta('achievement2')){ ?><li class="achievement svg_style" ><?php echo esc_attr(ale_get_meta('achievement2')); ?></li><?php } ?>
                <?php if(ale_get_meta('achievement3')){ ?><li class="achievement svg_style" ><?php echo esc_attr(ale_get_meta('achievement3')); ?></li><?php } ?>
            </ul>
            <h3 class="achievements_title">
                Мария была удостоена ряда достижений
            </h3>
            <ul class="list2">
                <?php if(ale_get_meta('achievement4')){ ?><li class="achievement svg_style" ><?php echo esc_attr(ale_get_meta('achievement4')); ?></li><?php } ?>
                <?php if(ale_get_meta('achievement5')){ ?><li class="achievement svg_style" ><?php echo esc_attr(ale_get_meta('achievement5')); ?></li><?php } ?>
                <?php if(ale_get_meta('achievement6')){ ?><li class="achievement svg_style" ><?php echo esc_attr(ale_get_meta('achievement6')); ?></li><?php } ?>  
            </ul>
        </div>
    </section>
</section>
<?php get_footer(); ?>