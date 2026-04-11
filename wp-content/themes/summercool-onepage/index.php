<?php
/**
 * Main template file.
 *
 * @package SummerCoolOnepage
 */

if (! defined('ABSPATH')) {
    exit;
}

$products = [
    ['name' => 'Turbo Handheld Fan Pro', 'price' => '$69.99', 'old' => '$89.99', 'badge' => 'HOT DEAL'],
    ['name' => 'Bladefree Neck Fan', 'price' => '$39.99', 'old' => '$49.99', 'badge' => 'BESTSELLER'],
    ['name' => 'Mini Mist Cooling Fan', 'price' => '$14.99', 'old' => '$19.99', 'badge' => 'NEW'],
    ['name' => 'Vintage Desk Air Fan', 'price' => '$49.99', 'old' => '$69.99', 'badge' => 'LIMITED'],
    ['name' => 'Tripod Baby Fan', 'price' => '$24.99', 'old' => '$34.99', 'badge' => 'TRENDING'],
    ['name' => 'Quiet Desk Breeze', 'price' => '$19.99', 'old' => '$29.99', 'badge' => 'FAVORITE'],
    ['name' => 'Pocket Twin Fans', 'price' => '$15.99', 'old' => '$22.99', 'badge' => 'VALUE'],
    ['name' => 'Turbo Floor Fan', 'price' => '$79.99', 'old' => '$99.99', 'badge' => 'TOP PICK'],
];

$faqs = [
    ['q' => 'How long does the battery last?', 'a' => 'Depending on speed mode, runtime ranges from 4 to 24 hours per charge.'],
    ['q' => 'Is this fan noisy?', 'a' => 'No. The motor is tuned for low-noise operation and comfortable daily use.'],
    ['q' => 'How fast is shipping?', 'a' => 'Orders are processed in 24 hours and typically delivered in 3-7 business days.'],
    ['q' => 'Can I return if I change my mind?', 'a' => 'Yes. We offer a 30-day risk-free return policy for unused items.'],
    ['q' => 'Does it include a charging cable?', 'a' => 'Yes, each fan includes a USB-C charging cable inside the package.'],
];

get_header();
?>

