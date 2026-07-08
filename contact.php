  <?php include('partials/header.php'); ?>

<style>
  .page-hero {
    position: relative;
    background: url('images/club.jpg') center center / cover no-repeat;
    padding: 160px 0 120px;
  }

  .page-hero .hero-overlay {
    background: rgba(7, 150, 17, .55);
  }

  .page-hero h1 {
    color: #fff;
    font-size: clamp(32px, 5vw, 56px);
    font-weight: 500;
  }

  .page-hero .breadcrumb-item a {
    color: rgba(255, 255, 255, .8);
  }

  .page-hero .breadcrumb-item.active {
    color: #fff;
  }

  .page-hero .breadcrumb-item+.breadcrumb-item::before {
    color: rgba(255, 255, 255, .6);
  }

  .info-card {
    background: #fff;
    border-radius: var(--border-radius-card);
    box-shadow: var(--shadow-card);
    padding: 36px 28px;
    height: 100%;
    transition: var(--transition);
  }

  .info-card:hover {
    transform: translateY(-6px);
  }

  .info-icon {
    width: 64px;
    height: 64px;
    border-radius: 50%;
    background: var(--color-light-bg);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    color: var(--color-primary);
    margin-bottom: 20px;
    transition: var(--transition);
  }

  .info-card:hover .info-icon {
    background: var(--color-primary);
    color: #fff;
  }

  .info-card h4 {
    font-size: 20px;
    font-weight: 600;
    color: var(--color-navy);
    margin-bottom: 10px;
  }

  .info-card p,
  .info-card a {
    color: var(--color-text);
    font-size: 15px;
    margin-bottom: 0;
  }

  .info-card a:hover {
    color: var(--color-primary);
  }

  .contact-form {
    background: #fff;
    border-radius: var(--border-radius-card);
    box-shadow: var(--shadow-card);
    padding: 44px 40px;
  }

  .form-control,
  .form-select {
    border: 2px solid #e8eaf0;
    border-radius: 8px;
    padding: 12px 16px;
    font-size: 15px;
    transition: var(--transition);
  }

  .form-control:focus,
  .form-select:focus {
    border-color: var(--color-primary);
    box-shadow: 0 0 0 0.2rem rgba(7, 150, 17, .15);
  }

  .form-label {
    font-weight: 500;
    color: var(--color-dark);
    font-size: 14px;
    margin-bottom: 6px;
  }

  .btn-submit {
    background: var(--color-primary);
    color: #fff;
    padding: 14px 40px;
    border-radius: 4px;
    font-size: 16px;
    border: none;
    width: 100%;
    transition: var(--transition);
    font-family: var(--font-family);
  }

  .btn-submit:hover {
    background: var(--color-dark-navy);
    transform: translateY(-2px);
  }
</style>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-content reveal">
      <h1>Contact Us</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Contact</li>
        </ol>
      </nav>
    </div>
  </div>
</section>

<!-- INFO CARDS -->
<section class="section-py">
  <div class="container">
    <div class="row g-4 mb-5">
      <div class="col-md-4 reveal reveal-delay-1">
        <div class="info-card text-center">
          <div class="info-icon mx-auto"><i class="fas fa-map-marker-alt"></i></div>
          <h4>Mailing Address</h4>
          <p>3689 Forest Hill Rd. Gwynn Oak,<br>Baltimore MD 21207</p>
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-2">
        <div class="info-card text-center">
          <div class="info-icon mx-auto"><i class="fas fa-phone-alt"></i></div>
          <h4>Call Us</h4>
          <a href="tel:+1-301-615-1239">+1-301-615-1239</a>
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-3">
        <div class="info-card text-center">
          <div class="info-icon mx-auto"><i class="fas fa-envelope"></i></div>
          <h4>Email Us</h4>
          <a href="mailto:info@bhookey.com">info@bhookey.com</a>
        </div>
      </div>
    </div>

    <!-- Form + Map -->
    <div class="row g-5 align-items-start">
      <!-- Form -->
      <div class="col-lg-7 reveal">
        <div class="contact-form">
          <h2 class="section-title mb-4">Send Us a Message</h2>
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">First Name *</label>
                <input type="text" class="form-control" placeholder="John" required />
              </div>
              <div class="col-md-6">
                <label class="form-label">Last Name *</label>
                <input type="text" class="form-control" placeholder="Smith" required />
              </div>
              <div class="col-md-6">
                <label class="form-label">Email Address *</label>
                <input type="email" class="form-control" placeholder="john@example.com" required />
              </div>
              <div class="col-md-6">
                <label class="form-label">Phone Number</label>
                <input type="tel" class="form-control" placeholder="+1 (000) 000-0000" />
              </div>
              <div class="col-12">
                <label class="form-label">Subject *</label>
                <input type="text" class="form-control" placeholder="How can we help?" required />
              </div>
              <div class="col-12">
                <label class="form-label">Message *</label>
                <textarea class="form-control" rows="5" placeholder="Write your message here..." required></textarea>
              </div>
              <div class="col-12 mt-2">
                <button type="submit" class="btn-submit">
                  <i class="fas fa-paper-plane me-2"></i>Send Message
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <!-- Map placeholder + extra info -->
      <div class="col-lg-5 reveal reveal-delay-1">
        <div class="info-card mb-4">
          <h4 class="mb-3">Business Hours</h4>
          <ul class="list-unstyled mb-0">
            <li class="d-flex justify-content-between py-2 border-bottom"><span>Monday – Friday</span><strong>9:00 AM –
                6:00 PM</strong></li>
            <li class="d-flex justify-content-between py-2 border-bottom"><span>Saturday</span><strong>10:00 AM – 4:00
                PM</strong></li>
            <li class="d-flex justify-content-between py-2"><span>Sunday</span><strong>Closed</strong></li>
          </ul>
        </div>
        <div class="info-card">
          <h4 class="mb-3">Follow Us</h4>
          <p class="mb-3">Stay connected and get the latest news on our new releases and events.</p>
          <div class="d-flex gap-3" style="font-size:28px;">
            <a href="https://x.com/" target="_blank" style="color:var(--color-primary);transition:var(--transition);"
              aria-label="Twitter"><i class="fab fa-twitter-square"></i></a>
            <a href="https://facebook.com/" target="_blank"
              style="color:var(--color-primary);transition:var(--transition);" aria-label="Facebook"><i
                class="fab fa-facebook-square"></i></a>
            <a href="https://instagram.com/" target="_blank"
              style="color:var(--color-primary);transition:var(--transition);" aria-label="Instagram"><i
                class="fab fa-instagram-square"></i></a>
            <a href="https://linkedin.com/" target="_blank"
              style="color:var(--color-primary);transition:var(--transition);" aria-label="LinkedIn"><i
                class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<?php include('partials/footer.php'); ?>