<?php include "../includes/init.php"; ?>

<?php
$users = new User();
$password1 = $_POST["password"];
$password2 = $_POST["repassword"];

if($password1 !== $password2){
    echo '<div class="bg-gradient-danger p-2 m-1 text-center text-lg text-light">كلمة المرور غير متطابقة</div>';
}else{

    $users->username = $_POST["username"];
    $users->email = $_POST["email"];
    $users->password = password_hash($_POST["password"],PASSWORD_DEFAULT) ;
    $users->user_roal = $_POST["roal"];

    $users->save();
    echo '<div class="bg-gradient-success p-2 m-1 text-center text-lg text-light">تمت الاضافة بنجاح</div>';


}