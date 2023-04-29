<?php get_header(); ?>
<main>
  <section id="home" class="hero-banner">
    <div class="hero-banner-content">
      <h2>Classic Volvo Specialist</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et lacus euismod, luctus ipsum vel, imperdiet ante.</p>
    </div>
  </section>
  <section id="services">
    <h2>Services</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et lacus euismod, luctus ipsum vel, imperdiet ante.</p>
    <div class="service-blocks">
      <div class="service-block">
        <img src="<?php echo get_template_directory_uri().'/assets/images/repair-tool.png'; ?>"alt="Repair Icon"/>
        <h3>Repairs</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et lacus euismod, luctus ipsum vel, imperdiet ante.</p>
      </div>
      <div class="service-block">
        <img src="<?php echo get_template_directory_uri().'/assets/images/repair-tool.png'; ?>"alt="Servicing Icon"/>
        <h3>Servicing</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et lacus euismod, luctus ipsum vel, imperdiet ante.</p>
      </div>
      <div class="service-block">
        <img src="<?php echo get_template_directory_uri().'/assets/images/car.png'; ?>" alt="Restoration Icon"/>
        <h3>Restorations</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et lacus euismod, luctus ipsum vel, imperdiet ante.</p>
      </div>
      <div class="service-block">
        <img src="<?php echo get_template_directory_uri().'/assets/images/car.png'; ?>" alt="Spare Parts Icon"/>
        <h3>Spare Parts</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et lacus euismod, luctus ipsum vel, imperdiet ante.</p>
      </div>
    </div>
  </section>
  <section id="our-work">
    <!-- Add content for Our Work section here -->
    <div class="container">
    <h2>Our Work</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et lacus euismod, luctus ipsum vel, imperdiet ante.</p>
    <div class="image-grid">
      <div class="image-grid-item">
        <img src="<?php echo get_template_directory_uri().'/assets/images/1.jpg'; ?>" alt="Work 1"/>
      </div>
      <div class="image-grid-item">
        <img src="<?php echo get_template_directory_uri().'/assets/images/2.jpg'; ?>" alt="Work 2"/>
      </div>
      <div class="image-grid-item">
        <img src="<?php echo get_template_directory_uri().'/assets/images/3.jpg'; ?>" alt="Work 3"/>
      </div>
      <div class="image-grid-item">
        <img src="<?php echo get_template_directory_uri().'/assets/images/4.jpg'; ?>" alt="Work 4"/>
      </div>
      <div class="image-grid-item">
        <img src="<?php echo get_template_directory_uri().'/assets/images/5.jpg'; ?>" alt="Work 5"/>
      </div>
      <div class="image-grid-item">
        <img src="<?php echo get_template_directory_uri().'/assets/images/6.jpg'; ?>" alt="Work 6"/>
      </div>
    </div>
  </div>
  </section>
  <section id="about-us">
      <h2>About Us</h2>
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus maximus massa eu velit elementum, vel malesuada nulla sagittis. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut vel ipsum eget nisi mollis ultricies. Proin dictum aliquet dui, a venenatis elit euismod ut. Suspendisse potenti. Integer sit amet enim vel eros tincidunt fermentum.</p>
            </div>
          </div>
        </div>
  </section>

    <section id="contact-us">
      <h2>Contact Us</h2>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="contact-form">
              <form action="#" method="post">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your name.." required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your email.." required>

                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Write something.." required></textarea>
                <input type="submit" value="Submit">
              </form>
            </div>
          </div>
          </div>
    </section>
  </main>
  <?php get_footer(); ?>
