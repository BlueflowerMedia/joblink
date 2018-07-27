<?php get_header(); ?>

<!-- BANNER  -->
<div class="head1 bottom-right">
  <div class="layer">
    <div class="container-banner">
        <h1>Find the Right Person for Any Work</h1>
    </div>
  </div>
</div>

<!-- MISSION -->
<section id="mission" class="our-mission">
  <div class="container-mission">
    <div class="text-mission">
    <h4>Our Mission</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Exvcepteur sint occaecat
        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum</p>
    </div>
  </div>
</section>


<!-- HOW IT WORKS -->

<section id="works" class="how-it-works">
  <div class="how-container">
    <div class="how-left">
      <h4>How it works</h4>
      <div class="bullet-text-container">
        <div class="circle">
          <p>1</p>
        </div>
        <div class="rectangle">
          <p>Post a job to tell us about your project.</p>
        </div>
      </div>
      <div class="bullet-text-container">
        <div class="circle">
          <p>2</p>
        </div>
        <div class="rectangle">
          <p>We'll quickly match you with the right freelancers.</p>
        </div>
      </div>
      <div class="bullet-text-container">
        <div class="circle">
          <p>3</p>
        </div>
        <div class="rectangle">
          <p>We Provide you with the payment information for the
            employer so both parties are happy.</p>
        </div>
      </div>

    </div>
    <div class="how-right">
      <div class="image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/1post.png" alt="" >

      </div>
      <div class="image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/2find.png" alt="" >

      </div>
      <div class="image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/3pay.png" alt="" >

      </div>


    </div>

  </div>
</section>


<!-- post a job -->
<section id="postjob">
  <div class="post-job">
    <p>Are you an employer?</p>
    <h3>Post a Job</h3>
    <?php echo do_shortcode('[contact-form-7 id="5" title="form-employer"]') ?>

  </div>

</section>


<!-- register -->
<section id="register" >
  <div class="register-job">
    <p>Looking for a job?</p>
    <h3>Register</h3>
    <?php echo do_shortcode('[contact-form-7 id="11" title="form-employee"]') ?>
  </div>

</section>

<?php get_footer(); ?>
