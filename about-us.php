<?php include 'partials/header.php'; ?>

<style>

</style>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-content reveal">
      <h1>About Us</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">About Us</li>
        </ol>
      </nav>
    </div>
  </div>
</section>

<!-- MISSION SECTION -->
<section class="section-py">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 reveal">
        <span class="badge-label">Who We Are</span>
        <h2 class="section-title mt-3">Hi friend… I was waiting for you! </h2>
        <p class="section-subtitle mt-3">
          Let’s read together! We’ll say hello, explore new places, and find fun surprises in every story. Come on,
          let’s go on a little adventure.

        </p>
        <!-- <p class="section-subtitle mt-3">
          Founded with a deep passion for literacy and cultural exchange, we craft
          stories that take young readers on journeys across continents, languages,
          and traditions — all while embedding timeless moral lessons.
        </p> -->
        <div class="row mt-4">
          <div class="col-6">
            <ul class="check-list">
              <li><i class="fas fa-check-circle"></i>Illustrative Books</li>
              <li><i class="fas fa-check-circle"></i>Adventurous Stories</li>
            </ul>
          </div>
          <div class="col-6">
            <ul class="check-list">
              <li><i class="fas fa-check-circle"></i>Easy to Read</li>
              <li><i class="fas fa-check-circle"></i>Moral Lessons &amp; Values</li>
            </ul>
          </div>
        </div>
        <a href="services.html" class="btn-primary-dark mt-4">Our Services</a>
      </div>
      <div class="col-lg-6 reveal reveal-delay-2 text-center">
        <div class="about-img-wrapper mouse-track">
        
          <img src="images/bhookeyanimated.jpg" alt="BhOOKey Books" />
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STATS -->
<section class="section-py section-light">
  <div class="container">
    <div class="row g-4 text-center">
      <div class="col-6 col-md-3 reveal reveal-delay-1">
        <div class="stat-card">
          <div class="stat-number"><span data-count="500">0</span>+</div>
          <p class="stat-label">Happy Young Readers</p>
        </div>
      </div>
      <div class="col-6 col-md-3 reveal reveal-delay-2">
        <div class="stat-card">
          <div class="stat-number"><span data-count="12">0</span>+</div>
          <p class="stat-label">Published Books</p>
        </div>
      </div>
      <div class="col-6 col-md-3 reveal reveal-delay-3">
        <div class="stat-card">
          <div class="stat-number"><span data-count="8">0</span>+</div>
          <p class="stat-label">Languages Featured</p>
        </div>
      </div>
      <div class="col-6 col-md-3 reveal" style="transition-delay:.4s">
        <div class="stat-card">
          <div class="stat-number"><span data-count="15">0</span>+</div>
          <p class="stat-label">Countries Reached</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- VALUES -->
<!-- <section class="section-py">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="badge-label">What Drives Us</span>
      <h2 class="section-title mt-3">What Makes BhOOkey Special</h2>
    </div>
    <div class="row g-4">
      <div class="col-md-4 reveal reveal-delay-1">
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-book-open"></i></div>
          <h3 class="value-title">Let’s Fall in Love with Reading</h3>
          <p>We make reading feel fun and exciting, turning every story into a happy little adventure kids enjoy again
            and again.
          </p>
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-2">
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-globe-africa"></i></div>
          <h3 class="value-title">Let’s Explore the World Together
          </h3>
          <p>Our stories celebrate different cultures, helping kids discover new places, new people, and grow into
            little global explorers.</p>
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-3">
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-lightbulb"></i></div>
          <h3 class="value-title">Let’s Imagine and Create
          </h3>
          <p>We create stories and fun activities that spark imagination, build thinking skills, and let creativity grow
            naturally.</p>
        </div>
      </div>
    </div>
  </div>
</section> -->


<div class="bg-dots"></div>
<div class="pricing-wrapper team-section">
  <!-- header exactly like described but more polished -->
  <div class="pricing-header">
    <div class="badge-club">
      <i class="fas fa-book-open me-1"></i> Bhookey Readers Club
    </div>
    <p class="section-title">Readers Club Plans
