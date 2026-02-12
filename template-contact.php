<?php
/*
Template Name: Contact Page (تواصل)
*/
get_header();
$phone = get_theme_mod('hc_phone','');
$email = get_theme_mod('hc_email','');
?>
<h2 class="page-title">تواصل معنا</h2>
<div class="content">
  <p>نسعد بتواصلكم لأي استفسار أو اقتراح.</p>
  <ul>
    <?php if ($phone): ?><li><strong>الهاتف:</strong> <?php echo esc_html($phone); ?></li><?php endif; ?>
    <?php if ($email): ?><li><strong>البريد:</strong> <?php echo esc_html($email); ?></li><?php endif; ?>
    <?php if (!$phone && !$email): ?><li class="small">ضع بيانات التواصل من: المظهر → تخصيص → إعدادات الجمعية.</li><?php endif; ?>
  </ul>
  <hr>
  <p class="small">لإضافة نموذج مراسلة: ثبّت WPForms ثم ضع الشورت كود هنا.</p>
  <div class="notice"><code>[wpforms id="123"]</code></div>
</div>
<?php get_footer(); ?>
