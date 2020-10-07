<?php get_header(); ?>
<main>
<section id="contact" class="contact">
    <div class="top_caption">
        <h2>Contact</h2>
    </div>
    <div class="text">    
    <p>        
    TwitterのDMでもお問い合わせお待ちしております。<br />
    ご質問等も受け付けておりますので、お気軽にご連絡ください。
    </p>
    </div>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</section>
<?php get_footer(); ?>