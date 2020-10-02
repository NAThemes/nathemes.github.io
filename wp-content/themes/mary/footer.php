<footer class="theme_footer <?php if(is_page_template('template-about.php')){ echo 'footer_for_about'; } ?>">
    <div class="footer wrapper">
        <h3 class="footer_title">Обратная связь</h3>
                <!-- Form -->
                <div class="form float-right font_one">
                    <form method="post" action="<?php the_permalink();?>" class="clearfix">
                        <div class="form_top_line">
                            <input name="contact[name]" type="text" placeholder="Name" value="<?php echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''?>" required="required" id="contact-form-name" />
                            <input name="contact[email]" type="email" placeholder="E-mail" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" id="contact-form-email" />
                        </div>
                        <textarea name="contact[message]"  placeholder="Message..." id="contact-form-message" required="required"><?php echo isset($_POST['contact']['message']) ? $_POST['contact']['message'] : ''?></textarea>
                        <input type="submit" class="submit" value="<?php esc_html_e('Order', 'gardener')?>"/>
                        <input type="hidden" class="category_hidden_field" name="contact[category]" value="<?php esc_html_e('Not Selected', 'gardener')?>" />
                        <?php wp_nonce_field() ?>
                    </form>
                </div>
            <div class="sotial_links font_two">
                <?php get_template_part('partials/social_links' ); ?>
            </div>
    </div>
</footer>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<?php wp_footer(); ?>
</body>
</html>