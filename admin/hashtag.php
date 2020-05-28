<?php $page_title = "جميع الهاشتاقات"; ?>
<?php include "includes/header.php" ?>
<?php $hashtags = new Hashtag(); ?>
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
      
       <!-- Content Row -->
       <div class="container-fluid">

       <div class="row">
       <div class="col-lg-12">

                     <!-- Collapsable Card Example -->
                <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-info Font-tajawal ">الهاشتاقات الموجودة الان</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div   class="collapse show" id="collapseCardExample">
                  <div class="card-body">

              <div class="table-responsive">
                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    
                    <tr>
                      <th>#</th>
                      <th>عنوان الهاشتاق</th>
                      <th>التغريدة الاولى</th>
                    </tr>
                   
                  </thead>
                  <tbody>
                  <?php foreach($hashtags->find_all() as $hashtag) : ?>
                    <tr>
                      <td><?php echo $hashtag->id ?></td>
                      <td><?php echo $hashtag->hashtag_name ?>#</td>
                      <td><a href="view.php?id=<?php echo $hashtag->id  ?>" class="text-info">عرض</a></td>
                      <th><a href="edit-hashtag.php?id=<?php echo $hashtag->id ?>" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a></th>
                      <th><a href="delete_hashtag.php?id=<?php echo $hashtag->id ?>" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a></th>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
                  
                  </div>
                </div>
              </div>

       </div>



       </div>

       <div class="col-xl-12 col-md-6 mb-4">
       <div class="text-center p-2">
    <a href="add-hashtag.php" class="btn btn-info btn-icon-split"><span class="icon text-white-50"><i class="fas fa-plus-circle"></i></span>
    <span class="text Font-tajawal">أضافة هاشتاق جديد</span>
      </a>
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
