<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion toggled" id="accordionSidebar">
<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fab fa-bitbucket"></i>
  </div>
  <div class="sidebar-brand-text mx-3">سالفة هاشتاق</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">
<!-- Nav Item - Dashboard -->
<li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == "index.php") : echo "active"; endif; ?>">
  <a class="nav-link" href="index.php">
    <i class="fas fa-fw fa-home"></i>
    <span>الرئيسية</span></a>
</li>
<!-- <i class="fal fa-"></i> -->
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading font-weight-bold Font-tajawal">
  الخيارات
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == "hashtag.php") : echo "active"; endif; ?> ">
  <a class="nav-link collapsed" href="hashtag.php" >
    <i class="fas fa-fw fa-hashtag "></i>
    <span>الهاشتاقات</span>
  </a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == "users.php") : echo "active"; endif; ?>">
<a class="nav-link collapsed" href="users.php" >
    <i class="fas fa-fw fa-users "></i>
    <span>الاعضاء</span>
  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
  </div>
</li>

<li class="nav-item">
<a class="nav-link collapsed" href="../" >
    <i class="fas fa-fw fa-globe "></i>
    <span>عودة الى الموقع</span>
  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
  </div>
</li>

<!-- Divider -->
<!--<hr class="sidebar-divider">-->

<!-- Heading -->
<!--<div class="sidebar-heading Font-tajawal">-->
<!--  قريبا-->
<!--</div>-->

<!-- Nav Item - Pages Collapse Menu -->
<!--<li class="nav-item">-->
<!--  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">-->
<!--    <i class="fas fa-fw fa-folder"></i>-->
<!--    <span>أضافات</span>-->
<!--  </a>-->
<!--</li>-->

<!-- Nav Item - Charts -->
<!--<li class="nav-item">-->
<!--  <a class="nav-link" href="#">-->
<!--    <i class="fas fa-fw fa-chart-area"></i>-->
<!--    <span>أحصائيات</span></a>-->
<!--</li>-->


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
