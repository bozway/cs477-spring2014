<header id="navbar" role="banner" class="">
  <div class="container">
    <div class="navbar-header">
      <?php if ($logo): ?>
      <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
      <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>

      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          
            <?php print render($secondary_nav); ?>
          
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>


<div class="main-container container">
  <div id="video-section">
    <a id="play-btn" href="#"></a>
    <a id="view-btn" href="node/8">View all open positions &raquo;</a>
  </div>
  <div class="content-section">
    <div class="row">
      <div class="col-md-6 content">
        <img src="<?php print $directory; ?>/images/img.jpg" style="width:100%">
      </div>
      <div class="col-md-6 content">
        <h2>Why work at Will Rain IT?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu scelerisque neque. Sed sagittis lectus eget sollicitudin venenatis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>
    </div>
  </div>
  <div class="content-section">
    <div class="row">
      <div class="col-md-6">
        <h2>Why work at Will Rain IT?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu scelerisque neque. Sed sagittis lectus eget sollicitudin venenatis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>
      <div class="col-md-6" style="text-align:right;">
        <img src="<?php print $directory; ?>/images/img.jpg" style="width:100%" >
      </div>
    </div>
  </div>
  <hr/>
  <h4>Departments in Will Rain IT</h4>
  <div id="dept-section">
    <div id="dept-section-inner">
      <div class="row">
        <div class="col-md-4">
          <a href="node/3"><img src="<?php print $directory; ?>/images/img.jpg"></a>
          Software Engineering
        </div>
        <div class="col-md-4">
          <a href="node/5"><img src="<?php print $directory; ?>/images/img.jpg"></a>
          Business Development
        </div>
        <div class="col-md-4">
          <a href="node/6"><img src="<?php print $directory; ?>/images/img.jpg"></a>
          PR&Marketing
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <a href="#"><img src="<?php print $directory; ?>/images/img.jpg"></a>
          Product Management
        </div>
        <div class="col-md-4">
          <a href="#"><img src="<?php print $directory; ?>/images/img.jpg"></a>
          IT&Security
        </div>
        <div class="col-md-4">
          <a href="#"><img src="<?php print $directory; ?>/images/img.jpg"></a>
          Design&Art Direction
        </div>
      </div>

    </div>
  </div>
</div>
<footer class="footer container">
  <?php print render($page['footer']); ?>
</footer>
