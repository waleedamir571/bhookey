<?php include('partials/header.php'); ?>

<style>
  /* ================================================================
       READERS CLUB – pixel-perfect replica of welcome-to-the-readers-club.php
       Original is standard WordPress block editor (Gutenberg) content
       ================================================================ */

  /* Page body background – original uses body.pagelayer-body bg #f4ea75 */
  body {
    background-color: var(--color-body-bg);
  }

  /* ---- Article / entry-content wrapper ---- */
  /* WordPress default: max-width ~800px, centered, padding */
  .readers-club-content {
    max-width: 800px;
    margin: 0 auto;
    padding: 50px 24px 80px;
  }

  /* ---- Featured image (wp-block-image size-full) ---- */
  /* width:800px height:600px — displayed full width inside container */
  .readers-club-content .wp-block-image {
    margin: 0 0 32px;
    line-height: 0;
  }

  .readers-club-content .wp-block-image img {
    width: 100%;
    height: auto;
    display: block;
  }

  /* ---- Headings (wp-block-heading = h3) ---- */
  /* WordPress body h3 inherits colour #102e7a (pagelayer navy) */
  .readers-club-content h3.wp-block-heading {
    color: #102e7a;
    font-size: 26px;
    font-weight: 600;
    margin: 36px 0 14px;
    line-height: 1.2;
  }

  .readers-club-content h3.wp-block-heading:first-of-type {
    margin-top: 0;
  }

  /* ---- Paragraph text ---- */
  /* body.pagelayer-body p: font-size:16px color:#707779 */
  .readers-club-content p {
    color: #707779;
    font-size: 16px;
    line-height: 1.7;
    margin-bottom: 16px;
  }

  .readers-club-content p strong {
    color: #1f2732;
  }

  /* ---- Unordered list (wp-block-list) ---- */
  .readers-club-content ul.wp-block-list {
    padding-left: 24px;
    margin-bottom: 20px;
  }

  .readers-club-content ul.wp-block-list li {
    color: #707779;
    font-size: 16px;
    line-height: 1.7;
    margin-bottom: 8px;
    list-style-type: disc;
  }

  .readers-club-content ul.wp-block-list li strong {
    color: #1f2732;
  }

  .readers-club-content ul.wp-block-list li em {
    color: #707779;
  }

  /* ---- Ordered list ---- */
  .readers-club-content ol.wp-block-list {
    padding-left: 24px;
    margin-bottom: 20px;
    counter-reset: list-counter;
  }

  .readers-club-content ol.wp-block-list li {
    color: #707779;
    font-size: 16px;
    line-height: 1.7;
    margin-bottom: 8px;
    list-style-type: decimal;
  }

  .readers-club-content ol.wp-block-list li strong {
    color: #1f2732;
  }

  /* ---- Blockquote (wp-block-quote) ---- */
  /* Standard WordPress blockquote: left border, italic text */
  .readers-club-content .wp-block-quote {
    border-left: 4px solid var(--color-primary);
    margin: 24px 0;
    padding: 16px 24px;
    background: var(--color-light-bg);
    border-radius: 0 8px 8px 0;
  }

  .readers-club-content .wp-block-quote p {
    font-style: italic;
    color: #4a4a4a;
    font-size: 16px;
    margin-bottom: 0;
  }

  .readers-club-content .wp-block-quote p em {
    color: var(--color-primary);
    font-style: normal;
  }
</style>

<main>


<section class="page-hero">
  <div class="hero-overlay"></div>
  <div class="container">
    <div class="hero-content reveal">
      <h1>About Us</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">welcome-to-the-readers-club</li>
        </ol>
      </nav>
    </div>
  </div>
</section>
  <article>
    <div class="readers-club-content">

      <!-- wp-block-image size-full (800×600) -->
      <figure class="wp-block-image">
        <img width="800" height="600" src="images/pexels-photo-12719357-2.jpeg" alt="" loading="lazy" />
      </figure>

      <!-- Heading: "Where Young Minds Explore, Share, and Grow" -->
      <h3 class="wp-block-heading">Where Young Minds Explore, Share, and Grow</h3>

      <!-- Intro paragraph -->
      <p>
        <strong>The Bhookey Readers Club</strong> is your gateway to a world of imagination, language,
        and global adventure. Whether you're a curious child, a proud parent, a passionate teacher, or a
        cultural storyteller, this is your space to connect, create, and celebrate the power of stories.
      </p>

      <!-- Heading: "🌍 What We Offer" -->
      <h3 class="wp-block-heading">🌍 What We Offer</h3>

      <!-- What we offer list -->
      <ul class="wp-block-list">
        <li>
          <strong>Multilingual Storytime:</strong> Read and listen to Bhookey tales in English,
          French, Yoruba, Spanish, and more.
        </li>
        <li>
          <strong>Adventure Challenges:</strong> Complete fun reading quests and unlock badges like
          <em>Word Warrior</em>, <em>Culture Keeper</em>, and <em>Language Explorer</em>.
        </li>
        <li>
          <strong>Creative Corner:</strong> Submit your own stories, poems, or drawings inspired by
          Bhookey characters.
        </li>
        <li>
          <strong>Global Pen Pals:</strong> Connect with young readers around the world through safe,
          moderated exchanges.
        </li>
        <li>
          <strong>Monthly Spotlight:</strong> Celebrate a featured reader, classroom, or community
          that's making storytelling magic.
        </li>
      </ul>

      <!-- Heading: "🦁 Why Join?" -->
      <h3 class="wp-block-heading">🦁 Why Join?</h3>

      <!-- Why join list -->
      <ul class="wp-block-list">
        <li>Build language skills while exploring diverse cultures</li>
        <li>Discover new books from the #EnFreYoSpa series and beyond</li>
        <li>Be part of a growing global community of young changemakers</li>
        <li>Get early access to new releases, contests, and events</li>
      </ul>

      <!-- Heading: "✨ How to Join" -->
      <h3 class="wp-block-heading">✨ How to Join</h3>

      <!-- How to join ordered list -->
      <ol start="1" class="wp-block-list">
        <li><strong>Sign up</strong> with a parent, teacher, or guardian</li>
        <li><strong>Create your Reader Profile</strong> — pick your favorite Bhookey animal avatar</li>
        <li><strong>Start exploring</strong> stories, games, and creative challenges</li>
        <li><strong>Share your voice</strong> — submit your work to be featured on Bhookey.com</li>
      </ol>

      <!-- Heading: "💬 From Our Readers" -->
      <h3 class="wp-block-heading">💬 From Our Readers</h3>

      <!-- Blockquote -->
      <blockquote class="wp-block-quote is-layout-flow wp-block-quote-is-layout-flow">
        <p>
          "I love reading in Yoruba and French — it makes me feel like I'm traveling!" —
          <em>Amina, age 9</em>
          &nbsp;&nbsp;"The Readers Club helped my students connect with stories from Nigeria, Haiti,
          and Brazil." — <em>Ms. Lopez, educator</em>
        </p>
      </blockquote>

      <!-- Heading: "🎉 Coming Soon" -->
      <h3 class="wp-block-heading">🎉 Coming Soon</h3>

      <!-- Coming soon list -->
      <ul class="wp-block-list">
        <li>Bhookey Book Swap</li>
        <li>Virtual Storytelling Circles</li>
        <li>Readers Club Podcast</li>
      </ul>

    </div><!-- /readers-club-content -->
  </article>
</main>

<!-- =============================================
     FOOTER
     ============================================= -->
<?php include('partials/footer.php'); ?>