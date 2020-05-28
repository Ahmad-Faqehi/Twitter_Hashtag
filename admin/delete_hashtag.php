<?php $page_title = "حذف هاشتاق"; ?>
<?php include("includes/header.php"); ?>
<?php 

if(empty($_GET["id"])){
    redirect("index.php");
  }
  
  $hashtag = Hashtag::find_by_id($_GET["id"]);
  
  if(!$hashtag){
    
    redirect("index.php");
  }else{

    $hashtag->delete();
    redirect("index.php");

  }

  redirect("index.php");

?>