<main>
  <section class="hero">
    <div class="container">
      <div class="top-strip">
        <span>⚡ Fast US shipping</span>
        <span>✅ 30-day guarantee</span>
        <span>⭐ Rated 4.8/5 by 50k+ users</span>
      </div>
      <div class="hero-grid">
        <div>
          <span class="badge" style="background: rgba(255,255,255,.2);">COOL COMFORT • SUMMER SALE</span>
          <h1>Stay Cool<br>Anywhere This Summer</h1>
          <p>Portable fans that combine style, power, and all-day battery life for your desk, beach, commute, and every room in between.</p>
          <div class="hero-actions">
            <a class="btn btn-primary" href="#products">Shop Best Sellers</a>
            <a class="btn" style="background:#fff;color:#0f2340;" href="#faq">Learn More</a>
          </div>
        </div>
        <div class="hero-media">
          <div class="fan-placeholder" aria-hidden="true"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="logo-strip">
    <div class="container logos">
      <span>Forbes</span><span>CNN</span><span>People</span><span>Good Housekeeping</span><span>Wired</span><span>BuzzFeed</span>
    </div>
  </section>

  <section class="section features">
    <div class="container feature-grid">
      <article class="feature-card"><div class="feature-icon">🔋</div><h3>48-Hour Battery</h3><p>High-efficiency cells for long, uninterrupted cooling.</p></article>
      <article class="feature-card"><div class="feature-icon">🌬️</div><h3>Turbo Airflow</h3><p>Powerful output with whisper-quiet performance.</p></article>
      <article class="feature-card"><div class="feature-icon">🧊</div><h3>Pocket-Size</h3><p>Take it anywhere with lightweight portable design.</p></article>
      <article class="feature-card"><div class="feature-icon">🛡️</div><h3>30-Day Guarantee</h3><p>Love it or return it with zero hassle support.</p></article>
    </div>
  </section>

  <section class="section" id="products">
    <div class="container">
      <h2 class="section-title">Our Most Popular Fans</h2>
      <p class="section-subtitle">Fast shipping • Summer-ready cooling • Customer favorites</p>
      <div class="product-grid">
        <?php foreach ($products as $product) : ?>
          <article class="product-card">
            <div class="product-image" aria-hidden="true"></div>
            <div class="product-body">
              <span class="badge" style="background:#fff2e7;color:#d95f00;"><?php echo esc_html($product['badge']); ?></span>
              <p class="product-name"><?php echo esc_html($product['name']); ?></p>
              <div class="price-row"><span class="price"><?php echo esc_html($product['price']); ?></span><span class="old-price"><?php echo esc_html($product['old']); ?></span></div>
              <a href="#" class="btn" style="margin-top:.7rem;background:#17a8e9;color:#fff;width:100%;">Add to Cart</a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section" style="padding-top:0;">
    <div class="container">
      <h2 class="section-title">Shop by Category</h2>
      <p class="section-subtitle">Find the perfect fan for every lifestyle.</p>
      <div class="category-row">
        <article class="category-card"><strong>Handheld Fans</strong></article>
        <article class="category-card"><strong>Neck Fans</strong></article>
        <article class="category-card"><strong>Misting Fans</strong></article>
        <article class="category-card"><strong>Outdoor Fans</strong></article>
      </div>
    </div>
  </section>

  <section class="section highlight">
    <div class="container highlight-wrap">
      <div>
        <span class="badge" style="background:#173261;color:#9fd8ff;">BEST SELLER</span>
        <h2 style="font-size:2rem;margin:.8rem 0;">Turbo Handheld Fan Pro</h2>
        <p>Compact design, premium airflow, and pro-level battery life. The ideal one-page spotlight product section with a strong CTA.</p>
        <ul class="checks">
          <li>Up to 24-hour battery backup</li>
          <li>5 wind speeds + turbo boost</li>
          <li>USB-C quick charging</li>
          <li>Ergonomic anti-slip handle</li>
        </ul>
        <div class="hero-actions">
          <span style="font-size:1.6rem;font-weight:800;">$69.99</span>
          <a class="btn btn-primary" href="#">Add to Cart</a>
        </div>
      </div>
      <div class="hero-media"><div class="fan-placeholder" aria-hidden="true"></div></div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <h2 class="section-title">Cool Moments, Anywhere</h2>
      <p class="section-subtitle">From beach days to office focus, enjoy comfort everywhere.</p>
      <div class="moment-grid">
        <article class="moment-card"><div class="moment-img"></div><div class="product-body"><strong>Beach Days</strong></div></article>
        <article class="moment-card"><div class="moment-img"></div><div class="product-body"><strong>Work Comfort</strong></div></article>
        <article class="moment-card"><div class="moment-img"></div><div class="product-body"><strong>Festivals & Travel</strong></div></article>
      </div>
    </div>
  </section>

  <section class="section" style="background:#f8fbff;">
    <div class="container">
      <h2 class="section-title">Loved by 50,000+ Customers</h2>
      <p class="section-subtitle">⭐⭐⭐⭐⭐ 4.8 average rating</p>
      <div class="review-grid">
        <article class="review-card"><div class="review-stars">★★★★★</div><p>"Surprisingly powerful and lasts all day. My go-to travel fan."</p><strong>Sarah M.</strong></article>
        <article class="review-card"><div class="review-stars">★★★★★</div><p>"The neck fan is a game changer for summer commutes."</p><strong>James R.</strong></article>
        <article class="review-card"><div class="review-stars">★★★★★</div><p>"Quiet enough for meetings and strong enough for outdoors."</p><strong>Emily K.</strong></article>
        <article class="review-card"><div class="review-stars">★★★★★</div><p>"Excellent value. Bought one for everyone in my family."</p><strong>Michael T.</strong></article>
      </div>
    </div>
  </section>

  <section class="sale-bar">
    <div class="container sale-wrap">
      <div>
        <strong>Up to 40% Off - Ends Soon!</strong>
        <div class="small" style="color:#ffe7d5;">Limited-time summer savings on best-selling fans.</div>
      </div>
      <div class="countdown" data-countdown-target="2026-05-15T23:59:59Z">
        <div class="countdown-item"><strong data-days>--</strong><span>Days</span></div>
        <div class="countdown-item"><strong data-hours>--</strong><span>Hours</span></div>
        <div class="countdown-item"><strong data-mins>--</strong><span>Mins</span></div>
        <div class="countdown-item"><strong data-secs>--</strong><span>Secs</span></div>
      </div>
      <a class="btn" style="background:#fff;color:#ef5722;" href="#products">Shop Now</a>
    </div>
  </section>

  <section class="section" id="faq">
    <div class="container" style="max-width: 860px;">
      <h2 class="section-title">Frequently Asked Questions</h2>
      <p class="section-subtitle">Everything you need, in one place.</p>
      <div class="faq-list">
        <?php foreach ($faqs as $item) : ?>
          <article class="faq-item">
            <button class="faq-trigger" type="button"><?php echo esc_html($item['q']); ?></button>
            <p class="faq-answer"><?php echo esc_html($item['a']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section newsletter">
    <div class="container">
      <h2 class="section-title" style="color:#fff;">Get 10% Off Your First Order</h2>
      <p style="margin:.7rem auto 0;max-width:56ch;opacity:.95;">Join our list for exclusive launches, promo drops, and summer cooling tips.</p>
      <form class="newsletter-form" action="#" method="post">
        <input type="email" name="email" placeholder="Enter your email" aria-label="Email">
        <button class="btn btn-primary" type="submit">Subscribe</button>
      </form>
    </div>
  </section>
</main>

<footer class="site-footer">
  <div class="container footer-grid">
    <div><h4>BreezeMax</h4><p>Premium portable fans for every lifestyle. Stay cool, stay comfortable.</p></div>
    <div><h4>Quick Links</h4><p class="small">Products<br>Categories<br>Reviews<br>FAQ</p></div>
    <div><h4>Customer Service</h4><p class="small">Shipping Info<br>Returns & Exchanges<br>Contact Us</p></div>
    <div><h4>Contact</h4><p class="small">+1 (555) 012-8899<br>support@breezemax.co<br>Los Angeles, CA</p></div>
  </div>
  <div class="container" style="margin-top:2rem;"><p class="small">© <?php echo esc_html(gmdate('Y')); ?> BreezeMax. All rights reserved.</p></div>
</footer>

<?php
get_footer();
