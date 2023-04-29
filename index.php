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
        <img src="img/repair-tool.png" alt="Repair Icon">
        <h3>Repairs</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et lacus euismod, luctus ipsum vel, imperdiet ante.</p>
      </div>
      <div class="service-block">
        <img src="img/repair-tool.png" alt="Servicing Icon">
        <h3>Servicing</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et lacus euismod, luctus ipsum vel, imperdiet ante.</p>
      </div>
      <div class="service-block">
        <img src="img/car.png" alt="Restoration Icon">
        <h3>Restorations</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et lacus euismod, luctus ipsum vel, imperdiet ante.</p>
      </div>
      <div class="service-block">
        <img src="img/car.png" alt="Spare Parts Icon">
        <h3>Spare Parts</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et lacus euismod, luctus ipsum vel, imperdiet ante.</p>
      </div>
    </div>
  </section>
  <section id="our-work">
    <!-- Add content for Our Work section here -->
  </section>
  <section id="about-us">
      <h2>About Us22</h2>
    <div class="about-us-section">
      <img src="img/1-1.jpg" alt="About us image" class="about-us-image">
      <div class="about-us-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tincidunt auctor mi vitae tempor. Vivamus in quam tristique, tempor mi eu, vulputate eros. Sed commodo orci sed blandit pharetra. Fusce interdum massa in commodo commodo. In sed tellus libero. Etiam malesuada ante nec magna semper, vel blandit nibh aliquam. Duis tincidunt bibendum nisi at luctus.</p>
      </div>
    </div>
  </section>

    <section id="contact-us">
      <div class="container">
        <h2>Contact Us</h2>
        <div class="row">
          <div class="col-md-6">
            <div class="contact-form">
              <form action="#" method="post">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your name.." required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your email.." required>

                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Write something.." style="height:200px" required></textarea>
                <input type="submit" value="Submit">
              </form>
            </div>
          </div>
          <div class="col-md-6">
            <div class="contact-info">
              <p>123 Main St.</p>
              <p>Anytown, USA</p>
              <p>(123) 456-7890</p>
              <p>info@iroldunder.com</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
