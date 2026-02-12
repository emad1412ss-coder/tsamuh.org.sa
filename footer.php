<?php
if (!defined('ABSPATH')) { exit; }
?>
</main>
<footer class="footer">
  <div class="container">
    <div>© <?php echo date('Y'); ?> - <?php bloginfo('name'); ?> | جميع الحقوق محفوظة</div>
    <small>
      <?php
        $phone = get_theme_mod('hc_phone','');
        $email = get_theme_mod('hc_email','');
        if ($phone || $email) {
          echo 'التواصل: ';
          if ($phone) echo esc_html($phone);
          if ($phone && $email) echo ' — ';
          if ($email) echo esc_html($email);
        }
      ?>
    </small>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
