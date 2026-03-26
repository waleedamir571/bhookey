<?php include('partials/header.php'); ?>

<style>
  .page-hero {
    position: relative;
    background: url('images/about.webp') center center / cover no-repeat;
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

  .service-main-card {
    background: #fff;
    border-radius: var(--border-radius-card);
    box-shadow: var(--shadow-card);
    overflow: hidden;
    height: 100%;
    transition: var(--transition);
  }

  .service-main-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, .12);
  }

  .service-main-card .card-img-top {
    height: 240px;
    object-fit: cover;
  }

  .service-main-card .card-body {
    padding: 28px;
  }

  .service-main-card .card-icon {
    font-size: 44px;
    color: var(--color-primary);
    margin-bottom: 16px;
  }

  .service-main-card h3 {
    font-size: 22px;
    font-weight: 600;
    color: var(--color-navy);
    margin-bottom: 12px;
  }

  .service-main-card p {
    color: var(--color-text);
    margin-bottom: 0;
  }

  .process-step {
    text-align: center;
    padding: 20px;
  }

  .process-num {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: var(--color-primary);
    color: #fff;
    font-size: 24px;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 16px;
  }

  .process-step h4 {
    font-size: 18px;
    font-weight: 600;
    color: var(--color-navy);
  }

  .process-step p {
    font-size: 14px;
    color: var(--color-text);
    margin-bottom: 0;
  }
</style>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-content reveal">
      <h1>Our Services</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Services</li>
        </ol>
      </nav>
    </div>
  </div>
</section>

<!-- INTRO -->
<section class="section-py">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-7 reveal">
        <span class="badge-label">What We Offer</span>
        <h2 class="section-title mt-3">Children's Book Services</h2>
        <p class="section-subtitle mt-3">
          We provide a wide range of thoughtfully designed books and programs
          that help children learn, grow, and explore the world through stories.
        </p>
      </div>
    </div>

    <div class="row g-4">
      <div class="col-md-4 reveal reveal-delay-1">
        <div class="service-main-card">
          <img src="images/pexels-photo-12719357-2.jpeg" alt="Cultural Adventures" class="card-img-top" />
          <div class="card-body">
            <div class="card-icon"><i class="fas fa-globe-africa"></i></div>
            <h3>Cultural Adventures</h3>
            <p>Books that celebrate diverse cultures and languages, guiding children on journeys of understanding and
              empathy across the world.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-2">
        <div class="service-main-card">
          <img src="images/book_dummy.png" alt="Learning Through Play" class="card-img-top" />
          <div class="card-body">
            <div class="card-icon"><i class="fas fa-puzzle-piece"></i></div>
            <h3>Learning Through Play</h3>
            <p>Engaging narratives with built-in interactive themes that make every reading session an adventure full of
              discovery.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-3">
        <div class="service-main-card">
          <img src="images/Adventure-Books_13.png" alt="Creative Challenges" class="card-img-top" />
          <div class="card-body">
            <div class="card-icon"><i class="fas fa-brain"></i></div>
            <h3>Creative Challenges</h3>
            <p>Stories designed to provoke curiosity and critical thinking, keeping children engaged and eager to learn
              more.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FEATURES ROW -->
<section class="section-py section-light">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-7 reveal">
        <h2 class="section-title">What Makes Our Books Special</h2>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-4 reveal reveal-delay-1">
        <div class="feature-card feature-card-green shrink-hover">
          <div class="feature-icon"><i class="fas fa-user-nurse"></i></div>
          <div class="feature-title">Engaging Storylines</div>
          <p class="feature-text mt-2">Captivating tales that draw children into complex worlds while imparting moral
            lessons and cultural contexts.</p>
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-2">
        <div class="feature-card feature-card-orange shrink-hover">
          <div class="feature-icon"><i class="fas fa-microscope"></i></div>
          <div class="feature-title">Interactive Activities</div>
          <p class="feature-text mt-2">Each book comes with activities that encourage children to apply what they've
            learned in fun and interactive ways.</p>
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-3">
        <div class="feature-card feature-card-dark shrink-hover">
          <div class="feature-icon"><i class="fas fa-hand-holding-heart"></i></div>
          <div class="feature-title">Cultural Richness</div>
          <p class="feature-text mt-2">Celebrate diversity through stories that introduce young readers to different
            cultures and traditions around the globe.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="section-py">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="badge-label">How It Works</span>
      <h2 class="section-title mt-3">Getting Started is Easy</h2>
    </div>
    <div class="row g-4">
      <div class="col-md-3 reveal reveal-delay-1">
        <div class="process-step">
          <div class="process-num">1</div>
          <h4>Browse Our Collection</h4>
          <p>Explore our range of adventure-themed books for all ages and interests.</p>
        </div>
      </div>
      <div class="col-md-3 reveal reveal-delay-2">
        <div class="process-step">
          <div class="process-num">2</div>
          <h4>Choose Your Books</h4>
          <p>Pick the titles that best match your child's age group and interests.</p>
        </div>
      </div>
      <div class="col-md-3 reveal reveal-delay-3">
        <div class="process-step">
          <div class="process-num">3</div>
          <h4>Place Your Order</h4>
          <p>Complete your purchase securely through our easy online checkout.</p>
        </div>
      </div>
      <div class="col-md-3 reveal" style="transition-delay:.4s">
        <div class="process-step">
          <div class="process-num">4</div>
          <h4>Start the Adventure</h4>
          <p>Receive your books and embark on an unforgettable reading journey!</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- CTA STRIP -->


<!-- FOOTER -->
<?php include('partials/footer.php'); ?>
