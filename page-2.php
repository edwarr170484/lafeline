<?php get_header(); ?>
    <div class="content">
        <section>
            <div class="main-banner main-banner_service-1">
                <?php get_template_part('parts/modal-button');?>
            </div>
        </section>
        <div class="attendances">
            <div class="container">
                <div class="attendances__header text-center">
                    <h1>Beauté du <strong>visage</strong></h1>
                </div>
                <div class="attendances__list attendances__list_service-1">
                    <div class="attendances__item">
                        <img src="<?php echo esc_url( get_theme_file_uri('/images/service-1/service-1.jpg') ); ?>" alt="" />
                        <div class="attendances__title">
                            <h2>Beauté du <br /><strong>visage</strong></h2>
                        </div>
                    </div>
                    <div class="attendances__item">
                        <img src="<?php echo esc_url( get_theme_file_uri('/images/service-1/service-2.jpg') ); ?>" alt="" />
                        <div class="attendances__title">
                            <h2>Beauté du <br /><strong>visage</strong></h2>
                        </div>
                    </div>
                    <div class="attendances__item">
                        <img src="<?php echo esc_url( get_theme_file_uri('/images/service-1/service-3.jpg') ); ?>" alt="" />
                        <div class="attendances__title">
                            <h2>Beauté du <br /><strong>visage</strong></h2>
                        </div>
                    </div>
                    <div class="attendances__item">
                        <img src="<?php echo esc_url( get_theme_file_uri('/images/service-1/service-4.jpg') ); ?>" alt="" />
                        <div class="attendances__title">
                            <h2>Beauté du <br /><strong>visage</strong></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="about-section">
            <div class="container">
                <div class="about about_service">
                    <p>Ut odio nulla dolore tation iriure delenit molestie dolor nisl quis minim commodo tincidunt
                        blandit consequat. ea adipiscing vel wisi et vel aliquam dolore lobortis facilisis iusto ipsum
                        accumsan illum qui at nibh dolor dignissim consectetuer te nonummy praesent eros enim euismod
                        Lorem ut vero hendrerit elit, eu exerci nostrud erat sit ut Duis autem volutpat. feugait sed
                        vulputate duis aliquip amet, luptatum velit ex laoreet augue feugiat dolore et zzril magna in
                        consequat, facilisi. in ullamcorper nulla esse eum veniam, suscipit diam ad</p>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut</p>
                </div>
            </div>
        </div>
        <?php the_content(); ?>
    </div>
<?php get_footer(); ?>