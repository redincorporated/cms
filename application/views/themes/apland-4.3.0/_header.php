<!-- Header Area-->
<header class="header_area">
  <div class="main_header_area">
    <div class="container">
      <div class="classy-nav-container breakpoint-off">
        <nav class="classy-navbar justify-content-between" id="aplandNav">
          <!-- Logo--><a class="nav-brand" href="public/themes/apland-4.3.0/index.html"><img src="public/themes/apland-4.3.0/img/core-img/logo.png" alt=""></a>
          <!-- Navbar Toggler-->
          <div class="classy-navbar-toggler"><span class="navbarToggler"><span></span><span></span><span></span></span></div>
          <!-- Menu-->
          <div class="classy-menu">
            <!-- Close Button-->
            <div class="classycloseIcon">
              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
            </div>
            <!-- Nav-->
            <div class="classynav">
              <ul id="corenav">
                <li><?php echo anchor('.', 'Home'); ?></li>
                <?php foreach (get_pages() as $page): ?>
                  <li><?php echo anchor('page/' . $page->id, $page->title); ?></li>
                <?php endforeach; ?>
                <li><?php echo anchor('blog', 'Blog'); ?></li>
                <li><?php echo anchor('contact', 'Contact'); ?></li>
              </ul>
              <!-- Login Button-->
              <div class="login-btn-area ml-5 mt-5 mt-lg-0"><a class="btn apland-btn" href="public/themes/apland-4.3.0/#">Get Started</a></div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>