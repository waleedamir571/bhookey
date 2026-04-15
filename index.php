<?php include('partials/header.php'); ?>

<!-- =============================================
     HERO
     ============================================= -->
<section class="hero">
  <video autoplay muted loop playsinline class="hero-video">
    <source src="images/Updated.mp4" type="video/mp4">

  </video>
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 hero-content">
        <div class="">
          <h1 class="reveal">
            <!-- animated word container: new class "word-rotator" -->
            <span class="word-rotator">
              <span class="rotating-word-text" id="dynamicGreeting">Hello</span>
            </span>
            <span class="static-text"> to </span>
            <br class="break-line">
            <span class="static-text"><span class="brand">BhOOKey.com</span></span>
          </h1>
        </div>
        <p class="reveal reveal-delay-1">
          Come closer… let’s go on a secret little adventure 
          We’re going to say HELLO in fun new ways, meet new friends, and discover a big, colorful world together.

        </p>
        <a href="contact.php" class="btn-hero reveal reveal-delay-2">Discover More</a>
      </div>
    </div>
  </div>
</section>

<!-- =============================================
     FEATURES (3 Icon Cards) – overlaps hero
     ============================================= -->
<section style="margin-top:-105px; padding-bottom:80px; position:relative; z-index:5;">
  <div class="container">
    <div class="row g-4">

      <!-- Card 1 – Green -->
      <div class="col-md-4 reveal reveal-delay-1">
        <div class="feature-card feature-card-green shrink-hover">
          <div class="feature-icon">
            <i class="fas fa-user-nurse"></i>
          </div>
          <div class="feature-title">Fun Stories You’ll Love</div>
          <p class="feature-text mt-2">
            Open the book… and go!
            BhOOkey is waiting. Let’s say hello and see what happens next 
          </p>
        </div>
      </div>

      <!-- Card 2 – Orange -->
      <div class="col-md-4 reveal reveal-delay-2">
        <div class="feature-card feature-card-orange shrink-hover">
          <div class="feature-icon">
            <i class="fas fa-microscope"></i>
          </div>
          <div class="feature-title">Play & Try It Yourself</div>
          <p class="feature-text mt-2">
            Your turn! 🎉
            Can you say hello too? Can you try it like BhOOkey? Let’s play!

          </p>
        </div>
      </div>

      <!-- Card 3 – Dark Navy -->
      <div class="col-md-4 reveal reveal-delay-3">
        <div class="feature-card feature-card-dark shrink-hover">
          <div class="feature-icon">
            <i class="fas fa-hand-holding-heart"></i>
          </div>
          <div class="feature-title">A Big, Colorful World
          </div>
          <p class="feature-text mt-2">
            So many hellos!
            So many places!
            Let’s go see them with BhOOkey 
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =============================================
     ABOUT SECTION
     ============================================= -->
<section class="section-py">
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- Left: Text -->
      <div class="col-lg-6 reveal">
        <span class="badge-label">Get to Know Us</span>
        <h2 class="section-title mt-3">Come, Say Hello with BhOOkey</h2>
        <p class="section-subtitle mt-3">
          At BhOOkey.com, we love fun little stories that make you smile and explore. Our stories help children learn
          new hellos, discover new places, and enjoy reading through happy, exciting adventures.

        </p>

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

        <a href="services.php" class="btn-primary-dark mt-4">Learn More</a>
      </div>

      <!-- Right: Image -->
      <div class="col-lg-6 reveal reveal-delay-2 text-center">
        <div class="about-img-wrapper mouse-track">
          <img src="images/bhookeyanimated.jpg" alt="BhOOKey Books" />
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =============================================
     ADVENTURE BOOKS SECTION
     ============================================= -->
