<?php
   /**
    * Template name: home page
    *
    *
    * @package kb
    */
   get_header();
?>


<!-- ======= Hero Section ======= -->
<section id="hero" class="banner section-space" 
  style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
  <div class="container">
    <div class="content-banner">
      <h1 class="title"><?php the_field('title'); ?></h1>
      <p class="subtitle"><?php the_field('subtitle'); ?></p>
    </div>
  </div>
</section>
<!-- End Hero -->
  

<!-- ======= About Section ======= -->
<?php if( have_rows('about_boxes') ): ?>
<section id="about" class="about section-space">
  <div class="container">
    <div class="row">
      <div class="col-xl-12 col-lg-12">
        <div class="space-bottom">
          <h2><?php the_field('about_title'); ?></h2>
          <p><?php the_field('about_description'); ?></p>
        </div>
      </div>
      
      <?php while( have_rows('about_boxes') ): the_row(); 
        $icon = get_sub_field('icon');
        $content_text = get_sub_field('content_box_text');
        $link = get_sub_field('link');
      ?>
      
      <div class="col-xl-3 col-lg-3">
        <a href="<?php echo esc_url($link); ?>" target="_blank">
          <div class="dark-card">
            <div class="circle"></div>
            <i class="fa <?php echo esc_attr($icon); ?>" aria-hidden="true"></i>
            <p class="content-box"><?php echo esc_html($content_text); ?></p>
          </div>
        </a>
      </div>
      
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; ?>
<!-- End About Section -->

	
<!-- ======= Accreditation Section ======= -->
<?php if( get_field('acctitle') || get_field('accdescription') ): ?>
<section id="accreditation" class="Accreditation section-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="text-design">
          <h2><?php the_field('acctitle'); ?></h2>
          <p><?php the_field('accdescription'); ?></p>
          
          <?php if( get_field('logo_image') ): ?>
            <img class="image-logo" src="<?php the_field('logo_image'); ?>" alt="Accreditation Logo" />
          <?php endif; ?>
          
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<!-- End Accreditation Section -->

<!-- ======= Video Section ======= -->
<?php if( get_field('video_link') ): ?>
<section id="accreditation" class="Accreditation section-bg-dark section-space">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="text-design color-white">
          <?php if( get_field('vdotitle') ): ?>
            <h2><?php the_field('vdotitle'); ?></h2>
          <?php endif; ?>
       
          <div class="wrap">
            <div class="box-video">
              <?php if( get_field('video_thumbnail') ): ?>
                <div class="bg-video" style="background-image: url('<?php the_field('video_thumbnail'); ?>');">
              <?php else: ?>
                <div class="bg-video" style="background-image: url('https://unsplash.imgix.net/photo-1425036458755-dc303a604201?fit=crop&fm=jpg&q=75&w=1000');">
              <?php endif; ?>
                <div class="bt-play"></div>
              </div>
              
              <div class="video-container">
                <iframe width="590" height="332" src="https://www.youtube.com/embed/<?php the_field('video_link'); ?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<!-- End Video Section -->
	
<!-- ======= Video Slider Section ======= -->
<?php if( have_rows('videos') ): ?>
<section id="slider-sec" class="slider-sec section-space">
  <div class="container"> 
    <div class="slider">
      <div class="slides">
        
        <?php 
        $slideIndex = 1; 
        while( have_rows('videos') ): the_row(); 
          $video_url = get_sub_field('video_url');
          $video_id = 'video' . $slideIndex; // Unique ID for each video
          $thumbnail = get_sub_field('thumbnail_image');
        ?>
        
        <!-- Dynamic Slide with Video -->
        <div class="slide<?php echo ($slideIndex === 1) ? ' active' : ''; ?>">
          <video id="<?php echo esc_attr($video_id); ?>" preload="metadata">
            <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="overlay" onclick="togglePlay('<?php echo esc_attr($video_id); ?>', this)">
            <button class="play-btn">Play</button>
          </div>
        </div>
        
        <?php $slideIndex++; endwhile; ?>
      </div>
      
      <!-- Navigation Buttons -->
      <button class="prev" onclick="changeSlide(-1)">❮</button>
      <button class="next" onclick="changeSlide(1)">❯</button>
    </div>

    <!-- Thumbnails -->
    <div class="thumbnails">
      <?php 
      $thumbIndex = 0;
      while( have_rows('videos') ): the_row(); 
        $thumbnail = get_sub_field('thumbnail_image');
      ?>
      
      <?php if( $thumbnail ): ?>
        <img src="<?php echo esc_url($thumbnail['url']); ?>" alt="Thumbnail <?php echo $thumbIndex + 1; ?>" onclick="showSlide(<?php echo $thumbIndex; ?>)">
      <?php endif; ?>
      
      <?php $thumbIndex++; endwhile; ?>
    </div>

  </div>
</section>
<?php endif; ?>
<!-- End Video Slider Section -->


<!-- ======= Program Section ======= -->
<?php if( have_rows('program_items') ): ?>
<section id="program" class="program section-bg section-space">
  <div class="container">
    <div class="row center-row">
      
      <!-- Dynamic Title and Description -->
      <div class="col-xl-12 col-lg-12 space-bottom text-center">
        <h2><?php the_field('protitle'); ?></h2>
        <p><?php the_field('prodescription'); ?></p>
      </div>
      
      <?php while( have_rows('program_items') ): the_row(); 
        $link = get_sub_field('link');
        $icon = get_sub_field('icon');
        $content_text = get_sub_field('content_box_text');
      ?>
      
      <!-- Dynamic Program Item -->
      <div class="col-xl-6 col-lg-6">
        <a href="<?php echo esc_url($link); ?>" target="_blank">
          <div class="dark-card">
            <div class="circle"></div>
            <i class="fa <?php echo esc_attr($icon); ?>" aria-hidden="true"></i>
            <p class="content-box"><?php echo esc_html($content_text); ?></p>
          </div> 
        </a> 
      </div>
      
      <?php endwhile; ?>
      
    </div>
  </div>
</section>
<?php endif; ?>
<!-- End Program Section -->


<!-- ======= FAQs Section ======= -->
<?php if( have_rows('faqs') ): ?>
<section id="faqs" class="faqs section-space">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        
        <!-- Dynamic Section Title -->
        <?php if( get_field('section_title') ): ?>
          <div class="space-bottom">
            <h2><?php the_field('section_title'); ?></h2>
          </div>
        <?php endif; ?>
        
        <div class="faqs-design">
          <?php while( have_rows('faqs') ): the_row(); 
            $question = get_sub_field('question');
            $answer = get_sub_field('answer');
          ?>
          
          <!-- Dynamic FAQ Item -->
          <div class="faq-tab">
            <div class="question">
              <?php echo esc_html($question); ?>
            </div>
            <div class="answercont">
              <div class="answer">
                <?php echo wp_kses_post($answer); ?>
                
              </div>
            </div>
          </div>
          
          <?php endwhile; ?>
        </div>
        
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<!-- End FAQs Section -->






<?php get_footer(); ?>

