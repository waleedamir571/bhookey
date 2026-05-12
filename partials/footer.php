<!-- =============================================
     FOOTER
     ============================================= -->
<footer class="site-footer">
  <div class="container">
    <div class="row g-5">

      <!-- Col 1: Brand -->
      <div class="col-lg-4 col-md-6 reveal">
        <div class="footer-brand"><img class="w-35" src="images/logo.png" alt="BhOOKey.com"></div>
        <p class="footer-desc">
          BhOOKey.com is dedicated to enriching children's lives through
          captivating stories that ignite their love for multi-language
          learning and exploration.
        </p>
      </div>

      <!-- Col 2: Contact -->
      <div class="col-lg-4 col-md-6 reveal reveal-delay-1">
        <h4 class="footer-heading">Contact Us</h4>
        <div class="footer-contact-item">
          <i class="fas fa-map-marker-alt"></i>
          <span>3689 Forest Hill Rd. Gwynn Oak, Baltimore MD 21207</span>
        </div>
        <div class="footer-contact-item">
          <i class="fas fa-envelope"></i>
          <a href="mailto:info@bhookey.com">info@bhookey.com</a>
        </div>
        <div class="footer-contact-item">
          <i class="fas fa-phone-alt"></i>
          <a href="tel:+1-301-615-1239">+1-301-615-1239</a>
        </div>
      </div>

      <!-- Col 3: Quick Links -->
      <div class="col-lg-4 col-md-6 reveal reveal-delay-2">
        <h4 class="footer-heading">Quick Links</h4>
        <ul class="footer-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="about-us.php">About Us</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="welcome-to-the-readers-club.php">Readers Club</a></li>
          <li><a href="order-now.php">Order Now</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>

    </div>

    <hr class="footer-divider" />
    <p class="footer-copyright">
      &copy; <span id="yr"></span> BhOOKey.com. All rights reserved.
    </p>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="js/main.js"></script>
<script>document.getElementById('yr').textContent = new Date().getFullYear();</script>

<script>
    // Image error handling - agar aapki original image hai toh
    const img = document.querySelector('.about-img-wrapper img');
    if (img) {
      img.addEventListener('error', function() {
        this.src = "https://placehold.co/800x600/EFE3D0/5E3A1F?text=Bhookey+Books&font=playfair";
      });
    }
    
    // Optional: Mouse movement se thoda extra effect (lightweight)
    const wrapper = document.querySelector('.about-img-wrapper');
    if (wrapper) {
      wrapper.addEventListener('mousemove', function(e) {
        const rect = this.getBoundingClientRect();
        const x = ((e.clientX - rect.left) / rect.width) * 100;
        const y = ((e.clientY - rect.top) / rect.height) * 100;
        this.style.setProperty('--x', `${x}%`);
        this.style.setProperty('--y', `${y}%`);
      });
    }
  </script>

  <script async type='module' src='https://interfaces.zapier.com/assets/web-components/zapier-interfaces/zapier-interfaces.esm.js'></script>
<zapier-interfaces-chatbot-embed is-popup='true' chatbot-id='cmp1jm2y5007dwv7uqsmq14wt'></zapier-interfaces-chatbot-embed>
</body>
</html>
