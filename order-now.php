<?php include 'partials/header.php'; ?>

<!-- =============================================
     SECTION 1 — BOOK COVER + DARK PAYMENT PANEL
     Exact replica of original pagelayer two-col layout
     padding: 7% 10%  |  left: white, book_dummy.png
                          right: #101111 dark
     ============================================= -->

<section class="page-hero">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-content reveal">
      <h1>Order Now</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">order now</li>
        </ol>
      </nav>
    </div>
  </div>
</section>

<section class="section-py">
  <div class="container ">
    <div class="row g-0">

      <!-- Left: book cover image (col-6) -->
      <div class="col-md-5 offset-md-1">
        <img src="images/book_dummy.png" alt="BhOOKey Adventure Book" />
      </div>

      <!-- Right: dark payment panel (col-6 / background:#101111) -->
      <div class="col-md-6">

        <!-- Heading -->
        <h2 class="order-right-title">Pay via Zelle or Cash App</h2>

        <!-- Testimonial slider content – 1 slide, autoplay -->
        <div class="order-slider-wrap">

          <!-- Slide content (testimonial-content) -->
          <div class="order-payment-text">
            <p>
              To place your order, call 832-288-6418 or email info@bhookey.com.
              Our team will assist you with your purchase.

              <strong><br><br>CASHAPP</strong>: $OLUBUKOLAESOJITAIWO
            </p>
            <p>
              <strong>ZELLE</strong>:<br>832-288-6418
            </p>
          </div>

          <!-- Author details row -->
          <div class="order-author-row">
            <!-- Avatar image (pagelayer-testimonial-circle) -->
            <!-- <img src="images/enspayou.png" alt="Order via PayPal" class="order-avatar" /> -->
            <!-- Cite: name + title -->
            <div class="order-cite">
              <p class="order-author-name">You can also order through PayPal</p>
              <p class="order-author-title">Simply click the button below.</p>
            </div>
          </div>

        </div><!-- /slider-wrap -->

        <!-- Order Here CTA button strip (background:#099b1b) -->
        <div class="order-btn-strip">
          <a href="https://www.paypal.com/ncp/payment/SVT2TPDXC7T5G" class="btn-join mt-3" target="_blank"
            rel="noopener">Join Now!</a>
        </div>

      </div><!-- /order-right -->
    </div><!-- /row -->
  </div>
</section>
<!-- /order-wrap -->


<!-- =============================================
     SECTION 2 — ABOUT THE BOOK
     Original: pt 60px pb 60px
     Pink divider / ABOUT THE BOOK heading /
     pink divider-2 / inner row (50% img | 45% text)
     ============================================= -->
<section class="about-book-section">

  <!-- Pink divider, animation-delay:600ms -->
  <!-- <hr class="pink-divider wow fadeInLeft delay-600" /> -->

  <section class="section-py">
    <Div class="container">
      <div class="row about-book-inner aling-items-center">

        <Div class="col-md-5 offset-md-1">
          <div class="about-img-col wow fadeInLeft delay-600">
            <img src="images/bg22.jpg" alt="BhOOKey Adventure Scene" />
          </div>
        </Div>





        <Div class="col-md-6">
          <div class="about-text-col">

            <!-- Paragraph 1 – Introduction, animation-delay:600ms -->
            <p class="wow fadeInRight delay-600">
              <strong>introduction</strong>:
              <em><br> What if one simple “hello” could open a whole new world?
              </em>
              <br><br>
              Meet BhOOkey, a bright, curious little traveler who loves meeting new people and making new friends
              wherever she goes. This first book in the #EnFreYoSpa series brings her journey to life in the most
              playful and heartwarming way.

            </p>

            <!-- Paragraph 2 – Ages / languages, animation-delay:600ms slow -->
            <p class="wow fadeInRight delay-700">
              Through her adventures, children ages 4–12 get to explore how “hello” sounds in English, French, Yoruba,
              and Spanish, not just as words, but as moments of connection.

            </p>

            <!-- Paragraph 3 – Families & classrooms, animation-delay:600ms slowest -->
            <p class="wow fadeInRight delay-800">
              This isn’t just a storybook. It’s a shared experience, for families, for classrooms, for those little
              everyday moments where learning feels like play.
            </p>

            <!-- Paragraph 4 – Countries, animation-delay:900ms -->
            <p class="wow fadeInRight delay-900">
              As BhOOkey travels through England, France, Nigeria, and Spain, she shows children something simple but
              powerful:
              sometimes all it takes is one word to turn a stranger into a friend
            </p>

          </div>
        </Div>

        <!-- /text col -->
      </div>
    </Div>
  </section>
  <!-- /inner row -->

</section>

<!-- =============================================
     FOOTER
     ============================================= -->
<?php include 'partials/footer.php'; ?>