<?php get_header(); ?>

<section class="hero">
  <h1>نمدّ يد العون… ونصنع أثرًا</h1>
  <p>جمعية خدمات إنسانية لدعم الأسر المحتاجة عبر مبادرات واضحة وتقارير شفافة.</p>
  <a class="btn" href="<?php echo humanity_charity_get_donate_url(); ?>">تبرع الآن</a>
</section>

<section class="grid">
  <div class="card" style="grid-column: span 4;">
    <h3>مشاريعنا</h3>
    <p class="small">مساعدات غذائية • كفالات • ترميم منازل • سلال موسمية</p>
  </div>
  <div class="card" style="grid-column: span 4;">
    <h3>الشفافية</h3>
    <p class="small">نشارك تقارير وإنجازات موثقة لتعزيز الثقة.</p>
  </div>
  <div class="card" style="grid-column: span 4;">
    <h3>تطوع معنا</h3>
    <p class="small">ساهم بوقتك ومهاراتك لصناعة أثر أكبر.</p>
  </div>

  <div class="card" style="grid-column: span 6;">
    <h3>إحصائيات سريعة</h3>
    <div class="grid" style="margin-top:10px">
      <div class="stat" style="grid-column: span 6;">
        <div class="num">+1200</div>
        <div class="lbl">مستفيد خلال السنة</div>
      </div>
      <div class="stat" style="grid-column: span 6;">
        <div class="num">45</div>
        <div class="lbl">مشروع منفّذ</div>
      </div>
      <div class="stat" style="grid-column: span 6;">
        <div class="num">18</div>
        <div class="lbl">شريك داعم</div>
      </div>
      <div class="stat" style="grid-column: span 6;">
        <div class="num">شفاف</div>
        <div class="lbl">تقارير دورية</div>
      </div>
    </div>
    <p class="small" style="margin-top:10px">* عدّل الأرقام من داخل هذه الصفحة (القالب بسيط).</p>
  </div>

  <div class="card" style="grid-column: span 6;">
    <h3>آخر الأخبار</h3>
    <div class="posts">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post-item">
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
        </div>
      <?php endwhile; else: ?>
        <p class="small">لا توجد أخبار حالياً.</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
