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
        <h2 class="order-right-title">Pay with Zelle or CashApp</h2>

        <!-- Testimonial slider content – 1 slide, autoplay -->
        <div class="order-slider-wrap">

          <!-- Slide content (testimonial-content) -->
          <div class="order-payment-text">
            <p>
              <span>Call </span>832-288-6418 or Email:
              info@bhookey.com to place your order.
              Someone will be available to help you with your order.
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
              <p class="order-author-name">Order Via PayPal</p>
              <p class="order-author-title">Click the button below.</p>
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
              <em><br>Discover the joy of greetings with BhOOkey!</em>
              <br><br>
              Meet BhOOkey, a fun-loving, adventurous girl who travels the world
              making new friends. In this premiere storybook from the #EnFreYoSpa series.&nbsp;
            </p>

            <!-- Paragraph 2 – Ages / languages, animation-delay:600ms slow -->
            <p class="wow fadeInRight delay-700">
              Children ages 4–12 years learn to say "Hello" in English, French,
              Yoruba, and Spanish through colorful stories, playful activities, and
              cultural adventures.
            </p>

            <!-- Paragraph 3 – Families & classrooms, animation-delay:600ms slowest -->
            <p class="wow fadeInRight delay-800">
              Designed for families and classrooms, this book blends story, learning,
              and fun to inspire young readers to become global citizens. One child at
              a time, one word at a time.&nbsp;
            </p>

            <!-- Paragraph 4 – Countries, animation-delay:900ms -->
            <p class="wow fadeInRight delay-900">
              As BhOOkey explores England, France, Nigeria, and Spain, she shows
              children the power of words to build friendship, kindness, and
              understanding across cultures.
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