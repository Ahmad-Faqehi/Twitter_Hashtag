<?php $page_title = "صفحة تعديل على مستخدم"; ?>
<?php include "includes/header.php" ?>

<?php 
if(empty($_GET["id"])){
  redirect("users.php");
}

$user = User::find_by_id($_GET["id"]);
if(!$user){
  redirect("users.php");
}
$msg = "";

if(isset($_POST["update"])){

  if(empty($_POST["password"]) || empty($_POST["re-password"])){

    $user->username = $_POST["username"];
    $user->email = $_POST["email"];
    $user->user_roal = $_POST["roal"];

    $user->save();
    redirect("users.php");
  }elseif($_POST["password"] !== $_POST["re-password"]){
      $msg = '<div class="bg-gradient-danger p-2 m-1 text-center text-lg text-light">كلمة المرور غير متطابقة</div>';
    }else{

    $user->username = $_POST["username"];
    $user->email = $_POST["email"];
    $user->password = password_hash($_POST["password"],PASSWORD_DEFAULT) ;
    $user->user_roal = $_POST["roal"];
    
    $user->save();
    redirect("users.php");

    }

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
        <?php echo $msg ?>
       <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-info Font-tajawal text-right">نموذج تعديل المستخدم</h6>
                </div>
                <div class="card-body">
                
                <form action="" method="post" class="text-right">

                <label for="username" class="pull-right">أسم المستخدم</label>
                <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" value="<?php echo $user->username; ?>">
                    </div>

                    <label for="email" class="pull-right">الائميل</label>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control form-control-user" required value="<?php echo $user->email; ?>">
                    </div>

                    <div class="form-group">
                    <label for="password" class="pull-right">كلمة السر <small>(أتركه فارغ اذا لا تريد التغير)</small></label>
                       <input type="password" name="password" class="form-control form-control-user">
                    </div>

                    <div class="form-group">
                    <label for="re-password" class="pull-right">أعادة كلمة السر <small>(أتركه فارغ اذا لا تريد التغير)</small></label>
                       <input type="password" name="re-password" class="form-control form-control-user">
                    </div>

                    <div class="form-group text-center" >
                    <label class="radio"><input type="radio" name="roal" value="1" <?php if($user->user_roal == 1) : echo "checked"; endif; ?>> مدير </label> 	&nbsp;
                    <label class="radio"><input type="radio" name="roal" value="2" <?php if($user->user_roal != 1) : echo "checked"; endif; ?>> ليس مدير </label>
                    
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
