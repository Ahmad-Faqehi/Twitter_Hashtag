<?php include("includes/init.php"); ?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
$the_message = "";

if(isset($_POST["submit"]) && !empty($_POST["email"])){


//    $email =  $database->escape_string($_POST["email"]);
    $email =  $database->escape_string($_POST["email"]);
    $users = new User();
    $user = $users->check_email($email);

    if($user):

        $token = $users->create_token($email);

        require_once "../PHPMailer-master/src/PHPMailer.php";
        require_once "../PHPMailer-master/src/Exception.php";

        $mail = new PHPMailer();
        $mail->addAddress($email);
        $mail->setFrom("NoReplay@lop72.com", "Lop72");
        $mail->Subject = "أستعادة كلمة مرور";
        $mail->isHTML(true);
        $mail->Body = "
	            Hi,<br><br>
	            
	            لقد طلبت أعادة تعين لكلمة المرور. الرجاء الضفط على الرابط التالي<br>
	            <a href='
	            http://livern.890m.com/new-password.php?email=$email&token=$token
	            '>http://livern.890m.com/new-password.php?email=$email&token=$token</a><br><br>
	            
	            موقع سالفة هاشتاق,<br>
	        ";
        if($mail->send()){
            $the_message = "<div class='text-success font-weight-bold' > تم أرسال الطلب الرجاء الذهاب الى الائميل سوف تجد رسالة طلب أستعادة كلمة مرور. اذا لم تجدها قم بتاكد من الرسائل الموجودة في السبام </div>";
        }else{
            $the_message = "<div class='text-danger font-weight-bold m-3' > لم يتم ارسال الائميل لسبب ما غير معروف </div>";
        }

        else :
        $the_message = "<div class='text-danger font-weight-bold m-3' > عذراَ الائميل غير مسجل بعد </div>";
    endif;

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

    <title>نسيت كلمة المرور</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/mystyle.css" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-6 col-md-6 offset">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h3 text-gray-900 mb-4 Font-tajawal font-weight-bold ">طلب أستعادة كلمة مرور</h1>
                                    <?php echo $the_message ?>
                                </div>
                                <form action="" class="user" method="POST" >
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control" name="email"  id="exampleInputEmail" aria-describedby="emailHelp" placeholder="email..." required>
                                    </div>
                                    <input type="submit" name="submit" value="طلب أستعادة كلمة مرور" class="btn btn-primary font-weight-bold Font-tajawal btn-block">
                                </form>
                                <hr>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="register.php">تسجيل حساب جديد</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="login.php">تسجيل دخول</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>
