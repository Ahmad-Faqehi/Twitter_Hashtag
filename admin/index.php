<?php $page_title = "الصفحة الرئيسية"; ?>
<?php include "includes/header.php" ?>
<?php if(!$session->is_signed_in()){redirect("login.php");} ?>
<?php 
$user = new User(); 
$hashtag = new Hashtag();
?>
<body id="page-top" class="sidebar-toggled">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <!-- Sidebar -->
   <?php include "includes/sidebar.php" ?>
   <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

      <!-- Topbar -->
        <?php include "includes/topbar.php" ?>
      <!-- End of Topbar -->


       <!-- Begin Page Content -->
        <?php //include "includes/content.php" ?>
        
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800 Font-tajawal text-right ">لوحة التحكم</h1>
</div>

<!-- Content Row -->
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-md font-weight-bold text-success Font-tajawal text-uppercase mb-1"> أجمالي عدد الهاشتاقات </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $hashtag->total_numbers(); ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-hashtag fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
          <div class="text-md font-weight-bold text-primary Font-tajawal text-uppercase mb-1"> أجمالي عدد المستخدمين </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $user->total_numbers();  ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-users fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<!-- Content Row -->
<div class="row">
<div class="col-xl-12 col-lg-12">

<div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-info Font-tajawal">أخر هاشتاقات مضافة</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="hashtag.php">عرض الجدول كامل</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                <div class="table-responsive">
        <table class="table text-center" id="dataTable" width="100%" cellspacing="0">
          <thead class="Font-tajawal">
            <tr>
                <th>#</th>
                <th class="font-weight-bold">عنوان الهاشتاق</th>
                <th class="font-weight-bold">التغريدة الاولى</th>
            </tr>
        </thead>  
        <tbody>
          <?php
          
          $i=1;
          foreach($hashtag->find_last_five() as $hashtag){ 
            if($i > 5){break;} ?>
            <tr>
                <th><?php echo $i ?></th>
                <th><?php echo $hashtag->hashtag_name ?>#</th>
                <th><a href="view.php?id=<?php echo $hashtag->id ?>" class="text-info">عرض</a></th>
                <th><a href="edit-hashtag.php?id=<?php echo $hashtag->id ?>" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a></th>
                <th><a href="delete_hashtag.php?id=<?php echo $hashtag->id ?>" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a></th>
            </tr>
          <?php  $i++; }
            
           ?>
        </tbody>
        </table>
    </div>

    <div class="text-center p-2">
    <a href="add-hashtag.php" class="btn btn-info btn-icon-split"><span class="icon text-white-50"><i class="fas fa-plus-circle"></i></span>
    <span class="text Font-tajawal">أضافة هاشتاق جديد</span>
      </a>
   </div>


   <br>

  </div>
  </div>



  </div>

</div>



</div>

        <!-- /.container-fluid -->


      </div>
      <!-- End of Main Content -->


      <!-- Footer -->
      <?php include "includes/footer.php" ?>
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

    <!-- Logout Modal-->   <!-- Scroll to Top Button-->
<?php include "includes/logoutmessge.php" ?>
  <!-- /Logout Modal-->   <!-- /Scroll to Top Button-->

  <!-- Secript Write here -->
<?php include "includes/footsec.php" ?>
 <!--/ Secript Write here -->
</body>

</html>
