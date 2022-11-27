<?php get_header(); ?>
<div class="content">
        <section>
            <div class="main-banner main-banner_service-3">
                <?php get_template_part('parts/modal-button');?>
            </div>
        </section>
        <div class="attendances">
            <div class="container">
                <div class="attendances__header text-center">
                    <h1>Soins radio <strong>fréquence</strong></h1>
                </div>
                <div class="attendances__list attendances__list_service-3">
                    <div class="attendances__item">
                        <img src="<?php echo esc_url( get_theme_file_uri('/images/service-3/service-1.jpg') ); ?>" alt="" />
                        <div class="attendances__title">
                            <h2>Soins radio <strong>fréquence</strong></h2>
                        </div>
                    </div>
                    <div class="attendances__item">
                        <img src="<?php echo esc_url( get_theme_file_uri('/images/service-3/service-2.jpg') ); ?>" alt="" />
                        <div class="attendances__title">
                            <h2>Soins radio <strong>fréquence</strong></h2>
                        </div>
                    </div>
                    <div class="attendances__item">
                        <img src="<?php echo esc_url( get_theme_file_uri('/images/service-3/service-3.jpg') ); ?>" alt="" />
                        <div class="attendances__title">
                            <h2>Soins radio <strong>fréquence</strong></h2>
                        </div>
                    </div>
                    <div class="attendances__item">
                        <img src="<?php echo esc_url( get_theme_file_uri('/images/service-3/service-4.jpg') ); ?>" alt="" />
                        <div class="attendances__title">
                            <h2>Soins radio <strong>fréquence</strong></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php the_content(); ?>
    </div>
<?php get_footer(); ?>