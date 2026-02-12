<?php
/*
Template Name: Projects Page (مشاريعنا)
*/
get_header(); ?>
<h2 class="page-title">مشاريعنا</h2>
<div class="content">
  <p>هنا تقدر تعرض مشاريع الجمعية بشكل واضح. تقدر تضيف صور وروابط تبرع لكل مشروع.</p>
  <div class="grid" style="margin-top:14px">
    <div class="card" style="grid-column: span 4;">
      <h3>سلال غذائية</h3>
      <p class="small">توفير سلال غذائية للأسر المحتاجة.</p>
      <a class="btn" href="<?php echo humanity_charity_get_donate_url(); ?>">تبرع</a>
    </div>
    <div class="card" style="grid-column: span 4;">
      <h3>ترميم منازل</h3>
      <p class="small">تحسين مساكن الأسر المستحقة.</p>
      <a class="btn" href="<?php echo humanity_charity_get_donate_url(); ?>">تبرع</a>
    </div>
    <div class="card" style="grid-column: span 4;">
      <h3>كفالة أيتام</h3>
      <p class="small">كفالة شهرية لدعم الأيتام.</p>
      <a class="btn" href="<?php echo humanity_charity_get_donate_url(); ?>">تبرع</a>
    </div>
  </div>
</div>
<?php get_footer(); ?>
