<?php
/*
Template Name: Donate Page (تبرع)
*/
get_header();
$donate_url = get_theme_mod('hc_donate_url','');
?>
<h2 class="page-title">التبرع</h2>
<div class="content">
  <p>اختر طريقة التبرع المناسبة لك:</p>

  <?php if ($donate_url): ?>
    <div class="notice">
      <strong>رابط التبرع:</strong>
      <a href="<?php echo esc_url($donate_url); ?>" target="_blank" rel="noopener">اضغط هنا للتبرع</a>
    </div>
    <p class="small" style="margin-top:10px">* تم ضبط الرابط من: المظهر → تخصيص → إعدادات الجمعية.</p>
  <?php else: ?>
    <div class="notice">
      <strong>لم يتم وضع رابط تبرع بعد.</strong>
      <div class="small">اذهب إلى: المظهر → تخصيص → إعدادات الجمعية → رابط زر التبرع.</div>
    </div>
  <?php endif; ?>

  <hr>
  <h3>تحويل بنكي (مثال)</h3>
  <p class="small">اسم الحساب: جمعية ____</p>
  <p class="small">الآيبان: SA00 0000 0000 0000 0000 0000</p>

  <hr>
  <h3>تبرع شهري</h3>
  <p class="small">يمكنك تخصيص تبرع شهري لدعم المشاريع المستمرة.</p>
</div>
<?php get_footer(); ?>