<section class="section-py section-light">
  <div class="container">

    <!-- Header row -->
    <div class="row align-items-end mb-5">
      <div class="col-lg-6 reveal">
        <span class="badge-label">Books that teaches languages</span>
        <h2 class="section-title mt-3">Ready, Set… Book Time!</h2>
      </div>
      <div class="col-lg-6 reveal reveal-delay-1">
        <p class="section-subtitle black">
          Hey you! 👀
          Want to go on a fun little adventure? Open a book and let’s go! Say hello, meet new friends, learn new words,
          and see what surprise is waiting on the next page

        </p>
      </div>
    </div>

    <!-- Book Cards -->
    <div class="row g-4">

      <div class="col-md-4 reveal reveal-delay-1">
        <div class="book-card float-card">
          <img src="images/1.jpg" alt="Cultural Adventures" />
          <div class="book-card-body">
            <div class="book-card-title">Let’s Explore the World
            </div>
            <p>Hey, come with me!
              Let’s see fun places, new friends, and different hellos. Can you say them too? Let’s try together and
              smile</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 reveal reveal-delay-2">
        <div class="book-card float-card">
          <img src="images/2.jpg" alt="Learning Through Play" />
          <div class="book-card-body">
            <div class="book-card-title">Let’s Read & Play
            </div>
            <p>Yay, let’s play!
              Funny little stories, silly moments, and fun surprises on every page. What will you find next? Turn and
              see!
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4 reveal reveal-delay-3">
        <div class="book-card float-card">
          <img src="images/3.jpg" alt="Creative Challenges" />
          <div class="book-card-body">
            <div class="book-card-title">Your Turn to Try! </div>
            <p>Ready? Let’s go!
              Can you guess, think, and try the fun little challenges? Let’s see what you can do… ready? Go!
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =============================================
     CTA – PARALLAX STRIP
     ============================================= -->
<section class="cta-section">
  <div class="cta-overlay"></div>
  <div class="container">
    <div class="cta-content reveal">
      <p class="cta-label">Knock knock… who’s there? </p>
      <h2 class="cta-title">A fun little adventure just for you! </h2>
      <div class="cta-phone-box">
        <div class="cta-phone">
          <a href="tel:+1-301-615-1239"><i class="fas fa-phone-alt me-2" style="font-size:.7em;"></i>+1-301-615-1239</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =============================================
     SUBSCRIBE / READERS CLUB
     ============================================= -->
<section class="subscribe-section">
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- Left -->
      <div class="col-lg-6 reveal">
        <span class="badge-label">Featured Books</span>
        <h2 class="section-title mt-3">A Little Club Full of Big Adventures!
        </h2>
      </div>

      <!-- Right -->
      <div class="col-lg-6 reveal reveal-delay-1">
        <p class="section-subtitle black">
          Can you say hello in a new way? 
          Can you find the hidden fun in every page?
          Come try it with BhOOkey and see what happens next

        </p>
        <a href="https://www.paypal.com/ncp/payment/SVT2TPDXC7T5G" class="btn-join mt-3" target="_blank"
          rel="noopener">Join Now!</a>
      </div>

    </div>
  </div>
</section>

<!-- =============================================
     FEATURED BOOKS (Icon Cards)
     ============================================= -->
<section class="featured-books-section">
  <div class="container">
    <div class="row g-4">

      <div class="col-md-4 reveal reveal-delay-1">
        <div class="featured-card float-card">
          <div class="featured-icon-wrap">
            <i class="fas fa-clinic-medical"></i>
          </div>
          <h3 class="featured-card-title">Open It… Something’s Inside
          </h3>
          <p>A fun story about a girl who discovers a secret world full of magical creatures and surprises
          </p>
        </div>
      </div>

      <div class="col-md-4 reveal reveal-delay-2">
        <div class="featured-card float-card">
          <div class="featured-icon-wrap">
            <i class="fas fa-gem"></i>
          </div>
          <h3 class="featured-card-title">Come Explore New Places
          </h3>
          <p>A happy story that takes you on a journey through different cultures and fun traditions
          </p>
        </div>
      </div>

      <div class="col-md-4 reveal reveal-delay-3">
        <div class="featured-card float-card">
          <div class="featured-icon-wrap">
            <i class="fas fa-file-prescription"></i>
          </div>
          <h3 class="featured-card-title">Uh Oh… A Hidden Mystery!
          </h3>
          <p>A thrilling adventure in an ancient place where kids solve puzzles and work together</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =============================================
     TEAM SECTION
     ============================================= -->
