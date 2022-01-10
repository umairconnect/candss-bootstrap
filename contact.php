<?php include 'header.php'; ?>


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="padding-top: 180px">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact C&SS</h2>
          <p>Thank you for your interest in Compliance and Settlement Services.<br>
          Please provide your information below so that a team member can get back to you promptly.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Mailing Address</h3>
                  <p>Compliance and Settlement Services, Inc.</p>
                  <p>2222 Michelson Dr. Suite 5005<br>
Irvine, CA 92612</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@candss.org</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>949-456-8766"</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/sendemail.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>
                <div class="col form-group">
                  <input type="text" class="form-control" name="email" placeholder="Email" required>
                </div>
              </div>

              <div class="row">
                <div class="col form-group">
                  <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                </div>
                <div class="col form-group">
                  <input type="text" class="form-control" name="companyname" placeholder="Company Name" required>
                </div>
              </div>

        
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="How can we assist?" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <?php include 'footer.php'; ?>
