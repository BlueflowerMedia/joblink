<?php get_header(); ?>

<!-- BANNER  -->
<div id="banner" class="head1 bottom-right">
  <div class="container-banner">
      <h1>Find the Right Person for Any Work</h1>
  </div>
</div>

<!-- MISSION -->
<section id="mission" class="our-mission">
  <div class="container-mission">
    <div class="text-mission">
    <h4>Our Mission</h4>
      <p>Our mission is to bring a better future for people by making it easier for employers and employees to connect. We are professional career match makers!
        You can apply and register and we will connect you.
      </p>
      <!-- <ul>
        <li>Doctor</li>
          <li>Nurse</li>
          <li>Engineer</li>
          <li>Chartered Accountant</li>
          <li>Driver</li>
          <li>Cook</li>
          <li>General Labour</li>
          <li>A-Z</li>
      </ul> -->
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

<!-- how it works for tablet and mobile -->
<section id="worksm" >
  <div class="howm-container">
      <h3>How we work?</h3>
    <div class="row1">
      <div class="image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/1post.png" alt="" >
      </div>
      <div class="image-container">
        <p>Post a job to tell us about your project.</p>
      </div>
    </div>
    <div class="row1">
      <div class="image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/2find.png" alt="" >
      </div>
      <div class="image-container">
        <p>We'll quickly match you with the right freelancers.</p>
      </div>
    </div>
    <div class="row1">
      <div class="image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/3pay.png" alt="" >
      </div>
      <div class="image-container">
        <p>We Provide you with the payment information for the
          employer so both parties are happy.</p>
      </div>
    </div>

  </div>
</section>


<!-- post a job -->
<section id="postjob">
  <div class="post-job">
    <p>Are you an employer?</p>
    <h3>Post a Job</h3>

    <button type="button" name="button" class="button1">Click Here!</button>
    <div class="apple-ball">
        <?php echo do_shortcode('[contact-form-7 id="5" title="form-employer"]') ?>
    </div>
  </div>

</section>


<!-- register -->
<section id="register" >
  <div class="register-job">
    <p>Looking for a job?</p>
    <h3>Register</h3>

    <button type="button" name="button" class="button2">Click Here!</button>
    <div class="ball-cat">
      <?php echo do_shortcode('[contact-form-7 id="11" title="form-employee"]') ?>
    </div>
  </div>

</section>


<!-- testimonials -->
<section id="testimonials">
  <div class="testimonials-container">
    <div class="row2">
      <h3>Testimonials</h3>
    </div>

    <div class="row2">
      <div class="test">
        <img id="pic1" src="<?php echo get_template_directory_uri(); ?>/images/testimonials/ryan.jpeg" alt="">
        <p class="text">I used the Job Link Corporate website to find myself a job in IT Support. It was a very smooth experience, they got in touch with me shortly after. I was interviewed by my company and got the job within 1 week!</p>
        <p class="name">Ryan</p>
        <p class="company">Toronto</p>
      </div>

      <div class="test">
        <img id="pic1" src="<?php echo get_template_directory_uri(); ?>/images/testimonials/khokhan.jpg" alt="">
        <p class="text">I was looking for a waitress for my restaurant and we needed one very urgently. I called Job Link Corporate and I found someone very qualified within 3 days!</p>
        <p class="name">Khokhan</p>
        <p class="company">Khokhan Corporate</p>
      </div>

      <div class="test">
        <img id="pic1" src="<?php echo get_template_directory_uri(); ?>/images/testimonials/raj.jpg" alt="">
        <p class="text">I needed a second job to pay my bills. I used this website as my last source of hope, hoping to find a job right away. I was very delighted when I found a stable second job in demolition with Job link Corporate.</p>
        <p class="name">Raj</p>
        <p class="company">India</p>
      </div>
    </div>
  </div>

</section>

<?php get_footer(); ?>
