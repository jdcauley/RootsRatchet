<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->

  <?php get_template_part('templates/header-top-navbar'); ?>

  <div class="content">
    <div class="content-padded">
      <div class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </div><!-- /.main -->
  </div>
      <ul class="list inset">
        <li>
          <a href="http://maker.github.com/ratchet/">
            <strong>Ratchet documentation</strong>
            <span class="chevron"></span>
          </a>
        </li>
        <li>
          <a href="http://www.github.com/maker/ratchet/">
            <strong>Ratchet on Github</strong>
            <span class="chevron"></span>
          </a>
        </li>
        <li>
          <a href="https://groups.google.com/forum/#!forum/goratchet">
            <strong>Ratchet Google group</strong>
            <span class="chevron"></span>
          </a>
        </li>
        <li>
          <a href="http://www.twitter.com/GoRatchet">
            <strong>Ratchet on Twitter</strong>
            <span class="chevron"></span>
          </a>
        </li>
      </ul>
      <?php if (roots_display_sidebar()) : ?>
      <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
        <?php include roots_sidebar_path(); ?>
      </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div>
  </div>
  
  <nav class="bar-tab">
    <ul class="tab-inner">
      <li class="tab-item active">
        <a href="">
          <img class="tab-icon" src="assets/img/icon-home.png">
          <div class="tab-label">Label</div>
        </a>
      </li>
      <li class="tab-item">
        <a href="">
          <img class="tab-icon" src="assets/img/icon-profile.png">
          <div class="tab-label">Label</div>
        </a>
      </li>
      <li class="tab-item">
        <a href="">
          <img class="tab-icon" src="assets/img/icon-messages.png">
          <div class="tab-label">Label</div>
        </a>
      </li>
      <li class="tab-item">
        <a href="">
          <img class="tab-icon" src="assets/img/icon-hamburger.png">
          <div class="tab-label">Label</div>
        </a>
      </li>
      <li class="tab-item">
        <a href="">
          <img class="tab-icon" src="assets/img/icon-settings.png">
          <div class="tab-label">Label</div>
        </a>
      </li>
    </ul>
  </nav>
  
</div>






  <?php get_template_part('templates/footer'); ?>

</body>
</html>