<section class="team-section section-py">
  <div class="container">

    <!-- Header -->
    <div class="row align-items-end mb-5">
      <div class="col-lg-6 reveal">
        <span class="badge-label">Our Passionate Friends</span>
        <h2 class="section-title mt-3">Come meet your story friends
        </h2>
      </div>
      <div class="col-lg-6 reveal reveal-delay-1">
        <p class="section-subtitle">We made these stories for you to open, say hello, and go on a happy little adventure
          every time

        </p>
      </div>
    </div>

    <!-- Team Cards -->
    <div class="row g-4">

      <!-- Member 1 -->
      <div class="col-md-4 reveal reveal-delay-1">
        <div class="team-card float-card">
          <img src="images/bukky.jpg" alt="Olubukola S. Taiwo" />
          <div class="team-card-body">
            <div class="team-name">Olubukola S. Taiwo</div>
            <p class="team-role">Lead Author</p>
          </div>
          <div class="team-social">
            <a href="https://facebook.com/" target="_blank" aria-label="Facebook">
              <i class="fab fa-facebook-square"></i>
            </a>
            <a href="https://plus.google.com/" target="_blank" aria-label="Google+">
              <i class="fab fa-google-plus-square"></i>
            </a>
            <a href="https://pinterest.com/" target="_blank" aria-label="Pinterest">
              <i class="fab fa-pinterest-square"></i>
            </a>
            <a href="https://linkedin.com/" target="_blank" aria-label="LinkedIn">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Member 2 -->
      <div class="col-md-4 reveal reveal-delay-2">
        <div class="team-card float-card">
          <img src="images/my-palaver-banners-2.png" alt="Kolade Madariola" />
          <div class="team-card-body">
            <div class="team-name">Kolade Madariola</div>
            <p class="team-role">Program Director</p>
          </div>
          <div class="team-social">
            <a href="https://facebook.com/" target="_blank" aria-label="Facebook">
              <i class="fab fa-facebook-square"></i>
            </a>
            <a href="https://plus.google.com/" target="_blank" aria-label="Google+">
              <i class="fab fa-google-plus-square"></i>
            </a>
            <a href="https://pinterest.com/" target="_blank" aria-label="Pinterest">
              <i class="fab fa-pinterest-square"></i>
            </a>
            <a href="https://linkedin.com/" target="_blank" aria-label="LinkedIn">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Member 3 -->
      <div class="col-md-4 reveal reveal-delay-3">
        <div class="team-card float-card">
          <img src="images/my-palaver-banners-1.png" alt="Funmi Ezemandu" />
          <div class="team-card-body">
            <div class="team-name">Funmi Ezemandu</div>
            <p class="team-role">Marketing Specialist</p>
          </div>
          <div class="team-social">
            <a href="https://facebook.com/" target="_blank" aria-label="Facebook">
              <i class="fab fa-facebook-square"></i>
            </a>
            <a href="https://plus.google.com/" target="_blank" aria-label="Google+">
              <i class="fab fa-google-plus-square"></i>
            </a>
            <a href="https://pinterest.com/" target="_blank" aria-label="Pinterest">
              <i class="fab fa-pinterest-square"></i>
            </a>
            <a href="https://linkedin.com/" target="_blank" aria-label="LinkedIn">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =============================================
     TESTIMONIALS
     ============================================= -->