</p>
    <p class="subhead">Discover our flexible plans designed to fit every family’s reading journey.</p>
  </div>

  <!-- pricing cards row (bootstrap grid) same 3 plans but elevated design -->
  <div class="row g-4 justify-content-center">
    <!-- BASIC PLAN -->
    <div class="col-lg-4 col-md-6">
      <div class="pricing-card">
        <div class="plan-name">
          BHOOKEY BASIC
          <i class="fas fa-seedling" style="font-size: 1.4rem; color: #3b82f6;"></i>
        </div>
        <div class="price">
          <span class="currency">$</span>
          <span class="amount">50</span>
          <span class="period"> / Per Year</span>
        </div>
        <ul class="features-list">
          <li><i class="fas fa-check-circle"></i> Access to New Releases</li>
          <li><i class="fas fa-print"></i> Printable Activities</li>
          <li><i class="fas fa-glasses" style="color:#8ba0bc;"></i> Monthly newsletter</li>
        </ul>
        <button class="btn-plan btn-primary-dark" onclick="alert('✨ You selected Bhookey Basic plan. Start reading journey! ✨')">
          <i class="fas fa-rocket"></i> Choose Plan
        </button>
      </div>
    </div>

    <!-- STANDARD PLAN (with extra exclusive content) -->
    <div class="col-lg-4 col-md-6">
      <div class="pricing-card card-standard">
        <div class="plan-name">
          BHOOKEY STANDARD
          <i class="fas fa-chart-line" style="color:#3b82f6;"></i>
        </div>
        <div class="price">
          <span class="currency">$</span>
          <span class="amount">100</span>
          <span class="period"> / Per Year</span>
        </div>
        <ul class="features-list">
          <li><i class="fas fa-check-circle"></i> Access to New Releases</li>
          <li><i class="fas fa-lock-open"></i> Exclusive Content</li>
          <li><i class="fas fa-print"></i> Printable Activities</li>
          <li><i class="fas fa-trophy"></i> Early access to events</li>
        </ul>
        <button class="btn-plan btn-primary-dark"
          onclick="alert('🎉 Standard plan selected! Unlock exclusive stories & activities. 🎉')">
          <i class="fas fa-gem"></i> Choose Plan
        </button>
      </div>
    </div>

    <!-- PREMIUM PLAN (parental resources + premium extras) -->
    <div class="col-lg-4 col-md-6">
      <div class="pricing-card card-premium">
        <div class="popular-tag">
          <i class="fas fa-crown me-1"></i> MOST POPULAR
        </div>
        <div class="plan-name">
          BHOOKEY PREMIUM
          <i class="fas fa-crown" style="color:#f59e0b;"></i>
        </div>
        <div class="price">
          <span class="currency">$</span>
          <span class="amount">150</span>
          <span class="period"> / Per Year</span>
        </div>
        <ul class="features-list">
          <li class="premium-feature"><i class="fas fa-check-circle"></i> Access to New Releases</li>
          <li class="premium-feature"><i class="fas fa-star"></i> Exclusive Content</li>
          <li class="premium-feature"><i class="fas fa-print"></i> Printable Activities</li>
          <li class="premium-feature"><i class="fas fa-chalkboard-user"></i> Parental Resources</li>
          <li class="premium-feature"><i class="fas fa-calendar-alt"></i> Live reading sessions</li>
        </ul>
        <button class="btn-plan btn-primary-dark"
          onclick="alert('🏆 Bhookey Premium — empower your family’s reading journey! 🏆')">
          <i class="fas fa-crown"></i> Choose Plan
        </button>
      </div>
    </div>
  </div>

  <!-- extra comparison note (optional) but adds value, reflects same to same but better -->
  <!-- <div class="row mt-5">
    <div class="col-12 text-center">
      <div class="d-inline-flex flex-wrap justify-content-center gap-3 p-3 bg-white rounded-4 shadow-sm border"
        style="backdrop-filter: blur(4px);">
        <span class="px-3 py-1"><i class="fas fa-check-circle text-primary me-1"></i> 30-day money back</span>
        <span class="px-3 py-1"><i class="fas fa-sync-alt text-primary me-1"></i> Cancel anytime</span>
        <span class="px-3 py-1"><i class="fas fa-users text-primary me-1"></i> Family sharing available</span>
      </div>
    </div>
  </div> -->
</div>
  <!-- TEAM -->
  <section class="team-section section-py section-light">
    <div class="container">
      <div class="text-center mb-5 reveal">
        <span class="badge-label">Our Passionate Friends</span>
        <h2 class="section-title mt-3">Meet Our Team</h2>
        <p class="section-subtitle mt-2 black">The Creative Minds Behind Our Stories</p>
      </div>
      <div class="row g-4">
        <div class="col-md-4 reveal reveal-delay-1">
          <div class="team-card float-card">
            <img src="images/bukky.jpg" alt="Olubukola S. Taiwo" />
            <div class="team-card-body">
              <div class="team-name">Olubukola S. Taiwo</div>
              <p class="team-role">Lead Author</p>
            </div>
            <div class="team-social">
              <a href="#" aria-label="Facebook"><i class="fab fa-facebook-square"></i></a>
              <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 reveal reveal-delay-2">
          <div class="team-card float-card">
            <img src="images/my-palaver-banners-2.png" alt="Kolade Madariola" />
            <div class="team-card-body">
              <div class="team-name">Kolade Madariola</div>
              <p class="team-role">Program Director</p>
            </div>
            <div class="team-social">
              <a href="#" aria-label="Facebook"><i class="fab fa-facebook-square"></i></a>
              <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 reveal reveal-delay-3">
          <div class="team-card float-card">
            <img src="images/my-palaver-banners-1.png" alt="Funmi Ezemandu" />
            <div class="team-card-body">
              <div class="team-name">Funmi Ezemandu</div>
              <p class="team-role">Marketing Specialist</p>
            </div>
            <div class="team-social">
              <a href="#" aria-label="Facebook"><i class="fab fa-facebook-square"></i></a>
              <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <?php include('partials/footer.php'); ?>