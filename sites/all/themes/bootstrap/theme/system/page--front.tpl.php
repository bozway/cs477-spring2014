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

    
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          
            <?php print render($secondary_nav); ?>
          
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    
  </div>
</header>


<div class="main-container container">
  <div id="video-section">
    <img src="<?php print $directory; ?>/img/main.png"/>
    <div id="pulldown">
      <h2>Build relevant products.. Join Bozway!</h2>
      <a href="#dept-section"><strong>View open positions</strong><br/>
      <strong>&#9660;</strong></a>
    </div>
  </div>
  <div class="content-section">
    <div class="row">
      <div class="col-md-6 content">
        <img src="<?php print $directory; ?>/img/img01.jpg" style="width:100%">
      </div>
      <div class="col-md-6 content">
        <h2>Why work at Will Rain IT?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu scelerisque neque. Sed sagittis lectus eget sollicitudin venenatis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>
    </div>
    <hr style="border-top: 5px #794d1c solid">
  </div>
  <div class="content-section">
    <div class="row">
      <div class="col-md-6">
        <h2>Why work at Will Rain IT?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu scelerisque neque. Sed sagittis lectus eget sollicitudin venenatis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>
      <div class="col-md-6" style="text-align:right;">
        <img src="<?php print $directory; ?>/img/img02.jpg" style="width:100%" >
      </div>
    </div>
    <hr style="border-top: 5px #794d1c solid">
  </div>
  <div id="dept-section">
    <div id="dept-section-inner">
      <h3>Now hiring in: </h3>
      <div class="row">
        <div class="col-md-4">
          <a href="software-engineering"><img src="<?php print $directory; ?>/img/dept01.png">
          <strong>Software Engineering</strong></a>
        </div>
        <div class="col-md-4">
          <a href="art-direction"><img src="<?php print $directory; ?>/img/dept03.png">
          <strong>Design/Art Direction</strong></a>
        </div>
        <div class="col-md-4">
          <a href="business-development"><img src="<?php print $directory; ?>/img/dept02.png">
          <strong>Business Development</strong></a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <a href="it-security"><img src="<?php print $directory; ?>/img/dept04.png">
          <strong>IT&Security</strong></a>
        </div>
        <div class="col-md-4">
          <a href="project-management"><img src="<?php print $directory; ?>/img/dept05.png">
          <strong>Project Management</strong></a>
        </div>
        <div class="col-md-4">
          <a href="pr-marketing"><img src="<?php print $directory; ?>/img/dept06.png">
          <strong>PR/Marketing</strong></a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <a href="all-positions">View all open positions &raquo;</a>
        </div>
      </div>

    </div>
  </div>
</div>
<footer class="footer container">
  <?php print render($page['footer']); ?>
</footer>
