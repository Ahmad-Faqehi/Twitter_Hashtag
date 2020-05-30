<?php require_once "includes/init.php"?>
<?php

if (isset($_GET['email']) && isset($_GET['token'])) {
$msg = "";
    $email =  $database->escape_string($_GET["email"]);
    $token =  $database->escape_string($_GET["token"]);

    $sql =  $database->query("SELECT id FROM users WHERE
			email='$email' AND token='$token' AND token<>'' AND token_end > NOW()");
    if ($sql->num_rows > 0) {

        if(isset($_POST["update"])){

            $password = $database->escape_string($_POST["password"]);
            $password_re = $database->escape_string($_POST["re-password"]);

            if($password == $password_re){
                $newPasswordEncrypted = password_hash($password, PASSWORD_DEFAULT);
                $database->query("UPDATE users SET token='', password = '$newPasswordEncrypted' WHERE email='$email'");
                session_start();
                $_SESSION['change_pass'] = "done";
                redirect("donePass.php");
            }else{
                $msg = '<div class="bg-gradient-danger p-2 m-1 text-center text-lg text-light">كلمة المرور غير متطابقة</div>';
            }


        }

        ?>



        <!DOCTYPE html>
        <html lang="ar">


        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">

            <title>صفحة تعديل على مستخدم</title>

            <!-- Custom fonts for this template-->
            <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@700&display=swap" rel="stylesheet">
            <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="js/process.js"></script>

            <!-- Custom styles for this template-->
            <link href="css/mystyle.css" rel="stylesheet">
            <link href="css/sb-admin-2.min.css" rel="stylesheet">

        </head>
        <body id="page-top" class="sidebar-toggled">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion toggled" id="accordionSidebar">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fab fa-bitbucket"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">سالفة هاشتاق</div>
                </a>

                <!-- Divider -->

                <!-- Nav Item - Dashboard -->

                <!-- <i class="fal fa-"></i> -->
                <!-- Divider -->

                <!-- Heading -->
                <div class="sidebar-heading font-weight-bold Font-tajawal">
                    الخيارات
                </div>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3" style="color: #36b9cc">
                            <i class="fa fa-bars"></i>
                        </button>

                    </nav>
                    <!-- End of Topbar -->


                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <div class="card shadow mb-4">
                            <?php echo  $msg ?>
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-info Font-tajawal text-center">أعادة تعين كلمة السر</h6>
                            </div>
                            <div class="card-body">

                                <form action="" method="post" class="text-right">

                                    <div class="form-group">
                                        <label for="password" class="pull-right">كلمة السر</label>
                                        <input type="password" name="password" class="form-control form-control-user" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="re-password" class="pull-right">أعادة كلمة السر</label>
                                        <input type="password" name="re-password" class="form-control form-control-user" required>
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

                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; سالفة هاشتاق 2020</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Logout Modal-->   <!-- Scroll to Top Button-->


        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>


        <!-- Secript Write here -->
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script> <!--/ Secript Write here -->
        </body>

        </html>

    <?php } redirect("login.php"); } redirect("login.php"); ?>