<section class="testimonials-section">
  <div class="container">

    <!-- Header -->
    <div class="row align-items-end mb-5">
      <div class="col-lg-6 reveal">
        <span class="badge-label badge-label-dark">What's your story?</span>
        <h2 class="section-title mt-3">What Kids & Parents Are Saying </h2>
      </div>
      <div class="col-lg-6 reveal reveal-delay-1">
        <p class="section-subtitle black">
          Look! See how kids are having fun with these stories and how families are smiling, reading, and enjoying
          storytime together
        </p>
      </div>
    </div>

    <!-- Cards -->
    <div class="row g-4">

      <div class="col-md-4 reveal reveal-delay-1">
        <div class="testimonial-card float-card">
          <p class="testimonial-text">
            "Bhookey.com has transformed my child's reading experience!
            They're more engaged than ever."
          </p>
          <div class="testimonial-author-wrap">
            <img src="images/clients01.jpg" alt="John Smith" class="testimonial-img" />
            <div>
              <p class="testimonial-name">John Smith</p>
              <p class="testimonial-title">Happy Parent</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 reveal reveal-delay-2">
        <div class="testimonial-card float-card">
          <p class="testimonial-text">
            "The adventures are fun and teach valuable lessons—my favorite
            gift to give!"
          </p>
          <div class="testimonial-author-wrap">
            <img src="images/clients02.jpg" alt="Sarah Taylor" class="testimonial-img" />
            <div>
              <p class="testimonial-name">Sarah Taylor</p>
              <p class="testimonial-title">Satisfied Customer</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 reveal reveal-delay-3">
        <div class="testimonial-card float-card">
          <p class="testimonial-text">
            "Every book we've read has sparked wonderful conversations at home!"
          </p>
          <div class="testimonial-author-wrap">
            <img src="images/clients03.jpg" alt="Jessica Eve" class="testimonial-img" />
            <div>
              <p class="testimonial-name">Jessica Eve</p>
              <p class="testimonial-title">Enthusiastic Reader</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
  (function () {
    // ---------- WORD LIST (exactly as requested: welcome, bienvenue, bienvenido, ihola) ----------
    const greetingWords = ["Hello", "Bonjour", "Hola", "Bawo"];
    let currentWordIndex = 0;          // starting from "hello"
    let rotateInterval = null;
    let isTransitioning = false;        // prevent overlapping transitions

    // DOM element references
    const wordSpan = document.getElementById("dynamicGreeting");
    if (!wordSpan) return;

    // Helper: apply new word with smooth animation (NEW classes + CSS)
    function animateToNextWord() {
      // Avoid overlapping if a transition is already running
      if (isTransitioning) return;
      isTransitioning = true;

      // 1. Add fade-out class (new class from CSS)
      wordSpan.classList.add("fade-out-word");

      // 2. After short delay, change text content and trigger entrance animation
      setTimeout(() => {
        // calculate next index (cycle)
        currentWordIndex = (currentWordIndex + 1) % greetingWords.length;
        const newWord = greetingWords[currentWordIndex];

        // update text content while element is faded-out (invisible)
        wordSpan.textContent = newWord;

        // 3. Remove fade-out class to reveal again
        wordSpan.classList.remove("fade-out-word");

        // 4. Add "word-pop" class to get fresh pop/bounce animation (NEW CLASS effect)
        wordSpan.classList.add("word-pop");

        // 5. Clean up pop class after animation completes to keep future transitions clean
        setTimeout(() => {
          wordSpan.classList.remove("word-pop");
          // transition flag reset, ready for next rotation
          isTransitioning = false;
        }, 380);  // matches gentlePop duration (0.38s)

      }, 160); // slightly less than CSS fade-out transition (0.28s) for smooth feeling
    }

    // Function to start the word rotator (interval 2 seconds)
    function startWordRotation() {
      if (rotateInterval) clearInterval(rotateInterval);
      // Rotate every 2 seconds (2000ms) – classic word animation timing
      rotateInterval = setInterval(() => {
        animateToNextWord();
      }, 2000);
    }

    // Optional: add a small initial entrance effect for the first word ("hello")
    function initialEntrance() {
      wordSpan.classList.add("word-pop");
      setTimeout(() => {
        wordSpan.classList.remove("word-pop");
      }, 400);
    }

    // Start everything
    startWordRotation();
    initialEntrance();

    // (Bonus) Pause on hover if needed? Not required, but keeps UX clean — but NOT interfering
    // For better user experience, we can pause animation when hovering over the word rotator? 
    // but not mandatory, but optional: let's add a clean hover pause to avoid distraction
    const rotatorContainer = document.querySelector(".word-rotator");
    if (rotatorContainer) {
      rotatorContainer.addEventListener("mouseenter", () => {
        if (rotateInterval) {
          clearInterval(rotateInterval);
          rotateInterval = null;
        }
      });
      rotatorContainer.addEventListener("mouseleave", () => {
        if (!rotateInterval) {
          rotateInterval = setInterval(() => {
            animateToNextWord();
          }, 2000);
        }
      });
    }

    // Edge case: prevent memory leaks / page unload (cleanup not strictly needed but good)
    window.addEventListener("beforeunload", () => {
      if (rotateInterval) clearInterval(rotateInterval);
    });
  })();
</script>


<?php include('partials/footer.php'); ?>