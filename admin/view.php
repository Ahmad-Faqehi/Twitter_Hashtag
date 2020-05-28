<?php $page_title = "مشاهدة كود التغريدة"; ?>
<?php include "includes/header.php" ?>

<?php 

if(empty($_GET["id"])){
    redirect("index.php");
  }
  
  $hashtag = Hashtag::find_by_id($_GET["id"]);
  
  if(!$hashtag){
    
    redirect("index.php");
  }


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
        
        <!-- /.container-fluid -->
<div class="container-fluid">

            <div class="card mb-4">
                <div class="card-header font-weight-bold Font-tajawal text-info text-right">
                 <?php echo $hashtag->hashtag_name . "#"?>
                </div>
                <div class="text-center font-weight-bold text p-2" > التغريدة 1</div>
                <div class="border-bottom-info" ></div>
                <p class="h5 text-center text p-1 m-1"style="line-height: 1.6;" > <?php echo $hashtag->explains ?> </p>
                <div class="card-body text-right">
                 <?php
                 
                 echo $hashtag->code;

                 ?>
                </div>
            </div>

            <?php if(!empty($hashtag->code2)){?>

                <div class="card mb-4">
                <div class="text-center font-weight-bold text p-2" > التغريدة 2</div>
                <div class="border-bottom-info" ></div>
                <div class="card-body text-right">
                 <?php
                 
                 echo $hashtag->code2;

                 ?>
                </div>
            </div>

            <?php } ?>

</div>

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
