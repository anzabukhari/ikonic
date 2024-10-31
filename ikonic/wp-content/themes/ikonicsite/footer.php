<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ikonicsite
 */

?>

<footer id="colophon" class="site-footer1">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4">
		<div class="site-info">
			<div class="site-name">
				<?php if ( has_custom_logo() ) : ?>
					<div class="site-logo"><?php the_custom_logo(); ?></div>
				<?php else : ?>
					<?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
						<?php if ( is_front_page() && ! is_paged() ) : ?>
							<?php bloginfo( 'name' ); ?>
						<?php else : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
			</div><!-- .site-name -->
</div>
<p>lorem ipsum lokeis darende ko maodsu ipsum lokeis darende ko maodsu</p>
</div>
<div class="col-lg-5 col-md-5">
		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>" class="footer-navigation1">
				<ul class="footer-navigation-wrapper1">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span>',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
				</ul><!-- .footer-navigation-wrapper -->
			</nav><!-- .footer-navigation -->
		<?php endif; ?>
</div>

<div class="col-lg-3 col-md-3">

<div class="social-menu">
    <ul>
        <?php if( have_rows('social_media_links', 'option') ): ?>
            <?php while( have_rows('social_media_links', 'option') ): the_row(); ?>
                <?php
                    $platform_name = get_sub_field('platform_name');
                    $url = get_sub_field('url');
                    $icon = get_sub_field('icon');
                ?>
                <?php if( $url ): ?>
                    <li>
                        <a href="<?php echo esc_url($url); ?>" target="_blank">
                            <?php if( $icon ): ?>
                                <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($platform_name); ?>" style="width: 20px; height: 20px;">
                            <?php else: ?>
                                <i class="fa fa-<?php echo strtolower($platform_name); ?>"></i> <!-- Using FontAwesome icon if no image -->
                            <?php endif; ?>
                        </a>
                    </li>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </ul>
</div>


<div class="contact-us">
<p>2200 Ross Avenue Suits 5400 dallas tx75201</p>
<p>(469) 621 6700</p>
</div>
</div>
		

</div>
		</div><!-- .site-info -->
		<div class="copyright">
		<div class="container">
		<div class="row">
		<div class="col-lg-6 col-md-6">
		<p>copyright all right resverd.</p>
		</div>
		<div class="col-lg-6 col-md-6">
		
		</div>
		</div>
		</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

<script>

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

});
</script>


<script>
        let currentSlide = 0;

        function showSlide(index) {
            const slides = document.querySelectorAll('.slide');
            const thumbnails = document.querySelectorAll('.thumbnails img');

            if (index >= slides.length) {
                currentSlide = 0;
            } else if (index < 0) {
                currentSlide = slides.length - 1;
            } else {
                currentSlide = index;
            }

            const slidesContainer = document.querySelector('.slides');
            slidesContainer.style.transform = 'translateX(' + (-currentSlide * 100) + '%)';
            thumbnails.forEach((thumbnail, idx) => {
                thumbnail.classList.toggle('active', idx === currentSlide);
            });
        }

        function changeSlide(n) {
            showSlide(currentSlide + n);
        }

        function togglePlay(videoId, overlayElement) {
            const video = document.getElementById(videoId);
            if (video.paused) {
                video.play();
                overlayElement.classList.add('hidden'); // Hide overlay when playing
            } else {
                video.pause();
                overlayElement.classList.remove('hidden'); // Show overlay when paused
            }
        }
        showSlide(currentSlide);
    </script>

</body>
</html>
