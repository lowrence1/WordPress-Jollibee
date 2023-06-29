<?php get_header();?>

<section class="page__hero">
<h1>About Jollibee</h1>

</section>

<section class="full__width">
    <div class="container">
        <div class="full__width__wrapper">
            <?php the_content();?>
        </div>
    </div>
</section>
<!-- <section class="two__cols">
    <div class="container">
        <div class="two__cols__grid">
            <div class="col__1">
                <img src="https://queen.jollibee.com.ph/2022/05/8Z1R62ze-About-Jollibee-BGC-Store-min.jpg" alt="">
            </div>
            <div class="col__2">
                <h3>Our Business</h3>
                <p>Jollibee Foods Corporation’s (“JFC” or the “Company”) core business is the development, operation and franchising of its quick-service restaurant brands. It offers a wide variety of affordable and delicious dishes and great tasting food prepared to satisfy customers of all ages and from all walks of life.</p>
                <p>Food quality, service, price-value relationship, store location and ambiance, and efficient operations continue to be critical elements of the Company’s success in the quick-service restaurant industry.</p>
            </div>
        </div>
    </div>
</section> -->
    <!-- <section class="two__cols row__reverse">
        <div class="container">
            <div class="two__cols__grid">
                <div class="col__1">
                    <img src="https://queen.jollibee.com.ph/2022/05/FSC-STANDARD-min-scaled-1.jpg" alt="">
                </div>
                <div class="col__2">
                    <h3>Our Food, Service, and Cleanliness (FSC) Standard</h3>
                    <p>Jollibee Foods Corporation’s (“JFC” or the “Company”) core business is the development, operation and franchising of its quick-service restaurant brands. It offers a wide variety of affordable and delicious dishes and great tasting food prepared to satisfy customers of all ages and from all walks of life.</p>
                    <p>Food quality, service, price-value relationship, store location and ambiance, and efficient operations continue to be critical elements of the Company’s success in the quick-service restaurant industry.</p>
                </div>
            </div>
        </div>
    </section> -->

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php the_content();
        endwhile;
else:
    echo "no more post";
endif;
?>
<div class="modal">
    <div class="backdrop"></div>
    <div class="modal__main">
        <div class="modal__header">
            <h2>Contact Us</h2>
            <button id="btnClose">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div class="modal__body">
            <?php echo do_shortcode('[contact-form-7 id="92" title="Contact form 1"]') ?>
        </div>

    </div>
</div>

<?php get_footer();?>