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

      <div class="row4">
        <ul>
          <li>Doctor</li>
            <li>Nurse</li>
            <li>Engineer</li>
            <li>Chartered Accountant</li>
        </ul>
        <ul>
          <li>Driver</li>
          <li>Cook</li>
          <li>General Labour</li>
          <li>A-Z</li>
        </ul>
      </div>
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


<!-- section mission -->
<section id="mission-new">
  <div class="mission-new-container">

    <div class="mission-new-left">
      <h4>OUR MISSION IS SIMPLE: TO HELP EMPLOYERS ACHIEVE ORGANISATIONAL SUCCESS THROUGH PEOPLE</h4><br>
      <p>To accomplish this, we rely on five core principles that guide our business strategy, behavior and relationships:There’s nothing like a mission to excite and unite people in a common goal. At Hudson, our company mission is simple: we want to be the world’s best at helping employers achieve organisational success through people. At each step of the relationship with our clients and candidates, we deliver value, advice and expert point of view.</p>
    </div>
    <div class="mission-new-right">
      <ul>
        <li><strong>Integrity:</strong>
          We embrace and uphold the highest standards of personal and professional ethics, honesty and trust.</li><br>
          <li><strong>Respect:</strong>
            We treat everyone with uncompromising respect, civility and fairness.</li><br>
          <li><strong>Collaboration:</strong>
            We work as a team and share knowledge for continuous improvement, learning and innovation.</li><br>
          <li><strong>
            Empowerment:</strong>
            We are empowered to deliver operational excellence through innovation and leadership at all levels.
          </li></br>
          <li><strong>
            Responsibility:</strong>
            We are responsible to fulfill our commitments to colleagues and clients with a clear understanding of the urgency and accountability inherent in those commitments.
          </li>
      </ul>
    </div>
  </div>

</section>

<!-- post a job -->
<section id="postjob">

  <div class="post-job">
    <p>Are you an employer?</p>
    <h3>Post a Job</h3>

    <div class="row3">
      <div class="postjob-text">
			<h4 style="color:black; text-align:left;">Finding the right person for your job has never been easier!</h4>
			<p>We find you competent workers with expertise in many different fields including doctors, nurses, drivers, engineers, general labour and many more. We speak with our employees to understand their time accomodation that will best fit your project whether that is a full-time, part-time or a temporary position. </p>
			<p>Just fill up the form provided below and we will get back to you as soon as possible.</p>
      </div>
      <div class="postjob-image">
        <img id="pic1" src="<?php echo get_template_directory_uri(); ?>/images/adult-employee.jpg" alt="">
      </div>
    </div>

    <button type="button" name="button" class="button1">Click Here to Post a Job</button>
    <div class="apple-ball">
        <?php echo do_shortcode('[contact-form-7 id="5" title="form-employer"]') ?>
    </div>
  </div>

</section>


<!-- register -->
<section id="register" >
  <div class="row">

  </div>
  <div class="register-job">
    <p>Looking for a job?</p>
    <h3>Register</h3>

    <div class="row3">

      <div class="postjob-image">
        <img id="pic1" src="<?php echo get_template_directory_uri(); ?>/images/adult-employee-corporate.jpg" alt="">
      </div>
      <div class="postjob-text">
			<h4 style="color:black; text-align:left;">Are you a trained professional looking to be hired?</h4>
			<p>There are plenty of professionals out there with expertise and experience that have yet to find a job and if you are one of them, JobLink is the solution for you! We create a database of potential employees such as yourself and wait for an employer from our vast connection to match you up for the perfect job.</p>
			<p>If you are either a doctor, nurse, driver or have qualification in any field of work and now confident enough to enter the workforce, be sure to sign up using the following form. It will help us categorize your expertise and experience to find the most suitable job for you.</p>
      </div>
    </div>

    <button type="button" name="button" class="button2">Click Here to Register as An Employee</button>
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
