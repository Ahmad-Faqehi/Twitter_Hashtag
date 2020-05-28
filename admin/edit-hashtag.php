<?php $page_title = "الصفحة تعديل الهاشتاق"; ?>
<?php include "includes/header.php" ?>

<?php 

if(empty($_GET["id"])){
  redirect("index.php");
}

$hashtag = Hashtag::find_by_id($_GET["id"]);

if(!$hashtag){
  
  redirect("index.php");
}

if(isset($_POST["update"])){

  
  $hashtag_title = $_POST["title"];
  $hashtag_title =  $hashtag->delete_symbol($hashtag_title);

  $hashtag->hashtag_name = $hashtag_title;
  $hashtag->code = $_POST["code"];
  $hashtag->explains = $_POST["explain"];
  $hashtag->code2 = $_POST["code2"];

  $hashtag->save();
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
       <div class="container-fluid">

       <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-info Font-tajawal text-right">نموذج تعديل على هاشتاق</h6>
                </div>
                <div class="card-body">
                
                <form action="" method="post" class="text-right">

                <label for="title" class="pull-right">عنوان الهاشتاق</label>
                <div class="form-group">
                      <input type="text" name="title" class="form-control form-control-user" value="<?php echo $hashtag->hashtag_name; ?>">
                    </div>

                    <div class="form-group p-4 ">
                        <label for="code" class="pull-right font-weight-bold">الحصول على كود التغريدة؟<b class="btn-link" id="show-input"> نعم</b></label>
                        <input type="url" class="form-control form-control-user" id="gen1" placeholder="رابط التغريدة">
                        <a href="#" id="btn-go1" class="btn btn-primary p-1 m-1" target="_blank"><i class="fas fa-code gen-btn" ></i> الذهاب </a>

                    </div>

                    <div class="form-group">
                    <label for="code" class="pull-right">كود التغريدة</label>
                      <textarea name="code" class="form-control form-control-user" cols="30" rows="7"><?php echo $hashtag->code; ?></textarea>
                    </div>

                    <div class="form-group">
                    <label for="code2" class="pull-right">كود التغريدة الاولى <small> (أتركه فارغ اذا لم يجد) </small></label>
                      <textarea name="code2" class="form-control form-control-user" cols="30" rows="7"><?php echo $hashtag->code2; ?></textarea>
                    </div>

                    <div class="form-group">
                    <label for="explain" class="pull-right">شرح قصير <small> ( أختياري ) </small></label>
                      <textarea name="explain" class="form-control form-control-user" cols="30" rows="3"><?php echo $hashtag->explains; ?></textarea>
                    </div>
                    

                    <input type="submit" name="update" value="تعديل" class="btn btn-info btn-block">

                </form>

                
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
