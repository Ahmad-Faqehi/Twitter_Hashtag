<?php $page_title = "حذف مستخدم"; ?>
<?php include("includes/header.php"); ?>
<?php 

if(empty($_GET["id"])){
    redirect("users.php");
  }
  
  $user = User::find_by_id($_GET["id"]);
  
  if(!$user){
    
    redirect("users.php");
  }else{

    $user->delete();
    redirect("users.php");

  }

  redirect("users.php");

?>