<?php $page_title = "الاعضاء"; ?>
<?php include "includes/header.php" ?>
<?php 

$users = new User();

$msg = "";
if(isset($_POST["add"])){

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
        
        <div class="container-fluid">

       <div id="msg">

       </div>
        
        <div class="row">
    <div class="col-xl-12 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
          <div class="text-md font-weight-bold text-info Font-tajawal text-uppercase mb-1"> أجمالي عدد المستخدمين </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $users->total_numbers();  ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-users fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>

            <script>
                $(document).ready(function(){

                    ShowUsers();

                 // show users
                    function ShowUsers() {
                        $.ajax({
                            url: "ajax/show-users.php",
                            type: "POST",
                            success: function (data) {
                                if (!data.error) {
                                    $('#show-users').html(data);
                                }

                            }
                        });
                    }  // end show users

                    // add users
                    $('#form-add-user').submit(function (evt) {

                        evt.preventDefault();
                        var postData = $(this).serialize();
                        var url = $(this).attr('action');

                        $.post(url, postData, function(msg){

                            $('#msg').html(msg);
                            ShowUsers();
                            //updateCars();
                        });

                    });



                }); // doc end here

            </script>

  <div class="card mb-4">
    <div class="card-header Font-tajawal">
         بيانات المستخدمين
         </div>
         <div class="card-body">
        <table class="table">
          <tbody id="show-users">

            
          </tbody>
          
        </table>

        <div class="text-center p-1">
    <div id="gro" class="btn btn-info btn-icon-split"><span class="icon text-white-50"><i class="fas fa-plus-circle"></i></span>
    <span class="text Font-tajawal">أضافة مستخدم</span>
            </div>
   </div>
  </div>
  </div>
            
            
      <!-- Collapsable Card Example -->
      <div class="card shadow mb-4" id="adduser">
      <!-- Card Header - Accordion -->
      <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
        <h6 class="m-0 font-weight-bold text-primary Font-tajawal">أضافة مستخدم جديد</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div   class="collapse show" id="collapseCardExample">
        <div class="card-body" >
         <form id="form-add-user" action="ajax/add-users.php" method="post">

         <div class="form-group">
            <input type="text" name="username" class="form-control form-control-user" placeholder="Username" required>
            </div>

             <div class="form-group">
                 <input type="email" name="email" class="form-control form-control-user" placeholder="Email.." required>
             </div>

            <div class="form-group">
            <input type="password" name="password" class="form-control form-control-user" placeholder="Password" required>
            </div>

            <div class="form-group">
            <input type="password" name="repassword" class="form-control form-control-user" placeholder="Re-Password" required>
            </div>

            <div class="form-group text-center">

            <label class="radio"><input type="radio" name="roal" value="1" checked> مدير </label> 	&nbsp;

            <label class="radio"><input type="radio" name="roal" value="2"> ليس مدير </label>

            </div>

            <input type="submit" value="أضافة" class="btn btn-primary btn-block">

         </form>
        </div>
      </div>
    </div>

    <script>
 $("#adduser").hide();
  $(document).ready(function(){
   $("#gro").click(function(event){
    $("#adduser").show();
   });
 });
</script>


        </div> <!-- /.container-fluid -->


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
